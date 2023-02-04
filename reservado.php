<?php
session_start();
include('email.php');
require_once('conexao.php');
if($_SESSION['permissao'] == null){
  header("Location: index.php");
}
  $phpmail = new email;
  $phpmail->reserva_sala($_SESSION['user'], $_SESSION['sala'], $_SESSION['email'], $_SESSION['hora_inicio'], $_SESSION['data']);
  $con->query("CALL `proc_agendar` ('".$_SESSION['id_sala']."','".$_SESSION['id_user']."','".$_SESSION['data']."','".$_SESSION['hora_inicio']."','".$_SESSION['hora_fim']."')"); 
  header("Location: minhas_reservas.php");
