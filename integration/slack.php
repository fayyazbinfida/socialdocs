<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="slack"><a href="#slack" class="header-anchor">#</a> Slack</h1>
          <p>With Slack, your bots can send various types of messages to your Slack group or contacts mainly for
            notification purpose for now. However, we are working on building Slack flow. So there will be more
            functions with Slack shortly.</p>
          <h2 id="setup-slack"><a href="#setup-slack" class="header-anchor">#</a> Setup Slack</h2>
          <p><img src="../assets/img/slack_connect.1a7bf3dc.png" alt="slack"></p>
          <p>To send out notifications to your Slack group or personal channel, you will need incoming webhooks first.
            Follow step 1, 2, 3 above and a window will pop up:</p>
          <p><img src="../assets/img/slack_own_app1.879fa4ff.png" alt="slack"></p>
          <p>There are 2 ways to get an incoming webhook URL:</p>
          <ul>
            <li>from Slack Incoming Webhooks App</li>
            <li>from your own Slack App</li>
          </ul>
          <h3 id="get-an-incoming-webhook-url-from-slack-incoming-webhooks-app"><a
              href="#get-an-incoming-webhook-url-from-slack-incoming-webhooks-app" class="header-anchor">#</a> Get an
            Incoming Webhook URL from Slack Incoming Webhooks App</h3>
          <p>Visit <a href="https://uchat-com-au.slack.com/apps/A0F7XDUAZ-incoming-webhooks" target="_blank"
              rel="noopener noreferrer">Incoming WebHooks<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>, login yourself, then:</p>
          <p><img src="../assets/img/slack_incom_app1.eadb9dd1.png" alt="slack"></p>
          <p>click &quot;Add to Slack&quot;.</p>
          <p><img src="../assets/img/slack_incom_app2.625395e1.png" alt="slack"></p>
          <p>Pick a channel you would like your bot to send notifications to, then click &quot;Add&quot;.</p>
          <p><img src="../assets/img/slack_incom_app3.8b339510.png" alt="slack"></p>
          <p>Ta-da! Here you are the URL.</p>
          <h3 id="get-an-incoming-webhook-url-from-your-own-slack-app"><a
              href="#get-an-incoming-webhook-url-from-your-own-slack-app" class="header-anchor">#</a> Get an Incoming
            Webhook URL from Your Own Slack App</h3>
          <p>A wave of buttons is coming, click on them one by one:</p>
          <p><img src="../assets/img/slack_own_app1.879fa4ff.png" alt="slack"> <img
              src="../assets/img/slack_own_app2.4bd31abc.png" alt="slack"> <img
              src="../assets/img/slack_own_app3.08b01cba.png" alt="slack"></p>
          <ol>
            <li>Give an App name.</li>
            <li>Select your workspace.</li>
            <li>&quot;Create App&quot;</li>
          </ol>
          <p><img src="../assets/img/slack_own_app4.eba14507.png" alt="slack"> <img
              src="../assets/img/slack_own_app5.8cb80d44.png" alt="slack"> <img
              src="../assets/img/slack_own_app6.bbca1557.png" alt="slack"> <img
              src="../assets/img/slack_own_app7.36a7d8bd.png" alt="slack"></p>
          <ol>
            <li>select a channel</li>
            <li>&quot;Allow&quot;</li>
          </ol>
          <p><img src="../assets/img/slack_own_app8.ade701f2.png" alt="slack"></p>
          <p>Finally, you see your URL!</p>
          <h3 id="add-incoming-webhook"><a href="#add-incoming-webhook" class="header-anchor">#</a> Add Incoming Webhook
          </h3>
          <p><img src="../assets/img/slack_put_url.100b114f.png" alt="slack"></p>
          <ol>
            <li>paste the URL you got in either the first way or the second above.</li>
            <li>pick a lovely icon.</li>
            <li>name it.</li>
            <li>and click &quot;Create&quot;.</li>
          </ol>
          <p>All done! This is how it looks like:</p>
          <p><img src="../assets/img/slack_added.e0b3566f.png" alt="slack"></p>
          <p>More information click -&gt; <a href="https://api.slack.com/messaging/webhooks" target="_blank"
              rel="noopener noreferrer">Slack API<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a></p>
          <h2 id="send-slack-notification"><a href="#send-slack-notification" class="header-anchor">#</a> Send Slack
            Notification</h2>
          <p>A common usage for slack integration is to send slack notification. For example, to back up your bot, set a
            &quot;Talk to Human&quot; button. And when user press it, send a slack notification to a support channel or
            a support staff. Check <a href="../flow-builder/action-notification.php">how to send slack
              notification</a>.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/19/2021, 2:09:00
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="mark/calendly.php" class="prev">
                Calendly
              </a></span> <span class="next"><a href="slack-agent.php">
                Slack Agent
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>