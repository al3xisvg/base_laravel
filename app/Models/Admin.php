<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model {
  use HasFactory;

  protected $table = 'wp_admins';

  protected $guarded = ['id'];

  protected $hidden = [
    'password', 'token',
  ];

  public function getAuthPassword() {
    return $this->password;
  }
}
