<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    | Here you can change the default title of your admin panel.
    |
    */

    'title' => 'Tablar',
    'title_prefix' => '',
    'title_postfix' => '',
    'bottom_title' => 'Tablar',
    'current_version' => 'v4.8',


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    */

    'logo' => '<b>Tab</b>LAR',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can set up an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'assets/tablar-logo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
     *
     * Default path is 'resources/views/vendor/tablar' as null. Set your custom path here If you need.
     */

    'views_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look at the layout section here:
    |
    */

    'layout' => 'horizontal',
    //boxed, combo, condensed, fluid, fluid-vertical, horizontal, navbar-overlap, navbar-sticky, rtl, vertical, vertical-right, vertical-transparent

    'layout_light_sidebar' => null,
    'layout_light_topbar' => true,
    'layout_enable_top_header' => false,

    /*
    |--------------------------------------------------------------------------
    | Sticky Navbar for Top Nav
    |--------------------------------------------------------------------------
    |
    | Here you can enable/disable the sticky functionality of Top Navigation Bar.
    |
    | For detailed instructions, you can look at the Top Navigation Bar classes here:
    |
    */

    'sticky_top_nav_bar' => false,

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions, you can look at the admin panel classes here:
    |
    */

    'classes_body' => '',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions, you can look at the urls section here:
    |
    */

    'use_route_url' => true,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password.request',
    'password_email_url' => 'password.email',
    'profile_url' => false,
    'setting_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Display Alert
    |--------------------------------------------------------------------------
    |
    | Display Alert Visibility.
    |
    */
    'display_alert' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    |
    */

    'menu' => [
        // Navbar items:
        [
            'text' => 'Home',
            'icon' => 'ti ti-home',
            'url' => 'home'
        ],

        [
            'text' => 'Layouts',
            'url' => '#',
            'icon' => 'ti ti-help',
            'active' => ['support1'],
            'submenu' => [
                [
                    'text' => 'Boxed',
                    'url' => 'layout/boxed',
                    'icon' => 'ti ti-layout',
                ],
                [
                    'text' => 'Combo',
                    'url' => 'layout/combo',
                    'icon' => 'ti ti-layout-2',
                ],
                [
                    'text' => 'Condensed',
                    'url' => 'layout/condensed',
                    'icon' => 'ti ti-layout-grid',
                ],
                [
                    'text' => 'Fluid',
                    'url' => 'layout/fluid',
                    'icon' => 'ti ti-layout-list',
                ],
                [
                    'text' => 'Fluid vertical',
                    'url' => 'layout/fluid-vertical',
                    'icon' => 'ti ti-layout-rows',
                ],
                [
                    'text' => 'Horizontal',
                    'url' => 'layout/horizontal',
                    'icon' => 'ti ti-layout-board',
                ],
                [
                    'text' => 'Navbar overlap',
                    'url' => 'layout/navbar-overlap',
                    'icon' => 'ti ti-layout-cards',
                ],
                [
                    'text' => 'Navbar sticky',
                    'url' => 'layout/navbar-sticky',
                    'icon' => 'ti ti-layout-navbar',
                ],
                [
                    'text' => 'RTL',
                    'url' => 'layout/rtl',
                    'icon' => 'ti ti-layout-align-right',
                ],
                [
                    'text' => 'Vertical',
                    'url' => 'layout/vertical',
                    'icon' => 'ti ti-layout-columns',
                ],
                [
                    'text' => 'Vertical right',
                    'url' => 'layout/vertical-right',
                    'icon' => 'ti ti-layout-sidebar-right',
                ],
                [
                    'text' => 'Vertical transparent',
                    'url' => 'layout/vertical-transparent',
                    'icon' => 'ti ti-columns-1',
                ],
            ],
        ],
        [
            'text' => 'Tablar Kit',
            'url' => '#',
            'icon' => 'ti ti-help',
            'active' => ['tablar-kit'],
            'submenu' => [
                [
                    'text' => 'Input',
                    'route' => 'tablar-kit.input',
                    'icon' => 'ti ti-input-x',
                ],
                [
                    'text' => 'Button',
                    'route' => 'tablar-kit.button',
                    'icon' => 'ti ti-article',
                ],
                [
                    'text' => 'Card',
                    'route' => 'tablar-kit.card',
                    'icon' => 'ti ti-id',
                ],
                [
                    'text' => 'Dropdown',
                    'route' => 'tablar-kit.dropdown',
                    'icon' => 'ti ti-select',
                ],
                [
                    'text' => 'Datepicker',
                    'route' => 'tablar-kit.datepicker',
                    'icon' => 'ti ti-calendar-event',
                ],
                [
                    'text' => 'File upload',
                    'route' => 'tablar-kit.file.upload',
                    'icon' => 'ti ti-upload',
                ],
                [
                    'text' => 'Datatable',
                    'route' => 'tablar-kit.datatable',
                    'icon' => 'ti ti-article',
                ],
                [
                    'text' => 'Editor',
                    'route' => 'tablar-kit.editor',
                    'icon' => 'ti ti-text-plus',
                ],

            ],
        ]

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    |
    */

    'filters' => [
        TakiElias\Tablar\Menu\Filters\GateFilter::class,
        TakiElias\Tablar\Menu\Filters\HrefFilter::class,
        TakiElias\Tablar\Menu\Filters\SearchFilter::class,
        TakiElias\Tablar\Menu\Filters\ActiveFilter::class,
        TakiElias\Tablar\Menu\Filters\ClassesFilter::class,
        TakiElias\Tablar\Menu\Filters\LangFilter::class,
        TakiElias\Tablar\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Vite
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Vite support.
    |
    | For detailed instructions you can look the Vite here:
    | https://laravel-vite.dev
    |
    */

    'vite' => true,
];
