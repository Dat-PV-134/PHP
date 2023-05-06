<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
        }

        .main {
            margin: auto;
            width: 400px;
            height: fit-content;
            background-color: yellow;
        }

        .main_heading{
            height: 40px;
            line-height:40px;
            font-size: 2rem;
            text-align: center;
            margin: 0;
            padding: 8px 0;
            background-color: orange;
            color:brown;
        }

        ul{
            list-style: none;
            padding:0;
            margin: 8px 16px;
        }
        ul li span{
            width: 40%;
            display:inline-block;
            line-height: 100%;
        }

        .main_button{
            display: flex;
            padding-bottom: 10px;
            justify-content: center;
        }

        li {
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php
        $area = '';
        
        if (isset($_POST['dai']) || isset($_POST['rong'])) {
            if(empty($_POST['dai']) || empty($_POST['rong'])) {
                echo "Bạn phải nhập đủ các trường";
                return;
            }
            $length = $_POST['dai'];
            $width = $_POST['rong'];
            $area = $length * $width;
        } else {
            
        }
    ?>

    <div class="main">
        <form method="POST" action="helloWorld.php">
        <h3 class="main_heading">Diện tích hình chữ nhật</h3>
        <ul>
            <li>
                <span>Chiều dài:</span>
                <input type="number" name="dai" value="<?php echo $length?>">
            </li>
            <li>
                <span>Chiều rộng:</span>
                <input type="number" name="rong" value="<?php echo $width?>">
            </li>
            <li>
                <span>Diện tích:</span>
                <input style="background-color: pink;" type="number" name="dt" value="<?php echo $area?>">
            </li>
        </ul>
        <div class="main_button">
            <input type="submit" value="Tính">
        </div>
        </form>
    </div>
</body>
</html>
