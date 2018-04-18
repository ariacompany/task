<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends serviceProvider
{
    public function register(){
        $this -> app -> bind('app\Repositories\CategoryRepo\ICategoryRepo','app\Repositories\CategoryRepo');
    }
}