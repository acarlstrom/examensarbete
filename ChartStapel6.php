<?php
    $fp=fopen("ChartStapel6.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
