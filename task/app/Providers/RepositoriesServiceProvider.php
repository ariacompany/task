<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends serviceProvider
{
    public function register(){
        $this -> app -> bind('app\Repositories\CategoryRepo\ICategoryRepo','app\Repositories\CategoryRepo\CategoryRepo');
        $this -> app -> bind('app\Repositories\AdventureRepo\IAdventureRepo','app\Repositories\AdventureRepo\AdventureRepo');
        $this -> app -> bind('app\Repositories\TaskRepo\ITaskRepo','app\Repositories\TaskRepo\TaskRepo');

    }
}