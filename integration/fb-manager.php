<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="facebook-business-management"><a href="#facebook-business-management" class="header-anchor">#</a>
            Facebook Business Management</h1>
          <p>Facebook business management integration will allow you to easily sync facebook catalog products into Smart ChatBot
            built-in ecommerce.</p>
          <p>The benefit of syncing this back to our ecommerce is that you can easily match the products from Facebook
            with our built-in ecommerce.</p>
          <p>This is the most needed feature if you are using the WhatsApp product catalog to build out your native
            WhatsApp ecommerce.</p>
          <h2 id="connect-to-your-facebook-business-account"><a href="#connect-to-your-facebook-business-account"
              class="header-anchor">#</a> Connect to your Facebook business account</h2>
          <p>If you click the “Connect Facebook Business” button, it will request you to authorize access to Smart ChatBot.</p>
          <p><img src="../assets/img/facebook-business-integration-01.d7696ac7.png" alt="title"></p>
          <p>And click the “Continue” button, it will take you back to Smart ChatBot, and now you are already connected with
            your Facebook business account.</p>
          <h2 id="disconnect-your-facebook-business-account"><a href="#disconnect-your-facebook-business-account"
              class="header-anchor">#</a> Disconnect your Facebook business account</h2>
          <p>You can disconnect your Facebook business account anytime by clicking the disconnect button.</p>
          <p><img src="../assets/img/facebook-business-integration-02.2818c16c.png" alt="title"></p>
          <h2 id="sync-the-product-catalog-from-facebook-to-your-ecommerce"><a
              href="#sync-the-product-catalog-from-facebook-to-your-ecommerce" class="header-anchor">#</a> Sync the
            product catalog from Facebook to your ecommerce</h2>
          <p>In order to sync the product back, you need to click the “list business catalogs” button, and then it will
            pull out all the product catalogs from your Facebook business account.</p>
          <p><img src="../assets/img/facebook-business-integration-03.4cf36cd0.png" alt="title"></p>
          <p>And then click the “Facebook -&gt; Local”, you should be able to sync the products into our built-in
            ecommerce system.</p>
          <p>The below value will be synced back to Smart ChatBot.</p>
          <ul>
            <li>Product name</li>
            <li>Product description</li>
            <li>Product image</li>
            <li>Pricing</li>
            <li>SKU</li>
            <li>Product type</li>
            <li>Product vendor</li>
          </ul>
          <p><img src="../assets/img/facebook-business-integration-04.a5713197.png" alt="title"></p>
          <p>Please note that the SKU is the same value as the content ID in your Facebook cataglog. That’s how Smart ChatBot
            used to match the product with our ecommerce.</p>
          <p>Don’t change the SKU value. If you want to use the WhatsApp product catalog/native ecommerce, you need to
            always keep the SKU at the same value as the content ID in your Facebook catalog.</p>
          <p><img src="../assets/img/facebook-business-integration-05.97c67bf7.png" alt="title"></p>
          <h2 id="change-the-currency"><a href="#change-the-currency" class="header-anchor">#</a> Change the currency
          </h2>
          <p>If you are using a different currency in your Facebook product catalog, you need to make sure you change
            the same currency in your ecommerce settings in Smart ChatBot.</p>
          <p>Always make sure the currency settings are the same between Smart ChatBot &amp; Facebook product catalog.</p>
          <p><img src="../assets/img/facebook-business-integration-06.c13d97c2.png" alt="title"></p>
          <h2 id="benefits-of-syncing-facebook-catalog-with-uchat"><a
              href="#benefits-of-syncing-facebook-catalog-with-uchat" class="header-anchor">#</a> Benefits of syncing
            Facebook catalog with Smart ChatBot</h2>
          <p>If you sync your Facebook catalog products to Smart ChatBot, you will be able to easily use WhatsApp product
            catalog messages/native ecommerce.</p>
          <h3
            id="_1-for-example-when-you-are-using-get-products-in-the-ecommerce-action-you-can-select-the-filter-your-want-as-the-screenshot-below">
            <a href="#_1-for-example-when-you-are-using-get-products-in-the-ecommerce-action-you-can-select-the-filter-your-want-as-the-screenshot-below"
              class="header-anchor">#</a> 1- For example, when you are using Get products in the ecommerce action, you
            can select the filter your want as the screenshot below:</h3>
          <p><img src="../assets/img/facebook-business-integration-07.941145e6.png" alt="title"></p>
          <p>And when you have set up your filter to dynamically populate your products, you will be able to save the
            products dynamically into a JSON variable.</p>
          <p><img src="../assets/img/facebook-business-integration-08.4b276e8b.png" alt="title"></p>
          <p>And then you can use the send message, and then select “Catalog product”, please note this is only
            available in the WhatsApp channel with 360Dialog as your WABA provider.</p>
          <p><img src="../assets/img/facebook-business-integration-09.27e1e5f2.png" alt="title"></p>
          <p>And you can use the retailsID directly in the “WhatsApp Multiple products” message as per the screenshot
            below:</p>
          <p><img src="../assets/img/facebook-business-integration-10.5c4d723a.png" alt="title"></p>
          <p>In this case, you will be able to use our built-in ecommerce and dynamically populate the products in the
            WhatsApp channel.</p>
          <h3 id="_2-whatsapp-product-inquiry-trigger"><a href="#_2-whatsapp-product-inquiry-trigger"
              class="header-anchor">#</a> 2- WhatsApp product inquiry trigger:</h3>
          <ul>
            <li>
              <p>If you sync your Facebook product catalog with our built-in ecommerce system, and when you set up the
                “WhatsApp product inquiry” trigger, which you can find in the Automation, then New Triggers.</p>
            </li>
            <li>
              <p>Since the product retailer id will have the same value in SKU in our ecommerce system, so that we can
                display directly which product the user is asking about.</p>
            </li>
          </ul>
          <p><img src="../assets/img/facebook-business-integration-11.a7447d62.png" alt="title"></p>
          <p>And then, you can use our Select system variable to show the product directly in the card format.</p>
          <p>If the retail ID is matching with any SKU value in the Smart ChatBot system, then you can find the matching product
            information in our SELECT system field as per below:</p>
          <p><img src="../assets/img/facebook-business-integration-12.0a73eb92.png" alt="title"></p>
          <p>The details set up for the “WhatsApp Product Inquiry” trigger is as the screenshot below:</p>
          <p><img src="../assets/img/facebook-business-integration-13.9ccd0bff.png" alt="title"></p>
          <h3 id="_3-show-product-details-in-orders-in-the-uchat-ecommerce-system"><a
              href="#_3-show-product-details-in-orders-in-the-uchat-ecommerce-system" class="header-anchor">#</a> 3-
            Show product details in “Orders” in the Smart ChatBot ecommerce system.</h3>
          <ul>
            <li>Since WhatsApp product catalog messages mainly rely on the Facebook Catalog feature, and if you sync
              them with Smart ChatBot's built-in ecommerce system, you will be able to see the product name and pictures in our
              order section in ecommerce.</li>
          </ul>
          <p><img src="../assets/img/facebook-business-integration-14.52b74622.png" alt="title"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">5/12/2022, 9:15:07
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="shopify.php" class="prev">
                Shopify
              </a></span> <span class="next"><a href="mark/calendly.php">
                Calendly
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>