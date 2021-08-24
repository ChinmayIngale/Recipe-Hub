<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=epiz_27491132_recipes','root', '');
// $pdo = new PDO('mysql:host=sql104.epizy.com;dbname=epiz_27491132_recipes','epiz_27491132', 'fw8yo4VcfpO');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>