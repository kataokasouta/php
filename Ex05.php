<?php
 $mytime =$_POST['Mytime'];
 $curHour=substr($myTime,0,2);
?>
<?='時刻は'.$curHour.'時です'.'<br>'?>
<?php
if($curHour>=18){
    echo "こんばんわ";
}else if($curHour>=12){
    echo "こんにちは";
}else{
    echo "おはようございます";
}
?>