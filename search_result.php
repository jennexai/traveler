<?php
set_time_limit(0);
include('include/header.php'); 
include('db/config.php');
include('db/sql.inc.php');
$select_data = array();
if(isset($_POST['search'])){
	$originalDate = $_POST['start'];
	$newDate = date("m/d/Y", strtotime($originalDate));

	$options = isset($_POST['options']) ? $_POST['options'] : '0';
	$optionc = isset($_POST['optionc']) ? $_POST['optionc'] : '0';
	$optioni = isset($_POST['optioni']) ? $_POST['optioni'] : '0';

	if(isset($_POST['options']) && $_POST['options']=='+5'){
	 $options=   $_POST['adult'];
	 $select_data['adult'] = $options;
	}
	if(isset($_POST['optionc']) && $_POST['optionc']=='+5'){
	 $optionc=   $_POST['children'];
	 $select_data['children'] = $optionc;
	 
	}
	if(isset($_POST['optioni']) && $_POST['optioni']=='+5'){
	 $optioni=   $_POST['infant'];
	 $select_data['infant'] = $optioni;
	
	}
	$s_date = explode(" ",$_POST['start']);
	$month = $s_date[0];
	$day = str_replace(",","",$s_date[1]);

	switch($month){
		case "January":
		$mth = "01";
		break;
		
		case "February":
		$mth = "02";
		break;
		
		case "March":
		$mth = "03";
		break;
		
		case "April":
		$mth = "04";
		break;
		
		case "May":
		$mth = "05";
		break;
		
		case "June":
		$mth = "06";
		break;
		
		case "July":
		$mth = "07";
		break;
		
		case "August":
		$mth = "08";
		break;
		
		case "September":
		$mth = "09";
		break;
		
		case "October":
		$mth = "10";
		break;
		
		case "November":
		$mth = "11";
		break;
		
		
		case "December":
		$mth = "12";
		break;
		
		default:
		$mth = "1";
		
	}

	if(strlen($day) == 1){
		$day = "0".$day;
	}
	$start_date = $mth."/".$day."/".date("Y");
	$select_data['start_date'] = $start_date;
	 
	$soapUrl = "http://testapi.travarena.com/travarenaws/rws.asmx";
	 $msg = '<?xml version="1.0" encoding="utf-8"?>
		 <soapenv:Envelope xmlns:api="http://apiapps.riyawings.com/" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
	  <soapenv:Header/>
	  <soapenv:Body>
		<api:FlightAvailability>
		  <api:objSecurity>
			<api:WebTerminal>RABLR110000101</api:WebTerminal>
			<api:WebUserName>ANEX02</api:WebUserName>
			<api:WebPassword>ANT123</api:WebPassword>
			<api:WebIp>27.5.2.80</api:WebIp>
			<api:WebAppType>API</api:WebAppType>
		  </api:objSecurity>
		  <api:strAvailability>
			<![CDATA[
				<Availability><SegmentType>D</SegmentType>
				<TripType>O</TripType>
				<Itineary><Item><Origin>'.$_POST['fprm'].'</Origin>
				<Destination>'.$_POST['to'].'</Destination>
				<Date>'.$start_date.'</Date>
				</Item></Itineary>
				<AirlineIdentification><AirlineId>SG</AirlineId></AirlineIdentification>
				<Paxreference><Adults>'.$_POST['adult'].'</Adults><Childs>2</Childs><Infants>1</Infants></Paxreference>
				<HostAccess>Y</HostAccess><ClassType>Economy</ClassType><FareType>N</FareType></Availability>]]>
		  </api:strAvailability>
		</api:FlightAvailability>
	  </soapenv:Body>
	  </soapenv:Envelope>';
	  $url = $soapUrl; 
	  
	  $headers = array(
			"Content-type: text/xml;charset=\"utf-8\"",
			"Accept: text/xml",
			"Cache-Control: no-cache",
			"Pragma: no-cache",
			"SOAPAction: http://apiapps.riyawings.com/FlightAvailability", 
			"Content-length: ".strlen($msg),
		); 
		
	  $ch = curl_init();
	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	  curl_setopt( $ch, CURLOPT_URL, trim($url) );
	  curl_setopt( $ch, CURLOPT_POST, true );
	  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
				
	  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	  curl_setopt( $ch, CURLOPT_POSTFIELDS, $msg );
	  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	  $response = curl_exec($ch);
 
}
?>
 <script src="js/jquery.js"></script>

       <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="#">United States</a>
                </li>
                <li><a href="#">New York (NY)</a>
                </li>
                <li><a href="#">New York City</a>
                </li>
                <li class="active">New York City Flights</li>
            </ul>
            <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
                <h3>Search for Flight</h3>
                <form>
                    <div class="tabbable">
                        <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                            <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                            </li>
                            <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="flight-search-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-highlight"></i>
                                            <label>From</label>
                                            <input class="typeahead form-control" placeholder="City, Airport or U.S. Zip Code" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-highlight"></i>
                                            <label>To</label>
                                            <input class="typeahead form-control" placeholder="City, Airport or U.S. Zip Code" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="input-daterange" data-date-format="MM d, D">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Departing</label>
                                                <input class="form-control" name="start" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Returning</label>
                                                <input class="form-control" name="end" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-lg form-group-select-plus">
                                                <label>Passengers</label>
                                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="radio" name="options" />1</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />2</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />3</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />4</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />5</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />5+</label>
                                                </div>
                                                <select class="form-control hidden">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option selected="selected">6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="flight-search-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-highlight"></i>
                                            <label>From</label>
                                            <input class="typeahead form-control" placeholder="City, Airport or U.S. Zip Code" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-highlight"></i>
                                            <label>To</label>
                                            <input class="typeahead form-control" placeholder="City, Airport or U.S. Zip Code" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                            <label>Departing</label>
                                            <input class="date-pick form-control" data-date-format="MM d, D" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-select-plus">
                                            <label>Passengers</label>
                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="options" />1</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />2</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />3</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />4</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />5</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />5+</label>
                                            </div>
                                            <select class="form-control hidden">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option selected="selected">6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Search for Flights</button>
                </form>
            </div>
            <h3 class="booking-title">12 Flights from London to New York on Mar 22 for 1 adult <small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a></small></h3>
            <div class="row">
                <div class="col-md-3">
                    <form class="booking-item-dates-change mb30">
                        <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                            <label>From</label>
                            <input class="typeahead form-control" value="Great Britan, London" placeholder="City, Hotel Name or U.S. Zip Code" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                            <label>To</label>
                            <input class="typeahead form-control" value="United States, New York" placeholder="City, Hotel Name or U.S. Zip Code" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                            <label>Departing</label>
                            <input class="date-pick form-control" data-date-format="MM d, D" type="text" />
                        </div>
                        <div class="form-group form-group-select-plus">
                            <label>Passengers</label>
                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options" />1</label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="options" />2</label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="options" />3</label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="options" />4</label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="options" />4+</label>
                            </div>
                            <select class="form-control hidden">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option selected="selected">5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                            </select>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Upadte Search" />
                    </form>
                    <aside class="booking-filters text-white">
                        <h3>Filter By:</h3>
                        <ul class="list booking-filters-list">
                            <li>
                                <h5 class="booking-filters-title">Stops <small>Price from</small></h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Non-stop<span class="pull-right">$215</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />1 Stop<span class="pull-right">$154</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />2+ Stops<span class="pull-right">$197</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Price </h5>
                                <input type="text" id="price-slider">
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Flight Class <small>Price from</small></h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Economy<span class="pull-right">$154</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Business<span class="pull-right">$316</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />First<span class="pull-right">$450</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Airlines <small>Price from</small></h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Lufthansa<span class="pull-right">$215</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />American Airlines<span class="pull-right">$350</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Airfrance<span class="pull-right">$154</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Croatia Airlines<span class="pull-right">$197</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Delta<span class="pull-right">$264</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Air Canada<span class="pull-right">$445</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Departure Time</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Morning (5:00a - 11:59a)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Afternoon (12:00p - 5:59p)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Evening (6:00p - 11:59p)</label>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="nav-drop booking-sort">
                        <h5 class="booking-sort-title"><a href="#">Sort: Sort: Price (low to high)<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
                        <ul class="nav-drop-menu">
                            <li><a href="#">Price (high to low)</a>
                            </li>
                            <li><a href="#">Duration</a>
                            </li>
                            <li><a href="#">Stops</a>
                            </li>
                            <li><a href="#">Arrival</a>
                            </li>
                            <li><a href="#">Departure</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="booking-list">
<?php
	$xml = $response;//file_get_contents("judd.xml"); 
	$fData= simplexml_load_string(sanitizeXml($xml));
	//echo "<pre>";print_r($fData);die;
	$track_id = $fData->FlightAvailabilityResult->AvailabilityResponse->TrackId;
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
	
 	$array = $fData->FlightAvailabilityResult->AvailabilityResponse->ItinearyDetails->Items;
	 
?>

                  <?php   foreach ($array as $data) { ?>
                        <li>
						
                            <div class="booking-item-container">
                                <div class="booking-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="booking-item-airline-logo">
                                                <img src="img/american-airlines.jpg" alt="Image Alternative text" title="Image Title" />
                                                <p>American Airlines (flight ID - <?php echo $data->FlightDetails[0]->FlightID; ?>)</p>
												<?php 
													$select_data['flight_id'] = $data->FlightDetails[0]->FlightID;
												?>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="booking-item-flight-details">
                                                <div class="booking-item-departure"><i class="fa fa-plane"></i>
                                                 <?php 
														$datetime =explode(' ', $data->FlightDetails[0]->DepartureDateTime);
														$time = date("g:i A", strtotime($datetime[1]));
														$var = $datetime[0];
														$date = str_replace('/', '-', $var);
														$originalDate = date('Y-m-d', strtotime($date));
														$newDate = date("jS M Y", strtotime($originalDate));
                                                ?>
                                                    <h5><?php echo $time;?></h5>
                                                    <p class="booking-item-date"><?php echo $newDate;?></p>
                                                    <p class="booking-item-destination">
														<?php 														
															$sqlorg = $con->query("SELECT * FROM  `tbl_citycode` WHERE `code`='".$data->FlightDetails[0]->Origin."'") or  die(mysqli_error($con)); 
															$dataorg=$sqlorg->fetch_assoc();
															echo $dataorg['value'];
														?>
                                                    </p>
                                                </div>
                                                <div class="booking-item-arrival"><i class="fa fa-plane fa-flip-vertical"></i>
												   <?php 
														$datetime1 =explode(' ', $data->FlightDetails[0]->ArrivalDateTime);
														$time1 = date("g:i A", strtotime($datetime1[1]));
														$var1 = $datetime1[0];
														$date1 = str_replace('/', '-', $var1);
														$originalDate1 = date('Y-m-d', strtotime($date1));
														$newDate1 = date("jS M Y", strtotime($originalDate1));
													?>
                                                    <h5><?php echo $time1;?></h5>

                                                    <p class="booking-item-date"><?php echo $newDate1;?></p>
                                                    <p class="booking-item-destination">
														<?php 
															$sqldes = $con->query("SELECT * FROM  `tbl_citycode` WHERE `code`='".$data['FlightDetails']['Destination']."'") or  die(mysqli_error($con)); 
															$rowcount=mysqli_num_rows($sqldes);
															$datades=$sqldes->fetch_assoc();
															echo $datades['value'];
														?>
													</p>
												</div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <h5><?php echo $data->FlightDetails[0]->Duration;?></h5>
                                            <p>non-stop </p>
                                        </div>
                                        <div class="col-md-3"><span class="booking-item-price" style="font-size: 34px !important;"><?php echo $data->FareDescription->PaxFareDetails[0]->OtherInfo->GrossAmount;?></span><span>/person</span>
                                            <p class="booking-item-flight-class">Class: Economy</p>
											<a class="popup-text btn btn-primary login_check_status" id="
												<?php echo $track_id."-".$data->FlightDetails[0]->FlightID."-".$_POST['fprm']."-".$_POST['to']."-".$start_date."-".$data->FareDescription->PaxFareDetails[0]->OtherInfo->GrossAmount;?>" href="#custom_login" data-effect="mfp-zoom-out">Select</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-item-details">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>Flight Details</p>
                                            <h5 class="list-title"><?php echo $dataorg['value']." to ".$datades['value'];?></h5>
                                            <ul class="list">
                                                <li>FlightNum : <?php echo $data->FlightDetails[0]->FlightNum; ?></li>
                                                <li>Economy / Coach Class ( M), AIRBUS INDUSTRIE A330-300</li>
                                                <li>Depart <?php echo $time;?> Arrive <?php echo $time1;?></li>
                                               
                                            </ul>
                                             
                                            <p>Total trip time: <?php echo $data->FlightDetails[0]->Duration?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                      
                    </ul>
                    <p class="text-right">Not what you're looking for? <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Try your search again</a>
                    </p>
                </div>
            </div>
            <div class="gap"></div>
        </div>



        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="index.html">
                            <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*We Never Send Spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer">
                            <li><a href="#">About US</a>
                            </li>
                            <li><a href="#">Press Centre</a>
                            </li>
                            <li><a href="#">Best Price Guarantee</a>
                            </li>
                            <li><a href="#">Travel News</a>
                            </li>
                            <li><a href="#">Jobs</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                            <li><a href="#">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+1-202-555-0173</h4>
                        <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
			
			<!-- custom login modal start -->
			<div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" style='background-color:#ed8323;border-radius:20px 0px 20px 0px' id="custom_login">
			<div class="row">
				  <div class='col-md-12'>
					 <div class="col-md-2">
					    <img src="img/logo.png" style="margin-top:12px;height:50px;width:110px">
					</div>
					<div class="col-md-10 pull-right">
						<br><center><h3 id="login_status">Checking login info.please wait....<img src="img/loading.gif" style="height:30px;width:30px"></h3></center>
						
					</div>					
				</div>
				</div>
			</div>
			<!-- custom login ends -->
			
			
			
			
        </footer>

       
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>
		<script src="js/customizer.js"></script>	
		
    </div>
</body>

</html>

<script>
$(document).ready(function(){
	$(".login_check_status").on("click", function(e){
			e.preventDefault();		
			var dataString = $(this).attr("id");
			$.ajax({
				url:"helpers/login_helper.php",
				type:"post",
				data:"selected_flight_data="+dataString+"&check_status=1",
				success:function(resp){				 
					setTimeout(function(){
						if(resp == 1){
							$("#login_status").text("Redirecting.....");
							setTimeout(function(){
								window.location.href="user-profile-wishlist.php";
							},500);
						}else{
							$("#login_status").html("Not logged in. redirecting to login page.");
							setTimeout(function(){
								window.location.href="login-register.php";
							},500);
						}
						
					},1000);
					
				}
			})
			
	})
})
	
</script>