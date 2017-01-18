<?php
set_time_limit(0);

include('db.php');
$db=new Database();

$gid_file=file('list.txt');
$counter_db=file_get_contents('counter_db.txt');
$counter_db_count=count($gid_file);

if($counter_db==$counter_db_count){
	
	exit();
}


for($i=$counter_db;$i<$counter_db_count; $i++){


$counter_db=file_get_contents('counter_db.txt');

$api="https://api.vk.com/method/groups.getById?group_ids=".trim($gid_file[$counter_db])."&fields=city,country,place,description,wiki_page,members_count,counters,start_date,finish_date,can_post,can_see_all_posts,activity,status,contacts,links,fixed_post,verified,site";
$api_rez= file_get_contents($api);

$resp=json_decode($api_rez);


//gid
$db_arr['gid']=$resp->response[0]->gid;

//name
$db_arr['name']=$resp->response[0]->name;

//screen_name
$db_arr['screen_name']=$resp->response[0]->screen_name;

//is_closed
$db_arr['is_closed']=$resp->response[0]->is_closed;

//type
$db_arr['type']=$resp->response[0]->type;

//city
$db_arr['city']=$resp->response[0]->city;

//country
$db_arr['country']=$resp->response[0]->country;

//group_photo
$db_arr['group_photo']=$resp->response[0]->place->group_photo;




//checkins
$db_arr['checkins']=$resp->response[0]->place->checkins;



//updated
$db_arr['updated']=$resp->response[0]->place->updated;



//description
$db_arr['description']=$resp->response[0]->description;



//wiki_page
$db_arr['wiki_page']=$resp->response[0]->wiki_page;

//members_count
$db_arr['members_count']=$resp->response[0]->members_count;


//COUNTERS****************************************

//topics
$db_arr['topics']=$resp->response[0]->counters->topics;

//can_post
$db_arr['can_post']=$resp->response[0]->can_post;

//can_see_all_posts
$db_arr['can_see_all_posts']=$resp->response[0]->can_see_all_posts;

//activity
$db_arr['activity']=$resp->response[0]->activity;

//status
$db_arr['status']=$resp->response[0]->status;

//contacts1
$db_arr['contacts1']=$resp->response[0]->contacts[0]->user_id;


//contacts2
$db_arr['contacts2']=$resp->response[0]->contacts[1]->user_id;

//contacts3
$db_arr['contacts3']=$resp->response[0]->contacts[2]->user_id;


//contacts4
$db_arr['contacts4']=$resp->response[0]->contacts[3]->user_id;


//contacts5
$db_arr['contacts5']=$resp->response[0]->contacts[4]->user_id;



//contacts6
$db_arr['contacts6']=$resp->response[0]->contacts[5]->user_id;


$db_arr['desc1']=$resp->response[0]->contacts[0]->desc;
$db_arr['desc2']=$resp->response[0]->contacts[1]->desc;
$db_arr['desc3']=$resp->response[0]->contacts[2]->desc;
$db_arr['desc4']=$resp->response[0]->contacts[3]->desc;
$db_arr['desc5']=$resp->response[0]->contacts[4]->desc;
$db_arr['desc6']=$resp->response[0]->contacts[5]->desc;






$db->db_insert("giddb",$db_arr);
$counter_db++;
file_put_contents("counter_db.txt",$counter_db);




}
?>