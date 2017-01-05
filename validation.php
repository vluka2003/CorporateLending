<?php
	session_start();


		if(isset($_POST['action']) && $_POST['action'] == "send"){

        	require '../mail/PHPMailerAutoload.php';

			$mail = new PHPMailer;
	        $from = $_POST['email'];
	        $fname = $_POST['fname'];
	        $phone = $_POST['phone'];
	        $message = $_POST['message'];
			//$mail->SMTPDebug = 3;

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'unitytempsite@gmail.com';
			$mail->Password = '4oakland2';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;

			$mail->setFrom($from, 'corplending  Customer Inquiry');
			$mail->addAddress('vluka2003@gmail.com');
			//$mail->addAddress('mechevarria@exceldebt.com');
			$mail->isHTML(true);

			$mail->Subject = $fname . " is Requesting for more information about Corp Lending Center";
			$mail->Body    = "<u><b>MORE INFO REQUEST </b></u><br><br>Client name is " . $fname . ".<br> Phone Number is: " . $phone . ".<br> His/Her Email is: " . $from . "<br> Enquiry about corp  Lending: " . $message . "<br> Please respond immediately to " . $fname . " regarding the request for more information about Excel Debt Relief services.";
        	$subject = "Client requesting more information regarding Corp Lending Center";


            if(!$mail->send()) {
                $_SESSION['mail_msg'][] = "Mail not sent";
            } else {
                $_SESSION['mail_msg'][] = "Message Was Sent Successfully. <br> Our Staff Will Be In Touch With You Shortly.";
            }

            		// redirect to index if errors //


	    }
			header("Location: index.php");






?>
