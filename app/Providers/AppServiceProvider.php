<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


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
        $this->composeView();
    }

    /**
     * Bind the data to the views.z
     *
     * @return void
     */
    protected function composeView()
    {
        view()->composer(['admin.layouts.side-nav'], function ($view) {

            $userPermissions = isset(auth()->user()->role->permissions) ? auth()->user()->role->permissions : null;

            $navArray = include app_path('Helpers/side.php');

            if ($userPermissions) {

                $permissionType = auth()->user()->role->permission_type;

                $allowedPermissions = auth()->user()->role->permissions;

                // Filter the side navigation based on user permissions
                $filteredSideNav = array_filter($navArray, function ($item) use ($allowedPermissions) {
                    // If the route is in the user's permissions, keep it
                    if (in_array($item['route'], $allowedPermissions)) {
                        return true;
                    }
                    // If there are sub-menu items, check their routes too
                    if (isset($item['sub_menu'])) {
                        foreach ($item['sub_menu'] as $subItem) {
                            if (in_array($subItem['route'], $allowedPermissions)) {
                                return true;
                            }
                        }
                    }
                    return false;
                });
            }else{
                $filteredSideNav = $navArray;
            }

            $view->with('filteredSideNav', $filteredSideNav);
        });
    }
}
