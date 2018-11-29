<?php
    $fp=fopen("GoogleStapel3.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
