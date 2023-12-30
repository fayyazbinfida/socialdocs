<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="field-variable"><a href="#field-variable" class="header-anchor">#</a> Field (Variable)</h1>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>Before the detailed introduction of each step, let's take a look at what is
              <strong>field(variable)</strong> in Smart ChatBot. It might take you a moment but this is essential to know more
              about the system.</p>
          </div>
          <p>Field, aka variable, is a container to hold a value.</p>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Classification</th>
                <th style="text-align:center;">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;"><strong>system</strong> field and <strong>custom</strong> field</td>
                <td style="text-align:center;">system field is created by the system with pre-defined variable name and
                  type, while custom field is defined by yourself</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>bot</strong> field and <strong>user</strong> field</td>
                <td style="text-align:center;">bot field is shared in the whole bot, while each user has his/her own set
                  of user fields</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>text</strong> field, <strong>number</strong> field,
                  <strong>boolean</strong> field, <strong>date</strong> field, <strong>datetime</strong> field and
                  <strong>JSON</strong> field</td>
                <td style="text-align:center;">see <a href="field.php#variable-type">variable type</a></td>
              </tr>
            </tbody>
          </table>
          <h2 id="user-field"><a href="#user-field" class="header-anchor">#</a> User Field</h2>
          <p>User field belongs to users. For example, each user has their own name and email address. So
            &quot;name&quot; and &quot;email&quot; are user fields.</p>
          <h2 id="bot-field"><a href="#bot-field" class="header-anchor">#</a> Bot Field</h2>
          <p>Bot field belongs to the bot. For example, a restaurant bot holds an address and contact number of the
            restaurant. So &quot;restaurant_address&quot; and &quot;restaurant_contact&quot; should be created as bot
            fields. Because you don't want to manage different addresses or contacts of your restaurant for every user.
          </p>
          <h2 id="system-field"><a href="#system-field" class="header-anchor">#</a> System Field</h2>
          <p>System field is created by the system with pre-defined variable name and variable type. There are system
            bot field and system user field:</p>
          <p>Some system fields only exist in the specific channel. Check the table below for how to edit system field:
          </p>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Field Name</th>
                <th style="text-align:center;">Field Type</th>
                <th style="text-align:center;">Variable Type</th>
                <th style="text-align:center;">Description</th>
                <th style="text-align:center;">How to Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;">User Ns</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">user identification in Smart ChatBot</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">User Id*</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">user identification from the channel</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">First Name</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">in Question Step/Action Step</td>
              </tr>
              <tr>
                <td style="text-align:center;">Last Name</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">in Question Step/Action Step</td>
              </tr>
              <tr>
                <td style="text-align:center;">User Name</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">in Action Step</td>
              </tr>
              <tr>
                <td style="text-align:center;">Gender</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">in Action Step</td>
              </tr>
              <tr>
                <td style="text-align:center;">Email</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">in Question Step/Action Step</td>
              </tr>
              <tr>
                <td style="text-align:center;">Phone</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">in Question Step/Action Step</td>
              </tr>
              <tr>
                <td style="text-align:center;">Profile Image</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">in Question Step</td>
              </tr>
              <tr>
                <td style="text-align:center;">Locale</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">Timezone</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">Language</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">profile info</td>
                <td style="text-align:center;">in Action Step</td>
              </tr>
              <tr>
                <td style="text-align:center;">Subscribed</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">datetime</td>
                <td style="text-align:center;">subscribed time</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">Last Text Input</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">user's last input</td>
                <td style="text-align:center;">edited by system</td>
              </tr>
              <tr>
                <td style="text-align:center;">Last Interaction</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">datetime</td>
                <td style="text-align:center;">last action time</td>
                <td style="text-align:center;">edited by system</td>
              </tr>
              <tr>
                <td style="text-align:center;">Last Button Title</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">last button pressed</td>
                <td style="text-align:center;">edited by system</td>
              </tr>
              <tr>
                <td style="text-align:center;">Flow Ns</td>
                <td style="text-align:center;">bot field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">flow(bot) identification in Smart ChatBot</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">Sub Flow Ns</td>
                <td style="text-align:center;">bot field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">sub flow identification in Smart ChatBot</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">Page Name</td>
                <td style="text-align:center;">bot field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">connected Facebook page name</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">Page Id</td>
                <td style="text-align:center;">bot field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">connected Facebook page id</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">Page User Name</td>
                <td style="text-align:center;">bot field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">username of the page in Facebook</td>
                <td style="text-align:center;">non-editable</td>
              </tr>
              <tr>
                <td style="text-align:center;">Last FB Comment</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">user's last comment text in the Facebook page</td>
                <td style="text-align:center;">edit by system</td>
              </tr>
              <tr>
                <td style="text-align:center;">Last FB Comment Post Id</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">post id of where user put the last comment</td>
                <td style="text-align:center;">edit by system</td>
              </tr>
              <tr>
                <td style="text-align:center;">Last FB Comment total tagged users</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">number</td>
                <td style="text-align:center;">tagged users amount in last comment</td>
                <td style="text-align:center;">edit by system</td>
              </tr>
              <tr>
                <td style="text-align:center;">Last FB Comment total new tagged users</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">number</td>
                <td style="text-align:center;">tagged but haven't subscribed(to bot) users amount</td>
                <td style="text-align:center;">edit by system</td>
              </tr>
              <tr>
                <td style="text-align:center;">Last FB Comment is existing users</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">number</td>
                <td style="text-align:center;">before this comment, is he/she an existing user? yes=1,no=0</td>
                <td style="text-align:center;">edit by system</td>
              </tr>
              <tr>
                <td style="text-align:center;">Live Chat Url</td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">text</td>
                <td style="text-align:center;">(for agent) visit to talk to user in live chat</td>
                <td style="text-align:center;">edit by system</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>NOW</strong></td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">datetime</td>
                <td style="text-align:center;">current time in user's timezone*</td>
                <td style="text-align:center;">edited by system</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>TODAY</strong></td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">date</td>
                <td style="text-align:center;">current date in user's timezone*</td>
                <td style="text-align:center;">edited by system</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>BOT_CURRENT_TIME</strong></td>
                <td style="text-align:center;">bot field</td>
                <td style="text-align:center;">datetime</td>
                <td style="text-align:center;">current datetime in workspace's timezone</td>
                <td style="text-align:center;">edited by system</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>ITEM</strong></td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">array (JSON)</td>
                <td style="text-align:center;">each item in a JSON</td>
                <td style="text-align:center;">in &quot;For Each&quot; message</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>SELECT</strong></td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">array (JSON)</td>
                <td style="text-align:center;">selected item</td>
                <td style="text-align:center;">in &quot;Select&quot; new step</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>SHOP</strong></td>
                <td style="text-align:center;">bot field</td>
                <td style="text-align:center;">array (JSON)</td>
                <td style="text-align:center;">store information</td>
                <td style="text-align:center;">in Ecommerce Integration</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>CART</strong></td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">array (JSON)</td>
                <td style="text-align:center;">user shopping cart</td>
                <td style="text-align:center;">in Action Step</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>ORDER</strong></td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">array (JSON)</td>
                <td style="text-align:center;">user's last order</td>
                <td style="text-align:center;">edited by system</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>User</strong></td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">array (JSON)</td>
                <td style="text-align:center;">user's profile</td>
                <td style="text-align:center;">edited by system according to other profile values</td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>DialogFlow</strong></td>
                <td style="text-align:center;">user field</td>
                <td style="text-align:center;">array (JSON)</td>
                <td style="text-align:center;">DialogFlow response</td>
                <td style="text-align:center;">edited by DialogFlow agent</td>
              </tr>
            </tbody>
          </table>
          <div class="custom-block tip">
            <p class="custom-block-title">*Note</p>
            <p>If the channel doesn't support timezone in user's profile, or, the channel supports but the user don't
              have a timezone value, workspace timezone will be used instead.</p>
          </div>
          <h2 id="user-id-in-different-channels"><a href="#user-id-in-different-channels" class="header-anchor">#</a>
            User Id in Different Channels:</h2>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Channel</th>
                <th style="text-align:center;">Meaning</th>
                <th style="text-align:center;">Example Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;">Facebook</td>
                <td style="text-align:center;">Unique Id in your Facebook page</td>
                <td style="text-align:center;">6288386817841812</td>
              </tr>
              <tr>
                <td style="text-align:center;">Instagram</td>
                <td style="text-align:center;">Unique Id in your Instagram bot</td>
                <td style="text-align:center;">6570462892993643</td>
              </tr>
              <tr>
                <td style="text-align:center;">Telegram</td>
                <td style="text-align:center;">Unique Id in your Telegram bot</td>
                <td style="text-align:center;">1173717756</td>
              </tr>
              <tr>
                <td style="text-align:center;">Slack</td>
                <td style="text-align:center;">Unique Id in your Slack workspace</td>
                <td style="text-align:center;">U017MKNENH</td>
              </tr>
              <tr>
                <td style="text-align:center;">WeChat</td>
                <td style="text-align:center;">Unique Id in your WeChat account</td>
                <td style="text-align:center;">oNzS3wpEjnA3tXmOcNxpqtAnBwWg</td>
              </tr>
              <tr>
                <td style="text-align:center;">WhatsApp</td>
                <td style="text-align:center;">User's phone number without <strong>+</strong></td>
                <td style="text-align:center;"><strong>61412345678</strong></td>
              </tr>
              <tr>
                <td style="text-align:center;">SMS</td>
                <td style="text-align:center;">User's phone number</td>
                <td style="text-align:center;"><strong>+61412345678</strong></td>
              </tr>
              <tr>
                <td style="text-align:center;">Voice</td>
                <td style="text-align:center;">User's phone number</td>
                <td style="text-align:center;"><strong>+61412345678</strong></td>
              </tr>
              <tr>
                <td style="text-align:center;">Google</td>
                <td style="text-align:center;">Conversation Id from Google</td>
                <td style="text-align:center;">8095938e-90cf-4347-ab94-9224308672b0</td>
              </tr>
              <tr>
                <td style="text-align:center;">Line</td>
                <td style="text-align:center;">Unique Id in your Line bot</td>
                <td style="text-align:center;">Ub02c77c69c59c5be5597d58ce2701ebe</td>
              </tr>
              <tr>
                <td style="text-align:center;">Viber</td>
                <td style="text-align:center;">Unique Id in your Viber bot</td>
                <td style="text-align:center;">mdY9hOWdeQC6J/Sl19Qh8A==</td>
              </tr>
              <tr>
                <td style="text-align:center;">Vk</td>
                <td style="text-align:center;">Unique Id in your Vk bot</td>
                <td style="text-align:center;">705862439</td>
              </tr>
            </tbody>
          </table>
          <div class="custom-block warning">
            <p class="custom-block-title">Note</p>
            <p>The unique id from the channel is only unique in your Facebook page, Telegram bot, Slack workspace or
              WeChat account, not the unique id in the whole Facebook, Slack, etc.</p>
          </div>
          <h2 id="variable-type"><a href="#variable-type" class="header-anchor">#</a> Variable Type</h2>
          <p>There are 6 types of variable in Smart ChatBot:</p>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Type</th>
                <th style="text-align:center;">Storage</th>
                <th style="text-align:center;">Example</th>
                <th style="text-align:left;">Operations Supported</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;">Text</td>
                <td style="text-align:center;">letters, words, sentences...</td>
                <td style="text-align:center;">Hi, Smart ChatBot.</td>
                <td style="text-align:left;">cutting, change case, encode, decode...</td>
              </tr>
              <tr>
                <td style="text-align:center;">Number</td>
                <td style="text-align:center;">numbers</td>
                <td style="text-align:center;">123.45</td>
                <td style="text-align:left;">+ - x ÷, mod, power, log, root, round...</td>
              </tr>
              <tr>
                <td style="text-align:center;">Boolean</td>
                <td style="text-align:center;">either &quot;1&quot; or &quot;0&quot;, for true or false</td>
                <td style="text-align:center;">1</td>
                <td style="text-align:left;">assign</td>
              </tr>
              <tr>
                <td style="text-align:center;">Date</td>
                <td style="text-align:center;">date</td>
                <td style="text-align:center;">2021-03-30</td>
                <td style="text-align:left;">format, add months/weeks/days</td>
              </tr>
              <tr>
                <td style="text-align:center;">DateTime</td>
                <td style="text-align:center;">date and time</td>
                <td style="text-align:center;">2022-01-01T12:00:00+10:00</td>
                <td style="text-align:left;">format, add months/weeks/days/hours/minutes</td>
              </tr>
              <tr>
                <td style="text-align:center;">JSON (array)</td>
                <td style="text-align:center;">a series of variables</td>
                <td style="text-align:center;">{&quot;name&quot;:&quot;Jack&quot;, &quot;age&quot;:&quot;20&quot;}</td>
                <td style="text-align:left;">load, get, update, remove, count, sum, average, sort, shuffle, reverse...
                </td>
              </tr>
            </tbody>
          </table>
          <h3 id="boolean-value"><a href="#boolean-value" class="header-anchor">#</a> Boolean Value</h3>
          <p>When these values stored in the field, the boolean return <strong>false</strong>, otherwise it goes
            <strong>true</strong>:</p>
          <ul>
            <li>empty</li>
            <li>null</li>
            <li>'false'</li>
            <li>false</li>
            <li>'no'</li>
            <li>0</li>
          </ul>
          <h2 id="create-custom-field"><a href="#create-custom-field" class="header-anchor">#</a> Create Custom Field
          </h2>
          <p>Wow, now you are a master 👨‍🎓 of field! Let's try it out! 😎😎</p>
          <p>You can create variables in 2 ways:</p>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Place</th>
                <th style="text-align:center;">Type Supported</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;">in Contents section</td>
                <td style="text-align:center;">user field &amp; bot field</td>
              </tr>
              <tr>
                <td style="text-align:center;">anywhere you need to map result to variable, e.g. Question step,
                  Integration, etc</td>
                <td style="text-align:center;">user field only</td>
              </tr>
            </tbody>
          </table>
          <h3 id="create-custom-field-in-contents-section"><a href="#create-custom-field-in-contents-section"
              class="header-anchor">#</a> Create Custom Field in Contents Section</h3>
          <p><img src="../assets/img/question2.c75fbeab.png" alt="question"></p>
          <ol>
            <li>go &quot;Contents&quot; from the left sidebar</li>
            <li>select User Fields or Bot Fields</li>
            <li>use folder to organize your fields if needed</li>
          </ol>
          <p><img src="../assets/img/question3.668bd8e2.png" alt="question"></p>
          <p>Click the blue &quot;+ New User/Bot Field&quot; button on the right side to create a field. &quot;Field
            Name&quot; is a must. You can use any character to separate words like underline or space. We suggest you
            keep the field name as concise as possible, to avoid any possible display issue.</p>
          <p>After that, pick a variable type. Add default value or description if needed. (default value is for bot
            fields only)</p>
          <p>Folders can be used to organize variables. Trust me, you will need it when your flow goes big. 🧐</p>
          <h3 id="create-custom-field-in-question-and-action-step"><a
              href="#create-custom-field-in-question-and-action-step" class="header-anchor">#</a> Create Custom Field in
            Question and Action Step</h3>
          <p>To create new fields in for example, the question step:</p>
          <p><img src="../assets/img/question4.07398aeb.png" alt="question"></p>
          <p>Type in a new variable name in the &quot;Enter Field Name&quot; box and click it in the drop-down list.
            Select correspond variable type and here you go.</p>
          <p><img
              src="data:image/png;base64,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"
              alt="question"></p>
          <p>Another example, create in an integration:</p>
          <p><img src="../assets/img/question38.daaa0bf7.png" alt="question"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">6/6/2022, 11:34:37
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="index.php" class="prev router-link-active">
                Flow Builder Overview
              </a></span> <span class="next"><a href="send-message.php">
                Send Message Step
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>