<?php
    $fp=fopen("ChartPunkt4.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
