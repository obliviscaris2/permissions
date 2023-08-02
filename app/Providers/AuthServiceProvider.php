<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Arr;
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

        // Gate::define('hasPermission',function($user,$permission){
        //     $role = Role::with('permissions')->whereIn('id',[$user->role])->first();
        //     return $role->permissions->contains('name',$permission) && $user->is_active==1;
        // });

        Gate::define('hasPermission', function ($user, $permissions) {
            // $role = Role::with('permissions')->whereIn('id', [$user->role])->first();
            $role = Role::with('permissions')->where('id', $user->role)->first();

            // dd($user->role); // Check if the $user->role is correct.
            // dd($permissions); // Check if the $permissions array is being passed correctly.
        
        
            // Ensure the user role and permissions exist
            if (!$role || !$role->permissions) {
                return false;
            }
        
            // Convert the $permissions argument to an array if it's not already
            $permissions = Arr::wrap($permissions);
        
            // Check if the user has all the specified permissions
            foreach ($permissions as $permission) {
                if (!$role->permissions->contains('name', $permission)) {
                    return false;
                }
            }
        
            // Check the user's active status
            return $user->is_active == 1;
        });

        //
        Gate::define('hasUpdateUserPermission',function($user,$id){
            return $user->role!=User::find($id)->role && User::find($id)->role!=1;
        });
    }
}
