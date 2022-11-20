<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'student' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'lecturer' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'committee' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'coordinator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'dean' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'hosd' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
