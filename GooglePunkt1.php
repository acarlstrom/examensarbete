<?php
    $fp=fopen("GooglePunkt1.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
