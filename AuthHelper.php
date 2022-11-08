<?php
session_start();
// Authentication Class Methods
class AuthHelper {
  // SIGNUP
  static function sign_up($user, $secret)
  {   // save the user in the database
    $handle = fopen('users.csv.php', 'a+'); // open the file
    fputs($handle, $user . ";" . $secret . PHP_EOL);
    fclose($handle);
    return true;
  }
  // SIGNIN
  static function sign_in($user, $secret)
  {
    if (file_exists('users.csv.php') and is_file('users.csv.php')) {
      $handle = fopen('users.csv.php', 'r'); // open the file
      // 7. check if the email is registered
      while (($data = fgetcsv($handle)) !== false) {
        $info = implode('', $data);
        $user_ = explode(';', $info); // explode the csv row

        if ($user == $user_[0]) { // find the correct user
          if ($secret == $user_[1]) { // match the password
            $_name = 'user';
            $_value = $user;
            setcookie($_name, $_value, time() + (86400 * 30), "/"); // Logged in for a month
          }
        }
      }
      fclose($handle); // close the file
      //SET SESSION LOG
      if (isset($_COOKIE['user'])) {
        $_SESSION['logged'] = true;
        return true;
      } else {
        $_SESSION['logged'] = false;
        return false;
      }
    }
  }
  static function sign_out(){
    // Signs a user out and cancels their session
    if ($_SESSION['logged'] = true) {
      $_SESSION['logged'] = false;
      session_destroy();
      return true;
    }
  }
  // LOGGED IN
  static function logged_in()
  {
    //return true|false
    if (isset($_COOKIE['user'])) {
      $_SESSION['logged'] = true;
      return true;
    } else {
      $_SESSION['logged'] = false;
      return false;
    }
  }
  // USER INFO
  static function info_display($user)
  {
    if (file_exists('users.csv.php') and is_file('users.csv.php')) {
      $handle = fopen('users.csv.php', 'r'); // open the file
      // 7. check if the email is registered
      while (($data = fgetcsv($handle)) !== false) {
        $info = implode('', $data);
        $user_ = explode(';', $info); // explode the csv row
        if ($user == $user_[0]) { // find the correct user
          return $user_; // pass user info
        }
      }
      fclose($handle); // close the file
    }
  }
}
?>
