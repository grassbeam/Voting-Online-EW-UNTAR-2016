<?php
	if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');

	class EmailSender {
		private $email = "";
		private $name = "";
		private $code = "";
		private $stand = "";
		private $ipaddr = "";

		function linkGenerator($plaintext) {
			$data = $plaintext;
			return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
		}


		function sendMail($content, $numstand, $ipad) {

			//require '../apps/Mailer/PHPMailerAutoload.php';

			$mail = new PHPMailer;

			$this->email = $content['email'];
				$this->name = $content['name'];
				$this->code = $content['code'];
				switch ($numstand) {
					case '1':
						$this->stand = 'Kribcorn';
						break;
					case '2':
						$this->stand = 'Ars Ligna';
						break;
					case '3':
						$this->stand = 'SPASIA';
						break;
					case '4':
						$this->stand = 'Krobi';
						break;
					case '5':
						$this->stand = 'Bocil(Bolu Centil)';
						break;
					case '6':
						$this->stand = 'B.A.Q';
						break;
					case '7':
						$this->stand = 'Sushiban';
						break;
					case '8':
						$this->stand = 'Cheese Pong';
						break;
					case '9':
						$this->stand = 'Warung es Batavia';
						break;
					case '10':
						$this->stand = 'POTACO';
						break;
					case '11':
						$this->stand = 'NAKAL(Nasi Lokal)';
						break;
					case '12':
						$this->stand = 'Magaza';
						break;
					case '13':
						$this->stand = 'Sir Chick';
						break;
					case '14':
						$this->stand = 'Sandwitch';
						break;
				}
				$this->ipaddr = $ipad;
				
				$plains = $this->email . 'asdefg' . $this->code;
				$link = $this->linkGenerator($plains);

				
				// $from = 'no-reply-ew2016@snti.untar.ac.id';
				$to = $this->email;	
				$subject = 'Confirmation Code Voting UNTAR Entrepreneur Week';

				// To send HTML mail, the Content-type header must be set
				// $headers  = 'MIME-Version: 1.0' . "\r\n";
				// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				// // Additional headers
				// $headers .= 'To: ' . $this->name . ' <' . $to . '>' . "\r\n";
				// $headers .= 'From: UNTAR Enterpreneur Week <entrepreneurweekuntar@gmail.com>' . "\r\n";

				$message = ' <div>
	<table style="width:538px;background-color:#FFFFFF;" align="center" cellspacing="0" cellpadding="0">
		<tbody><tr>
			<td style="height:65px;background-color:#FFFFFF;" align="left">
	              <a href="http://www.entrepreneurweekuntar.com/" target="_blank">
				  		<!--<img src="http://s16.postimg.org/cdaur3u91/logo_email.png" width="538" height="70" alt="Untar" />-->
				  		<!--<img src="http://s32.postimg.org/bpvktdiys/logo_EWemail.jpg" width="310" height="173" alt="UntarEW" border="0" style="padding-left: 10px;" />-->
				  		<img src="http://s20.postimg.org/6rdv9m7rx/logo_EWemail.jpg" width="310" height="173" alt="logo EWemail" style="padding-left: 7%;" />
				  </a>
	        </td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF">
				<table width="470" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-left:5px;padding-right:5px;padding-bottom:10px;">

					<tbody><tr >
						<td style="padding-top:32px;">
						<span style="padding-top:16px;padding-bottom:16px;font-size:24px;color:#66c0f4;font-family:Arial, Helvetica, sans-serif;font-weight:bold;">
							Dear ' . $this->name . '
						</span><br>
						</td>
					</tr>
					
					<tr>
						<td style="padding-top:0px;">
						<span style="font-size:17px;color:#000000;font-family:Arial, Helvetica, sans-serif;font-weight:bold;">
							<p>Ini adalah Confirmation Code yang dibutuhkan untuk vote Stand: ' . $this->stand .'</p>
						</span>
						</td>
					</tr>


					<tr>
						<td bgcolor="#FFFFFF" style="padding-bottom: 30px;padding-top: 10px;">
							<div>
								<span style="font-size:24px;color:#66c0f4;font-family:Arial, Helvetica, sans-serif;font-weight:bold;">' . $this->code .' </span>
							</div>
							<br/>
							<div>
								<span style="font-size:12px;color:#000000;font-family:Arial, Helvetica, sans-serif;font-weight:bold;"> or click this link to confirm: </span>
								<br/>
								<a href="http://snti.untar.ac.id/ew2016/voting/?confirm='. $link .'
	" style="font-size:12px;color:#33bbff;font-family:Arial, Helvetica, sans-serif;font-weight:bold;">http://snti.untar.ac.id/ew2016/voting/?confirm='. $link . '</span>
							</div>
						</td>
					</tr>


					<tr bgcolor="#c0262b">
						<td style="padding:20px;font-size:12px;line-height:17px;color:#c6d4df;font-family:Arial, Helvetica, sans-serif;">
								<p style="padding-bottom:10px;color:#c6d4df;">This email was generated because of a vote attempt from device located at ' . $this->ipaddr . '
								<p style="padding-bottom:10px;color:#c6d4df;font-weight: bold;">Confirmation code is required to complete the vote.  <span style="color:#ffffff;font-weight:bold;"></p>
								
						</td>

					</tr>


					<tr>
						<td style="font-size:12px;color:#6d7880;padding-top:16px;padding-bottom:20px;">
	                    			UNTAR Entrepreneur Week Support Team<br>
	                    			<a rel="nofollow" style="color:#8f98a0;" target="_blank" href="http://www.entrepreneurweekuntar.com/">http://www.entrepreneurweekuntar.com/</a><br>
	                    </td>
					</tr>

				</tbody></table>
			</td>
		</tr>

	 <tr><td bgcolor="#B42328">
	     	<table width="600" height="55" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-left: 20px;">
	       	 <tbody>
	       	 <tr valign="middle">
	          
	          <td width="110" align="left">
	          	<a href="http://untar.ac.id/"><img class="preload-me retinized" srcset="http://untar.ac.id/web-data/uploads/2015/01/150-white.png 1x, http://untar.ac.id/web-data/uploads/2015/01/230-white.png 2x" width="150" height="36" alt="UNTAR" src="http://untar.ac.id/web-data/uploads/2015/01/150-white.png"></a>  
	          </td>
			  <td width="500" valign="middle" align="center">
			   <span style="font-size:12px;color:#FFFFFF;font-weight:bold;">©2016 UNTAR Entrepreneur Week.</span>
			  </td>
			  <td width="230" valign="middle" align="right" style="padding-right: 20px;">
				  <p>
				   	<a href="https://www.facebook.com/Untar-Entrepreneur-Week-1742379462715437/">
				   		<img class="wp-image-34830 alignright" src="http://untar.ac.id/web-data/uploads/2016/02/facebo1ok.png" alt="FACEBOOK" width="25" height="25">
				   	</a>
				   	<a href="https://twitter.com/untarjakarta">
				   		<img class="wp-image-34829 alignright" src="http://untar.ac.id/web-data/uploads/2016/02/twitt1er.png" alt="TWITTER" width="25" height="25">
				   	</a>
				   	<a href="https://www.instagram.com/entrepreneur_week.untar/">
				   		<img class="wp-image-34832 alignright" src="http://untar.ac.id/web-data/uploads/2016/02/insta1gram.png" alt="INSTAGRAM" width="25" height="25">
				   	</a>
				  </p>
			  </td>
	       	 </tr>
	        </tbody></table>
		</td>
	  </tr>
	</tbody></table>

	</div>';

			//Enable SMTP debugging. 
			$mail->SMTPDebug = 0;                               
			//Set PHPMailer to use SMTP.
			$mail->isSMTP();            
			//Set SMTP host name                          
			$mail->Host = "smtp.gmail.com";
			//Set this to true if SMTP host requires authentication to send email
			$mail->SMTPAuth = true;                          
			//Provide username and password     
			$mail->Username = "entrepreneurweekuntar@gmail.com";                 
			$mail->Password = "EWUntar2016";                           
			//If SMTP requires TLS encryption then set it
			//$mail->SMTPSecure = "tls";                           
			//Set TCP port to connect to 
			$mail->Port = 587; 

			//$mail->From = "no-reply-ew2016@snti.untar.ac.id";
			//$mail->FromName = "UNTAR Entrepreneur Week 2016";

			$mail->setFrom('no-reply-ew2016@snti.untar.ac.id', 'UNTAR Entrepreneur Week');
			//To address and name
			$mail->addAddress($to, $this->name); //Recipient name is optional

			//Address to which recipient will reply
			$mail->addReplyTo("no-reply-ew2016@snti.untar.ac.id", "UNTAR Entrepreneur Week");

			//Send HTML or Plain Text email
			$mail->isHTML(true);

			$mail->Subject = $subject;
			$mail->Body = $message;

			if(!$mail->send()) 
			{
			    return "Mailer Error: " . $mail->ErrorInfo;
			} 
			else 
			{
			    return "Message has been sent successfully" . $mail->ErrorInfo;
			}


		}
	}
	
?>