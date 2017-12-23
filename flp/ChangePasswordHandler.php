<?php
    session_start();
    $xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
    $sxe = new SimpleXMLElement($xml->asXML());
	
    function passwordValid($p){
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
    
    $ok = true;

    $old  = $_POST['old'];
    $new  = $_POST['new'];
    $rnew = $_POST['rnew'];

    if( !passwordValid($new) ){
        echo "Invalid New password<br>";
        $ok = false;
    }
    if( !passwordValid($rnew) ){
        echo "Invalid Retype New password<br>";
        $ok = false;
    }


    if($ok){
        if( strcmp($old,$_SESSION['current']['password'])===0 && strcmp($new,$rnew)===0 ){
            
            foreach ($sxe->children() as $user) {
                $uname = (string) $user->username;
                $pass = (string) $user->password;
                
                if ($uname === $_SESSION['current']['username'] && $pass === $_SESSION['current']['password']) {
                    $user->password = $new;
                    header("location: Dashboard.php");
                }
                else{
                    $invalid  = true;
                }
            }

            $sxe->asXML("users.xml");

            /*
            foreach($_SESSION["users"] as &$user){
                if($user["username"]===$_SESSION['current']['username'] && $user["password"]===$_SESSION['current']['password']){
                    $_SESSION['current']['password']  = $new;
                    $user= $_SESSION['current'];
                    header("location: Dashboard.php");
                }
            }
            */
        
        }else{
            echo "Invalid Enter Password<br>";
        }
    }


?>