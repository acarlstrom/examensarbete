<?php
    $fp=fopen("ChartPunkt1.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
