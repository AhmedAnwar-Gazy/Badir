<?php
$heading = "Create test";



use core\App;
use core\Database;

$db = App::resolve(Database::class);




$errors = [];

if (!(Validator::string($_POST['name'], 1, 255))) {
    $errors["name"] = "Titel  is too short or too long";
}
// if (!(Validator::string($_POST['body'], 1, 1000))) {
//     $errors["titel"] = " body is too short or long";
// }


if (! empty($errors)) {

    require "views/pages/executive_partners/create_view.php";
    die();
}


// $db->query("INSERT INTO executive_partners (name) VALUES (:name)", [
//     'name' => $_POST['name'],
// ]);



$partner_id = $db->query("INSERT into partners(name, logo, description, more_information, email, directorate, county, city, street)
values
(
    :name,
    :logo,
    :description,
    :more_information,
    :email,
    :directorate,
    :county,
    :city,
    :street
) ", [
    'name' => $_POST['name'],
    'logo' => $_POST['logo'],
    'description' => $_POST['description'],
    'more_information' => $_POST['more_information'],
    'email' => $_POST['email'],
    'directorate' => $_POST['directorate'],
    'county' => $_POST['county'],
    'city' => $_POST['city'],
    'street' => $_POST['street']
])->getGeneratedKey();

foreach ($_POST['phones'] as $phone) {
    $db->query(
        "INSERT INTO partner_phones (partner_id, phone, type)
        VALUES
        (
            :partner_id,
            :phone,
            :type
        )",
        [
            'partner_id' => $partner_id,
            'phone' => $phone['phone'],
            'type' => $phone['type']
        ]
    );
}
foreach ($_POST['accounts'] as $account) {
    $db->query(
        "INSERT INTO partners_accounts (partner_id, account, account_type)
        VALUES
        (
            :partner_id,
            :account,
            :account_type
        ) ",
        [
            'partner_id' => $partner_id,
            'account' => $account['account'],
            'account_type' => $account['account_type']
        ]
    );
}


header("Location: /pages/executive_partners");
die();
