

<?php

//Step1
 $db = mysqli_connect('sql110.epizy.com','epiz_32980507','Fs5b4qusZH','epiz_32980507_meddata')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>Database</h1>
<style>
    h1{
        text-align: center;
    }    
</style>
<?php
   
//Step2
$query = "SELECT * FROM `medinfo` ORDER BY `medinfo`.`Name` ASC";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);

echo '<table border="1">
    <tr>
        <th>Name</th>
        <th>Type of Sell</th>
        <th>Category</th>
        <th>MRP</th>
        <th>Best Price</th>
        <th>Manufacturer</th>
    </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '
    <tr>
        <td>'.$row['Name'].'</td>
        <td>'.$row['Type_of_Sell'].'</td>
        <td>'.$row['Category'].'</td>
        <td>'.$row['MRP'].'</td>
        <td>'.$row['Best_Price'].'</td>
        <td>'.$row['Manufacturer'].'</td>
    </tr>';
}

//Step 4
mysqli_close($db);
?>

</body>
</html>