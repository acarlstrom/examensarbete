<?php
    $fp=fopen("ChartStapel5.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
