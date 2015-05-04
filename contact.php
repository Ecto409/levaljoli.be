<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'levaljoli@.com';
$subject = 'Nouveau message de '.$field_name;

$body_message = 'De: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'De: '.$field_email."\r\n";
$headers .= 'Répondre à: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Merci pour votre message');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Envoi échoué. Veuillez envoyer un message à cette adresse: levaljoli@hotmail.com');
		window.location = 'contact.html';
	</script>
<?php
}
?>