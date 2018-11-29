<?php
    $fp=fopen("GoogleLinje1.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
