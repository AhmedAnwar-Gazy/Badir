<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;


try {
    $categories = $db->query(
        "SELECT * FROM categories"
    )->fetchAll(); // Fetch all rows from the query result 
    $partners = $db->query(
        "SELECT * FROM partners"
    )->fetchAll(); // Fetch all rows from the query result
    $projects = $db->query("
    SELECT 
        P.project_id, 
        P.partner_id, 
        P.category_id, 
        P.level, 
        P.name, 
        P.photo, 
        P.short_description, 
        P.full_description, 
        P.type, 
        P.cost, 
        COALESCE(SUM(B.cost), 0) AS collected_money, 
        P.start_at, 
        P.end_at, 
        P.state, 
        P.directorate
    FROM projects P 
    LEFT JOIN users_donate_projects B ON P.project_id = B.project_id
    WHERE P.project_id = :project_id
    GROUP BY P.project_id, P.partner_id, P.category_id, P.level, P.name, P.photo, 
             P.short_description, P.full_description, P.type, P.cost, P.start_at, 
             P.end_at, P.state, P.directorate
", [
    'project_id' => $_GET['project_id'] ]
    )->fetchAll();


} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
    header("Location: /charity_campaigns_create");
    exit();
}

// $note = $db->query("SELECT * from charity_projects where id = :id ", [
//   'id' => $_GET['id'],
// ])->findOrFail();

//authorize($note['other_id'] == $userID);


require "views/pages/charity_projects/show_view.php";
