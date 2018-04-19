<?php
namespace App\Repositories\AdventureRepo;

use App\Adventure;

class AdventureRepo implements IAdventureRepo
{
    protected $adventure;

    function __construct(Adventure $a)
    {
        $this ->adventure = $a;
    }
}