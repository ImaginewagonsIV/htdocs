<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Eat Blog-a</title>
  <link rel="stylesheet" href="Home.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>

  <nav>
    <ul>
      <li style="padding: 5px;"><a href="home.php">Home</a></li>
      <a href="login.php"><button class="button2"> <span class="sign"> Login </button></a>
      <a href="signup.php"><button class="button2"> <span class="sign"> Sign Up</span></button></a>
    </ul>
  </nav>

  <div class="row">
    <div class="header">
    </div>
    <div class="leftcolumn">
      <div>
        <div>
          <div class="card1">
            <table>
              <tr>
                <div class="profile"><img class="icon" src="uploads/fakeimage/alden.jpg"></div>
                <h5>Posted by: AldenRichards <br>14th Nov, 2022</h5>
                <h3>Homemade: First Time Making Rissotto!</h3>

              </tr>
            </table>
            <div>
              <div class="img" style="text-align:center;">
                <img class="postPic" src="uploads/fakeimage/Rissotto.jpg">
              </div>
            </div>
            <div style="text-align:center; padding-left:50px; padding-right:50px;">
              <?php echo "This is my first time making Mushroom Risotto and I am very happy how good 
                      it turned out! What do you guys think? It may not look the best but it tasted good I tell ya! 
                      Also if anyone has some tips in making them, please do tell me! 
                    Also, if you want to know the recipe I just followed it here: 
                    https://www.allrecipes.com/recipe/85389/gourmet-mushroom-risotto/" ?>
            </div>
          </div>

          <div class="card1">
            <table>
              <tr>
                <div class="profile"><img class="icon" src="uploads/fakeimage/entengkabisote.jpg"></div>
                <h5>Posted by: EntengKabisote <br>19th Nov, 2022</h5>
                <h3>Resto: Seafood Gallore</h3>

              </tr>
            </table>
            <div>
              <div class="img" style="text-align:center;">
                <img class="postPic" src="uploads/fakeimage/Seafoodgallore.jpeg">
              </div>
            </div>
            <div style="text-align:center; padding-left:50px; padding-right:50px;">
              <?php echo "Craving for some seafood? Then I’ve got the right place for you! 
          Come and join us here at Seaside Eatery’s Restaurant and feast with us this fresh and flavourful seafood boil! It’s buttery, and pack full of flavour
          It has everything including Crabs, Lobsters, Crawfish, Shrimps, and many more. 
          They also have grilled seafoods which I highly reccommend! 
          So what are ya’ll waiting for? 
          If you want a taste of the sea then come to Seaside Eatery!" ?>
            </div>
          </div>

          <div class="card1">
            <tabel>
              <tr>
                <div class="profile"><img class="icon" src="uploads/fakeimage/yayadub.png"></div>
                <h5>Posted by: YuhyuhDub<br>26th Dec, 2022</h5>
                <h3>Homemade: Cold Winter, Hot Chocolate Everybody!</h3>

              </tr>
              </table>

              <div>
                <div class="img" style="text-align:center;">
                  <img class="postPic" src="uploads/fakeimage/Hot-choco.jpg">
                </div>
              </div>

              <div style="text-align:center; padding-left:50px; padding-right:50px;">
                <?php echo "Nothing beats the harsh cold of winter more than a warm cup of hot chocolate milk. 
                And drinking it with your friend makes it more warmer!" ?>
              </div>
          </div>

          <div class="card1">
            <table>
              <tr>
                <div class="profile"><img class="icon" src="uploads/fakeimage/paolob.jpg"></div>
                <h5>Posted by: P.Ballesteros<br>5th Feb, 2023</h5>
                <h3>Resto: Bulalo-OHO!</h3>

              </tr>
            </table>

            <div>
              <div class="img" style="text-align:center;">
                <img class="postPic" src="uploads/fakeimage/bulalo.jpg">
              </div>
            </div>
            <div style="text-align:center; padding-left:50px; padding-right:50px;">
              <?php echo "If anyone’s planning on visiting Philippines during their vacation then I highly recommend you to come here in Leslie’s Ridge and Restaurant in Tagaytay. 
                Not only does it offer one of the best bulalo you could taste but also it gives you a wonderful view of the Taal lake. 
                Good food and a nice view? What more do you want?" ?>
            </div>
          </div>


          <div class="card1">
            <table>
              <tr>
                <div class="profile"><img class="icon" src="uploads/fakeimage/chefsean.jpg"></div>
                <h5>Posted by: ChefSean<br>9th June, 2023</h5>
                <h3>Pro: Trial and Error</h3>

              </tr>
            </table>

            <div>
              <div class="img" style="text-align:center;">
                <img class="postPic" src="uploads/fakeimage/prochef.jpg">
              </div>
            </div>
            <div style="text-align:center; padding-left:50px; padding-right:50px;">
              <?php echo "This is me at my work at The Lorelei and we’re currently testing this brand new lobster dish that I made. 
                If it goes well it will be added in tonight’s special! 
                So see you guy’s at The Lorelei to have a taste of this dish!" ?>
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="rightcolumn">
      <div class="about">
        <div class="w3-bar">
          <div class="w3-bar-item">Welcome to Eat Blog-a!</div>
        </div><br>
        <p>A Blog site dedicated to food lovers like you. Share your wonderful food experiences here!</p>


      </div>

      <div class="rules">
        <div class="w3-bar">
          <div class="w3-bar-item">POSTING RULES</div>
        </div>
        <p><br><strong>1. Post Title or Description</strong></p>
        <p>A post’s title and/or description must specifically describe what type of food is shown, by at least 60%.</p>
        <br>
        <p><strong>2. Adding A Tag</strong></p>
        <p>A post must have a tag at the beginning of its title or description</p>
        <br>
        <p><strong>Available Tags:</strong>
        <p>•{<strong>HOMEMADE</strong>} - Food you yourself have made.</p>
        <br>
        <p>•{<strong>PRO</strong>} - You are a professional cook and food that you have made.</p>
        <br>
        <p>•{<strong>RESTO</strong>} - Food you have bought to eat.</p>
        <br>
        <p> <strong>3. Respect</strong></p>
        <p> Be nice and respectful to other users’ posts.</p>
      </div>

      <div class="faq make-sticky">
        <div class="w3-bar">
          <div class="w3-bar-item">FAQs</div>
        </div><br>
        <p>• <strong>How do I create an account?</strong> </br>
          - Follow the steps: </br>
          1. Click sign up in the navigation bar. </br>
          2. Enter your name. </br>
          3. In the username field, enter your username. </br>
          4. Enter your password. </br>
          5. Click the sign up button. </br>
          6. Login to your account. </br> </p> <br>

        <p>• <strong>Is an account required to create a post?</strong> </br>
          - Yes, you need an account, this is to prevent massive posting rate or spamming. Accounts also allow users to manage
          their posted content.</br>
        </p> <br>
        <p>• <strong>Is it allowed to post non-food related content?</strong> </br>
          - While we do allow SOME non-food related content on our website,
          we highly encourage you to avoid posting non-food related content
          as much as possible because the purpose of this website is to share
          your food experiences. For more information about posting content please read POSTING RULES.
          </br> </p> <br>
        <p>• <strong>Can I edit my posts?</strong> </br>
          - Yes, you can edit your posts. </br> </p> <br>
        <p>• <strong>Can I dete my posts?</strong> </br>
          - Yes, you can remove your posts anytime. </br> </p> <br>
      </div>
    </div>
</body>

</html>