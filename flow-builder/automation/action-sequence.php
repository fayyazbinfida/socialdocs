<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="sequences"><a href="#sequences" class="header-anchor">#</a> Sequences</h1>
          <p>Use sequences to automatically send follow up / delay messages to customers. You can send multiple messages
            with different delays.</p>
          <h2 id="create-sequence"><a href="#create-sequence" class="header-anchor">#</a> Create Sequence</h2>
          <p><img src="../../assets/img/sequence2.13700020.png" alt="sequence"></p>
          <p>Follow steps 1 to 3 and you will see this:</p>
          <p><img src="../../assets/img/sequence3.089ff2a8.png" alt="sequence"></p>
          <p>5 steps to create a sequence:</p>
          <ol>
            <li>give a sequence name</li>
            <li>click &quot;Add Message&quot;</li>
            <li>edit the settings (see <strong>Message Settings</strong> below)</li>
            <li>choose the sub flow to send</li>
            <li>repeat steps 2-4 to add more messages then click &quot;Save&quot;</li>
          </ol>
          <h2 id="message-settings"><a href="#message-settings" class="header-anchor">#</a> Message Settings</h2>
          <p>This is how does the setting window look like:</p>
          <p><img src="../../assets/img/sequence4.fdf54ecf.png" alt="sequence"></p>
          <h3 id="_1-the-countdown-to-send-the-message"><a href="#_1-the-countdown-to-send-the-message"
              class="header-anchor">#</a> 1. The countdown to send the message</h3>
          <ul>
            <li>Messages are sent by order.</li>
            <li>For the first message, the countdown begins when users subscribed to the sequence.</li>
            <li>For other messages, the countdown begins when the previous message is sent.</li>
          </ul>
          <h3 id="_2-send-anytime-or-between-a-time-range"><a href="#_2-send-anytime-or-between-a-time-range"
              class="header-anchor">#</a> 2. Send anytime or between a time range</h3>
          <ul>
            <li>For &quot;send anytime&quot;, the message will be sent immediately at the end of the countdown.</li>
            <li>For &quot;send between&quot;, if the countdown ends outside the time range, the message will be kept
              until the next available time.</li>
            <li>Remember to check the timezone issue below.</li>
          </ul>
          <p>e.g. You don't want to bother users at night so you set a message to send between 9 am and 6 pm. If there
            is a message that should be sent at 8 pm, the system will hold the message until 9 am tomorrow.</p>
          <p>This can affect the next message because the countdown of the next message begins when the previous one is
            sent.</p>
          <h3 id="_3-send-on-which-days-of-the-week"><a href="#_3-send-on-which-days-of-the-week"
              class="header-anchor">#</a> 3. Send on which days of the week</h3>
          <ul>
            <li>Similarly, if you don't want to bother users at weekend, deselect Saturday and Sunday. See the example
              in the &quot;send between&quot; above.</li>
            <li>Remember to check the timezone issue below.</li>
          </ul>
          <h3 id="_4-choose-corresponding-content-type-important"><a
              href="#_4-choose-corresponding-content-type-important" class="header-anchor">#</a> 4. Choose corresponding
            content type (IMPORTANT)</h3>
          <ul>
            <li>See &quot;Content Type&quot; introduction below.</li>
            <li>If you are not sure about which type you should use, keep it default. Although the message might not be
              sent due to the 24 hours rule, the system will at least help you avoid being banned by Facebook.</li>
          </ul>
          <h3 id="_5-pick-a-notification-type"><a href="#_5-pick-a-notification-type" class="header-anchor">#</a> 5.
            Pick a notification type</h3>
          <h2 id="about-timezone"><a href="#about-timezone" class="header-anchor">#</a> About Timezone</h2>
          <p>If a channel has a timezone in the user's profile like Facebook, when the system check &quot;send between
            time range&quot; and &quot;send on Monday to Sunday&quot; settings, it's based on users' timezone first. If
            the user doesn't have a timezone or the channel doesn't support timezone in user profiles, then it's based
            on <a href="../../guide/account.php#workspace-profile">the timezone of the workspace</a>.</p>
          <h2 id="content-type"><a href="#content-type" class="header-anchor">#</a> Content Type</h2>
          <p>Any message sent over 24 hours after a subscriber’s last interaction must have a content type that matches
            its purpose (in accordance with <a
              href="https://developers.facebook.com/docs/messenger-platform/send-messages/message-tags/" target="_blank"
              rel="noopener noreferrer">Facebook Policy- Message Tags<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a></p>
          <p>Messages with type “Other” or without a content type will NOT be delivered to subscribers who interacted
            with you via Messenger more than 24 hours ago.</p>
          <div class="custom-block danger">
            <p class="custom-block-title">Note</p>
            <p>Sending messages that do not match the assigned content type may result in your page being suspended or
              banned by Facebook.</p>
          </div>
          <h3 id="default-other"><a href="#default-other" class="header-anchor">#</a> Default / Other</h3>
          <p>Can contain promotions and it will only send to users who interacted with your bot in the last 24 hours.
          </p>
          <h3 id="confirmed-event-update"><a href="#confirmed-event-update" class="header-anchor">#</a> Confirmed Event
            Update</h3>
          <p>Send the user reminders or updates for an event they have registered for (e.g., RSVP'ed, purchased
            tickets). This tag may be used for upcoming events and events in progress.</p>
          <h3 id="post-purchased-update"><a href="#post-purchased-update" class="header-anchor">#</a> Post Purchased
            Update</h3>
          <p>Notify the user of an update on a recent purchase such as confirmation of transactions(invoice, receipt)
            and notifications of shipment status(product in-transit, shipped, delivered, delayed).</p>
          <h3 id="account-update"><a href="#account-update" class="header-anchor">#</a> Account Update</h3>
          <p>Notify the user of a non-recurring change to their application or account.</p>
          <h2 id="send-multiple-messages"><a href="#send-multiple-messages" class="header-anchor">#</a> Send Multiple
            Messages</h2>
          <p><img src="../../assets/img/sequence5.4306faca.png" alt="sequence"></p>
          <p>When you send more than 1 message in your sequence, note that all the messages are sent in order.</p>
          <p>In the above screenshot, for example, the &quot;Booked&quot; sub flow will be sent &quot;Immediately&quot;
            once the user subscribes to this &quot;Appointment Follow Up&quot; sequence. Because the first message
            begins the count down once the user subscribes.</p>
          <p>The next message begins the count down once the previous is sent. Thus, the &quot;Appointment Follow
            Up&quot; sub flow will be sent 1 day after the &quot;Booked&quot; sub flow is sent.</p>
          <h2 id="send-sub-flow"><a href="#send-sub-flow" class="header-anchor">#</a> Send Sub Flow</h2>
          <p>Make some sub flows to send specifically for your sequences. Please note that each Send Message step has
            its own &quot;Message Tag&quot;. The tag is set to &quot;Other&quot; by default.</p>
          <p>Let's say, now it is over 24 hours since the user last interacted with your bot. You choose a non-default
            content type for a message in your sequence. This setting automatically changes the message tag of the first
            Send Message step in the sub flow you send.</p>
          <p>Later, if the user responds, you are then able to send messages normally with the &quot;default&quot;
            content type. So, usually, you won't need to change any message tag in your sub flow.</p>
          <h2 id="subscribe-unsubscribe-sequence"><a href="#subscribe-unsubscribe-sequence" class="header-anchor">#</a>
            Subscribe / Unsubscribe Sequence</h2>
          <p>Go &quot;Flow Actions&quot;, and you can find the 2 sequence operations.</p>
          <p><img src="../../assets/img/sequence1.a1d4bcdf.png" alt="sequence"></p>
          <p>There are a couple of examples to use sequence, such as</p>
          <ul>
            <li>&quot;Event Follow Up&quot; - send confirm message immediately once user registers and follow-up message
              as reminder or helper</li>
            <li>&quot;Get Feedback&quot; - ask for feedback like 2 hours after the user talked to your bot</li>
            <li>&quot;Send Coupon&quot; - send coupons when user put something in the cart but doesn't make an order for
              a long time</li>
          </ul>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">10/22/2021, 10:22:57
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="keywords.php" class="prev">
                Keywords
              </a></span> <span class="next"><a href="triggers.php">
                Triggers
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>