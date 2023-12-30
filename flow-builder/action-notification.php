<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="action-step-send-notification"><a href="#action-step-send-notification" class="header-anchor">#</a>
            Action Step - Send Notification</h1>
          <p>This action allows your bot to send notification through various channels, including</p>
          <ul>
            <li>Email</li>
            <li>Slack</li>
            <li>SMS</li>
            <li>Phone Call</li>
          </ul>
          <p><img src="../assets/img/notification1.20ffe6f4.png" alt="notification"></p>
          <p>It's all in the &quot;Notification&quot; of your Action step.</p>
          <h2 id="email-notification"><a href="#email-notification" class="header-anchor">#</a> Email Notification</h2>
          <p>To send an email notification, you will need to setup your email integration first. Check <a
              href="../integration/email.php">how to setup email integration</a>?</p>
          <p><img src="../assets/img/notification2.cdb674ca.png" alt="notification"></p>
          <p>Unlike &quot;Send Email&quot; step, email notification only supports text message type. Check &quot;Send
            Email&quot; step in &quot;Email Integration&quot; page if you need more message types like images, buttons,
            files, etc.</p>
          <p>Put the sender's address at &quot;Email Profile&quot; and the receiver's address at &quot;To Email&quot;.
          </p>
          <h2 id="slack-notification"><a href="#slack-notification" class="header-anchor">#</a> Slack Notification</h2>
          <p>Similarly, to send a slack notification, you will need to setup your slack integration first. Check <a
              href="../integration/slack.php">how to setup slack ingegration</a>?</p>
          <p><img src="../assets/img/action_slack2.83dc395a.png" alt="slack"></p>
          <p>In the pop-up window,</p>
          <ol>
            <li>choose a Webhook</li>
            <li>choose a default channel or name another one</li>
            <li>pick a message type, add as many as needed</li>
            <li>for example, &quot;Section&quot; type, put your message at area 4 and add photo or field value if needed
            </li>
            <li>use the &quot;Test&quot; button to send the message for test and adjust accordingly</li>
            <li>once finished, click &quot;Save&quot;.</li>
          </ol>
          <h2 id="sms-notification"><a href="#sms-notification" class="header-anchor">#</a> SMS Notification</h2>
          <p>Setup a sender number before you make a SMS notification. Check how to <a
              href="../guide/setup-create.php#whatsapp-sms--voice-bot">add phone number</a>?</p>
          <p><img src="../assets/img/notification4.6cab6c0a.png" alt="notification"></p>
          <p>You can use the &quot;generate random text&quot; operation with text variable to get a random security code
            and send out for verification purpose shown in the pictures.</p>
          <p><img src="../assets/img/notification3.5d387a9b.png" alt="notification"></p>
          <p>Choose a sender and receiver, put message and here you go!</p>
          <h2 id="make-phone-call"><a href="#make-phone-call" class="header-anchor">#</a> Make Phone Call</h2>
          <p>Same as SMS notification, a phone number is needed to make a phone call. Check how to <a
              href="../guide/setup-create.php#whatsapp-sms--voice-bot">add phone number</a>?</p>
          <p>Moreover, you must make a voice flow connected to this phone number otherwise your voice bot don't know
            what to say.</p>
          <p><img src="../assets/img/notification5.c0ce6875.png" alt="notification"></p>
          <h3 id="ref-payload"><a href="#ref-payload" class="header-anchor">#</a> Ref Payload</h3>
          <p><strong>Ref payload</strong> is used to passing on a message to the voice bot.</p>
          <p>For example, set the payload to &quot;support&quot; here in the notification action and in your voice flow:
          </p>
          <p><img src="../assets/img/notification6.9db9e112.png" alt="notification"></p>
          <p>Goto the <strong>Start Step</strong> in your <strong>Main Flow</strong> and save the ref payload in a
            custom field.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>You are allow to pass on a JSON variable in the ref payload but base64 encode and decode are needed
              before and after this. See base64 operations in <strong>Set Custom Field</strong>.</p>
          </div>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/27/2022, 5:06:08
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="action-external-request.php" class="prev">
                Action Step - External Request
              </a></span> <span class="next"><a href="action-delay.php">
                Action Step - Smart Delay
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>