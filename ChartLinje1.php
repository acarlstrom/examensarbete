<?php
    $fp=fopen("ChartLinje1.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
