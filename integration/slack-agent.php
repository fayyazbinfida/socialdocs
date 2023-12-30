<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="slack-agent"><a href="#slack-agent" class="header-anchor">#</a> Slack Agent</h1>
          <p>Smart ChatBot agent bot will allow you to handle the live chat support across all the 12+ channels Smart ChatBot supports.
          </p>
          <ul>
            <li>
              <p>You can receive the push notification in the Slack app</p>
            </li>
            <li>
              <p>You can reply &amp; send audio, text, picture, and files to the user directly on Slack</p>
            </li>
            <li>
              <p>You can include your team member in the group chat.</p>
            </li>
            <li>
              <p>You can easily resume automation or check contact details.</p>
            </li>
          </ul>
          <p>After the automation is paused, you can easily chat with the customers across all the 12+ social channels,
            you can send images, files, and subflow directly in Slack, and also you can resume automation and check the
            lead's details and contact information.</p>
          <h2 id="connect-slack-to-your-workspace"><a href="#connect-slack-to-your-workspace"
              class="header-anchor">#</a> Connect Slack to your workspace</h2>
          <p>You need to log in to your Smart ChatBot dashboard and then go to integration, then find the Slack agent, and click
            “Connect Slack account”</p>
          <p><img src="../assets/img/slack-inte1.9dcb2aca.png" alt=""></p>
          <p>After you clicked the “Connect Slack account”, you will be redirected to the authorization window like
            below:</p>
          <p><img src="../assets/img/slack-inte2.07cfb39e.png" alt=""></p>
          <p>And you need to click “allow”, and then you should be redirected back to Smart ChatBot, with your Slack workspace
            connected.</p>
          <p><img src="../assets/img/slack-inte3.e9133c66.png" alt=""></p>
          <h2 id="how-to-use-activate-slack-as-a-live-chat"><a href="#how-to-use-activate-slack-as-a-live-chat"
              class="header-anchor">#</a> How to use Activate Slack as a live chat</h2>
          <p>In order to use Slack to handle the live chat, you need to go to the channels then go to the settings, and
            then go to “Live Chat”,</p>
          <p>You need to select “Slack” as the live chat integration as per the screenshot below:</p>
          <p><img src="../assets/img/slack-inte4.5a4a7bfe.png" alt=""></p>
          <h2 id="how-to-use-slack-as-a-live-chat"><a href="#how-to-use-slack-as-a-live-chat"
              class="header-anchor">#</a> How to use Slack as a live chat</h2>
          <p>In any of the channels, if you use the “Pause automation/Talk to human”, any message after that will
            forward to Slack.</p>
          <p>Check the sample flow you can build and test with.</p>
          <p><img src="../assets/img/slack-inte5.3977b194.png" alt=""></p>
          <p>You will receive the live chat in the new channel created as per the screenshot below:</p>
          <p><img src="../assets/img/slack-inte6.26ba34a3.png" alt=""></p>
          <p>So you can reply with audio, image, files, and emoji to the customers.</p>
          <p>You can also invite your team members into the channel.</p>
          <p><img src="../assets/img/slack-inte7.8bf51313.png" alt=""></p>
          <p>And in the group chat, you can discuss with your team member, and you can use <code>@teammember</code> to
            discuss, and the discussion between the team members won’t be sent back to the user.</p>
          <p>Like the message below, it won't be sent to the customers.</p>
          <p><img src="../assets/img/slack-inte8.097409e6.png" alt=""></p>
          <h2 id="using-slash-commands"><a href="#using-slash-commands" class="header-anchor">#</a> Using Slash Commands
          </h2>
          <p>If you type /bot in the chat, it will trigger the slash commands to help you with more actions. Currently,
            we support the below 4 actions:</p>
          <ul>
            <li>
              <p>Resume_bot: if you use this action, the user will back to the automation</p>
            </li>
            <li>
              <p>Pause_bot: if you use this action, the user will pause the automation</p>
            </li>
            <li>
              <p>Bot_send_subflow: You can send a subflow to the user, and after the user received the flow, the user
                will back to automation</p>
            </li>
            <li>
              <p>Bot_user_info: this will get the bot user information for your reference.</p>
            </li>
          </ul>
          <p><img src="../assets/img/slack-inte10.b01b42bd.png" alt=""></p>
          <h2 id="add-uchat-agent-bot-to-your-slack"><a href="#add-uchat-agent-bot-to-your-slack"
              class="header-anchor">#</a> Add Smart ChatBot Agent bot to your Slack</h2>
          <p>You can click the button below to add the Smart ChatBot Agent bot to your Slack account</p>
          <p><a
              href="https://slack.com/oauth/v2/authorize?client_id=1245671141669.2059896841568&amp;scope=channels:join,channels:manage,channels:read,chat:write,chat:write.customize,files:read,files:write,groups:history,groups:read,groups:write,im:history,im:read,im:write,remote_files:write,users:read,users:read.email,team:read,incoming-webhook,commands&amp;user_scope=channels:history,identify,im:history,channels:write,groups:write,im:write,mpim:write"
              target="_blank" rel="noopener noreferrer"><img src="../../platform.slack-edge.com/img/add_to_slack.png"
                alt=""><span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px"
                  y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a></p>
          <h2 id="reach-out-to-support"><a href="#reach-out-to-support" class="header-anchor">#</a> Reach out to support
          </h2>
          <p>If you ever have issues with our app, you can reach support at
            <code><a href="../cdn-cgi/l/email-protection.php" class="__cf_email__" data-cfemail="2d59444e4648596d584e454c59034e4240034c58">[email&#160;protected]</a></code>.
            We will help you solve the issue you are having.</p>
          <h2 id="privacy-policy"><a href="#privacy-policy" class="header-anchor">#</a> Privacy Policy</h2>
          <p>See <a href="https://brix.ai/privacy-policy/" target="_blank" rel="noopener noreferrer">Smart ChatBot
              Privacy Policy<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px"
                  y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">6/23/2022, 9:54:01
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="slack.php" class="prev">
                Slack
              </a></span> <span class="next"><a href="dialogflow.php">
                Dialogflow
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>