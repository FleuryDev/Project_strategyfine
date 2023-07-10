<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Posts;
use App\Models\User;
use Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Gate::define('update-post', function (User $user, Posts $posts) {
            return $user->id = $posts->user_id;
        });
        Gate::define('delete-post', function (User $user, Posts $posts) {
            return $user->id = $posts->user_id;
        });
    }
}