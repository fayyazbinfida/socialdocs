<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="bot-templates"><a href="#bot-templates" class="header-anchor">#</a> Bot Templates</h1>
          <h2 id="create-flows-bots"><a href="#create-flows-bots" class="header-anchor">#</a> Create Flows/Bots</h2>
          <p>You can create a blank flow or install a flow/subflow from a template.</p>
          <p>To visit Smart ChatBot template store, go <strong>Dashboard</strong> - <strong>Template Store</strong>. You will
            need to connect to a channel before you install a template.</p>
          <h2 id="create-templates"><a href="#create-templates" class="header-anchor">#</a> Create Templates</h2>
          <p>A template is created from one of your existing flows and the flow thereafter becomes the source flow of
            the template.</p>
          <div class="custom-block danger">
            <p class="custom-block-title">WARNING</p>
            <p>Source flow is important if you need to edit/update the template in the future. Make sure you keep and
              mark it safely. <strong>If you accidentally delete it, you cannot edit the template anymore</strong>. Try
              to unlock and install the template to be a new source flow and re-create a template with that source flow.
            </p>
          </div>
          <p><img src="../assets/img/template_create.a8d63786.png" alt="create template"></p>
          <p>Follow steps 1, 2 and 3 above, then select a source flow from the existing flows.</p>
          <p><img src="../assets/img/template_choose_flow.974b41e5.png" alt="choose flow"></p>
          <p>If you are creating a subflow template, select some subflows on this page, otherwise, fill in necessary
            template fields here:</p>
          <p><img src="../assets/img/template_edit_content.fac3f72c.png" alt="edit content"></p>
          <p>Give descriptions for template fields like manager email, restaurant address/contact, etc. Also, provide
            default values if needed.</p>
          <p><img src="../assets/img/template_name.6e5ef6ff.png" alt="give a name"></p>
          <p>Finally, name the template and that's it! 😊</p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>All contents in a flow template will replace whatever you have in a current flow/bot, while contents in a
              subflow template will be added to your current flow/bot in a folder.</p>
          </div>
          <h2 id="edit-templates"><a href="#edit-templates" class="header-anchor">#</a> Edit Templates</h2>
          <p><img src="../assets/img/template_edit.f670e681.png" alt="edit template"></p>
          <p>Click &quot;Share&quot; to adjust who can see this template:</p>
          <p><img src="../assets/img/template_setting.f46e6e20.png" alt="template settings"></p>
          <p>If you are sharing the template, click &quot;Edit Info&quot; to give your template an overview, guidelines,
            tags, live demo, YouTube link and cover image:</p>
          <p><img src="../assets/img/template_setting2.07a0cc87.png" alt="template settings"></p>
          <p>To update the template, you will need to go back to the source flow in &quot;All Bots&quot;, edit it and
            come back to click &quot;Update Flow&quot; here. The system will list the differences between the old
            version and the updated version.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/12/2022, 8:38:52
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="ecommerce.php" class="prev">
                Ecommerce
              </a></span> <span class="next"><a href="email-template.php">
                Email Templates
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>