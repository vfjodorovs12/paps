<?php

return [
    'name' => 'Альянс статистика',
    'icon' => 'fa fa-bar-chart', // можно выбрать любую FontAwesome иконку
    'children' => [
        [
            'name' => 'Папсы',
            'icon' => 'fa fa-trophy',
            'route' => 'paps.stats', // имя route из web.php
        ],
        [
            'name' => 'Явка на форуме',
            'icon' => 'fa fa-comments',
            'route' => 'paps.forum',
        ],
        [
            'name' => 'Явка в Jabber',
            'icon' => 'fa fa-commenting',
            'route' => 'paps.jabber',
        ],
        [
            'name' => 'Явка в Mumble',
            'icon' => 'fa fa-microphone',
            'route' => 'paps.mumble',
        ],
    ],
];
