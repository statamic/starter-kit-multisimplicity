<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Each site should have root URL that is either relative or absolute. Sites
    | are typically used for localization (eg. English/French) but may also
    | be used for related content (eg. different franchise locations).
    |
    */

    'sites' => [

        'en' => [
            'name' => 'The Getaway',
            'locale' => 'en_US',
            'url' => '/',
        ],

        'de' => [
            'name' => 'Die Flucht',
            'locale' => 'de_DE',
            'url' => '/de/',
        ],

        'fr' => [
            'name' => "L'Escapade",
            'locale' => 'fr_FR',
            'url' => '/fr/',
        ],

    ],
];
