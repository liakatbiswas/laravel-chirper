<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
 use HasFactory;

 /** All fields inside $fillable array can be mass-assigned
  * In eloquent ORM, $fillable attribute is an array containing all those
  * fields of table which can be filled using mass-assignment.
  * Mass assignment refers to sending an array to the model to directly
  * create a new record in Database.
  */
 protected $fillable = ['message'];

 public function user()
 {
  return $this->belongsTo(User::class);
 }
}