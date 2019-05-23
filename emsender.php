<?php
if (isset($_POST['E-mail'])) {

	$email_to= "fabricio.23@live.com";
	$email_subject= "Formulario";
	$email_from= $_POST['E-mail'];

	if (!isset($_POST['Nombre'])||!isset($_POST['Apellido'])||!isset($_POST['E-mail'])||!isset($_POST['Telefono'])||!isset($_POST['Comentario'])) {
		echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
		echo "Por favor, Verifique que toda la informacion ha sido llenada.<br />";
		die();
	}

		$email_message = "Detalles del contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['Nombre'] . "\n";
		$email_message .= "Apellido: " . $_POST['Apellido'] . "\n";
		$email_message .= "E-mail: " . $_POST['E-mail'] . "\n";
		$email_message .= "Teléfono: " . $_POST['Telefono'] . "\n";
		$email_message .= "Comentarios: " . $_POST['Comentario'] . "\n\n";

		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		if (mail($email_to, $email_subject, $email_message, $headers);) {
			echo "¡El formulario se ha enviado con éxito!";
		}
}

 ?>
