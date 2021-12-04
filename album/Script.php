<?php
$numero=$_POST["num"]; 
$data=$_POST["data"];
$firma=$_POST["firma"];
$ender=$_POST["ender"];
$compl=$_POST["compl"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$estado=$_POST["estado"];
$CEP=$_POST["CEP"];
$CNPJ=$_POST["CNPJ"];
$Inscrição=$_POST["Inscrição"];
$telefone=$_POST["telefone"];
$celular=$_POST["celular"];
$email=$_POST["e-mail"];
$OBS=$_POST["OBS"];

file_put_contents("Arquivo.csv", "$numero,$data,$firma,$ender,$compl,$bairro,$cidade,$estado,$CEP,$CNPJ,$Inscrição,$telefone,$celular,$email,$OBS",FILE_APPEND);
?>