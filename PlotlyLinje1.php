<?php
    $fp=fopen("PlotlyLinje1.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
