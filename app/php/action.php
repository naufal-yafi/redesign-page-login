<?php 

    if (isset($_POST['login'])){
        $id = $_POST['id_user'];
        $psw = $_POST['pswd_user'];
    
        if (isset($_POST['lv_user']) == NULL) {
            $_POST['lv_user'] = 'mahasiswa';
        }
    
        $lvl = strtolower($_POST['lv_user']);
    
        $getData = mysqli_query($conn,"SELECT * FROM user where id_user='$id' && password='$psw';");
        $data = mysqli_fetch_array($getData);
    
        if (mysqli_num_rows($getData) == 0){
            echo popupAlert(
                    "ID pengguna atau Kata sandi yang anda masukkan mungkin salah!!!",
                    "$BASE_URL/images/x-circle.png"
                );
        } else {
            if ($data['level'] == 'mahasiswa' && $lvl == 'orang tua'){
                echo "<script>alert('Login sebagai orang tua dari $data[username]')</script>";
            } elseif ($data['level'] != 'mahasiswa' && $lvl == 'orang tua') {
                echo popupAlert(
                    "Tidak bisa login sebagai orang tua karena anda bukan mahasiswa!!!",
                    "$BASE_URL/images/x-circle.png"
                );
            } else {
                echo "<script>alert('Kamu adalah $data[username], sebagai $data[level]')</script>";
            }
        }
    }

?>