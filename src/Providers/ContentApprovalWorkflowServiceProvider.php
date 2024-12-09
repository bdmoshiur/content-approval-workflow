<?php

namespace VendorName\ContentApprovalWorkflow\Providers;

use Illuminate\Support\ServiceProvider;

class ContentApprovalWorkflowServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'content-approval-workflow');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('content-approval-workflow.php'),
        ], 'config');
        $this->publishes([
            __DIR__ . '/../Views' => resource_path('views/vendor/content-approval-workflow'),
        ], 'views');
    }
}
