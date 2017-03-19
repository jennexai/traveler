  <?php 
  if(isset($_POST['search'])){
   $originalDate = $_POST['start'];
$newDate = date("m/d/Y", strtotime($originalDate));

$options = isset($_POST['options']) ? $_POST['options'] : '0';
$optionc = isset($_POST['optionc']) ? $_POST['optionc'] : '0';
$optioni = isset($_POST['optioni']) ? $_POST['optioni'] : '0';

if(isset($_POST['options']) && $_POST['options']=='+5'){
 $options=   $_POST['adult'];
}
if(isset($_POST['optionc']) && $_POST['optionc']=='+5'){
 $optionc=   $_POST['children'];
}
if(isset($_POST['optioni']) && $_POST['optioni']=='+5'){
 $optioni=   $_POST['infant'];
}

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
            <Itineary><Item><Origin>'.$_POST['fprmshort'].'</Origin>
            <Destination>'.$_POST['toshort'].'</Destination>
            <Date>'.$newDate.'</Date>
            </Item></Itineary>
            <AirlineIdentification><AirlineId>6E</AirlineId></AirlineIdentification>
            <Paxreference><Adults>'.$options.'</Adults><Childs>'.$optionc.'</Childs><Infants>'.$optioni.'</Infants></Paxreference>
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
    
                    ); //SOAPAction: your op URL
 $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt( $ch, CURLOPT_URL, trim($url) );
  curl_setopt( $ch, CURLOPT_POST, true );
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            
 curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
  curl_setopt( $ch, CURLOPT_POSTFIELDS, $msg );
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec($ch);
  if ($response === false) $response = curl_error($ch);
  curl_close($ch);
            echo '<pre>';
  print_r($response);
  
  }

  ?>
     <div class="container">    
            <h1 class="page-title">Search for Flights</h1>
        </div>


<script type="text/javascript">
    function validate() {
        var adult  = $('input[name="options"]:checked', '#myForm').val();
        var child  = $('input[name="optionc"]:checked', '#myForm').val();
        var infant = $('input[name="optioni"]:checked', '#myForm').val();
        var mobile = $('#mobile').val();
        var email = $('#email').val();
        var locfrom = $('#fprm').val();
        var locto = $('#to').val();
       

  if(locationfrom(locfrom))
   {
    if(locationto(locto))
     {
      if(mobileno(mobile))
        {
         if(emailid(email))
           { 
           if(passengerdata(adult,child,infant))
             {
return true;
             } 
           }
        }
     }
   }
return false;
        
    }

/* -------------passenger----------------*/
    function passengerdata(adult,child,infant){
        if(adult == undefined  && child == undefined && infant == undefined){
        $('#passerror').text('Please select No of passengers');
        return false;
        }
        else{
        $('#passerror').text('');
        return true;
        }
    }
/* -------------MOBILE NO----------------*/
    function mobileno(no){
        var numbers = /^[0-9]+$/;
        if(no =='')
        {
         $('#moberror').text('Enter Mobile NO');
         return false;
        }
        else
        {
            if(no.match(numbers)){
            $('#moberror').text('');
            return true;
           }else{
             $('#moberror').text('Must have numeric only');
            return false;
           }
        
        }
     }

     /* -------------Email NO----------------*/
    function emailid(id){
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(id =='')
        {
          $('#emailerror').text('Enter Email id');
          return false;
        }
        else
        {
            if(id.match(mailformat)){
            $('#emailerror').text('');
            return true;
           }else{
             $('#emailerror').text('Must have valid Email');
            return false;
           }
         
        }
     }

      /* -------------location From----------------*/
    function locationfrom(from){
          if(from==''){
            $('#locationfromerror').text('Enter Departing Location');
            return false;
           }else{
             $('#locationfromerror').text('');
            return true;
           }  
     }

      /* -------------location to----------------*/
    function locationto(to){
          if(to==''){
            $('#locationtoerror').text('Enter Arriving Location');
            return false;
           }else{
             $('#locationtoerror').text('');
            return true;
           }  
     }

function getmore(value) {

    if(value=='adult'){
     $('#adultmore').show();
     $('#adultless').hide();     

    }else if(value=='child'){
       $('#childmore').show();
       $('#childless').hide();
    }else if(value=='infant'){
     $('#infantmore').show();
     $('#infantless').hide();
    }
    
}
 
</script>
<!-- flight-payment.php -->
        <div class="container">
            <form method="post" action="" id="myForm" onsubmit="return validate1();" autocomplete="off">
            
                <div class="tabbable">
                    <ul class="nav nav-pills nav-sm nav-no-br mb10" id="myTab">
                        <li class="active"><a href="#" data-toggle="tab" onclick="get_trip('round')">Round Trip</a>
                        </li>
                        <li><a href="#flight-search-2" onclick="get_trip('one');" data-toggle="tab" name="trip" value="round-trip">One Way</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="flight-search-1">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                        <label>From</label>
                                        <input class="form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text" / name="fprm" id="fprm">
                                        <input type="hidden" id="fprmshort" name="fprmshort">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                        <label>To</label>
                                        <input class="form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text" / name="to" id="to">
                                        <input type="hidden" id="toshort" name="toshort">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-daterange" data-date-format="MM d, D">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                                    <label>Departing</label>
                                                    <input class="form-control" name="start" type="text" / >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div  id="returntrip" class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                                    <label>Returning</label>
                                                    <input class="form-control" name="end" type="text" / >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                </div>
                                 <div class="row">
                                <div class="col-md-3"><span id="locationfromerror" style="color:red;"></span></div>
                                <div class="col-md-3"><span id="locationtoerror" style="color:red;"></span></div>
                                </div>
<!-- passenger start-->
                                <div class="row">
                                  <div class="col-md-2">
                                  <div  id="returntrip" class="form-group form-group-icon-left"><i class="fa fa-phone input-icon input-icon-hightlight"></i>
                                                    <label>Mobile No</label>
                                                    <input class="form-control" name="mobile"  id="mobile" type="text" / >
                                                </div>
                             </div>
                             <div class="col-md-2">
                                  <div  id="returntrip" class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-hightlight"></i>
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" id="email" type="text" / >
                                                </div>
                             </div>

                                    <div class="col-md-2">
                                        <!-- <label >Passengers</label> -->
                                        <label style="margin-left:10px;">Adult</label>
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons" id="adultless" >
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" value="1" />1</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" value="2" />2</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" value="3"/>3</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" value="4" />4</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" value="5"/>5</label>
                                            <label class="btn btn-primary" onclick="getmore('adult');">
                                                <input type="radio" name="options" value="5+" />5+</label>
                                        </div>
                                        <input type="hidden" name="ad" value="+5">
                                     <select name="adult" id="adultmore" class="form-control" style="display: none;">
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

                                   
                                    <div class="col-md-2">
                                        
                                      <label >children</label>
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons" id="childless">
                                            <label class="btn btn-primary ">
                                                <input type="radio" name="optionc" value="1"/>1</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionc" value="2"/>2</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionc" value="3" />3</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionc"  value="4"/>4</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionc" value="5" />5</label>
                                            <label class="btn btn-primary" onclick="getmore('child');">
                                                <input type="radio" name="optionc" value="5+"  />5+</label>
                                        </div>
                                        <select name="children" class="form-control" id="childmore" style="display: none;">
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
                                      

                                    <div class="col-md-2">
                                        
                                        <label >Infants</label> 
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons" id="infantless">
                                            <label class="btn btn-primary ">
                                                <input type="radio" name="optioni" value="1"/>1</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optioni" value="2"/>2</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optioni" value="3"/>3</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optioni" value="4"/>4</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optioni" value="5"/>5</label>
                                            <label class="btn btn-primary" onclick="getmore('infant');">
                                                <input type="radio" name="optioni" value="5+"  />5+</label>
                                        </div>
                                        <select class="form-control"  name="infant" id="infantmore" style="display: none;">
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
                             <div class="row">
                             <div class="col-md-2"><span id="moberror" style="color:red;"></span></div>
                             <div class="col-md-2"><span id="emailerror" style="color:red;"></span></div>
                             <div class="col-md-3"><span id="passerror" style="color:red;"></span></div>
                             </div>
                 <!-- passenger end-->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="flight-search-2">
                            <!-- <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                        <label>To</label>
                                        <input class="typeahead form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                        <label>Departing</label>
                                        <input class="date-pick form-control" data-date-format="MM d, D" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-group-select-plus">
                                        <label>Passengers</label>

                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="optionsp" value="1" />1</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionsp" value="2" />2</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionsp" value="3" />3</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionsp" value="4" />4</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionsp" value="5"  />5</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionsp" value="5+"/>5+</label>
                                        </div>
                                        <select class="form-control hidden" name="second">
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
                            </div> -->
                    
                    </div>
                </div>
                <input type="hidden" name="trip" id="trip" value="round">
                 <input type="hidden" name="transaction_id" id="transaction_id" value="">
                <input type="hidden" name="pnr">
                <input type="hidden" name="p_status">
                <input type="hidden" name="status" value="0">
                <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2"><input class="btn btn-primary mt10" type="submit" value="Search for Flights" name="search" /></div>
                </div>
                
            </form>

            <div class="gap gap-small"></div>
            <h3 class="mb20">Popular Flight Destinations</h3>
            <div class="row row-wrap">
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Gaviota en el Top" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>New York City Hotels</h5>
                                    <p>70674 reviews</p>
                                    <p class="mb0">976 offers from $71</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Sydney Harbour" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Sydney Hotels</h5>
                                    <p>67274 reviews</p>
                                    <p class="mb0">916 offers from $99</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Street" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Disney World Hotels</h5>
                                    <p>64071 reviews</p>
                                    <p class="mb0">970 offers from $98</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/400x300.png" alt="Image Alternative text" title="the journey home" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Seattle Hotels</h5>
                                    <p>67106 reviews</p>
                                    <p class="mb0">906 offers from $66</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="lack of blue depresses me" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Miami Hotels</h5>
                                    <p>79488 reviews</p>
                                    <p class="mb0">662 offers from $59</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="waipio valley" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Sydney Hotels</h5>
                                    <p>79819 reviews</p>
                                    <p class="mb0">632 offers from $98</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Virginia Beach Hotels</h5>
                                    <p>67537 reviews</p>
                                    <p class="mb0">1000 offers from $51</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Atlantic City Hotels</h5>
                                    <p>55827 reviews</p>
                                    <p class="mb0">836 offers from $53</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Viva Las Vegas" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Las Vegas</h5>
                                    <p>63292 reviews</p>
                                    <p class="mb0">764 offers from $58</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="El inevitable paso del tiempo" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Budapest</h5>
                                    <p>77463 reviews</p>
                                    <p class="mb0">488 offers from $69</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="new york at an angle" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Boston</h5>
                                    <p>61154 reviews</p>
                                    <p class="mb0">799 offers from $82</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="196_365" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Paris</h5>
                                    <p>61550 reviews</p>
                                    <p class="mb0">813 offers from $68</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>

<script type="text/javascript">
    function get_trip(val){

        if(val=='one'){ $('#trip').val('oneway'); $('#returntrip').hide(); }
        if(val=='round'){ $('#trip').val('round'); $('#returntrip').show();}

    }

    
</script>
<script>

   
/*
jQuery("#fprm").autocomplete({
      minLength: 2,
        delay : 400,
      source: function(request, response) { 

        jQuery.ajax({
           url:    "search.php",
           data:  {
                mode : "ajax",
                component : "consearch",
                searcharg : "company",
                task : "display",
                limit : 15,
                term : request.term
            },
           dataType: "json",

           success: function(data)  {

           response(data);
          } 

        })
       },

       select:  function(e, ui) {
        var keyvalue = ui.item.value;
        alert("Customer number is " + keyvalue); 

      }
    });*/
</script>