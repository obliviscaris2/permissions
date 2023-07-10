<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('hasPermission',function($user,$permission){
            $role=Role::with('permissions')->whereIn('id',[$user->role])->first();
            return $role->permissions->contains('name',$permission) && $user->is_active==1;
        });
        //
        Gate::define('hasUpdateUserPermission',function($user,$id){
            return $user->role!=User::find($id)->role && User::find($id)->role!=1;
        });
    }
}
