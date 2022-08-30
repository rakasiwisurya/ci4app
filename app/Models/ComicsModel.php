<?php

namespace App\Models;

use CodeIgniter\Model;

class ComicsModel extends Model
{
  protected $table = 'comics';
  protected $returnType     = 'array';
  protected $useTimestamps      = true;
}
