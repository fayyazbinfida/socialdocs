<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="keywords"><a href="#keywords" class="header-anchor">#</a> Keywords</h1>
          <p>With &quot;Keyword&quot;, your users can easily jump to sub flows by typing in keywords rather than being
            lost in menus or buttons.</p>
          <p><img src="../../assets/img/keyword1.ba0bb3a3.png" alt="keyword"></p>
          <ol>
            <li>go &quot;Automation&quot; from the sidebar</li>
            <li>click &quot;Keywords&quot;</li>
            <li>for &quot;default reply&quot;, see explaination below</li>
            <li>click &quot;+ New Keyword&quot;</li>
            <li>choose a condition from &quot;is&quot;, &quot;contains&quot; or &quot;starts with&quot;</li>
            <li>put one or more than one keyword, separated by <strong>only commas</strong>, no space allowed</li>
            <li>choose a sub flow to send</li>
          </ol>
          <h2 id="default-reply"><a href="#default-reply" class="header-anchor">#</a> Default Reply</h2>
          <p>&quot;Default Reply&quot; is sent when the bot doesn't know what to reply. When the active button is off or
            no sub flow was chosen for &quot;Default Reply&quot;, the main flow will be sent.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>So when you build and test flows, you can reply anything to quickly re-start the conversation.</p>
          </div>
          <p>You can also adjust the frequency to send &quot;Default Reply&quot;. Its default value is set to fire
            &quot;Every Time&quot;.</p>
          <h2 id="advanced-default-reply"><a href="#advanced-default-reply" class="header-anchor">#</a> Advanced Default
            Reply</h2>
          <ul>
            <li>Want to have a smarter bot?</li>
            <li>Want to reply a sentence rather than a sub flow?</li>
            <li>Want your bot to understand more human languages rather than just keywords?</li>
          </ul>
          <p>Try Google Dialogflow Integration! Check <a href="../integration/dialogflow.php">how to setup
              Dialogflow</a>.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">7/26/2021, 6:55:29
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="../users/users.php" class="prev">
                Bot Users
              </a></span> <span class="next"><a href="action-sequence.php">
                Sequences
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>