<?php 
    session_start();
    if(isset($_SESSION['login'])){
        header("location: official/dashboard.php");
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>University Portal Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="shortcut icon" href="./img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <section id="login_wrapper">
        <div class="content">
            <div class="text">University Portal</div>
            <span class='error'></span>
                <form id="login" onsubmit="return loginProcess();" method="POST">
                        <div class="field">
                            <input type="text" name="email" id="email" placeholder="Email" value="<?php 
                                if(isset($_COOKIE['email'])){
                                    echo $_COOKIE['email'];
                                }
                            ?>">
                            <span class="fas fa-user"></span>
                            <label>Email or Phone</label>
                        </div>
                        <div class="field">
                            <input type="password" name="password" id="password" placeholder="Password" value="<?php 
                                if(isset($_COOKIE['password'])){
                                    echo $_COOKIE['password'];
                                }
                            ?>">
                            <span class="fas fa-lock"></span>
                            <label>Password</label>
                        </div>
                        <div class="forgot-pass">
                            <input type="checkbox" name="check" id="check"> Remember me
                        </div>
                            <button type="submit">Log in</button>
                            <a href="home.php">Back Home</a>
                </form>
        </div>
</section>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="./js/script.js"></script>

</body>
</html>
