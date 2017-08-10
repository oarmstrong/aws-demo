<?php $hostname = `hostname`; ?>

<html>
<body>

<p><?php echo "Hello World! This is PHP running from the system: $hostname"; ?></p>

<img src="kitten.jpg">

<h3>Database Entries</h3>
<?php
$host = getenv("MYSQL_HOST");
$db = getenv("MYSQL_DATABASE");
$user = getenv("MYSQL_USER");
$password = getenv("MYSQL_PASSWORD");
$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);

$words = $pdo->query("select text from words");
while ($row = $words->fetch()) {
    echo "<p>".$row['text']."</p>";
}
?>

<hr>
<p>Generated at: <?php echo time(); ?></p>

</body>
</html>
