<?php
    $fp=fopen("GoogleStapel4.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
