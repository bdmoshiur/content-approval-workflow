<?php

return [
    'default_status' => 'draft',
    'statuses' => [
        'draft',
        'in-review',
        'approved',
        'rejected',
    ],
    'roles' => [
        'submitter' => 'submitter',
        'reviewer' => 'reviewer',
        'approver' => 'approver',
    ],
    'notifications' => true,
];
