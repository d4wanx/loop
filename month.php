<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <h1>กรุณากรอกข้อมูล</h1>
        <label for="team1">ใส่เดือน 1</label>
        <input type="text" name="month">

        <input type="submit" value="ตกลง">
    </form>

    <div>
        <a href= "index.php">ไปหน้าฟุตบอล</a>
    </div>

    <?php
        if(isset($_GET['month'])){
            $month = $_GET['month'];
            
            switch($month){
                case 'มกราคม':
                    Day(31);
                    break;
                case 'กุมภาพันธ์':
                    Day(29);
                    break;
                case 'มีนาคม':
                    Day(31);
                    break;
                case 'เมษายน':
                    Day(30);
                    break;
                case 'พฤษภาคม':
                    Day(31);
                    break;
                case 'มิถุนายน':
                    Day(30);
                    break;
                case 'กรกฎาคม':
                    Day(31);
                    break;
                case 'สิงหาคม':
                    Day(31);
                    break;
                case 'กันยายน':
                    Day(30);
                    break;
                case 'ตุลาคม':
                    Day(31);
                    break;
                case 'พฤศจิกายน':
                    Day(30);
                    break;
                case 'ธันวาคม':
                    Day(31);
                    break;
            }
        }

        function Day($d){
            $m = $_GET['month'];
            echo 'เดือน'.$m."มี ".$d." วัน";
        }
    ?>

</body>
</html>
