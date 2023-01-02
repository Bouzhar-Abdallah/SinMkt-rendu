

    <link rel="stylesheet" href="<?= ROOT ?>assets/features.css">
    <link rel="stylesheet" href="<?= ROOT ?>assets/style.css">
    

    <section>
    <?php foreach($data as $key=>$value){ ?>
        <div class="feature">
        <?php echo '<img src="data:image/jpeg;base64,'. base64_encode($value["image"]) .'" />'; ?>
            <div class="info">
                <div class="rating">
                    <div class="stars">
                        
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="reviews"><p>reviews</p></div>
                </div>
                <h3 class="name"><?php echo $value["nom"]; ?></h3>
                <h3 class="price"><?php echo $value["prix"]; ?> $</h3>
            </div>
        </div>
        <?php } ?>   

        
       
    </section> 
    
    <div class="clients">
        <figure><img src="<?= ROOT ?>assets/images/clients/c1.png" alt="" srcset=""></figure>
        <figure><img src="<?= ROOT ?>assets/images/clients/c2.png" alt="" srcset=""></figure>
        <figure><img src="<?= ROOT ?>assets/images/clients/c3.png" alt="" srcset=""></figure>
        <figure><img src="<?= ROOT ?>assets/images/clients/c4.png" alt="" srcset=""></figure>
        <figure><img src="<?= ROOT ?>assets/images/clients/c5.png" alt="" srcset=""></figure>
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

