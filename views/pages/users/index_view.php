<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>

<main class="main_user">
  <section class="user" id="form_login">
    <h1>تسجيل الدخول</h1>
      <form class="group" action="" method="">
      <div class="box_h">
        <label for="email_or_name"> : ادخل اسمك او البريدالإلكتروني</label>
        <input id="email_or_name" type="text" name="email_log_in" placeholder="الاسم أوالبريدالالكتروني"></div>
        <div class="box_h">
        <label for="password">ادخل كلمة المرور : </label>
        <input id="password" type="password" name="password" placeholder="كلمة المرور"></div>
        <button class="btn_log_in" id="btn_log_in" >تسجيل</button>
        <div class="link_forgot_password_link_log_in">
        <a class="link_forgot_password" id="link_forgot_password" href="">هل نسيت كلمةالمرور ؟</a>
        <a class="link_log_in" id="link_log_in" href="">انشاءحساب</a>
        </div>
      </form>
    
  
  </section>
</main>
<?php require('views/parts/footer.php') ?>