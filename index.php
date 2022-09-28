<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="mail.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>mail</title>
    
</head>
<body>
    <div class="img">
   <div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"><h3>EMAIL</h3></div>
                <div class="card-body">
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                        <label for="Email">Email :</label>
                        <input type="email" name="email" class="form-control" id="Email" placeholder="Your@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="Subject">Subject :</label>
                            <input type="text" name="subject" class="form-control" id="Subject" placeholder="Subject for your mail">
                        </div>
                        <div class="mb-3">
                            <label for="Message">Message :</label>
                            <textarea name="message" id="Message" class="form-control" cols="30" rows="7" placeholder="Message"></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="send" class="btn btn-primary">send</button>
                        </div>
                    </form>
                    <?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);


    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sdhinesh140@gmail.com';
    $mail->Password = 'jmlimgpfquwypehn';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setfrom('sdhinesh140@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    if($mail->send()){
        echo "<span class=check>mail sent successfully</span>";
    }
    else{
        echo "<span class=check>mail not send</span>";
    }   
}

?>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>
   

</body>
</html>