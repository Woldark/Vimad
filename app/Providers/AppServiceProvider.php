<?php

namespace App\Providers;

use App\A_content;
use App\C_category;
use App\C_content;
use App\Field;
use App\Job;
use App\N_content;
use App\Observers\CategoryObserver;
use App\Observers\ContentObserver;
use App\Observers\DocumentObserver;
use App\Observers\FieldObserver;
use App\Observers\JobObserver;
use App\Observers\NewsObserver;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength('191');
        Job::observe(JobObserver::class);
        Field::observe(FieldObserver::class);
        C_category::observe(CategoryObserver::class);
        C_content::observe(ContentObserver::class);
        N_content::observe(NewsObserver::class);
        A_content::observe(DocumentObserver::class);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
