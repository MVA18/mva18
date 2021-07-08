<?php

namespace Domain\Contacts\Models;

use Domain\Contacts\QueryBuilders\ContactQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'cell_number',
        'dob'
    ];

    protected $casts = ['dob' => 'date'];


    public function newEloquentBuilder($query): ContactQueryBuilder
    {
        return new ContactQueryBuilder($query);
    }

}