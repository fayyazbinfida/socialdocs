<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Help Center</title>
  <meta name="generator" content="VuePress 1.8.0">
  <link rel="icon" href="logo.png">
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" href="icons/apple-touch-icon-152x152.png">
  <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#3eaf7c">
  <meta name="description" content="Explore the articles below or use the search bar">
  <meta name="theme-color" content="#3eaf7c">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="msapplication-TileImage" content="icons/msapplication-icon-144x144.png">
  <meta name="msapplication-TileColor" content="#000000">

  <link rel="preload" href="<?php echo $_SESSION['PATH'];;?>/assets/css/0.styles.3746a457.css" as="style">
  <link rel="preload" href="<?php echo $_SESSION['PATH'];;?>/assets/js/app.c0e6e995.js" as="script">
  <link rel="preload" href="<?php echo $_SESSION['PATH'];;?>/assets/js/7.c4a9717a.js" as="script">
  <link rel="preload" href="<?php echo $_SESSION['PATH'];;?>/assets/js/121.d11d34d8.js" as="script">
  <link rel="preload" href="<?php echo $_SESSION['PATH'];;?>/assets/js/92.7e42704c.js" as="script">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/1.76ebfd21.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/10.bcd2f4cb.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/100.c0a259df.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/101.fdbdf32e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/102.de00e4b8.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/103.9b4fb211.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/104.6c1bf0e3.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/105.80e317c6.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/106.5c7026d5.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/107.f4130c8e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/108.76865dfa.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/109.bb3976b7.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/11.6f5fb873.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/110.e69272ba.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/111.a7af8cc7.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/112.dd0f6715.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/113.83f4e476.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/114.c296506b.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/115.380395db.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/116.ce024727.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/117.22729688.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/118.182e4a11.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/119.fa4b866a.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/12.1b1240cc.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/120.b6cccee4.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/122.f5567c4a.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/123.7c3f365c.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/124.5c74a831.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/125.b6221533.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/126.9f616a8f.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/127.a629f20f.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/128.4eb1eb0f.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/129.646951b7.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/13.ddc0398a.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/130.5f7e1260.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/131.6fe1ef2e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/132.3b1eb22f.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/133.acdcbaaa.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/134.36657edb.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/135.cc0536fa.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/136.d705b759.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/137.3d44d3a4.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/138.1a4cc31a.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/139.a4b8bb27.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/14.92187cc8.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/140.83e8bb46.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/141.c659a26c.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/142.19c736d1.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/143.dec49bcf.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/144.05f5fbbd.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/15.6018dcf7.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/16.706c2555.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/17.90f710b1.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/18.b996a80e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/19.00d0fccb.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/20.ea226a9a.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/21.14f5c1a8.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/22.be482e47.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/23.b45901aa.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/24.a83976ee.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/25.2052b8fe.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/26.7ab38748.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/27.de92c310.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/28.cae87d88.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/29.64012674.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/30.3a83d0ff.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/31.cb2d18b0.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/32.b7461e6b.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/33.1ef1fb96.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/34.684ef4a7.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/35.e9d4f6c8.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/36.01afb73e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/37.6eeac672.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/38.da6adabd.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/39.f37e5695.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/4.9eb6b010.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/40.3b84c7b2.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/41.1479550e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/42.6b46ad9e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/43.8062d0b8.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/44.14101f36.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/45.ee37dd06.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/46.9d76df81.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/47.3c4d84de.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/48.0fd62953.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/49.39faed90.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/5.0f40a93c.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/50.ce3ec46d.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/51.d35ec0d7.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/52.e2f91bd7.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/53.c11109c9.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/54.b3c1b347.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/55.04d54452.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/56.0394b472.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/57.89af970b.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/58.ca47fbf3.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/59.9237d0e9.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/6.27cd29ce.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/60.514af6f2.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/61.4e85a4dd.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/62.38d953f6.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/63.0d4381dd.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/64.32e6bc92.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/65.64521e8d.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/66.0c5f399c.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/67.f7990a7f.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/68.4707a7eb.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/69.d165feeb.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/70.89436daf.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/71.15b8299d.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/72.eefc0029.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/73.f2de62a2.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/74.66b78b54.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/75.32c56274.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/76.93aa8258.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/77.97036e88.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/78.bb1a5ca5.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/79.962f230e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/8.9c563a3e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/80.af605ae2.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/81.ad8a2bf4.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/82.33b43804.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/83.e56e8013.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/84.ae37358a.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/85.9318557f.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/86.731c218c.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/87.39dc94b2.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/88.97ffd16c.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/89.0b6e5278.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/9.8c0ec7f1.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/90.6fde375b.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/91.c7e9e745.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/93.73c2b6ab.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/94.08dea4ae.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/95.514dcf4a.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/96.f49d3eee.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/97.42555697.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/98.a849455e.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/99.ae853982.js">
  <link rel="prefetch" href="<?php echo $_SESSION['PATH'];;?>/assets/js/vendors_notification.26c91851.js">
  <link rel="stylesheet" href="<?php echo $_SESSION['PATH'];;?>/assets/css/0.styles.3746a457.css">
</head>

<body>
    <div id="app" data-server-rendered="true">
        <div class="theme-container no-sidebar">
            <header class="navbar">
                <div class="sidebar-button">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" viewBox="0 0 448 512" class="icon">
                        <$_SESSION['PATH']; fill="currentColor" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"></$_SESSION['PATH'];>
                    </svg>
                </div>
                <a href="index.php" aria-current="page" class="home-link router-link-exact-active router-link-active"><img src="logo.png" alt="Help Center" class="logo">
                    <span class="site-name can-hide">Help Center</span>
                </a>
                <div class="links">
                    <div class="search-box"><input aria-label="Search" autocomplete="off" spellcheck="false" value=""> <!---->
                </div>
                <nav class="nav-links can-hide">
            
                    <div class="nav-item">
                        <a href="guide/index.php" class="nav-link">Guide</a>
                    </div>
                    <div class="nav-item">
                        <div class="dropdown-wrapper">
                            <button type="button" aria-label="Channels" class="dropdown-title">
                                <span class="title">Channels</span> <span class="arrow right"></span>
                            </button>
                            <ul class="nav-dropdown" style="display:none;">
                                <li class="dropdown-item"><!---->
                                    <a href="guide/setup-create.php#omni-bot" class="nav-link">Omnichannel</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/setup-create.php#facebook-bot" class="nav-link">Facebook</a>
                                </li>
                                <li class="dropdown-item"><!----> 
                                    <a href="guide/setup-create.php#instagram-bot" class="nav-link">Instagram</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/setup-create.php#telegram-bot" class="nav-link">Telegram</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/setup-create.php#slack-bot" class="nav-link">Slack</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/setup-create.php#wechat-bot" class="nav-link">WeChat</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/setup-create.php#whatsapp-360dialog-sandbox" class="nav-link">WhatsApp Sandbox</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/whatsapp-api.php" class="nav-link">WhatsApp</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/cloudapi.php" class="nav-link">WhatsApp Cloud API</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                <a href="guide/setup-create.php#whatsapp-sms-voice-bot" class="nav-link">SMS</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/setup-create.php#whatsapp-sms-voice-bot" class="nav-link">Voice</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/setup-create.php#google-my-business" class="nav-link">Google</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="https://help.uchat.com.au/line-chatbot" target="_blank" rel="noopener noreferrer" class="nav-link external">
                                        Line
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                                                <$_SESSION['PATH']; fill="currentColor" d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z"></$_SESSION['PATH'];>
                                                <polygon fill="currentColor" points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9"></polygon>
                                            </svg>
                                            <span class="sr-only">(opens new window)</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="https://help.uchat.com.au/viber-chatbot" target="_blank" rel="noopener noreferrer" class="nav-link external">
                                        Viber
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                                                <$_SESSION['PATH']; fill="currentColor" d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z"></$_SESSION['PATH'];>
                                                <polygon fill="currentColor" points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9"></polygon>
                                            </svg>
                                            <span class="sr-only">(opens new window)</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="guide/setup-create.php#vk-bot" class="nav-link">Vk</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a href="flow-builder/index.php" class="nav-link">Flow Builder</a>
                    </div>
                    <div class="nav-item">
                        <div class="dropdown-wrapper">
                            <button type="button" aria-label="Integration" class="dropdown-title">
                                <span class="title">Integration</span>
                                <span class="arrow right"></span>
                            </button>
                            <ul class="nav-dropdown" style="display:none;">
                                <li class="dropdown-item"><!---->
                                    <a href="integration/index.php" class="nav-link">Overview</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/stripe.php" class="nav-link">Stripe</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mark/paypal.php" class="nav-link">PayPal</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mark/cloudinary.php" class="nav-link">Cloudinary</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/shopify.php" class="nav-link">Shopify</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/fb-manager.php" class="nav-link">Facebook Business</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mark/calendly.php" class="nav-link">Calendly</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/slack.php" class="nav-link">Slack</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/slack-agent.php" class="nav-link">Slack Agent</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/dialogflow.php" class="nav-link">Dialogflow</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/google-spreadsheet.php" class="nav-link">Google Spreadsheet</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/data-store.php" class="nav-link">Data Store</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mark/twilio.php" class="nav-link">Twilio</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mark/signalwire.php" class="nav-link">SignalWire</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/email.php" class="nav-link">SMTP / Gmail / SendGrid</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mailchimp.php" class="nav-link">MailChimp</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mark/zapier.php" class="nav-link">Zapier</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mark/integromat.php" class="nav-link">Integromat</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mark/pabbly.php" class="nav-link">Pabbly</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    a href="integration/mark/integrately.php" class="nav-link">Integrately</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/mark/videosdk.php" class="nav-link">VideoSdk</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/intercom.php" class="nav-link">Intercom</a>
                                </li>
                                <li class="dropdown-item"><!---->
                                    <a href="integration/freshchat.php" class="nav-link">Freshchat</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a href="ecommerce/index.php" class="nav-link">Ecommerce</a>
                    </div>
                    <div class="nav-item">
                        <a href="mobile/mobile.php" class="nav-link">Mobile App</a>
                    </div>
                    <!-- <div class="nav-item">
                        <div class="dropdown-wrapper">
                            <button type="button" aria-label="For Developers"class="dropdown-title">
                                <span class="title">For Developers</span>
                                <span class="arrow right"></span>
                            </button>
                            <ul class="nav-dropdown" style="display:none;">
                                <li class="dropdown-item">
                                    <a href="for-developers/index.php" class="nav-link">Dynamic Content</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="for-developers/API/index.php" class="nav-link">API</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="for-developers/my-apps/index.php" class="nav-link">Mini-App</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- <div class="nav-item">
                        <a href="partner/about.php" class="nav-link">Partner</a>
                    </div>
                    <div class="nav-item">
                        <a href="faq/index.php" class="nav-link">FAQ</a>
                    </div> -->
                    <div class="nav-item">
                        <a href="https://www.app.brixbull.ai/" target="_blank" rel="noopener noreferrer" class="nav-link external">
                            Smart ChatBot Home
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                                    <$_SESSION['PATH']; fill="currentColor" d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z"></$_SESSION['PATH'];>
                                    <polygon fill="currentColor" points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9"></polygon>

                                </svg>
                                <span class="sr-only">(opens new window)</span>
                            </span>
                        </a>
                    </div>
                </nav>
            </div>
        </header> 