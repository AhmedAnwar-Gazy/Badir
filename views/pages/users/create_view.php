<?php
session_start();

if (isset($_SESSION['ban_time']) && $_SESSION['ban_time'] > time()) {
  header("Location: /user_blocked_view");
  exit();
  // if the user is banned, redirect to the blocked view
}
require('views/parts/head.php');
require('views/parts/navgtion.php');
?>

<main class="main_user MUC">

  <!-- انشاء حساب جديد -->
  <section class="user" >

    <!-- <div class="modal-content"> -->
      <h1>تسجيل مستخدم جديد</h1>
      <form class="group" id="register-user-form" action="/users_verification" method="post" enctype="multipart/form-data">
        <div class="form-group box_h">
          <label for="username">اسم المستخدم:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group box_h">
          <label for="password">كلمة المرور:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group box_h">
          <label for="email">البريد الإلكتروني:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group box_h">
          <label for="type">نوع المستخدم:</label>
          <select id="type" name="type">
            <option value="normal">عادي</option>
            <option value="admin">مسؤول</option>
            <option value="manager">مدير</option>
          </select>
        </div>
        <div class="form-group box_h">
          <label for="country">الدولة:</label>
          <input type="text" id="country" name="country" required>
        </div>
        <div class="form-group box_h">
          <label for="city">المدينة:</label>
          <input type="text" id="city" name="city" required>
        </div>
        <div class="form-group box_h">
          <label for="street">الشارع:</label>
          <input type="text" id="street" name="street" required>
        </div>
        <div class="form-group box_h">
          <label for="phone">رقم الهاتف:</label>
          <input type="text" id="phone" name="phone" required>
        </div>
        <div class="form-group box_h">
          <label for="photo">صورة المستخدم:</label>
          <input type="file" id="photo" name="photo" accept="image/*">
        </div>
        <div class="form-group box_h">
          <label for="notifications">استقبال الإشعارات:</label>
          <input type="checkbox" id="notifications" name="notifications" checked>
        </div>
        <div class="form-group box_h">
          <button type="submit" name="submit" aria-label="تسجيل مستخدم">تسجيل مستخدم</button>
        </div>
      </form>
    <!-- </div> -->

  </section>
</main>
<?php require('views/parts/footer.php') ?>