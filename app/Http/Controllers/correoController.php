<?php
namespace App\Http\Controllers;

use PHPMailer\PHPMailer;

class testPHPMailer extends Controller
{
    public function index()
    {
        $text             = 'Este es el mensaje';
        $mail             = new PHPMailer\PHPMailer(); // create a n
        $mail->SMTPDebug  = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth   = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "javierelguetainacapino@gmail.com";
        $mail->Password = "javierr0cky";
        $mail->SetFrom("javierelguetainacapino@gmail.com", 'Autoenergy');
        $mail->Subject = "Informaciones";
        $mail->Body    = $text;
        $mail->AddAddress("jaed.elde@gmail.com", "Jaed");
        if ($mail->Send()) {
            return 'Mail enviado';
        } else {
            return 'Falló el envío';
        }
    }
}
?>