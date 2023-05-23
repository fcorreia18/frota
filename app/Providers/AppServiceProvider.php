<?php

namespace App\Providers;

use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        QueryBuilder::macro('search',function(string $field, $searchTerm){
            return $searchTerm ? $this->where($field,'like','%'.$searchTerm.'%'):$this;
        });
    }
}
