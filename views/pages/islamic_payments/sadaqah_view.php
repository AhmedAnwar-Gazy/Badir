<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_islamic_payments_zakat">
  <section class="form_zakat">
  <!-- حسابة  الصدقه-->
  <form >
      <h2>حاسبة الصدقة</h2>
      
      <label for="income">الدخل الشهري (بالريال)</label>
      <input type="number" id="income" name="income" required>

      <label for="percent">نسبة الصدقة (%)</label>
      <input type="number" id="percent" name="percent" value="2.5" required>

      <button type="submit">احسب</button>

     <input type="text" placeholder="ناتج الصدقة">
    </form>
  </section>



  <section >
  <!-- تعريف عام  -->
  <form>
      <h2>عن الصدقة</h2>

      <p>
        الصدقة من أعظم أبواب الخير، بها يُمحى الذنب، وتُزكى النفس، ويُرفع البلاء.
      </p>

      <h3>فوائد الصدقة:</h3>
      <ul>
        <li>تطهر المال والنفس.</li>
        <li>تدفع البلاء وتفتح أبواب الخير.</li>
        <li>سبب في الشفاء.</li>
        <li>تزيد البركة في الرزق والعمر.</li>
      </ul>

      <h3>آيات قرآنية:</h3>
      <ul>
        <li>﴿ مَنْ ذَا الَّذِي يُقْرِضُ اللَّهَ قَرْضًا حَسَنًا ﴾ [البقرة: 245]</li>
        <li>﴿ خُذْ مِنْ أَمْوَالِهِمْ صَدَقَةً تُطَهِّرُهُمْ وَتُزَكِّيهِمْ بِهَا ﴾ [التوبة: 103]</li>
      </ul>

      <h3>أحاديث نبوية:</h3>
      <ul>
        <li>"الصدقة تطفئ الخطيئة كما يطفئ الماء النار" - رواه الترمذي</li>
        <li>"ما نقص مال من صدقة" - رواه مسلم</li>
      </ul>

      <h3>شروط الصدقة:</h3>
      <ul>
        <li>النية الخالصة لله.</li>
        <li>أن تكون من مال حلال.</li>
        <li>عدم المنّ أو الرياء.</li>
      </ul>
    </form>

  </section>
</main>
<?php require('views/parts/footer.php') ?>