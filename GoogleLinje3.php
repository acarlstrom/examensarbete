<?php
    $fp=fopen("GoogleLinje3.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
