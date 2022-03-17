<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\CourseStudent;
use Illuminate\Support\ServiceProvider;
use App\Models\Student;
use Illuminate\Support\Facades\Artisan;

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
         view()->share('allregistered', Student::count());
         view()->share('allstudygroup', Course::count());
         view()->share('studentgroup', CourseStudent::distinct('student_id')->count());

    }
}
