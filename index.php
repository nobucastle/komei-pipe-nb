First Release

<?
$url = parse_url(getenv('DATABASE_URL'));
$dsn = sprintf('pgsql:host=%s;dbname=%s', $url['host'], substr($url['path'], 1));
$pdo = new PDO($dsn, $url['user'], $url['pass']);


$stmt = $pdo->prepare("SELECT * FROM user_tb");
$stmt->execute([$user1]);
$result = $stmt->fetch();
?>
