<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dates';
    /**
     * The primary key associated with the table.
     *
     * @var integer
     */
    protected $primaryKey = 'id';
    /**
     * libelle.
     *
     * @var string
     */
    protected $libelle = 'libelle';

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
