<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
  protected $table = 'employees';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id',
      'emp_name',
      'emp_position',
      'emp_votes',
      'emp_rating',
      'emp_picture',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'remember_token',
  ];



}
