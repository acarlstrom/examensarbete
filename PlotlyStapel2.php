<?php
    $fp=fopen("PlotlyStapel2.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
