<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="google-spreadsheet"><a href="#google-spreadsheet" class="header-anchor">#</a> Google Spreadsheet</h1>
          <p>With Google Spreadsheet, you can add, update and look up your data in a spreadsheet as well as process the
            data with various built-in tools with Google.</p>
          <h2 id="setup-google-spreadsheet"><a href="#setup-google-spreadsheet" class="header-anchor">#</a> Setup Google
            Spreadsheet</h2>
          <p><img src="../assets/img/spreadsheet1.4735e227.png" alt="spreadsheet"></p>
          <p>Follow steps 1 to 4 to connect to your Google account. Allow Smart ChatBot to access your Google spreadsheet. When
            you come back, if nothing changed, click step 1 to 3 again to refresh and you will see this:</p>
          <p><img src="../assets/img/spreadsheet2.b57a0d86.png" alt="spreadsheet"></p>
          <p>Create a new spreadsheet or make sure you have one in the Google account that you just connected to.</p>
          <p><img src="../assets/img/spreadsheet5.0e17183e.png" alt="spreadsheet"></p>
          <p>Name the spreadsheet and worksheet properly at area 1 and 2. You will need them when you manage your data
            in the Action step.</p>
          <div class="custom-block warning">
            <p class="custom-block-title">WARNING</p>
            <p>Importantly, remember to give column names for the worksheet in the first row (see area 3 in the above
              picture). You must do this by manually type in what fields do you need. For example, this is a product
              worksheet and each product has a name, a price and a description.</p>
          </div>
          <p>Later when you manage your data, this is how it looks like when the column names are set correctly (area
            1,2,3 in the above picture are correspond to 1,2,3 in the following picture):</p>
          <p><img src="../assets/img/spreadsheet6.9a805e68.png" alt="spreadsheet"></p>
          <h2 id="manage-spreadsheet-in-action-step"><a href="#manage-spreadsheet-in-action-step"
              class="header-anchor">#</a> Manage Spreadsheet in Action Step</h2>
          <p><img src="../assets/img/spreadsheet3.ecf089f9.png" alt="spreadsheet"></p>
          <p>In an Action step, follow steps 1 to 3 in the above picture. Then you will see a list of functions.</p>
          <p><img src="../assets/img/spreadsheet4.b3f75da4.png" alt="spreadsheet"></p>
          <h3 id="insert-row"><a href="#insert-row" class="header-anchor">#</a> Insert Row</h3>
          <h3 id="get-row-by-value"><a href="#get-row-by-value" class="header-anchor">#</a> Get Row by Value</h3>
          <h3 id="get-multiple-rows"><a href="#get-multiple-rows" class="header-anchor">#</a> Get Multiple Rows</h3>
          <h3 id="update-row"><a href="#update-row" class="header-anchor">#</a> Update Row</h3>
          <div class="custom-block tip">
            <p class="custom-block-title">IN PROGRESS..</p>
            <p>text tutorial about this page is in progress. Please check <a
                href="https://www.youtube.com/watch?v=ggmdiXGJ21g" target="_blank" rel="noopener noreferrer">Google
                Sheet 1<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px"
                    y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a> and <a
                href="https://www.youtube.com/watch?v=aoMCQdFoSEc" target="_blank" rel="noopener noreferrer">Google
                Sheet 2<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" x="0px"
                    y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a> for guidance. Sorry for any
              inconvenience.</p>
          </div>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">8/17/2021, 1:37:22
              PM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="dialogflow.php" class="prev">
                Dialogflow
              </a></span> <span class="next"><a href="data-store.php">
                Data Store
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>