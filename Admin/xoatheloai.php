
<?php
     include "conn.inc.php";
	$tl=$_GET["theloai"];
     $query_delete = "DELETE FROM theloai WHERE theloai = '$tl'";
     $result_delete = mysql_query($query_delete) or die(mysql_error()); 
	 if($result_delete)  header("Location:index.php?id=quanlytl");
	 else echo "loi";
    /* header("Refresh: 5; URL=list_user.php");
          echo "Bạn đang được chuyển đến trang chủ!<br>";
          echo "(Nếu trình duyệt không hỗ trợ, <a href=\"index.php?id=quanlytl\">Nhấn vào đây</a>)";
     die();*/

?>
