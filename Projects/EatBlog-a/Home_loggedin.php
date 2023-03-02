<?php

require "function.php";

check_login();

if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['tag'])) {
  //posting
  $image = "";
  if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
    $folder = "uploads/";
    if (!file_exists($folder)) {
      mkdir($folder, 0777, true);
    }
    $image = $folder . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $image);
  }

  $user_id = $_SESSION['logged']['id'];
  $tag = addslashes($_POST['tag']);
  $title = addslashes($_POST['title']);
  $post = addslashes($_POST['post']);
  $date = date('Y-m-d H:i:s');


  $query = "insert into posts (user_id,tag,title,post,date,image) values ('$user_id','$tag','$title','$post','$date','$image')";

  $result = mysqli_query($con, $query);

  header("Location: Home_loggedin.php");
  die;
}
?>

<!DOCTYPE html>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Eat Blog-a</title>
  <link rel="stylesheet" href="Home.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
  <script src="posting_validation.js"></script>
</head>

<body>

  <nav>
    <ul>
      <li><a href="Home_loggedin.php">Home</a></li>

      <li><a href="">Tags<i class="material-icons">arrow_drop_down</i></a>
        <ul class="dropdown">
          <li><a href="Home_loggedin.php">All</button></a></li>
          <li><a href="Home_loggedin.php?tag=Homemade">Homemade</button></a></li>
          <li><a href="Home_loggedin.php?tag=Pro">Pro</button></a></li>
          <li><a href="Home_loggedin.php?tag=Resto">Resto</button></a></li>
        </ul>
      </li>

      <li><a href="profile.php">Profile</a></li>

      <a href="logout.php"><button class="button2"> <span class="sign"> Log out</span></button></a>

    </ul>
  </nav>

  <div class="row">
    <!-- Creating a Post -->
    <div class="header">
    </div>
    <div class="leftcolumn">

      <div class="card1">
        <form method="post" enctype="multipart/form-data">
          <div style="padding-left:20px; padding-right:20;">
            <table>
              <img name="profilepic" class="postPic1" src="<?php echo $_SESSION['logged']['image'] ?>">
            </table>

            <h4 style="margin-left:10px;">Hello <?php echo $_SESSION['logged']['username'] ?>!</h4>

            <div class="form-group">
              <div style="text-align:left; padding-left:20px;">
                <label class="title" for="tag">Tag:</label>
                <select class="title" name="tag" id="tag">
                  <option value="Homemade">Homemade</option>
                  <option value="Pro">Pro</option>
                  <option value="Resto">Resto</option>
                </select>
                <input class="title" id="txt-Title" placeholder="Title" name="title" required>
              </div>

              <div style="padding-right:20px;">
                <textarea placeholder="What's cookin'?" name="post" class="textarea"></textarea>
              </div>

              <div style="text-align:left; padding-left:20px; padding-top:10px;">
                <label for="inputTag" style="font-size:12px;">
                  <i class="fa fa-2x fa-camera"></i>
                  <input type="file" class="upload" id="inputTag" name="image" required>
                </label>
                <div style="text-align:right; padding-right:20px;"><button class="submit" onclick="return validatePicture()">Post</button></div>


              </div>

            </div>

          </div>
        </form>
      </div>

      <!-- Automatic Posting -->
      <div>
        <?php
        $where = !empty($_GET['tag']) ? "where tag = '" . $_GET['tag'] . "'" : "";

        $query = "select * from posts $where order by date desc limit 8";

        $result = mysqli_query($con, $query);
        ?>
        <?php if (mysqli_num_rows($result) > 0) : ?>

          <div>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>

              <?php
              $user_id = $row['user_id'];
              $query = "select username, image from users where id ='$user_id' limit 1";
              $res = mysqli_query($con, $query);

              $user_row = mysqli_fetch_assoc($res);
              ?>

              <div class="card1">
                <div style="padding-left:30px; padding-right:30px;">
                  <table>
                    <tr>
                      <div class="profile"><img class="icon" src="<?= $user_row['image'] ?>"></div>
                      <h5>Posted by: <?= $user_row['username'] ?><br>
                        <?php echo date("jS M, Y", strtotime($row['date'])) ?>
                      </h5>
                      <h3><?php echo $row['tag'] ?>: <?php echo $row['title'] ?></h3>
                    </tr>
                  </table><br>

                  <?php if (file_exists($row['image'])) ?>

                  <div class="img" style="text-align:center;">
                    <img class="postPic" src="<?= $row['image'] ?>">
                  </div><br>

                  <?php if (!empty($POST['post'])); ?>
                  <div style="text-align:center; padding-left:50px; padding-right:50px;">
                    <?php echo $row['post'] ?></div>

                </div>
              </div>

            <?php endwhile; ?>
          </div>
      </div>
      <?php endif; ?>`
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

  </div>
</body>

</html>