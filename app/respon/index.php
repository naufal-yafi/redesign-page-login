<?php 

    session_start();

    if ($_GET['val'] != '' && $_SESSION['val'] != '' && $_GET['idc'] != '' && $_SESSION['id'] != '') {
        echo "<script>console.log('Login Success')</script>";
    } else {
        header('location:./../../public/page/login.php?access-denied');
    }

    $BASE_URL = './..';
    include "$BASE_URL/php/connectDB.php";
    include "$BASE_URL/php/component.php";

    $getData = mysqli_query($conn,"SELECT * FROM user where id_user='$_SESSION[id]';");
    $data = mysqli_fetch_array($getData);
    $lvl = '';

    if ($_GET['idc'] == 'ort'){
        $lvl = "Orang Tua dari $data[username]";
    } else {
        $lvl = strtoupper($data['level']);
    }
?>

<?=starting('Dashboard',"$BASE_URL/../public/css/main2.css","$BASE_URL/images/logo.png")?>

<?=card($data['id_user'],$data['username'],$lvl)?>

<?php 

    if (isset($_POST['log-out'])) {
        session_destroy();
        header('location:./../../public/page/login.php?log-out');
    }

?>

<?=ending('')?>