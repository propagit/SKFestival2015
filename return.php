<?
  $id = $_GET['id'];
  $num = $_GET['payment_number'];
  //$ref = $_GET['payment_reference'];
  include 'library/config.php';
  include 'library/opendb.php';
  $query  = "update musicians_entry set payment_number = '$num',payment_method = 'Credit Card' where id = '$id'";
  $result = mysql_query($query) or die('Error : ' . mysql_error());
  
  header( 'Location: http://www.stkildafestival.com.au/callforentries/page/musicians_thank_you' );
 ?>


