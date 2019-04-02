 <?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','carzone_db');

class DB_con
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
    mysql_select_db(DB_NAME, $conn);
 }
 
 public function select($table)
 {
  $res=mysql_query("SELECT * FROM".$table);
  return $res;
 }
 
 public function delete($table,$uname)
 {
   $res = mysql_query("DELETE FROM $table WHERE '$uname'");
   return $res;
 }
 
 public function update($table, $fields,$value)
 { 
    $queryFields = implode("','", $fields);
    $queryValues = implode("','", $value);
    $res = mysql_query("UPDATE $table SET $fields='$value'");
    return $res;
 }
 public function insertData($table,$fields,$value)
 {
            $queryFields = implode(",", $fields);
            $queryValues = implode("','", $value);
 
     $res =mysql_query("INSERT INTO $table ($queryFields) VALUES ('$queryValues')");
         
    }
}
   ?>