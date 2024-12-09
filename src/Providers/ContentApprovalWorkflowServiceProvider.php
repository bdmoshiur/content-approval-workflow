<?php

namespace Interlink\ContentApprovalWorkflow\Providers; // Correct namespace

use Illuminate\Support\ServiceProvider;

class ContentApprovalWorkflowServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge configuration file from the config directory
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'content-approval-workflow');
    }

    public function boot()
    {
        // Load routes from the Routes directory
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        // Load migrations from the database/migrations directory
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Publish configuration file to the Laravel config path
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('content-approval-workflow.php'),
        ], 'config');

        // Comment out or remove the views publishing as views are not available yet
        // $this->publishes([
        //     __DIR__ . '/../Views' => resource_path('views/vendor/content-approval-workflow'),
        // ], 'views');
    }
}
