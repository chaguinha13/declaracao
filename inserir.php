<?php
session_start();
include("conexao.php");
$conn = conexao();

if(empty($_POST['email'])|| empty($_POST['matricula'])){
    header("location: index.html");
    exit();
}

if(isset($_POST['btn'])){
    $email = limpapost($_POST['email']);
    $matricula = limpapost($_POST['matricula']);
}

$sql = "SELECT * FROM aluno WHERE email = '$email' AND matricula = '$matricula'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
$count = mysqli_num_rows($query);

if($count == 1){
    $_SESSION['email'] = $email;
   header("location:painel.php");
} else{
    echo '<script>
        window.location.href = "index.html";
        alert("falha no login")
    </script>';
    
}

?>
