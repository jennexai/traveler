<?php
include "config.php";
include "payment.php";

include("db/config.php");
include("db/sql.inc.php");



    if (isset($_POST['Submit'])) {      
    	// $s=$_POST['loops'];
    	// $r=$_POST['loop1'];               
       //   $p=$_POST['loop2']; 
    	
         $s=isset($_POST['loops']) ? $_POST['loops'] : '0';
         $r=isset($_POST['loop1']) ? $_POST['loop1'] : '0';
         $p=isset($_POST['loop2']) ? $_POST['loop2'] : '0';
         
    	

   for($i=1;$i<=$s;$i++){

    $form_data = array(
		'gender'=>$_POST['sex'.$i],
		'name'=>$_POST['name'.$i],
		'surname'=>$_POST['Surname'.$i],
		'date_of_birth'=>$_POST['date_of_birth'.$i],
		'type'=>'adult',
		'order_id'=> $_POST['orderid'],
       );
    
      $sql = dbRowInsert('tbl_passengers', $form_data,$con);
   }
           

   for($i=1;$i<=$r;$i++){
   	 
	   $form_data = array(
		        'gender'=>$_POST['sex_c'.$i],
				'name'=>$_POST['name_c'.$i],
				'surname'=>$_POST['Surname_c'.$i],
				'date_of_birth'=>$_POST['date_of_birth_c'.$i],
				'type'=>'children',
				'order_id'=> $_POST['orderid'],
		     );
    $sql = dbRowInsert('tbl_passengers', $form_data,$con);
}

   for($i=1;$i<=$p;$i++){
   
    $form_data = array(
        'gender'=>$_POST['sex_i'.$i],
		'name'=>$_POST['name_i'.$i],
		'surname'=>$_POST['Surname_i'.$i],
		'date_of_birth'=>$_POST['date_of_birth_i'.$i],	
		'type'=>'infants',
		'order_id'=> $_POST['orderid'],
        );
     $sql = dbRowInsert('tbl_passengers', $form_data,$con);
   
      }




  header('location:success.php');
  }
?>