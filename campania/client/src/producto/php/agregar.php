<?php

if(!empty($_POST)){
	if(isset($_POST["nombre_campaña"]) &&isset($_POST["precio_producto"]) &&isset($_POST["llamadas_ilimitadas"]) &&isset($_POST["gigas"]) &&isset($_POST["minutos"]) &&isset($_POST["descripcion"])){
		if($_POST["nombre_campaña"]!=""&& $_POST["precio_producto"]!="" && $_POST["llamadas_ilimitadas"]!="" && $_POST["gigas"]!=""&& $_POST["minutos"]!="" && $_POST["descripcion"]!=""){
			include "conexion.php";
	
			$sql = "insert into producto(nombre_campaña,precio_producto,llamadas_ilimitadas,gigas,minutos,descripcion,created_at) value (\"$_POST[nombre_campaña]\",\"$_POST[precio_producto]\",\"$_POST[llamadas_ilimitadas]\",\"$_POST[gigas]\",\"$_POST[minutos]\",\"$_POST[descripcion]\", NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}
?>