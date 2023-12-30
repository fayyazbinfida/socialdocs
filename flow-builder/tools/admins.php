<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="admins"><a href="#admins" class="header-anchor">#</a> Admins</h1>
          <p>Besides the regular members, you can invite to your workspace you can also invite admins to your chatbot
            only.</p>
          <p>With a condition you can set up admin menus for them they can access like getting a report or wanting to
            get some insights into the chatbot.</p>
          <h2 id="invite-and-manage-admins"><a href="#invite-and-manage-admins" class="header-anchor">#</a> Invite and
            manage admins</h2>
          <p>To invite an admin go to Tools from the left-hand menu and select the Admins tab on top.</p>
          <p>From here you will get to the main overview.</p>
          <p><img src="../../assets/img/admins_01.b978f0ec.png" alt="title"></p>
          <p>To add a new admin the user you want to invite needs to be a subscriber to your chatbot. If they are then
            press the button on the top-right corner named <strong>+ New Admin</strong>.</p>
          <p>From here a pop-up window will appear where you can search for and add a new admin.</p>
          <p><img src="../../assets/img/admins_02.892e5bef.png" alt="title"></p>
          <p>Just type in the name of the person you want to have as an admin and press the plus sign to have them added
            as an admin. Once you press the plus sign you will return to the main menu where you can manage all admins.
          </p>
          <p><img src="../../assets/img/admins_03.460675df.png" alt="title"></p>
          <p>At the right of each admin, you have the option to delete them if you like.</p>
          <h2 id="how-to-set-up-an-admin-flow"><a href="#how-to-set-up-an-admin-flow" class="header-anchor">#</a> How to
            set up an admin flow</h2>
          <p>Now that you have appointed an admin you can set up admin specific flows for them. This is ideal if you
            want to give a business owner some insights as to what is going on inside the chatbot but don’t want to give
            access to the backend of that chatbot.</p>
          <p>Just go to any flow you like and insert a condition block. From here search for the condition <strong>Is
              Admin</strong>.</p>
          <p>If the condition is set to yes you can send the admin to the admin mode where you can set up access to
            whatever you like.</p>
          <p>An example could be;</p>
          <p><img src="../../assets/img/admins_04.1d3e1908.png" alt="title"></p>
          <p>It is a great way for business owners to get access to certain features on the front end while not having
            to worry about them having access in the backend.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/12/2022, 8:38:52
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="testers.php" class="prev">
                Testers
              </a></span> <span class="next"><a href="widgets.php">
                Widgets
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>