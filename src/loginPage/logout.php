<?PHP
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
session_destroy();

header("location: ../homePage/index.php");
exit;
?>