<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection) {
    echo "Connected to DB";
    } else {  
    die("Error: Connection to DB Failed");   
    }

    $query = "SELECT * FROM USERS";

    $result = mysqli_query($connection, $query);
    
    
    if(!$result){
    
        die("Error: Query Failed" . mysqli_error());
    
    
    
    }



    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="col-sm-6">     
       
      <?php
      
      while($row = mysqli_fetch_assoc($result)){
        ?>
        
        <pre>
            
        <?php
    
        print_r($row);
        ?>
        </pre>
    <?php                                         
                                                  
        }
        ?>
    </div>
</div>










</body>
</html>