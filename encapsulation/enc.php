<?php
class person{
 public $username;
 protected $mobilenub;
 private  $password;

public function __construct($uname,$mno,$upass){
     $this->username=$uname;
     $this->mobilenub=$mno;
     $this->password=$upass;
}
 function getPassword(){
		return $this->password;
	}

}

class people extends person{
	public function getMobilenub(){
		return $this->mobilenub;
	}
}

$object = new people('Sarwaich Ali','03073000011','mypass');
echo "Username is :".$object->username."<br>";
echo "Mobile Number  is :".$object->getMobilenub()."<br>";
echo "Password is :".$object->getPassword();

?>