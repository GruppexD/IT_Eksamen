<!DOCTYPE html>
<html>
    
    
 <head>
    
	<title>Værktøjskassen</title>
     
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
		<meta name="decription" content="Eksamensprojekt" >
     
		<meta name="keywords" content="Database, Værktøjskassen, Værktøj, Eksamensprojek, Bibliotek, Tools, Træ, Træværksted, Bordgrupper, Registrering" >
		<meta name="author" content="Emil Trangeled, Joachim Bunger, Rune Christensen" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
     
			<link rel="stylesheet" href="style.css" type="text/css" >
			<link rel="shortcut icon" href="images/tool.icon.png" >
     
</head>   
    
<body> 
<div id="header"> 
		<div id="logo"><a style="text-decoration:none" href="index.html">
            <h2>VÆRKTØJSKASSEN<h2></a></div>
</div>
  
            <div id="wrapper">
<script>
        /* Det er inde på denne side at du finder det værktøj du kan låne eller se det der er udlejet */
       
        </script>

        <h1>VÆRKTØJ</h1>
        
    

    <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
   <!-- PHP er taget og skrevet ved hjælp af W3Schols totorial hvor de viste hvordan man connectede til deres server. Vi har derfor forstået det og omskrevet det til vores side -->
<!--IP på computeren er: 10.193.137.190 -->
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "verktojskassen";

/* definering af server */
                
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

// Connection til server
                
$sql = "SELECT V_ID, Navn, Type, Specification FROM tools";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
    echo "<br>  ". $row["V_ID"]. 
            "  ". $row["Navn"].
            "  " . $row["Type"].
            "  " . $row["Specification"].
            "<br>";
     }
} else {
     echo "0 results";
}
//Vi havde ikke tid til at sætte klick funktioner på de forskellige værktøjer
                
$conn->close();
?>  

</body>
</html>