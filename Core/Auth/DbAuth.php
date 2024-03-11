<?php

namespace Core\Auth;

use App\Database;

class DbAuht
{
  private $db;

  public function __construct(Database $db)
  {
    $this->db = $db;
  }


  public function getUserId()
  {
    if ($this->logged())
    {
      return $_SESSION['auth'];
    }
    return false;
  }

  /**
   * @param $username
   * @param $mdp
   * @return boolean
   */
  public function login($username, $mdp)
  {
    $user = $this->db->prepare("
      SELECT * FROM users 
      WHERE username = ?
    ", [$username] , null , true);

    if ($user)
    {
      if($user->password=== sha1($mdp))
      {
        $_SESSION['auth'] = $user->id;
        return true;
      }
    }
    return false;

  }

  public function logged()
  {
    return isset($_SESSION['auth']);
  }
}