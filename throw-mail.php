<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


  if(isset($_POST['acepto-tc'])){
    $s = filter_input(INPUT_POST, 'user-mail', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
    if(is_bool($s)){
      $alert = "Hubo un problema!";
      break;
    }
    else{
      $secure['user-mail'] = $s;
    }
    if(empty($alert)){
    $msg_correo = <<<HTML
        <h2>Estimado usuario</h2>
        <p>Lorem ipsum dolor sit amet consectetuer turpis nisl massa turpis ac. Velit nibh lobortis Nam Quisque Nunc lacus nec Vestibulum parturient Curabitur. Aenean auctor penatibus gravida ut dui Sed tincidunt et nunc Cras. Semper eu sapien et laoreet massa sollicitudin Curabitur porttitor et quis. Justo dui metus et Phasellus dolor semper wisi at tincidunt Donec. Quisque et.</p>
        <p>Donec ipsum pretium sed sodales Aliquam interdum eget vitae massa vitae. Eget Lorem nunc ante at ut malesuada felis molestie Praesent et. Amet pretium consequat Phasellus adipiscing lobortis wisi ut ligula mollis augue. Mauris consequat congue massa faucibus id id Maecenas Suspendisse Quisque congue. Nunc Nam Integer felis a fringilla enim Vestibulum enim arcu nibh. Wisi Quisque elit nulla commodo habitant Maecenas Ut Aliquam odio.</p>

HTML;
        $NOMBRE_DESTINO = 'Usuario';
        $CORREO_DESTINO = $secure['user-mail'];
        $TITULO_CORREO = 'Prueba de correo...';
        
        include_once 'includes/correo2.php';
        
        echo $error.$msg_correo;
    }
    else{
      echo $alert;
    }
  }

?>