<?php

return [
    'navigation' => [
        'title' => 'TiÃªu Ä‘á»',
        'group' => 'NhÃ³m',
    ],
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'ThÃ´ng tin chung',
                'fields' => [
                    'name' => 'TÃªn',
                    'description' => 'MÃ´ táº£',
                ],
            ],
        ],
    ],
    'table' => [
        'columns' => [
            'name' => 'TÃªn',
            'created-at' => 'Táº¡o lÃºc',
            'updated-at' => 'Cáº­p nháº­t lÃºc',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'ÄÃ£ cáº­p nháº­t',
                    'body' => 'ÄÃ£ Ä‘Æ°á»£c cáº­p nháº­t thÃ nh cÃ´ng.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'ÄÃ£ xÃ³a',
                    'body' => 'ÄÃ£ Ä‘Æ°á»£c xÃ³a thÃ nh cÃ´ng.',
                ],
            ],
        ],
    ],
];
