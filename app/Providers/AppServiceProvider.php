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

        QueryBuilder::macro('search', function (string $field, $searchTerm) {
            return $searchTerm ? $this->where($field, 'like', '%' . $searchTerm . '%') : $this;
        });
        QueryBuilder::macro('searchWithRelation', function (string $relation, $field, $searchTerm) {
            return $searchTerm ? $this->with([$relation => function ($query) use ($field, $searchTerm) {
                $query->where($field, 'like', '%' . $searchTerm . '%');
            }]) : $this;
        });

        QueryBuilder::macro('searchWithRelation', function (string $relation, $field, $searchTerm) {//dinamize table_name, _id
            return $searchTerm ? $this->join($relation, $relation . '.id', '=', 'table_name.' . $relation . '_id')
                ->where($relation . '.' . $field, 'like', '%' . $searchTerm . '%') : $this;
        });
    }
}
