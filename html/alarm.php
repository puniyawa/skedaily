<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../css/alarm.css"/>
    <title>Clock App</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:#764469;"><i class="fa-solid fa-clock me-2"></i><b>SkeDaily</b> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
        <li class="nav-item">
          <a class="nav-link hover-link" href="../home.php?uid=<?php echo $_GET['uid']?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Alarm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-link" href="calendar.php?uid=<?php echo $_GET['uid']?>">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-link" href="todo-app.php?uid=<?php echo $_GET['uid']?>">To-do</a>
        </li>
      </ul>    
      <a class="nav-link me-4" href="../index.php">Sign-out</a>
    </div>
    </div>
  </nav>
  <div>
      <div class="user" value="<?php echo $_GET['uid']?>"></div>
      <div class="container">
        <div class="clock-wrapper">
          <div class="clock">
            <div class="hand hour-hand"></div>
            <div class="hand minute-hand"></div>
            <div class="hand second-hand"></div>
            <div class="center"></div>
            <div class="numbers"></div>
            <div class="lines"></div>
            <div class="am-pm">
              <div class="am active">AM</div>
              <div class="pm">PM</div>
            </div>
          </div>
        </div>

        <div class="alarms"></div>

      </div>
      <!-- Button trigger modal -->
      <div id="add-alarm-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span>+</span>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="100" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <div class="title">Add Alarm</div>
            </div>
            <div class="modal-body">
              <div class="name">
                <input type="text" class="name-alarm-modal" id="name" placeholder="Alarm Name"/>
              </div>
              <div class="time row mb-3 mt-3 text-center">
                <div class="hour col">
                  <div class="up-hour">+</div>
                  <div class="num-hour">12</div>
                  <div class="down-hour">-</div>
                </div>
                <div class="minute col">
                  <div class="up-minute">+</div>
                  <div class="num-minute">00</div>
                  <div class="down-minute">-</div>
                </div>
              </div>
              
              <div class="days d-flex justify-content-center">
                <div class="day" value="0">M</div>
                <div class="day" value="1">T</div>
                <div class="day" value="2">W</div>
                <div class="day" value="3">T</div>
                <div class="day" value="4">F</div>
                <div class="day" value="5">S</div>
                <div class="day" value="6">S</div>
              </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="loginBtn" data-bs-dismiss="modal">Close</button>
              <button type="button" class="loginBtn submitModal" data-bs-dismiss="modal">Save changes</button>
            </div>
          </div>
        </div>
      </div>
  
  </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../javascript/alarm.js"> </script>
</html>
