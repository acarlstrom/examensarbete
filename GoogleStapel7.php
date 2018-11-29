<?php
    $fp=fopen("GoogleStapel7.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
