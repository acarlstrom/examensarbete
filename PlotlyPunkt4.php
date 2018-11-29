<?php
    $fp=fopen("PlotlyPunkt4.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
