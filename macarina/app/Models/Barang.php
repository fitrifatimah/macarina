<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;
	
	protected $table = 'barangs';
	
	protected $hidden = [
        
    ];
    protected $fillable = ['jumlah'];

	protected $guarded = [];

	protected $dates = ['deleted_at'];
}
