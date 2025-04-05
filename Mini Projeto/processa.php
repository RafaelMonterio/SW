
<?php
$user = $_POST['username'];
$pass = $_POST['password'];


$usuario_correto = "ale@gmail.com";
$senha_correta = "5764";

if ($user === $usuario_correto && $pass === $senha_correta) {
    header("Location: privada.php?nome=" . $user);
   
} else {
    header("Location: erro.php");
    
}
?>