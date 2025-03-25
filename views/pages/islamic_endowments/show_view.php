<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_show_ch">
            <section class="card_islamic_endowments">
            <!-- <h3 style="color: var(--font-color-bh);
        font-size: var(--font-size-xl);">التفاصيل</h3> -->
            <div class="imgs">
            <img src="views/media/images/<?php  echo $endowments['0']['photo'] ?? "11.png" ?>" alt=" " loading="lazy"></div>
            <p class="localshin">المنطقة <?php  echo $endowments['0']['directorate'] ?></p>
            <div>
            <h5><?php  echo $endowments['0']['name'] ?></h5>
            <p class="details_p"><?php  echo $endowments['0']['short_description'] ?></p>
        </div>
            <h5>رقم الحملة : <?php  echo $endowments['0']['campaign_id'] ?> </h5>
            <div class="progress-bar">
                <div class="progress" style="width:<?= htmlspecialchars(($endowments['0']['collected_money']/$endowments['0']['cost'])*100) ?>% " ></div>
              </div>
              <div class="donation-details">
                
                  <p><strong style="display: inline;">SR <?= htmlspecialchars($endowments['0']['donate_cost']) ?>/</strong><?= htmlspecialchars($endowments['0']['cost']) ?></p>
  
              </div>  
              <section class="bar_actions">
<div class="donation-box">
        <h2>مبلغ التبرع</h2>
        <div class="donation-min-box">
        <input type="number" id="customAmount" placeholder="قيمة المبلغ" oninput="updateDonateButton()">
        <a class="icon_cart" id="icon_nav_search" href=""><img class="icon_img" src="views/media/images/cart.png" alt=""></a>
        </div>
        <button id="donate">تبرع الآن</button>
    </div>
</section>





</section>
<!-- باقي البينات -->
<section class="card_islamic_endowments" id="card_islamic_endowments">


<div class="details_show_ch">
                <h5>تفاصيل تكاليف العمليات</h5>
                <p>الفحوصات الطبية</p>
                <p>العمليات الجراحية</p>
                <p>الادوية</p>
        </div>

        <div class="card_insid" id="card_insid">
        <div>
        <h6>نوع المشروع</h6>
        <p>علاجي</p>
        <h6>المبلغ المستهدف</h6>
        <p> ر.س</p>

        </div>
        <div>
        <h6>عدد المستفيدين</h6>
        <p>100 محتاج</p>
        <h6>الوقت المتبقي</h6>
        <p>يوم</p>
        </div>
        <div>
        <h6>المبلغ الذي تم جمعة</h6>
        <p>  <?php  echo $endowments['0']['donate_cost'] ?> ر.س</p>
        <h6>عدد المتبرعين</h6>
        <p>8000</p>
        </div>
    </div>
    <div class="card_insid" id="card_insid2">
    <h5>مراحل المشروع</h5>

    <p>المرحلة الاولى :  </p>
    <p>المرحلة الثانية : </p>
    <p>المرحلة الثالثة :</p>
    </div>
    <div class="time">
        <p> تاريخ البدء  : </p>
        <p>تاريخ الانتهاء :  </p>
        </div>
    <div class="news" >
    <h5>اخبار المشروع</h5>
        <div><p>تم جمع <?= htmlspecialchars(($endowments['0']['donate_cost']/$endowments['0']['cost'])*100) ?>% من التبرعات</p></div>
        <!-- <div>30%<p>تم الانتهاء من المرحله الاولى </p></div> -->
    </div>






</section>

</main>

<?php require('views/parts/footer.php') ?>