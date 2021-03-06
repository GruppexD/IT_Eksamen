<!DOCTYPE php>
<html>
<title>Værktøjskassen</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
<style>
body {
    font-family: "Raleway", Arial, sans-serif;
    background:url('images/tileable-light-wood-textures-2.jpg')!important;
    }

</style>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content w3-center" style="max-width:1500px">

  <!-- Header -->
  <header class="w3-container w3-xlarge w3-padding-24">
    <a href="Home.html" class="w3-left w3-button w3-white">HOME</a>
    <a  class="w3-right w3-button w3-white">Logout</a>
  </header>

  <!-- Menu Grid -->
    <!-- Desktop content -->
  <div class="w3-visibledesktop w3-row w3-center" style="width:60%; margin:auto; padding 10px;">
    <div class="w3-white w3-scrollBox" style="margin-right: auto; margin-left: auto; width:60%">
        <table class="w3-table w3-table-border" >
            <tr class="w3-table-border">
                <th class="w3-divscale-button">Værktøj</th>
                <th class="w3-divscale-button w3-table-border">Antal</th>
            </tr>
            <tr class="w3-table-border">
                <td><a href="Tools/Hammer.html">Hammer</a></td>
                <td class="w3-table-border">5</td>
            </tr>
             <tr class="w3-table-border">
                <td><a href="Tools/Skrewdriver.html">Skruetrækker</a></td>
                <td class="w3-table-border">20</td>
            </tr>
            <tr class="w3-table-border">
                <td><a href="Tools/Drill.html">Boremaskine</a></td>
                <td class="w3-table-border">7</td>
            </tr>
            <tr class="w3-table-border">
                <td><a href="Tools/File.html">Fil</a></td>
                <td class="w3-table-border">3</td>
            </tr>
            
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
        </table>
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
        
    </div>

    
  </div>
    
  <!-- Mobile content -->
    <div class="w3-visibledevice w3-row w3-center" style="width:100%; margin:auto; padding 10px;">
    <div class="w3-white  w3-scrollBox" style="margin-right: auto; margin-left: auto; width:90%">
        Mobile
        <table class="w3-table w3-table-border" >
            <tr class="w3-table-border">
                <th class="w3-divscale-button">Værktøj</th>
                <th class="w3-divscale-button w3-table-border">Antal</th>
            </tr>
            <tr class="w3-table-border">
                <td><a href="Tools/Hammer.html">Hammer</a></td>
                <td class="w3-table-border">5</td>
            </tr>
             <tr class="w3-table-border">
                <td><a href="Tools/Skrewdriver.html">Skruetrækker</a></td>
                <td class="w3-table-border">20</td>
            </tr>
            <tr class="w3-table-border">
                <td><a href="Tools/Drill.html">Boremaskine</a></td>
                <td class="w3-table-border">7</td>
            </tr>
            <tr class="w3-table-border">
                <td><a href="Tools/File.html">Fil</a></td>
                <td class="w3-table-border">3</td>
            </tr>
            
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
            <tr class="w3-table-border">
                <td>Fil</td>
                <td class="w3-table-border">3</td>
            </tr>
        </table>
        
    </div>
    
  </div>
    
<!-- End Page Content -->
</div>

<!-- Footer / About Section -->
<footer class="w3-divscale">
  <p style="color:white;">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 
</body>
</html>
