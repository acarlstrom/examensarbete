<?php
    $fp=fopen("GooglePunkt4.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
