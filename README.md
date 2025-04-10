# Buto-Plugin-Server_variableHttp_user_agent

<p>Set data in session detected in server variable HTTP_USER_AGENT.</p>

<a name="key_0"></a>

## Settings



<a name="key_1"></a>

## Usage

<p>Element example.</p>
<pre><code>  settings:
    disabled: globals:_SESSION/plugin/server_variable/http_user_agent/data/webview
  type: div
  innerHTML: Hide this element if Android Webview.</code></pre>

<a name="key_2"></a>

## Pages



<a name="key_2_0"></a>

### page_test



<a name="key_3"></a>

## Widgets



<a name="key_4"></a>

## Event



<a name="key_4_0"></a>

### event_set_session

<p>Set session data.</p>
<pre><code>events:
  document_render_before:
    -
      plugin: 'server_variable/http_user_agent'
      method: set_session</code></pre>

<a name="key_5"></a>

## Construct



<a name="key_6"></a>

## Methods



<a name="key_6_0"></a>

### getData



<a name="key_6_1"></a>

### setSession

<p>Data put in session.</p>
<pre><code>plugin:
  server_variable:
    http_user_agent:
      data:
        http_user_agent: 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:132.0) Gecko/20100101 Firefox/132.0'
        browser_name: Firefox
        os_name: 'Mac OS X 10'
        webview: false</code></pre>

