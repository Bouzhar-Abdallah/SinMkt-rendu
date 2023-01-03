<?php 
 if(!isset($_SESSION)) 
 { 
     session_start();
     if ($_SESSION["login"] !== 'admin') {
        header('Location: home.php');
    }
 } 
 include_once "../../classes/Control/Control.class.php";
 $control = new Control();
 $itemsList = $control->listItems('features');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a26b51a86d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/style.css">
    <!-- Bootstrap CSS -->
<!--     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 -->  </head>
  <body>
    <?php require_once 'nav.php' ?>
 
<div class="flex fixed top-0 pt-14 h-screen  w-full bg-worange">
<div class="sticky top-0 w-64 py-4 h-full text-dgray shadow-md bg-white">
        
        <ul >
            <li class="relative px-6 py-3 hover:bg-worange">
                <a href="index.php/?c=newArrivals&a=show" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 ">
                    <img src="../icons/arrivals.svg" alt="" class="w-5 h-5">
                    <span class="ml-4">new arrivals</span>
                </a>
            </li>
            <li class="relative px-6 py-3 hover:bg-worange ">
                <a href="index.php/?c=features&a=show" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 ">
                    <img src="../icons/featured.svg" alt="" class="w-5 h-5">
                    <span class="ml-4">Features</span>
                </a>
            </li>
            <li class="relative px-6 py-3 bg-norange">
                <a href="index.php/?c=blog&a=show" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 ">
                    <img src="../icons/blog.svg" alt="" class="w-5 h-5">
                    <span class="ml-4">Blog</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- left bar end -->
    <div class=" w-full h-full overflow-scroll overflow-y-auto">
        <div class="container w-full px-6 mx-auto grid">
            <h1 class="my-6 text-2xl capitalize font-semibold text-gray-700 ">
                <?php echo basename(__FILE__, 'a.php')?> dashboard
            </h1>
            <div class="hidden gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                    <div class="p-3 mr-4 bg-worange rounded-full dark:text-orange-100 ">
                        <img class="w-5 h-5" src="../icons/home.svg" alt="" srcset="">
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 ">
                            test 
                        </p>
                        <p class="text-lg font-semibold text-gray-700 ">
                        test
                        </p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-white rounded-lg shadow-md ">
                    <div class="p-3 mr-4 bg-worange rounded-full dark:text-orange-100 ">
                        <img class="w-5 h-5" src="../icons/home.svg" alt="" srcset="">
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 ">
                            test 
                        </p>
                        <p class="text-lg font-semibold text-gray-700 ">
                        test
                        </p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-white rounded-lg shadow-md ">
                    <div class="p-3 mr-4 bg-worange rounded-full dark:text-orange-100 ">
                        <img class="w-5 h-5" src="../icons/home.svg" alt="" srcset="">
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 ">
                            test 
                        </p>
                        <p class="text-lg font-semibold text-gray-700 ">
                        test
                        </p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-white rounded-lg shadow-md ">
                    <div class="p-3 mr-4 bg-worange rounded-full dark:text-orange-100 ">
                        <img class="w-5 h-5" src="../icons/home.svg" alt="" srcset="">
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 ">
                            test 
                        </p>
                        <p class="text-lg font-semibold text-gray-700 ">
                        test
                        </p>
                    </div>
                </div>
                
            </div>


            <!-- table -->
            <div class="w-full overflow-hidden rounded-lg shadow-md">
                <div class="w-full overflow-x-auto">
                    <table class="w-full table-fixed whitespace-no-wrap ">
                        <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-black uppercase border-b  bg-wgray">
                            <th class="px-4 py-3 w-60">produit</th>
                            <th class="px-4 py-3 w-32">prix</th>
                            <th class="px-4 py-3 w-32">Qte en stock</th>
                            <th class="px-4 py-3 ">Description</th>
                            <th class="px-4 py-3 w-32">options</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y ">
                            
                            <?php 
                            if (isset($_GET["a"])) {
                                if ($_GET["a"] === 'newProductLine') {
                                    require_once  "newProductLine.php";

                                }
                            }
                            ?>
                            <?php foreach($itemsList as $key=>$value){ ?>
                            <tr class="text-dgray">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-12 h-12 mr-3 rounded-full md:block">
                                            <!-- <img src="../images/collection/arrivals1.png" alt="" srcset=""> -->
                                            
                                            <?php echo '<img src="data:image/jpeg;base64,'. base64_encode($value["image"]) .'" />'; ?>
                                        </div>
                                        <div >
                                            <p class="font-semibold"><?php echo $value["nom"] ?></p>
                                            <p class="text-xs text-ngray "><?php echo $value["categorie"] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3"><?php echo $value["prix"] ?> $</td>
                                <td class="px-4 py-3"><?php echo $value["quantite"] ?></td>
                                <td class="px-4 py-3 h-20"><?php echo $value["description"] ?></td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <div class=" w-6 h-6  rounded-full md:block">
                                            <a href="<?php echo $_SERVER["PHP_SELF"] ?>?a=newProductLine">
                                                <img src="../icons/add2.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class=" w-6 h-6  rounded-full md:block">
                                            <img src="../icons/edit2.svg" alt="" srcset="">
                                        </div>
                                        <div class=" w-6 h-6   rounded-full md:block">
                                            <img src="../icons/delete2.svg" alt="" srcset="">
                                        </div>
                                        
                                    </div></td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

