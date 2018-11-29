<?php
    $fp=fopen("ChartStapel3.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
