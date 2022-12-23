<?php 
$choice = basename(__FILE__, '.php');

include_once "../../classes/Control/Control.class.php";
$control = new Control();
$itemsList = $control->listItems($choice);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a26b51a86d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/features.css">
    <!-- <link rel="stylesheet" href="../assets/features.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="keywords" content="sinmkt Le n° 1 du mobilier et de la décoration au Maroc. Meubles, décoration, ameublement, chaise, table, lit, chambre à coucher, fauteuil, salon, canapé.">
			<meta name="description" content="Bienvenue chez sinmkt. Découvrez des meubles abordables et des idées d’aménagement intérieur pour des logements et portefeuilles de toutes tailles. Faites vos achats en ligne ou trouvez un magasin près de chez vous.">
    </head>
</head>
<body>
   
<?php require_once 'nav.php' ?>
    <div class="w-full pt-24 px-4 h-full bg-worange">
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    <?php foreach($itemsList as $key=>$value){ ?>
        <div class="mx-auto p-2 bg-white shadow-md hover:bg-norange">
            <div class="">
        <?php echo '<img src="data:image/jpeg;base64,'. base64_encode($value["image"]) .'" />'; ?>
            </div>
            <div class=" p-2">
                <div class="flex justify-between">
                    <div class=""><p>reviews</p></div>
                    <div class="">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    
                </div>
                <h3 class=""><?php echo $value["nom"]; ?></h3>
                <h3 class=""><?php echo $value["prix"]; ?> $</h3>
            </div>
            </div>
            
        <?php } ?>   
        </div>
        </div>
        
       
    </div class=""> 
    
    <div class="clients">
        <figure><img src="../images/clients/c1.png" alt="" srcset=""></figure>
        <figure><img src="../images/clients/c2.png" alt="" srcset=""></figure>
        <figure><img src="../images/clients/c3.png" alt="" srcset=""></figure>
        <figure><img src="../images/clients/c4.png" alt="" srcset=""></figure>
        <figure><img src="../images/clients/c5.png" alt="" srcset=""></figure>
    </div>

    </div> <!-- popular products end -->
    <div class="pseudo-footer">
        <div class="information">
            <h3>information</h3>
            <h5>About us</h5>
            <h5>Contact Us</h5>
            <h5>News</h5>
            <h5>Store</h5>
            
        </div>
        <div class="collections">
            <h3>Collections</h3>
            <h5>Royal Cloth Sofa</h5>
            <h5>Accent chair</h5>
            <h5>Bed</h5>
            <h5>Hanging Lamp</h5>
            <h5>Wooden Chair</h5>
        </div>
        <div class="My accounts">
            <h3>My accounts</h3>
            <h5>My account</h5>
            <h5>Wishlist</h5>
            <h5>Community</h5>
            <h5>Order History</h5>
            <h5>My Cart</h5>
        </div>
        <div class="Newsletter">
            <h3>Newsletter</h3>
            <h5>Subscribe to get latest news,update and information.</h5>
            <div class="email-here"></div>
        </div>
    </div>
    
    <footer>
        <div class="div-icons">
            <i class='bx bxl-facebook'></i>
            <i class='bx bxl-instagram'></i>
            <i class='bx bxl-linkedin' ></i>
            <i class='bx bxl-pinterest' ></i>
        </div>
        <p>&copy Copyright. Designed And Developed By Abdallah</p>
    </footer>

</body>
</html>
<script src="./script.js"></script>