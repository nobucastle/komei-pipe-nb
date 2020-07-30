First Release

<?
echo 'phpのテストです。<br>';

$dbinfo = parse_url(getenv('DATABASE_URL'));

$dsn = 'pgsql:host=' . $dbinfo['host'] . ';dbname=' . substr($dbinfo['path'], 1);

$pdo = new PDO($dsn, $dbinfo['user'], $dbinfo['pass']);
var_dump($pdo->getAttribute(PDO::ATTR_SERVER_VERSION));

$stmt = $pdo->query('SELECT user1, user2 FROM user_tb');
$result = $stmt->fetchAll();
return $result;

phpinfo();
?>
