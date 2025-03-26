<?php

$heading = "update test";

require 'core\\' . "Validator.php";

use core\App ;
use core\Database;

$db = App::resolve(Database::class);

$userID = 1;

// $note = $db->query("SELECT * from charity_campaigns where id = :id ", [
//   'id' => $_POST['id'],
// ])->findOrFail();

authorize($note['other_id'] == $userID);

$errors = [];

//if (!(Validator::string($_POST['anme'], 1, 255))) {
  //  $errors["titel"] = "Titel  is too short or too long";
//}
// if (!(Validator::string($_POST['body'], 1, 1000))) {
//     $errors["titel"] = " body is too short or long";
// }


if (! empty($errors)) {
  
    require "views/pages/charity_campaigns/edit_view.php";
    die();
}
 

// $db->query("UPDATE charity_campaigns set name = :name  " , [
//     'name' => $_POST['name'],

// ]);
$campaigns = $db->query("SELECT * from campaigns where campign_id = :campaign_id ", [
    'campaign_id' => $_GET['campaign_id'],
    ])->findOrFail();
$db->query("update campaigns set
(
    partner_id = :partner_id,
    name= :name,
    short_description = :short_description ,
    full_description = :full_description,
    cost = :cost,
    state = :state,
    end_at = :end_at,
    photo = :photo
)where
    campaign_id = :campaign_id
",[
    'partner_id' =>  $_POST['partner_id'],
    'name' => $_POST['name'],
    'short_description' =>  $_POST['short_description'] ,
    'full_description' =>  $_POST['full_description'],
    'cost' =>  $_POST['cost'],
    'state' =>  $_POST['state'],
    'end_at' =>  $_POST['end_at'],
    'photo' =>  $_POST['photo'],
    'campaign_id' => $_POST['campaign_id']
]);


// استقبال البيانات من النموذج
$campaign_id = $_POST['campaign_id'];
$partner_id = $_POST['partner_id'];
$name = $_POST['name'];
$short_description = $_POST['short_description'];
$full_description = $_POST['full_description'];
$cost = $_POST['cost'];
$state = $_POST['state'];
$photo = $_POST['photo'];



// التحقق من الحقول المطلوبة

// . التحقق من تصنيف الحملة
if (empty($_POST['category_id'])) {
    $errors['category_id'] = "حقل التصنيف مطلوب";
} elseif (!Validator::string($_POST['category_id']?? '', 1, 255)) {
    $errors['category_id'] = "يجب اختيار تصنيف صحيح من القائمة";

}
// . التحقق من الشريك
if (empty($_POST['partner_id'])) {
    $errors['partner_id'] = "حقل الشريك مطلوب";
} elseif (!Validator::number($_POST['partner_id'] ?? '', 1, 1000)) {
    $errors['partner_id'] = "يجب اختيار شريك صحيح من القائمة";
}

// . التحقق من اسم الحملة
if (empty($_POST['name'])) {
    $errors['name'] = "حقل اسم الحملة مطلوب";
} elseif (!Validator::string($_POST['name'] ?? '', 3, 255)) {
    $errors['name'] = "يجب أن يكون اسم الحملة بين 3 إلى 255 حرفاً";
}
// . التحقق من الوصف المختصر
if (empty($_POST['short_description'])) {
   $errors['short_description'] = "حقل الوصف المختصر مطلوب";
} elseif (!Validator::string($_POST['short_description'] ?? '', 20, 1000)) {
    $errors['short_description'] = "يجب أن يكون الوصف المختصر بين 20 إلى 1000 حرفاً";
 }

// . التحقق من الوصف الكامل
if (empty($_POST['full_description'])) {
    $errors['full_description'] = "حقل الوصف الكامل مطلوب";
} elseif (!Validator::string($_POST['full_description'] ?? '', 50, 5000)) {
    $errors['full_description'] = "يجب أن يكون الوصف الكامل بين 50 إلى 5000 حرفاً";
}
// و. التحقق من التكلفة
if (empty($_POST['cost'])) {
    $errors['cost'] = "حقل التكلفة مطلوب";
} elseif (!Validator::number($_POST['cost'] ?? 0, 1, 10000000)) {
 $errors['cost'] = "يجب أن تكون التكلفة بين 1 إلى 10,000,000";
}

// ط. التحقق من الصورة (إذا تم إدخالها)
if (!empty($inputs['photo']) && !filter_var($inputs['photo'], FILTER_VALIDATE_URL)) {
    $errors['photo'] = "رابط الصورة غير صالح. يجب أن يكون رابطاً صحيحاً";
}
// معالجة الأخطاء
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_POST;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit();
}

 header("Location: /pages/charity_campaigns");
 die();

