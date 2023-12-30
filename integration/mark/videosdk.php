<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="videosdk"><a href="#videosdk" class="header-anchor">#</a> VideoSdk</h1>
          <p>With this native integration, you will be able to create live meetings directly inside your chatbot.</p>
          <p>To connect to your VideoSdk account go to <strong>Integrations</strong> from the left-hand menu in your
            main dashboard overview. Then select <strong>VideoSdk</strong> in the list.</p>
          <p>You will see that you need two pieces of credentials:</p>
          <ul>
            <li>API key</li>
            <li>Secret</li>
          </ul>
          <p><img src="../../assets/img/video_sdk_01.a268e074.png" alt="title"></p>
          <h2 id="how-to-fetch-your-credentials"><a href="#how-to-fetch-your-credentials" class="header-anchor">#</a>
            How to fetch your credentials</h2>
          <p>Login to your VideoSdk account, then go to the <a href="https://app.videosdk.live/api-keys" target="_blank"
              rel="noopener noreferrer">API keys section<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>. Copy your API key and secret from
            this page.</p>
          <p><img src="../../assets/img/video_sdk_02.fd30b7ff.png" alt="title"></p>
          <p>Then go to your Smart ChatBot workspace and paste in these two credentials. If successful you will see a verified
            status message in the top right corner</p>
          <p><img src="../../assets/img/video_sdk_03.79db18b3.png" alt="title"></p>
          <h2 id="how-to-use-videosdk-in-your-chatbot"><a href="#how-to-use-videosdk-in-your-chatbot"
              class="header-anchor">#</a> How to use VideoSdk in your chatbot</h2>
          <p>Now that your account is connected you can use it in any of your chatbots throughout any channel.</p>
          <p>Inside a flow create an action block, then choose <strong>integrations</strong> -›
            <strong>VideoSdk</strong>
          </p>
          <p>You will then get the following popup screen;</p>
          <p><img src="../../assets/img/video_sdk_04.2af6aa64.png" alt="title"></p>
          <p>Fill in all the information then press the blue button named Save. You will be able to share the meeting
            URL with your participant and the agent taking the meeting.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/7/2022, 3:34:57
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="integrately.php" class="prev">
                Integrately
              </a></span> <span class="next"><a href="../intercom.php">
                Intercom
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>