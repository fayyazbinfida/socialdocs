<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="workflow"><a href="#workflow" class="header-anchor">#</a> Workflow</h1>
          <p>A workflow can be considered as a backend flow where you can automate tasks such as adding or removing
            tags, set custom field variables, do external API calls.</p>
          <p>This way the conversation you have with the subscriber will not be affected by needing to wait to apply all
            those actions and the experience is as smooth as possible for that end-user.</p>
          <h2 id="create-workflow"><a href="#create-workflow" class="header-anchor">#</a> Create Workflow</h2>
          <p>To create a workflow just go to the flow overview by selecting <strong>Flows</strong> from the left-hand
            menu.</p>
          <p>Then press the button <strong>+ New Sub Flow</strong></p>
          <p><img src="../../assets/img/workflow1.28383c5a.png" alt="title"></p>
          <p>Select the workflow flow type then give it a name. Once done press the button Create to start creating your
            workflow.</p>
          <p>Once you create your flow and you end up in the flow builder you will notice that you will have access to
            fewer blocks than when selecting a regular or function flow.</p>
          <p>Available blocks are:</p>
          <ul>
            <li>Action</li>
            <li>Condition</li>
            <li>Split</li>
            <li>Send Email</li>
          </ul>
          <p>As mentioned this flow is meant to create a backend flow that you can trigger from any other flow inside
            your chatbot to handle system tasks like adding tags, set custom fields, but also sending emails.</p>
          <p><img src="../../assets/img/workflow2.deebfc26.png" alt="title"></p>
          <h2 id="workflow-example"><a href="#workflow-example" class="header-anchor">#</a> Workflow Example</h2>
          <p>Let’s take an example of how a workflow can be used.</p>
          <p>A user signs up with an email and or phone number and you want to sync this information with your CRM
            platform of choice.</p>
          <p>So soon as you grabbed the credentials from the user you can make an API call using the external request
            block inside of the action module.</p>
          <p>You would also want to tag the user inside the chatbot for completing the onboarding step. After done we
            send an email notification to an admin that a new lead has been created to follow up on.</p>
          <p>A workflow can then look something like this;</p>
          <p><img src="../../assets/img/workflow3.7ac2b256.png" alt="title"></p>
          <p>If you were to incorporate this into the flow that has the actual conversation it might become an issue as
            the conversation could be on hold for several seconds or more to finish all these system processes. And you
            might lose the user as he or she thinks the conversation is done.</p>
          <h2 id="trigger-workflow"><a href="#trigger-workflow" class="header-anchor">#</a> Trigger Workflow</h2>
          <p>It is very simple to trigger the above workflow inside of any other flow that you build.</p>
          <p>Just insert an action block, go to <em>advanced actions</em>, then choose <em>trigger workflow</em> at the
            bottom</p>
          <p><img src="../../assets/img/workflow4.6a951507.png" alt="title"></p>
          <p>You can then select any workflow you created. This workflow will then be processed in the backend while the
            conversation with the user will not be affected and continue without any delay.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/27/2022, 5:06:08
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="sub-flow.php" class="prev">
                Sub Flow
              </a></span> <span class="next"><a href="function-flow.php">
                Function Flow
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>