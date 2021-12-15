<?php
    $con = mysqli_connect("localhost","root","") or die("Connection Error!!!");
    mysqli_select_db($con,"ajax") or die("Database Error!!!!");
    $sql = "select * from users;";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
    	echo "<table><tr><th>Username</th><th>Gender</th>";
    	while($row = mysqli_fetch_array($result)){
    		echo "<tr><td>{$row["username"]}</td><td>{$row["gender"]}</td></tr>";
    	}
    	echo "</table>";
    }
    else{
    	echo "No data found";
    }

?>