
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Loops</title>
    <?php require_once('logic.php'); ?>
	<style>
    	/* We'll use this class to style the boxes..Red, 50x50px */
    	.box {
        	width:50px;
        	height:50px;
        	float:left;
        	margin:4px;
        	background-color:red;
    	}       
	</style>

</head>
<body>
	<?
    echo  $boxes rand (0, 9);
    ?>
</body>
</html>
