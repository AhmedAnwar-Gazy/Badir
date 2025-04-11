<!-- شريط التنقل بين الصفحات -->
<nav>
    <!-- <h1>navgation</h1> -->
    <div class="main_nav">
<!-- <<<<<<< HEAD
        <div class="logo-menu">
        <a href="" onclick="togglemenu()"><img class="menu" src="views/media/images/list.png" alt=""></a>
            <a href="/"> <img class="logo_image" src="views/media/images/bader.png" alt=""></a>
        </div>

        <ul class="nav-links" id="menulist">
            <a class="close" id="close" href=""><img width="30px" height="30px" src="views/media/images/close.png" alt=""></a>
            <li><a href="/">الرئيسية</a></li>
            <li><a href="/islamic_endowments_index">الأوقاف</a></li>
            <li><a href="/charity_projects_index">المشاريع</a></li>
            <li><a href="/charity_campaigns_index">الحملات الخيرية</a></li>
======= -->
        <div class="logo-menu">
            <a class="menu" onclick="openMenu()"><img src="views/media/images/list.png" alt=""></a>
            <a class="close" onclick="closeMenu()"><img src="views/media/images/close.png" alt=""></a>

            <a href="/"> <img class="logo_image" src="views/media/images/badir_logo.jpg"></a>

        </div>

        <ul id="menulist" class="nav-links">
            <li><div class="box_link"><a href="/">الرئيسية</a></div></li>
            <li><div class="box_link"><a href="/islamic_endowments_index">الأوقاف</a></div></li>
            <li><div class="box_link"><a href="/charity_projects_index">المشاريع</a></div></li>
            <li><div class="box_link"><a href="/charity_campaigns_index">الحملات الخيرية</a></div></li>
            <li><div class="box_link"><a href="/islamic_payments_index">المصارف الاسلامية</a></div></li>
            <li><div class="box_link"><a href="/notifications_index">الإشعارات</a></div></li>
            <li><div class="box_link"><a href="/contact">اتصل بنا</a></div></li>
<!-- >>>>>>> ef135f2029314f088deaacb8c2fb8c484fedb803 -->
            <!-- <li><a href="#">الماهمات</a></li> -->
            <!-- <li><a href="#">الاخبار</a></li> -->
            <!-- <li><a href="#">التقييمات</a></li> -->
            <!-- <li><a href="/contact">الدعم الفني</a></li> -->


        </ul>
        <div class="all_icon_nav">
            <!-- <a href=""><img src="" alt=""></a> -->

            <?php if ($_SESSION['user'] ?? false) : ?>
            <a class="icon_nav_profile" id="icon_nav_profile" href="/users_show"><img class="icon_img" src="views/media/images/user.png" alt=""></a>
            <a class="icon_nav_search" id="icon_nav_search" href="/cart"><img class="icon_img" src="views/media/images/cart.png" alt=""></a>
            <form action="/sessions_destroy" class="but_sgin" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit">تسجيل الخروج</button>
            </form>
            <?php else : ?>
                <a class="but_sgin" href="/users_create"> انشاء حساب </a>
                <a class="but_login " href="/users_index"> تسجيل الدخول </a>
            <?php endif ?>


        </div>

    </div>
</nav>