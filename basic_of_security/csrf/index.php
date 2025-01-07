<?php
require_once 'csrf.php';
csrf();
;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF</title>
</head>
<body>
    <form action="/" method="post">
        <input type="text" name="csrf" value="<?=$_SESSION['csrf'];?>">
        <input type="text" name="nama">
        <button type="submit" name="submit">Ok</button>
    </form>
</body>
<?php 
if(isset($_POST['submit'])){
     $csrf_verify = csrfV($_POST['csrf']);
    if($csrf_verify === true){
        var_dump($_POST['nama']);
    }else{
        var_dump("csrf not valid");
    }
}
;?>
</html>