<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="email-smtp-gmail-sendgrid"><a href="#email-smtp-gmail-sendgrid" class="header-anchor">#</a> Email
            (SMTP / Gmail / Sendgrid)</h1>
          <p><img src="../assets/img/email1.a530684f.png" alt="email"></p>
          <p>Smart ChatBot supports 3 email integrations: SMTP Profile, Gmail and SendGrid. Follow step 1 to 3 to find them.</p>
          <h2 id="smtp-profile-setup"><a href="#smtp-profile-setup" class="header-anchor">#</a> SMTP Profile Setup</h2>
          <p>Let's take Hotmail as an example.</p>
          <p><img src="../assets/img/email2.29e7781a.png" alt="email"></p>
          <p>Fill in the fields as shown in the picture. Note that you can find your &quot;Sender name&quot; in your
            account detail. Once done, click &quot;Save&quot;. The sign at the upper right corner will tell you whether
            you succeed or not, either &quot;Failed&quot; or &quot;Verified&quot; like this:</p>
          <p><img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAABACAMAAAApkbWmAAADAFBMVEX//v////3//////P/9///7///5///3///8/P///f3+//v+/Pr/+v76//z4+v/7+fv8+v3/+PX+/P////f5/P/9+v/y/////vH5/+xGSE5vbG/79v/09vr2//f/+/fy8fTl5/H//P7a6v7x7uprbXx0c3g1P2AyoFbv/P/49vzw8fn59vb9//Xy7fD//eLT0taRkJeLeGkspEPv9v/y/fD+8ObY19ybsMu/vcG3t76jl5Sjl4x5eoOAfn9YZ3w9lFEwMDvx+f/x//f3+/P99e7//uzl4uPDwsebl4uKhopbXmspl1pBo085oE05OTzo/v/98/bk4+m8xuPx/uLj6djMys+8v8vQx8fy2b2lq7WtqrClo6aBi5mAgIhNU2lkYWdqYmNVV2M7oWFFqF5EnV5fV1g4mkfl8//f9vLq6e/i/+nx5+P+8t/AytvO8Nr45Nrk2tne6NTFx8rx38arpqObmJ2snpV8dHlhZHaPg3VnZ3BAoW1Dmmt9cmVcW2E2l2AwpldYnVZbVFVQTlI0pk0yoUtfUEorp0nc8f/r/+3d3+W5weL/9t/q/tbS99Tq4dTT0M2drcHYx8C0sbrNvLi9uLes2LG8tKucnamzp6WLxKKGh41zdIOLuoJXqIGWjXp8t3RMp3JXq2ljnmRGS2E1mlpoXldUp1ZBRVArm084Pkk/NDDm7vfn//Ls6OjD0eLIytXD9dD56c7m1c7N6b/azLSQ0q3E56yTmKiVxKKk0Z+4p5h3hZRisI9yr4Bjan1WpHSCd3RktW1iq2xvZ2FSRz7j5/Xa3u/S2Oju/+bI0uHg/dr079jM0Na95NGyvM3g8Mvd18vc+sPM3MHi0cGU1b+osrySxrCiorCTn63DrqR5w6Kpn52xyptwvJl9xJGooIiFwXhNnVNGkEzU+fPO4PHk9OjN++C/8t6u3MnE7r/Dybas57SgqLG40KKs35qIupSV0IqRhYZkpXxXZXVxsWlBlkslIyfc///O//7D+PK9+uPL9OCk49im5s/G1anbSruCAAAIy0lEQVRo3u2ZB1AUVxiAd/99e7e71w/uaMediARpQoIQUAi9g0AQSCihqUSQEqQrWBBssffee++995pYYmzRqOm99/Z2UZFgZnaczJjM3AfLDPv+3f/j33947+0RPEA+BIj2PLVx8hHaBT+FcbPT/9/pv9jjZsyYMWPGjJmnDzz+LODjPv9eJpE8PicIiJYSnwlAbCTFQwBCCDBI4ImVHsTDEzsRgpLghGiJRIKAVPCQZEclHCgc/wAJ/J0cCESwHEUhBB2cKAqQKKl2TlIJTSsU9goFarWhQBiH1rjHO90/AW0N6MDiqndwwq4EQuKVMCzJuYd98EFpaVHRaHsaOxEP+lzHgHBTnQ7+2YkC/KVSMRQFGATC6fZOWlIGiBLtJAfWAqxfu7Trq/3ffrVr+nm9lBYaTdDSqVudtPBYJ52LNrm/SQ06cFjv6emb7LjeM4RGHeMYlabYc62KBBDl5MACWI3bOm/J3YI+mIP7zr+XqAc8ABREerhQIMSZjrsSVMdcLqCprL9qAkrnlplr05Q9LWbliY5OlJZRF0+tT1PLCFGwMhlnlTJ94b0f+jU3Nxc4Dxk8/61ffpJgAUhKz83wBa0WCErlPzcAwd9zASZ8WsAVEwseGU0xGRX+5VX1nYDAzQ48rTGtoT7T8tJQGClGieQsrKxSth4piI8f8dxzz40cGhc3ZP5bP+NCySn5+poaPwoQKZN5eNXuRCq5vIOVKsmj01qDi4VjQOxGV1BTHpEGSs43uUCrN8X/9JkRW0JzpEiliG5vzlu2qhkrCU75QX32/Z5IA4XJ7JtpAJqzMJbXHNhAexCPOJFCdxkgCSR6b2Tdu2nuScYSNKC0lMuBBCTA8Er4KkKX9PqMpSUgZksHEoW7Vbezu484rxoxYiTv5Hzw9pF7g2+8J+XvlTQxN/scdrIKn5WTNYqWyYqneTkFZvoSSmD8Kn2TM7zmTPSZMWmD1PFSdHDw3DlTIjdfz+qsk5Phvv5znLz8+wMwlkpVelWMV+W26ldelCIRTkiKnXCZgpY5JySMHDmi2Xnx7E++/L7P/I9xoUBOOQba+kslXETEocZJEqWxvIetU03N0ZgKYNx62M6cGeBkmz6g5wvPe4d9uiA4OHbuy+UvPftMZ6XcZ3JMgJNTgNPMTkow9J9iizm0oAE70UhEnWiFRUS3P5cEDR68+G7CiKHLFm0fP+7i1wWD3n4VO1EOSbNsdxZK6Yiy3OzTtJtjZc7MtPILPXK7HJeqopfXZ2WknvMYUP3C82vDen9qU7sxuZOMd5IQl6udrnpGVszJu+oN4el5sdPKPWfUtYh0IhCHnd4ZFjT/xmdfLw7KX7T9Q/dxOxYW5L/9qoR3gi25te/rJd32DN9ZyGi29PXypkHjE70yTSqLPpb3hh3ogK+TNMy6t02XMWCp4Z1osrphCgFhMCZ27knXsrqVJW4auWbbUbFOBIudvhgWdOvX0Sm7l3y7/cPRKRcXrhi6bParUuzEysq+qZ2UKD1b1+UNJfhc75VVsjF98tRvVr6sV/Qcnn3CLslOcOoaZv2aTZdOgIzCsys+1HeKb2qFr3/egRLl5OUHClmjnBu44JUXJeJeWzgYrfg67ftj3akz06eXjrbeOm9Yv6H52IlGQMg0s2r3Jna9fCzrJBjLev64Mjh4zZo1vWw+lyp6tnzuTdjZweu8U/dWJ0vh2cGE3F7BvXhW551mrh/bq9cYPWDzu9iJI0VNLjKrbl/gftr30brup06ljNsxb1i881DcT/yMTLOy9OwDnfUz1lzpTIWX9Qzemebn5xcV5Z8sRT2Gv+wNVDsnZMkOFJyO2vhHpVZE+aVtXOu6pyUr0U2mhs17XhnLcOKmO+y0deG9IYNufbTOHSvdGfbDKue4RR9jJ4mEJsjiqsYrXW1zSiSU0ac6OM3DzcWlv8mFsCSwU4jgFP13J7cJR3NSXZWuSoOrt1Q5tWVvIrAErtPSsZQMQJSThfWb7ywZEjfo1qaiizvurIhPcI4bdOO3UOxEIy2ET20IPLf62nEA/E9qdVWyGrQEwSBL6NG3nVPvNifThEN9/VxpS1AqkRQmL+9SyALAwAVLx8rxfCfSKeXS/kVxcfm3P/vyzoqEBOdleHIp0vNOWi2QWxYc81qNOxwsHCcOHx5lArmcAKbNacAjTgyL+2mUPqxHS4ynC6KVSjoEbalbfdqkYdy2NYh3cuDcu7+2e3/BqlXxhw+vSGh2zh9ycNf5UKGdKAqgbM+apu/eV6pUjusdY5oCMzwjU6NS+wtO3gByckD0d5O6hgpODGJfqntmlBSmNjTN8RvjmxrlqdQWz7LJ8oscM/Hd5UvH6liRKzqWsx9dOvtwQb/4+H79EpzzBw2eXdrdXkEjxI+TPttafrw2yoC7FNTJmY2NOYFOOV4mS7i53N8VgCLPVsZOCrG36m1Ti53kl3GduoJxck1jTkCAU0CGi0rjmBlbbxsY2FAX+6KOosQ5EUiiXzd++sIVd7FTUJ9FB7eXduewEiBhPHzCTacNhQqOIEDtFhlVZdsY6OXpYiDSb44JIYAgfSZe2xBicHes8sLFkw+s3lvoLSc1kVOy8+qzM32VhMxkqoixDay8cGHmCS0QYhCcpPrQM5/s/v7w4sVH9t/eVRTKsQjBfWcLjQNI9diJsmM4GahBBRQBBgCWpnknjaMe0SYLEsCDAbmFUYkYuQYHAQOgBC3BqlVqNQAZ4W5HiXQicAK8P1DYW58ZP37Tpk3ji0IVCvbBKl9YqhMULSVZijBQIAMVhuATagAQgTG60RJksCB14KoFSqYBBHI5ftIMowKGAAyBV5lqmZVRp7MTv/VENI04d3d7+9BQewxHtm1H+S7HlUQkf4545JX2w30ACzRCDInNGeFXYTUKFL6SUVN8mFb4I0gLTtgCiZdCQJIcp8BwHCckbnd5+3UsJXy3gRDAA1lwAN62I8Cx4oXaUmLgSd7ut9vjUsIh0F4NnuCurQCYP3AwY8aMGTNmzJh5yF94DEmbr8f49wAAAABJRU5ErkJggg=="
              alt="email"></p>
          <p>You will receive a test email if your email address gets verified.</p>
          <h2 id="gmail-setup"><a href="#gmail-setup" class="header-anchor">#</a> Gmail Setup</h2>
          <p>Click &quot;Connect Google Account&quot; after you choose &quot;Gmail&quot;.</p>
          <p>Select one of your Gmail and &quot;Allow&quot; Smart ChatBot to connect.</p>
          <p><img src="../assets/img/email4.8c96f7e0.png" alt="email"></p>
          <p>Once done, it looks like this:</p>
          <p><img src="../assets/img/email5.e9679e71.png" alt="email"></p>
          <h2 id="sendgrid-setup"><a href="#sendgrid-setup" class="header-anchor">#</a> SendGrid Setup</h2>
          <p>Select &quot;SendGrid&quot;, open its website:</p>
          <p><img src="../assets/img/email6.3a97d639.png" alt="email"></p>
          <p>Log in yourself, enter your SendGrid &quot;Dashboard&quot; from the upper right corner.</p>
          <p><img src="../assets/img/email7.97911082.png" alt="email"></p>
          <p>Follow step 1, 2 and 3 to create API key:</p>
          <p><img src="../assets/img/email8.78b150d2.png" alt="email"></p>
          <p>Give an API key name, select &quot;Restricted Access&quot;.</p>
          <p><img src="../assets/img/email9.dc7c2045.png" alt="email"></p>
          <p>Make sure you give Smart ChatBot full access to &quot;Mail Send&quot; and click &quot;Create &amp; View&quot; at
            the very bottom of the page.</p>
          <p><img src="../assets/img/email10.561bc3a8.png" alt="email"></p>
          <p>Once done, copy your key back to Smart ChatBot.</p>
          <p><img src="../assets/img/email11.a001ad7b.png" alt="email"></p>
          <p><img src="../assets/img/email12.15f42a45.png" alt="email"></p>
          <p>To get a &quot;Sender Email&quot;, let's get back to SendGrid's website again. Click &quot;Create a sender
            identity&quot; and &quot;Greate a Single Sender&quot;:</p>
          <p><img src="../assets/img/email13.dfa3dc53.png" alt="email"></p>
          <p><img src="../assets/img/email14.aa471be1.png" alt="email"></p>
          <p>Fill in your details and &quot;Create&quot;:</p>
          <p><img src="../assets/img/email15.3d3861d2.png" alt="email"></p>
          <p><img src="../assets/img/email16.6c8b1041.png" alt="email"></p>
          <p>A verification link will be sent to your email, click it to get verified.</p>
          <p><img src="../assets/img/email17.f65a849c.png" alt="email"></p>
          <h2 id="send-email-notification"><a href="#send-email-notification" class="header-anchor">#</a> Send Email
            Notification</h2>
          <p>After setup your email integration, you can select it as a sender in your &quot;Email Profile&quot; list.
            Check <a href="../flow-builder/action-notification.php#email-notification">how to send email
              notification</a>?</p>
          <h2 id="send-email-step"><a href="#send-email-step" class="header-anchor">#</a> Send Email Step</h2>
          <p>Add a Send Email step by right-clicking in your workspace or from the &quot;Add new step&quot; button:</p>
          <p><img src="../assets/img/email18.56805144.png" alt="email"></p>
          <p>This is how a Send Email step looks like:</p>
          <p><img src="../assets/img/email20.3a083ef9.png" alt="email"></p>
          <p>Name a sender and receiver. There are 3 blocks of information, subject, message and attachment. Feel free
            to add what you need.</p>
          <p>This is an example of an email from the user's side:</p>
          <p><img src="../assets/img/email19.4a8cc4f9.png" alt="email"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/21/2021, 3:13:17
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="mark/signalwire.php" class="prev">
                Signalwire
              </a></span> <span class="next"><a href="mailchimp.php">
                MailChimp
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>