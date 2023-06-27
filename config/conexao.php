<?php
if($conn = mysqli_connect("localhost", "root", "")){
	if(!mysqli_select_db($conn, "ong"))
		echo "Problemas de conexão! ".mysqli_error();
}
?>