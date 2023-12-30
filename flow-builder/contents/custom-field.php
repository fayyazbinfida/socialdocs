<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="custom-fields"><a href="#custom-fields" class="header-anchor">#</a> Custom Fields</h1>
          <h2 id="bot-fields"><a href="#bot-fields" class="header-anchor">#</a> Bot fields</h2>
          <p>Similar to user fields you can also create bot fields. The main difference is with user fields you store
            data to segment and share with that specific bot user, and bot fields allow you to store data and show them
            all equally among all bot users.</p>
          <p>The value does not change. Think of information such as opening hours, or contact details for the business.
          </p>
          <h3 id="creating-a-bot-field"><a href="#creating-a-bot-field" class="header-anchor">#</a> Creating a bot field
          </h3>
          <p>You can create a bot field by going to the bot field overview tab.</p>
          <p>You can do so by pressing <strong>Contents</strong> from the left-hand menu and from there press the tab
            called <strong>Bot Fields</strong>.</p>
          <p><img src="../../assets/img/bot_fields_01.86ce8bb6.png" alt="title"></p>
          <p>If you want to create a new bot field just press the button in the top right corner named + New Bot Field.
          </p>
          <p>From here a pop-up window will appear where you can create your bot field.</p>
          <p><img src="../../assets/img/bot_fields_02.949fcf6f.png" alt="title"></p>
          <p>After naming your new bot field you can select the type of field you would like it to have.</p>
          <p>Currently, we have the following ones available for you;</p>
          <ul>
            <li>Text</li>
            <li>Number</li>
            <li>Boolean</li>
            <li>Date</li>
            <li>Datetime</li>
            <li>JSON</li>
          </ul>
          <p>After selecting the type you can start adding the value to this bot field. If you like a description can
            also be added same as the folder you want to move it to.</p>
          <p>After everything is filled in just press the button in the bottom-right corner named <strong>Save</strong>
            to create the bot field.</p>
          <h3 id="managing-your-bot-fields"><a href="#managing-your-bot-fields" class="header-anchor">#</a> Managing
            your bot fields</h3>
          <p>After you created the bot field you are able to manage it from the main overview.</p>
          <p><img src="../../assets/img/bot_fields_03.d0957c5c.png" alt="title"></p>
          <p>You can create folders to better keep track of your bot fields. You can also enable or disable the template
            field option.</p>
          <p>Lastly, you are able to edit the bot field itself by pressing the pencil icon to the right of any bot
            field.</p>
          <h2 id="user-fields"><a href="#user-fields" class="header-anchor">#</a> User fields</h2>
          <p>User fields can be used to store data you collect from your bot users throughout the conversations you have
            with them.</p>
          <p>It will help you segment the users inside of a flow and allows you to create more customized funnels that
            will help you convert.</p>
          <h3 id="creating-a-user-field"><a href="#creating-a-user-field" class="header-anchor">#</a> Creating a user
            field</h3>
          <p>There are two ways to create a user field. We will explain both steps in this documentation.</p>
          <h3 id="create-user-field-in-tab-overview"><a href="#create-user-field-in-tab-overview"
              class="header-anchor">#</a> Create User field in tab overview</h3>
          <p>To find the user field overview press <strong>Contents</strong> from the left-hand menu and then select the
            <strong>User fields</strong> tab.</p>
          <p><img src="../../assets/img/user_fields_01.ae89d233.png" alt="title"></p>
          <p>From here you will come to your user fields overview where you can manage all of your user fields you
            create.</p>
          <p>To create a new user field press the blue button in the top right corner named <strong>+ New User
              Field</strong>.</p>
          <p>From here a new pop up window will appear where you will be able to set up your new user field.</p>
          <p><img src="../../assets/img/user_fields_02.7bc67a28.png" alt="title"></p>
          <p>Just name your new user field. The next step is to select what kind of user field you like to create.
            Currently, we have the following available for you:</p>
          <ul>
            <li>Text</li>
            <li>Number</li>
            <li>Boolean</li>
            <li>Date</li>
            <li>Datetime</li>
            <li>JSON</li>
          </ul>
          <p>These fields allow you to set up all kinds of options inside your chatbot including saving data from bot
            users or API calls as an array.</p>
          <p>You can also add a description if you like and or want to clarify what the function is. Below the
            description, you will be able to select whether or not you want to move it into one of the folders you might
            have created to keep user fields more structured and easy to find.</p>
          <p>Once you are done just press the blue button in the bottom right named <strong>Save</strong> and your user
            field will be created.</p>
          <h3 id="create-user-field-inside-flow-builder"><a href="#create-user-field-inside-flow-builder"
              class="header-anchor">#</a> Create user field inside flow builder</h3>
          <p>Another way to create a user field is by doing so directly inside the flow builder. This has the huge
            advantage that you can create user fields on the fly and not have to go to the user fields overview tab
            first.</p>
          <p>Just go to any flow and from here you can create user fields anywhere you need to use them.</p>
          <p>You will be able to create them inside of:</p>
          <ul>
            <li>Question blocks</li>
            <li>Action blocks -› set custom variable</li>
            <li>External request -› response tab</li>
          </ul>
          <p>Let’s take an example of a question block. We are wanting to store the response to the question inside of a
            new user field.</p>
          <p><img src="../../assets/img/user_fields_03.fa6d0e7f.png" alt="title"></p>
          <p>Just start typing a new user field name. The next step is to press the same name below your typed one to
            create the user field on the spot.</p>
          <p>You will then be asked which type of user field you would like to create. Depending on where you are or
            what kind of question you get to see different kinds of options.</p>
          <p><img src="../../assets/img/user_fields_04.05cb36ba.png" alt="title"></p>
          <p>In this case, since it is a regular question block we get to see;</p>
          <ul>
            <li>Text</li>
            <li>Number</li>
            <li>Boolean</li>
          </ul>
          <p>Were you to ask for a date/time type of question you would get to see that type of custom field only.</p>
          <h3 id="managing-your-user-fields"><a href="#managing-your-user-fields" class="header-anchor">#</a> Managing
            your user fields</h3>
          <p>To manage all your user fields you can do so at the main user fields overview tab.</p>
          <p><img src="../../assets/img/user_fields_05.d345ca5d.png" alt="title"></p>
          <p>You can create folders to keep your user field overview more structured and let you allow to find your user
            fields more easily.</p>
          <p>And you can manage any user field directly from this tab overview by pressing the pencil icon to the right
            of any user field.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/12/2022, 8:38:52
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="../automation/comment.php" class="prev">
                Comment Keywords
              </a></span> <span class="next"><a href="action-tag.php">
                Tags
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>