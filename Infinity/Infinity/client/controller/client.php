<?PHP
include "../../config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../vendor/autoload.php';

class clientC {
    static function sendemail($email ,$email_content){
		$mail = new PHPMailer(true);

		//$mail->SMTPDebug = 2;                                     //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'snct.tunisie@gmail.com';          //SMTP username
		$mail->Password   = '12345678azerty';                            //SMTP password
		$mail->SMTPSecure = "ssl";                                  //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
		//Recipients
		$mail->setFrom('snct.tunisie@gmail.com', "SNCT");
		$mail->addAddress($email);                     //Add a recipient
		
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		
		$mail->Subject = $email_content['Subject'];      
		$mail->Body = $email_content['body'];
		
		$mail->send();
	}

	
	function register($client){
        $t = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 49);
		$sql="insert into client(cin,nom,prenom,email,pwd, num_tel, destination, isVerified, token) values 
(:cin,:nom,:prenom,:email,:pwd ,:num_tel , :destination, :isVerified, :token)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
       $cin=$client->getCin();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $email=$client->getEmail();
        $pwd=$client->getPassword();
        $num_tel=$client->getPhone();
        $destination="";
        $isVerified = 0;
        $token = $t;

        //lier variable => paramètre
        
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':pwd',$pwd);
        $req->bindValue(':num_tel',$num_tel);
        $req->bindValue(':destination',$destination);
        $req->bindValue(':isVerified',$isVerified);
        $req->bindValue(':token',$token);
        
        $req->execute();

        $email_content = array(
            'Subject' => 'Email Verfication From snct',
            'body' => "<h4>Hi $prenom  $nom,</h4><br/><br/>
            <h5>Verify your email address by clickig the link below!<h5/>
            <br/>
            <a href='http://localhost/Infinity/infinity/client/controller/verifyEmail.php?token=$token&email=$email'>Verify my email</a>"
        );

               
        $this->sendemail($email,$email_content);
        
        

            // header('Location: index.php');

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

        
		
    }

function send_reset_pass_link($email)  {
    $db = config::getConnexion();
    $token = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 49);
    $req1 = "UPDATE client SET token='$token' where email = '$email'";
    $req2 = "SELECT * from client where email = '$email'";

    try {
        $db->exec($req1);
        $updatedUser = $db->query($req2)->fetchObject();
        
        $email_content = array(
            'Subject' => 'Reset Password Link From iLearn',
            'body' => "<h4>Hi $updatedUser->prenom,</h4><br/><br/>
            <h5>We received a request to reset your password. You can do this throught the link below.<h5/>
            <br/>
            <a href='http://localhost/infinity/infinity/client/controller/verifyReset.php?token=$token&email=$email'>Change my password</a>"
        );

        $this->sendemail($email,$email_content);

    } catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }


}
}

    
    
    ?>