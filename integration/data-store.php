<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="data-store"><a href="#data-store" class="header-anchor">#</a> Data Store</h1>
          <p>Data Store is a built-in data storage system provided by Smart ChatBot. With Data Store, you can easily add,
            delete, update, check up your data either manually or in Action steps.</p>
          <h2 id="setup-data-store"><a href="#setup-data-store" class="header-anchor">#</a> Setup Data Store</h2>
          <p><img src="../assets/img/data_store1.93022d39.png" alt="data store"></p>
          <p>On your dashboard, click 1 to 4 to add a new data store.</p>
          <p><img src="../assets/img/data_store2.1569a8a5.png" alt="data store"></p>
          <ol>
            <li>name the Data Store</li>
            <li>click &quot;+ Add Field&quot;, the following window will pop up.</li>
            <li>when finished, click &quot;Save&quot;.</li>
          </ol>
          <p><img src="../assets/img/data_store3.6866f6bf.png" alt="data store"></p>
          <ol>
            <li>name the field (used in the system, no space allowed)</li>
            <li>choose a value type (an Array can have several values like JSON variable)</li>
            <li>give a label if needed (for prettier display)</li>
            <li>give a default value if needed</li>
            <li>once finish, &quot;Save&quot;</li>
          </ol>
          <p><img src="../assets/img/data_store4.c1d9e661.png" alt="data store"></p>
          <ol>
            <li>click &quot;Browse&quot; for viewing and editing records</li>
            <li>click the pencil for editing fields of Data Store</li>
          </ol>
          <p>You can add/edit/delete records in the data store in 2 ways:</p>
          <ul>
            <li>do it manually in the &quot;Browse&quot; window in the following picture</li>
            <li>put it in the Action step and the flow will automate the process</li>
          </ul>
          <div class="custom-block tip">
            <p class="custom-block-title">Please not that</p>
            <p>When you add a new record, the system will assign a unique &quot;Record Id&quot; to it automatically. You
              can access this value by using the field name &quot;_id&quot;.</p>
          </div>
          <h2 id="manage-records-manually"><a href="#manage-records-manually" class="header-anchor">#</a> Manage Records
            Manually</h2>
          <p><img src="../assets/img/data_store5.133fb2ee.png" alt="data store"></p>
          <ol>
            <li>add new records, see picture below</li>
            <li>edit/delete records</li>
            <li>search records</li>
          </ol>
          <p><img src="../assets/img/data_store6.a66d738d.png" alt="data store"></p>
          <p>A new record requires values for the fields you set in the data store (value can be blank). There will be a
            &quot;Delete&quot; button in the editing window and the rest look the same as above.</p>
          <h2 id="manage-records-in-action-step"><a href="#manage-records-in-action-step" class="header-anchor">#</a>
            Manage Records in Action Step</h2>
          <p><img src="../assets/img/data_store7.32c9f004.png" alt="data store"></p>
          <p>In an Action step, follow steps 1 to 3 in the above picture. Then you will see a list of functions.</p>
          <p><img src="../assets/img/data_store8.41d56032.png" alt="data store"></p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>The functions work via API calls. This means that, by giving some inputs, you get your outputs from the
              data store. The outputs are saved in custom fields for future uses.</p>
          </div>
          <div class="custom-block warning">
            <p class="custom-block-title">WARNING</p>
            <p>You might need to know how to build flow and use variables before you read the following functions. See
              links below for guidance.</p>
          </div>
          <ul>
            <li><a href="#">Flow Builder Overview</a></li>
            <li><a href="#">Variable Operation</a></li>
          </ul>
          <h3 id="add-a-record"><a href="#add-a-record" class="header-anchor">#</a> Add a Record</h3>
          <h3 id="update-a-record"><a href="#update-a-record" class="header-anchor">#</a> Update a Record</h3>
          <h3 id="add-replace-a-record"><a href="#add-replace-a-record" class="header-anchor">#</a> Add/Replace a Record
          </h3>
          <h3 id="get-a-record"><a href="#get-a-record" class="header-anchor">#</a> Get a Record</h3>
          <h3 id="check-the-existence-of-a-record"><a href="#check-the-existence-of-a-record"
              class="header-anchor">#</a> Check the Existence of a Record</h3>
          <h3 id="delete-a-record"><a href="#delete-a-record" class="header-anchor">#</a> Delete a Record</h3>
          <h3 id="delete-all-records"><a href="#delete-all-records" class="header-anchor">#</a> Delete All Records</h3>
          <h3 id="count-records"><a href="#count-records" class="header-anchor">#</a> Count Records</h3>
          <h3 id="search-records"><a href="#search-records" class="header-anchor">#</a> Search Records</h3>
          <h3 id="find-a-record"><a href="#find-a-record" class="header-anchor">#</a> Find a Record</h3>
          <div class="custom-block tip">
            <p class="custom-block-title">IN PROGRESS</p>
            <p>text tutorial about this page is in progress. Please check <a
                href="https://www.youtube.com/watch?v=xtLY3cxh8j0&amp;t=3s" target="_blank"
                rel="noopener noreferrer">video tutorial<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
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
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/6/2021, 12:56:29
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="google-spreadsheet.php" class="prev">
                Google Spreadsheet
              </a></span> <span class="next"><a href="mark/twilio.php">
                Twilio
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>