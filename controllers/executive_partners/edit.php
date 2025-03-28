<?php
$heading = "Edit test";

use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;

$partners = $db->query("SELECT * from partners where partner_id = :partner_id",[
    'partner_id' => $_POST['partner_id']
])->findOrFail();
$partners['phones'] = $db->query(
    "SELECT phone, type from partners_phones
    WHERE partner_id = :partner_id",[
        'partner_id' => $_POST['partner_id']
    ])->fetchAll();
$partners['accounts'] = $db->query(
    "SELECT account, account_type from partners_accounts
    WHERE partner_id = :partner_id",[
        'partner_id' => $_POST['partner_id']
    ])->fetchAll();
// $item = $db->query("SELECT * from executive_partners where id = :id ", [
//   'id' => $_GET['id'],
// ])->findOrFail();
//authorize($item['other_id'] == $userID);
$db->query("UPDATE partners
SET
(
    name = :name,
    logo = :logo,
    description = :description,
    more_information = :more_information,
    email = :email,
    directorate = :directorate,
    county = :county,
    city = :city,
    street = :street
) WHERE partner_id = :partner_id",[
    'name' => $_POST['name'],
    'logo' => $_POST['logo'],
    'description' => $_POST['description'],
    'more_information' => $_POST['more_information'],
    'email' => $_POST['email'],
    'directorate' => $_POST['directorate'],
    'county' => $_POST['county'],
    'city' => $_POST['city'],
    'street' => $_POST['street'],
    'partner_id' => $_POST['partner_id']
]);




for($i = 0; $i < count($_POST['phones']); $i++){
    $phone = $_POST['phones'][$i];
    $db->query(
        "UPDATE partner_phones 
        SET
        (
            phone = :phone,
            type = :type
        )WHERE partner_id = :partner_id and phone = :L_phone and type = :L_type",[
            'partner_id' => $_POST['partner_id'],
            'phone' => $phone['phone'],
            'type' => $phone['type'],
            'L_type' => $partners['phones'][$i]['type'],
            'L_phone' => $partners['phones'][$i]['phone']
        ]
    );
}
for($i = 0; $i < count($_POST['accounts']); $i++){
    $account = $_POST['accounts'][$i];
    $db->query(
        "UPDATE partners_accounts 
        SET
        (
            account = :account,
            account_type = :account_type
        )WHERE partner_id = :partner_id and account = :L_account and account_type = :L_account_type",[
            'partner_id' => $_POST['partner_id'],
            'account' => $account['account'],
            'account_type' => $account['account_type'],
            'L_account' => $partners['accounts'][$i]['account'],
            'L_account_type' => $partners['accounts'][$i]['account_type']
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

}





require "views/pages/executive_partners/edit_view.php";
