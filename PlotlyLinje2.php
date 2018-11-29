<?php
    $fp=fopen("PlotlyLinje2.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
