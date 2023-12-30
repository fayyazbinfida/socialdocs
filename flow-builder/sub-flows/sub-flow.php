<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="sub-flow"><a href="#sub-flow" class="header-anchor">#</a> Sub Flow</h1>
          <p>Same as &quot;Canvas&quot;, &quot;Sub Flow&quot; can also help with step organization. &quot;Canvas&quot;
            organizes steps in a specific subflow while &quot;Sub Flow&quot; organizes steps in the whole chatbot/flow.
          </p>
          <h2 id="create-sub-flow"><a href="#create-sub-flow" class="header-anchor">#</a> Create Sub Flow</h2>
          <p><img src="../../assets/img/subflow4.28f2468d.png" alt="sub flow"></p>
          <p>IGo &quot;Flows&quot; from the sidebar, click &quot;+ New Sub Flow&quot;, choose a flow type, give a name
            and save.</p>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Flow Type</th>
                <th style="text-align:center;">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;">Normal Subflow</td>
                <td style="text-align:center;">Varies in channels, basic subflow</td>
              </tr>
              <tr>
                <td style="text-align:center;">Workflow</td>
                <td style="text-align:center;">work at the backend without influencing the front end task</td>
              </tr>
              <tr>
                <td style="text-align:center;">Function Flow</td>
                <td style="text-align:center;">perform repetitive tasks</td>
              </tr>
            </tbody>
          </table>
          <p><img
              src="data:image/png;base64,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"
              alt="sub flow"></p>
          <p>Click on the subflow to enter and start editing it. For more operations, click on the 3-dots icon. The
            <strong>Sub Flow Ns</strong> is a unique subflow ID in the chatbot.</p>
          <p>Folders are used to organize subflows.</p>
          <h2 id="move-steps-to-sub-flow"><a href="#move-steps-to-sub-flow" class="header-anchor">#</a> Move Steps to
            Sub Flow</h2>
          <p>To move a step or multiple steps to another subflow, select the steps first, then you can either</p>
          <ul>
            <li>use the <strong>Move to Subflow</strong> button in the editing pannel, or</li>
            <li>copy and paste them</li>
          </ul>
          <p>To select multiple steps, hold the <strong>Shift</strong> key, click and drag to cover the steps.</p>
          <p><img src="../../assets/img/workspace3.ce17a72e.png" alt="workspace"></p>
          <p>Alternatively, hold <strong>ctrl</strong> key and click steps one by one:</p>
          <p><img src="../../assets/img/workspace4.58de402e.png" alt="workspace"></p>
          <p>After selecting multiple steps, editing panel shows. &quot;Select sub flow&quot;, then click &quot;Move to
            sub flow&quot;.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">Note</p>
            <p>You will need to select at least 2 steps to create a canvas or move them to other sub flows. So if you
              have only 1 step to move or put in a canvas, try adding a temporary step to help and discard it after
              that.</p>
          </div>
          <p><img src="../../assets/img/subflow1.ff69be06.png" alt="sub flow"></p>
          <div class="custom-block danger">
            <p class="custom-block-title">Note</p>
            <p>If you find yourself unable to click &quot;Move to sub flow&quot; after choosing a sub flow, perhaps you
              included the green <strong>Start Step</strong> in your selection. Because the green start point of any
              subflow can't be moved to other subflows. You can solve this issue by de-selecting the green start point.
            </p>
          </div>
          <p>To copy and paste, use <strong>Ctrl + C</strong> to copy the selected steps, then go to the destination
            subflow, use <strong>Ctrl + V</strong> to paste there.</p>
          <h2 id="call-sub-flow"><a href="#call-sub-flow" class="header-anchor">#</a> Call Sub Flow</h2>
          <p>After creating subflows, you can then call a subflow via:</p>
          <ul>
            <li>Goto Step</li>
            <li>Keyword</li>
            <li>Sequence</li>
            <li>Broadcast</li>
            <li>Facebook Widget</li>
            <li>Comment Growth Tool</li>
            <li>Triggers</li>
            <li>Live Chat</li>
            <li>Menu Items</li>
            <li>Inbound Webhooks</li>
            <li><a href="https://www.uchat.com.au/api#/Sending/flowBotUserSendSubFlow" target="_blank"
                rel="noopener noreferrer">API call<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a></li>
          </ul>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/27/2022, 5:06:08
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="../canvas.php" class="prev">
                Canvas
              </a></span> <span class="next"><a href="workflow.php">
                Workflow
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>