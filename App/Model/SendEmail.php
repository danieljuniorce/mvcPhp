<?php
namespace Models;

use \Core\Models;
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

class SendEmail extends Model
{
    private $mail;
    public function __construct()
    {
        $this->mail = new PHPMailer(false);
        $phpMailer = $this->getConfig('phpmailer');
        try {

          $this->mail->SMTPDebug = 1;
          $this->mail->isSMTP();
          $this->mail->Host = $phpMailer['host'];
          $this->mail->SMTPAuth = $phpMailer['smtpauth'];
          $this->mail->Username = $phpMailer['username'];
          $this->mail->password = $phpMailer['password'];
          $this->mail->SMTPSecure = $phpMailer['smtpsecure'];
          $this->mail->Port = $phpMailer['port'];

        } catch (Exception $e) {
          echo "FALHA NO ENVIO: {$this->email->ErrorInfo}";
        }
    }

    public function sendEmail($setFrom, $addAddress, $titleEmail, $emailBody)
    {
        $this->setFrom($phpMailer['emailsend'], $phpMailer['usersend']);
        $this->mail->addAddress($addAddress);

        $this->mail->isHtml(true);
        $this->mail->Subject = $titleEmail;
        $this->mail->Body = $emailBody;
    }
}
