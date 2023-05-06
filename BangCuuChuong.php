ad>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="kqb1.php" method = "post">
        <table>
            <tr>
                <td colspan = "2">
                    In bảng cửu chương
                </td>
            </tr>
            <tr> 
                <td> Bắt đầu từ: </td>
                <td> <input type="number" name = "start"></td>
            </tr>
            <tr> 
                <td> Kết thúc tại: </td>
                <td> <input type="number" name = "end"></td>
            </tr>
            <tr>
            <td colspan = "2">
                <input type="submit" value = "In bảng cửu chương"></input>
                    
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
Minh Hiếu
Hoàng Minh Hiếu
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $start = $_POST['start'];
        $end = $_POST['end'];
    ?>
    
    <table border="1px">
<tr>
<?php
for($i = $start; $i <= $end; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
    
</body>
</html>