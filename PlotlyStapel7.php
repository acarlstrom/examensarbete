<?php
    $fp=fopen("PlotlyStapel7.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
