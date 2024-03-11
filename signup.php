<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style="background-image: url(images/bg-index.png); background-size: 1240px, auto; background-repeat: no-repeat; background-attachment: fixed; background-position: center; ">
    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            echo 
            '<div class="alert alert-warning alert-dismissible fade show m-3" role="alert" style="margin-top: 20px;">
                '.$error.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
    <div class="container">    
        <div class="d-flex flex-row justify-content-center">
            <div class="col-10 col-md-4 p-3 rounded shadow align-self-center transparent-bg" style="
                background-color: rgba(255, 255, 255, 0.75); 
                backdrop-filter: blur(6px);
                padding: 25px;
                position: absolute;top: 45%;-ms-transform: translateY(-50%);transform: translateY(-50%);">
                <form action="accounts-function/signup_func.php" method="post">
                    <h1 class="text-center mt-3 mb-5"><b>Sign-up</b></h1>
                    <div class="m-3">
                        <input type="text" style="background-color: rgba(255, 255, 255, 0);" name="username" placeholder="Create your Username" class="form-control" requires><br>
                        <input type="password" style="background-color: rgba(255, 255, 255, 0);" name="password" placeholder="Password" class="form-control" required><br>
                    
                        <input type="password" style="background-color: rgba(255, 255, 255, 0);" name="retypePassword" placeholder="Re-type your Password" class="form-control" required><br>
                        <div class="d-flex justify-content-center">
                            <button class="loginBtn" type="submit" style="border-radius: 45px;">Create an Account</button>
                        </div>
                        
                    </div>                
                </form>
            </div>   
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>