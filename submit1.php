<?php
include "config.php";
include "payment.php";

$payment_method=mysql_connect("localhost","root","");
    $pay=mysql_select_db("traveler",$payment_method);



    if (isset($_POST['Submit'])) {      
    	$s=$_POST['loops'];               

   for($i=1;$i<=$s;$i++){
    $Submit="";
        print_r($_POST);
        $sex=$_POST['sex'.$i];
        $udf1=$_POST['udf1'.$i];
        $Surname=$_POST['Surname'.$i];
        $date_of_birth=$_POST['date_of_birth'.$i];
        $Citizenship=$_POST['Citizenship'.$i];
        $document_series=$_POST['document_series'.$i];
        $expiry_Date=$_POST['expiry_Date'.$i];
        $udf2=$_POST['udf2'.$i];
        $udf3=$_POST['udf3'.$i];
        $udf4=$_POST['udf4'.$i];
        $amount=$_POST['amount'.$i];

$in="INSERT INTO `tbl_passengers`(`gender`,`name`,`surname`,`date_of_birth`,`citizenship`,`document_series`,`expiry_date`,`email_id`,`mobile_no`,`billing_adress`,`amount`) VALUES ('$sex','$udf1','$Surname','$date_of_birth','$Citizenship','$document_series','$expiry_Date','$udf2','$udf3','$udf4','$amount')";
    $query=mysql_query($in) or die(mysql_error()) ;
    // echo $in;


 }}
 if (isset($_POST['Submit'])) {      
    	$r=$_POST['loop1'];               

   for($i=1;$i<=$r;$i++){
    $Submit="";
        print_r($_POST);
        $sex=$_POST['sex_c'.$i];
        $udf1=$_POST['udf1_c'.$i];
        $Surname=$_POST['Surname_c'.$i];
        $date_of_birth=$_POST['date_of_birth_c'.$i];
        $Citizenship=$_POST['Citizenship_c'.$i];
        $document_series=$_POST['document_series_c'.$i];
        $expiry_Date=$_POST['expiry_Date_c'.$i];
        $udf2=$_POST['udf2_c'.$i];
        $udf3=$_POST['udf3_c'.$i];
        $udf4=$_POST['udf4_c'.$i];
        $amount=$_POST['amount_c'.$i];

$insert_row="INSERT INTO `tbl_passengers`(`gender`,`name`,`surname`,`date_of_birth`,`citizenship`,`document_series`,`expiry_date`,`email_id`,`mobile_no`,`billing_adress`,`amount`) VALUES ('$sex','$udf1','$Surname','$date_of_birth','$Citizenship','$document_series','$expiry_Date','$udf2','$udf3','$udf4','$amount')";
    $query=mysql_query($insert) or die(mysql_error()) ;
    // echo $in;
}}

if (isset($_POST['Submit'])) {      
    	$p=$_POST['loop2'];               

   for($i=1;$i<=$p;$i++){
    $Submit="";
        print_r($_POST);
        $sex=$_POST['sex_s'.$i];
        $udf1=$_POST['udf1_s'.$i];
        $Surname=$_POST['Surname_s'.$i];
        $date_of_birth=$_POST['date_of_birth_s'.$i];
        $Citizenship=$_POST['Citizenship_s'.$i];
        $document_series=$_POST['document_series_s'.$i];
        $expiry_Date=$_POST['expiry_Date_s'.$i];
        $udf2=$_POST['udf2_s'.$i];
        $udf3=$_POST['udf3_s'.$i];
        $udf4=$_POST['udf4_s'.$i];
        $amount=$_POST['amount'.$i];

$insert="INSERT INTO `tbl_passengers`(`gender`,`name`,`surname`,`date_of_birth`,`citizenship`,`document_series`,`expiry_date`,`email_id`,`mobile_no`,`billing_adress`,`amount`) VALUES ('$sex','$udf1','$Surname','$date_of_birth','$Citizenship','$document_series','$expiry_Date','$udf2','$udf3','$udf4','$amount')";
    $query=mysql_query($insert) or die(mysql_error()) ;
    // echo $in;
      }}
class ProcessPayment {
	
	function __construct(){
		$this->paymentConfig = new payment_config();
	}
	
	function requestMerchant(){
		$payment = new payment();
		$datenow = date("d/m/Y h:m:s");
		$modifiedDate = str_replace(" ", "%20", $datenow);
		$payment->url = $this->paymentConfig->Url;
		$postFields  = "";
		$postFields .= "&login=".$this->paymentConfig->Login;
		$postFields .= "&pass=".$this->paymentConfig->Password;
		$postFields .= "&ttype=".$_POST['TType'];
		$postFields .= "&prodid=".$_POST['product'];
		$postFields .= "&amt=".$_POST['amount'];
		$postFields .= "&txncurr=".$this->paymentConfig->TxnCurr;
		$postFields .= "&txnscamt=".$this->paymentConfig->TxnScAmt;
		$postFields .= "&clientcode=".urlencode(base64_encode($_POST['clientcode']));
		$postFields .= "&txnid=".rand(0,999999);
		$postFields .= "&date=".$modifiedDate;
		$postFields .= "&custacc=".$_POST['AccountNo'];
		$postFields .= "&ru=".$_POST['ru'];
		// Not required for merchant
		//$postFields .= "&bankid=".$_POST['bankid'];

		$sendUrl = $payment->url."?".substr($postFields,1)."\n";

		$this->writeLog($sendUrl);
		
		$returnData = $payment->sendInfo($postFields);
		$this->writeLog($returnData."\n");
		$xmlObjArray     = $this->xmltoarray($returnData);

		$url = $xmlObjArray['url'];
		$postFields  = "";
		$postFields .= "&ttype=".$_POST['TType'];
		$postFields .= "&tempTxnId=".$xmlObjArray['tempTxnId'];
		$postFields .= "&token=".$xmlObjArray['token'];
		$postFields .= "&txnStage=1";
		$url = $payment->url."?".$postFields;
		$this->writeLog($url."\n");
		header("Location: ".$url);
		
	}

	function writeLog($data){
		$fileName = date("Y-m-d").".txt";
		$fp = fopen("log/".$fileName, 'a+');
		$data = date("Y-m-d H:i:s")." - ".$data;
		fwrite($fp,$data);
		fclose($fp);
	}

	function xmltoarray($data){
		$parser = xml_parser_create('');
		xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8"); 
		xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
		xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
		xml_parse_into_struct($parser, trim($data), $xml_values);
		xml_parser_free($parser);
		
		$returnArray = array();
		$returnArray['url'] = $xml_values[3]['value'];
		$returnArray['tempTxnId'] = $xml_values[5]['value'];
		$returnArray['token'] = $xml_values[6]['value'];

		return $returnArray;
	}
}

$processPayment = new ProcessPayment();
$processPayment->requestMerchant();
?>