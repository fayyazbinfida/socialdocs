<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="twilio"><a href="#twilio" class="header-anchor">#</a> Twilio</h1>
          <p>With Twilio you are able to create voice, SMS and WhatsApp chatbots. In order to connect your Twilio
            account go to the integration section from the left-hand menu and select Twilio.</p>
          <p><img src="../../assets/img/twilio_01.3860a044.png" alt="title"></p>
          <p>As you see you only need to insert two pieces of login details to connect your Twilio account:</p>
          <ul>
            <li>Account SID</li>
            <li>AUTH Token</li>
          </ul>
          <h2 id="login-to-your-twilio-account"><a href="#login-to-your-twilio-account" class="header-anchor">#</a>
            Login to your Twilio account</h2>
          <p>Login to your <a href="https://console.twilio.com/" target="_blank" rel="noopener noreferrer">Twilio
              account<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px" y="0px"
                  viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a> and when arriving at your dashboard
            overview you will be able to directly grab the Account SID as well as the AUTH token</p>
          <p><img src="../../assets/img/twilio_02.bdfdac6a.png" alt="title"></p>
          <p>Copy and paste both into your workspace Twilio section and press the save button. If all goes well then you
            should also see a verified status in the top right corner of your screen</p>
          <p><img src="../../assets/img/twilio_03.72da7a2c.png" alt="title"></p>
          <h2 id="how-to-use-twilio"><a href="#how-to-use-twilio" class="header-anchor">#</a> How to use Twilio</h2>
          <p>Now your account is connected you are now able to create a chatbot on one of the following channels:</p>
          <ul>
            <li>Voice</li>
            <li>SMS</li>
            <li>WhatsApp
              Do take note it depends on which channel you can use due to the settings of your connected phone number.
            </li>
          </ul>
          <p>If we take a look at the example below we will select a voice channel and Select Twilio as the provider you
            will get something like this;</p>
          <p><img src="../../assets/img/twilio_04.d7cb36fc.png" alt="title"></p>
          <p>You will also see which channels you have connected to which phone number.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/7/2022, 3:34:57
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="../data-store.php" class="prev">
                Data Store
              </a></span> <span class="next"><a href="signalwire.php">
                Signalwire
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>