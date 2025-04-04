<?php


 require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>
<main class="main_show_ch">
    <section class="card_islamic_endowments">
        <div class="imgs">
            <img src="views/media/images/<?php echo $IslamicPayments['0']['photo'] ?? "default.png"; ?>" alt="Payment Photo" loading="lazy">
        </div>
        <p class="localshin">المنطقة: صنعاء</p>
        <div>
            <h5><?php echo $IslamicPayments['0']['name']; ?></h5>
            <p class="details_p"><?php echo $IslamicPayments['0']['short_description']; ?></p>
        </div>
        <h5>رقم العملية: <?php echo $IslamicPayments['0']['islamic_payment_id']; ?></h5>
        <div class="progress-bar">
            <div class="progress" style="width:<?= htmlspecialchars(($IslamicPayments['0']['paid_cost'] / $IslamicPayments['0']['cost']) * 100); ?>%;"></div>
        </div>
        <div class="donation-details">
            <p><strong style="display: inline;">SR <?= htmlspecialchars($IslamicPayments['0']['paid_cost']); ?>/</strong><?= htmlspecialchars($IslamicPayments['0']['cost']); ?></p>
        </div>
        <section class="bar_actions">
            <div class="donation-box">
                <h2>مبلغ المساهمة</h2>
                <div class="donation-min-box">
                    <input type="number" id="customAmount" placeholder="قيمة المساهمة" oninput="updateDonateButton()">
                    <a class="icon_cart" id="icon_nav_search" href=""><img class="icon_img" src="views/media/images/cart.png" alt=""></a>
                </div>
                <button id="donate">ساهم الآن</button>
            </div>
        </section>
    </section>

    <section class="card_islamic_endowments" id="card_islamic_endowments">
        <div class="details_show_ch">
            <h5>تفاصيل المدفوعات</h5>
            <p>نوع المدفوعات: <?php echo $IslamicPayments['0']['type']; ?></p>
            <p>عدد المدفوعات: <?php echo $IslamicPayments['0']['count']; ?></p>
        </div>

        <div class="card_insid" id="card_insid">
            <div>
                <h6>القيمة الإجمالية</h6>
                <p><?php echo $IslamicPayments['0']['cost']; ?> ر.س</p>
                <h6>المبلغ الموزع</h6>
                <p><?php echo $IslamicPayments['0']['paid_cost']; ?> ر.س</p>
            </div>
            <div>
                <h6>تاريخ الدفع</h6>
                <p><?php echo $IslamicPayments['0']['payment_date']; ?></p>
                <h6>المستفيد</h6>
                <p>المستخدم رقم <?php echo $IslamicPayments['0']['user_id']; ?></p>
            </div>
        </div>

        <div class="time">
            <p>تاريخ الإضافة: <?php echo $IslamicPayments['0']['payment_date']; ?></p>
        </div>
    </section>
</main>

<?php require('views/parts/footer.php') ?>