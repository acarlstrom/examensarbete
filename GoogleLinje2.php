<?php
    $fp=fopen("GoogleLinje2.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
