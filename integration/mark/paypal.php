<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="paypal"><a href="#paypal" class="header-anchor">#</a> PayPal</h1>
          <p>You can now integrate your PayPal account into your workspace. To find your PayPal integration go from your
            main dashboard and select Integrations from the left-hand menu. Then select PayPal from the list</p>
          <p><img src="../../assets/img/paypal1.c5dfaf42.png" alt="title"></p>
          <p>In step 3 you can select which mode you would like to be active. We have <strong>live mode</strong> and
            <strong>sandbox</strong> available for you.</p>
          <h2 id="login-to-your-paypal-developer-account"><a href="#login-to-your-paypal-developer-account"
              class="header-anchor">#</a> Login to your PayPal developer account</h2>
          <p>To fetch your credentials login to your PayPal account and then head to your <a
              href="https://developer.paypal.com/developer/applications" target="_blank"
              rel="noopener noreferrer">developer dashboard<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a></p>
          <p>You will get a similar overview like this;</p>
          <p><img src="../../assets/img/paypal2.7d7052d2.png" alt="title"></p>
          <p>Be sure to select a mode first before creating an app to receive your credentials. Once pressed you will be
            taken to the page where you can create your app.</p>
          <p><img src="../../assets/img/paypal3.8a8aa6da.png" alt="title"></p>
          <p>After you created the app you will be taken to the page where you can fetch the client id, the client
            secret key and paste those into your workspace integration settings for PayPal.</p>
          <p><img src="../../assets/img/paypal4.d8e276d5.png" alt="title"></p>
          <p>Optional could be to also add a redirection after payment. This allows you to point to a success flow
            inside your chatbot for example, or maybe a thank you page instead.</p>
          <h2 id="insert-your-paypal-details"><a href="#insert-your-paypal-details" class="header-anchor">#</a> Insert
            your PayPal details</h2>
          <p>Once you copied and pasted all the details in your workspace integration section press save and you should
            see a verified notification popping up in the top right corner.</p>
          <p><img src="../../assets/img/paypal5.318d0d5a.png" alt="title"></p>
          <p>If you like to watch our video instead you can do so <a href="https://youtu.be/hL-ekE8EMwU" target="_blank"
              rel="noopener noreferrer">here<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>.</p>
          <h2 id="how-to-use-paypal-in-your-bot"><a href="#how-to-use-paypal-in-your-bot" class="header-anchor">#</a>
            How to use PayPal in your bot</h2>
          <p>Soon as your account has been connected you will have two ways of using this in your chatbots.</p>
          <p>First thing you need to make sure you have set PayPal as a payment method inside your e-commerce store
            settings.</p>
          <h3 id="setting-your-payment-method"><a href="#setting-your-payment-method" class="header-anchor">#</a>
            Setting your payment method</h3>
          <p>From your main Dashboard go to Ecommerce on the left-hand menu.</p>
          <p><img src="../../assets/img/paypal6.796b9f39.png" alt="title"></p>
          <p>Scroll all the way down until you see the section called <strong>Payment Method</strong>. From here select
            PayPal as one of the methods for your ecommerce store. Don’t forget to press save to let the changes take
            effect.</p>
          <p><img src="../../assets/img/paypal7.226fd340.png" alt="title"></p>
          <h3 id="use-checkout-to-let-customers-pay-with-paypal"><a
              href="#use-checkout-to-let-customers-pay-with-paypal" class="header-anchor">#</a> Use checkout to let
            customers pay with PayPal</h3>
          <p>Using the built-in ecommerce store is a fantastic way of selling your products. Once the user presses the
            checkout button in the conversation they will be taken to the online checkout section where they now can
            select PayPal to pay with.</p>
          <p><img src="../../assets/img/paypal8.3d5910f6.png" alt="title"></p>
          <h3 id="use-the-one-click-paypal-buy-button"><a href="#use-the-one-click-paypal-buy-button"
              class="header-anchor">#</a> Use the one-click PayPal buy button</h3>
          <p>Another way of using the PayPal integration is by using the direct button for this. Very useful if you just
            want to sell a single product or service.</p>
          <p>Add a button and from the option given choose the <strong>PayPal Buy</strong> button.</p>
          <p><img src="../../assets/img/paypal9.31e8da3f.png" alt="title"></p>
          <p>Once selected you will be able to quickly fill in all the product details like so</p>
          <p><img src="../../assets/img/paypal10.d1929b10.png" alt="title"></p>
          <p>Once everything is filled in, scroll down and press save. You will now be able to sell single products.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/7/2022, 3:34:57
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="../stripe.php" class="prev">
                Stripe
              </a></span> <span class="next"><a href="cloudinary.php">
                Cloudinary
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>