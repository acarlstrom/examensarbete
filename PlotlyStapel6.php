<?php
    $fp=fopen("PlotlyStapel6.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
