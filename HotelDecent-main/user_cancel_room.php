<html>
<body>
	<?php
	$conn = new mysqli("localhost","root","AA@@153214", "hotelman");
	if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
			echo "sorry";
		}
		$bid = $_POST["book_id"];
		$sql = "SELECT * from user_room_book;";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_row($result))
	   	{
			if($bid==$row[15])
			{
				$sql1 = "DELETE FROM user_room_book WHERE book_id='$bid';";
				mysqli_query($conn,$sql1);
				echo "Redirecting....";
				header("Location: user_cancel_room1.php");
				break;
			}
		}
	?>
</body>
</html>
