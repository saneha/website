<?php  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);   

 //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();   
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers   // this is the smptp host currently we are using gmail for outlook 
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'dyal.saneha44@gmail.com';                 // SMTP username   sender email
    $mail->Password = 'Monu2018%';                           // SMTP password sender password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    
	
	
if(!empty($_POST['email'])){
	$email = $_POST['email'];
	$html = '<html>';
	$html.= '<head>';
	$html.= '<title>Remarkit Query</title>';
	$html.='<style>';
	$html.='table, th, td{';
	$html.='border:1px solid #000;';
	$html.='}';
	$html.='th, td{';
	$html.='min-width:100px;';
	$html.='}';
	$html.='</style>';
	$html.= '</head>';
	$html.= '<body>';
	$html.= '<table style="max-width:600px;overflow-x:scroll;margin:0 auto;background:#eee;border:1px solid #000;">';
	$html.= html_entity_decode($_POST['html_data']);
	$html.= '</table>';
	$html.= '</body>';
	$html.= '</html>';  
	

	
    $subject = "Remarkit Query";	
	
	$mail->setFrom('dyal.saneha44@gmail.com', 'Remarkit');   // sender email address + sender name
    $mail->addAddress($email);     // Add a recipient


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $html;
    $mail->send();  
	//echo json_encode(html_entity_decode($_POST['html_data'])); 
	if (!$mail->send()) {
		echo json_encode(['success'=>false]);
	}
	else{
		echo json_encode(['success'=>true]);
	}
} 


 ?>
