<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>




<!-- نموذج تقديم الطلب -->


<main class="main_create_chatity">
    <div class="div_tbr3">
        <section class="donation-form">

 
            <div class="modal-content">
    <h2>إضافة حملة جديدة</h2>
    <form id="add-campaign-form" action="/charity_campaigns_store" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="category_id">فئة الحملة:</label>
            <input type="number" id="category_id" name="category_id" required>
        </div>
        <div class="form-group">
            <label for="partner_id">الشريك:</label>
            <input type="number" id="partner_id" name="partner_id" required>
        </div>
        <div class="form-group">
            <label for="name">اسم الحملة:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="short_description">وصف قصير:</label>
            <textarea id="short_description" name="short_description" rows="2" required></textarea>
        </div>
        <div class="form-group">
            <label for="full_description">وصف كامل:</label>
            <textarea id="full_description" name="full_description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="cost">التكلفة:</label>
            <input type="number" step="0.01" id="cost" name="cost" required>
        </div>
        <div class="form-group">
            <label for="state">حالة الحملة:</label>
            <select id="state" name="state">
                <option value="active">نشطة</option>
                <option value="stop">متوقفة</option>
                <option value="pause">مؤقتة</option>
                <option value="end">منتهية</option>
            </select>
        </div>
        <div class="form-group">
            <label for="photo">صورة الحملة:</label>
            <input type="file" id="photo" name="photo" accept="image/*">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" aria-label="اضافة">إضافة الحملة</button>
        </div>
    </form>
</div>

        </section>

        <!-- عرض حالة الطلب -->
    </div>


    </div>
</main>
<?php require('views/parts/footer.php') ?>