<?php
	require '_app/Config.inc.php';
    require '_app/Models/Email.class.php';
    require '_app/Helpers/Check.class.php';

    $contato['RemetenteNome'] = $_POST['nome'];
	$contato['RemetenteEmail'] = $_POST['email'];
	$contato['Mensagem'] = $_POST['mensagem'];

	$contato['Assunto'] = 'Mensagem Via Sistema cmsf';
    $contato['DestinoNome'] = 'CMSF - WEBSITE';
    $contato['DestinoEmail'] = MAILUSER;

	$mail = new Email;
	$mail->Enviar($contato);

    /*
	if($mail->getError()):
             WSErro($mail->getError()[0], $mail->getError()[1]);
    endif;
    */

    if($mail->getError() == 'errempty'):
        echo 'errempty';
    elseif ($mail->getError() == 'errmail'):
        echo 'errmail';
    elseif($mail->getError() == 'errsucess'):
        echo 'errsucess';
    elseif ($mail->getError() == 'errenvio'):
        echo 'errenvio';
    endif;

?>