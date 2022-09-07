<?php
    $BASE_URL = './../../app';

    include "$BASE_URL/php/connectDB.php";
    include "$BASE_URL/php/component.php";
    
    if (isset($_POST['login'])){
        $id = $_POST['id_user'];
        $psw = $_POST['pswd_user'];

        if (isset($_POST['lv_user']) == NULL) {
            $_POST['lv_user'] = 'mahasiswa';
        }

        $lvl = strtolower($_POST['lv_user']);
    
    }
?>

<?=starting(
    "College Learning Management Service",
    "./../css/main.css",
    "$BASE_URL/images/logo.png"
)?>
    
    <?=popupAlert(
        "ID pengguna atau Kata sandi yang anda masukkan mungkin salah!!!",
        "$BASE_URL/images/x-circle.png"
    )?>

    <form class="container" method="post">
        <?=stmikHeader("$BASE_URL/images/logo.png")?>

        <main>
            <?=inputText('id_user','30');?>
            <?=inputPass('pswd_user','12');?>

            <div class="group sel">
                <?=triggerButton('pim','Pimpinan');?>
                <?=triggerButton('dos','Dosen');?>
                <?=triggerButton('ort','Orang Tua');?>
                <?=triggerButton('mhs','Mahasiwa');?>
            </div>
        </main>

        <footer>
            <button name="login">MASUK</button>
        </footer>
    </form>

<?=ending('./../js/app.js');?>