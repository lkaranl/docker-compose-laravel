<?php 
/* 
| Developed original by: Tauseef Ahmad

z
| Developed mode by: Karan Luciano
| Last Upate: 03-02-2021
 */ 

include_once ('Zoom_Api.php');

$zoom_meeting = new Zoom_Api();

$data = array();
$data['topic'] 		= 'Voce sera atendido pelo psicologo Fulano da Silva';
$data['start_date'] = date("Y-m-d h:i:s", strtotime('tomorrow'));
$data['duration'] 	= 30;
$data['type'] 		= 2;
$data['password'] 	= "12345";
?>