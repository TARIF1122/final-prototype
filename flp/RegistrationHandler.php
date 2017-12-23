<?php
    session_start();
    $xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
    $sxe = new SimpleXMLElement($xml->asXML());
	
    function nameValid($name){
        $len = strlen($name);
        $valid= true;
        if($len<2){
            $valid= false;
        }else{
            if( !(($name[0]>='a' && $name[0]<='z') || ($name[0]>='A' && $name[0]<='Z') ) ){
                $valid = false;
            } 
            for($i=0; $i<$len; $i++){
                if( !(($name[$i]>='a' && $name[$i]<='z') || ($name[$i]>='A' && $name[$i]<='Z') || $name[$i]=="." || $name[$i]=="-"|| $name[$i]==" " ) ){
                    $valid = false;
                    break;
                }
            }
        }        
        return $valid;
    }

    function emailValid($email){
        $parts = explode("@", $email);
        $valid = true;

        if(count($parts)==2){
            $parts2 = explode(".",$parts[1]);
            if(count($parts2)!=2){
                $valid = false;
            }
        }else{
            $valid = false;
        } 
        return $valid;
    }

    function usernameValid($name){
        $len = strlen($name);
        $valid= true;
        if($len<2){	
            $valid= false;
        }else{
            if( !(($name[0]>='a' && $name[0]<='z') || ($name[0]>='A' && $name[0]<='Z') ) ){
                $valid = false;
            } 
            for($i=0; $i<$len; $i++){
                if( !(($name[$i]>='a' && $name[$i]<='z') || ($name[$i]>='A' && $name[$i]<='Z') || $name[$i]=="." || $name[$i]=="-" ) ){
                    $valid = false;
                    break;
                }
            }
        }        
        return $valid;
    }

    function passwordValid($p, $ap){
        if(strcmp($p,$ap)!==0){
            return false;
        }
        $p_len = strlen($p);
        $valid = false;
        if( $p_len<8 )
            $valid = false;
        else{
            for( $i=0; $i<$p_len; $i++ ){
                if( $p[$i]=='@' || $p[$i]=='#' || $p[$i]=='$'|| $p[$i]=='%' ){
                    $valid = true;
                    break;
                }
            }
        }
        return $valid;
    }

    function dateValid($date){
        if($date){
            if( $date>=1 && $date<=31 )
                return true;
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    function monthValid($month){
        if($month){
            if( $month>=1 && $month<=12 )
                return true;
            else{
                return false;
            }
        }
        else{
            return false;
        }        
    }

    function yearValid($year){
        if($year){
            if( $year>=1900 && $year<=2017 )
                return true;
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
    
    $name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$gender = empty($_POST['gender']) ? false : $_POST['gender'];
	$date = $_POST['date'];
	$month = $_POST['month'];
    $year = $_POST['year'];

    $ok = true;

    if( !nameValid($name) ){
        echo "Invalid Name<br>";
        $ok = false;
    }
    if( !emailValid($email) ){
        echo "Invalid Email<br>";
        $ok = false;
    }
    if( !usernameValid($username) ){
        echo "Invalid username<br>";
        $ok = false;
    }
    if( !passwordValid($password,$cpassword) ){
        echo "Invalid password<br>";
        $ok = false;
    }
    if( !$gender ){
        echo "Invalid gender<br>";
        $ok = false;
    }
    if( !dateValid($date) ){
        echo "Invalid date<br>";
        $ok = false;
    }
    if( !monthValid($month) ){
        echo "Invalid month<br>";
        $ok = false;
    }
    if( !yearValid($year) ){
        echo "Invalid year<br>";
        $ok = false;
    }

    if($ok){
        
        $user = $sxe->addChild('user');
        $user->addChild('name', $name);
        $user->addChild('email', $email);
        $user->addChild('username', $username);
        $user->addChild('password', $password);
        $user->addChild('gender', $gender);
        $user->addChild('picture', "picture/profile.jpg");
    
        $birth  = $user->addChild('birth');
        $birth->addChild('date', $date);
        $birth->addChild('month', $month);
        $birth->addChild('year', $year);
        
        
        $sxe->asXML("users.xml");
    
        header("location: Login.php");
    }
?>