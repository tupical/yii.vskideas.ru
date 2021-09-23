<?php

return [
    'create' => [
        'type' => 2,
        'description' => 'Create',
    ],
    'update' => [
        'type' => 2,
        'description' => 'Update',
    ],
    'delete' => [
        'type' => 2,
        'description' => 'Delete',
    ],
    'user' => [
        'type' => 1,
        'children' => [
            'create',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'update',
            'delete',
            'user',
        ],
    ],
];
