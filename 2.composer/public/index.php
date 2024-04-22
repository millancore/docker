<?php
declare(strict_types=1);

include '../bootstrap.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler(LOG_PATH, Level::Info));

if(!empty($_POST)) {
    $log->info('POST request', $_POST);
}

?>

<!-- Form -->
<form action="index.php" method="POST">
    <input type="text" name="name">
    <input type="submit">
</form>

