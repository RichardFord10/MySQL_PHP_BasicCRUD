<?php include "db.php";?>

<?php include "functions.php";?>
<?php
if(isset($_POST['submit'])){

deleteRows();
    
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
       <h2 class="text-center">Delete.</h2>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input class ="form-control" type="text" name="username">
            </div>
            <div class="form-group">                       
                <label for="password">Password</label>
                <input class ="form-control" type="password" name="password">
            </div>
            <div class="form-group">
                
             <select name ="id" id="">
               
                <?php
                   showAllData();         
                ?>
                 
             </select>   
                
            </div>
            <input type="submit" name="submit" value="DELETE" class="btn btn-primary">
          </form> 
    </div>
</div>









</body>
</html>