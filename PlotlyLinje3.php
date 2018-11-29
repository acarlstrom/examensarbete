<?php
    $fp=fopen("PlotlyLinje3.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
