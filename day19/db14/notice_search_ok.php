<?
	$searchword=$_POST["searchword"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from notice where content like '$searchword'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
?>
<meta http-equiv="refresh" content="10;url=notice_search_mode.php">
