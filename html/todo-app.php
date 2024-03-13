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
    <link rel="stylesheet" href="../css/todo-app.css" />
    <title>Todo App</title>
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
            <a class="nav-link hover-link" href="alarm.php?uid=<?php echo $_GET['uid']?>">Alarm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-link" href="calendar.php?uid=<?php echo $_GET['uid']?>">Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">To-do</a>
          </li>
        </ul>    
        <a class="nav-link me-4" href="../index.php">Sign-out</a>
      </div>
      </div>
    </nav>
    <div class="container">
      <h1 class="heading">Todo App</h1>
      <div class="tasks-wrapper">
        <div class="delete">
          <ion-icon name="trash-outline"></ion-icon>
        </div>
      </div>
      <div class="add-wrapper">
        <form action="" id="add-task-form">
          <div class="details">
            <input type="text" id="title" placeholder="Task name here" />
            <textarea
              id="description"
              placeholder="Task description here"
            ></textarea>
          </div>
          <div class="footer">
            <div class="info">
              <label for="date">
                <ion-icon name="calendar-outline"></ion-icon>
                <input type="date" name="" id="date" />
                <span>due date</span>
              </label>
              <label for="time">
                <ion-icon name="time-outline"></ion-icon>
                <input type="time" name="" id="time" />
                <span>due time</span>
              </label>
            </div>
            <div class="options">
              <button type="button" class="btn clear">clear</button>
              <button class="btn add">add task</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../javascript/todo-app.js"></script>
  </body>
</html>