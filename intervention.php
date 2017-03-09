<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <?php
   include 'header.php';
   include 'db_connect/db_config.php';
   protect_page();
   $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
   //Code for getting the user_id
   $logged_in = $_SESSION['email'];
   $query = "SELECT user_id FROM user_data WHERE email = '$logged_in'";
   $result = mysqli_query($connection, $query);
   $user_idArray = mysqli_fetch_array($result);
   $user_id = $user_idArray['user_id'];
  ?>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="progressbar.js"></script>

</head>

<body>
  <script src="interventionScript.js"></script>

    <div class="interventionMain">

      <div id="progressbarContainer">
        <div id="progressbar"><div class="progress-label">Loading...</div></div>
      </div>

        <div class="tab">
            <a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'wellnessQuestions')" id="defaultOpen">Wellness Questions</a>
            <a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'weekAverages')">Week Averages</a>
            <a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'overallAverages')">Overall Averages</a>
        </div>

        <div id="wellnessQuestions" class="tabcontent">
            <!--Code for Questions go HERE-->
            <!--Code for Questions go HERE-->
            <!--Code for Questions go HERE-->
            <!--Code for Questions go HERE-->
            <!--Code for Questions go HERE-->
            <h3>Interactive Behavior</h3>
    <?php

  $copingArray; //creates an array for holding Coping answer values
  $copingQCount = 0; //Counts the coping questions
  $coping = mysqli_query($connection, "SELECT * from intervention where coping = 1");
 while ($row = mysqli_fetch_assoc($coping))
  {?>
        <h6 class="border"><?php echo $row["question"]?></h6>
        <form>
        <div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="Yes" value=1>Yes</label>
        <label class="border3"><input type="radio" name="No" value=0>No</label>
      </div>
      </form>


<?php
  $copingQCount++;
  }
?>
    <h3>Food Selection</h3>
    <?php
  $foodArray; //create an array for holding Food answer values
  $foodQCount = 0; //counts the food questions
  $food = mysqli_query($connection, "SELECT * from intervention where food = 1");
  while ($row = mysqli_fetch_assoc($food))
  {?>
        <h6 class="border"><?php echo $row["question"]?></h6>
        <form>
        <div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="Yes" value=1>Yes</label>
        <label class="border3"><input type="radio" name="No" value=0>No</label>
      </div>
      </form>

<?php
  $foodQCount++;
  }

?>
        <h3>Physical Activity</h3>
    <?php
  $physicalArray; //creates an array for holding physical activity answer values
  $physicalQCount = 0; //counts the physical activity questions
  $physical = mysqli_query($connection, "SELECT * from intervention where physical = 1");
  while ($row = mysqli_fetch_assoc($physical))
  {?>
        <h6 class="border"><?php echo $row["question"]?></h6>
        <form>
        <div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="Yes" value=1>Yes</label>
        <label class="border3"><input type="radio" name="No" value=0>No</label>
      </div>
      </form>

<?php
  $physicalQCount++;
  }

?>

<<<<<<< HEAD
=======
        <h3>Personal Growth</h3>
    <?php
  $personalArray; //creates an array for holding personal activity answer values
  $personalQCount = 0; //counts the personal activity questions
  $personal = mysqli_query($connection, "SELECT * from intervention where personal = 1");
  while ($row = mysqli_fetch_assoc($personal))
  {?>
        <h6 class="border"><?php echo $row["question"]?></h6>
        <form>
        <div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="Yes" value=1>Yes</label>                 
        <label class="border3"><input type="radio" name="No" value=0>No</label> 
      </div>
      </form>
    
<?php
  $personalQCount++;
  }
  
?>
    
>>>>>>> d3cb0f42f3122c138907c3d455b572425281d132
    <form class="survey" action="#" method="post">
        <br/>
        <button>Submit</button>
    </form>

        </div>

        <div id="weekAverages" class="tabcontent">
            <!--Code for Week Averages go HERE-->
            <!--Code for Week Averages go HERE-->
            <!--Code for Week Averages go HERE-->
            <!--Code for Week Averages go HERE-->
            <!--Code for Week Averages go HERE-->
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
        </div>

        <div id="overallAverages" class="tabcontent">
            <!--Code for Overall Averages go HERE-->
            <!--Code for Overall Averages go HERE-->
            <!--Code for Overall Averages go HERE-->
            <!--Code for Overall Averages go HERE-->
            <!--Code for Overall Averages go HERE-->
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <script>
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
  </div>

</body>
</html>
