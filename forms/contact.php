<?php

  // Adresse mail de réception.
  $receiving_email_address = 'alan.thob@hotmail.fr';

// Initialisation de la bibliothèque PHP Email Form.
  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-mail-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Impossible de charger la bibliothèque "PHP Email Form" !');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);
  $contact->cc = array('mathis.lambert27@gmail.com');
  echo $contact->send();