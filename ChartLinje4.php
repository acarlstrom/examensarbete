<?php
    $fp=fopen("ChartLinje4.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
