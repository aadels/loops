<?php
$boxes = "";
$randomw = rand(50, 300);
$randomh = rand(40, 500);

	for($i = 0; $i < 10; $i++) {
	 $boxes = $boxes."<div class='box' style='width".$randomw."px; height:".$randomh."px;'>".$i."</div>";
	 
}

?>