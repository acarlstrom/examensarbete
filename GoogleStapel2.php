<?php
    $fp=fopen("GoogleStapel2.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
