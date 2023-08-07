<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <link rel="stylesheet" href="css/Style.css">
    <script src="JavaScript/JSscript.js"></script>  <!-- Set Menu height = Main height (option) -->
</head>
<body>
    <div id="header">
    <img src="Image/ah1.png">
    </div>
    <div id="banner">
            <div class="box-left">
                <h2>
                    <span>Smartphone</span>
                    <br>
                    <span>Laptop</span>
                </h2>
                <button>Buy now</button>
            </div>
            <div class="box-right">
                <img src="Image/Screenshot 2022-11-28 202226.png" alt="">
                <img src="Image/Screenshot 2022-11-28 202256.png" alt="">
                <img src="Image/Screenshot 2022-11-28 202318.png" alt="">
            </div>
            <div class="to-bottom">
                <a href="">
                    <img src="assets/to_bottom.png" alt="">
                </a>
            </div>
        </div>
    
    <div id="menu">
        <p class="menulist"><a class="menu" href=".">Home</a></p>
        <p class="menulist"><a class="menu" href="index.php?page=Introduction">Introduction</a></p>
        <p class="menulist"><a class="menu" href="index.php?page=Product">Product</a></p>
        <p class="menulist"><a class="menu" href="index.php?page=Contact">Contact</a></p>
        
        <?php
            if(isset($_SESSION['user'])){
                echo '<p class="menulist"><a class="menu" href="index.php?page=Cart">View Cart</a></p>';
                echo '<p class="menulist"><a class="menu" href="index.php?page=Profile">Profile</a></p>';
                echo '<p class="menulist"><a class="menu" href="Logout.php">Logout</a></p>';
            }
            else{
                echo '<p class="menulist"><a class="menu" href="index.php?page=Login">Login</a></p>';
                echo '<p class="menulist"><a class="menu" href="index.php?page=Registration">Registration</a></p>';
            }
        ?>
        
    </div>
    
    <div id="main">
        <?php
            if(isset($_GET['page'])){
                if($_GET['page'] === "Introduction")
                    require_once ("Introduction.html");
                else if($_GET['page'] === "Registration")
                    require_once ("Registration.php");
                else if($_GET['page'] === "Product")
                    require_once ("Product.php");
                else if($_GET['page'] === "ProductDetail")
                    require_once ("ProductDetail.php");
                else if($_GET['page'] === "Login")
                    require_once ("Login.php");
                else if($_GET['page'] === "Cart")
                    require_once ("Cart.php");
                else if($_GET['page'] === "Profile")
                    require_once ("Profile.php");
                else if($_GET['page'] === "ModifyProfile")
                    require_once ("ModifyProfile.php");
                else if($_GET['page'] === "Contact")
                    require_once ("Contact.php");
            }else{
                require_once ("Product.php");
            }
        ?>
    </div>
    <div id="comment">
        <h2>Comment</h2>
        <div id="comment-body">
            <div class="prev">
                <a href="#">
                    <img src="Image/prev.png" alt="">
                </a>
            </div>
            <ul id="list-comment">
                <li class="item">
                    <div class="avatar">
                        <img src="Image/avata1.jpg" alt="" width="50px" >
                    </div>
                    <div class="name">Trần Ngọc Sơn</div>

                    <div class="text">
                        <p>Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book.</p>
                    </div>
                </li>
                <li class="item">
                    <div class="avatar">
                        <img src="Image/avata2.jpg" alt="" width="50px">
                    </div>
                    <div class="name">Nguyễn Trần Vi</div>
                    <div class="text">
                        <p>Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book.</p>
                    </div>
                </li>
            </ul>
            <div class="next">
                <a href="#">
                    <img src="Image/next.png" alt="">
                </a>
            </div>
        </div>
    </div>
    
    <div id="footer">
        <div class="box">
            <div class="logo">
                <img src="assets/logo.png" alt="">
            </div>
            <p>Provide safe quality products for customers</p>
        </div>
        <div class="box">
            <h3>Content</h3>
            <ul class="quick-menu">
                <div class="item">
                    <a href="">Home</a>
                </div>
                <div class="item">
                    <a href="">Product</a>
                </div>
                <div class="item">
                    <a href="">Blog</a>
                </div>
                <div class="item">
                    <a href="">Contact</a>
                </div>
            </ul>
        </div>
        <div class="box">
            <h3>contact</h3>
            <form action="">
                <p>tranvankhai0944791397@gmail.com</p>
                <p>Phone number 0944791397</p>
            </form>
        </div>
    </div>
</div>
    <script src="JavaScript/Funtion.js"></script>

</body>
</html>