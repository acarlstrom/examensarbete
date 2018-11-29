<?php
    $fp=fopen("ChartStapel1.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
