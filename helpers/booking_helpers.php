<?php
set_time_limit(0);
include('../db/config.php');
//include('../db/sql.inc.php');
$select_data = array();
session_start();
$flight_id = $_POST['FlightID'];
$origin = $_POST['Origin'];
$destination = $_POST['Destination'];
$dep_time = $_POST['DepartureDateTime'];
$arv_time = $_POST['ArrivalDateTime'];
$amount = $_POST['amount'];
$track_id = $_POST['track_id'];
$first_name = $_SESSION['username'];
$lastname = "Kumar";//$_POST['lastname'];
$address1 = "sector - 58";//$_POST['address1'];
$address2  = "bishanpura";//$_POST['address2'];
$address3 = "noida";//$_POST['address3'];
$city= "Noida";//$_POST['city'];
$state = "Uttar Pradesh";//$_POST['state'];
$country = "INDIA";//$_POST['country'];
$email = "mishramukul194@gmail.com";//$_POST['email'];
$pincode ="201301";//$_POST['pincode'];
$phone = "8510982602";//$_SESSION['phone'];


$soapUrl = "http://testapi.travarena.com/travarenaws/rws.asmx";
$msg = '<?xml version="1.0" encoding="utf-8"?>
<soapenv:Envelope xmlns:api="http://apiapps.riyawings.com/" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
	  <soapenv:Header/>
	  <soapenv:Body>
		<api:BookReservation>
		  <api:objSecurity>
			<api:WebTerminal>RABLR110000101</api:WebTerminal>
			<api:WebUserName>ANEX02</api:WebUserName>
			<api:WebPassword>ANT123</api:WebPassword>
			<api:WebIp>27.5.2.80</api:WebIp>
			<api:WebAppType>API</api:WebAppType>
		  </api:objSecurity>	
			<api:strBookRequest><![CDATA[<BookReservation>					
				<SellReferenceId>'.$track_id.'</SellReferenceId>
					<CustomerDetails>
						<Title>Mr</Title>
						<Firstname>'.$first_name.'</Firstname>
						<Lastname>'.$lastname.'</Lastname>
						<Address1>'.$address1.'</Address1>
						<Address2>'.$address2.'</Address2>
						<Address3>'.$address3.'</Address3>
						<City>'.$city.'</City>
						<State>'.$state.'</State>
						<Country>'.$country.'</Country>
						<MailId>'.$email.'</MailId>
						<PinCode>'.$pincode.'</PinCode>
						<ContactNo>'.$phone.'</ContactNo>
					</CustomerDetails>
					<NoofAdults>1</NoofAdults>
					<NoofChild>0</NoofChild>
					<NoofInfants>0</NoofInfants>
					<TripType>O</TripType>
					<SegmentType>D</SegmentType>
					<TotalAmount>'.$amount.'</TotalAmount>
					<PaymentMode>CA</PaymentMode>
					<Bookingdetails> 
						<Item>
							<ValidatingCarrier>SG</ValidatingCarrier>
							<Payment>
							<item>
								<CurrencyCode>INR</CurrencyCode>
								<Amount>'.$amount.'</Amount>
							</item>
							</Payment>
							<TourCode></TourCode>
							<Passengerlist>
								<item>
									<PaxType>ADT</PaxType>
									<Title>Mr</Title>
									<FirstName>'.$first_name.'</FirstName>
									<LastName>'.$lastname.'</LastName>
									<DateofBirth>14/04/1983</DateofBirth>
									<Gender>M</Gender>
									<SpecialReqcode></SpecialReqcode>
									<Mealcode>VGML</Mealcode>
									<PassportInfo>
										<IdentityProofId>Passport</IdentityProofId>
										<IdentityProofNumber>ASD11313</IdentityProofNumber>
										<CountryId>IND</CountryId>
										<ExpiryDate>12/03/2021</ExpiryDate>
									</PassportInfo>
									<Segment> 
										<item>
											<FlightID>'.$flight_id.'</FlightID>
											<CarrierId>SG</CarrierId>
											<Origin>'.$origin.'</Origin>
											<Destination>'.$destination.'</Destination>
											<DepartureDateTime>'.$dep_time.'</DepartureDateTime>
											<ArrivalDateTime>'.$arv_time.'</ArrivalDateTime>
											<ClassCode>Economy</ClassCode>
											<FrequentFlyerNumber></FrequentFlyerNumber>
										</item>
									</Segment>
								</item>
							</Passengerlist>
						</Item>
						</Bookingdetails>
					</BookReservation>
			]]>  
			 </api:strBookRequest>

</api:BookReservation>
	</soapenv:Body>
</soapenv:Envelope>';
$url = $soapUrl; 


$headers = array(
	"Content-type: text/xml;charset=\"utf-8\"",
	"Accept: text/xml",
	"Cache-Control: no-cache",
	"Pragma: no-cache",
	"SOAPAction: http://apiapps.riyawings.com/BookReservation", 
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
  $result = simplexml_load_string(sanitizeXml($response));
  print_r($result);die;
  $status = $result->BookReservationResult->Bookingresponse->ResultCode->Status;
  $Description = $result->BookReservationResult->Bookingresponse->ResultCode->Error->Description;
  
  echo json_encode(array("status"=>$status,"description"=>$Description));
  
 
 
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