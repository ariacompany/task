<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $IDTask
 * @property string $DeskripsiTask
 * @property int $Priority
 * @property string $Status
 * @property boolean $IsActive
 * @property string $CreatedDate
 * @property string $UpdatedDate
 * @property int $IDCategory
 * @property int $IDAdventure
 * @property int $NextTask
 * @property Adventure $adventure
 * @property Category $category
 * @property Task $task
 */
class Task extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'task';

    /**
     * @var array
     */
    protected $fillable = ['DeskripsiTask', 'Priority', 'Status', 'IsActive', 'CreatedDate', 'UpdatedDate', 'IDCategory', 'NextTask'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function adventure()
    {
        return $this->belongsTo('App\Adventure', 'IDAdventure', 'IDAdventure');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'IDCategory', 'IDCategory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function task()
    {
        return $this->belongsTo('App\Task', 'NextTask', 'IDTask');
    }
}
