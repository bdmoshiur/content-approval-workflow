<?php

namespace VendorName\ContentApprovalWorkflow\Models;

use Illuminate\Database\Eloquent\Model;

class ContentApproval extends Model
{
    protected $fillable = ['title', 'description', 'status', 'submitted_by', 'reviewed_by'];
}
