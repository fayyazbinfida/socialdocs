<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="signalwire"><a href="#signalwire" class="header-anchor">#</a> Signalwire</h1>
          <p>With Signalwire you are able to create voice and SMS chatbots inside of your Smart ChatBot account. This native
            integration allows you to connect to your account in just a few steps.</p>
          <p>From the main dashboard overview, choose integrations on the left-hand side, then select Signalwire from
            the list.</p>
          <p><img src="../../assets/img/signalwire_01.d042b084.png" alt="title"></p>
          <p>You will need 3 kinds of login details in order to connect to your SignalWire account:</p>
          <ul>
            <li>Project id</li>
            <li>App Token</li>
            <li>Space URL</li>
          </ul>
          <h2 id="login-to-signalwire"><a href="#login-to-signalwire" class="header-anchor">#</a> Login to Signalwire
          </h2>
          <p>In order to grab your credentials, you will need to login into your <a href="https://signalwire.com/"
              target="_blank" rel="noopener noreferrer">SignalWire account<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>.</p>
          <p>Once inside you should have a similar overview when being directed to your dashboard</p>
          <p><img src="../../assets/img/signalwire_02.87194cb4.png" alt="title"></p>
          <p>From this main dashboard overview, you will be able to directly grab your <strong>Project ID</strong> and
            <strong>Space URL</strong>.</p>
          <h2 id="creating-or-fetching-your-token"><a href="#creating-or-fetching-your-token"
              class="header-anchor">#</a> Creating or fetching your token</h2>
          <p>To grab your token go to the <strong>API</strong> menu option on the left-hand side and from there press
            the <strong>generate a token</strong> button.</p>
          <p><img src="../../assets/img/signalwire_03.11512033.png" alt="title"></p>
          <p>Fill in the needed credentials and you will get a token in return.</p>
          <p>Once done paste all the credentials into your workspace and don’t forget the press the save button.</p>
          <p><img src="../../assets/img/signalwire_04.1a2c7654.png" alt="title"></p>
          <h2 id="how-to-use-signalwire"><a href="#how-to-use-signalwire" class="header-anchor">#</a> How to use
            SignalWire</h2>
          <p>Now that your account has been connected you can start creating voice and or SMS chatbots.</p>
          <p>Just go to the left-hand menu, select either the voice or SMS channel and press the <strong>add phone
              number</strong> button.</p>
          <p>From the dropdown select SignalWire, then press the button <strong>find number</strong>.</p>
          <p><img src="../../assets/img/signalwire_05.cbbe46ad.png" alt="title"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/7/2022, 3:34:57
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="twilio.php" class="prev">
                Twilio
              </a></span> <span class="next"><a href="../email.php">
                Email (SMTP / Gmail / Sendgrid)
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>