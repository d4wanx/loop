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
        
        <div>
            <label for="team1">ใส่ชื่อทีมที่ 1</label>
            <input type="text" name="team1">
            <label for="p1">ใส่คะแนน</label>
            <input type="number" name="score1">
        </div>

        <div>
            <label for="team2">ใส่ชื่อทีมที่ 2</label>
            <input type="text" name="team2">
            <label for="score2">ใส่คะแนน</label>
            <input type="number" name="score2">
        </div>

        <input type="submit" value="ตกลง">
    </form>

    <a href= "month.php">ไปหน้าเดือน</a>

    <?php
        if(isset($_GET['team1']) && 
           isset($_GET['team2']) && 
           isset($_GET['score1']) &&
           isset($_GET['score2'])){

            $team1 = $_GET['team1'];
            $team2 = $_GET['team2'];

            $score1 = $_GET['score1'];
            $score2 = $_GET['score2'];

            if( $score1 > $score2 ){
                echo "$team1 (Win) $score1 - $score2 $team2";
            }
            else{
                echo "$team1 $score1 - $score2 $team2 (Win) ";
            }
        }
    ?>

</body>
</html>
