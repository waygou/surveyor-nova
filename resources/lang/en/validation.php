<?php

return [

    'traits' => [
        'applies_policies' => [
            'inexistant' => 'Class doesn\'t have the trait AppliesPolicies.',
        ],
        'applies_scopes' => [
            'inexistant' => 'Class doesn\'t have the trait AppliesScopes.',
        ],
    ],
    'class_inexistant'           => 'This class doesn\'t exist. Please check the class namespace.',
    'not_model'                  => 'This class is not inherited from a Laravel Model class.',
    'interface_scope_inexistant' => 'This class doesn\'t implement interface Illuminate\Database\Eloquent\Scope.',
];
