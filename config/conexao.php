<?php
if($conn = mysqli_connect("localhost", "root", "root")){
	if(!mysqli_select_db($conn, "ongacme"))
		echo "Problemas de conexão! ".mysqli_error();
}
?>