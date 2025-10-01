<?php

return [
    'navigation' => [
        'title' => 'Contacts',
        'group' => 'Contact',
    ],
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'General Information',
                'fields' => [
                    'name' => 'Name',
                    'description' => 'Description',
                ],
            ],
        ],
    ],
    'table' => [
        'columns' => [
            'name' => 'Name',
            'created-at' => 'Created At',
            'updated-at' => 'Updated At',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Updated',
                    'body' => 'Has been updated successfully.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'Deleted',
                    'body' => 'Has been deleted successfully.',
                ],
            ],
        ],
    ],
];
