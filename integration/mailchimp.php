<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="mailchimp"><a href="#mailchimp" class="header-anchor">#</a> MailChimp</h1>
          <h2 id="setup"><a href="#setup" class="header-anchor">#</a> Setup</h2>
          <p><img src="../assets/img/mailchimp1.35ff3d1a.png" alt="mailchimp"></p>
          <p>Follow step 1 to 4 in the above picture, open MailChimp's website.</p>
          <p><img src="../assets/img/mailchimp2.46b67fb6.png" alt="mailchimp"></p>
          <p>Log in yourself and authorize Smart ChatBot.</p>
          <p><img src="../assets/img/mailchimp3.0bb5752c.png" alt="mailchimp"></p>
          <p>The page will then bring you back to Smart ChatBot. You can see your account name now.</p>
          <h2 id="use-mailchimp-in-action-step"><a href="#use-mailchimp-in-action-step" class="header-anchor">#</a> Use
            MailChimp in Action Step</h2>
          <p><img src="../assets/img/mailchimp4.b0000724.png" alt="mailchimp"></p>
          <p>In your Action step, find &quot;MailChimp&quot; in the &quot;Integrations&quot; list.</p>
          <p><img src="../assets/img/mailchimp5.c971f6ef.png" alt="mailchimp"></p>
          <p>Simply put this Action after a Question step. Pick a MailChimp list and put users' email address. That's
            all about it!</p>
          <p>Let's see what happen in MailChimp:</p>
          <p><img src="../assets/img/mailchimp6.654daa8c.png" alt="mailchimp"></p>
          <p>In your MailChimp dashboard, click area 1 and 2 from the left sidebar. Then you will see the audience added
            from the source Smart ChatBot.</p>
          <div class="custom-block warning">
            <p class="custom-block-title">Note that</p>
            <p>only a valid email address can be added to your MailChimp. If nothing happens after the Action step, the
              email address from the user might be incorrect.</p>
          </div>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>So you might want to add one more action to check whether the input email from the user is correct or
              not. There are various third-party APIs for verifying email, like <a href="https://mailboxlayer.com/"
                target="_blank" rel="noopener noreferrer">mailboxlayer<span><svg xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a>. You can call these APIs from <a
                href="../flow-builder/action-external-request.php">External Request</a> or an easier way <a
                href="mini-apps.php">Mini-App</a>.</p>
          </div>
          <p>More details click -&gt; <a href="https://mailchimp.com/help/" target="_blank"
              rel="noopener noreferrer">Mailchimp<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/21/2021, 3:13:17
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="email.php" class="prev">
                Email (SMTP / Gmail / Sendgrid)
              </a></span> <span class="next"><a href="mark/zapier.php">
                Zapier
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>