<?php
    $fp=fopen("ChartLinje2.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
