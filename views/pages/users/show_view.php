<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>
<main class="main_user">
  <!-- عرض حساب المستخدم -->
  <section  class="user" id="show_user">
    <h1>البيانات الشخصية</h1>
    <div class="group">
      <form action="" method="">
      <div class="box_h">
      <label for="name"> الاسم :</label>
        <input id="name" type="text" name="name" placeholder="الإسم"></div>
        <div class="box_h">
        <label for="email">البريدالإلكتروني :</label>
        <input id="email" type="email" name="email" placeholder="البريدالإلكتروني"></div>
        <div class="box_h">
        <label for="phone_number">رقم الهاتف :</label>
        <input id="phone_number" type="text" name="phone_number" placeholder="رقم الهاتف">
        </div>
        <button class="btn_chang_password" id="btn_chang_password" name="btn_chang_password">تغيير كلمة المرور </button>
        </form>
        <div>
        <img src="" alt="">
        <button class="btn_image" id="btn_image" name="btn_image">إختياري</button>
        </div>
        
    <div class="links">
      <a class="donations" href="">إدارةالتبرعات</a>
      <a class="notifications" href="">إدارة الإشعارات</a>
      <a class="basket" href="">السلة<img src="" alt=""></a>
      
    </div>
    </div>

    



  </section>
</main>

<?php require('views/parts/footer.php') ?>