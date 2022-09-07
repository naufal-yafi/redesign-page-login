<?php 

    function starting($title,$css,$icon) {
        return "
        <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            
                <title>$title</title>
            
                <link rel='stylesheet' href='$css'>
                <link rel='shortcut icon' href='$icon' type='image/x-icon'>
            </head>
            <body>";
    }

    function ending($js) {
        return "    
            <script src='$js' type='module'></script>
        </body>
        </html>";
    }

    function popupAlert($msg,$closeIcon) {
        return "
        <div class='alert'>
            <div class='pict'></div>
            <p>$msg</p>
            <div class='pict close-alert'>
                <img src='$closeIcon' alt='close icon'>
            </div>
        </div>";
    }

    function stmikHeader($logo) {
        return "
        <header>
            <img src='$logo' alt='logo stmik widya pratama'>
            <div class='text'>
                <div class='name'>STMIK WIDYA PRATAMA</div>
                <div class='service'>Learning Management Service</div>
            </div>
        </header>";
    }

    function inputText($get,$length) {
        return "
        <div class='group'>
            <label class='l-inp' for='id_user'>ID Pengguna</label>
            <input class='inp' type='text' id='id_user' name='$get' maxlength='$length'>
        </div>";
    }

    function inputPass($get,$length) {
        return "
        <div class='group'>
            <label class='l-inp' for='password'>Kata Sandi</label>
            <input class='inp' type='password' id='password' name='$get' maxlength='$length'>
            <p>Lupa kata sandi?</p>
        </div>";
    }

    function triggerButton($get,$name) {
        return "
        <div name='$get' class='button $get'>
            <input class='inpR' type='radio' name='lv_user' id='$get' value='$name'>
            <label class='lR $get' for='$get'>$name</label>
        </div>
        ";
    }
    
    // function triggerButton($get,$name) {
    //     return "
    //     <div name='$get' class='button $get'>$name</div>
    //     ";
    // }
?>