
<?php
    session_start();
    $xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
	
	$username = $_POST['username'];
    $password = $_POST['password'];

    $ok = true;
    $invalid = false;

    if(!$username){
        echo "Please Enter UserName<br>";        
        $ok = false;
    }
    if(strlen($password)<1){
        echo "Please Enter Password<br>";
        $ok = false;   
    }

    if($ok){
        foreach ($xml->children() as $user) {
            $uname = (string) $user->username;
            $pass = (string) $user->password;
            
            if ($uname == $username && $pass == $password){
                $name = (string) $user->name;
                $email = (string) $user->email;
                $gender = (string) $user->gender;
                $picture = (string) $user->picture;
                $date = (string) $user->birth->date;
                $month = (string) $user->birth->month;
                $year = (string) $user->birth->year;

                $current = array(
                    "name" => $name,
                    "email" => $email,
                    "username" => $uname,
                    "password" => $pass,
                    "gender" => $gender,
                    "picture" => $picture,
                    "date" => $date,
                    "month" => $month,
                    "year" => $year
                );
                
                $_SESSION['current']= $current;
                header("location: Dashboard.php");
            }
            else{
                $invalid  = true;
            }
        }
    }

    if($invalid){
        echo "Invalid Login<br>";
    }
?> 