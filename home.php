<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Homepage</title>
</head>
<body style="background-image: url(images/bg-index.png); background-size: 1240px, auto; background-repeat: no-repeat;  background-position: center; ">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:#764469;"><i class="fa-solid fa-clock me-2"></i><b>SkeDaily</b> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-link" href="html/alarm.php?uid=<?php echo $_GET['uid']?>">Alarm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-link" href="html/calendar.php?uid=<?php echo $_GET['uid']?>">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-link" href="html/todo-app.php?uid=<?php echo $_GET['uid']?>">To-do</a>
        </li>
        <li class="nav-item">
          
        </li>
      </ul>    
      <a class="nav-link me-4" href="index.php">Sign-out</a>
    </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-11 col-md-5 mt-5 m-3 shadow intro-all rounded">
          <h1 class="text-truncate greetings-text">
            <b>Welcome</b><br>
            <?php echo $_GET['uid']?>
          </h1>
          <br>
         <p class="rounded shadow p-3 intro">SkeDaily aims to help students manage their time, schedule, and workload. One of its features is that it allows user to input their academic tasks and the deadline. When the task's deadline is near, the web application will notify the user of the task two days prior to the deadline. Its other feature lets the user input their schedule in the app's calendar, allowing the students to see their tasks efficiently and their free time quickly. It also has a part where students can create a list of to-do things for their tasks.</p>
      <div class="d-flex justify-content-center" style="flex-wrap: wrap;">
        <a class="nav-link mb-sm-0 mb-3" href="html/alarm.php?uid=<?php echo $_GET['uid']?>"> 
          <button class="shadow loginBtn" style="border-radius: 45px;"> Alarm</button>
        </a>
        <a class="nav-link mb-sm-0 mb-3" href="html/calendar.php?uid=<?php echo $_GET['uid']?>"> 
          <button class="shadow loginBtn ms-3" style="border-radius: 45px;">Calendar</button>
        </a>
        <a class="nav-link" href="html/todo-app.php?uid=<?php echo $_GET['uid']?>"> 
          <button class="shadow loginBtn ms-3" style="border-radius: 45px;">To-do</button>
        </a>
      </div>
       
      </div>
      <div class="col-11 col-md mt-5 m-3">
        <div class="row justify-content-center">
            <img class="p-2 clock-image" src="images/clock.png" alt="">   
        </div>  
      </div> 
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>