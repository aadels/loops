<?php
$boxes = "";
$randomw = rand(50, 300);
$randomh = rand(40, 500);
$i = 0;
while ($i < 10){
	 $boxes = $boxes."<div style='width:{$randomw}px; height:{$randomh}px; float:left; margin:4px; 
	 				background-color:blue;'>".$i."</div>";
	 $i++;
}

?>