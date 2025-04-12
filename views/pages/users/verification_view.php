<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<main class="main_user MUV">
   التحقق من الحساب  
  <section class="user" id="show_user">
    <h1>verification</h1>

    <form action="/users_store" method="POST">
    <div>
      <label for="verification_code">أدخل كود التحقق:</label>
      <input type="number" id="" class="" required name="verification_code" minlength="6" maxlength="6" placeholder="أدخل كود التحقق" oninput="this.value = this.value.slice(0, 6)">
    </div>
    
    <div>
      <button type="submit" name="submit">إرسال </button>
    </div>
      
    </form>
    <div>
      <a href="/users_verification" >إعادة إرسال الكود </a>
    </div>
  </section>
<!-- 
  <form action="/users_store" method="POST">
    <div class="container">
      <label for="verification_code">أدخل كود التحقق:</label>
      <p>
        لقد أرسلنا إليك رمزاً مكوناً من ستة أرقام على البريد الإلكتروني<br />
        cool_guy@email.com، الرجاء إدخال الرمز أدناه لتأكيد عنوان بريدك الإلكتروني.
      </p>

      <div class="code-container">
        <input type="number" class="code" placeholder="0" min="0" max="9" required />
        <input type="number" class="code" placeholder="0" min="0" max="9" required />
        <input type="number" class="code" placeholder="0" min="0" max="9" required />
        <input type="number" class="code" placeholder="0" min="0" max="9" required />
        <input type="number" class="code" placeholder="0" min="0" max="9" required />
        <input type="number" class="code" placeholder="0" min="0" max="9" required />
      </div>

      <button type="submit" class="submitUV" name="submit">ارسال</button>
      <br />
    </div>
  </form>
  <div>
    <a href="/users_verification">إعادة إرسال الكود </a>
  </div>

  <script>
    const codes = document.querySelectorAll('.code');
    codes[0].focus();
    codes.forEach((code, idx) => {
      code.addEventListener('keydown', (e) => {
        if (e.key >= 0 && e.key <= 9) {
          code.value = '';
          setTimeout(() => {
            if (idx < codes.length - 1) {
              codes[idx + 1].focus();
            }
          }, 10);
        } else if (e.key === 'Backspace') {
          setTimeout(() => {
            if (idx > 0) {
              codes[idx - 1].focus();
            }
          }, 10);
        }
      });
    });
  </script> -->
</main>


<?php require('views/parts/footer.php') ?>