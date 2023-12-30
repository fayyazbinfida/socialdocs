<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="testers"><a href="#testers" class="header-anchor">#</a> Testers</h1>
          <p>To help you with testing your flows before they go live you can invite testers inside your chatbot. This
            will help you troubleshoot any potential problems that are happening in your flows.</p>
          <p>So to clarify a tester can view a flow that is not yet published.</p>
          <p>Assume you have a published onboarding flow that is accessible to the public, but you made changes in the
            backend which are not yet published. You will be able to let testers preview those flows.</p>
          <p>To invite a tester they will need to be a subscriber to your chatbot.</p>
          <h2 id="invite-and-manage-testers"><a href="#invite-and-manage-testers" class="header-anchor">#</a> Invite and
            manage testers</h2>
          <p>To invite a tester to your chatbot just go to <strong>Tools</strong> from your left-hand menu, then select
            the <strong>Testers tab</strong>.</p>
          <p><img src="../../assets/img/testers_01.13f8a263.png" alt="title"></p>
          <p>To create a new tester just press the button in the top right corner named <strong>+ New Tester</strong>.
            From here you will be able to type in the name of the person you would like to be a tester inside your
            chatbot.</p>
          <p>Again do note that this person you want to appoint as a tester needs to be an active subscriber of that
            chatbot.</p>
          <p><img src="../../assets/img/testers_02.6cbd0da4.png" alt="title"></p>
          <p>Once done you will return to the main overview for the testers where you can also manage them from.</p>
          <p><img src="../../assets/img/testers_03.a17e4704.png" alt="title"></p>
          <p>You will see the users who are invited by you as a tester and if you want to delete them you can press the
            trashbin icon to the right of each user to do so.</p>
          <h2 id="how-to-send-testers-flows"><a href="#how-to-send-testers-flows" class="header-anchor">#</a> How to
            send testers flows</h2>
          <p>To send testers the flows in the draft version you can do so in a few ways.</p>
          <p>You can share a link to the particular flow, or let them type a keyword that will trigger the flow.</p>
          <p>Another way to let testers view content regular users cannot is by using the condition inside the flow
            builder for it.</p>
          <p>Just go to any flow and insert a condition block. From here search for the condition named <strong>is
              tester</strong>.</p>
          <p><img src="../../assets/img/testers_04.5ccb3a49.png" alt="title"></p>
          <p>This way you will be able to send a tester to one part of the flow you want to be tested and a regular user
            can just follow the flow already fully published.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/12/2022, 8:38:52
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="error-logs.php" class="prev">
                Error Logs
              </a></span> <span class="next"><a href="admins.php">
                Admins
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>