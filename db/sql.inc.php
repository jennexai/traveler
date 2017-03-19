<?php

function dbselect($table_name, $select='', $where_clause='',$con)
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "SELECT ".$select." FROM ".$table_name." ";
    // append the where statement
    $sql .= $whereSQL;
    // run and return the query result
    return mysqli_query($con,$sql);
}


function dbRowInsert($table_name, $form_data ,$con)

{

    // retrieve the keys of the array (column titles)

    $fields = array_keys($form_data);

    // build the query

    $sql = "INSERT INTO ".$table_name."

    (`".implode('`,`', $fields)."`)

    VALUES('".implode("','", $form_data)."')"; 
   // echo $sql;
   return mysqli_query($con,$sql) or die(mysqli_error());
}

// the where clause is left optional incase the user wants to delete every row!
function dbRowDelete($table_name, $where_clause , $con) 
{
    $whereSQL = '';
    if(!empty($where_clause))
    { 
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
      $sql = "DELETE FROM ".$table_name.$whereSQL;

    mysqli_query($con,$sql) or die(mysqli_error());
}

function dbRowUpdate($table_name, $form_data, $where_clause='',$con)
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";

    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);

    // append the where statement
    $sql .= $whereSQL;

    // run and return the query result
    return mysqli_query($con,$sql);
}

?>
