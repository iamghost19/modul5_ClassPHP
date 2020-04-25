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
    }

function histories($email)
	{
	if ($email=="rifqikel25@gmail.com")
		{
		echo "buku 1: Sisdig<br>";
		echo "buku 2: Eldas<br>";
		echo "tanggal: 25-4-2020";
		}
	elseif ($email=="anharkel25@gmail.com")
		{
		echo "buku 1: Strukdat<br>";
		echo "buku 2: jarkom<br>";
		echo "tanggal: 25-4-2020";
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