<?php
use PUGX\Shortid\Shortid;
require __DIR__ . '/vendor/autoload.php';
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');
for ($i=0; $i < 10000; $i++) { 
    $id = Shortid::generate();
    printf("%s\r\n",$id);
}
?>
