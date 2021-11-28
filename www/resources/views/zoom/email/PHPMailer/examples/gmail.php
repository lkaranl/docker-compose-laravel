<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

//define("PASTA", __DIR__);

// include PASTA."/Zoom_Api.php";
require '/var/www/resources/views/zoom/email/PHPMailer/PHPMailerAutoload.php';
include_once ('/var/www/resources/views/zoom/index.php');

$response = $zoom_meeting->createMeeting($data);

$mail= new PHPMailer;
$mail->IsSMTP();        // Ativar SMTP
$mail->SMTPDebug = 1;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
$mail->SMTPAuth = true;     // Autenticação ativada
$mail->SMTPSecure = 'ssl';  // SSL REQUERIDO pelo GMail
$mail->Host = 'br906.hostgator.com.br'; // SMTP utilizado
$mail->Port = 465; 
$mail->Username = 'suporte@psiqui.com.br';
$mail->Password = 'S64eGJ?&)~mY';
$mail->SetFrom('suporte@psiqui.com.br', 'Psiqui');


// COLOCAR UM GET PARA O EMIAL QUE O PSICOLOGO CADASTROU
$mail->addAddress('karanluciano1@gmail.com','Karan');
$mail->addAddress('psiquiteste1@gmail.com','Psiqui');
$mail->Subject=("psiqui");
$mail->msgHTML("Este é o seu link para a consulta → ".$response->join_url.
    "<br><br>Número do seu protocolo → ".$response->id.
    "<br><br>Seu psicólogo também estará recebendo um email com estas 
    informações. Em caso de dúvidas, estamos disponíveis através do email 
    de suporte suporte@psiqui.com.br");

if ($mail->send()){
    $ok = true;
    // BLOCO DE IMPRESSAO
    try {
        echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$response->join_url.'">';
        // $atual = $response->join_url;
        // echo "Numero do protocolo da sua video-chamada: ". $response->id;
        // echo "<br><br>";
        // echo "Psicologo do atendimento: ". $response->topic;
        // echo "<br><br>";
        // echo "OBVERVACAO IMPORTANTE --> VOCE DEVERA USAR A SUA CONTA DO ZOOM<br>VOCE TERA DUAS ESCOLHAS NA PROXIMA ";
        // echo "PAGINA, INICAR A VIDEO CHAMADA PELO APLICATICO DO ZOOM OU INICIAR PELO NAVEGADOR (Join from Your Browser)<br><br>";
        // echo "Seu psicologo estara recebendo um email informando o inicio desta sessao<br><br>";
        // echo "Clique no link em azul para inicar a chamada de video: " ."<a href='". $response->join_url ."'>INICIAR VIDEO-CHAMADA</a>";
        // // . $response->join_url ."<a href='". $response->join_url ."'><br>Open URL</a>";
        // echo "<br>";
        // // echo "Meeting Password: ". $response->password;
        // echo "<br>";
        
    } catch (Exception $ex) {
        echo $ex;
    }
    // ######################
}else{
    $ok = false;
    echo "Algo deu errado no seu envio de email, confira seu email cadastrado e tente novamente ou entre em contato com o suporte: psiquiteste1@gmail.com";
    // echo $atual;
}  