
<DOCTYPE Html>
	<html>
	<head>
		
	<title>PHP IN HTML</title>
	<style> type="text/css"
     
   #main{
   	background-color:lightcoral;
   	width:600px;
   	height:300px;
   	border-radius: 30px;
   }

     form {
   }
 display: flex;
  flex-direction: column;
  max-width: 400px;
  margin: auto;
}

label {
  margin-bottom: 10px;
}

h1{
	text-align: center;
	background-color: lightseagreen;
	border-top-right-radius:30px;
	border-top-left-radius: 30px;
}

input[type="text"],
input[type="email"],
input[type="number"] {
  padding: 10px;
  border: 10px;
  border-bottom: 1px solid #ccc;
  margin-bottom: 20px;
  background-color: lightgoldenrodyellow;
  color:blue ;
  text-align: center;

}

input[type="checkbox"],
input[type="radio"] {
  margin-right: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin: 30px;

}

input[type="submit"]:hover {
  background-color: #45a049;
} 
}
</style>
	</head>
	<body>
		<center>
			<div id="main">
		<h1>Hello</h1>
<form method="post" action="submit.php">

<label for="name">Name:</label>
<input type="text" name="name" id="name">
<label for="email">Email:</label>
<input type="email" name="email" id="email">
<label for="age">Age:</label>
<input type="number" name="age" id="age">
<label for="newsletter">Subscribe to newsletter:</label>
<input type="checkbox" name="newsletter" id="newsletter" value="yes">
<label for="gender">Gender:</label>
<input type="radio" name="gender" id="gender" value="male">Male
<input type="radio" name="gender" id="gender" value="female">Female


<input type="submit" value="Submit">
 
  </form>
</div>
</center>

</body>

</Html>
