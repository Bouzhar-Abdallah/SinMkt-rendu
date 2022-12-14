    <?php 
    if(!isset($_SESSION)) 
    { 
        session_start();
        
    } 
    ?>
    <nav class="h-14 flex w-full fixed z-50 justify-between items-center bg-worange drop-shadow-md">
        <!-- humburger -->
        <button class="block md:hidden py-3 px-4 mx-2 hover:bg-wgray rounded group">
            <div class="w-5 h-1 bg-dorange mb-1"></div>
            <div class="w-5 h-1 bg-dorange mb-1"></div>
            <div class="w-5 h-1 bg-dorange"></div>
            <div class="absolute top-0 -left-full h-screen w-4/12 bg-worange border opacity-0 group-focus:left-0 group-focus:opacity-100 transition-all duration-500">
                <ul class="flex flex-col items-center w-full cursor-pointer pt-10">
                    
                    <a class="w-full" href="home.php">         <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6 w-full" >home</li></a>
                    <a class="w-full href="newArrivals.php">  <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6 w-full" >New Arrival</li></a>
                    <a class="w-full href="features.php">     <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6 w-full" >Features</li></a>
                    <a class="w-full href="BLOG.php">         <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6 w-full" >Blog</li></a>
                    <a class="w-full href="test2.php">        <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6 w-full" >contact</li></a>
                </ul>
            </div>
            
        </button>
        <!-- humburger -->
        <div class="">
        <img class="h-14" src="../images/logo/dark orange.png" alt="">
        <!-- <img class="orange" src="../images/logo/Orange.png" alt=""> -->
        </div>
        <ul class="hidden md:flex space-x-2 font-medium uppercase h-full" >
            <!-- <div class="" id="mini-menu">
                <figure class="line"></figure>
                <figure class="line"></figure>
                <figure class="line"></figure>
            </div> -->
            <a href="home.php">         <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6" >home</li></a>
            <a href="newArrivals.php">  <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6" >New Arrival</li></a>
            <a href="features.php">     <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6" >Features</li></a>
            <a href="BLOG.php">         <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6" >Blog</li></a>
            <a href="test2.php">        <li class="text-dorange drop-shadow-md hover:bg-wgray py-4 px-6" >contact</li></a>
            <!-- <li><a href="form.php">Contact</a></li> -->
        </ul>
        <div class="w-20 flex items-center justify-end px-3 space-x-2">
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
    

<?php 
if(isset($_GET['a'])){
    if ($_GET['a'] === 'log') {
        require_once 'loginForm.php';
    }
    
}

?>