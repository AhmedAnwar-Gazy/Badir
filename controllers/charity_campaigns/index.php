<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);


$heading = "All My tests";


<<<<<<< HEAD
// $campaigns = $db->query("select g.campaign_id, g.category_id, g.partner_id, g.campaign_request_id, sum(u.cost) as collected_money, g.name, g.short_description, g.full_description, g.cost, g.state, g.start_at, g.stop_at, g.end_at,g.photo
// from campaigns g join users_donate_campaigns u on (g.campaign_id = u.campaign_id) 
// group by(u.campaign_id)
// order by(u.start_at;")->fetchAll();
=======
$campaigns = $db->query("select g.campaign_id, g.category_id, g.partner_id, g.campaign_request_id, sum(u.cost) as collected_money, g.name,g.photo, g.short_description, g.full_description, g.cost, g.state, g.start_at, g.stop_at, g.end_at
from campaigns g join users_donate_campaigns u on (g.campaign_id = u.campaign_id) 
group by(u.campaign_id)
order by(g.start_at)")->fetchAll();
>>>>>>> 1847603dee89ef1f6a21bd4565994f8499f83a98


require "views/pages/charity_campaigns/index_view.php";
