<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="customer-feedback-facebook"><a href="#customer-feedback-facebook" class="header-anchor">#</a> Customer
            Feedback (Facebook)</h1>
          <p>A fantastic way inside the chatbot to collect feedback is to use UChat’s native module for this. It will
            allow you to gather not only feedback but also allows you to know when a user is not satisfied with the
            product or service you provide, which you can then proactively contact to resolve any issues there might be.
          </p>
          <p>Note: This is only available inside the Messenger channel.</p>
          <h2 id="creating-and-managing-customer-feedback-topics"><a
              href="#creating-and-managing-customer-feedback-topics" class="header-anchor">#</a> Creating and managing
            Customer Feedback Topics</h2>
          <p>To create a new customer feedback topic you can go to <strong>Contents</strong>, then select the
            <strong>Customer Feedback Topics</strong> tab.</p>
          <p>From here you will see an overview of all your created topics and it allows you to manage them or create a
            new one.</p>
          <p><img src="../../assets/img/customer_feedback_01.535697a5.png" alt="title"></p>
          <p>If you like to create a new topic you only have to press the top right button named <strong>+ New Feedback
              Topic</strong>.</p>
          <p>Once done a pop-up window will appear where you can set everything up.</p>
          <p><img src="../../assets/img/customer_feedback_02.13db7e0f.png" alt="title"></p>
          <p>As you can see you can fully customize this to your own liking so let’s walk through the options.</p>
          <p>With option 1 you can give the topic a name as it will appear inside the topic overview. Below that you
            will be able to adjust your Question title. This will show up as the question. By default, there is a
            question inside but you can adjust it if you like.</p>
          <p>You can also set the type. You have the following choices;</p>
          <ul>
            <li>Customer satisfaction score</li>
            <li>Net promoter score</li>
            <li>Customer effort score</li>
            <li>Free input form</li>
          </ul>
          <p>The next step is to select your score label. You will have the following options;</p>
          <p><img src="../../assets/img/customer_feedback_03.1e88edd1.png" alt="title"></p>
          <p>Next up are the score options that you will be able to choose from;</p>
          <ul>
            <li>One to five (numbers)</li>
            <li>Five stars</li>
            <li>Five emojis</li>
          </ul>
          <p><img src="../../assets/img/customer_feedback_04.5e7dbf5e.png" alt="title"></p>
          <p>You will also be able to enable or disable free form input. Once enabled the user will be able to give
            additional feedback outside the rating.</p>
          <p><img src="../../assets/img/customer_feedback_05.ec1df270.png" alt="title"></p>
          <p>Below that you will be able to point to your privacy policy which is mandatory. And lastly, you will be
            able to set the customer feedback to expire anywhere between 1-7 days.</p>
          <p>Once done you can press save. You will be taken back to the main overview and you will be able to manage
            the customer feedback topic you just created from there.</p>
          <p><img src="../../assets/img/customer_feedback_06.b4b8d807.png" alt="title"></p>
          <p>On the right you will have two icons. The first one will show you advanced analytics on the topic you
            selected, while the pencil icon allows you to edit it to your liking.</p>
          <p>Below you will find an example of the analytics you can expect;</p>
          <p><img src="../../assets/img/customer_feedback_07.f6f81616.png" alt="title"></p>
          <h2 id="how-to-send-a-customer-feedback-topic"><a href="#how-to-send-a-customer-feedback-topic"
              class="header-anchor">#</a> How to send a customer feedback topic</h2>
          <p>This is easily done inside of the flow builder. Just go to any flow you want to set up for this. From here
            create a <strong>send message block</strong>, then select <strong>Customer Feedback</strong>.</p>
          <p>You will then be able to add a title and subtitle and press the button named <strong>rate
              experience</strong>.</p>
          <p><img src="../../assets/img/customer_feedback_08.568f32f7.png" alt="title"></p>
          <p>You will then be able to give the button a title, select the topic you want to use and save the responses
            to a user field. Once done press save you will be able to send this customer feedback to any user that
            enters the flow and this block.</p>
          <p><img src="../../assets/img/customer_feedback_09.9897e837.png" alt="title"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/12/2022, 8:38:52
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="user-menus.php" class="prev">
                User Menus
              </a></span> <span class="next"><a href="../tools/error-logs.php">
                Error Logs
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>