<?php
$heading = "Edit test";

use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;


$projects = $db->query("SELECT 
    (
    partner_id,
    category_id,
    level,
    name,
    photo,
    short_description,
    full_description,
    type,
    cost,
    start_at,
    end_at,
    state,
    directorate
    )FROM PROJECTS WHERE project_id = :project_id
",[
    'project_id' => $_GET['project_id']
])->findOrFail();

// $item = $db->query("SELECT * from charity_projects where id = :id ", [
//   'id' => $_GET['id'],
// ])->findOrFail();

//authorize($item['other_id'] == $userID);

$db->query
(
    "update projects set
    (
        partner_id = :partner_id,
        category_id = :category_id,
        level = :level,
        name = :name,
        photo = :photo,
        short_description = :short_description,
        full_description = :full_description,
        type = :type,
        cost = :cost,
        end_at = :end_at,
        state = :state,
        directorate = :directorate
    )where project_id = :project_id",
    [
        'partner_id' => $_POST['partner_id'],
        'category_id' => $_POST['category_id'],
        'level' => $_POST['level'],
        'name' => $_POST['name'],
        'photo' => $_POST['photo'],
        'short_description' => $_POST['short_description'],
        'full_description' => $_POST['full_description'],
        'type' => $_POST['type'],
        'cost' => $_POST['cost'],
        'end_at' => $_POST['end_at'],
        'state' => $_POST['state'],
        'directorate' => $_POST['directorate'],
        'project_id' => $_POST['project_id']
    ]
);

 // استقبال البيانات المطابقة لقاعدة البيانات 
 $category_id = $_POST['category_id'];
 $partner_id = $_POST['partner_id'];
 $level = $_POST['level'];
 $photo =$_POST['photo'];
 $name = $_POST['name'];
 $short_description = $_POST['short_description'];
 $full_description = $_POST['full_description'];
 $type = ['type'];
 $cost = $_POST['cost'];
 $state = $_POST['state'];
 $directorate  = ['directorate'];
 $end_at = $_POST['end_at'];
$project_id = $_POST['project_id'];

   // استقبال البيانات من النموذج
  $caseType = $_POST['caseType'];
  $age = $_POST ['age']; 
  $circumstances = $_POST['circumstances'];
  $amount = $_POST['amount'];
  $accountNumber = $_POST['accountNumber']; 
  $bankName = $_POST['bankName']; 
  $accountType = $_POST['accountType']; 
  $documents = $_POST['documents']; 
  $idFont = $_POST['idFont']; 
  $idback = $_POST['idback']; 
 
 header("Location: /pages/charity_projects");
 die();





require "views/pages/charity_projects/edit_view.php";
