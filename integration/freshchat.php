<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="freshchat"><a href="#freshchat" class="header-anchor">#</a> Freshchat</h1>
          <p>Freshchat is a popular live chat platform. Smart ChatBot integrate with Freshchat for the live chat handover.</p>
          <p>If you don’t have Freshchat account, you can <a href="https://www.freshworks.com/live-chat-software/"
              target="_blank" rel="noopener noreferrer">sign up here<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a></p>
          <p>The benefits of integrating with Smart ChatBot can reduce your support cost, and increase your support satisfaction
            rates.</p>
          <p>You will be able to:</p>
          <ul>
            <li>Reduce 80% of the support by filtering out support through chatbot automation &amp; A.I</li>
            <li>Receive &amp; respond to customer inquiries across all 11 social channels</li>
            <li>Build your smart chatbot with Smart ChatBot visual flow builder &amp; Google’s A.I</li>
          </ul>
          <h2 id="how-to-set-up-your-freshchat-integration"><a href="#how-to-set-up-your-freshchat-integration"
              class="header-anchor">#</a> How to set up your Freshchat integration</h2>
          <p>Once you login your Smart ChatBot dashboard, you should be able to find the Freshchat in the integration tab.</p>
          <p><img src="../assets/img/freshchat_01.23116dab.png" alt="title"></p>
          <p>Now, you need to login your Freshchat account, we will need to get your domain, App Id &amp; API key into
            the settings.</p>
          <p>Domain: you should be able to grab from the url of your dashboard. As per the screenshot below.</p>
          <p><img src="../assets/img/freshchat_02.69c6604b.png" alt="title"></p>
          <p>Then, you should add https:// at the front of the domain, and then paste your full domain at the domain
            field.</p>
          <p>You should be able to find your App ID at Settings -&gt; Account Settings, and then Integration settings.
          </p>
          <p><img src="../assets/img/freshchat_03.a8320abc.png" alt="title"></p>
          <p>And the last thing you need is the API key, you can find in the API tokens, as per screenshot below:</p>
          <p><img src="../assets/img/freshchat_04.8dc6c672.png" alt="title"></p>
          <p>And then after you click in the API tokens, you can copy your API keys and paste them into Smart ChatBot
            integration.</p>
          <p><img src="../assets/img/freshchat_05.7995d549.png" alt="title"></p>
          <p>After you paste all the 3 values, and then click save. Smart ChatBot should verify your connection. If it’s valid,
            you should be able to see the verified as per screenshot below, and also you need to copy the webhook url
            generated from Smart ChatBot, and paste the webhook to your Freshchat account.</p>
          <p><img src="../assets/img/freshchat_06.6630e594.png" alt="title"></p>
          <p>In your Freshchat account, you need to go to admin, and then go to webhook settings, and paste the webhook
            generate from Smart ChatBot, and paste the url in the webhook settings.</p>
          <p><img src="../assets/img/freshchat_07.af95079c.png" alt="title"></p>
          <p>And up until now, you have done all the settings in Freshchat. And now there is one last thing you need to
            do.</p>
          <p>Currently only omni channel support live chat integration settings.</p>
          <p>You need to go to your omni channel settings, and select Freshchat from the live chat integration dropdown.
          </p>
          <p><img src="../assets/img/freshchat_08.62b3660d.png" alt="title"></p>
          <p>And now all your set up is ready.</p>
          <h2 id="how-to-trigger-live-chat-to-freshchat"><a href="#how-to-trigger-live-chat-to-freshchat"
              class="header-anchor">#</a> How to trigger live chat to Freshchat</h2>
          <p>Once you have set up everything, and now you can build the chatbot to automate your business, also you can
            integrate with Dialogflow to reconganize the user’s intent and redirect them to your chatbot automation as
            well.</p>
          <p>This should dramatically reduce your live agent support workload. But still if the user want to reach out
            to support anywhere in the flow.</p>
          <p>You can use the action of “Talk to human/Pause Automation” in the basic action, and also you will have the
            option to set the default timer to pause the automation.</p>
          <p><img src="../assets/img/freshchat_09.06f3eca6.png" alt="title"></p>
          <p>All the messages send from the user will be forward to Freshchat dashboard. You should be able to see the
            user from the inbox.</p>
          <p><img src="../assets/img/freshchat_10.8ad7b270.png" alt="title"></p>
          <p>Please note that Smart ChatBot will push the user’s social profile image &amp; name, phone number, email to
            Freshchat.</p>
          <p>Also the user_ns, user_id and channel will be also added to the custom user properties.</p>
          <p>And then you can send text, image or files to the user.</p>
          <p><img src="../assets/img/freshchat_11.c5f41185.png" alt="title"></p>
          <p>And also Smart ChatBot support you to add note to the user, and the note will sync to Smart ChatBot user.</p>
          <p>Below is screenshot of sending private note from Freshchat.</p>
          <p><img src="../assets/img/freshchat_12.e1c11f71.png" alt="title"></p>
          <p>In Smart ChatBot, you can find the note have been added to the user.</p>
          <p><img src="../assets/img/freshchat_13.e9c8b6e4.png" alt="title"></p>
          <p>If live agent click the resolve button in Freshchat, then the live chat sesion with the Smart ChatBot chatbot user
            will be ended.</p>
          <p><img src="../assets/img/freshchat_14.d745a1cf.png" alt="title"></p>
          <p>After the Freshchat agent resolve the conversation, any message sent from Smart ChatBot will trigger the chatbot
            again.</p>
          <p>However, the user can trigger live chat again if this is needed.</p>
          <p>One thing to note is that, If the Freshchat live chat agent decided to send follow up message from the
            Resolved folder, depending on if there is 24 hour window restriction, if there isn’t, the message will
            delivered to the user, and reactivate the live chat session.</p>
          <p>If the user is out of 24 hour window for particular channel(WhatsApp, Messenger, Instagram), then we will
            return the message “ The user is out of contact window, please contact through email or sms”.</p>
          <p>And last thing to note is that every time the Freshchat live agent send message to the Smart ChatBot user, the time
            will reset to default 30 mins, so that the conversation can continue without accidentally push the user back
            to chatbot.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/28/2022, 4:57:58
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="intercom.php" class="prev">
                Intercom
              </a></span> <!----></p>
        </div>
      </main>

<?php
    include('footer.php');
?>