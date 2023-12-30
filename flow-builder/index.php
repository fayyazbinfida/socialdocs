<?php
    include('header.php');
    include('sidebar.php');
?>
<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="flow-builder-overview"><a href="#flow-builder-overview" class="header-anchor">#</a> Flow Builder
            Overview</h1>
          <p>This section will give you an overall idea about how to use the Smart ChatBot flow builder. You can open a flow and
            try side by side when you learn it.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">IMPORTANT</p>
            <p>💁 Please make sure you go through every detail on this page before you start building bots.</p>
          </div>
          <h2 id="flow-sub-flow-and-step"><a href="#flow-sub-flow-and-step" class="header-anchor">#</a> Flow, Sub Flow
            and Step</h2>
          <p><img src="../assets/img/uchat_flow.0a01bdf5.png" alt="flow"></p>
          <h3 id="flow-type"><a href="#flow-type" class="header-anchor">#</a> Flow Type</h3>
          <p>To begin with, you need to create a <strong>flow</strong>. Currently, Smart ChatBot provides you with 11 types of
            flow:</p>
          <p><img src="../assets/img/flow_type.6ebfa00c.png" alt="flow"></p>
          <h3 id="sub-flow-type"><a href="#sub-flow-type" class="header-anchor">#</a> Sub Flow Type</h3>
          <p>Flow consists of <strong>sub flows</strong>. There are 3 types of sub flow:</p>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Sub Flow</th>
                <th style="text-align:left;">Usage</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,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"
                    alt="step"></td>
                <td style="text-align:left;">general sub flow, varies in flow type</td>
              </tr>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,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"
                    alt="step"></td>
                <td style="text-align:left;">call / trigger background tasks</td>
              </tr>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,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"
                    alt="step"></td>
                <td style="text-align:left;">process repetitive tasks</td>
              </tr>
            </tbody>
          </table>
          <h3 id="step-type"><a href="#step-type" class="header-anchor">#</a> Step Type</h3>
          <p>Sub Flow consists of <strong>steps</strong>. There are 8 types of steps:</p>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Step</th>
                <th style="text-align:left;">Usage</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPUAAAA5CAMAAADZRZ2YAAAA6lBMVEX////g5u2WorPw8vYYHyno7PH4+frO1d9CSFCtr7Pc3d4kKjT8/P3+/v6OkZa7xNCTlptXXGT4+PjKy82ZnKA7QUo0OkP09vi3ub3k5OUoLzjS09XNz9Gos8LDxciIjJFtcnhlanBVWmHj6e+ipamGiY/4+vvw8PHa2911eYBNU1vy8/Pq7/PAwsWqrLClqKyAhIpzd31FS1Pr7O2xtLd5fYNhZm1SV19JT1bf4OKyvMno6erZ3+e8vsGgq7ubprebnqNcYWjS2eLV19jHyctgZGvJ0dvAyNSLj5QuND3EzNdobHO3v8ytt8VYQUnbAAAEGUlEQVRo3u2biXLaMBCGJSMDxja1jS8MMea+CVAIhCRAmjZH077/63SlAUxDJ6EDKSninyG7GbSMvtGuV9gI8StHxCKmisI/r3sR5kV29KLME3f0EGb6K090FsxqC2NuqDFuqYy6hYtiEf+d0H8q1SniFktvXARmTqgRqhSxA0aJOJgjauS0ooiJK2rQiZor6kiEM2oApgvNGTXGJ+oT9Yn6KKn5vIbz2a83qCfChmaTY6em0JuaHBn1y7oWhIfYSz0Is+Oh3tybMeoYfqmYIBwPNcb/iDpFJPRhtCdqNZOX5cK8uQV1Ik5MlTp3Fkmi3bR/6uupsNT0+i3qlB3PJfV8dTvqCzauRD4g9Rch1Je3qJNWBv5G0VbUgZ0F2wz0+EGpI5FNasCOLQXQb1HHawsv3bXlfIbC+YM4KVA+Y2579YG8otYKpkoTvATUYYBRGhO7l1hZpZ23ScFXYUTPIyAJKW6BWHNjb3uzXevaJc9p5nz+Nh64t+MawI11rWw10kjRSF7r2iF1J0dT3NRTQB0GnMs5vxRcrizq1F1XtzPo88VtLd3rZxRVeur6mqcpaE/6U11/Yvq+FbVTJvLwEtbl/CnLlhNeoytau19RugGQainMcMmHFG/mzQRQhwHJPpCCqF2pDVFZuYPQV+Kiq8IwilR4/x2pAZNpu86lZAJZnivG0Mpp2qNVNxLxskInK0FFm7/XtXQFKZ6xspQ6DHDleIf2gKVlSq1Rg/OsaVpAUvvaquy61qx5QToadW+kg3IGRWKzpi8GG1IrkOLmRZUOCQOUdoN4poFC+2zRal5kOJRKivR1qszOwJXK/nYpLhkYQ5gd0zq1CV5WDqmRb99cmCqjhoAwX/LEXdlz0r2r3hCIqvWJFyToR5gfapeiNFUEpSunYK6S+oI63Qiav9c1VGjByrIhYQBVjQUxa9TjAEqpo12oFRBE3V59JGqjPsppPTlfhUuyV26fB9mQml3DO11rfa2VHMk32ZAwQCvftOuyv7SqKXd9s+/BYFMmhDR8VZVkvXPzWDbeh3oq/PzEdA1dGwzVT2H6ylpLukz6ZhMBhWZBu02vUbN+Xb4brVEjH5KVDQkDBiNCCq6ystWy53UvAwndNXqalhxbNaT432Qy6ijvQ/0gLBTD32fCUg+H+c7lBNCv6EU89c57M3w/OQPNhPsJbMLPmCb3+DDUVf1RBeM+ZdDeJIpL+k2dCbDQPw5930zJ2aV0zbSGBtqjXqMWZveHv1vozKFz3Q6i1P8n1NPrI75HGon8mfrHsd4ZrlS4ffZxoj5Rn6iPj5q7Z5qieHqmeaI+emru6nqxN1O5olbZ7EXM2W+Gscjf78OVInYWZwEqiBdViri1PPehvH5g4s3TIP/PqRGHnftgqiBuqJGDuNUvvZp2sH611NcAAAAASUVORK5CYII="
                    alt="step"></td>
                <td style="text-align:left;">display information</td>
              </tr>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPUAAAA6CAMAAABf0e82AAAA1VBMVEX////W6fzg5u2jz/twtfnv8vbp7fL3+ftDSFDc3d4YHymOkZZ2eoD39/j09vgkKjRYXWX8/P07QUrLzM7w8vatr7OTlpu83Px2ufnu7+/Q5fy4ur3j5OXDxchgZGs0OkODwPnj6O/m5+ianaGKjpNlanAoLzjJ4/v5+fnU1thrb3ZKT1eEiI1ydnzq6+zGyMqRlZl9gYbQ0tSws7amqa2ipalUWWEvNT7a7Pz4+fuUyPrz9PTY2dvAwsWvsrVNU1tMUlrD3/y22ft9u/p8u/qv1fvh7vqNgqkIAAADEElEQVRo3u3b23aaQBQG4C0K6KggKIiAZ8Rz1Caa5nxo2vd/pO4ZXavaWIQki6rDfwFzYS6+DOzZggNJ+IoiCZJAIwNA8EhkI/GTI5mNpE+OQGCJNJIUYGEmbtTsL9fo9q/vqWiBE42mtNdsRWijmRM1wE1bUChfVFIcqUGRZGDhSo1J1FypKxXO1AimSxhnakFI1Ik6UZ+lWhQ5U4sit+t1ol6nmv471bNTv+vNqpn3qZ6Ren9vls600rtpZdJnpEbwPvU7Y/or1Zo5zkGUxKq2cYqt234odSefJc3pEEKl++RClMSptlsZGuslhLqcVUfmpKkaEBy3kYP/nyD1LYpbFh4Oq2u9Zp1OeKP5DQLjZI9GLYp71a9Wy07Zb1i+D6rrqqetz3koFqisVioUATqLptqjl/2soaolZ7D0CSF5yNNPKF2djB8HALls/TFLVmWIIUG92cbYt/Ey/xFG3SUP7Ow+j+621BeN8aXTwNJ1r/ccp+Bow6luzHJMrRT8hdkjpobqcWk+0WO91wPUmFdEW/ZBdZ6wmUJrqbalvrr+BoiaQ5lcAgt6N8e6ugQYLPR7/MCqA7AkMziYeNRprGZvL6kPqosF3TNNTy8U3Sd/4u6q5/Q/ApfEQfVEA5gRA2JNpfIvNaJvcaY/doWj2l+VMF4R3KlKRp1t9XpUJgaq85tRXJHlwC7FyljsHL2aXayo+tndWtDVxWDfXMetPtyb2VU60xFWLn0I4NFD/Zre19uS4rRU27mvu+v7+ujUfYuVsohdiqOWrsyszmq4P3m4GpWhPDJm3aangUN6hrOp4eqU1fCjU1fZd63QHSnJspo2WOqkMZyjGi5MHftUF3I9n+jmHYDi+X53d70+OjWd6344NUYz6cydQgJ6M8b+ieiwarygVQNOIZLETl/0/Xqoj4+hzQ4bzp6lJM/N+HlGKsvcvvtI1Ik6UZ+fmrt3mpKUvN1L1Gev5rU307hSa6yGSwJnvxkWJP5+H661BWWzF+AGeInc/rMFQgveMHFwN8jp7BpR2JHlBrhRgwLc5jdWYVDAAXaAkgAAAABJRU5ErkJggg=="
                    alt="step"></td>
                <td style="text-align:left;">ask question and wait for user input</td>
              </tr>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAAA6CAMAAAC05lQ1AAAA1VBMVEX////88dbg5u380WTv8vb4+fvo7PGOkZb9/f0YHync3d5DSFD29/f82YDw8vb09vn802v87chJTlb74Z11eX9kaW9YXWX6+vrq7/Px8vLu7u/i4+TP0dPFx8kvNT4kKjSAg4n813nj6O7878+usLT85aukp6uTlpv83Y/e3+HKy83846SZnKD835WIjJFzd31vc3r81XI6QEk0OkPa2923ur1TWF/U1tf857L84Z1eY2pNU1tGTFTo6evm5+j88tr868H86bn824d7f4UoLzj48uNtcnh8rStVAAAC70lEQVRo3u2b2VriQBCF264sHQhmkUXEEBYhOKDI6jY6bjPv/0hTaSIMI6H148KQzrlJpXL1k1OVpheSSTpZGtVoKBVvtkcKj5QdI5VH2o4RoVxfijRrSX1MqTTYlB4vqR9+/zr4msieilmtiNuiLYSWBBvN0qLc50yxDiTCJtaxGkVSYaMybNmwDw8lw0ZgFKWSYVOaYWfYGXZ6sRVFMmxFkfi7vRHbacJCF1Jh9+BdTynF3jhKG8FzeGkDPKcOO36U5gC0w2sH7PSZPP4D1oEmv75AbxfsczdgJHGKx+5FrcyGm89hd42iST6odj/YK+zRAvcG4AjVb4uwq6V6Pree+EGSqjjsqLRX/bwpwj6tD/Ld9UTSsRWFxJZ2gQvgeTs2G9xPi1dmGHl3vn93PRsbBto+l9cxdVry34Y1fKgPp1f+RDfJd0g8SuOlvdIt2O3t2CflRqU7vsbIm7i6PnyY6kbXu2aIHabKweXYPUfsidsISkZi6v1jaXdWN08AfYHJPX9GpuMBIeaVW+OZMyM0OWJjav4Ymv6SEfwtGHmcD02SDP0PBdA74nLwpgkFQSdnl24N8UpVcv6zUVnHjlLVO3yqh4Ywh+UTkgBtGKUVIFKbW9wRYD/OjVD1U865jh2lzCLC6vlcFH2rVDWmk7dvC6gRNCOLC7BnxmsQBI26zra+7aRgC6YZsLEtLC7Arrzygq6WyifV0v17bXvL2sYUr+09wcbGxi0uwq65r/wVD3yPzHxXD/7kEHPePatEndzVsZNPyX5gOwCOwy0uwD4zZgTF3yjz5sZb8YFUuhO/sf7d3hPsGxhhbyuk9R9Y3FzaBbz00eLpw9a0bXNpTbiwoS/XXBoKwIaCZFOIKBu5nfRix614dmy7k8oJY1WVeFUkw86wM+x0Yku34qlp2Ypnhi0FtnT70t5HaUwqbLbo5BqVbIcx1STcT85a1IpOD7RUIovU1j+nJpjgkIXoBMn+nDSxltSYJdJgE4vIq7+wkErH5uk9LwAAAABJRU5ErkJggg=="
                    alt="step"></td>
                <td style="text-align:left;">process data and tasks via integrations, APIs, notifications...</td>
              </tr>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAAA4CAMAAAD5LvU+AAAA8FBMVEX////B8ujg5u3v8vb3+fvo7PEYHymtr7PKy85t1sBr1cBZz7dDSFDc3d74+Pis691RzLN1eX/09vhYXWWOkZb8/f3u7u+SlZokKjSM4c/w8vaJ38688eZUzrWanaKHipB+godlanBgZWw7QUo0OkPq7/Pl6e7s7e3R0tSjpqpUWWFMUlr5+fni4+TBwsVg0btc0bmg59mS4tKxtLeWmZ5KT1cvNT4oLzjw8PGm6dzDxci6vMB4fIL5+vvz9PS07uLd3uCX5NTHycty18Nm1L3I8+uv7ODY2duK385928htcniH382ChovU8+7k5eZpbXTeLytGAAADRklEQVRo3u3baW+iQBgH8HGAkYr1wFLQBVGhWu97rdqqVbf37n7/b7MPh6tNtWiaEOvwT5o+E+2LX4c5BAdZETnMYSssND6vGLtivlixdsV9sULYzkEVJ6JVrjCmho3x1Vr9+1fosKBvGkksum4RFwFNCRshtohFBJEYMUQRG4lXrFtRxYYEbNrYmQxlbABDMKaMjXHADtgB+3TZDEMZm2EoXrcDNk3sbbu0aefHRu7Vk2Lv3KUNW4l3OVNPib1zAVs0Hzab91rny2yehJHU68/cZuy2UEL+xpsdiYRC7WXr1e3kuJD2YJd6fTLIN6TP2ShbrbvNWi5/g3yPN3soNJfa857s86pSkN+MnkdvO+kmY+iw+Mh+EuKhhSZAmnEv9uTFHMOvu7t92LXccbAZZhs7LbTViHAGeVa92Lyir8Ri1iD9cA0ugOioGyUV3hrHWXOQ7CrAvoieXyYJhI8lU5cwNnSTVKyhwUevs6aSn6Hd8WGXBuxpU9O0+/0u8ixprNS3g5ycJz0J2P2UrBswmKUeycs502VPxv1CY1Sy2aWCocsppQtsUoX3DPwd71unNLXzFA/tx774ee1WI6VsXcbGI7ArfxAqkzmqVws3VuWw0WXKushtdlmBf9dNoVIE9ssESTq87Et2s92ocfUQtmxXXTIGti4hNAcsT7LWQPjIjt1W6+7f8KQMVZjwyLdkMrvZT1pCS3uyZTJ3K3A5RGBfOJUDhvZHNvy4WHiPf2yW3T2Tq3FIW1gMI60HL3aDyNKH3nbY695WPu9tb7YvC9hrwgpMah1h6MUuFczRamxn3bG9ZterL5P3Y1v8P7bHztg+Hradh9ay02xOvdhobip/Zb0ShplcScJMLt+t2fZMHn4zVr1dyyl6eebO5DDvp+CFI2OH2q1Es73H5rSeM4iZ59fr9prtrNv6Y8Vlo1mBGNfv1u2jYS/VzeZQSJ/eJ7Atu7SO1jpbJyK04qfE5rhdd1fai7ONPE9P6jYD1TeVKGVT98STZSl+KhKwA3bAPk02dU88OY7idTtg08SmdpcmUcWWnJmcw5R9wxhzFH6fXCpi0T09UGQRLWGLG6cmJI9DFl4nSL7PSRMR1KuwiBo2EhHF+QcUTGOe6KKmnAAAAABJRU5ErkJggg=="
                    alt="step"></td>
                <td style="text-align:left;">go different steps depend on conditions</td>
              </tr>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPcAAAA4CAMAAAAW7J4AAAAA7VBMVEX////cxOPg5u2PTbnv8vb3+fvo7PEYHynKy82tr7P9/f3v7/B0eH6QT7nw8vZYXWT09vn39/e2ic+reckkKzTcw+OOkZbStN7Mq9qbX7/q7/OUVLtCSFD6+vrj6O7awOLc3d7T1NYyOEFlanDbw+LDndW/l9OqdseeZMGYW76ws7aHio/h4uPXvOHFoNawf8uUl5xgZWw5P0j4+fvz9PTr7Ozfy+bUuN+mccaVVr2hpKh8gIV6foRPVV3x8fLPsdzIpdjCnNXNz9Gia8S3ubyoqq6eoaWYm5+AhInl1+u6j9DFx8manaJtcnhESlIHW77jAAACuUlEQVRo3u3bWXOqMBQH8GPColEqAu4idde61aX3tla7b3f9/h/nxgx4a0eWTl+Q8H/AM+PTb0KSM0CARZWQhLYRAcC7ElglfLESWSV9sQLE8qlKUmGXCkLcuBGqvGP/+Jb4XOBIQ9S6A1dRnao5cQMs6khlBRHUBEduUCuiU3LlpondHLpPTjhzU/A2CHHmRih2x+7YHXG3IHDmFgSu9+/Y7ZLvnXwU3b79Wqmq5aPk9u/XHLei5SPkdtvHdIzx1XRMq7E2wCw2PLg7Kacgt55dQAjj5u4x6lUpUSxjJ8rEw00aLcPIviw/uM23VhpCGPfxZinfPrJf//FONmvDQpYi990s5LUAIYtHv9a+G2Bdo4M+aQeY34V5g15NOOROz8LqPtyvlQadAVa6gdbzQu3U1s4ffjeNYdqe35lsejSTZZn+HaZ49mv5yRTjRyvQ/v0kt0b2KG8y5xljndu5L1LzzK/kEsKZg91KGSv3wfq15VA21iOydV+bYF43Gzs3nNZCd597u7sK7hfZQLctHzeQxh/DeDGp9hkAzuSzY3Af7tfGfYy16S2b3/2it5vJs/Yos7kdarcouvdrbQ3j8n21Z7F1rVz071Of2CivjmC83faxjq7rfQUr3UuMBz1dv1Qwhbu7yQ2hl5WRpNpMjs7v+f78JhCuePdrim5pCrZD4a5u6tsM6SreSlNts0WrN/O/Oz1rnj+Hq131dCualch3q0HcJJU15L+vN0C1q8L+/g3wsJGzIwhTPO7zn5MxK6277tT3Pt/v0sKfoM/X2LoWIbck+T9vcfaxKLlZfN2sb+HSHdHnity9DxVFrt+XxO7YHbuj6+bufagkcb1/x26+3Pz2a4QrN7HXcwlx9j0yknj8/pw4359DBdUXwEvE+vuDFsT7YIbvqZPjOZ2iMradBXDjBhV4zj9BxUSPWak1egAAAABJRU5ErkJggg=="
                    alt="step"></td>
                <td style="text-align:left;">go different steps depend on probability</td>
              </tr>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAAA6CAMAAAC05lQ1AAABYlBMVEX////t4+AAhP/g5u0YHynv8vb4+fvo7PGtr7PKy82zm5bv7/D4+Pjl2dZYXWXc3d5DSFB1eX/Wx8O4oZyCw//VxcGTlpvr9f+OkZZdsf/w8vYkKjScz//09vmHio86QEnk8v/8/f1RVl4zOULl5ef7/f9CpP/q7/NmanFWW2NZr/8Hh//k6O7s4d7O0NLT6v+l0//p3dvT1NaipamanaG2n5pcYWhMUVnP6P8+ov/CxMevsrXz+f/t9//Y7P9zvP9qt/8mlv8Niv/z8/Tf4OLi1tK1nZh/g4lBR08oLzjF5P9itP9Kp/8qmP/r7O3h5+3czsu4ur7JtrHEsKzBq6afoqa6pKDL5v+MyP9+wf9Trf/6+vrY2dvYycWlqKx5fYNydnxtcnhgZWzc7v84n/+/3frHycuztbjMu7aRlZmKjpNJTlbq9f+12/+e0f9Ao//m6/Dv6unq393Zy8e1t7qSlpqa7yloAAAEFUlEQVRo3u3bd1vaQBwH8CM5VqEMZbVpEjPaAgKyUbAqLtQ662rr7t677793R+GJ8SFJH0utR77PA7m7x38+Jtz9chAwwOHdG24Wx4U6xi0naTkv2XKRlvuSLcCS/Elrw8131ffR2JfBYKPD/a4689XxhwH/afITo4xBRldfZn67eTbjcFDCnmZME8mw5DqXnDwt7DxjIS/vu0A7tLAnrLBXAaCMPWqFPUodm7EUQHL79oCxEZgsZZSx76DW3bFbTOQuOo7gyf3h2F0y0g7L0skeucfMPH/+IhK/xayuxNPMk8n9NJMefzBDPZtBZsxmHsYjzamxJhpemxqfpZ79OJ7usNPxx+3xB08pZ8/OjIw3Mfvzysi9yOQTMo76GrbTSRsbtSY/vmhPafurjJ7tdFK5bqOz3WHOrkytMfqLnNJyRcNm0h/yTLM9l62N7c8OCpv5hJat6cmVp2QBo7pK07DJstXslCt0V2kGMVzAFoZv6LLz7XJsL/RY/lOxAfzhgK9/d2C92EM3FvcWbnYztFgZvmnILiY5LrU7Z4EdDEEcL+iZnLhF2H27357oyR4+Gt7Ods/93k7UmO1VloREIOmzxK7GUILAKITdt92VfG/2zc3Km9+dws5OYciYnRCL6P0AWGInyNGc3a+9tGnQq0rDyuhitK3e3ltwmLGXOmdPbSlcsoh19cYSTOUwoawsh19zerZ3KfdOWRZ8dRnKddSfb4WgWPaT/xBh92fndCIPQK8qjSjfEHd2u7LpMGP/gMl50lh/9r6xVX0fRLpa4K0g1uaBFIPJWEu5yIah01gS1uSEIMoqAIfJUr0Fyzp2n2LAzj6qDGUL6M1hyuYFyJ1g+LGSw7K36IUpJfgKqLVnSLB7fkpDKC8M+4Eq449HqTPDqTIau1o2dqOVC6nN2UAqnnHc7oH/RBRisXdi2B8MCRIAr6AHKcoXp7TSHBopAeALYJ6nzcbdf8bWV2laZeFoM+swZ5MUU0rRH16WUygCYifaWPwi2osXueccO9iqQQj/CdvlujiT65VW2WALNvwnNVWr83bPdo4zYR+Kqfr6fKr/bAL+K2yJ1Cm7nBccQ4+erdbO5vDH14TtwV1Vvk5sf1gWYqdc0odm8mWhfnyW07DxTO4RRE5XrujZOaW69bqqXCl7s/L9XD/7aK9gdLYbAQ6Gyvicr/8UoXKqathk3RYOZV1xqmcfoGW+mitdKTu7feN8FqPX4w7MWnrvpS1EtTkqXJMbT2txuynbXbEW6jaVbLZBqNtLs1qlUbaXZi3UfRlks222zSah7htPu0qzyxWbbVdpG6w0UGyJ3SATG0vNL4wthWfdtP2e3EKkDMt3nh5wgUGJK6N5akIyfsjC9AmS6/OADd9R41EwMGzAAzuDll8ihJ+cCsdoIgAAAABJRU5ErkJggg=="
                    alt="step"></td>
                <td style="text-align:left;">send full email instead of short email notification</td>
              </tr>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAAA5CAMAAAAyciabAAAAvVBMVEX/////1Pbg5u3yl9/lWcfw8vb4+fvo7PEYHyn9/f309vn4teovNT4kKjTq7/PS09Wtr7OOkZbj6O71peTc3d/Bw8ZESlL6+vr39/jO0NLKy83w8PGkp6uQlJmHi5B9gYdlanBUWWE0OkPt7u7j5OV2eoBgZWxYXWVJT1Y8Qkr6ve3qcM/GyMqKjpNvc3pcYWgoLzj/2Pfq6+zm5+yTlptzeH5MUlrx8vLmYMm4ur6ws7aZnKCEh4364faSlprupHp2AAACT0lEQVRo3u3bWXeiMBQH8NtoIIniQkV0iuLSutVtHDvTdjrz/T9WEzEeTrFoj31Abv4v3MPb70BuwhJQETaxiYoFAOkV3VX0wsraVfaFFZBdvlTZAnQqhKBhE1I5qN1/P2++FrjScOHu3YK4Eo2EDWC5RKgjp+IGERtExdpXqNgyho2NTSkyNqXRVIaMTYhhG7Zh55eNtJMjnbcNe59S4WNK+WMnxnapmEwpR+xPVmmF4uOHi/1YLOSITchxdgJZMOyjbFFbrVkzrMI15CR7VjqPvemxSXe7nLYhlrvRD8hkUti6uj2H3QqdwJdHn0Ms7XKm2ZSmsKU7ja2Boa9rXu0566d7gJcpY+yhBcPugPU9DtmJXqWlsKX7NPsv8w71fDDudKeTBjQWLJhX+WY07XbGzitkMEn2rHjI7Ul2vVzVpVj2f6nLv+BQY+omDxxPDXN5NntJsONLluez2FLJWB0azdCXzFXvT8RuPfy+B4BOOXNN/ujYnj0nr3b6Td7evpUVuw4KOx5qtqxA1hlqb5alO/llY9tzFhxAkq/jausJ7NJOftcbeDxii6Vk6rE9343tl6yN7e+at6E6YavO9smpq04+qatOruz94NXfjNah7OS1DM1g37ZKg+H/JmPNpRebt8EPBs5bFudt1I8ilCJj23Z0RPa8rYPs7Yp5l4bpzallIf4qYtiGbdj5ZKPr5LZtPv0ZNgo2urGtV2kcFZtHndwmyP4wJjbC/8m5S4TePWABllhubNcET99kcXIHyfXsNBFarc4CGjYIMMGWd/WANw2pMnZ8AAAAAElFTkSuQmCC"
                    alt="step"></td>
                <td style="text-align:left;">jump to a step or sub flow rather than using a line connector</td>
              </tr>
              <tr>
                <td style="text-align:center;"><img
                    src="data:image/png;base64,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"
                    alt="step"></td>
                <td style="text-align:left;">define output for the function flow</td>
              </tr>
            </tbody>
          </table>
          <div class="custom-block tip">
            <p class="custom-block-title">Note</p>
            <p>The differences among different types of flow are <strong>Flow Setup</strong>, <strong>Send Message
                Step</strong> and <strong>Question Step</strong>. Each channel has its own limitation of message types.
              For example, you can display a product gallery in Facebook Messenger while the SMS channel doesn't support
              that.</p>
          </div>
          <h2 id="publish-version-draft-version"><a href="#publish-version-draft-version" class="header-anchor">#</a>
            Publish Version &amp; Draft Version</h2>
          <p>In Smart ChatBot, each flow has a Publish Version and a Draft Version.</p>
          <ul>
            <li>Publish Version
              <blockquote>
                <p>your bot talk to clients using the publish version.</p>
              </blockquote>
            </li>
            <li>Draft Version
              <blockquote>
                <p>any editing of steps will be saved automatically to the draft version. you can edit your flow without
                  influencing the bot and test the draft version before you &quot;Publish&quot;.</p>
              </blockquote>
            </li>
          </ul>
          <h3 id="from-publish-version-to-draft-version-1-way"><a href="#from-publish-version-to-draft-version-1-way"
              class="header-anchor">#</a> From <strong>Publish Version</strong> to <strong>Draft Version</strong>, 1
            way:</h3>
          <ul>
            <li>click &quot;Edit Flow&quot; on the upper left/right corner of the flow to enter the draft version</li>
          </ul>
          <p><img
              src="data:image/png;base64,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"
              alt="overview"></p>
          <div class="custom-block warning">
            <p class="custom-block-title">Note</p>
            <p>You must enter Draft Version before you edit a flow.</p>
          </div>
          <h3 id="from-draft-version-to-publish-version-3-ways"><a href="#from-draft-version-to-publish-version-3-ways"
              class="header-anchor">#</a> From <strong>Draft Version</strong> to <strong>Publish Version</strong>, 3
            ways:</h3>
          <ul>
            <li>click &quot;Publish&quot; to save your draft to a new Publish Version</li>
            <li>discard changes and revert to the newest Publish Version</li>
            <li>keep draft and switch to Publish Version (by doing this, you can have a look at your publish version and
              when you click edit and come back, your draft is still here)</li>
          </ul>
          <p><img
              src="data:image/png;base64,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"
              alt="overview"></p>
          <div class="custom-block warning">
            <p class="custom-block-title">Note</p>
            <p>Don't worry if you accidentally quit during your editing, the system will keep all your modifications in
              Draft Version. So when you come back, simply enter Draft Version again and you can see your modifications
              remain intact.</p>
          </div>
          <h2 id="navigation-bar-sidebar-flow-builder"><a href="#navigation-bar-sidebar-flow-builder"
              class="header-anchor">#</a> Navigation Bar, Sidebar &amp; Flow Builder</h2>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>You might want to <a href="../guide/setup-create.php">create a flow</a> first, then open the flow side
              by side when you read the following instruction (Facebook flow used as an example).</p>
          </div>
          <p>After entering a flow, this is what you will see:</p>
          <p><img src="../assets/img/overview.784b45cd.png" alt="flow builder"></p>
          <h3 id="navigation-bar"><a href="#navigation-bar" class="header-anchor">#</a> Navigation Bar</h3>
          <p>On the top, there is a navigation bar. From left to right there are:</p>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Part</th>
                <th style="text-align:left;">Usage</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;">&quot;Demo Account&quot;</td>
                <td style="text-align:left;">current workspace, click to go back to Smart ChatBot dashboard</td>
              </tr>
              <tr>
                <td style="text-align:center;">&quot;brixbull.ai Support&quot;</td>
                <td style="text-align:left;">flow type and flow name, click to go back to &quot;All Bots&quot;</td>
              </tr>
              <tr>
                <td style="text-align:center;">&quot;Main Flow&quot;</td>
                <td style="text-align:left;">current sub flow</td>
              </tr>
              <tr>
                <td style="text-align:center;">&quot;Preview&quot;</td>
                <td style="text-align:left;">preview the current subflow from the Start Step</td>
              </tr>
              <tr>
                <td style="text-align:center;">&quot;Build a bot...&quot;</td>
                <td style="text-align:left;">tutorial video widget</td>
              </tr>
              <tr>
                <td style="text-align:center;">&quot;Joyce&quot;</td>
                <td style="text-align:left;">current user, click for user settings, support and logout</td>
              </tr>
            </tbody>
          </table>
          <div class="custom-block danger">
            <p class="custom-block-title">Preview Feature</p>
            <p>Please note that &quot;Preview&quot; feature is not supported in all channels. Channels support
              &quot;Preview&quot;: Facebook, Telegram, WhatsApp, Line and Viber. For channels without
              <strong>Preview</strong>, search &quot;talk to bot&quot; in the documentation.</p>
          </div>
          <h3 id="sidebar"><a href="#sidebar" class="header-anchor">#</a> Sidebar</h3>
          <p>On the left-hand side, there is a sidebar. From top to bottom there are:</p>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Section</th>
                <th style="text-align:left;">Usage</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;">Flow Builder</td>
                <td style="text-align:left;">build subflows here</td>
              </tr>
              <tr>
                <td style="text-align:center;">Flows</td>
                <td style="text-align:left;">manage all your subflows</td>
              </tr>
              <tr>
                <td style="text-align:center;">Analytics</td>
                <td style="text-align:left;">bot data analysis</td>
              </tr>
              <tr>
                <td style="text-align:center;">Live Chat</td>
                <td style="text-align:left;">inbox for all the conversations, make a human reply here</td>
              </tr>
              <tr>
                <td style="text-align:center;">Bot Users</td>
                <td style="text-align:left;">manage bot user profile. import, export, search or delete bot users</td>
              </tr>
              <tr>
                <td style="text-align:center;">Automation</td>
                <td style="text-align:left;">manage keywords, sequences, triggers and comments</td>
              </tr>
              <tr>
                <td style="text-align:center;">Contents</td>
                <td style="text-align:left;">manage custom fields, tags, OTN, personas, user menus and customer feedback
                </td>
              </tr>
              <tr>
                <td style="text-align:center;">Tools</td>
                <td style="text-align:left;">manage error logs, draft version tester, bot admins, widgets, multiple
                  language and shortcuts, Facebook Ads, inbound webhooks</td>
              </tr>
              <tr>
                <td style="text-align:center;">Broadcasts</td>
                <td style="text-align:left;">send/manage broadcasts</td>
              </tr>
              <tr>
                <td style="text-align:center;">Settings</td>
                <td style="text-align:left;">(some are owner only) manage bot users limit, Facebook greeting text, chat
                  widget customization, ice breakers and authorized websites</td>
              </tr>
            </tbody>
          </table>
          <div class="custom-block danger">
            <p class="custom-block-title">Note</p>
            <p>Features in Automation, Contents, Tools and Settings can be different from channel to channel. In
              Settings, usually owner can see all the settings like bot user limit while admin and member only see part
              of them.</p>
          </div>
          <h3 id="flow-builder"><a href="#flow-builder" class="header-anchor">#</a> Flow Builder</h3>
          <p><img src="../assets/img/workspace.c159e96e.png" alt="workspace"></p>
          <p>Apart from those in the above screenshot, there are a couple of more tips for using the flow builder:</p>
          <p><img src="../assets/img/tip1.a27dedcc.gif" alt="tip"> <img src="../assets/img/tip2.a057f4cb.gif" alt="tip">
            <img src="../assets/img/tip3.69bd3943.gif" alt="tip"></p>
          <h3 id="change-themes"><a href="#change-themes" class="header-anchor">#</a> Change Themes</h3>
          <p>Before you start, you can pick your favourite theme by clicking &quot;Change Theme&quot;:</p>
          <p><img
              src="data:image/png;base64,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"
              alt="theme"></p>
          <p>choose one of them and &quot;Apply Change&quot;.</p>
          <p><img src="../assets/img/change_theme2.2f552f92.png" alt="theme"></p>
          <h3 id="hide-mini-map-or-tooltips"><a href="#hide-mini-map-or-tooltips" class="header-anchor">#</a> Hide
            Mini-map or Tooltips</h3>
          <p><img src="../assets/img/change_theme3.369d6b4b.png" alt="theme"></p>
          <p>Mini-map is useful when you need to move your workspace in some situations. For example, when you click and
            drag inside a canvas, you are moving the canvas as a whole instead of everything in the builder:</p>
          <p><img src="../assets/img/tip4.cca29b48.gif" alt="tip"></p>
          <p>You can hide the mini-map by clicking the &quot;Hide Flow Overview&quot; option.</p>
          <p>With tooltip, you can see description for every feature you see in the flow builder like this:</p>
          <p><img src="../assets/img/change_theme4.7c9fcd6b.png" alt="theme"></p>
          <p>The tooltip includes a title, description, image, video link and documentation link. It is friendly to new
            users. For users who are already familiar with the system, you can choose to disable the tooltip by clicking
            the &quot;Hide Flow Tooltips&quot; option.</p>
          <h2 id="basic-operations-to-build-flows"><a href="#basic-operations-to-build-flows"
              class="header-anchor">#</a> Basic Operations to Build Flows</h2>
          <h3 id="edit-step"><a href="#edit-step" class="header-anchor">#</a> Edit Step:</h3>
          <p>Click on a step to edit it, &quot;Edit Panel&quot; will show next to the sidebar.</p>
          <p><img src="../assets/img/workspace1.f2c327b9.png" alt="workspace"></p>
          <p>Click step name to edit it. You can choose the next step at the bottom of the edit panel or drag connectors
            from the circle to the tile of another step.</p>
          <h3 id="connect-steps"><a href="#connect-steps" class="header-anchor">#</a> Connect Steps:</h3>
          <p><img src="../assets/img/workspace2.7ae21c04.png" alt="workspace"></p>
          <p>Create a new step or choose an existing one to be the next step. For dragging connectors, see below:</p>
          <p><img src="../assets/img/connect_step1.83458edd.gif" alt="workspace"> <img
              src="../assets/img/connect_step2.f19da962.gif" alt="workspace"></p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>When you choose an existing next step, a line will be connected from the current step to the next. Too
              many lines can be messy, get a Goto step to help you organize! In a Goto step, you can nominate the next
              step without creating a line connector.</p>
          </div>
          <h3 id="select-multiple-steps-move-to-canvas-sub-flow"><a
              href="#select-multiple-steps-move-to-canvas-sub-flow" class="header-anchor">#</a> Select Multiple Steps
            (Move to Canvas/Sub Flow)</h3>
          <p>We've just learned how to move the builder by clicking and dragging. For selecting multiple steps, it's a
            bit similar. Hold the <strong>Shift</strong> key then click and drag to cover the steps you would like to
            select:</p>
          <p><img src="../assets/img/select_steps1.aa273864.gif" alt="workspace"></p>
          <p>Alternatively, ctrl + click them one by one:</p>
          <p><img src="../assets/img/select_steps2.0b0ad2ad.gif" alt="workspace"></p>
          <p>The selected step has a green border. After selecting multiple steps, click &quot;Create New Canvas&quot;
            to organize these steps in a canvas box, or move them to an existing sub flow. To <strong>delete</strong>
            multiple steps, hit the &quot;delete&quot; button on your keyboard after choosing several steps:</p>
          <p><img src="../assets/img/delete_steps.9455f5d0.gif" alt="workspace"></p>
          <div class="custom-block tip">
            <p class="custom-block-title">Delete on Mac</p>
            <p>On Mac OS computer, hold <strong>fn</strong> and hit <strong>Delete</strong> to remove steps. Or use the
              &quot;<strong>Delete Selected</strong> button in the editing panel.</p>
          </div>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>The green start point is the entrance of a sub flow. It can't be moved to other sub flows or deleted even
              you include it in a group of steps.</p>
          </div>
          <h3 id="copy-and-paste-steps"><a href="#copy-and-paste-steps" class="header-anchor">#</a> Copy and Paste Steps
          </h3>
          <p>After you select a step or multiple steps, use <strong>Ctrl + C</strong> to copy and <strong>Ctrl +
              V</strong> to paste it to:</p>
          <ul>
            <li>the same subflow</li>
            <li>different subflows in the same bot/flow</li>
            <li>different bots/flows but the same channels (associate custom fields will be created automatically)</li>
            <li>different channels (unsupported features will be removed)</li>
          </ul>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>Please note that you can only paste ONCE. Copy again for another paste. This is to prevent bulk pasting
              which can quickly blow up the flow.</p>
          </div>
          <p>That's all about it for Flow Builder Overview!! 🎉 Try building your first flow now. 😎</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">4/27/2022, 5:06:08
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><!----> <span class="next"><a href="field.php">
                Field (Variable)
              </a>
              →
            </span></p>
        </div>
      </main>
<?php
    include('footer.php');
?>