<?php
    $fp=fopen("GoogleStapel6.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
