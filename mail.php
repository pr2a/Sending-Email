<?php
//email body
echo $message = "test email";

require_once('ses.php');

//'access key' 'secret key'
$ses = new SimpleEmailServices('ACCESSKEY', 'SECRETKEY');
$m = new SimpleEmailServiceMessage();

//who you want to send to
$m->addTo('sample@mail.com');
//who is sending
$m->setFrom('priya@harmony.one');
//subject line of email
$m->setSubject('test subject');
$m->setMessageFromString($message);

var_dump($ses->sendEmail($m));
?> 
