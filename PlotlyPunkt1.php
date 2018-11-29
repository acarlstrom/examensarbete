<?php
    $fp=fopen("PlotlyPunkt1.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
