<?php

// Adresse mail de réception.
$receiving_email_address = 'alan.thob@hotmail.fr';

// Initialisation de la bibliothèque PHP Email Form.
if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-mail-form.php')) {
    include($php_email_form);
} else {
    die('Impossible de charger la bibliothèque "PHP Email Form" !');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

$contact->add_message($_POST['civilite'], 'Civilité');
$contact->add_message($_POST['name'], 'Nom et Prénom');
$contact->add_message($_POST['born-date'], 'Date de naissance');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['adresse'], 'Adresse');
$contact->add_message($_POST['zip'], 'Code postal');
$contact->add_message($_POST['city'], 'Ville');
$contact->add_message($_POST['activity'], 'Sport pratiqué');
$contact->add_message($_POST['location'], 'Lieu pratiqué');
$contact->add_message($_POST['subject'], 'Sujet');
$contact->add_message($_POST['message'], 'Message', 10);

$contact->cc = array($_POST['email']);

echo $contact->send();