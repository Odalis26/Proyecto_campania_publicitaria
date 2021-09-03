<?php

if(!empty($_POST)){
	if(isset($_POST["nombre_campaña"]) &&isset($_POST["precio_producto"]) &&isset($_POST["llamadas_ilimitadas"]) &&isset($_POST["gigas"]) &&isset($_POST["minutos"]) &&isset($_POST["descripcion"])){
		if($_POST["nombre_campaña"]!=""&& $_POST["precio_producto"]!=""&&$_POST["gigas"]!=""){
			include "conexion.php";
			
			$sql = "update producto set nombre_campaña=\"$_POST[nombre_campaña]\",precio_producto=\"$_POST[precio_producto]\",llamadas_ilimitadas=\"$_POST[llamadas_ilimitadas]\",gigas=\"$_POST[gigas]\",minutos=\"$_POST[minutos]\",descripcion=\"$_POST[descripcion]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>