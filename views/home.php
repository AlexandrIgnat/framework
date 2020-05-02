<!DOCTYPE html>
<html>
<head>
	<title>Домашняя</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<a href="?page=contact" class="btn btn-primary active" role="button" aria-pressed="true">Контакты</a>
<a href="?page=about" class="btn btn-primary active" role="button" aria-pressed="true">О нас</a>
<?php
for ($i=0; $i<= count($posts); $i++)
echo "<br>", $posts[$i]["title"],"&nbsp", $posts [$i]["description"] ;
?>
</body>
</html>