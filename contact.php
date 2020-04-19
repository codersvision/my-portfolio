<?php

#Receive user input
$name = $_POST['name'];
$subject -$_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

#Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$mail  = filter_email_header($mail);

#Send email
$headers = "From: $mailFrom";
$sent = mail('lhinds@leonhinds.com', 'Job Request', $message, $headers,);

#Thank user or notify them of a problem
if ($sent) {

?><html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for contacting me.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your feedback. Please try again.</p>
</body>
</html>
<?php
}
?>