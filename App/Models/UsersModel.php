<?php

namespace App\Models;

use PDO;

Class UsersModel extends DatabaseModel
{
	protected static $tablename = 'users';
	protected static $columns = [
	 'password',
	 'password',
	 'first_name',
	 'last_name',
	 'profile_image',
	];

	//Return true if E-Mail exists
	//Return false if E-Mail not exists

	public function doesThisEmailExist($email){
			$db =$this ->getDatabaseConnection();

			$sql = 'SELECT email FROM users WHERE email =:email';

			$statement =$db ->prepare($sql);

			$statement -> bindValue(':email',$email);

			$statement ->execute();

			if($statement->rowCount()==1){
				return true;
			}else{
				return false;
			}
	}
		public function saveNewUser(){
			//Get =$this database cpnnection
			$db=$this->getDatabaseConnection();
			// Prepare the sql
			$sql ='INSERT INTO users(email,password)
					VALUES (:email, :password)';

			$statement =$db ->prepare($sql);


			//Bind the form data to the SQL query
			$statement->bindValue(':email', $_POST['email']);

			$statement->bindValue(':password', $_POST['password']);

			//Run the query
			$result = $statement ->execute();

			//Confirm that it worked
			if($result==true){
				//yay!
				$_SESSION['user_id']=$db->lastInsertId();
				$_SESSION['privilege']= "user";

				header('Location:index.php?page=account');
			}else{
				//Uh oh...
			}

			//If it did,log the user in and redirect to their

			//new account page!




		}
		//login functionality
		public function attemptLogin (){

			$db =$this ->getDatabaseConnection();


			// Find the password of the user with a matching email
			$sql ='SELECT id, password, privilege, email FROM users WHERE email =:email ';

			$statement =$db -> prepare($sql);


			$statement -> bindValue(':email',$_POST["email"]);

			$statement ->execute();

			$record = $statement ->fetch(PDO::FETCH_ASSOC);
		


			//did we get an array?(email found!) 
			if(is_array($record)){
				//email found

				$result= password_verify($_POST['password'], $record['password']);

				//if the result is goood
				if($result == true){
				// log the usert in and redirect to account page
					$_SESSION['user_id']=$record['id'];
					$_SESSION['privilege']=$record['privilege'];
					$_SESSION['user_email']=$record['email'];


					header('Location:index.php?page=account');
				}else{
				//Bad password ,return false so user sees error message
				return false;
			
			}



			}else{
				//email not found
				//Tell user bad credent
				return false;
			}




		}
}
