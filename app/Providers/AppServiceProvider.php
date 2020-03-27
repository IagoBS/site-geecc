<?php

namespace App\Providers;

use App\Institute;
use App\Project;
use App\SocialNetwork;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('users_templetes', User::all());
        View::share('institutes_templetes', Institute::all());
        View::share('projects_templetes', Project::all());
        View::share('sociais', SocialNetwork::all());
    }
}
