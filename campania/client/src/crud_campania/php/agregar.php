<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["medio"]) &&isset($_POST["descripcion"]) &&isset($_POST["fechaInicio"]) &&isset($_POST["fechaFinal"])){
		if($_POST["nombre"]!=""&& $_POST["medio"]!="" && $_POST["descripcion"]!="" && $_POST["fechaInicio"]!=""&& $_POST["fechaFinal"]!=""){
			include "conexion.php";
	
			$sql = "insert into person(nombre,medio,descripcion,fechaInicio,fechaFinal,created_at) value (\"$_POST[nombre]\",\"$_POST[medio]\",\"$_POST[descripcion]\",\"$_POST[fechaInicio]\",\"$_POST[fechaFinal]\", NOW())";
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