<?php 

require_once 'db_connect.php';





function addadmin($data){
	$conn = db_conn();
    $selectQuery = "INSERT into admin (Password, Username, Email)
VALUES (:Password, :Username, :Email)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':password' => $data['password'],
            ':username' => $data['username'],
        	':email' => $data['email']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function login($Data)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `admin` where username = :username AND password= :password ";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute(
		array(
		':username'=> $_POST["username"],
		':password'=> $_POST["password"],
		)
		
		
		);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    

   $conn = null;
    return true;
}


function showData($columnName)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `admin` where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function updateProfile($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `admin` set   email = ? where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['Username'], $data['email'],$username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}
function updatePass($data){
    $conn = db_conn();
    $selectQuery = "UPDATE `admin` set  password = ?,  where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['npassword'], $data[username]
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}



 
 ?>






