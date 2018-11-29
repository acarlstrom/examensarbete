<?php
    $fp=fopen("ChartStapel7.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
