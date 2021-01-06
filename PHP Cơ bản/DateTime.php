<?php
    echo date('d/m/Y - H:i:s');
    echo "<br/>";

    $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
    $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
    $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);

    echo $tomorrow;
    echo $lastmonth;
    echo $nextyear;
?>