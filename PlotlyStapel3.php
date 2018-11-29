<?php
    $fp=fopen("PlotlyStapel3.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
