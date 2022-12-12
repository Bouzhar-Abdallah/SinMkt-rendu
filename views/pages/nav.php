    <?php 
    if(!isset($_SESSION)) 
    { 
        session_start();
        
    } 
    ?>
    <nav class="menu ">
        <div class="logo">
        <img class="brown" src="../images/logo/dark orange.png" alt="">
        <img class="orange" src="../images/logo/Orange.png" alt="">
        </div>
        <ul class="font-medium uppercase" class="titles">
            <div class="mini-menu" id="mini-menu">
                <figure class="line"></figure>
                <figure class="line"></figure>
                <figure class="line"></figure>
            </div>
            <li class="" ><a href="home.php">home</a></li>
            <li><a href="arrivals.php">New Arrival</a></li>
            <li><a href="features.php">Features</a></li>
            <li><a href="BLOG.php">Blog</a></li>
            <li><a href="test2.php" id="open-form-container">contact</a></li>
            <!-- <li><a href="form.php">Contact</a></li> -->
        </ul>
        <div class="icons">
            <i class="fa-solid fa-magnifying-glass" id="test"></i>
            
            
                    <?php 
                    if(isset($_SESSION["login"])){
                        if($_SESSION["login"] === 'admin') 
                        {
                            echo '<a href="index.php"><i class="fa-solid fa-gear"></i></a>
                            
                            <a href="../../index.php?a=logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>';
                        }
                        }
                        else{
                            echo '<a href="'.$_SERVER["PHP_SELF"].'?a=log"><i class="fa-solid fa-user"></i></a>';
                        }
                        
                        
                    ?>
            </a>
        </div>
    </nav>
    <ul class="titles-mobile" id="titles-mobile">
       
        <li><a href="index.php">Home</a></li>
        <li><a href="arrivals.php">New Arrival</a></li>
        <li><a href="features.php">Features</a></li>
        <li><a href="BLOG.php">Blog</a></li>
        <li><a href="#" >Contact</a></li>
        <!-- <li><a href="form.html">Contact</a></li> -->
    </ul>

<?php 
if(isset($_GET['a'])){
    if ($_GET['a'] === 'log') {
        require_once 'loginForm.php';
    }
    
}

?>