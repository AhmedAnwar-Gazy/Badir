<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

  <main class="main_contact">
    <div class="contact" >
            <!-- عرض الرسائل -->
            <h1>الشكاوي والاقتراحات</h1>

      <label for="complaints-section" class="section-label visually-hidden">الشكاوى والاقتراحات</label>

      <section id="complaints-section" class="form_contact">
         
            <div class="no3">

              <form action="/services/phpmailer/send-email" method="post">
                <label for="type">:النوع</label><br>
                <div class="group_type">
                  <select name="" id="" class="group_type" style="width: 100%; text-align:right;">
                      <?php foreach($contact_type as $type):?>
                        <option value="<?= $type['problem_type']?>"><?= $type['problem_type']?></option>
                        <?php endforeach; ?>
                  </select>
                
                   <!-- <input type="text"> -->
                </div>
                <label for="address">:العنوان</label>
                <input id="address" type="text" name="address">
                <label for="descripe_problem">:وصف المشكلة</label>
                <textarea name="descripe_problem"  id="descripe_problem"></textarea><br>
                <button class="button_send" id="button_send" type="submit" aria-label="ارسال">إرسال</button>
              </form>
            </div>
          

        

      </section>
      <!-- الاسئله الشائعه -->

      <h1>:الأسئلة الشائعة</h1>

      <label for="faq-section" class="section-label visually-hidden">الأسئلة الشائعة</label>

      <section id="faq-section" class="form_contact">

      <section calss="form_contact">
        <h1>:الأسئلة الشائعة</h1>

          <div class="questu_ions">
            <h3>كيف يمكنني تعديل مساهمتي؟</h3>
            <p>يمكنك تعديل مساهمتك من خلال صفحة التبرعات</p>
          </div>

      </section>
    </div>

  </main>
  <?php require('views/parts/footer.php') ?>