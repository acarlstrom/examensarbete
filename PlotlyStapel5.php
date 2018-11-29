<?php
    $fp=fopen("PlotlyStapel5.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
