<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Phân loại tam giác</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            $tam_giac = '';
            if (isset($_POST['calculate']))
            {
                 // Bước 1: Lấy tham số
    $a = isset($_POST['a']) ? $_POST['a'] : '';
    $b = isset($_POST['b']) ? $_POST['b'] : '';
    $c = isset($_POST['c']) ? $_POST['c'] : '';
 
    // kiểm tra có phải là 1 tam giác không
            }
 
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
        <form method="post" action="">
            <input type="text" style="width: 20px" name="a" value=""/>cạnh 1
            &
            <input type="text" style="width: 20px" name="b" value=""/>cạnh 2
            &
            <input type="text" style="width: 20px" name="c" value=""/>cạnh 3
            
            <br/><br/>
            <input type="submit" name="calculate" value="phân loại" />
        </form>
        <?php echo $tam_giac; ?>
    </body>
</html>
