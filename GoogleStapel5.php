<?php
    $fp=fopen("GoogleStapel5.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
