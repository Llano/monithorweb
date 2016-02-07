<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
class MailLib {


  public function sendmail($to,$from,$subject,$message)
  {
      $mgClient = new Mailgun('key-6fe06142d08a9e9c3989f3731bd1d6c0');
      $domain = "monithor.net";

      # Make the call to the client.
      $result = $mgClient->sendMessage($domain, array(
          'from'    => $from,
          'to'      => $to,
          'subject' => $subject,
          'text'    => $message
      ));
  }


}

?>
