<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_islamic_payments_zakat">
  <section class="form_zakat">
  <!-- حسابة الفديه-->
     <!-- فورم حساب الفدية -->
     <form >
      <h2>احسب الفدية حسب حالتك</h2>

      <label>سبب الفدية:</label>
      <div class="type-options">
        <div class="option-box" data-type="مرض">مرض مزمن</div>
        <div class="option-box" data-type="حمل">حمل أو إرضاع</div>
        <div class="option-box" data-type="كبير_سن">كِبر سن وعدم قدرة على الصيام</div>
        <div class="option-box" data-type="تأخير">تأخير قضاء رمضان بدون عذر</div>
      </div>

      <input type="hidden" id="type" name="type">

      <label for="days">عدد الأيام غير المصامة</label>
      <input type="number" id="days" name="days" required min="1">

      <button type="submit">احسب</button>

      <input type="text" placeholder="ناتج الفدسه">
       </form>

  
  </section>

     

  <section >
  <!-- تعريف عام  -->
     <!-- معلومات حول الفدية -->
     <div class="info-box info-section">
      <h2>ما هي الفدية؟</h2>
      <p>
        الفدية هي مبلغ أو طعام يُقدَّم بدلاً من الصيام لمن لا يستطيع الصوم بعذر دائم أو شرعي. يجب إخراجها عن كل يوم يفطر فيه المسلم ولا يستطيع قضاؤه.
      </p>

      <h3>متى تجب الفدية؟</h3>
      <ul>
        <li>في حالة <strong>المرض المزمن</strong> الذي لا يُرجى شفاؤه.</li>
        <li>عند <strong>الرضاعة أو الحمل</strong> إذا خيف على الطفل.</li>
        <li>على <strong>كبار السن</strong> العاجزين عن الصيام.</li>
        <li>في حالة <strong>تأخير قضاء رمضان بدون عذر</strong> حتى يدخل رمضان التالي.</li>
      </ul>

      <h3>كيفية إخراج الفدية:</h3>
      <ul>
        <li>إطعام مسكين عن كل يوم.</li>
        <li>مقدار الإطعام: وجبة مشبعة أو نصف صاع (ما يعادل تقريبًا 1.5 كجم من الطعام).</li>
        <li>يمكن إخراجها نقدًا إذا دعت الحاجة (بحسب رأي بعض العلماء).</li>
      </ul>

      <h3>آيات وأحاديث:</h3>
      <ul>
        <li>قال الله تعالى: ﴿ وَعَلَى الَّذِينَ يُطِيقُونَهُ فِدْيَةٌ طَعَامُ مِسْكِينٍ ﴾ [البقرة: 184]</li>
        <li>قال ابن عباس: "ليُطْعِم عن كل يوم مسكينًا، إن شاء أعطاه مدًّا من قمح..."</li>
      </ul>

      <h3>فوائد إخراج الفدية:</h3>
      <ul>
        <li>رحمة بالضعفاء وأصحاب الأعذار.</li>
        <li>مساعدة للفقراء والمحتاجين.</li>
        <li>امتثال لأمر الله وتحقيق الطهارة القلبية.</li>
      </ul>
    </div>
  </section>
</main>
<?php require('views/parts/footer.php') ?>