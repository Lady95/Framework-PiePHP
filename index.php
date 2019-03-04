
<!-- <pre>
<?php
//var_dump($_POST, $_GET, $_SERVER);
?>
</pre> -->

<?php
    define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
    require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
    // $test = new src\Controller\AppController();
    // $test->run();

    //$test = new src\Controller\UserController();
    // $test->run();

    // $test1 = new src\Model\UserModel();
    // $test1->run();

     $app = new Core\Core();
     $app->run();
    //$app2 = new Core\Controller();


    // $rien = $_SERVER['REQUEST_URI'];

    // var_dump(parse_url($rien)); 
?>