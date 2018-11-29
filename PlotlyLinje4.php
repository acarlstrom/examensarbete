<?php
    $fp=fopen("PlotlyLinje4.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
