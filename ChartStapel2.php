<?php
    $fp=fopen("ChartStapel2.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
