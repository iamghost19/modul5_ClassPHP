<?php
class userService
{
    protected $email;    // using protected so they can be accessed
    protected $password; // and overidden if necessary
    protected $dataUser; // dummy data
    protected $getRole;  // stores the role data

    public function __construct($email, $password) 
    {
        $this->_dataUser = [
            (object) [
                'email'     => "rifqikel25@gmail.com",
                'password'  => "admin",
                'role'      => "superadmin"
            ],
            (object) [
                'email'     => "anharkel25@gmail.com",
                'password'  => "12345",
                'role'      => "user"
            ]
        ];
       $this->email = $email;
       $this->password = $password;
	$sejarah=array();
	$sejarah [0][0]="rifqikel25@gmail.com";
	$sejarah [0][1]="buku: sisdig";
	$sejarah [0][2]="buku: eldas";
	$sejarah [0][3]="tanggal: 25-4-2020";
	$sejarah [1][0]="anharkel25@gmail.com";
	$sejarah [1][1]="buku: strukdat";
	$sejarah [1][2]="buku: Jarkom";
	$sejarah [1][3]="tanggal: 25-4-2020";	
	$this->histori=$sejarah;
    }
function histories($email)
	{
	$sej=$this->histori;
	$len=count($sej);
	for	($i= 0; $i< $len; $i++)
	{
		if (($sej[$i][0])==$email)
		{
			echo $sej[$i][1];
			echo '<br>';
			echo $sej[$i][2];
			echo '<br>';
			echo $sej[$i][3];
		}
	}
	}
    public function login()
    {
        $user = $this->checkCredentials();
        if($user) {
            $this->getRole = $user->role;
            return $get_data = $user->email;
        } else {
            return false;
        }
    }

    protected function checkCredentials()
    {
        foreach($this->_dataUser as $key => $value) {
            if($value->email == $this->email && $value->password == $this->password) {
                return $value;
            }
			
        }
        return false;
    }

    public function getRole()
    {
        return $this->getRole;
    }
}
?>
