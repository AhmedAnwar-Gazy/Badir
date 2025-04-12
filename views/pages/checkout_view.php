<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main>

     <section class="card_islamic_endowments">
        

        <div class="imgs">
        <img id="product-image" src="views/media/images/<?= $donation['image'] ?>" alt="Product Image" width="200" height="200" >
        </div>
        <div>
            <h5 id="product-description"><?= $donation['description'] ?></h5>
           
        </div>
        <h5>الرقم  : </h5><h5 id="product_id"><?= $donation['product_id'] ?></h5>

        <section class="bar_actions">
            <div class="donation-box">
                <h2>مبلغ التبرع</h2>
                <div class="donation-min-box">

                   <H3 id="product-price"><?= htmlspecialchars($donation['cost']) ?></H3>
                </div>
                <div id="paypal-button-container"></div>
            </div>
        </section> 


  
    <div id="paypal-button-container"></div>
        <p id="result-message"></p>
        <div id="donation_page"><?= $donation['donation_page'] ?></div>
        <!-- PayPal JS SDK -->
        <script
            src="https://www.paypal.com/sdk/js?client-id=ARFXik-u5Tx7mk_2lkiE17Wy1piKgNQcErwnzhNdSseFH0msVVFjKr_LW3TJBd8Lf7pPy4Npveip1yvC&buyer-country=US&currency=USD&components=buttons&enable-funding=venmo,paylater,card"
            data-sdk-integration-source="developer-studio"></script>
        <script src="views/javascrept/checkout.js"></script>

</main>

<?php require('views/parts/footer.php') ?>