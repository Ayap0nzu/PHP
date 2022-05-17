<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'amusementpark');
    if(!$conn){
        echo mysqli_connect_error();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
    border:1px solid black;
    text-align: center;
    border-collapse: collapse;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="POST" id="form1">
    
        <div style="width: 50%;margin: auto; margin-top: 10%;">
        <label for="name">고객 성명:</label>
         <input type="text" id="name" name="name" required="required">
         <input type="submit" value="합계" style="float: right;">
        <br>
        <br>
        <table style="width:100%">
        <tr>
            <th>No</th>
            <th>구분</th>
            <th colspan="2">어린이</th>
            <th colspan="2">어른</th>
            <th>비고</th>
        </tr>

        <tr>
            <td>1</td>
            <td>입장권</td>
            <td>7000</td>
            <td width="10%">
                <select name="numberofPeople" id="numberofPeople">
                    <option selected="selected">0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
            </td>
            <td>10,000</td>
            <td width="10%">
            <select name="numberofPeople2" id="numberofPeople2">
                <option selected="selected">0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                    </select>
            </td>
            <td>입장</td>
        </tr>

        <tr>
            <td>2</td>
            <td>BIG3</td>
            <td>12,000</td>
            <td width="10%">
                <select name="numberofPeople3" id="numberofPeople3">
                    <option selected="selected">0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
            </td>
            <td>16,000</td>
            <td width="10%">
            <select name="numberofPeople4" id="numberofPeople4">
                <option selected="selected">0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                    </select>
            </td>
            <td>입장+놀이3종</td>
        </tr>

        <tr>
            <td>3</td>
            <td>자유이용권</td>
            <td>21,000</td>
            <td width="10%">
                <select name="numberofPeople5" id="numberofPeople5">
                    <option selected="selected">0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
            </td>
            <td>26,000</td>
            <td width="10%">
            <select name="numberofPeople6" id="numberofPeople6">
                <option selected="selected">0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                    </select>
            </td>
            <td>입장+놀이자유</td>
        </tr>

        <tr>
            <td>4</td>
            <td>연간이용권</td>
            <td>70,000</td>
            <td width="10%">
                <select name="numberofPeople7" id="numberofPeople7">
                    <option selected="selected">0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
            </td>
            <td>90,000</td>
            <td width="10%">
            <select name="numberofPeople8" id="numberofPeople8">
                <option selected="selected">0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                    </select>
            </td>
            <td>입장+놀이자유</td>
        </tr>

    </table>
    <p>
        <?php
         $name = "";
         $noP = $noP2 = $noP3 = $noP4 = $noP5 = $noP6 = $noP7 = $noP8 = 0;
        if(isset($_POST["name"]) && strlen($_POST["name"]) > 0) {
            $name = $_POST["name"];
            $noP = intval($_POST["numberofPeople"]);
            $noP2 = intval($_POST["numberofPeople2"]);
            $noP3 = intval($_POST["numberofPeople3"]);
            $noP4 = intval($_POST["numberofPeople4"]);
            $noP5 = intval($_POST["numberofPeople5"]);
            $noP6 = intval($_POST["numberofPeople6"]);
            $noP7 = intval($_POST["numberofPeople7"]);
            $noP8 = intval($_POST["numberofPeople8"]);
            $stR = " ";
            $sum = 0;
            
            if($noP >= 1){
                $stR .= "어린이 입장권 " . $noP . "매 ";
                $sum += 7000*$noP;
            }
            if($noP2 >= 1){
                $stR .= "어른 입장권 " . $noP2 . "매 ";
                $sum += 10000*$noP2;
            }
            if($noP3 >= 1){
                $stR .= "어린이 BIG3 " . $noP3 . "매 ";
                $sum += 12000*$noP3;
            }
            if($noP4 >= 1){
                $stR .= "어른 BIG3 " . $noP4 . "매 ";
                $sum += 16000*$noP4;
            }
            if($noP5 >= 1){
                $stR .= "어린이 자유이용권 " . $noP5 . "매 ";
                $sum += 21000*$noP5;
            }
            if($noP6 >= 1){
                $stR .= "어른 자유이용권 " . $noP6 . "매 ";
                $sum += 26000*$noP6;
            }
            if($noP7 >= 1){
                $stR .= "어린이 연간이용권 " . $noP7 . "매 ";
                $sum += 70000*$noP7;
            }
            if($noP8 >= 1){
                $stR .= "어른 연간이용권 " . $noP8 . "매 ";
                $sum += 90000*$noP8;
            }

            $sql2 = "INSERT INTO customerinfo(name, ticket, price) VALUES('$name', '$stR', '$sum')";

            if(mysqli_query($conn, $sql2)){

            }
            else{
                echo mysqli_error($conn);
            }
            $sql = 'SELECT `name`, `ticket`, `price`, `id` FROM `customerinfo` ORDER BY id DESC';
            $result = mysqli_query($conn, $sql);
            $one_cust = mysqli_fetch_assoc($result);
            $amORpm = "";
            if(date("H") >= 12 && date("H") <= 24){
                $amORpm .= "오전 ";
            }
            else{
                $amORpm .= "오후 ";
            }
            
            date_default_timezone_set("Asia/Seoul");
            echo date("Y") . "년 " . date("m") . "월 " . date("d") . "일 " . $amORpm . date("h") . ":" . date("i") . "분<br>";
            echo htmlspecialchars($one_cust['name']) . " 고객님 감사합니다. <br>";
            echo htmlspecialchars($one_cust['ticket']) . "<br>";
            echo "합계 " . htmlspecialchars($one_cust['price']) . " 원입니다.<br><br><br><br><br>";
            echo '<script type="text/javascript"> 
            cleartext();  
            </script>';

            // 전체 리스트 뷰
            $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($customers as $customer){
                echo htmlspecialchars($customer['name']);
                echo htmlspecialchars($customer['ticket']);
                echo htmlspecialchars($customer['price']) . "<br>";
            }
            
        }

        ?>
    </p>
        </div>
    </form>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>