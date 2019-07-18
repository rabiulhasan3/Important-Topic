<?php 

	//find out client id
 	$externalContent = file_get_contents('http://checkip.dyndns.com/');
    preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
    $client_ip = $m[1];

    echo '<h2 style="text-align:center">';
    echo $client_ip;
    echo '</h2>';
 ?>