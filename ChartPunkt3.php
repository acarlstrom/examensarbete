<?php
    $fp=fopen("ChartPunkt3.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
