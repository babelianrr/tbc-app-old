<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

  function HomeModel()
  {
    parent::Model();
  }

  function verifyEmailAddress($verificationcode)
  {
    $sql = "UPDATE trn_user SET active_status='A' WHERE email_verification_code=?";
    $this->db->query($sql, array($verificationcode));
  }
}
