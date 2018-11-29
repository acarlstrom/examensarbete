<?php
    $fp=fopen("ChartPunkt2.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
