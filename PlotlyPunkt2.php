<?php
    $fp=fopen("PlotlyPunkt2.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
