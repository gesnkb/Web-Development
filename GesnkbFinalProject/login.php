
<?php
ob_start();

   
   $action= empty($_POST['action']) ? false : $_POST['action'];
switch ($action){
    case 'login':
        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $password = empty($_POST['password']) ? '' : $_POST['password'];
        if($username == 'test' && $password == 'pass'){
             header("location: loggedIN.html");
            setcookie('userid', $username);
        }
        else{
          $response = 'Login failed. Please refresh page a try again with username "test" and password :pass';

        }
        print $response;
        break;

    case 'logout':
        setcookie('userid', '', 1);
        print 'Logged out';
        break;
    default:
        print "Error. Please refresh page";
            break; 
        
        }

?>
