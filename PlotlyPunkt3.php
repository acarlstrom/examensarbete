<?php
    $fp=fopen("PlotlyPunkt3.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
