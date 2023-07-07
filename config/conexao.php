<?php
if($conn = mysqli_connect("localhost", "root", "")){
	if(!mysqli_select_db($conn, "ongacme")){
		echo "Problemas de conexão! ";
	}
}else{
	echo "ERRO DE CONEXÃO!";
}
?>