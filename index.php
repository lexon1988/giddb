<?php

$file=file('rez.txt');


$gid_arr= json_decode($file[0]);
$gid_count=count($gid_arr);

$git=$gid_arr[0];


$api="https://api.vk.com/method/groups.getById?group_ids=".$git."&fields=city,country,place,description,wiki_page,members_count,counters,start_date,finish_date,can_post,can_see_all_posts,activity,status,contacts,links,fixed_post,verified,site";
$api_rez= file_get_contents($api);

$resp=json_decode($api_rez);

print_r($resp);
echo "<hr>";

//gid
echo $resp->response[0]->gid;
echo "<br>";

//name
echo $resp->response[0]->name;
echo "<br>";

//screen_name
echo $resp->response[0]->screen_name;
echo "<br>";

//is_closed
echo $resp->response[0]->is_closed;
echo "<br>";

//type
echo $resp->response[0]->type;
echo "<br>";


//city
echo $resp->response[0]->city;
echo "<br>";

//country
echo $resp->response[0]->country;
echo "<br>";

//group_photo
echo $resp->response[0]->place->group_photo;
echo "<br>";

//checkins
echo $resp->response[0]->place->checkins;
echo "<br>";

//updated
echo $resp->response[0]->place->updated;
echo "<br>";

//description
echo $resp->response[0]->description;
echo "<br>";


//wiki_page
echo $resp->response[0]->wiki_page;
echo "<br>";


//members_count
echo $resp->response[0]->members_count;
echo "<br>";


//COUNTERS****************************************

//topics
echo $resp->response[0]->counters->topics;
echo "<br>";

//can_post
echo $resp->response[0]->can_post;
echo "<br>";

//can_see_all_posts
echo $resp->response[0]->can_see_all_posts;
echo "<br>";

//activity
echo $resp->response[0]->activity;
echo "<br>";

//status
echo $resp->response[0]->status;
echo "<br>";

//contacts1
echo $resp->response[0]->contacts[0]->user_id;
echo $resp->response[0]->contacts[0]->desc;
echo "<br>";

//contacts2
echo $resp->response[0]->contacts[1]->user_id;
echo $resp->response[0]->contacts[1]->desc;
echo "<br>";

//contacts3
echo $resp->response[0]->contacts[2]->user_id;
echo $resp->response[0]->contacts[2]->desc;
echo "<br>";

//contacts4
echo $resp->response[0]->contacts[3]->user_id;
echo $resp->response[0]->contacts[3]->desc;
echo "<br>";

//contacts5
echo $resp->response[0]->contacts[4]->user_id;
echo $resp->response[0]->contacts[4]->desc;
echo "<br>";


//contacts6
echo $resp->response[0]->contacts[5]->user_id;
echo $resp->response[0]->contacts[5]->desc;
echo "<br>";


?>