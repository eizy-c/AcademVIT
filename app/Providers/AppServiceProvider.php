<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        //
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();

        // Custom Vite directive for Laravel 8
        Blade::directive('vite', function ($expression) {
            return "<?php
                \$assets = $expression;
                if (!is_array(\$assets)) { \$assets = [\$assets]; }
                \$manifestPath = public_path('build/manifest.json');
                \$isLocal = app()->environment('local') && !file_exists(\$manifestPath);
                
                \$html = '';
                if (\$isLocal) {
                    \$html .= '<script type=\"module\" src=\"http://localhost:5173/@vite/client\"></script>';
                    foreach (\$assets as \$asset) {
                        if (preg_match('/\.css$/', \$asset)) {
                            \$html .= '<link rel=\"stylesheet\" href=\"http://localhost:5173/' . \$asset . '\">';
                        } else {
                            \$html .= '<script type=\"module\" src=\"http://localhost:5173/' . \$asset . '\"></script>';
                        }
                    }
                } else {
                    if (file_exists(\$manifestPath)) {
                        \$manifest = json_decode(file_get_contents(\$manifestPath), true);
                        foreach (\$assets as \$asset) {
                            if (isset(\$manifest[\$asset])) {
                                \$file = \$manifest[\$asset]['file'];
                                if (preg_match('/\.css$/', \$asset)) {
                                    \$html .= '<link rel=\"stylesheet\" href=\"/build/' . \$file . '\">';
                                } else {
                                    \$html .= '<script type=\"module\" src=\"/build/' . \$file . '\"></script>';
                                }
                            }
                        }
                    }
                }
                echo \$html;
            ?>";
        });
    }
}
