<?php
$boxes = "";
for($i = 0; $i < 10; $i++) {
$randomw = rand(70, 500);
$randomh = rand(70, 500);

	
	 $boxes = $boxes."<div class='box' style='width".$randomw."px; height:".$randomh."px;'>".$i."</div>";
	 
}

?>