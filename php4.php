<?php
function tiime($time) {
    if(substr($time,9,10) === 'PM') {
        $modi=intval(substr($time,0,3))+12;
        echo $modi.substr($time,2,6);
    } else {
        echo substr($time,0,8);
    }
}
echo tiime('07:05:45 PM');
?>
