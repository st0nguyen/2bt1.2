<?php
if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $sotien = $_POST["money"];
    $laisuat =$_POST["rate"];
    $nam = $_POST["years"];
    function tinh(){
        global $sotien,$laisuat,$nam;
        $giatri=$sotien;
        for($i=1;$i<=$nam;$i++){
            $giatri = $giatri +($giatri*$laisuat);
        }
        return $giatri;
    }
    echo tinh();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="money" placeholder="So tien dau tu">
    <input type="text" name="rate" placeholder="lai suat">
    <input type="text" name="years" placeholder="So nam dau tu">
    <input type="submit" id="submit" value="Calculate">
</form>
</body>
</html>