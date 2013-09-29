<?php
$boxes = "";
$random = rand(50, 300);
$i= 0;
while ($i < 10){
	 $boxes = $boxes."<div style='width:{$random}px; height:{$random}px; float:left; margin:4px; 
	 				background-color:blue;'>".$i."</div>";
	 $i++;

}

?>