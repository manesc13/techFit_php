<?php
  session_start();
  // include("techFit_php/includes/include_master.php");
?>
<!DOCTYPE html>
<html lang="en">
  <!--head -->
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <title>TechFit</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/web.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i|Roboto:400,400i,700,700i" rel="stylesheet">
  </head>
  <!-- header -->
  <header>
    <!-- nav bar -->
    <div class="containav">
      <div id="branding">
        <img src="images/TFLogo.png">
        <h1><span></span></h1>
        <!-- login status -->
        <section class="">
          <?php
            // logged in (username, logout)
            if (isset($_SESSION['username'])) {
              // grab username
              $username = $_SESSION['username'];
              // display username
              echo '<p>Welcome, '.$username.'. You are logged in.</p>';
              // logout button
              echo '<form action="techFit_php/includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
                </form>';
              }
              // NOT logged in (log in, register)
              else{
                // log in button
                echo '<a href="login.php">Log in </a>';
                // register button
                echo '<a href="register.php">Register </a>';

              }
            ?>
          </section>


      </div>
    </div>
  </header>
  <!-- body -->
  <body>
    <!-- Photo-1: ropes / "ascend" -->
    <section id="frontpicture-ropes">
      <div class="photo">
        <img src="images/frontpage1.jpeg"></img>
        <div class="frontpagelogo">
          <!-- <img src="images/TFLogo.png"> -->
        </div>
        <div class="caption post_content">
          <div class="title">Ascend
          </div>
          <p class="caption"><br>"Committment towards reaching a goal
            characterized by complete independence from everything."</p>
        </div>
      </div>
    </section>

    <!-- Photo-2: barbell / "ascend" x 7 -->
    <section id="frontpicture-bb">
      <div class="thumbnail">
        <img src="images/frontpage3.jpeg"></img>
        <div class="caption post-content">
          <h1>ASCEND.</h1>
          <h1>ASCEND.</h1>
          <h1>ASCEND.</h1>
          <h1>ASCEND.</h1>
          <h1>ASCEND.</h1>
          <h1>ASCEND.</h1>
          <h1>ASCEND.</h1>
        </div>
      </div>
    </section>

    <!-- ascension info section -->
    <section id="main">
      <div class="container">
        <!-- ascension program info -->
        <article id="main-col">
          <h1 class="page-title">Ascension Program</h1>
          <img class="main-picture" src="images/dumbbell.png"></img>
          <p class="topic">5 Weeks of Workouts</p>
          <p class="subject">6 WORKOUTS PER WEEK / 60-90 MIN. WORKOUT</p>
          <p class="border"></p>
          <p class="description">TechFit presents 5-Weeks to Ascension.
          <br>The program will test your will and toughness. You give us 5-Weeks
          <br>and we will give you results</p>
        </article>
        <!-- ascension program blurb -->
        <aside id="sidebar">
          <p class="bar-head">Workout Details</p>
          <p class="bar-description">Duration:<span style="margin-left:0.6em">
            6 weeks</span></p>
          <p class="bar-description">Workouts per week:<span style="margin-left:0.6em">
            6</span></p>
          <p class="bar-description">Fitness level:<span style="margin-left:0.6em">
            Intermediate</span></p>
          <p class="bar-description">Equipment needed:<span style="margin-left:0.6em">
            Full Gym</span></p>
        </aside>
      </div>
    </section>

    <!-- Photo-3: ropes-2 / "raise the bar" -->
    <section id="frontpicture-ropes2">
      <div class="thumbnail">
        <img src="images/frontpage4.jpeg"></img>
        <div class="caption post__content">
          <h1>RAISE THE BAR.</h1>
          <p class="caption_0">
            If you want something you've never had,
            <br> you must be willing to do something
            <br> you've never done.</p>
        </div>
      </div>
    </section>

    <!-- ascension workout table -->
    <section id="body">
      <!-- week one -->
      <div class="weekone">
        <!-- <h1 data-toggle="collapse" data-target="#demo">Week Two</h1> -->
        <!-- <div id="demo" class="collapse">

            </div> -->
          <h1>Week One</h1>
          <!-- day section -->
          <h3>Day 1</h3>
            <table class="table">
              <thead class="color">
                <tr class="table-head">
                  <th scope="col">Exercise</th>
                  <th scope="col">Sets</th>
                  <th scope="col">Reps</th>
                  <th scope="col">Muscle Group</th>
                  <th scope="col">Proper Form</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="col-md-8">Barbell Bent-Over Row</th>
                  <td class="col-sm-0">3</td>
                  <td>12-15</td>
                  <td>Back</td>
                  <td><a href="gifs/Bent Over Barbell Row.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Bench Press</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Barbell Bench Press.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Wide-Grip Lat Pulldown</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Back</td>
                  <td><a href="gifs/Lat Pulldown.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Shoudler Press</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Dumbell Shoulder Press.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Incline Dumbbell Fly</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Incline Dumbbell Flye.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Incline Rear Delt Fly</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Incline Rear Delt Flye.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Cable Crossover (Mid Pulley)</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Cable Crossover.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Cable Lateral Raise</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Cable Lateral Raise.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Shrug</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Traps</td>
                  <td><a href="gifs/Dumbbell Shrug.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Straight-Arm Dip</th>
                  <td>3</td>
                  <td>To failure</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Straight-Arm Dip.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Triceps Kickback</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Dumbbell Kickback.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Behind the Back Cable Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Biceps</td>
                  <td><a href="gifs/Behind-The-Back Cable Curl.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Walking Lunge</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Legs</td>
                  <td><a href="gifs/Walking Lunge.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Plank</th>
                  <td>3</td>
                  <td>To Failure</td>
                  <td>Abs</td>
                  <td><a href="gifs/Plank.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Wrist Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Forearms</td>
                  <td><a href="gifs/Dumbbell Wrist Curl.gif">Link</a></td>
                </tr>
              </tbody>
            </table>

            <h3>Day 2</h3>
            <table class="table">
              <thead class="color">
                <tr class="table-head">
                  <th scope="col">Exercise</th>
                  <th scope="col">Sets</th>
                  <th scope="col">Reps</th>
                  <th scope="col">Muscle Group</th>
                  <th scope="col">Proper Form</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="col-md-8">Triceps Pressdown</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Triceps Pressdown.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Barbell Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Biceps</td>
                  <td><a href="gifs/Barbell Curl.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Overhead Cable Triceps Extension (High Pulley)</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Cable Overhead Triceps Extension.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Cable Overhead Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Cable Overhead Curl.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Step-Up</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Step Up.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">V-Up</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/V-Up.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Cable Crossover (Mid Pulley)</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Cable Crossover.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Cable Front Raise</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Cable Lateral Raise.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Straight-Arm Pulldown</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Traps</td>
                  <td><a href="gifs/Straight-Arm Pulldown.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Straight-Arm Pushdown</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Traps</td>
                  <td><a href="gifs/Straight-Arm Pushdown.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Barbell Reverse Wrist Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Barbell Behind-the-Back Wrist Curl.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Wrist Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Forearms</td>
                  <td><a href="gifs/Dumbbell Wrist Curl.gif">Link</a></td>
                </tr>
              </tbody>
            </table>

            <h3>Day 3</h3>
            <table class="table">
              <thead class="color">
                <tr class="table-head">
                  <th scope="col">Exercise</th>
                  <th scope="col">Sets</th>
                  <th scope="col">Reps</th>
                  <th scope="col">Muscle Group</th>
                  <th scope="col">Proper Form</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="col-md-8">Squat</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Legs</td>
                  <td><a href="gifs/Squat.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Hanging Knee Raise</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Abs</td>
                  <td><a href="gifs/Hanging Knee Raise.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Romanian Deadlift</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Legs</td>
                  <td><a href="gifs/Romanian Deadlift.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Weighted Crunch</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Abs</td>
                  <td><a href="gifs/Weighted Crunch.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Leg Extension</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Legs</td>
                  <td><a href="gifs/Leg Extension.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Lying Leg Curl</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Legs</td>
                  <td><a href="gifs/Lying Leg Curl.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Side Plank Reach Through</th>
                  <td>2</td>
                  <td>To Failure</td>
                  <td>Abs</td>
                  <td><a href="gifs/Side Plank Reach Through.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Barbell Shrug</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Traps</td>
                  <td><a href="gifs/Barbell Shrug.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Decline Bench Press</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Bench</td>
                  <td><a href="gifs/Decline Bench Press.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Barbell Upright Row</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Barbell Upright Row.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Seated Cable Row(Close)</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Back</td>
                  <td><a href="gifs/Seated Cable Row.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Bench Press</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Dumbbell Bench Press.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Overhead Extension</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Dumbbell Overhead Triceps Extension.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Concentration Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Biceps</td>
                  <td><a href="gifs/Concentration Curl.gif">Link</a></td>
                </tr>
              </tbody>
            </table>

            <h3>Day 4</h3>
            <table class="table">
              <thead class="color">
                <tr class="table-head">
                  <th scope="col">Exercise</th>
                  <th scope="col">Sets</th>
                  <th scope="col">Reps</th>
                  <th scope="col">Muscle Group</th>
                  <th scope="col">Proper Form</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="col-md-8">Reverse-Grip Dumbbell Press</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Reverse-Grip Dumbbell Press.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Incline Dumbbell Row</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Back</td>
                  <td><a href="gifs/Incline Dumbbell Row.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Lateral Raise</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Dumbbell Lateral Raise.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Decline Dumbbell Fly</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Decline Dumbbell Flye.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dips</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Dips.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Upright Row</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Dumbbell Upright Row.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Arnold Press</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Arnold Press.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Reverse-Grip Lat Pulldown</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Back</td>
                  <td><a href="gifs/Reverse-Grip Lat Pulldown.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Smith Machine Behind the Back Shrug</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Traps</td>
                  <td><a href="gifs/Smith Machine Behind-the-Back Shrug.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Straight-Arm Pushdown</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Traps</td>
                  <td><a href="gifs/Straight-Arm Pushdown.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Reverse Hamstring Extension</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Legs</td>
                  <td><a href="gifs/Reverse Hamstring Extension.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Tricep Kickback</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Dumbbell Kickback.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Hammer Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Biceps</td>
                  <td><a href="gifs/Hammer Curl.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Dumbbell Reverse Wrist Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Forearms</td>
                  <td><a href="gifs/Reverse Wrist Curl.gif">Link</a></td>
                </tr>
              </tbody>
            </table>

            <h3>Day 5</h3>
            <table class="table">
              <thead class="color">
                <tr class="table-head">
                  <th scope="col">Exercise</th>
                  <th scope="col">Sets</th>
                  <th scope="col">Reps</th>
                  <th scope="col">Muscle Group</th>
                  <th scope="col">Proper Form</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="col-md-8">Cable Overhead Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Biceps</td>
                  <td><a href="gifs/Cable Overhead Curl.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Lying Cable Tricep Extensions(Bench)</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Cable Lying Triceps Extension.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Incline Dumbbell Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Biceps</td>
                  <td><a href="gifs/Incline Dumbbell Curl.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Bench Dip</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Bench Dip.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Cable Fly</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Cable Flye.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">High Cable Rear Delt Fly</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Cable Rear Delt Flye.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Straight-Arm Pulldown</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Back</td>
                  <td><a href="gifs/Straight-Arm Pulldown.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Cable Front Raise</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Cable Lateral Raise.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Barbell Hack Squat</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Legs</td>
                  <td><a href="gifs/Barbell Hack Squat.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Hip Thrust</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Abs</td>
                  <td><a href="gifs/Hip Thrust.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Standing Calf Machine Shrug</th>
                  <td>3</td>
                  <td>5-10</td>
                  <td>Traps</td>
                  <td><a href="gifs/Standing Calf Raise.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Standing Calf Machine Shrug</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Traps</td>
                  <td><a href="gifs/Standing Calf Raise.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Barbell Behind the Back Wrist Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Forearms</td>
                  <td><a href="gifs/Barbell Behind-the-Back Wrist Curl.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Standing Barbell Reverse Wrist Curl</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Forearms</td>
                  <td><a href="gifs/Standing Barbell Reverse Wrist Curl.gif">Link</a></td>
                </tr>
              </tbody>
            </table>

            <h3>Day 6</h3>
            <table class="table">
              <thead class="color">
                <tr class="table-head">
                  <th scope="col">Exercise</th>
                  <th scope="col">Sets</th>
                  <th scope="col">Reps</th>
                  <th scope="col">Muscle Group</th>
                  <th scope="col">Proper Form</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="col-md-8">Barbell Roll Out</th>
                  <td>3</td>
                  <td>To Failure</td>
                  <td>Abs</td>
                  <td><a href="gifs/Barbell Roll Out.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Deadlift</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Whole Body Movement</td>
                  <td><a href="gifs/Deadlift.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Roman Chair Crunch</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Abs</td>
                  <td><a href="gifs/Roman Chair Crunch.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Back Extension</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Back</td>
                  <td><a href="gifs/Back Extension.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Standing Lat Pulldown</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Back</td>
                  <td><a href="gifs/Standing Lat Pulldown.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Incline Dumbbell Press</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Chest</td>
                  <td><a href="gifs/Incline Dumbbell Press.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Standing Barbell Shoulder Press</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Shoulders</td>
                  <td><a href="gifs/Standing Barbell Shoulder Press.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Pull-Up</th>
                  <td>2</td>
                  <td>12-15</td>
                  <td>Back</td>
                  <td><a href="gifs/Pull-Up.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Lying Triceps Extension</th>
                  <td>3</td>
                  <td>12-15</td>
                  <td>Triceps</td>
                  <td><a href="gifs/Lying Triceps Extension.gif">Link</a></td>
                </tr>
                <tr>
                  <th class="col-md-8">Superset with</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th class="col-md-8">Prone Incline Dumbbell Curl</th>
                  <td>3</td>
                  <td>To failure</td>
                  <td>Biceps</td>
                  <td><a href="gifs/Prone Incline Dumbbell Curl.gif">Link</a></td>
                </tr>
              </tbody>
            </table>
      </div>
      <!-- week two -->
      <div class="weektwo">
        <h1 data-toggle="collapse" data-target="#demo">Week Two</h1>
        <div id="demo" class="collapse">
          <!-- <h1>Week One</h1> -->
          <h3>Day 1</h3>
          <table class="table">
            <thead class="color">
              <tr class="table-head">
                <th scope="col">Exercise</th>
                <th scope="col">Sets</th>
                <th scope="col">Reps</th>
                <th scope="col">Muscle Group</th>
                <th scope="col">Proper Form</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-md-8">Barbell Bent-Over Row</th>
                <td class="col">3</td>
                <td class="col">12-15</td>
                <td class="col">Back</td>
                <td><a href="gifs/Bent Over Barbell Row.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Bench Press</th>
                <td>3</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Barbell Bench Press.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Wide-Grip Lat Pulldown</th>
                <td>3</td>
                <td>12-15</td>
                <td>Back</td>
                <td><a href="gifs/Lat Pulldown.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Shoudler Press</th>
                <td>3</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Dumbell Shoulder Press.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Incline Dumbbell Fly</th>
                <td>2</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Incline Dumbbell Flye.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Incline Rear Delt Fly</th>
                <td>2</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Incline Rear Delt Flye.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Cable Crossover (Mid Pulley)</th>
                <td>2</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Cable Crossover.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Cable Lateral Raise</th>
                <td>2</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Cable Lateral Raise.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Shrug</th>
                <td>3</td>
                <td>12-15</td>
                <td>Traps</td>
                <td><a href="gifs/Dumbbell Shrug.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Straight-Arm Dip</th>
                <td>3</td>
                <td>To failure</td>
                <td>Triceps</td>
                <td><a href="gifs/Straight-Arm Dip.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Triceps Kickback</th>
                <td>3</td>
                <td>12-15</td>
                <td>Triceps</td>
                <td><a href="gifs/Dumbbell Kickback.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Behind the Back Cable Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Biceps</td>
                <td><a href="gifs/Behind-The-Back Cable Curl.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Walking Lunge</th>
                <td>3</td>
                <td>12-15</td>
                <td>Legs</td>
                <td><a href="gifs/Walking Lunge.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Plank</th>
                <td>3</td>
                <td>To Failure</td>
                <td>Abs</td>
                <td><a href="gifs/Plank.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Wrist Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Forearms</td>
                <td><a href="gifs/Dumbbell Wrist Curl.gif">Link</a></td>
              </tr>
            </tbody>
          </table>

          <h3>Day 2</h3>
          <table class="table">
            <thead class="color">
              <tr class="table-head">
                <th scope="col">Exercise</th>
                <th scope="col">Sets</th>
                <th scope="col">Reps</th>
                <th scope="col">Muscle Group</th>
                <th scope="col">Proper Form</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="col-md-8">Triceps Pressdown</th>
                <td>3</td>
                <td>12-15</td>
                <td>Triceps</td>
                <td><a href="gifs/Triceps Pressdown.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Barbell Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Biceps</td>
                <td><a href="gifs/Barbell Curl.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Overhead Cable Triceps Extension (High Pulley)</th>
                <td>3</td>
                <td>12-15</td>
                <td>Triceps</td>
                <td><a href="gifs/Cable Overhead Triceps Extension.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Cable Overhead Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Cable Overhead Curl.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Step-Up</th>
                <td>2</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Step Up.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">V-Up</th>
                <td>2</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/V-Up.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Cable Crossover (Mid Pulley)</th>
                <td>2</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Cable Crossover.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Cable Front Raise</th>
                <td>2</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Cable Lateral Raise.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Straight-Arm Pulldown</th>
                <td>3</td>
                <td>12-15</td>
                <td>Traps</td>
                <td><a href="gifs/Straight-Arm Pulldown.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Straight-Arm Pushdown</th>
                <td>3</td>
                <td>12-15</td>
                <td>Traps</td>
                <td><a href="gifs/Straight-Arm Pushdown.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Barbell Reverse Wrist Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Triceps</td>
                <td><a href="Barbell Behind-the-Back Wrist Curl.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Wrist Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Forearms</td>
                <td><a href="gifs/Dumbbell Wrist Curl.gif">Link</a></td>
              </tr>
            </tbody>
          </table>

          <h3>Day 3</h3>
          <table class="table">
            <thead class="color">
              <tr class="table-head">
                <th scope="col">Exercise</th>
                <th scope="col">Sets</th>
                <th scope="col">Reps</th>
                <th scope="col">Muscle Group</th>
                <th scope="col">Proper Form</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="col-md-8">Squat</th>
                <td>3</td>
                <td>12-15</td>
                <td>Legs</td>
                <td><a href="gifs/Squat.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Hanging Knee Raise</th>
                <td>3</td>
                <td>12-15</td>
                <td>Abs</td>
                <td><a href="gifs/Hanging Knee Raise.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Romanian Deadlift</th>
                <td>2</td>
                <td>12-15</td>
                <td>Legs</td>
                <td><a href="gifs/Romanian Deadlift.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Weighted Crunch</th>
                <td>2</td>
                <td>12-15</td>
                <td>Abs</td>
                <td><a href="gifs/Weighted Crunch.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Leg Extension</th>
                <td>2</td>
                <td>12-15</td>
                <td>Legs</td>
                <td><a href="gifs/Leg Extension.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Lying Leg Curl</th>
                <td>2</td>
                <td>12-15</td>
                <td>Legs</td>
                <td><a href="gifs/Lying Leg Curl.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Side Plank Reach Through</th>
                <td>2</td>
                <td>To Failure</td>
                <td>Abs</td>
                <td><a href="gifs/Side Plank Reach Through.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Barbell Shrug</th>
                <td>2</td>
                <td>12-15</td>
                <td>Traps</td>
                <td><a href="gifs/Barbell Shrug.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Decline Bench Press</th>
                <td>3</td>
                <td>12-15</td>
                <td>Bench</td>
                <td><a href="gifs/Decline Bench Press.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Barbell Upright Row</th>
                <td>3</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Barbell Upright Row.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Seated Cable Row(Close)</th>
                <td>3</td>
                <td>12-15</td>
                <td>Back</td>
                <td><a href="gifs/Seated Cable Row.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Bench Press</th>
                <td>3</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Dumbbell Bench Press.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Overhead Extension</th>
                <td>3</td>
                <td>12-15</td>
                <td>Triceps</td>
                <td><a href="gifs/Dumbbell Overhead Triceps Extension.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Concentration Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Biceps</td>
                <td><a href="gifs/Concentration Curl.gif">Link</a></td>
              </tr>
            </tbody>
          </table>

          <h3>Day 4</h3>
          <table class="table">
            <thead class="color">
              <tr class="table-head">
                <th scope="col">Exercise</th>
                <th scope="col">Sets</th>
                <th scope="col">Reps</th>
                <th scope="col">Muscle Group</th>
                <th scope="col">Proper Form</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="col-md-8">Reverse-Grip Dumbbell Press</th>
                <td>3</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Reverse-Grip Dumbbell Press.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Incline Dumbbell Row</th>
                <td>3</td>
                <td>12-15</td>
                <td>Back</td>
                <td><a href="gifs/Incline Dumbbell Row.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Lateral Raise</th>
                <td>3</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Dumbbell Lateral Raise.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Decline Dumbbell Fly</th>
                <td>3</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Decline Dumbbell Flye.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Dips</th>
                <td>2</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Dips.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Upright Row</th>
                <td>2</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Dumbbell Upright Row.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Arnold Press</th>
                <td>2</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Arnold Press.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Reverse-Grip Lat Pulldown</th>
                <td>2</td>
                <td>12-15</td>
                <td>Back</td>
                <td><a href="gifs/Reverse-Grip Lat Pulldown.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Smith Machine Behind the Back Shrug</th>
                <td>3</td>
                <td>12-15</td>
                <td>Traps</td>
                <td><a href="gifs/Smith Machine Behind-the-Back Shrug.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Straight-Arm Pushdown</th>
                <td>3</td>
                <td>12-15</td>
                <td>Traps</td>
                <td><a href="gifs/Straight-Arm Pushdown.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Reverse Hamstring Extension</th>
                <td>3</td>
                <td>12-15</td>
                <td>Legs</td>
                <td><a href="gifs/Reverse Hamstring Extension.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Tricep Kickback</th>
                <td>3</td>
                <td>12-15</td>
                <td>Triceps</td>
                <td><a href="gifs/Dumbbell Kickback.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Hammer Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Biceps</td>
                <td><a href="gifs/Hammer Curl.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Dumbbell Reverse Wrist Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Forearms</td>
                <td><a href="gifs/Reverse Wrist Curl.gif">Link</a></td>
              </tr>
            </tbody>
          </table>

          <h3>Day 5</h3>
          <table class="table">
            <thead class="color">
              <tr class="table-head">
                <th scope="col">Exercise</th>
                <th scope="col">Sets</th>
                <th scope="col">Reps</th>
                <th scope="col">Muscle Group</th>
                <th scope="col">Proper Form</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="col-md-8">Cable Overhead Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Biceps</td>
                <td><a href="gifs/Cable Overhead Curl.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Lying Cable Tricep Extensions(Bench)</th>
                <td>3</td>
                <td>12-15</td>
                <td>Triceps</td>
                <td><a href="gifs/Cable Lying Triceps Extension.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Incline Dumbbell Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Biceps</td>
                <td><a href="gifs/Incline Dumbbell Curl.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Bench Dip</th>
                <td>3</td>
                <td>12-15</td>
                <td>Triceps</td>
                <td><a href="gifs/Bench Dip.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Cable Fly</th>
                <td>3</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Cable Flye.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">High Cable Rear Delt Fly</th>
                <td>3</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Cable Rear Delt Flye.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Straight-Arm Pulldown</th>
                <td>3</td>
                <td>12-15</td>
                <td>Back</td>
                <td><a href="gifs/Straight-Arm Pulldown.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Cable Front Raise</th>
                <td>3</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Cable Lateral Raise.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Barbell Hack Squat</th>
                <td>3</td>
                <td>12-15</td>
                <td>Legs</td>
                <td><a href="gifs/Barbell Hack Squat.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Hip Thrust</th>
                <td>3</td>
                <td>12-15</td>
                <td>Abs</td>
                <td><a href="gifs/Hip Thrust.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Barbell Behind the Back Wrist Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Forearms</td>
                <td><a href="gifs/Barbell Behind-the-Back Wrist Curl.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Standing Barbell Reverse Wrist Curl</th>
                <td>3</td>
                <td>12-15</td>
                <td>Forearms</td>
                <td><a href="gifs/Standing Barbell Reverse Wrist Curl.gif">Link</a></td>
              </tr>
            </tbody>
          </table>

          <h3>Day 6</h3>
          <table class="table">
            <thead class="color">
              <tr class="table-head">
                <th scope="col">Exercise</th>
                <th scope="col">Sets</th>
                <th scope="col">Reps</th>
                <th scope="col">Muscle Group</th>
                <th scope="col">Proper Form</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="col-md-8">Barbell Roll Out</th>
                <td>3</td>
                <td>To Failure</td>
                <td>Abs</td>
                <td><a href="gifs/Barbell Roll Out.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Deadlift</th>
                <td>3</td>
                <td>12-15</td>
                <td>Whole Body Movement</td>
                <td><a href="gifs/Deadlift.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Roman Chair Crunch</th>
                <td>3</td>
                <td>12-15</td>
                <td>Abs</td>
                <td><a href="gifs/Roman Chair Crunch.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Back Extension</th>
                <td>3</td>
                <td>12-15</td>
                <td>Back</td>
                <td><a href="gifs/Back Extension.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Standing Lat Pulldown</th>
                <td>3</td>
                <td>12-15</td>
                <td>Back</td>
                <td><a href="gifs/Standing Lat Pulldown.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Incline Dumbbell Press</th>
                <td>2</td>
                <td>12-15</td>
                <td>Chest</td>
                <td><a href="gifs/Incline Dumbbell Press.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Standing Barbell Shoulder Press</th>
                <td>2</td>
                <td>12-15</td>
                <td>Shoulders</td>
                <td><a href="gifs/Standing Barbell Shoulder Press.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Pull-Up</th>
                <td>2</td>
                <td>12-15</td>
                <td>Back</td>
                <td><a href="gifs/Pull-Up.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Lying Triceps Extension</th>
                <td>3</td>
                <td>12-15</td>
                <td>Triceps</td>
                <td><a href="gifs/Lying Triceps Extension.gif">Link</a></td>
              </tr>
              <tr>
                <th class="col-md-8">Superset with</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th class="col-md-8">Prone Incline Dumbbell Curl</th>
                <td>3</td>
                <td>To failure</td>
                <td>Biceps</td>
                <td><a href="gifs/Prone Incline Dumbbell Curl.gif">Link</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Team Info -->
    <section id="team">
      <div class="container">
        <h1>Meet the Team</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <!-- kenneth -->
            <div class="item active">
              <!-- kenneth -->
              <img class="teampic1" src="images/kennethcover2.jpg" alt="kenneth" style="width:100;">
              <div class="carousel-caption">
                  <h3>Kenneth Kim</h3>
                  <h4>Front End Developer</h4>
                  <p>Kenneth designed and programmed the official TechFit website. His knowledge for fitness and technology helped create TechFit to what it is today.</p>
              </div>
            </div>
            <!-- mikey -->
            <div class="item">
              <img src="images/Mikey.jpg" alt="Mikey Mann" style="width:100%;">
              <div class="carousel-caption">
                  <h3>Mikey Mann</h3>
                  <h4>Project Lead / Ascension Program Creator</h4>
                  <p>Mikey created the 5-Week to ascension using his knowledge from his several years under one of the most renown fitness experts in the field, Dr. Jim Stoppani. Outside of TechFit, Mikey spends his time creating video content for Bodybuilding.com, GNC, Gold's Gym, and crafting custom tailored UX experiences for Jimstoppani.com</p>
                </div>
            </div>
            <!-- riley -->
            <div class="item">
              <img src="images/Riley.jpg" alt="Riley" style="width:100%;">
              <div class="carousel-caption">
                <h3>Riley Adair</h3>
                <h4>System Administrator</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <!-- jess -->
            <div class="item">
              <img src="images/Jess.jpg" alt="Jess" style="width:100%;">
              <div class="carousel-caption">
                <h3>Yesica Figueroa</h3>
                <h4>System Administrator</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <!-- quan -->
            <div class="item">
                <img src="images/Quan.jpg" alt="quan" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Quan Tran</h3>
                  <h4>Media & Finance</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            <!-- manny -->
            <div class="item">
              <img src="images/Manny.jpg" alt="Manny" style="width:100%;">
              <div class="carousel-caption">
                <h3>Manny Escamilla</h3>
                <h4>Back End Developer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <!-- isaiah -->
            <div class="item">
              <img src="images/Isaiah.jpg" alt="isaiah" style="width:100%;">
              <div class="carousel-caption">
                <h3>Isaiah Nakama</h3>
                <h4>Design/Marketing</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span></a>
          </div>
        </div>
      </div>
    </section>
  </body>
  <!-- Footer -->
  <footer>
    <p>TechFit, Copyright © 2019</p>
  </footer>
  <!-- Footer -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
