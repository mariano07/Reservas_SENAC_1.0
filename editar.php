<?php
session_start();
require_once('conexao.php');
$con->query("CALL `proc_edit_inventario` ('".$_POST['idsala']."','".$_POST['computador']."','".$_POST['computador_prof']."','".$_POST['monitor']."','".$_POST['mouse']."','".$_POST['teclado']."','".$_POST['mesa']."','".$_POST['cadeira']."','".$_POST['televisao']."','".$_POST['ar_condicionado']."','".$_POST['controle_ar']."','".$_POST['data_show']."','".$_POST['apagador']."','".$_POST['canetao_azul']."','".$_POST['canetao_vermelho']."','".$_POST['canetao_preto']."','".$_POST['webcam']."')");
header("Location: inventario.php");