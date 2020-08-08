<?php
     include "conn.inc.php";
	$u=$_GET["username"];
     $query_delete = "DELETE FROM dangkythongtin WHERE username = '$u'";
     $result_delete = mysql_query($query_delete) or die(mysql_error()); 
	 if($result_delete)  header("Location:index.php?id=listuser");
	 else echo "loi";
    /* header("Refresh: 5; URL=list_user.php");
          echo "Ban dang duoc chuyen den trang chu!<br>";
          echo "(Neu trinh duyet khong ho tro, <a href=\"index.php?id=listuser\">Kich vao day</a>)";
     die();*/

?>
