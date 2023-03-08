<?php 
    session_start();
    require_once "../../model/userModel.php";

    if(!isset($_SESSION['login'])){
        header("location: ../login.php");
    }

    $result=getUserById($_SESSION['id']);
    $name=$result['name'];
    $role=str_replace("_"," ",$result['user_role']);
    $image=$result['profile_image'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>University Portal-Dashboard</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</head>
<body onload="homeContent();">
    
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="../img/logo.jpg" alt="logo" onclick="home()">
            <label for="sidebar-toggle"><i class="fas fa-bars"></i></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li class="active" onclick="homeContent()">
                        <i class="fas fa-home-lg-alt"></i>
                        <span>Home</span>
                </li>
                <li onclick="showStudents()">
                        <i class="fas fa-users"></i>
                        <span>Students</span>
                </li>
                <li onclick="addStudent()">
                        <i class="fas fa-user"></i>
                        <span>Add Student</span>
                </li>
                <li onclick="ShowRequests()">
                        <i class="fas fa-box"></i>     
                        <span>Requests</span>
                </li>
                <li onclick="ShowRegistrations()">
                        <i class="fas fa-box"></i>     
                        <span>Registrations</span>
                </li>
                <li onclick="account()">
                        <i class="fas fa-user-cog"></i>
                        <span>Account</span>
                </li>
                <li onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                </li>
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <div class="headertext">
                <h2>Dashboard</h2>
            </div>
            <div class="search-wrapper">
                <i class="fas fa-search ti-search"></i>
                <input type="search" name="search" id="search" onkeyup="search()" placeholder="Search here" autocomplete="off">
            </div>
            
            <div class="social-icons" onclick="account()">
                <div class="image">
                    <img src="../img/<?="$image";?>" alt="user_image">
                </div>
                <div class="details">
                    <?="<h4>$name</h4>";?>
                    <span><?=$role?></span>
                </div>
            </div>
        </header>
        
        <main>        
            <section class="container-fluid" id="main-content">

            </section>
            
        </main>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>

</body>
</html>