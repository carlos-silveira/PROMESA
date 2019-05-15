<?php

namespace App\Providers;
use App\Alumno;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Alumno::created(function ($book) {
          $book->update([ 'n_matricula'=> '19CNC'. $book->id]);
});
}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
