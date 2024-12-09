<?php

namespace Interlink\ContentApprovalWorkflow\Providers; // Add the correct namespace here

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

        // Publish views to the Laravel views path
        $this->publishes([
            __DIR__ . '/../Views' => resource_path('views/vendor/content-approval-workflow'),
        ], 'views');
    }
}
