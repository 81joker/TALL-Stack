<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory, HasUuids;
    protected $guarded = ['id'];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function user(){
        return  $this->belongsTo(User::class);
    }
    // public function publishedNotes(User $user){
    //     return $this->where('user_id' ,$user->id)->where('is_published')->get();
    // }
}
