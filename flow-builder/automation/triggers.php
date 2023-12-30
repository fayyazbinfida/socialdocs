<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="triggers"><a href="#triggers" class="header-anchor">#</a> Triggers</h1>
          <p>Triggers can help you automate certain processes in the chatbot. For example, when a user has opted-in for
            email you might want to sync this data with a CRM or Google Sheet.</p>
          <p>To get to the trigger section you need to go to the left-hand menu and select <strong>Automation</strong>
            then choose <strong>Triggers</strong>.
            From here you will be able to create a new trigger by pressing the blue button on the top right named +
            <strong>New trigger</strong>.</p>
          <p><img src="../../assets/img/triggers_01.6630c438.png" alt="title"></p>
          <p>Once pressed you will get to see the available triggers you can choose from;</p>
          <p><img src="../../assets/img/triggers_02.d68cc282.png" alt="title"></p>
          <h2 id="how-to-create-a-new-trigger"><a href="#how-to-create-a-new-trigger" class="header-anchor">#</a> How to
            create a new trigger</h2>
          <p>Let’s take an example of a trigger when someone pays for order inside your chatbot. Press the blue button
            <strong>+ New trigger</strong> then select the trigger named as such: <strong>Order Paid</strong></p>
          <p>From here a new pop-up window will open where you can set up the details of your trigger.</p>
          <p><img src="../../assets/img/triggers_03.795bedab.png" alt="title"></p>
          <p>You will be able to enable or disable the trigger, set up a condition if you need the bot user to match a
            certain filter before the trigger is activated, and you can add a note that will explain more about this
            trigger.</p>
          <p>Great if you are working with a team or creating a template and need to clarify things.</p>
          <p>Once done press the bottom right button named <strong>Save</strong> and you are now halfway done setting up
            your trigger.</p>
          <h2 id="selecting-your-sub-flow"><a href="#selecting-your-sub-flow" class="header-anchor">#</a> Selecting your
            Sub Flow</h2>
          <p>Now that the trigger has been created we will be needing to add an action to it. You can do this by
            pressing the <strong>Choose Sub Flow</strong> space to the right of that trigger.</p>
          <p><img src="../../assets/img/triggers_04.38236c67.png" alt="title"></p>
          <p>Once done it will open up a pop-up window for you where you can select your desired flow to be connected
            once this trigger has been activated.</p>
          <p><img src="../../assets/img/triggers_05.1f695b82.png" alt="title"></p>
          <p>You can also type to find your flow more easily if you prefer. Once you found your flow just select it and
            it will return you to the Trigger overview.</p>
          <p>From here you have a few options when it comes to managing the triggers.</p>
          <h2 id="managing-your-triggers"><a href="#managing-your-triggers" class="header-anchor">#</a> Managing your
            Triggers</h2>
          <p>You have two options if you want to manage your triggers:</p>
          <ul>
            <li>You can enable or disable them by pressing the slider on the left of the actual trigger</li>
            <li>You can edit the trigger settings. Inside of here you also have the option to delete the trigger
              entirely</li>
          </ul>
          <p><img src="../../assets/img/triggers_06.44101565.png" alt="title"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/12/2022, 8:38:52
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="action-sequence.php" class="prev">
                Sequences
              </a></span> <span class="next"><a href="comment.php">
                Comment Keywords
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>