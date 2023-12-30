<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="bot-users"><a href="#bot-users" class="header-anchor">#</a> Bot Users</h1>
          <p>People who opt-in to your chatbot by interacting with it are considered bot users. These become contacts
            inside of your chatbot channel and during the course of a single or multiple conversations, the chatbot will
            be able to gather information about them to give you more insights into your audience.</p>
          <p>You can go to your bot users by going to the corresponding section in the left-hand menu once you have
            logged into one of your chatbots.</p>
          <p><img src="../../assets/img/bot_user_1.bd109a36.png" alt="title"></p>
          <p>From here you will see a list with a complete overview of all users that have interacted with and therefore
            opted into your chatbot.</p>
          <h2 id="filter-bot-users-based-on-conditions"><a href="#filter-bot-users-based-on-conditions"
              class="header-anchor">#</a> Filter bot users based on conditions</h2>
          <p>Once on this overview, you can also quickly segment your users by using the filter option. Once pressed you
            will be able to use any condition/filter you like.</p>
          <p><img src="../../assets/img/bot_user_2.9fca57eb.png" alt="title"></p>
          <p>This gives you the ability to quickly see what tags someone has, or what values a custom user fields are.
          </p>
          <p>An example of a filter could be that you want to know who amongst the bot users has given its email.</p>
          <p>Another example could be when a user finishes the initial onboarding flow you tag them as such and you want
            to be able to see who did this.</p>
          <h2 id="user-information"><a href="#user-information" class="header-anchor">#</a> User information</h2>
          <p>Once pressing a certain bot user a popup will appear and it will show all the collected bot user details so
            far.</p>
          <p><img src="../../assets/img/bot_user_3.0142992f.png" alt="title"></p>
          <p>You will see the following on the left side:</p>
          <ul>
            <li>Name</li>
            <li>Gender</li>
            <li>Language</li>
            <li>Timezone</li>
            <li>Local time</li>
          </ul>
          <p>Below the profile image, you will have the ability to either delete the user or download the user data.
            This will help you become GDPR compliant as users might request this from you.</p>
          <p>You will also see the specific channel user id and some date and time information like subscribed, last
            interaction and such.</p>
          <p>If we go with the right side of the user information you will see tabs for:</p>
          <ul>
            <li>Notes</li>
            <li>User tags</li>
            <li>Subscribed Sequences</li>
            <li>OTN Topics</li>
            <li>Custom User fields</li>
          </ul>
          <p>Only you press one of the tabs you will be able to view the data collected.</p>
          <p>For tags, you will have the most options at your disposal.</p>
          <p><img src="../../assets/img/bot_user_4.633c48e8.png" alt="title"></p>
          <p>You will be able to add tags directly to the user but also remove them as well.</p>
          <p>For the topics <strong>Subscribed Sequences, OTN Topics</strong> you will be able to only remove them from
            the user.</p>
          <p>For <strong>Custom User Fields</strong> you can either remove or change its value.</p>
          <h2 id="importing-or-creating-new-users"><a href="#importing-or-creating-new-users"
              class="header-anchor">#</a> Importing or creating new users</h2>
          <p>For the SMS and voice channels, it is also possible to import or create users manually. In the top right,
            you will have the buttons to do so.</p>
          <p><img
              src="data:image/png;base64,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"
              alt="title"></p>
          <p>Creating a new user means adding a single user manually whereas Import means you can do this in bulk by
            means of a CSV file.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/12/2022, 8:38:52
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="../live-chat/live-chat.php" class="prev">
                Live Chat
              </a></span> <span class="next"><a href="../automation/keywords.php">
                Keywords
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>