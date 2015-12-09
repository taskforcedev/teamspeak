<?php

return [

    /* Server Connection Details. */

    'server' => [
        'host' => 'localhost',
        'query_port' => 10011,
        'server_port' => 9987,
        'server_token' => '',
        // The password users require to connect, if any.
        'server_password' => '',
    ],

    'options' => [

        /**
         * TeamSpeak Page
         * --------------
         * If you wish to have a page showing teamspeak details and users/channels set the below to the name of the page.
         * Example: 'teamspeak' - would result in yoursite.com/teamspeak
         * Example: false - would result in this page not being available.
         */
        'page' => 'teamspeak',

        // Title to be used on the page above eg "Clan X Teamspeak Server"
        'page_title' => 'Our TeamSpeak Server',

        // If using your own template, this will be the section where we will show server details widget.
        'sidebar_section' => 'sidebar',

        // Whether the password should be visible on the /teamspeak page.
        'show_password' => false,

        /*
         *
         * To hide any channels enter their name in this list exactly as it appears in the client
         * example 'hidden_channels' => [
         *     'admin', 'mod_chat'
         * ]
         */
        'hidden_channels' => [

        ],
    ]

];
