<?php

if(isset($_SESSION['logged']) && !isset($_SESSION['stayLogin'])){
  if(time() - $_SESSION['login_time'] >= 1800){
    session_destroy(); // destroy session.
    header("Location: index.php?P=logout");
    die(); // See https://thedailywtf.com/articles/WellIntentioned-Destruction
    //redirect if the page is inactive for 30 minutes
  }
  else {        
   $_SESSION['login_time'] = time();
   // update 'login_time' to the last time a page containing this code was accessed.
 }
}


if(isset($_POST['bejelentkezes']))
{
  require_once PROTECTED_DIR.'database.php';

  if (getConnection()) {

    $email = test_input($_POST['loginEmail']);
    $password = test_input($_POST['loginPassword']);

    if (!empty($email) || !empty($password)) {
      $query = "SELECT email, password FROM users WHERE email=:email and password=:password";
      if (getField($query, [":email" => $email, ":password" => sha1($password)])) {
        $query = "SELECT * FROM users WHERE email=:email and password=:password";
        $datas = getRecord($query, [":email" => $email, ":password" => sha1($password)]);
        $_SESSION['logged'] = true;
        $_SESSION['username'] =  $datas['username'];
        $_SESSION['flags'] = $datas['flags'];
        $_SESSION['login_time'] = time();
        if (isset($_POST['stayLogin'])) {
          $_SESSION['stayLogin'] = $_POST['stayLogin'];
        }
        print_r($datas);
        echo "<br>";
        print_r($_SESSION);
      }
    }

    else{
      echo '<div class="alert alert-danger alert-dismissible fade show succRegister" role="alert">
      <strong>Kérlek adj meg minden adatot a bejelentkezéshez!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>';
    }

  }
}
?>

