<?php
session_start();
set_time_limit(0);
include('../db/config.php');
//include('../db/sql.inc.php');
$pnr = str_replace("","",microtime());
$pnr = str_replace(".","",$pnr);
$pnr = str_replace(" ","",$pnr);
$pnr = substr($pnr,2,11);
$pnr = "TR".$pnr;

mysqli_query($con,"INSERT into temp_reservation set 
	track_id='".$_POST['track_id']."',
	flight_id='".$_POST['flight_id']."',
	boarding_from='".$_POST['origin']."',
	boarding_to='".$_POST['detiny']."',
	phone='".$_SESSION['mobile']."',
	boarding_date='".$_POST['start_date']."',
	amount='".$_POST['gAmount']."',
	pnr='".$pnr."',
	pnr_status='temp',
	payment_status='pending',
	status='pending'
");
$_SESSION['id'] = mysqli_insert_id($con);
$_SESSION['pnr'] = $pnr;
echo "
	<br><br><div class='alert alert-success' style='font-size:13px'>
		<center><strong>Sell request Completede : </strong> PNR obtained.
		<br>
		PNR : <strong style='color:red'>$pnr </strong> <br>(Inactive now. it will be activated after payment done successfully!).
		PNR and all boarding detail will be sent to <i>$email</i>. 		
		<br>
		Proceeding to payment gateway for payment of <b>$amount</b>
		<br><br>
		<button class='btn btn-success' id='pay_now'>Proceed to payment</button>
	</div>
	";
	die;
$track_id 		= $_POST['track_id'];//"RA7A6A87C5A06542369A1E85C7984F144420170313002524";
$flight_id 		= $_POST['flight_id'];//"8263";
$origin 		= $_POST['origin'];//"BDQ";
$destination 	= $_POST['destiny'];//"JAI";
$start_data 	= $_POST['start_date'];//"13/03/2017 16:10";
$end_date 		= "19/03/2017 18:10";

$soapUrl = "http://testapi.travarena.com/travarenaws/rws.asmx";
$msg = '<?xml version="1.0" encoding="utf-8"?>
<soapenv:Envelope xmlns:api="http://apiapps.riyawings.com/" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
	  <soapenv:Header/>
	  <soapenv:Body>
		<api:SellRequest>
		  <api:objSecurity>
			<api:WebTerminal>RABLR110000101</api:WebTerminal>
			<api:WebUserName>ANEX02</api:WebUserName>
			<api:WebPassword>ANT123</api:WebPassword>
			<api:WebIp>45.115.189.104</api:WebIp>
			<api:WebAppType>API</api:WebAppType>
		  </api:objSecurity>	
			<api:strSellRequest><![CDATA[
			<SellRequest>
				<TrackId>'.$track_id.'</TrackId>
				<TripType>O</TripType>
				<SegmentType>D</SegmentType>
				<NoofAdults>1</NoofAdults>
				<NoofChild>0</NoofChild>
				<NoofInfants>0</NoofInfants>
				<ItinearyDetails> 
					<Segments> 
							<item>
								<FlightID>'.$flight_id.'</FlightID>
								<CarrierId>SG</CarrierId>
								<Origin>'.$origin.'</Origin>
								<Destination>'.$destination.'</Destination>
								<DepartureDateTime>'.$start_date.'</DepartureDateTime>
								<ArrivalDateTime>'.$end_date.'</ArrivalDateTime>
								<ClassCode>Economy</ClassCode>
							</item>
					</Segments>
				</ItinearyDetails>
			</SellRequest>
			]]>  
		</api:strSellRequest>
	</api:SellRequest>
  </soapenv:Body>
</soapenv:Envelope>';

$url = $soapUrl; 


$headers = array(
	"Content-type: text/xml;charset=\"utf-8\"",
	"Accept: text/xml",
	"Cache-Control: no-cache",
	"Pragma: no-cache",
	"SOAPAction: http://apiapps.riyawings.com/SellRequest", 
	"Content-length: ".strlen($msg),
); 
	
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt( $ch, CURLOPT_URL, trim($url) );
  curl_setopt( $ch, CURLOPT_POST, true );
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
  curl_setopt( $ch, CURLOPT_POSTFIELDS, trim($msg));
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec($ch);  
  $sell_response= simplexml_load_string(sanitizeXml($response));
  //print_r($sell_response);die;
  
  $data = array();
  
  $status 	=  $sell_response->SellRequestResult->SellResponse->ResultCode->Status;  
  $segments =  $sell_response->SellRequestResult->SellResponse->ItinearyDetails->Segments->item;
  $amount	=  $sell_response->SellRequestResult->SellResponse->ItinearyDetails->Segments->FareDescription->PaxFareDetails->OtherInfo->GrossAmount;
 
  $data['status'] 	= $status;
  $data['segments'] = $segments;
  $data['amount'] 	= $amount;
  $data['status'] 	= $status;
  $data['track_id'] = $sell_response->SellRequestResult->SellResponse->SellReferenceId;
   
  echo json_encode($data);
  

function sanitizeXml($xml){		
	$xml = str_replace('&lt;?xml version="1.0" encoding="utf-8" standalone="no"?&gt;',"",$xml);
	$xml = str_replace('?0" >',"",$xml);  
	$xml = str_replace("&lt;","<",$xml);
	$xml = str_replace("&gt;",">",$xml);
	
	$xml = str_replace('soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"',"",$xml);
	$xml = str_replace('< xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">',"",$xml);
	
	$xml = str_replace("<soap:Body>","",$xml);
	$xml = str_replace("</soap:Envelope>","",$xml);
	$xml = str_replace("</soap:Body>","",$xml);
	$xml = str_replace("</soap:Envelope>","",$xml);
	$xml = str_replace('?0" encoding="utf-8"?','?xml version="1.0" encoding="utf-8"?',$xml);
	return $xml;
}