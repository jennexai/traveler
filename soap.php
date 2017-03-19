<!--  
$request_xml = "<?xml version='1.0' encoding='utf-8'?>
<request>
    <id>12345</id>
    <email>eoin@dolepaddy.com</email>
<request>";
 
//Initialize handle and set options
$username = 'dolepaddy';
$password = 'secret123';
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://connect.tosomeserver.com/xmlrpc'); 
curl_setopt($ch, CURLOPT_USERPWD, $username.':'.$password);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_TIMEOUT, 4); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $request_xml); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: close'));
 
//Execute the request and also time the transaction ( optional )
$start = array_sum(explode(' ', microtime()));
$result = curl_exec($ch); 
$stop = array_sum(explode(' ', microtime()));
$totalTime = $stop - $start;
 
//Check for errors ( again optional )
if ( curl_errno($ch) ) {
    $result = 'ERROR -> ' . curl_errno($ch) . ': ' . curl_error($ch);
} else {
    $returnCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    switch($returnCode){
        case 200:
            break;
        default:
            $result = 'HTTP ERROR -> ' . $returnCode;
            break;
    }
}
 
//Close the handle
curl_close($ch);
 
//Output the results and time
echo 'Total time for request: ' . $totalTime . "\n";
echo $result; 
SHARE:*/
?>
<?php
$xml = rawurlencode('http://SERVER/PATH?API=RateV4&XML=<RateV4Request USERID="023TAHAR4995" ><Revision/>
     <Package ID="1ST">
          <Service>PRIORITY</Service>
          <ZipOrigination>44106</ZipOrigination>
          <ZipDestination>'.$zip.'</ZipDestination>
          <Pounds>'.$pounds.'</Pounds>
          <Container>NONRECTANGULAR</Container>
          <Size>LARGE</Size>
          <Width>15</Width>
          <Length>30</Length>
          <Height>15</Height>
          <Girth>55</Girth>
     </Package>
</RateV4Request>');
?>-->
<?php

$url = "http://www.some_domain.com";

$post_string = '<?xml version="1.0" encoding="UTF-8"?>
<rootNode>
    <innerNode>
    </innerNode>
</rootNode>';


$header  = "POST HTTP/1.0 \r\n";
$header .= "Content-type: text/xml \r\n";
$header .= "Content-length: ".strlen($post_string)." \r\n";
$header .= "Content-transfer-encoding: text \r\n";
$header .= "Connection: close \r\n\r\n"; 
$header .= $post_string;

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 4);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $header);

$data = curl_exec($ch); 

if(curl_errno($ch))
    print curl_error($ch);
else
    curl_close($ch);

?>