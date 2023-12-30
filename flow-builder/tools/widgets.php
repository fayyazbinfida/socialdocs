<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="widgets"><a href="#widgets" class="header-anchor">#</a> Widgets</h1>
          <p><img src="../../assets/img/widget4.6cbd1a35.png" alt="widget"></p>
          <p>For Facebook bots, you can set some widgets to quickly start talking to the bot. To setup:</p>
          <ol>
            <li>go &quot;Tools&quot; from the left sidebar</li>
            <li>click &quot;Widgets&quot;</li>
            <li>&quot;+ New Widget&quot;</li>
          </ol>
          <h2 id="messenger-ref-url-widget"><a href="#messenger-ref-url-widget" class="header-anchor">#</a> Messenger
            Ref URL Widget</h2>
          <p><img src="../../assets/img/widget5.9425d795.png" alt="widget"></p>
          <ol>
            <li>put a widget name</li>
            <li>choose a sub flow the link goes to</li>
          </ol>
          <p>(leave 3 and 4 blank if no reference is needed)</p>
          <ol start="3">
            <li>put a parameter name</li>
            <li>assign a custom user field</li>
          </ol>
          <p>What does the Ref parameter do?</p>
          <p>For instance, you make a messenger ref URL to your main flow, so that by visiting this URL, your users can
            start talking to your bot.</p>
          <p>However, you would like to gather more information from the link, like where did your users get the link?
            In this case, you can put &quot;source&quot; in area 3 and a variable to store the source at area 4 in the
            above picture.</p>
          <p>Later, add a source name in your link according to where do you put it. This is how you get extra
            information from the link.</p>
          <p>After filling in all the information, click &quot;Save&quot; and click the pencil to edit this widget, you
            will see a unique URL generated for this widget:</p>
          <p><img src="../../assets/img/widget6.bd87a1eb.png" alt="widget"></p>
          <p>So here, by visiting any of the following links, your users can start talking to your bot:</p>
          <table>
            <thead>
              <tr>
                <th style="text-align:left;">example link</th>
                <th style="text-align:center;">value in variable &quot;source&quot;</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:left;">https://m.me/102942588321862?ref=source</td>
                <td style="text-align:center;"></td>
              </tr>
              <tr>
                <td style="text-align:left;">https://m.me/102942588321862?ref=source--advertisement</td>
                <td style="text-align:center;">advertisement</td>
              </tr>
              <tr>
                <td style="text-align:left;">https://m.me/102942588321862?ref=source--shared_by_users</td>
                <td style="text-align:center;">shared_by_users</td>
              </tr>
              <tr>
                <td style="text-align:left;">https://m.me/102942588321862?ref=source--promoted_by_sales</td>
                <td style="text-align:center;">promoted_by_sales</td>
              </tr>
            </tbody>
          </table>
          <p>Yes, you might notice that by adding &quot;--xxx&quot; after the link, the value &quot;xxx&quot; will be
            transferred to the bot.</p>
          <h2 id="qr-code-widget"><a href="#qr-code-widget" class="header-anchor">#</a> QR Code Widget</h2>
          <p>URL links are convenient to click via electronic way while QR codes are more suitable for on-site use. By
            scanning a QR code, your users can start talking to your bot.</p>
          <p><img src="../../assets/img/widget7.c1a8ba66.png" alt="widget"></p>
          <p>To setup:</p>
          <ol>
            <li>give a widget name</li>
            <li>select a sub flow</li>
            <li>upload your logo image</li>
            <li>adjust image size if needed</li>
            <li>adjust color if needed</li>
            <li>adjust dot scale if needed</li>
            <li>click &quot;Generate&quot; to get an image on the right. Repeat step 4, 5 and 6 to get a final image
            </li>
            <li>download your QR code, print it and put it in your store, restaurant, office, etc</li>
          </ol>
          <h2 id="customer-chat-widget"><a href="#customer-chat-widget" class="header-anchor">#</a> Customer Chat Widget
          </h2>
          <p><img src="../../assets/img/widget8.d73f8d10.png" alt="widget"></p>
          <p>This widget is to be embedded on your website, so that your website can have a bot serving users as
            uchat.com.au do:</p>
          <p><img src="../../assets/img/widget9.6df83f07.png" alt="widget"></p>
          <p>To setup:</p>
          <ol>
            <li>give a widget name</li>
            <li>select a sub flow</li>
            <li>adjust theme color if needed</li>
            <li>adjust greeting message which will be shown above the &quot;Continue as xx&quot; button (see in the
              previous picture).</li>
            <li>select a display type</li>
            <li>adjust the delay if the second or the third display type is selected</li>
            <li>for payload, see explanation in <a href="#messenger-ref-url-widget">Messenger Ref URL</a> above.</li>
          </ol>
          <p>Click &quot;Save&quot; after finishing all the settings, again, click the pencil to edit this widget and
            you will see this button:</p>
          <p><img src="../../assets/img/widget10.546489ab.png" alt="widget"></p>
          <p>Click it.</p>
          <p><img src="../../assets/img/widget11.1ac4e1df.png" alt="widget"></p>
          <p>Add the websites that you want to put this bot at. Then install the snippet by copying and pasting the
            code.</p>
          <p>Perfect! 😎 You got a bot on your website now.</p>
          <p><img src="../../assets/img/widget12.6f33257f.png" alt="widget"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">7/26/2021, 6:55:29
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="admins.php" class="prev">
                Admins
              </a></span> <span class="next"><a href="multi-language.php">
                Multiple Languages
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>