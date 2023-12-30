<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="stripe"><a href="#stripe" class="header-anchor">#</a> Stripe</h1>
          <p>With Stripe, you can accept payment from users via</p>
          <ul>
            <li>Card</li>
            <li>Alipay</li>
            <li>WeChat Pay</li>
          </ul>
          <h2 id="setup-stripe"><a href="#setup-stripe" class="header-anchor">#</a> Setup Stripe</h2>
          <p><img src="../assets/img/stripe_connect.89190a65.png" alt="connect stripe"></p>
          <p>Click 1, 2 and 3 in order on your Smart ChatBot dashboard.</p>
          <p><img src="../assets/img/stripe_select.dff1738a.png" alt="select stripe account"></p>
          <p>On Stripe's website, log in yourself, select the account you'd like to connect to (create an account if you
            don't have one yet). Then you will see this:</p>
          <p><img src="../assets/img/stripe_live_mode.ccd1a3e1.png" alt="stripe live mode"></p>
          <p>Click on the green button to change it from &quot;Live Mode&quot; to &quot;Test Mode&quot;.</p>
          <p><img src="../assets/img/stripe_test_mode.ba2fd302.png" alt="stripe test mode"></p>
          <p>When you are under the &quot;Test Mode&quot;, you can test the checkout process without paying a real bill.
            The checkout page will look like this:</p>
          <p><img src="../assets/img/stripe_test_payment.e2632461.png" alt="stripe test payment"></p>
          <p>Press the &quot;AUTHORIZE TEST PAYMENT&quot; button to see what will happen when the payment is successful.
            Instead, pressing the &quot;FAIL TEST PAYMENT&quot; button is simulating the situation that the payment
            fails. When everything is tested perfectly, click the &quot;Test Mode&quot; again to flip back to the
            &quot;Live Mode&quot;, then you can receive real payment from users!</p>
          <p>More informaition click -&gt; <a href="https://stripe.com/docs/account" target="_blank"
              rel="noopener noreferrer">Stripe Docs<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a></p>
          <h2 id="use-stripe"><a href="#use-stripe" class="header-anchor">#</a> Use Stripe</h2>
          <p>Check <a href="../guide/ecommerce.php">Ecommerce</a> for how to build a flow to accept payment.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/6/2021, 4:57:14
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="index.php" class="prev router-link-active">
                Integrations
              </a></span> <span class="next"><a href="mark/paypal.php">
                PayPal
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>