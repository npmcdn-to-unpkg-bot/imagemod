<?php
return array(
    /*
    |--------------------------------------------------------------------------
    | Status column
    |--------------------------------------------------------------------------
    */
    'status_column' => 'status',

    /*
    |--------------------------------------------------------------------------
    | Moderated At column
    |--------------------------------------------------------------------------
    */
    'moderated_at_column' => 'moderated_at',

    /*
    |--------------------------------------------------------------------------
    | Strict Moderation
    |--------------------------------------------------------------------------
    | If Strict Moderation is set to true then the default query will return
    | only approved resources. In other case, pending resources will returned
    | as well.
    */
    'strict' => true,
);