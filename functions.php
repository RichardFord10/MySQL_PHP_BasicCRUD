    <?php include "db.php" ?>
    <?php
    

function createRows(){    
global $connection;
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = "INSERT INTO users(username,password)";
        $query .= "VALUES ('$username','$password')";
        
        $result = mysqli_query($connection, $query);
        
        
        if(!$result){            
            die("Error: Query Failed" . mysqli_error());
        }else{
            echo "Record Created";
        }
    }
}

    

















//Shows IDs of DB

function showAllData(){ 
    global $connection;
    $query = "SELECT * FROM USERS";
    $result = mysqli_query($connection, $query);       
    if(!$result){  
        die("Error: Query Failed" . mysqli_error());  
    }


    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['ID'];
            echo "<option value ='$id'>$id</option>";
    }    

}









//Updates Username & Password


function updateTable (){
    global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        
        $query = "UPDATE USERS SET ";
        $query .= "Username = '$username', ";
        $query .= "Password = '$password' ";
        $query .= "WHERE ID = $id ";
        
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed" . mysqli_error($connection));
        }else{
            echo "Update Sucess!";
        }
        
        
 }




function deleteRows (){
    global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        
        $query = "DELETE FROM USERS ";
        $query .= "WHERE ID = $id ";
        
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed" . mysqli_error($connection));
        }else{
            echo "Update Sucess!";
        }
        
        
 }

























?>