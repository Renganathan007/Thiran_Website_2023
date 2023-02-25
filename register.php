<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
   
    <title>thiran login</title>
  </head>
  <body>
    <div class="container" style="background-color: transparent;">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" method="post" class="sign-in-form">
            <h2 class="title">Register</h2>

            <select  class="input-field" required name="event" id="show">
              <i class="fsa fa-user"></i>
              <option class="input-field" value="event1">event1</option>
              <option class="input-field" value="event2">event2</option>
              <option class="input-field" value="event3">event3</option>
            </select>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text"  id="p1name" name="p1name" placeholder="name" required />
            </div>
            <div class="input-field">
              <i class="fas fa-regular fa-id-badge"></i>
              <input type="text"  id="p1roll" name="p1roll" placeholder="Rollno" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-solid fa-envelope"></i>
              <input type="text" required id="p1mail" name="p1mail" placeholder="Email-id" />
            </div>
            <div class="input-field">
              <i class="fas fa-solid fa-phone"></i>
              <input type="text" required id="p1phone" name="p1phone" placeholder="Phone" />
            </div>
            <div class="input-field">
              <i class="fas fa-solid fa-graduation-cap"></i>
              <input type="text" required id="department" name="department" placeholder="Department" />
            </div>
            <div class="input-field">
              <i class="fas fa-sharp fa-regular fa-calendar"></i>
              <input type="text" required id="year" name="year" placeholder="Year" />
            </div>
          
            <div class="input-field" id="hide">
              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<i class="fas fa-user"></i>
              <input type="text" id="p2name" name="p2name" placeholder="  &nbsp;&nbsp; name" />
            </div>
            <div class="input-field" id="hide2">
              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<i class="fas fa-regular fa-id-badge"></i>
              <input type="text" id="hidee2" name="p2roll" placeholder=" &nbsp;&nbsp; Rollno" />
            </div>

            <input type="submit" value="Register" class="btn solid"  />
            
            </div>
          </form>
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          
        </div>
        
      </div>
    </div>
    <script src="Register\app.js"></script>
  </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "register";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
if(isset($_POST['p1roll'])&& isset($_POST['event'])){
    $event = $_POST['event'];
    $p1name = $_POST['p1name'];
    $p1roll = $_POST['p1roll'];
    $p1mail = $_POST['p1mail'];
    $p1phone = $_POST['p1phone'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $p2name = $_POST['p2name'];
    $p2roll = $_POST['p2roll'];
    

    if($p1roll==$p2roll){
        echo '<script type="text/javascript">alert("roll no same");</script>';
    }
    else{
        $s="SELECT * from candidates where (p1roll='$p1roll' or p2roll='$p1roll') and event='$event' " ;
        $s1="SELECT * from candidates where (p1roll='$p2roll' or p2roll='$p2roll') and event='$event'" ;
        $result=mysqli_query($conn,$s);
        $result1=mysqli_query($conn,$s1);
        $num=mysqli_num_rows($result);
        $num1=mysqli_num_rows($result1);
        if($num==1){
          echo '<script type="text/javascript">alert("the user have already register in this event");</script>';
        }
        else if($num1==1){
            echo '<script type="text/javascript">alert("the user have already register in this event");</script>';
        }  
        else{
            $insert_sql = "INSERT INTO candidates(event, p1name, p1roll, p1mail, p1phone, department, year, p2name, p2roll) VALUES('$event', '$p1name', '$p1roll', '$p1mail', '$p1phone', '$department', $year, '$p2name', '$p2roll')";
            $result=mysqli_query($conn,$insert_sql);
            echo '<script type="text/javascript">alert("the register in this event");</script>';
        }
    }
 }

?>