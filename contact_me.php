<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

 $conn = new mysqli('localhost','root','','fitofit');
      if($conn->connect_error) 
      {
        die('Connection Failed : ' .$conn->connect_error);
          
      }
else{
   $stmt = $conn->prepare("insert into contact(name,email,phone,message)values(?,?,?,?)");
    $stmt->bind_param("ssis", $name, $email, $phone, $message);
    $stmt->execute();
    echo "contact form filled succesfully.....";
        $stmt->close();
        $conn->close();
}
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
//$name = strip_tags(htmlspecialchars($_POST['name']));
//$email= strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
//$message = strip_tags(htmlspecialchars($_POST['message']));

   
// Create the email and send the message
//$to = 'amanrxl99@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//$email_subject = "Website Contact Form:  $name";
//$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
//$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email";   
//mail($to,$email_subject,$email_body,$headers);
//return true;

?>
