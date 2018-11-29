<?php
    $fp=fopen("ChartStapel4.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
