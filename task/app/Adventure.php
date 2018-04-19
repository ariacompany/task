<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $IDAdventure
 * @property string $NamaAdventure
 * @property boolean $IsActive
 * @property string $CreatedDate
 * @property string $UpdatedDate
 * @property int $IDCategory
 * @property Category $category
 * @property Task[] $tasks
 */
class Adventure extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'adventure';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IDAdventure';

    /**
     * @var array
     */
    protected $fillable = ['NamaAdventure', 'IsActive', 'CreatedDate', 'UpdatedDate', 'IDCategory'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'IDCategory', 'IDCategory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Task', 'IDAdventure', 'IDAdventure');
    }
}
