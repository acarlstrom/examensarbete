<?php
    $fp=fopen("GooglePunkt2.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
