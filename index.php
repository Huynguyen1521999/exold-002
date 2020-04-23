<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Cloud-Php-Ex000</title>
  <meta charset="utf-8">
</head>
<body>
  $datetime = new DateTime('2013-01-22');
$datetime->modify('+1 day');
echo $datetime->format('Y-m-d H:i:s');
</body>
</html>
