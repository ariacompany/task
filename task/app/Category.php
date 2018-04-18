<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $IDCategory
 * @property string $NamaCategory
 * @property string $Group
 * @property boolean $IsActive
 * @property string $CreatedDate
 * @property string $UpdatedDate
 * @property Adventure[] $adventures
 * @property Task[] $tasks
 */
class Category extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'category';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IDCategory';

    /**
     * @var array
     */
    protected $fillable = ['NamaCategory', 'Group', 'IsActive', 'CreatedDate', 'UpdatedDate'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function adventures()
    {
        return $this->hasMany('App\Adventure', 'IDCategory', 'IDCategory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Task', 'IDCategory', 'IDCategory');
    }
}
