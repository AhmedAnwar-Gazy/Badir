<?php
$heading = "one test";

use core\App;
use core\Database;


$db = App::resolve(Database::class);

try {
    $db->query(
        "DELETE FROM users_cart_endowments 
         WHERE user_id = :user_id AND endowment_id = :endowment_id",
        [
            'user_id' => filter_var($_SESSION['user']['id'], FILTER_SANITIZE_NUMBER_INT),
            'endowment_id' => $_POST['endowment_id']
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    abort(500);
}


header("Location: " . $_SERVER["HTTP_REFERER"]);
