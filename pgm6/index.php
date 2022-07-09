<html>

<head>
   <title>Web Page Counter</title>
</head>

<body background_color="pink" text="blue">
   <?php
$my_file = "count.txt";
$handle = fopen($my_file, "r");
$count = fgets($handle);
$count=$count+1;
$handle = fopen($my_file, 'w') or die('Cannot open file: '.$my_file);
fwrite($handle, $count);
echo "This page has been viewed $count times";
?>
</body>

</html>