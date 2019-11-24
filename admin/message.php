<?php 
   
   $result = '';

   if (isset($_POST['submit'])) {
         require 'phpmailer/PHPMailerAutoload';
         $mail = new PHPMailer;

         
         $mail->Host = 'smtp.gmail.com';
         $mail->Port = '587';
         $mail->SMTPAuth = true;
         $mail->Username = 'shresthanabin244@gmail.com';
         $mail->Password = 'Urmila244';
         $mail->SMTPSecure = 'tls';
         
         
         $mail->setFrom($_POST["email"]);
         $mail->AddAddress('smartvamps@gmail.com');
         $mail->addReplyTo($_POST["email"]);
         // $mail->wordWrap = 50;

         // $mail = IsSMTP(true);
         $mail->IsHTML(true);
         $mail->Subject ='Form Submission'. $_POST["subject"];
         $mail->Body = '<h2 align=center> Email: '. $_POST['email'] . '<br>Message: ' .$_POST['msg'] . '</h2>';

         if (!$mail->send()) {
            $result = '<label class="text-success">There is an error</label>';
         }
         else
         {
            $result = '<label class="text-danger">Thank you for message</label>';
         }
         $email = '';
         $subject = '';
         $message = '';
 
   }



 ?>


<link rel="stylesheet" type="text/css" href="main.css">
<div class="container-fluid">
   <div class="row">
      <?php require 'sider.php'; ?>
      <div class="col-md-9 bg-secondary" >
         <h2 class="py-4 text-center"><big>Create Message</big></h2>
         <?php echo $result; ?>
         <form method="POST" action="" class="forme">
            <div class="bg-dark text-white font-weight-bold py-2 pl-3">New Message</div><br>
            <input type="email" name="email" placeholder="To" class="pl-2" value="" required><br>
            <hr>
            <input type="text" name="subject" placeholder="subject" class="pl-2"  value="" required>
            <hr>
            <textarea type="text" name="msg" id="msg" cols="115" rows="10" required></textarea><br><br>
            <button class="btn btn-primary px-4" type="submit" name="submit">Send</button>
         </form>
      </div>
   </div>
</div>