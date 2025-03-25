<?php
  include "connection.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<style type="text/css">

.srch
		{
			padding-left: 850px;

		}
		.form-control
		{
			width: 300px;
			height: 40px;
			background-color: black;
			color: white;
		}
		
		body {
			background-image: url("images/1111.jpg");
			background-repeat: no-repeat;
  	font-family: "Lato", sans-serif;
  	transition: background-color .5s;
}

.sidenav {
    height: 100%;
    margin-top: 50px;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #333;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.3);
}

.sidenav a {
    padding: 10px 20px;
    text-decoration: none;
    font-size: 20px;
    color: #b0b0b0;
    display: block;
    transition: 0.3s;
    border-bottom: 1px solid #444;
}

.sidenav a:hover {
    color: white;
    background-color: #5d8f8f;
    font-weight: bold;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    color: white;
    margin-left: 50px;
}


#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}
.container
{
	height: 600px;
	background-color: black;
	opacity: .8;
	color: white;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #333;
    border-radius: 8px;
    overflow: hidden;
}

table th, table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
    color: #fff;  /* Text color inside the table */
}

table th {
    background-color: #6db6b9;
    color: white;
    font-size: 18px;
    text-transform: uppercase;
}

table tr:nth-child(even) {
    background-color: #444;
}

table tr:nth-child(odd) {
    background-color: #555;
}

table tr:hover {
    background-color: #666;
}

table td {
    font-size: 16px;
    color: #ccc;
}

/* Hover effect for table rows */
table tr:hover td {
    background-color: #777;
    color: #fff;
}

	</style>



</head>
<body>
<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))

                { 	
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
            </div><br><br>

 
  <div class="h"><a href="student.php">Student Information</a></div>
  <div class="h"><a href="issue-info.php">Issue Information</a></div>
  <div class="h"><a href="expired.php">Expired List</a></div>
  <div class="h"><a href="admin-dashboard.php">Back To Dashboard</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "300px";
	  document.getElementById("main").style.marginLeft = "300px";
	  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	  document.getElementById("main").style.marginLeft= "0";
	  document.body.style.backgroundColor = "white";
	}
	</script>
	<br>


	<h3 style="text-align: center;">Request of Book</h3><div class="container">
	<div class = "srch">
	<form method="post" action="" name="form1">
    <input type="text" name="username" class="form-control" placeholder="Username" required="">
    <input type="text" name="bid" class="form-control" placeholder="Book ID" required="">
    <button class="btn btn-default" name="submit" type="submit">Submit</button>
</form>

	</div>



	<?php
	
	if(isset($_SESSION['login_user']))
	{
		$sql= "SELECT student_register.username,books.bid,name,authors,edition,status FROM student_register inner join issue_book ON student_register.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve =''";
		$res= mysqli_query($db,$sql);

		if(mysqli_num_rows($res)==0)
			{
				echo "<h2><b>";
				echo "There's no pending request.";
				echo "</h2></b>";
			}
		else
		{
			echo "<table class='table table-bordered' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				
				echo "<th>"; echo "Username";  echo "</th>";
				
				echo "<th>"; echo "BID";  echo "</th>";
				echo "<th>"; echo "Book Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['username']; echo "</td>";
				
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				
				echo "</tr>";
			}
		echo "</table>";
		}
	}
	else
	{
		?>
		<br>
			<h4 style="text-align: center;color: yellow;">You need to login to see the request.</h4>
			
		<?php
	}

	if(isset($_POST['submit']))
	{
		$_SESSION['name']=$_POST['username'];
		$_SESSION['bid']=$_POST['bid'];

		?>
			<script type="text/javascript">
				window.location="approve.php"
			</script>
		<?php
	}

	?>
	<div class="container">
	
</div>
</body>
</html>