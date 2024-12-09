<?php

use Illuminate\Support\Facades\Route;
use VendorName\ContentApprovalWorkflow\Controllers\ContentApprovalController;

Route::middleware(['web'])->prefix('content-approval')->group(function () {
    Route::get('/', [ContentApprovalController::class, 'index']);
    Route::post('/store', [ContentApprovalController::class, 'store']);
    Route::put('/{id}/update', [ContentApprovalController::class, 'update']);
    Route::get('/{id}', [ContentApprovalController::class, 'show']);
});
