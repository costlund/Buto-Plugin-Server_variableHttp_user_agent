<?php
class PluginServer_variableHttp_user_agent{
  /**
   * 
   */
  private $session_path = 'plugin/server_variable/http_user_agent';
  /**
   * page
   */
  public function page_test(){
    /**
     * unset session
     */
    wfUser::unsetSession($this->session_path);
    /**
     * set session
     */
    if(!wfUser::getSession()->get($this->session_path)){
      /**
       * 
       */
      $data = $this->getData();
      /**
       * 
       */
      $this->setSession($data);
    }
    /**
     * 
     */
    wfHelp::print(wfUser::getSession()->get($this->session_path));
  }
  /**
   * method
   */
  private function getData(){
    /**
     * 
     */
    wfPlugin::includeonce('browser/detection_v1');
    $browser = new PluginBrowserDetection_v1();
    /**
     * http_user_agent
     */
    $data = new PluginWfArray();
    $data->set('http_user_agent', wfServer::getHttpUserAgent());
    /**
     * get browser
     */
    $get_browser = new PluginWfArray($browser->get_browser($data->get('http_user_agent')));
    /**
     * browser, os
     */
    $data->set('browser_name', $get_browser->get('browser_name'));
    $data->set('os_name', $get_browser->get('os_name'));
    /**
     * webview
     */
    $data->set('webview', false);
    if(strstr($data->get('http_user_agent'), "; wv)")){
      $data->set('webview', true);
    }
    $data->set('web_tool', 'Browser');
    if($data->get('webview')){
      $data->set('web_tool', 'Webview');
    }
    /**
     * 
     */
    return $data;
  }
  private function setSession($data){
    wfUser::setSession($this->session_path.'/data', $data->get());
    return null;
  }
  /**
   * event
   */
  public function event_set_session(){
    /**
     * set session
     */
    if(!wfUser::getSession()->get($this->session_path)){
      /**
       * 
       */
      $data = $this->getData();
      /**
       * 
       */
      $this->setSession($data);
    }
    return null;
  }
  /**
   * widget
   */
  public function widget_data($data){
    wfDocument::renderElementFromFolder(__DIR__, __FUNCTION__);
  }
}