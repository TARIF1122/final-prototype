<?php
session_start();
$xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
$sxe = new SimpleXMLElement($xml->asXML());

$target_path = 'picture/'.$_SESSION['current']['username'].'.jpg'; 

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    foreach ($sxe->children() as $user) {
        $uname = (string) $user->username;
        $pass = (string) $user->password;
        
        if ($uname === $_SESSION['current']['username'] && $pass === $_SESSION['current']['password']) {
            $user->picture = $target_path;
    
            $_SESSION['current']['picture'] = $target_path; 
            header("location: ViewProfile.php");
        }
    }
    
    $sxe->asXML("users.xml");
} else {
    echo "There was an error uploading the file, please try again!";
}



?>