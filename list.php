<?php
//Делается единый список
set_time_limit(0);

$file=file("rez.txt");
$file_count=count($file);

	$counter=file_get_contents('counter.txt');

for($i=$counter;$i<=$file_count;$i++){
	
	$j=0;
	$gids="";
	$gids_count="";
	
	$counter=file_get_contents('counter.txt');
	$gids=json_decode($file[$i]);
	$gids_count=count($gids);
	
	
	for($j=0;$j<$gids_count; $j++){
		
		if($gids[$j]<>""){
			
			$fp = fopen("list.txt", "a"); // Открываем файл в режиме записи 
			$mytext = $gids[$j]."\r\n"; // Исходная строка
			$test = fwrite($fp, $mytext); // Запись в файл
			fclose($fp); //Закрытие файла
		
		}
	}
	
	$counter++;
	file_put_contents('counter.txt',$counter);
	
	
}


?>