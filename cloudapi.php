<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="whatsapp-cloud-api"><a href="#whatsapp-cloud-api" class="header-anchor">#</a> WhatsApp Cloud API</h1>
          <p>Facebook announced WhatsApp cloud API on 20th May, and it’s available to any business of any size, big and
            small.</p>
          <p><img src="../assets/img/cloud_api01.034dd7e0.png" alt="title"></p>
          <p>This documentation will teach you how to set up WhatsApp cloud API with Smart ChatBot. You will be able to build
            your WhatsApp chatbot with a free testing number offered by Facebook, and also switch to the live production
            when your bot is ready to go live!</p>
          <p>Please note:</p>
          <p>For now, due to certain limitations of WhatsApp cloud API, every business needs to create its own Facebook
            App in order to use WhatsApp cloud API. Once Facebook allows platforms like Smart ChatBot to create a WhatsApp
            business account, we will improve the process to use WhatsApp cloud API.</p>
          <p>Here is the overview video on how to build your first WhatsApp bot with Cloud API</p>
          <p>Part 1:</p> <iframe width="649" height="365" src="https://www.youtube.com/embed/OWM1OBGkwYc"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <p>Part 2:</p> <iframe width="649" height="365" src="https://www.youtube.com/embed/4p--1BpzQYc"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <p>Now, Let’s get started by creating your own Facebook App.</p>
          <h2 id="set-up-facebook-app"><a href="#set-up-facebook-app" class="header-anchor">#</a> Set up Facebook App
          </h2>
          <p>First, you need to register as a <a href="https://developers.facebook.com/apps" target="_blank"
              rel="noopener noreferrer">meta developer<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>, and then <a
              href="https://www.facebook.com/help/148233965247823" target="_blank" rel="noopener noreferrer">enable
              two-factor authentication<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a> for your account.</p>
          <p>And then you can click the <strong>“create a new app”</strong> from the top right of your dashboard, and
            then select <strong>“Business”</strong> as the app type:</p>
          <p><img src="../assets/img/cloud_api02.7c0c2048.png" alt="title"></p>
          <p>Then put the display name, and add the app contact email, if you want to connect this app to any of your
            business accounts, you can click the drop-down to connect them.</p>
          <p><img src="../assets/img/cloud_api03.32cfc5d5.png" alt="title"></p>
          <p>After you create your own app, and then you scroll down to WhatsApp, and then click <strong>“Set
              up”</strong> in the WhatsApp product.</p>
          <p><img src="../assets/img/cloud_api04.9b962fd2.png" alt="title"></p>
          <p>And then you will be redirected to the screenshot below:</p>
          <p><img src="../assets/img/cloud_api05.a9419b14.png" alt="title"></p>
          <p>Now, you can click the <strong>“Get started”</strong> under WhatsApp, and then you will redirect to the
            screenshot below:</p>
          <p><img src="../assets/img/cloud_api06.da001c85.png" alt="title"></p>
          <p>Select the business account that owns the phone number you want to use for WhatsApp automation. If you
            don’t have a business account, Facebook will automatically create one for you.</p>
          <p>Then you need to click the “configuration” to set up your own webhook.</p>
          <p><img src="../assets/img/cloud_api07.98a08052.png" alt="title"></p>
          <h2 id="get-your-webhook-from-uchat"><a href="#get-your-webhook-from-uchat" class="header-anchor">#</a> Get
            your Webhook from Smart ChatBot</h2>
          <p>Now, you need to go back to Smart ChatBot, and then select the WhatsApp cloud, click “Connect WhatsApp Cloud”</p>
          <p><img src="../assets/img/cloud_api08.daa1ebf8.png" alt="title"></p>
          <p>After you click the button, it will pop up the window for you to authorize your Facebook account, and then
            select the business account you want to connect to.</p>
          <p>You can connect one business account under one workspace. Multiple numbers can be connected to the same
            business account.</p>
          <p><img src="../assets/img/cloud_api09.146fc753.png" alt="title"></p>
          <p>After you select your business account, you will be redirected back to Smart ChatBot. And then after you click the
            “list businesses with WhatsApp phone numbers”</p>
          <p>It will list all the WhatsApp numbers in this business account. You can click the “Select” button to the
            next step.</p>
          <p><img src="../assets/img/cloud_api10.cd7116ab.png" alt="title"></p>
          <p>Then you will see your unique <strong>Webhook URL and token</strong> to use in the next step.</p>
          <p>Now you can go back to the app in your Facebook developer account, and then click “Edit” in the
            configuration as per the screenshot below:</p>
          <p><img src="../assets/img/cloud_api11.e91a51c0.png" alt="title"></p>
          <p>In the pop-up window, paste your webhook URL and token from Smart ChatBot.</p>
          <p><img src="../assets/img/cloud_api12.19d3aed1.png" alt="title"></p>
          <p>And then click “verify &amp; save”.</p>
          <p>After you add the webhook URL, now you need to click the “manage” under the Webhook field.</p>
          <p><img src="../assets/img/cloud_api13.4ce2c96f.png" alt="title"></p>
          <p>You need to <strong>subscribe to the “messages”</strong> as per the screenshot below:</p>
          <p><img src="../assets/img/cloud_api14.c65b0d29.png" alt="title"></p>
          <p>Now, you can go to Smart ChatBot, and sync numbers &amp; pick a number to create your WhatsApp chatbot.</p>
          <p>Please note, that every app will be offered a test number for free from Facebook. You can easily start
            testing with this test number.</p>
          <h2 id="start-with-test-numbers"><a href="#start-with-test-numbers" class="header-anchor">#</a> Start with
            test numbers</h2>
          <p>The test number allows you to have an unlimited free conversation with a set of verified phone numbers. You
            need first to verify your phone numbers. You can do so by clicking the “add the phone number” below:</p>
          <p><img src="../assets/img/cloud_api15.d4dea1ad.png" alt="title"></p>
          <p>And then you need to verify this phone number by receiving an SMS from Facebook.</p>
          <p><img src="../assets/img/cloud_api16.593cea30.png" alt="title"></p>
          <p>After your phone number is verified, you can send a text message, and preview the chatbot you built with
            this test number.</p>
          <h2 id="build-whatsapp-bot-with-testing-whatsapp-number"><a
              href="#build-whatsapp-bot-with-testing-whatsapp-number" class="header-anchor">#</a> Build WhatsApp bot
            with testing WhatsApp number</h2>
          <p>In Smart ChatBot, if you synced numbers, you will see the screenshot below, and select the test number offered from
            Facebook, you can start building your first WhatsApp chatbot.</p>
          <p><img src="../assets/img/cloud_api17.d00ee47d.png" alt="title"></p>
          <p>And then confirm the selection.</p>
          <p><img src="../assets/img/cloud_api18.b86b569a.png" alt="title"></p>
          <p>And then you can create the bot to test the connection.</p>
          <p><img src="../assets/img/cloud_api19.0801b48a.png" alt="title"></p>
          <p>And you can create a simple flow like the below to test the send message &amp; also question block.</p>
          <p><img src="../assets/img/cloud_api20.3d73ae50.png" alt="title"></p>
          <p>After you build this simple flow, click “Preview” and then select “Open in WhatsApp”, and test if the bot
            is responding or not.</p>
          <p><img src="../assets/img/cloud_api21.89839c46.png" alt="title"></p>
          <p>And then you can follow the instructions, and you will see that WhatsApp is working properly.</p>
          <p>You can build your automation with the test number, and after all the tests, if you are ready to push the
            bot to a real WhatsApp number, you can follow the instructions below.</p>
          <p>If you don’t receive messages, it’s possible that you haven’t added your phone number to a verified phone
            number in the app.</p>
          <p>For test phone numbers, you can send unlimited messages, but it’s only for verified phone numbers you
            added.</p>
          <h2 id="supported-message-types"><a href="#supported-message-types" class="header-anchor">#</a> Supported
            message types</h2>
          <p><strong>Regular massage type</strong></p>
          <p>Smart ChatBot supports you to send regular text, text+buttons, files, audio, images, and also cards in this
            WhatsApp channel.</p>
          <p>WhatsApp cloud API is sharing the same for most of the elements, you can watch our 360dialog demo for a
            general idea.</p>
          <p>👉</p> <iframe width="649" height="365" src="https://www.youtube.com/embed/zEFjlQ8F-Mg"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <p>👉</p> <iframe width="649" height="365" src="https://www.youtube.com/embed/ET0KRoNs7jQ"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <p>All these message types are supported in Cloud API as well.</p>
          <h2 id="template-message"><a href="#template-message" class="header-anchor">#</a> Template message</h2>
          <p>Template messages must be submitted for Facebook's approval before they are available to use. It is
            Facebook that reviews each template to avoid spam and to check that each message complies with their
            WhatsApp API guidelines.</p>
          <p>Here is a youtube video about how to apply for the template message, you can watch it here:</p> <iframe
            width="649" height="365" src="https://www.youtube.com/embed/5dN39PWFZQQ" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <h3 id="when-to-use-templates-for-whatsapp-messaging"><a href="#when-to-use-templates-for-whatsapp-messaging"
              class="header-anchor">#</a> When to use templates for WhatsApp messaging?</h3>
          <p>A template message needs to be sent whenever it is outside of a Customer Service Window, which means,
            whenever it has been more than 24 hours since the customer sent their last message to that business phone
            number.</p>
          <p>You regularly use the message template to send notifications.</p>
          <p>Templates use placeholder values that can be replaced with dynamic content inside double curly braces when
            the message is sent. Think of template messages as a conversation starter in a two-way conversation.</p>
          <p>For more information about WhatsApp Template Messaging, review the <a
              href="https://developers.facebook.com/docs/whatsapp/message-templates/guidelines" target="_blank"
              rel="noopener noreferrer">Official Facebook Documentation for the WhatsApp Business API<span><svg
                  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px" y="0px"
                  viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a></p>
          <h3 id="cost-of-whatsapp-conversations"><a href="#cost-of-whatsapp-conversations" class="header-anchor">#</a>
            Cost of Whatsapp conversations</h3>
          <p>You can find more about cost pricing information below:
            https://developers.facebook.com/docs/whatsapp/pricing/conversationpricing</p>
          <p>Charges for conversations are based on the user’s phone number. Rates for business-initiated conversations
            and user-initiated conversations vary by market (country or region). See <a
              href="https://developers.facebook.com/docs/whatsapp/pricing/conversationpricing?_hsmi=200111438&amp;_hsenc=p2ANqtz-_dneKUCWaioWXnmZKnm8HzdqhHEmvOLlHZG7J6mXU5kRQNQGaRWQ8E0FZCaDjFXk-RGFninkPU1UXEuDR7YBR0dzD_TabBYEXRH-8_Q5YENSHhs1Q#rates"
              target="_blank" rel="noopener noreferrer">Rates<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a> for specific pricing information.</p>
          <h3 id="best-practice-to-get-your-template-message-approved"><a
              href="#best-practice-to-get-your-template-message-approved" class="header-anchor">#</a> Best practice to
            get your template message approved</h3>
          <p>Here are some tips to get your templates through the review process:</p>
          <p><strong>Clarity:</strong> be specific and clear. The reviewers may not know a customer’s business and need
            more clarity. Avoid promotion: upselling, cold-call messaging, sending a poll to collect data, and including
            certain phrases that sound promotional are all considered promotional.</p>
          <p><strong>Spelling:</strong> check for spelling and grammatical errors and use appropriate formatting (e.g.,
            double curly brackets for parameters).</p>
          <p><strong>Name:</strong> make your message template name clear. Instead of using a name like template_014,
            use bus_ticket_details. Remember that someone from Facebook will be reviewing your templates. Providing more
            clarity gives reviewers context around how the template will be used.</p>
          <p><strong>Create context:</strong> if you need to write a message template to re-open the 24-hour window, we
            would suggest starting with some mention of the previous conversation thread.</p>
          <p><strong>Choose an appropriate category:</strong> don’t forget to use the correct message template type.
            Choosing the correct one will increase the chances of getting your templates approved and will provide more
            information to WhatsApp during the approval process.</p>
          <p>The categories you can choose are listed below.
            Header (optional): you can add a title or choose which type of media you'll use for this header. Image, PDF
            and Video are supported.</p>
          <h3 id="different-categories-of-the-message-template"><a href="#different-categories-of-the-message-template"
              class="header-anchor">#</a> Different categories of the message template</h3>
          <p><strong>Account update:</strong>
            Let customers know about updates or changes to their accounts. You can use this to notify the message
            recipient of a change to their account settings.</p>
          <ul>
            <li>Preferences are updated</li>
            <li>Settings have changed</li>
            <li>Membership has expired</li>
            <li>Profile has changed</li>
          </ul>
          <p><strong>Alert update:</strong>
            Send important updates or news to customers.</p>
          <p><strong>Appointment update:</strong>
            Send confirmations, reminders or other updates to customers about their appointments. For example:</p>
          <ul>
            <li>Appointment time changes</li>
            <li>Appointment location changes</li>
            <li>Appointment is cancelled</li>
          </ul>
          <p><strong>Auto-Reply:</strong>
            Send auto-replies to customers when your business isn't online or available to respond right away.</p>
          <p><strong>Issue resolution:</strong>
            Respond to questions, concerns or feedback from customers about your business. For example:</p>
          <ul>
            <li>Issue is resolved</li>
            <li>Issue status is updated</li>
            <li>Issue requires a request for additional information</li>
            <li>Notify the message recipient of something informational like Business hours/hours of availability</li>
          </ul>
          <p><strong>One-Time Password:</strong>
            Send auto-generated verification codes so customers can securely access their accounts.</p>
          <p><strong>Payment update:</strong>
            Send a message to customers about their payment. For example:</p>
          <ul>
            <li>Send an out-of-stock notification</li>
            <li>Notify an auction has ended</li>
            <li>Status of a payment transaction has changed</li>
            <li>Send a receipt</li>
          </ul>
          <p><strong>Personal Finance update:</strong>
            Send a message to customers about their personal finances. For example:</p>
          <ul>
            <li>Bill-pay reminders</li>
            <li>Scheduled payment reminder</li>
            <li>Payment receipt notification</li>
            <li>Funds transfer confirmation or update</li>
            <li>Other transactional activities in financial services</li>
          </ul>
          <p><strong>Reservation update:</strong>
            Send confirmations, reminders or other updates to customers about their reservations. For example:</p>
          <ul>
            <li>Location changes</li>
            <li>Cancellation is confirmed</li>
            <li>Hotel booking is cancelled</li>
            <li>Car rental pick-up time changes</li>
            <li>Room upgrade is confirmed</li>
            <li>Itinerary changes</li>
          </ul>
          <p><strong>Shipping update:</strong>
            Send shipping updates to customers about their orders. For example:</p>
          <ul>
            <li>Product is shipped</li>
            <li>Status changes to in-transit</li>
            <li>Product is delivered</li>
            <li>Shipment is delayed</li>
          </ul>
          <p><strong>Ticket update:</strong>
            Send shipping updates to customers about their orders. For example:</p>
          <ul>
            <li>Concert start time changes</li>
            <li>Event location changes</li>
            <li>Show is cancelled</li>
            <li>A refund opportunity is made available</li>
          </ul>
          <p><strong>Transportation update:</strong>
            Send shipping updates to customers about their orders. For example:</p>
          <ul>
            <li>Flight status changes</li>
            <li>Ride is cancelled</li>
            <li>Trip is started</li>
            <li>Ferry has arrived</li>
          </ul>
          <p>If you don’t have a specific category to fit in, you can always choose auto-reply.</p>
          <p><img src="../assets/img/cloud_api22.d5760904.png" alt="title"></p>
          <h3 id="building-blocks-of-template-message"><a href="#building-blocks-of-template-message"
              class="header-anchor">#</a> Building blocks of template message</h3>
          <p>The media templates have more building blocks and features, it consists of the following building blocks:
          </p>
          <ul>
            <li>
              <p><strong>Header:</strong>
                The header is optional and serves as the title or header of your template. It supports the following:
                text, image, document &amp; video</p>
            </li>
            <li>
              <p><strong>Body:</strong>
                The body should contain the most important text of your template. Only text is supported</p>
            </li>
            <li>
              <p><strong>Footer:</strong>
                The footer only supports text and can be used to provide less relevant information in your template
                message</p>
            </li>
            <li>
              <p><strong>Button:</strong>
                The button adds interactivity to your templates. There are two main types.</p>
            </li>
            <li>
              <p><strong>Quick reply button:</strong>
                Used for getting quick answers from your client, Max 3 Quick reply buttons per template</p>
            </li>
            <li>
              <p><strong>Call to Action button:</strong>
                Max one URL and phone number per template.</p>
            </li>
          </ul>
          <p>Please note:</p>
          <ul>
            <li>All templates require a body, header, footer and buttons are optional.</li>
            <li>All media examples must be URLs that point to a valid media file.</li>
          </ul>
          <h3 id="create-template-message"><a href="#create-template-message" class="header-anchor">#</a> Create
            template message</h3>
          <p>In this section, you will need to log in to your <strong>Whatsapp business manager account</strong>. Select
            the business manager account from the drop-down if there is any, and then select “template message”</p>
          <p>Please note: Test WhatsApp number doesn't support creating template messages, you need to use a new real
            phone number to create a new template message.</p>
          <p><img src="../assets/img/cloud_api23.39dcce0c.png" alt="title"></p>
          <p>And after you clicked the “Create message template” from the top right corner of the dashboard.</p>
          <p>You need to fill up the template name and select the message category and languages.</p>
          <p>Create standard(text only) templates:</p>
          <p><img src="../assets/img/cloud_api24.10b8305e.png" alt="title"></p>
          <p>Below is the template message we created, and after you create the template, submit it to Facebook for
            review.</p>
          <p>If you follow the best practice, your template will get approved very soon.</p>
          <p>Once the template message gets approved, you will see the approved icon below.</p>
          <p><img src="../assets/img/cloud_api25.7f403f55.png" alt="title"></p>
          <p>Now you can go back to Smart ChatBot, and go to the WhatsApp channel,</p>
          <p><img src="../assets/img/cloud_api26.81f86a29.png" alt="title"></p>
          <p>Once you go to the content, and message templates, and click <strong>“Sync WhatsApp Template”</strong>, you
            should be able to see that all the approved templates will be synced back to Smart ChatBot to use.</p>
          <h2 id="how-to-use-template-message"><a href="#how-to-use-template-message" class="header-anchor">#</a> How to
            use Template message</h2>
          <ul>
            <li><em><strong>Use in the flow builder</strong></em></li>
          </ul>
          <p>Template messages offer more features, like the buttons(which can link to external URLs) &amp; phone call
            buttons.</p>
          <p>You can send the template message right in the flow builder. It’s free to send if it’s within a 24-hour
            engagement window.</p>
          <p>In the send message mode, select “Message template”, and if you have a variable in the template message,
            you can select the custom field in the Smart ChatBot.</p>
          <p><img src="../assets/img/cloud_api27.8be3b16c.png" alt="title"></p>
          <p><img src="../assets/img/cloud_api28.7d0fa4cd.png" alt="title"></p>
          <ul>
            <li><em><strong>Use in the broadcast</strong></em></li>
          </ul>
          <p>You can also use template messages in the broadcast of Smart ChatBot.</p>
          <p>Let’s first build out the flow you want to send the broadcast. You can use a simple conditional check to
            decide if you want to use a template message or not.</p>
          <p><img src="../assets/img/cloud_api29.1c318e48.png" alt="title"></p>
          <p>In the sample flow above, we first use conditions to check if the user is still within the 24-hour window,
            if they are, then you can reach out to them for free.</p>
          <p>And then you can also select to send them an email if you have their email address.</p>
          <p>At last, you can select to send a template to the user.</p>
          <p>After you set up the flow to use in the broadcast, you can now go to the broadcast and select the audience
            you want, and then send the flow you just built.</p>
          <p><img src="../assets/img/cloud_api30.f21d8536.png" alt="title"></p>
          <ul>
            <li><em><strong>Use in the live Chat</strong></em></li>
          </ul>
          <p>In the live chat, if the user is out of the 24-hour window, you can only reach them through the template
            message.</p>
          <p>If you go to the live chat window, you will see the option of “I want to send template message”</p>
          <p><img src="../assets/img/cloud_api31.d74ca74d.png" alt="title"></p>
          <p>Please note that the template will be sent only if it’s the first message in the subflow.</p>
          <p>Then you can pick up the subflow that starts with the template message.</p>
          <ul>
            <li><em><strong>Use in Smart ChatBot mobile apps</strong></em></li>
          </ul>
          <p>Once you start using WhatsApp business API, you won’t get to use the number in your WhatsApp business app
            or personal WhatsApp app.</p>
          <p>Smart ChatBot offers options that you can install our mobile app to handle the live chat conversations.</p>
          
          <p>After the download, you can also send a template message in our mobile app to the user who is out of the
            24-hour contact window, and then select the subflow you want to send.</p>
          <h2 id="whatsapp-native-ecommerce-product-catalog-message"><a
              href="#whatsapp-native-ecommerce-product-catalog-message" class="header-anchor">#</a> WhatsApp Native
            Ecommerce - Product catalog message</h2>
          <p>You can showcase and share your products and services with your customers for them to browse items and add
            to a cart without leaving the chat.</p>
          <p>Here is a few demo video you can check:</p>
          <ul>
            <li>Native &amp; Smooth WhatsApp eCommerce checkout demo:</li>
          </ul> <iframe width="649" height="365" src="https://www.youtube.com/embed/9fTvOc5WmkU"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <ul>
            <li>WhatsApp eCommerce chatbot with RazorPay demo:</li>
          </ul> <iframe width="649" height="365" src="https://www.youtube.com/embed/AeAaRES40wQ"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <ul>
            <li>WhatsApp eCommerce chatbot with Billplz demo:</li>
          </ul> <iframe width="649" height="365" src="https://www.youtube.com/embed/wPPApsfoSaw"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <p>Please note:</p>
          <ul>
            <li>test WhatsApp phone numbers don’t support testing product catalogue messages.</li>
            <li>Also, WhatsApp cloud API doesn't support product catalog features yet. You have to use BSP(like
              360dialog) for now. Once WhatsApp cloud API is supported, we will make updates.</li>
          </ul>
          <p><img src="../assets/img/cloud_api32.a8bede19.png" alt="title"></p>
          <p>But once this message type is supported, you will be able to build the native ecommerce shopping experience
            with Cloud API as well.</p>
          <p>For now, you can use our 360Dialog integration for it.</p>
          <p>You can find the step by step training below &amp; demo as well.</p>
          <p>You can watch the demo and build with the product catalog message <a
              href="https://www.youtube.com/playlist?list=PLYV-IhQ_GwTMKRimIvlwY8Ul-PKziAqoo" target="_blank"
              rel="noopener noreferrer">here<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>.</p>
          <p>To use products and catalogs in your WhatsApp Business API account, please follow the next steps.</p>
          <ul>
            <li><em><strong>Create product catalog &amp; Upload Inventory to Facebook</strong></em></li>
          </ul>
          <p>First, you need to upload your inventory to Facebook. You can use the API or Facebook’s Commerce Manager to
            do that.</p>
          <p>Your inventory needs to be uploaded to Facebook in a catalog format — see <a
              href="https://www.facebook.com/business/help/890714097648074" target="_blank"
              rel="noopener noreferrer">About Catalogs<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a> for more information.</p>
          <p><strong>If you already have a Facebook catalog set up</strong>, we suggest that you leverage that catalog
            for WhatsApp commerce use cases.</p>
          <p><strong>If you need to create a catalog</strong>, there are two possibilities:</p>
          <ul>
            <li><a href="https://developers.facebook.com/docs/commerce-platform/catalog/get-started" target="_blank"
                rel="noopener noreferrer">Create a catalog using the API<span><svg xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a></li>
            <li><a href="https://www.facebook.com/business/help/1275400645914358" target="_blank"
                rel="noopener noreferrer">Create a catalog using the Commerce Manager<span><svg
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px" y="0px"
                    viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a></li>
          </ul>
          <p>You can upload only one catalog per WhatsApp Business Account (WABA), but the same catalog can belong to
            multiple phone numbers.</p>
          <p>You can watch the video here:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/elAF3Kly5tQ" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/6I2DOrmNbJM" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <ul>
            <li><em><strong>Special requirement for selling in India</strong></em>
              If you are selling in India, you need to comply with Facebook requirements regarding the product catalog,
              more details, you can find out in the video below:</li>
          </ul> <iframe width="649" height="365" src="https://www.youtube.com/embed/oqYBmY7G1Bk"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <ul>
            <li><em><strong>Sync the products from Facebook to Smart ChatBot</strong></em>
              Now back to Smart ChatBot, go to the WhatsApp Cloud channel, you can click “View Catalog”, and then it will pull
              all the catalogs under your current business account.</li>
          </ul>
          <p><img src="../assets/img/cloud_api33.8369dd76.png" alt="title"></p>
          <p>And select the “Facebook to Local” button as per the screenshot above. You should be able to sync all the
            products in your Facebook catalog back to our built-in eCommerce.</p>
          <p><img src="../assets/img/cloud_api34.e7d0e677.png" alt="title"></p>
          <p>And the most important thing here is to make sure the “SKU” in Smart ChatBot is the same as “ContentID” with your
            Facebook Catalog.</p>
          <p><img src="../assets/img/cloud_api35.62730861.png" alt="title"></p>
          <p>And here is the same value in Facebook Catalog.</p>
          <p><img src="../assets/img/cloud_api36.392f83ac.png" alt="title"></p>
          <ul>
            <li><em><strong>Connect Product catalog with WhatsApp number</strong></em></li>
          </ul>
          <p>You need to connect your WhatsApp number with a product catalog. Only after that, you can send the product
            catalog messages.</p>
          <p>You can learn how to do that through the video below:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/QbUFDRMXXWw" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <ul>
            <li><em><strong>Send product catalog message</strong></em></li>
          </ul>
          <p>Now you have to sync the product catalog into Smart ChatBot built-in eCommerce, you can now use the send product in
            the send message node.</p>
          <p>If you go to your WhatsApp Cloud API, when you click “View catalogue”, you will be able to see the catalog
            ID that is connected with your WABA account.</p>
          <p><img src="../assets/img/cloud_api37.18258a6f.png" alt="title"></p>
          <p><img src="../assets/img/cloud_api38.6ef54d89.png" alt="title"></p>
          <p>You can select to send <strong>single product message</strong> or <strong>multiple product message</strong>
          </p>
          <p><img src="../assets/img/cloud_api39.cda736d8.png" alt="title"></p>
          <p>If you are sending multiple product messages, you can select how many sections you want to include, and
            then choose the retail ids(which are contentID in the Facebook Catalog).</p>
          <p>If you have already synced Facebook Catalog with Smart ChatBot ecommerce, you can use the “Get products” action to
            dynamically populate the retails IDs.</p>
          <p>You can go to Actions, and then select “ecommerce”, and then “Get products”</p>
          <p><img src="../assets/img/cloud_api40.e2329835.png" alt="title"></p>
          <p>You can use built-in filters to dynamically populate the retail IDs to use in sending product catalog
            messages.</p>
          <p>You can find more details here:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/TXYi-WJm9R0" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <ul>
            <li><em><strong>Set up product inquiry trigger</strong></em></li>
          </ul>
          <p>You will learn more about setting up a “WhatsApp product inquiry trigger”. This will trigger the message
            every time your customer sends you a message inquiry on the product detail page.</p>
          <p>Check the video below for more details:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/7XjIgTHXO8o" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <ul>
            <li><em><strong>Set up WhatsApp order created trigger</strong></em></li>
          </ul>
          <p>WhatsApp order received trigger will be triggered when the user sends the cart.</p>
          <p>You can use the value inside of this trigger to generate the checkout link for the user.</p>
          <p>You can find more details in the video below:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/nVg--d7V3iU" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <ul>
            <li><em><strong>Collect the payment</strong></em></li>
          </ul>
          <p>In this section, you will learn how to generate the checkout links and collect the payment for the WhatsApp
            order.</p>
          <h3 id="collect-payment-through-stripe-paypal"><a href="#collect-payment-through-stripe-paypal"
              class="header-anchor">#</a> Collect payment through Stripe &amp; Paypal</h3>
          <p>Checkout with Paypal &amp; Stripe is supported natively with Smart ChatBot. In this video, you can learn how to
            make the payment with Paypal &amp; Stripe</p>
          <p>You can check the video here:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/Dx4Kr7CEFjc" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <h3 id="collect-payment-through-razorpay"><a href="#collect-payment-through-razorpay"
              class="header-anchor">#</a> Collect payment through RazorPay</h3>
          <p>Smart ChatBot has very flexible checkout options, you can easily integrate with 3rd party payment gateway.</p>
          <p>You can find these integrations from our mini app store.</p>
          <p>In this video, we will show you how to integrate RazorPay to collect the payment.</p>
          <p>You can check the video here:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/rTz9lpLd60E" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <h3 id="checkout-with-template-messages"><a href="#checkout-with-template-messages"
              class="header-anchor">#</a> Checkout with template messages</h3>
          <p>WhatsApp only supports buttons that link to external websites.</p>
          <p>Smart ChatBot supports you to send template messages, you need to submit the template message in 360dialog or Cloud
            API, and then sync the approved template message back to Smart ChatBot.</p>
          <p>Then you can send these template messages in our flow builder.</p>
          <p>You can check the video here:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/MFreU7gQRGg" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <ul>
            <li><em><strong>Update order status</strong></em></li>
          </ul>
          <h3 id="mark-order-as-paid-stripe-paypal"><a href="#mark-order-as-paid-stripe-paypal"
              class="header-anchor">#</a> Mark order as paid - Stripe &amp; Paypal</h3>
          <p>In the last step when the payment has been completed, you can:</p>
          <ol>
            <li>mark the order as paid.</li>
            <li>Send notification</li>
            <li>Sync the order information to Google Sheets.</li>
          </ol>
          <p>P.S: If you are using Stripe &amp; Paypal to make the payment, you will see 2 same value orders in Smart ChatBot.
            This is because a custom product is created to make the payment.</p>
          <p>Check the video below for more details:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/7IW70iKBUkU" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <h3 id="mark-order-as-paid-razorpay"><a href="#mark-order-as-paid-razorpay" class="header-anchor">#</a> Mark
            order as paid - RazorPay</h3>
          <p>If you are using RazorPay to make the payment, when the Razorpay has completed, you should be able to
            update the order status. If you are using another local payment gateway, you can do the same.</p>
          <p>Check the video below for more details:</p> <iframe width="649" height="365"
            src="https://www.youtube.com/embed/B0DjvlJbzqw" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <h2 id="add-your-own-business-phone-number"><a href="#add-your-own-business-phone-number"
              class="header-anchor">#</a> Add your own business phone number</h2>
          <p>First, You need to go to your apps in Facebook developer, and add your own phone number,</p>
          <p>Click “Get started” and then click “Add phone number” in step 5 as per the screenshot below:</p>
          <p><img src="../assets/img/cloud_api41.601f55fd.png" alt="title"></p>
          <p>You need to provide the information to create your WhatsApp business profile</p>
          <p><img src="../assets/img/cloud_api42.1cbb6fcd.png" alt="title"></p>
          <p>And then you can add a phone number for WhatsApp, you need to verify your phone number by receiving a text
            message or phone call.</p>
          <p><img src="../assets/img/cloud_api43.1234dcc9.png" alt="title"></p>
          <p>After you verify your phone number, you will just need to wait for Facebook to approve this number, and
            then you can sync the number back to Cloud API channels.</p>
          <p>After you submit the information, you will receive certification &amp; display name confirmation from
            Facebook.</p>
          <p>As per the screenshot below:</p>
          <p><img src="../assets/img/cloud_api44.c14116e0.png" alt="title"></p>
          <p><img src="../assets/img/cloud_api45.379b00c6.png" alt="title"></p>
          <p>And you will also receive emails from Facebook about the new number you just applied for.</p>
          <p><img src="../assets/img/cloud_api46.030bfd22.png" alt="title"></p>
          <p>You need to closely monitor the status in your WhatsApp business manager, and <strong>make sure it’s
              connected, not pending</strong>.</p>
          <p>You will be able to switch when the status is Connected, not pending.</p>
          <p><img src="../assets/img/cloud_api47.11d959ef.png" alt="title"></p>
          <p>Please note:</p>
          <ul>
            <li>You can not use your existing WhatsApp number on the WhatsApp Cloud API.</li>
          </ul>
          <p>You will either have to delete your existing WhatsApp account and then you can use the same number in the
            WhatsApp Cloud API or you need to get a totally separate number for the WhatsApp Cloud API account.</p>
          <p>We recommend you get a new number for the WhatsApp Cloud API.</p>
          <ul>
            <li>
              <p>You can still use the number for everyday purposes, such as calling and receiving messages after
                registering it on the WhatsApp Business Platform.</p>
            </li>
            <li>
              <p>Once you use a phone for WhatsApp Automation you can no longer use that number on the WhatsApp Business
                App or WhatsApp personal app.</p>
            </li>
            <li>
              <p>If you still want to reply to your user’s message on the phone, you can download Smart ChatBot mobile app to do
                so.</p>
            </li>
          </ul>
          
          <h2 id="switch-the-flow-from-the-testing-phone-number-to-your-business-phone-number"><a
              href="#switch-the-flow-from-the-testing-phone-number-to-your-business-phone-number"
              class="header-anchor">#</a> Switch the flow from the Testing phone number to your business phone number
          </h2>
          <p>In this step, you will be able to switch the chatbot flow you build with the testing number to your own
            business number you just added.</p>
          <h3 id="unlink-the-bot"><a href="#unlink-the-bot" class="header-anchor">#</a> Unlink the bot</h3>
          <p>In this step, you can first unlink the bot from your testing number.</p>
          <p><img src="../assets/img/cloud_api48.75602ffe.png" alt="title"></p>
          <p>When you click the unlink icon, type “UNLINK” in the screenshot below:</p>
          <p><img src="../assets/img/cloud_api49.7be03cfd.png" alt="title"></p>
          <p>After you click the “YES, Unlink” button, you should be able to delete this testing number by clicking the
            “x” in the screenshot below:</p>
          <p><img src="../assets/img/cloud_api50.7d2c4b25.png" alt="title"></p>
          <p>After you delete the testing phone number, don’t worry about the flow you already built, they are not
            deleted.</p>
          <p>You can still find the flow if you go to “All bots”, We will link this flow back to the real business phone
            number you just added to your app.</p>
          <p><img src="../assets/img/cloud_api51.898fe484.png" alt="title"></p>
          <h3 id="sync-the-real-business-number-into-the-whatsapp-cloud"><a
              href="#sync-the-real-business-number-into-the-whatsapp-cloud" class="header-anchor">#</a> Sync the real
            business number into the WhatsApp cloud</h3>
          <p>Now you can do the same process as previously to sync the test number into Smart ChatBot, instead of choosing the
            test number, you will choose the real business phone number this time to add into Smart ChatBot.</p>
          <p><img src="../assets/img/cloud_api52.a8becb5e.png" alt="title"></p>
          <h3 id="link-flow-with-real-business-number"><a href="#link-flow-with-real-business-number"
              class="header-anchor">#</a> Link flow with real business number</h3>
          <p>After you select and confirm the phone number, you can click the “LINK” icon to link your previous flow
            back to this real business Whatsapp number.</p>
          <p><img src="../assets/img/cloud_api53.96c312fa.png" alt="title"></p>
          <p>And then select the flow you previously build with the test WhatsApp number as per the screenshot below:
          </p>
          <p><img src="../assets/img/cloud_api54.ca910677.png" alt="title"></p>
          <p>And then you can type “LINK” to link the flow with the new number.</p>
          <p><img src="../assets/img/cloud_api55.bd1ada46.png" alt="title"></p>
          <p>Then you can have the existing flow connected to your real business number.</p>
          <p><img src="../assets/img/cloud_api56.bfede1c5.png" alt="title"></p>
          <p>Now you have successfully switched your WhatsApp chatbot from a testing phone number to your real phone
            number.</p>
          <h2 id="pricing"><a href="#pricing" class="header-anchor">#</a> Pricing</h2>
          <h3 id="uchat-pricing"><a href="#uchat-pricing" class="header-anchor">#</a> Smart ChatBot pricing</h3>
          <p>Smart ChatBot doesn’t add any extra fee for sending and receiving any type of message using the WhatsApp channel.
            Smart ChatBot offers a 14-day free trial and access to all pro features, and you can build your chatbot in the
            WhatsApp cloud channel.</p>
          <p>For our basic business plan, it’s $10 per month for 1 bot, 1000 bot users &amp; 5 members.</p>
          <h3 id="whatsapp-cloud-api-pricing"><a href="#whatsapp-cloud-api-pricing" class="header-anchor">#</a> WhatsApp
            cloud API pricing</h3>
          <p>With the conversation-based pricing model, WhatsApp Business Platform conversations fall into 2 categories
            that are priced differently:</p>
          <ul>
            <li>
              <p><strong>User-initiated:</strong> A conversation that initiates in response to a user message. Whenever
                a business replies to a user within the 24-hour customer service window, that message will be associated
                with a user-initiated conversation. Businesses can send free-form messages within this 24-hour customer
                service window.</p>
            </li>
            <li>
              <p><strong>Business-initiated:</strong> A conversation that initiates from a business sending a user a
                message outside the 24-hour customer service window. Messages that initiate a business-initiated
                conversation will require a message template.</p>
            </li>
          </ul>
          <p>All conversations are measured in fixed 24-hour sessions. A conversation starts when the first business
            message in a conversation is delivered, either initiated by the business or in reply to a user message and
            ends 24 hours later. Businesses and users can exchange any number of messages, including template messages,
            within a 24-hour conversation session without incurring additional charges. Each 24-hour conversation
            session results in a single charge.</p>
          <p>The pricing varies based on the recipient's geographical location. If you are sending messages to users in
            India, your sending cost will be comparatively lower than sending messages to users in the US.</p>
          <p>You can check the detailed pricing structure through the link below.
            https://developers.facebook.com/docs/whatsapp/pricing</p>
          <h3 id="sessions"><a href="#sessions" class="header-anchor">#</a> Sessions</h3>
          <p>All conversations are measured in 24-hour increments or “sessions”, as we’ll refer to them here. A session
            starts whenever the first message is sent by a business, either in response to a user inquiry or if a
            business-initiated message template is delivered.</p>
          <h3 id="policy"><a href="#policy" class="header-anchor">#</a> Policy</h3>
          <p>The policy requires the use of a template message whenever sending a message to a user more than 24 hours
            after their last message. So, a new session begins.</p>
          <p>If you send a free-form message outside the customer support window, you are not following the policy, so
            the delivery of this message will fail. However, it opens a business-initiated conversation that might be
            charged.</p>
          <h3 id="free-1000-session-messages"><a href="#free-1000-session-messages" class="header-anchor">#</a> Free
            1000 session messages</h3>
          <p>The first 1,000 conversations each month are free. If you want to send more than 1,000 conversations, you
            need to add a credit card to your account.</p>
          <p>Also, Facebook offers a free testing phone number for every app, it’s super easy for you to build a demo
            WhatsApp bot with a test number, and also take advantage of the free 1000 session message to onboarding
            clients.</p>
          <p>Please note that the free 1000 session message is offered at the WABA level. If you have multiple numbers
            under the same WABA, then all these numbers will share the limits of 1000 free session messages.</p>
          <p>The limits will refresh on a monthly basis.</p>
          <h3 id="free-entry-points-conversations"><a href="#free-entry-points-conversations"
              class="header-anchor">#</a> Free entry points conversations</h3>
          <p>Conversations are not charged when users message businesses using call-to-action buttons on Ads that Click
            on WhatsApp or a Facebook Page call-to-action buttons. Free entry point conversations can only be
            user-initiated. The first conversation that starts from the entry point is free of charge, and then
            subsequent conversations with the user are charged.</p>
          <p>Standard pricing applies to Ads that Click on WhatsApp. The conversation that initiates from the ad is
            free, but not the ad itself.</p>
          <h2 id="business-verification-limits"><a href="#business-verification-limits" class="header-anchor">#</a>
            Business verification limits</h2>
          <h3 id="unverified-business-limits"><a href="#unverified-business-limits" class="header-anchor">#</a>
            Unverified business limits</h3>
          <p>It’s not mandatory to complete Facebook business verification to start building your first WhatsApp
            chatbot.</p>
          <p>But if your business isn’t verified, you can:</p>
          <ul>
            <li>Send template messages to up to 50 unique users in a 24-hour rolling period.</li>
            <li>Response to unlimited customer-initiated conversations</li>
          </ul>
          <p>You will need to complete business verification if you want to initiate more than 50 business-initiate
            conversations in a rolling 24-hour window.</p>
          <h3 id="verified-business-limits"><a href="#verified-business-limits" class="header-anchor">#</a> Verified
            business limits</h3>
          <p>Once the business is verified, you can start sending messages to up to 1000 unique users in a 24-hour
            rolling period. The limits are automatically increased to even higher numbers as you send more quality
            messages. The highest allowed limit currently is 100,000 conversations to unique users in a 24-hour rolling
            period. You can get more details here:
            https://developers.facebook.com/docs/whatsapp/messaging-limits#messaging</p>
          <h2 id="how-to-get-your-business-verified"><a href="#how-to-get-your-business-verified"
              class="header-anchor">#</a> How to get your business verified?</h2>
          <p>Business verification allows you to get increased sending limits. Without verification, you can send
            messages to up to 50 unique numbers per day. After verification, the limit increases to sending messages to
            1000 unique numbers per day.</p>
          <p>In order to have access to higher account tiers in the WhatsApp Business API account, you must complete
            Business Verification within the Business Manager. This means you will have to provide Facebook with some
            documents to prove the existence and legitimacy of your business.</p>
          <p>Even though the Business Verification is required by Meta for a company to have access to higher account
            tiers of the WhatsApp Business API, this process is completely unrelated to WhatsApp.</p>
          <p>For support about issues with the <a href="https://business.facebook.com/home/accounts" target="_blank"
              rel="noopener noreferrer">Business Manager<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>, please reach out to direct Meta
            support through the &quot;?&quot; (help) icon on the bottom left corner of the page.</p>
          <h3 id="business-manager-verification-process"><a href="#business-manager-verification-process"
              class="header-anchor">#</a> Business Manager Verification Process</h3>
          <h4 id="access-business-manager-security-center"><a href="#access-business-manager-security-center"
              class="header-anchor">#</a> Access Business manager security center</h4>
          <p>To start the verification process go to the <a href="https://business.facebook.com/settings/security"
              target="_blank" rel="noopener noreferrer">Security Center<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a> and click Start Verification in the
            Business verification section.</p>
          <p><img
              src="data:image/png;base64,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"
              alt="title"></p>
          <h3 id="select-your-business"><a href="#select-your-business" class="header-anchor">#</a> Select your business
          </h3>
          <h4 id="if-your-business-is-already-listed"><a href="#if-your-business-is-already-listed"
              class="header-anchor">#</a> If your business is already listed</h4>
          <p><strong>Confirm your business details</strong></p>
          <p>Select a phone number that you have access to from the drop-down menu and click Next.</p>
          <p>Double-check for any typos or other errors: you will not be able to edit this information upon submission.
          </p>
          <p><strong>Get a verification code</strong></p>
          <p>Choose to receive the verification code on your business phone number via a text message, a phone call or
            email. The phone number option may not be available in all countries.</p>
          <p>Please make sure that the email registered has the same domain as the website.</p>
          <p><em>Accepted example</em>
            Email: name@business.com
            Site: www.business.com</p>
          <p><em>Not accepted example</em>
            Email: name@gmail.com or name@otherbusiness.com
            Site: www.business.com</p>
          <p><strong>Or verify your domain</strong></p>
          <p>If your domain is already verified, click Use Domain Verification. If not, complete the domain verification
            process, then return to the Security Center and select Continue.</p>
          <p><strong>Enter verification code (not applicable if you use domain verification)</strong></p>
          <p>Enter your verification code. Click <strong>Submit</strong>.</p>
          <p>You can skip the remaining steps 3 &amp; 4 below.</p>
          <h4 id="if-your-business-is-not-listed"><a href="#if-your-business-is-not-listed" class="header-anchor">#</a>
            If your business is not listed</h4>
          <p>If you cannot see your business in the list please select None of these matches.
            Then proceed with Steps 3 &amp; 4 below.</p>
          <h3 id="verify-the-legal-business-name"><a href="#verify-the-legal-business-name" class="header-anchor">#</a>
            Verify the legal business name</h3>
          <p>You may be asked in step 3 to provide official documentation of your business’s legal name. Upload an
            official document that matches the business’s legal name you entered in step 1, such as a business license,
            articles of incorporation or business tax registration.</p>
          <h3 id="verify-the-business-address-or-phone-number"><a href="#verify-the-business-address-or-phone-number"
              class="header-anchor">#</a> Verify the Business Address or Phone Number</h3>
          <p>Upload a document that shows both the legal name of your business and the mailing address or phone number
            shown on the screen.</p>
          <p>After you upload the documents, Meta will review them as quickly as they can. This may take several days.
            You can check the current status of your verification by going to your Security Center.</p>
          <p>When your business is verified you will be notified and you will also see the verified status in your
            account.</p>
          <p><img src="../assets/img/cloud_api58.fee490af.png" alt="title"></p>
          <h3 id="documents-needed-for-business-verification"><a href="#documents-needed-for-business-verification"
              class="header-anchor">#</a> Documents needed for Business Verification</h3>
          <p>Because of the differences between legal documents between countries/districts, Facebook has provided a
            list of the specific documents that need to be sent according to each country/district. Please see them
            below.</p>
          <p>Documents that are not accepted are:</p>
          <ul>
            <li>Invoices</li>
            <li>Purchase Orders</li>
            <li>Self-filled applications for the company</li>
            <li>Tax returns filed by you or your company</li>
            <li>Website print</li>
          </ul>
          <p>Brazil</p>
          <ul>
            <li>Business bank statement</li>
            <li>Cadastro Nacional da Pessoa Jurídica (CNPJ)</li>
            <li>Certificado da Condição de Microempreendedor Individual (MEI)</li>
            <li>Contrato Social</li>
            <li>Utility bill</li>
          </ul>
          <p>China</p>
          <ul>
            <li>公司註冊證書</li>
            <li>商業登記摘錄</li>
            <li>商業登記證</li>
            <li>营业执照</li>
            <li>銀行帳單</li>
          </ul>
          <p>Cyprus</p>
          <ul>
            <li>Αντίγραφο κίνησης λογαριασμού / Hesap özeti</li>
            <li>Εγγραφή στο μητρώο Φ.Π.Α.</li>
            <li>Καταστατικό / Şirket ana sözleşmesi</li>
            <li>Μητρώο Επιχειρηματικών Οντοτήτων</li>
            <li>Συστατική Πράξη Εταιρείας / Şirket Kuruluş Onay Belgesi</li>
          </ul>
          <p>France</p>
          <ul>
            <li>Avis de situation au repertoire Sirene</li>
            <li>Extrai d'immatriculation D1</li>
            <li>Extrait K, L, Kbis ou Lbis</li>
            <li>Facture d'électricité, de gaz ou d'eau</li>
            <li>Lettre de confirmation de numéro SIREN délivrée par l'Urssaf</li>
            <li>Statuts de l'enterprise</li>
            <li>VAT registration</li>
          </ul>
          <p>India</p>
          <ul>
            <li>Business bank statement</li>
            <li>Business license</li>
            <li>Certificate of incorporation</li>
            <li>Goods and services tax registration certificate(GST)</li>
            <li>Permanent Account Number Card (PAN)</li>
            <li>Shop establishment certificate</li>
            <li>Udyog Aadar (UID)</li>
            <li>Utility bill</li>
          </ul>
          <p>Indonesia</p>
          <ul>
            <li>Business bank statement</li>
            <li>Izin Usaha Mikro Kecil (IUMK)</li>
            <li>Nomar Induk Berusaha (NIB))</li>
            <li>Surat Izin Usaha Perdagangan (SIUP)</li>
            <li>Surat Pengukuhan Pengusaha Kena Pajak (SPPKP</li>
            <li>Tanda Daftar Perusahaan (TDP</li>
            <li>Utility bill</li>
          </ul>
          <p>Ireland:</p>
          <ul>
            <li>An Oifig um Chlárú Cuideachtaí</li>
            <li>Business bank statement</li>
            <li>Business tax certificate</li>
            <li>Certificate of business incorporation</li>
            <li>Certificate of registration</li>
            <li>Utility bill</li>
          </ul>
          <p>Italy:</p>
          <ul>
            <li>Atto Costitutivo</li>
            <li>Certificato di Registrazione Aziendale</li>
            <li>Registro Imprese dell'archivio ufficiale della CCIAA</li>
            <li>Statuto</li>
            <li>Business bank statement</li>
            <li>Certificate of formation</li>
            <li>Utility bill</li>
            <li>Value Added Tax Certificate (VAT)</li>
          </ul>
          <p>Japan:</p>
          <ul>
            <li>個人事業の開業, 廃業等の届出書</li>
            <li>営業許可</li>
            <li>定款</li>
            <li>履歴事項全部証明書</li>
            <li>法人番号指定通知書</li>
            <li>納税証明書</li>
            <li>Business bank statement</li>
            <li>Utility bill</li>
          </ul>
          <p>South Korea:</p>
          <ul>
            <li>사업자등록증</li>
            <li>요금납부 내역서</li>
            <li>지방세 납세 증명서</li>
            <li>지방세 납세 증명서</li>
          </ul>
          <p>Taiwan:</p>
          <ul>
            <li>台中市政府函</li>
            <li>有限公司设立登记表</li>
          </ul>
          <p>UAE</p>
          <ul>
            <li>Certificate of formation</li>
            <li>رخصة تجارية</li>
            <li>رخصة تجارية</li>
            <li>شهادة تسجيل لضريبة القيمة المضافة</li>
            <li>فاتورة اتصالات</li>
            <li>فاتورة الكهرباء</li>
            <li>كشف حساب بنك</li>
          </ul>
          <p>Ukraine</p>
          <ul>
            <li>Виписка з єдиного державного реєстру юридичних осіб , фізичних осіб-підприємців та громадьских формувань
            </li>
            <li>Виписка з єдиного державного реєстру юридичних осіб та фізичних осіб-підприємців</li>
            <li>Витяг з реєстру платників єдиного податку</li>
            <li>Свідоцтво платника єдиного податку</li>
          </ul>
          <p>United Kingdom</p>
          <ul>
            <li>Business bank statement</li>
            <li>Certificate of Incorporation</li>
            <li>Certificate of public liability insurance</li>
            <li>Companies House document</li>
            <li>Company registration number (CRN)</li>
            <li>HM Revenue and Customs: VAT certificate</li>
            <li>HM Revenue and Customs: Account statement</li>
            <li>Utility bill</li>
          </ul>
          <p>United States:</p>
          <ul>
            <li>Articles of incorporation</li>
            <li>Business bank statement</li>
            <li>Business license</li>
            <li>Employer identification number (EIN)</li>
            <li>IRS SS-4 (EIN Assignment Letter)</li>
            <li>IRS 147c (EIN Confirmation Letter)</li>
            <li>Taxpayer identification number</li>
          </ul>
          <p>Other countries:</p>
          <ul>
            <li>Utility bills like a phone or electricity bill</li>
            <li>Bank statement</li>
            <li>Business licenses and permits from any level of government</li>
            <li>Certificate of formation or incorporation</li>
            <li>Business Tax or VAT registration certificate</li>
            <li>EIN confirmation letter from the IRS (U.S. only)</li>
            <li>Federal tax returns to the IRS by the company (U.S. only)</li>
            <li>Business bank account statements</li>
            <li>Business credit report from one of the reporting agencies</li>
          </ul>
          <h3 id="checklist-for-business-verification"><a href="#checklist-for-business-verification"
              class="header-anchor">#</a> Checklist for Business Verification</h3>
          <p>To increase the company's chances of being verified by Meta, it is important that:</p>
          <ul>
            <li>The company's website is active and complete, containing the company's name and address</li>
            <li>The account email is from the same domain as the company's website provided in the documentation</li>
            <li>If the verification will be made through the phone number, make sure you are able to receive the call.
              If the phone has IVR, disable it temporarily</li>
            <li>The company's trade name in the documentation is the same used on the website and the Facebook page. If
              different, the names need to be related in some way on the website. For example, at the footer, enter
              &quot;Company ABC powered by company D&quot;</li>
          </ul>
          <h3 id="if-the-start-verification-button-is-not-available"><a
              href="#if-the-start-verification-button-is-not-available" class="header-anchor">#</a> If the Start
            Verification button is not available</h3>
          <p>Your Business Manager may not be eligible for verification. In this case, you won’t be able to click the
            Start Verification button:</p>
          <p><img src="../assets/img/cloud_api59.1f62f4a5.png" alt="title"></p>
          <p>To enable the button, please:</p>
          <ul>
            <li>Fill out all of the information on the Business Info page, inside the Facebook Business Manager settings
            </li>
            <li>Create an app in your Facebook developer account.</li>
          </ul> <iframe width="649" height="365" src="https://www.youtube.com/embed/C4qB3vBsGFI"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="allowfullscreen"></iframe>
          <h3 id="my-business-verification-request-was-rejected-what-to-do-now"><a
              href="#my-business-verification-request-was-rejected-what-to-do-now" class="header-anchor">#</a> My
            Business Verification request was rejected: What to do now?</h3>
          <p>If your request for business verification was rejected by the Facebook team, you should receive an email
            notification noting that the documents you attached didn't pass the verification process.</p>
          <p><img src="../assets/img/cloud_api60.43bd2fee.png" alt="title"></p>
          <p>On the new page, you will see your ticket/case number.</p>
          <p><img src="../assets/img/cloud_api61.48557ba1.png" alt="title"></p>
          <p>If you click on the ‘Read More’ button, you can start interacting directly with Facebook Support to find
            out what is missing or which documents are not correct.</p>
          <h3 id="is-business-verification-the-same-thing-as-the-green-check"><a
              href="#is-business-verification-the-same-thing-as-the-green-check" class="header-anchor">#</a> Is Business
            Verification the same thing as the green check?</h3>
          <p>No.</p>
          <p>Business verification is different from the verified badge, also known as a green check or Official
            Business Account (OBA).</p>
          <h3 id="official-facebook-documentation"><a href="#official-facebook-documentation"
              class="header-anchor">#</a> Official Facebook Documentation</h3>
          <p>You can find more details from official Facebook documentation:</p>
          <ul>
            <li>https://www.facebook.com/business/help/2058515294227817?id=180505742745347</li>
            <li>https://www.facebook.com/business/help/1095661473946872?id=180505742745347</li>
            <li>https://www.facebook.com/business/help/159334372093366</li>
          </ul>
          <h2 id="display-name-guidelines"><a href="#display-name-guidelines" class="header-anchor">#</a> Display name
            guidelines</h2>
          <p>When you add a new phone number to your WhatsApp business account you must assign it a display name.</p>
          <p>All display names should have a relationship with your business and should not violate WhatsApp <a
              href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.whatsapp.com%2Flegal%2Fcommerce-policy%2F%3Ffbclid%3DIwAR3QfMLe6p4LGfzovHJyej4U3I_gc2dnQfvfmwyAP7TATnJ-kG3tMm8TBao&amp;h=AT2DFESJ6w3joHYWP4PgnQnLBPIPtGEl7tNl4O2tIVVIq7WOT512-43hYgNcbX4sw_knPomk-MfR65ZhcQUJUhG4zklDhma9W-RYn-3Mq_o5Ma2Oug94sC-qBEqWEY-m_FP8RKD5Jypc3MjK_SM"
              target="_blank" rel="noopener noreferrer">Commerce<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a> and <a
              href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.whatsapp.com%2Flegal%2Fbusiness-policy%2F%3Ffbclid%3DIwAR03PCa0Sml0mW-oKOq2_i6Xt95Bi6aRtEZr-Wfg-quKkZGObO-_4QX7IUI&amp;h=AT0Z0W9ImlMGcPMU6x5-isj03SMu97Ew9fIbY-Zs4vqG2DIBkOBPzaHTGomltZQwSLtuaqRyh1pRdSDcMvQkzZrJRzo6lA9u6cZ21tk0jVI-wbjeR7HKkNilvMSfD-m4caiqV4uDjuPh4_iM8Q8"
              target="_blank" rel="noopener noreferrer">Business policies<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>. Having display names compliant with
            the WhatsApp guidelines is required to send messages using the WhatsApp Business API or to qualify for
            WhatsApp official business accounts.</p>
          <p>Prior to completing registration, you may change the display name as many times as you wish. After
            registration, you must wait 30 days between any display name change requests.</p>
          <p>Below are the principles for display names:</p>
          <h3 id="compliance-with-policies"><a href="#compliance-with-policies" class="header-anchor">#</a> Compliance
            with policies</h3>
          <p>A display name should not violate WhatsApp Commerce and Business policies. An example of a store that sells
            wine glasses:</p>
          <ul>
            <li>Accepted: ABC Wine Glasses</li>
            <li>Not accepted: ABC Wine</li>
          </ul>
          <p>Within your company, you may have separate WhatsApp business accounts for different divisions; only those
            divisions that are compliant with WhatsApp’s Commerce Policy may have a WhatsApp business account.</p>
          <h3 id="accurate-representation-of-your-business"><a href="#accurate-representation-of-your-business"
              class="header-anchor">#</a> Accurate representation of your business</h3>
          <p>A display name should represent:</p>
          <ul>
            <li>A business or its service, product, or department</li>
            <li>A test account or a demo account and must maintain an association with the business (e.g., Fresh Produce
              Test)</li>
          </ul>
          <p>A display name should not be:</p>
          <ul>
            <li>An individual's full name</li>
            <li>A generic term (e.g., Fashion)</li>
            <li>A generic geographic location (e.g., New York)</li>
            <li>A slogan or a long description</li>
          </ul>
          <p>An organization with a government affiliation needs the WhatsApp team's approval. A display name must
            contain a minimum of 3 characters.</p>
          <h3 id="consistency-with-external-brandings"><a href="#consistency-with-external-brandings"
              class="header-anchor">#</a> Consistency with external brandings</h3>
          <p>A display name must have consistent branding with external sources (e.g., a company's website or
            marketing). An example of a product line named &quot;Fresh Produce Cold Pressed Juices&quot;:</p>
          <ul>
            <li>Accepted: Fresh Produce Cold Pressed Juices (how it is branded on your website)</li>
            <li>Not accepted: Fresh Produce Juices (you changed branding by removing &quot;Cold Pressed&quot;)</li>
            <li>Not accepted: FP Cold Pressed Juices (you added an abbreviation to the company name inconsistent with
              external branding)</li>
          </ul>
          <p>A display name must have grammatically correct capitalization, and should match the capitalization used in
            your external branding. Do not change the spacing and do not add any extra punctuation, emojis, or character
            symbols</p>
          <h3 id="clear-relationship-with-your-business"><a href="#clear-relationship-with-your-business"
              class="header-anchor">#</a> Clear relationship with your business</h3>
          <p>A display name must have a clear relationship with your business (must be referred to on the business's
            website or external media references). For example:</p>
          <ul>
            <li>Accepted: Name of a charity mentioned on a non-profit organization's website</li>
            <li>Not accepted: Name of a charity not mentioned on any external websites</li>
          </ul>
          <p>If the relationship between your company and the brand is not obvious, indicate the relationship using “by
            [company name].”</p>
          <ul>
            <li>Not accepted: Fruit Snacks (Fresh Produce owns the Fruit Snacks brand but their association is not
              mentioned on any external websites)</li>
            <li>Accepted: Fruit Snacks by Fresh Produce</li>
          </ul>
          <p>If the display name represents a business that the company is working with (i.e., if the business is an
            agency, distributor, partner, or parent company), then the relationship between the business represented in
            the display name and end-client business must be evident and clear in both parties’ business websites. For
            example, if Global Voyager signs up for WhatsApp and wants to use the display name Commercial Air, they must
            submit links to both websites stating that Commercial Air is a subsidiary of Global Voyager.</p>
          <h3 id="legal-entity-in-footer"><a href="#legal-entity-in-footer" class="header-anchor">#</a> Legal entity in
            footer</h3>
          <p>If the official name (legal entity) of the company in the documents that were used for Business
            Verification and naming on the website is different, we recommend adding a mention of a legal entity to the
            website, for example in the footer: &quot;Business ABC powered by business CDE&quot;</p>
          <h3 id="working-website"><a href="#working-website" class="header-anchor">#</a> Working website</h3>
          <p>A display name cannot be approved without a working website. The website must be verified by your Facebook
            Business Manager. If your company's website has been changed, the new website must be submitted for
            verification.</p>
          <h2 id="faq"><a href="#faq" class="header-anchor">#</a> FAQ:</h2>
          <ol>
            <li><strong>How can I reply to clients on my mobile phone?</strong>
              Once you connect the phone number with WhatsApp cloud API, you won’t be able to use this number in the
              WhatsApp business or WhatsApp personal app.</li>
          </ol>
          <p>You can login to the Smart ChatBot platform, and then live chat to reply to your clients on desktop, or download
            Smart ChatBot mobile apps to reply right on your phone.</p>
          <p><img src="../assets/img/cloud_api62.dcf2619d.png" alt="title"></p>
          
          <ol start="2">
            <li><strong>Can I use my current mobile WhatsApp number in the WhatsApp cloud API?</strong>
              You can not use your existing WhatsApp number on the WhatsApp Cloud API. You will either have to delete
              your existing WhatsApp account and then you can use the same number in the WhatsApp Cloud API or you need
              to get a totally separate number for the WhatsApp Cloud API account.</li>
          </ol>
          <p>We recommend you get a new number for the WhatsApp Cloud API.</p>
          <ol start="3">
            <li>
              <p><strong>How can I delete a phone number from a business account?</strong>
                You can refer to the link below to delete the phone number from your business account.
                https://developers.facebook.com/docs/whatsapp/phone-numbers#delete-phone-number-from-a-business-account
              </p>
            </li>
            <li>
              <p><strong>I am using 360Dialog currently, do I need to switch to Cloud API?</strong>
                Here is the difference between 360Dialog &amp; WhatsApp cloud API, here is a table for your reference:
              </p>
            </li>
          </ol>
          <p><img src="../assets/img/cloud_api63.8add8f97.png" alt="title"></p>
          <p>In summary, with 360dialog, the client has access to different WhatsApp offers (Cloud API, Business API,
            on-premise), hosting and performance upgrades (Premium Package, local hosting, multicores), and different
            support levels and SLAs - none of which is offered by Meta directly.</p>
          <p>If you are using WhatsApp cloud API, it’s a little cheaper. You can get started easily with the test phone
            number &amp; free 1000 session messages.</p>
          <p>You can make your own decision based on the information above.</p>
          <ol start="5">
            <li><strong>I can’t connect my business account under WhatsApp cloud API?</strong>
              Currently, you can only connect a business account to one of the Smart ChatBot workspaces. If you need to switch
              to a different workspace, you need to disconnect and reconnect again to the new workspace.</li>
          </ol>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">6/10/2022, 1:12:55
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="whatsapp-api.php" class="prev">
                WhatsApp + 360Dialog ($50/month)
              </a></span> <span class="next"><a href="whitelabel.php">
                White Label Settings
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>