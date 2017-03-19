 <?php
  include('db/config.php');
   include('db/sql.inc.php');
$searchTerm = $_GET['term'];
  $query = $con->query("SELECT * FROM tbl_citycode WHERE value LIKE '%".$searchTerm."%' ORDER BY code ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = array(
         'label' => $row['value']
        , 'value' => $row['citycode']
    );
    }
    
    //return json data
    echo json_encode($data);

 ?>