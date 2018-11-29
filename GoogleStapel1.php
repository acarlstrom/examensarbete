<?php
    $fp=fopen("GoogleStapel1.txt","a");
    fputs ($fp, $_POST['str']);
    fclose ($fp);	
?> 
