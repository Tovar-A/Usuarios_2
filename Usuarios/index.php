<?php
session_start();

require_once 'LIGA3/LIGA.php';

BD('localhost','root','','informacionGali');

$where="";

if(!empty($_SESSION['id']) && !empty($_SESSION['contra'])){
    $where="WHERE id='$_SESSION[id]' AND contra='$_SESSION[contra]'";
}

$usuario= LIGA('usuarios',$where);

if($usuario->numReg()==1){
    header('sistema.php');
}

HTML::cabeceras(array('title'=>'Login para Usuarios','description'=>'Ingreso seguro de la Pagian Web'));
// HTTP (Header)(Cuerpo)
// GET ---> Datos se envian por la URL     POST ---> En el cuerpo de la peticion

$campos = array('Nombre:'=>'<input id="Usuario:" name="id"/>','Contraseña:'=>'<input type="password" id="Contraseña:" name="contra"/>');

$propiedad=array('form'=>'action="login.php" method="POST"');

if(isset($_GET['error'])){
    echo '<p> Error en los Datos </p>';
}

HTML::forma($usuario,'Login',$campos,$propiedad);

$js=array('js'=>array('js/jquery-3.3.1.min.js','js/codigo.js'));
HTML::pie($js);
Test culo
?>
