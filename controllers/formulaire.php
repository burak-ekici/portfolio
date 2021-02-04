<?php 

if(isset($_POST['mailform']) AND isset($_POST['nom']) AND isset($_POST['message']))
{
        $nom = htmlspecialchars($_POST['nom']);
        $message = htmlspecialchars($_POST['message']);
        $email =htmlspecialchars($_POST['mail']) ;
        
    if(!empty($nom) AND !empty($message)){
        
        $header="MIME-Version: 1.0\r\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';
		
		$mail='
		<html>
			<body>
				<div align="center">
					<br />
					<u>Nom de l\'expéditeur :</u>'.$nom.'<br />
					<u>Mail de l\'expéditeur :</u>'.$email.'<br />
					<br />
					'.nl2br($message).'
					<br />
				</div>
			</body>
		</html>
		';
		
		$monMail = 'burakroxx@gmail.com';

		mail($monMail, "CONTACT - Monsite.com", $mail, $header);
		
		$commentairebon="Votre message a bien été envoyé !";
        
        
        
        
        
    }else{
        $commentaire = " Tous les champs oblogatoire doivent être remplie !";
        
    };
    
};