<?php
    session_start();
    $BASE_URL = './../../app';

    include "$BASE_URL/php/connectDB.php";
    include "$BASE_URL/php/component.php";

    include "$BASE_URL/php/action.php";
?>

<?=starting(
    "College Learning Management Service",
    "./../css/main.css",
    "$BASE_URL/images/logo.png"
)?>

    <div class='alert zonk'>
        <div class='pict'></div>
        <p></p>
        <div class='pict close-alert'>
        </div>
    </div>

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