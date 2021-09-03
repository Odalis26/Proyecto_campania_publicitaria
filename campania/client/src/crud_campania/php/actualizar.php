<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["medio"]) &&isset($_POST["descripcion"]) &&isset($_POST["fechaInicio"]) &&isset($_POST["fechaFinal"])){
		if($_POST["nombre"]!=""&& $_POST["medio"]!=""&&$_POST["fechaInicio"]!=""){
			include "conexion.php";
			
			$sql = "update person set nombre=\"$_POST[nombre]\",medio=\"$_POST[medio]\",descripcion=\"$_POST[descripcion]\",fechaInicio=\"$_POST[fechaInicio]\",fechaFinal=\"$_POST[fechaFinal]\" where id=".$_POST["id"];
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