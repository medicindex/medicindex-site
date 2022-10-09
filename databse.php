<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Database</title>
</head>
<body>
    <style>
        body{
            background-image: url('medbg.jpg');
        }
        .headingg{
            
            text-align: center;
            font-size: 54px;
            color: rgb(255, 255, 255);
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-shadow: 5px 5px 8px #000000;
        }
        .head{
            display: inline-block;
        }
    </style>
    
    <input type="button" class="btn btn-primary ml-4" value="Go back!" onclick="history.back()">
    <p class="headingg m-0">medicIndex</p>
    
    <iframe class="airtable-embed" src="https://airtable.com/embed/shryoBuMUSSyQlckS?backgroundColor=yellow&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
</body>
</html> -->

<?php

//Step1
 $db = mysqli_connect('localhost','root','','medicindex')
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