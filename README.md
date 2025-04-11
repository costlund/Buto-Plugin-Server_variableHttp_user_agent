# Buto-Plugin-Server_variableHttp_user_agent

<p>Set data in session detected in server variable HTTP_USER_AGENT.</p>

<a name="key_0"></a>

## HTTP_USER_AGENT

<p>Date from different units.</p>
<pre><code>Emulator browser: Mozilla/5.0 (Linux; Android 9; AOSP on IA Emulator Build/PSR1.180720.122)     AppleWebKit/537.36    (KHTML, like Gecko)             Chrome/69.0.3497.100 Mobile Safari/537.36
Android browser:  Mozilla/5.0 (Linux; Android 11; J9110)                                        AppleWebKit/537.36    (KHTML, like Gecko)             Chrome/92.0.4515.159 Mobile Safari/537.36
Mac browser:      Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:132.0)                                                          Gecko/20100101 Firefox/132.0
iPhone browser:   Mozilla/5.0 (iPhone; CPU iPhone OS 18_3_2 like Mac OS X)                      AppleWebKit/605.1.15  (KHTML, like Gecko) Version/18.3.1                   Mobile/15E148 Safari/604.1
Emulator app:     Mozilla/5.0 (Linux; Android 9; AOSP on IA Emulator Build/PSR1.180720.122; wv) AppleWebKit/537.36    (KHTML, like Gecko) Version/4.0 Chrome/69.0.3497.100 Mobile Safari/537.36
Android app:      Mozilla/5.0 (Linux; Android 11; J9110              Build/55.2.A.4.332; wv)    AppleWebKit/537.36    (KHTML, like Gecko) Version/4.0 Chrome/135.0.7049.37 Mobile Safari/537.36</code></pre>

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



<a name="key_3_0"></a>

### data

<p>Show session data.</p>
<pre><code>type: widget
data:
  plugin: 'server_variable/http_user_agent'
  method: data</code></pre>

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
        webview: false
        web_tool: Browser</code></pre>

