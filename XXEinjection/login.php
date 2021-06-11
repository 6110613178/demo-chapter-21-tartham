<?php 
    libxml_disable_entity_loader (false); #allow external entities
    $xm = file_get_contents('file:///C:/Users/Acer/Desktop/input.txt'); #get posted xml
    $dom = new DOMDocument(); #create xml class
    $dom->loadXML($xm, LIBXML_NOENT | LIBXML_DTDLOAD); #load XML data into dom
    $login = simplexml_import_dom($dom); #parse into XML
    $user = $login->user; #load username
    $pass = $login->pass; #load password
    echo "<pre>You have logged in as user $user </pre>"; #display user logged in
?>