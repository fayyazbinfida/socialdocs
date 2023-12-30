<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="comment-keywords"><a href="#comment-keywords" class="header-anchor">#</a> Comment Keywords</h1>
          <p>A very important and great feature inside of Smart ChatBot is the ability to let the chatbot comment, like and send
            a person a pm when that person responds to on a post on your Facebook and or Instagram page.</p>
          <p>You can find this if you go to the left-hand menu and press <strong>Automation</strong> then select the
            <strong>Comment Keyword</strong> tab.</p>
          <p>From here you will have a blue button in the top right corner name <strong>+ New Comment Keyword</strong>.
          </p>
          <p><img src="../../assets/img/comment_keywords_01.53c2e7ad.png" alt="title"></p>
          <h2 id="how-to-create-a-comment-keyword"><a href="#how-to-create-a-comment-keyword"
              class="header-anchor">#</a> How to create a Comment Keyword</h2>
          <p>Once you have pressed the blue button <strong>+ New Comment Keyword</strong> then a pop-up window will open
            up. From here you will be able to set up your comment keyword trigger.</p>
          <p><img src="../../assets/img/comment_keywords_02.e12eec88.png" alt="title"></p>
          <p>If we follow along with the image above we have 6 steps to take.</p>
          <p>During step 1 you will be able to select any of your Facebook or Instagram page posts depending on which
            channel you are in.</p>
          <p>With step 2 you are able to type in your keywords and determine the condition on when it needs to be
            triggered. By default, it is on <strong>contains</strong>, but you have the following options to choose
            from:</p>
          <p><strong>“If comment:
              Is
              Contains
              Starts with
              Is anything
              One of the following keywords”</strong></p>
          <p>Do note that if you select <strong>Is anything</strong> the ability to type in your keywords will be
            disabled.</p>
          <p>On <strong>step 3</strong> you will be able to create variations with which the chatbot will be able to
            reply to users who comment on your Page posts.</p>
          <p>Advised is to at least add 5 variations to avoid the algorithm marking the replies as spam.</p>
          <p>With <strong>step 4</strong> you will be able to add the flow that will be triggered when the chatbot will
            send the pm to the commenter.</p>
          <p><strong>NOTE:</strong> make sure that your initial message contains only <strong>1 text message with a
              button</strong>. As this counts as a user opt-in the user first needs to interact with this message before
            becoming a subscriber to your chatbot.</p>
          <p>Inside of <strong>step 5</strong> you are able to set up a delay for when the chatbot should reply and send
            a pm to the user.</p>
          <p>This will make it more human-like experience-wise. But it is totally optional.</p>
          <p>In the final step, you will be able to match any of the settings to your liking.</p>
          <p>Once done press the blue button on the top right or bottom name <strong>Save</strong> and your comment
            keyword will now be shown in the main overview</p>
          <p><img src="../../assets/img/comment_keywords_03.1e7eb226.png" alt="title"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/12/2022, 8:38:52
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="triggers.php" class="prev">
                Triggers
              </a></span> <span class="next"><a href="../contents/custom-field.php">
                Custom Fields
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>