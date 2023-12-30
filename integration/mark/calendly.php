<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="calendly"><a href="#calendly" class="header-anchor">#</a> Calendly</h1>
          <p>Calendly is a fantastic way of being able to create bookings for your business or that of your clients.</p>
          <p>Smart ChatBot has a native integration that allows you to set this up very easily</p>
          <h2 id="connect-to-calendly"><a href="#connect-to-calendly" class="header-anchor">#</a> Connect to Calendly
          </h2>
          <p>From the main dashboard go to <strong>Integrations</strong> from the left-hand menu. Then select
            <strong>Calendly</strong> from the list.</p>
          <p><img src="../../assets/img/calendly_01.6b6984a2.png" alt="title"></p>
          <p>Press the button <strong>Connect Calendly Account</strong> to go to Calendly and authorize Smart ChatBot to manage
            bookings for you.</p>
          <p>When redirected to the Authorization page be sure to press the button.</p>
          <p><img src="../../assets/img/calendly_02.6a744d7e.png" alt="title"></p>
          <p>You will be redirected back and your account should show verified. If you have a pro account you will also
            see a checkmark with the webhook section</p>
          <p><img src="../../assets/img/calendly_03.5cb5998f.png" alt="title"></p>
          <h2 id="how-to-use-calendly"><a href="#how-to-use-calendly" class="header-anchor">#</a> How to use Calendly
          </h2>
          <p>Soon as Calendly has been connected you will be able to use it in any of your chatbots.</p>
          <p>Go to a flow, select a text message and apply a button. For the type of button, you can select the Calendly
            button.</p>
          <p><img src="../../assets/img/calendly_04.5b73ce03.png" alt="title"></p>
          <p>Once done you will be able to select an event type. These events are being fetched from your Calendly
            account.</p>
          <p><img src="../../assets/img/calendly_05.ee0f909b.png" alt="title"></p>
          <p>Once you send this message with the button to the subscriber he or she will be able to book an appointment
            using the event you set up.</p>
          <p>After this is done you will be able to fetch the booking details from the <strong>Select</strong> system
            field.</p>
          <p>Open up the system variable list, Search for the system field called <strong>Select</strong></p>
          <p><img src="../../assets/img/calendly_06.bd0c6d54.png" alt="title"></p>
          <p>Once pressed you will get a pop-up that will display all possible information you can get back from
            Calendly.</p>
          <p><img src="../../assets/img/calendly_07.7b15f6ad.png" alt="title"></p>
          <p>This way you can confirm the booking with your subscriber as seen in the previous screenshot above</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/7/2022, 3:34:57
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="../fb-manager.php" class="prev">
                Facebook Business Management
              </a></span> <span class="next"><a href="../slack.php">
                Slack
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>