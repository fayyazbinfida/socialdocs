<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="inbound-webhooks"><a href="#inbound-webhooks" class="header-anchor">#</a> Inbound Webhooks</h1>
          <p>Inbound webhook is a powerful tool to receive data from anywhere to the chatbot through a POST request.</p>
          <p>With inbound webhooks, your bot can even start a conversation with a bot user who never talked to it
            before.</p>
          <p>For example, when a client fills in their contact information on your website, you send the data to an
            inbound webhook of a chatbot, say an SMS bot. The SMS bot can then send a confirmation message to the
            client's phone number.</p>
          <p>If that webhook is built in a Voice bot, the bot can even call the client right away!</p>
          <div class="custom-block tip">
            <p class="custom-block-title">Limitation</p>
            <p>Each bot has up to 5 inbound webhooks.</p>
          </div>
          <h2 id="create-inbound-webhook"><a href="#create-inbound-webhook" class="header-anchor">#</a> Create Inbound
            Webhook</h2>
          <p>It's available in almost all channels, in your flow builder, go <strong>Tools</strong> - <strong>Inbound
              Webhooks</strong>:</p>
          <p><img src="../../assets/img/inbound1.260c5353.png" alt="inbound webhook"></p>
          <p>Click on <strong>New Inbound Webhook</strong>, give a name and click <strong>Save</strong>:</p>
          <p><img src="../../assets/img/inbound2.6b5f861c.png" alt="inbound webhook"></p>
          <p>You will see the editing interface like this:</p>
          <p><img src="../../assets/img/inbound3.91d71327.png" alt="inbound webhook"></p>
          <h3 id="webhook-address"><a href="#webhook-address" class="header-anchor">#</a> Webhook Address</h3>
          <p>This area shows you where to send the data and the method, which is POST. Each inbound webhook has a unique
            URL in the whole Smart ChatBot system.</p>
          <h3 id="example-of-received-json"><a href="#example-of-received-json" class="header-anchor">#</a> Example of
            Received JSON</h3>
          <p>This area shows an example JSON for reference. It describes the structure of the data in the JSON we
            received later. We need it to find the values for both **user identification ** and <strong>data to
              save</strong>.</p>
          <p>There are 2 ways to get an example JSON:</p>
          <ol>
            <li>manually type/paste it here</li>
            <li>listen to a real-time data from a live test</li>
          </ol>
          <h3 id="values-to-identify-a-user"><a href="#values-to-identify-a-user" class="header-anchor">#</a> Values to
            Identify a User</h3>
          <p>Whenever the webhook receives data, it first checks the paths you specify here to see whether it can find
            an existing user in the chatbot.</p>
          <p>If the user is not in the system, the chatbot will create a new profile. That's how the chatbot initiates a
            conversation without talking to the user before.</p>
          <p>However, some channels don't allow the chatbot to start the conversation first due to privacy and spam
            issues.</p>
          <p>For example, your SMS bot can send messages as long as you have the recipient's phone number, while your
            Facebook Messenger chatbot cannot send messages to a Facebook user who never talked to your bot before.</p>
          <h4 id="process-for-user-identification"><a href="#process-for-user-identification"
              class="header-anchor">#</a> Process for User Identification</h4>
          <p>This is the process of how the system identifies a user:</p>
          <ol>
            <li>check <code>user_ns</code>
              <ul>
                <li>if there is a valid <code>user_ns</code>, user found.</li>
                <li>if not, next step</li>
              </ul>
            </li>
            <li>check <code>phone</code> / <code>email</code>
              <ul>
                <li>if we can find a user by the <code>phone</code> or <code>email</code>, user found.</li>
                <li>if not, next step</li>
              </ul>
            </li>
            <li>verify <code>phone</code>
              <ul>
                <li>no user matched in the system, is the <code>phone</code> a valid number?</li>
                <li>if yes, user profile created.</li>
                <li>if not, webhook won't be processed</li>
              </ul>
            </li>
          </ol>
          <h3 id="mapping-area"><a href="#mapping-area" class="header-anchor">#</a> Mapping Area</h3>
          <p>The mapping list shows which value should be stored in which custom field. When you get a sample JSON in
            the above area, click on <strong>Preview Payload</strong> to get a mapping tool.</p>
          <h2 id="webhook-logs"><a href="#webhook-logs" class="header-anchor">#</a> Webhook Logs</h2>
          <p><img src="../../assets/img/inbound10.32ebdea8.png" alt="inbound webhook"></p>
          <p>Every single request is saved in <strong>Logs</strong>. Click on a record to see the received JSON data.
          </p>
          <h2 id="demo-booking-confirmation"><a href="#demo-booking-confirmation" class="header-anchor">#</a> Demo:
            Booking Confirmation</h2>
          <p>A perfect tool to test your inbound webhook is already built-in everywhere! Simple get a chatbot (whatever
            channel), test it in an <strong>Action Step</strong>.</p>
          <p>Open another Smart ChatBot webpage side by side, keep the inbound webhook editing on Page 1 and select an external
            request on Page 2:</p>
          <p><img src="../../assets/img/inbound4.3540edf1.png" alt="inbound webhook"></p>
          <p>Follow steps 1 to 8 in the following screenshot:</p>
          <p><img src="../../assets/img/inbound5.1e473657.png" alt="inbound webhook"></p>
          <p>Provide the data that need to be sent to the chatbot and click <strong>Test</strong>, you must get a
            &quot;webhook inactive&quot; error since we haven't activated it yet. It's fine, click on
            <strong>Done</strong> on Page 1, and you will see the data saved:</p>
          <p><img src="../../assets/img/inbound6.24b11030.png" alt="inbound webhook"></p>
          <p>Scroll down a bit, follow steps 1, 2, 3 to tell the system, where is the <code>phone</code> and
            <code>email</code> values in the JSON:</p>
          <p><img src="../../assets/img/inbound7.0be10acc.png" alt="inbound webhook"></p>
          <p>Finally, map the rest data to the chatbot:</p>
          <p><img src="../../assets/img/inbound8.c015694b.png" alt="inbound webhook"></p>
          <p><strong>Save</strong> your inbound webhook editing:</p>
          <p><img src="../../assets/img/inbound9.982059f7.png" alt="inbound webhook"></p>
          <p>Enter the subflow, let's send a message to the bot user:</p>
          <p><img src="../../assets/img/inbound11.dfa11cae.png" alt="inbound webhook"></p>
          <p><strong>Publish</strong> the flow and let's do a live test in the external request again:</p>
          <p><img src="../../assets/img/inbound12.1b3a13dc.png" alt="inbound webhook"></p>
          <p>We can see that this time it run without error because we activated the webhook and used a real phone
            number. Go to <strong>Logs</strong> and we can see a new user profile is created successfully.</p>
          <p>On the user side:</p>
          <p><img src="../../assets/img/inbound13.7fb0f9b4.png" alt="inbound webhook"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/8/2022, 10:13:07
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="facebook-ads.php" class="prev">
                Facebook Ads
              </a></span> <span class="next"><a href="../broadcasts/broadcast.php">
                Broadcasts
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>