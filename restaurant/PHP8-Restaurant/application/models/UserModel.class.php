<?php

class UserModel{




	public function user() {
		$dataBase = new Database();

		$user = $dataBase->query('SELECT * FROM User'); 

		return $user;
	}


	private function hashPassword($password){
    	$salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);
        
        return crypt($password, $salt);
    }


    private function verifyPassword($password, $hashedPassword)
	{
        // Si le mot de passe en clair est le même que la version hachée alors renvoie true.
		return crypt($password, $hashedPassword) == $hashedPassword;
	}
    

	public function enregistrer($post) {


		$dataBase = new Database();

	 
		$nom = $post["nom"];
		$prenom = $post["prenom"];
		$adresse = $post["adresse"];
		$code = $post["code"];
		$ville = $post["ville"];
		$birthday = $post['annee'].'-'.$post['mois'].'-'.$post['jour'];
		$tel = $post["tel"];
		$mail= $post["mail"];
		$password= $post["password"];

		$passwordHash = $this->hashPassword($password);

		$dataBase -> executeSql('INSERT INTO `User`(
											LastName,
											FirstName,
											Address,
											Zipcode,
											City,
											Birthdate,
											Phone,
											Email,
											Password)
							VALUES(
										:nom,
										:prenom,
										:adresse,
										:code,
										:ville,
										:birthday,
										:tel,
										:mail,
										:password
									)', array( ":nom" => $nom , ":prenom" => $prenom , ":adresse" =>$adresse , ":code" => $code, ":ville" => $ville , ":birthday" => $birthday , ":tel" => $tel , ":mail" => $mail ,":password" => $passwordHash ));
			
	}


	public function loginuser($login){

		$dataBase = new Database();

		
		$mail = $login["mail"];
		$password = $login["password"];

		$user = $dataBase -> queryOne('SELECT* FROM User WHERE Email = ?',array($mail));

		if( /*UserModel*/$this->verifyPassword($password, $user['Password'])){
			return($user);

		}else{
             echo"mauvais mot de passe";
		}
	}


	public function session($user){
 
		$_SESSION['prenom']= $user['LastName'];
		$_SESSION['nom']= $user['FirstName'];
		$_SESSION['email']= $user['Email'];
		$_SESSION['id']= $user['Id'];


		
	}

	*public function commande($com){
		$_SESSION['prenom']= $com['LastName'];
		$_SESSION['nom']= $com['FirstName'];
		$_SESSION['adresse']= $com['Adress'];
		$_SESSION['code']= $com['ZipCode'];
		$_SESSION['ville']= $com['City'];

	}*/
}

