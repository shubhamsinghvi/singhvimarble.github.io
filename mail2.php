
<?php
$to = 'singhvimarblestone@gmail.com';
$subject = 'Enquiry Form';
$from = 'info@singhvimarbles.com';
$submit = $_POST['submit'];
        // Form Data

        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $number = strip_tags($_POST['phone']);
        $msg = strip_tags($_POST['msg']);

     if($submit)
    {
   
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><head><style>table, td, th {border: 1px solid #ddd;text-align: left;}table {border-collapse: collapse;width: 100%;}th, td {padding: 15px;}</style></head><body><h1 style="color:#f40;text-align:center;">Hi Roshan!</h1><table><tr><th>Form</th><th>Details</th></tr><tr><td>Name</td><td>'.$name.'</td></tr><tr><td>Email</td><td>'.$email.'</td></tr><tr><td>Phone</td><td>'.$number.'</td></tr><tr><td>Message</td><td>'.$msg.'</td></tr></table></body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
   
} else{
    echo 'Unable to send email. Please try again.';
}
}
else
echo("Please fill all the details");
?>