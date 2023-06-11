

<?php 
session_start();
if(isset($_POST['girisyap'])) {
    $user ='admin';
    $pass ='1234';
    if ($_POST['username'] == $user AND $_POST['pass'] == "1234"){

        $_SESSION["giris"]="true"; //giris degerini dogru yap 
        $_SESSION["username"]=$user;
        header("Location: ../basarili.php");
    }
    else
    {
        $_SESSION["hatamesaji"]="Kullanıcı Adı veya Şifre Hatalıdır.";
        header("Location: ../index.php");
    }
}
?>