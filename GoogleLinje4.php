<?php
    $fp=fopen("GoogleLinje4.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
