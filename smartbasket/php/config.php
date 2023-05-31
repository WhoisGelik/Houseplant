<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		  require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		  const HOST = 'smpt.gmail.com';
		  const LOGIN = 'angelinaprasnikova@gmail.com';
		 const PASS = 'Angel2019?';
		 const PORT = '465';

		// *** /SMTP *** //
   
    const SENDER = 'angelinaprasnikova@gmail.com';
    const CATCHER = 'angelina.pryashnikova@yandex.ru';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    