<?php

namespace App\Providers;

use App\Policies\FaqPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Faq' => 'App\Policies\FaqPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        // Gate::define('delete_faq', function ($user, $faq) {
        //     return $user->id == $faq->user_id;
        // });

        // Gate::define('faqs.update', FaqPolicy::class . '@update');
        // Gate::define('faqs.delete', FaqPolicy::class . '@delete');

        // Gate::define('update_faq', function ($user, $faq) {
        //     return $user->id == $faq->user_id;
        // });

        Gate::before(function ($user) {
            if ($user->hasRole('admin')) {
                return true;
            }
        });
    }
}
