<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Phân loại tam giác</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
        $a=$_GET[‘a’];
        $b=$_GET[‘b’];
        $c=$_GET[‘c’];    
        // Kiểm tra nhập thiếu dữ liệu.        
if (empty($a) || empty($b) || empty($c)) {
    echo ‘Nhập thiếu dữ liệu !!!’;
    exit();
}
//Kiểm tra độ dài có phải là số hay không.
if (!is_numeric ($a) || !is_numeric ($b) || !is_numeric ($c)) {
    echo ‘Độ dài phải là số !!!’;
    exit();
}
if (($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b) {
        echo ‘Thỏa mãn yêu cầu là tam giác ‘;
}
else {
       echo ‘Không tạo thành được tam giác ‘;
}
            //Loại tam giác.
 
$a2=$a*$a;
$b2=$b*$b;
$c2=$c*$c;
 
if ($a == $b && $b == $c) {
        $tam_giac = ‘Tam giác đều’;
}
    
else if ($a == $b || $a == $c || $c == $b)  {
        if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
            $tam_giac = ‘Tam giác vuông cân’;
        }
else {
            $tam_giac = ‘Tâm giác cân’;
        }
}
    
else if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
        $tam_giac= ‘Tam giác vuông’;
}
    
else {
        $tam_giac = ‘Tam giác thường’;
}
        ?>
        <h1>Phân loại tam giác</h1>
        <form action=”action.php” method=”get”>
   Độ dài đoạn thứ nhất: <input type=”text” name=”a”><br/>
   Độ dài đoạn thứ hai: <input type=”text” name=”b”><br/>
   Độ dài đoạn thứ ba: <input type=”text” name=”c”><br/>
   <input type=”submit” value=”Tính toán”>
</form>
        
    </body>
</html>
