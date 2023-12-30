<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="dialogflow"><a href="#dialogflow" class="header-anchor">#</a> Dialogflow</h1>
          <div class="custom-block danger">
            <p class="custom-block-title">The way to connect Dialogflow has been updated</p>
            <p>Please refer to these tutorials for <a href="https://www.youtube.com/watch?v=z-4dxyxAUP0" target="_blank"
                rel="noopener noreferrer">how to connect Smart ChatBot with Dialogflow<span><svg
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px" y="0px"
                    viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a>, <a
                href="https://www.youtube.com/watch?v=Xh92XWZqvMs" target="_blank" rel="noopener noreferrer">how to
                connect multiple Dialogflow agents<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a> and <a
                href="https://www.youtube.com/watch?v=GYvjq6ot0nA" target="_blank" rel="noopener noreferrer">how to use
                Dialogflow for slot filling in Smart ChatBot<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a>.</p>
          </div>
          <p>With Dialogflow, you can pre-set some frequently asked questions, and your bot can deal with the simple
            queries on behalf of you and transfer the difficult. Besides, you can train your bot to understand more
            human language including greeting, gratitude, basic interaction, etc.</p>
          <h2 id="setup-dialogflow"><a href="#setup-dialogflow" class="header-anchor">#</a> Setup Dialogflow</h2>
          <p><img src="../assets/img/dialogflow1.265f3c7e.png" alt="dialogflow"></p>
          <p>Follow steps 1 to 4 to connect to your Google account.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>If there is a prompt saying that &quot;Google hasn't verified this app&quot;, try click
              &quot;Advanced&quot; and then click &quot;Go to brixbull.ai&quot;. Don't worry, it's safe to do so.</p>
          </div>
          <p>Click the blue &quot;Allow&quot; button to allow Smart ChatBot to get access to your Dialogflow account.</p>
          <p>Visit <a href="https://dialogflow.cloud.google.com/">Dialogflow Website</a>, login to your Google account, then you
            will see your Dialogflow dashboard like this:</p>
          <p><img src="../assets/img/dialogflow2.5522e4d4.png" alt="dialogflow"></p>
          <ol>
            <li>Click &quot;Create Agent&quot; on the left sidebar</li>
            <li>name this agent</li>
            <li>pick a default language for the bot</li>
            <li>choose a default time zone</li>
            <li>once finish, click &quot;CREATE&quot;</li>
          </ol>
          <div class="custom-block danger">
            <p class="custom-block-title">&quot;Google Cloud Platform service has been disabled&quot;</p>
            <p>If you fail to create an agent with an error saying &quot;Google Cloud Platform service has been
              disabled. Please contact your administrator to restore service&quot;, it is possible that because the
              google account is from your organisation like <a href="../cdn-cgi/l/email-protection.php"
                class="__cf_email__"
                data-cfemail="5801372d2a1639353d1801372d2a1b373528393621763b3735">[email&#160;protected]</a>. You can
              solve this problem by either contacting the administrator in your company for Google cloud platform
              authorization or using your own Google account instead.</p>
          </div>
          <p>After creating a new agent, come back to Smart ChatBot, click &quot;Sync Agents&quot; as below. All your agents
            will be listed here.</p>
          <p><img src="../assets/img/dialogflow3.7baa96d9.png" alt="dialogflow"></p>
          <h2 id="use-dialogflow"><a href="#use-dialogflow" class="header-anchor">#</a> Use Dialogflow</h2>
          <p>Choose one of your flows that you would like your Dialogflow agent to manage.</p>
          <p><img src="../assets/img/dialogflow4.b83c9238.png" alt="dialogflow"></p>
          <p>In the workspace of the flow,</p>
          <ol>
            <li>click &quot;Automation&quot; on the left sidebar</li>
            <li>activate the &quot;default Reply&quot;</li>
            <li>select frequency, usually &quot;Every Time&quot;.</li>
            <li>click &quot;Choose Sub Flow&quot;</li>
          </ol>
          <p><img src="../assets/img/dialogflow5.42bcd46b.png" alt="dialogflow"></p>
          <p>Select your agent and you are then able to manage your FAQs. Enter FAQ interface by clicking the
            &quot;Manage Faqs&quot; button as below:</p>
          <p><img src="../assets/img/dialogflow6.f6a1f22c.png" alt="dialogflow"></p>
          <p>This is how the FAQ interface looks like:</p>
          <p><img src="../assets/img/dialogflow7.c9edae46.png" alt="dialogflow"></p>
          <p>The &quot;Sync Product Entity&quot; button is for Ecommerce usage. By synchronizing product information in
            your Ecommerce system with Dialogflow, you can then recognize and reply to related products when users ask
            about them. To quote a product name, type &quot;{{&quot;to see the picture below</p>
          <p><img
              src="data:image/png;base64,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"
              alt="dialogflow"></p>
          <p>Click &quot;+ New Faq&quot; to start building your smart dialog:</p>
          <p><img src="../assets/img/dialogflow8.e3f76d74.png" alt="dialogflow"></p>
          <p>For each frequently asked question, put as many synonymous sentences as you can in the question area and
            Dialogflow will help with the rest.</p>
          <p>You don't need to worry about too many details because Dialogflow is using fuzzy matching. For example, you
            have already put &quot;When is your office hour?&quot; and &quot;When do you open?&quot;. The bot can
            recognize it is asking about opening hours whatever user send &quot;office hour?&quot;, &quot;when u
            open?&quot;, etc even there is any abbreviation or grammar mistake.</p>
          <p>The answer area is telling the bot what to reply when a question matched. The bot will randomly pick one
            answer from the answer list to send.</p>
          <p>In &quot;Send sub flow&quot; area, choose a sub flow if needed. The sub flow will be sent just after the
            answer.</p>
          <p>Finally, click &quot;Save&quot; and here you go, 🎉 your first FAQ has done. The bot is now understanding
            more human language! Keep testing and improving it.</p>
          <h2 id="improve-dialogflow"><a href="#improve-dialogflow" class="header-anchor">#</a> Improve Dialogflow</h2>
          <p>Back to <a href="https://dialogflow.cloud.google.com/" target="_blank" rel="noopener noreferrer">Dialogflow
              Website<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px" y="0px"
                  viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>, you will see Smart ChatBot created many FAQ
            intents on behalf of you:</p>
          <p><img src="../assets/img/dialogflow9.c9af36b7.png" alt="dialogflow"></p>
          <ol>
            <li>choose your agent</li>
            <li>click &quot;Intents&quot;</li>
            <li>these are the intents synchronized from Smart ChatBot</li>
            <li>Test your bot here, see whether it understand which FAQ you are asking about.</li>
          </ol>
          <p>Check and adjust &quot;Default Fallback Intent&quot; or &quot;Default Welcome Intent&quot; if needed.
            &quot;Default Fallback Intent&quot; is matched when none of the FAQ is matched.</p>
          <p>Select any intent, give it some more editing to help the bot understand more:</p>
          <p><img src="../assets/img/dynamic7.09b6fe3c.png" alt="dialogflow"></p>
          <p>For example, in this case, double click to select &quot;Melbourne&quot;, then enter the keyword
            &quot;city&quot;, click on &quot;@sys-geo-city&quot;. This is telling the bot that the word
            &quot;Melbourne&quot; is a city. So next time when users asking &quot;Can you deliver to Sydney?&quot; or
            other cities, the bot can file the question to this FAQ.</p>
          <p>There are various practical built-in lexicon includes color, time, post-code, country, street name,
            language, etc. You can even create your own!</p>
          <h2 id="dynamic-content-response"><a href="#dynamic-content-response" class="header-anchor">#</a> Dynamic
            Content Response</h2>
          <p>Response answer is not limited to just text. Try custom payload!</p>
          <p>To begin with, create a FAQ in Smart ChatBot with only questions, no answer or sub flow.</p>
          <p><img src="../assets/img/dialogflow11.8d305091.png" alt="dialogflow"></p>
          <p>Wait a moment and refresh your Dialogflow intents until the new intent shows.</p>
          <p><img src="../assets/img/dynamic2.54b62bac.png" alt="dialogflow"></p>
          <p>In the new intent, click area 4, &quot;ADD RESPONSES&quot;, then &quot;Custom Payload&quot;. Copy and paste
            any needed <a href="../for-developers/index.php">response format</a> here, such as text/media/files,
            buttons, actions, quick replies and so on so forth.</p>
          <p><img src="../assets/img/dynamic1.32e1c5d1.png" alt="dialogflow"></p>
          <p>In this case, a call button will be sent. So copy the following code to Dialogflow:</p>
          <p><img
              src="data:image/png;base64,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"
              alt="dialogflow"></p>
          <p>Adjust text, button title, number, etc as needed and click &quot;Save&quot;:</p>
          <p><img src="../assets/img/dynamic4.124d4b18.png" alt="dialogflow"></p>
          <p>Let's test it from the testing area on the right:</p>
          <p><img src="../assets/img/dynamic5.4b7dd0a6.png" alt="dialogflow"></p>
          <p>Well done! the bot recognizes that &quot;can I call&quot; is asking faq3.20.</p>
          <p><img src="../assets/img/dynamic6.57796a11.png" alt="dialogflow"></p>
          <p>The user side looks perfect as well. Feel free to explore other response types!</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">1/20/2022, 11:33:49
              PM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="slack-agent.php" class="prev">
                Slack Agent
              </a></span> <span class="next"><a href="google-spreadsheet.php">
                Google Spreadsheet
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>