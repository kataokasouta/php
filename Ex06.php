<?php
$x = $_POST['X'];
$y = $_POST['Y'];
?>
<?='<br>Xの値は:'.$x;?>
<?='<br>Yの値は:'.$y;?>
<br>
<?php
echo ('x+y='.($x+$y));
echo "<br>";
echo ('x-y='.($x-$y));
echo "<br>";
echo ('x*y='.($x*$y));
echo "<br>";
echo ('x/y='.($x/$y));
echo "<br>";
?>