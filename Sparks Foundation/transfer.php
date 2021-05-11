<?php
session_start();
include('./Database/Connection.php');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sparks Foundation | Basic Banking System</title>
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png">
	
	<link rel="stylesheet" href="Front.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: #22113b;
		
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#2a1717;
		padding:50px;
        border-radius: 35px;
		
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="user1"){
				 var arr=["user2","user3","user4","user5","user6","user7","user8","user9","user10"];
				 }
				 else if(a==="user2"){
					var arr=["user1","user3","user4","user5","user6","user7","user8","user9","user10"];
				}
				else if(a==="user3"){
					var arr=["user1","user2",,"user4","user5","user6","user7","user8","user9","user10"];
				}
				else if(a==="user4"){
					var arr=["user1","user2","user3","user5","user6","user7","user8","user9","user10"];
				 }
				 else if(a==="user5"){
					var arr=["user1","user2","user3","user4","user6","user7","user8","user9","user10"];
				 }
				 else if(a==="user6"){
					var arr=["user1","user2","user3","user4","user5","user7","user8","user9","user10"];
				 }
				 else if(a==="user7"){
					var arr=["user1","user2","user3","user4","user5","user6","user8","user9","user10"];
				 }
				 else if(a==="user8"){
					var arr=["user1","user2","user3","user4","user5","user6","user7","user9","user10"];
				 }
				 else if(a==="user9"){
					var arr=["user1","user2","user3","user4","user5","user6","user7","user8","user10"];
				 }
				 else if(a==="user10"){
				 var arr=["user1","user2","user3","user4","user5","user6","user7","user8","user9"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>

	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left" style="color:white">Senders Name: &nbsp;</label>
		<select id="input" name="sender" style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="user1">user1</option>
			<option value="user2">user2</option>
			<option value="user3">user3</option>
			<option value="user4">user4</option>
			<option value="user5">user5</option>
			<option value="user6">user6</option>
			<option value="user7">user7</option>
			<option value="user8">user8</option>
			<option value="user9">user9</option>
			<option value="user10">user10</option>
		</select><br><br>
		<label for="receiver" align="left"style="color:white">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left"style="color:white">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="buttons">
		<input class="buttons primary_btn" type="submit" name="submit" value="Transfer" >
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="primary_btn">HOME</button>
	</a>
</div>
</body>
</html>