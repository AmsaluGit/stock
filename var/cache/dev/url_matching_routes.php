<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/attribute' => [[['_route' => 'attribute_index', '_controller' => 'App\\Controller\\AttributeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/attribute/new' => [[['_route' => 'attribute_new', '_controller' => 'App\\Controller\\AttributeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/attribute/value/new' => [[['_route' => 'attribute_value_new', '_controller' => 'App\\Controller\\AttributeValueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/balance' => [[['_route' => 'balance', '_controller' => 'App\\Controller\\BalanceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/brand' => [[['_route' => 'brand_index', '_controller' => 'App\\Controller\\BrandController::index'], null, ['GET' => 0], null, true, false, null]],
        '/brand/new' => [[['_route' => 'brand_new', '_controller' => 'App\\Controller\\BrandController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categories' => [[['_route' => 'categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/new' => [[['_route' => 'categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/college' => [[['_route' => 'college_index', '_controller' => 'App\\Controller\\CollegeController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/department' => [[['_route' => 'department_index', '_controller' => 'App\\Controller\\DepartmentController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/new' => [[['_route' => 'order_new', '_controller' => 'App\\Controller\\OrderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producttype' => [[['_route' => 'product_type_index', '_controller' => 'App\\Controller\\ProductTypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/producttype/new' => [[['_route' => 'product_type_new', '_controller' => 'App\\Controller\\ProductTypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stock' => [[['_route' => 'stock_index', '_controller' => 'App\\Controller\\StockController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/stock/new' => [[['_route' => 'stock_new', '_controller' => 'App\\Controller\\StockController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store' => [[['_route' => 'store_index', '_controller' => 'App\\Controller\\StoreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/store/new' => [[['_route' => 'store_new', '_controller' => 'App\\Controller\\StoreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/one' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/transfer' => [[['_route' => 'transfer_index', '_controller' => 'App\\Controller\\TransferController::index'], null, ['GET' => 0], null, true, false, null]],
        '/transfer/new' => [[['_route' => 'transfer_new', '_controller' => 'App\\Controller\\TransferController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/unitofmeasure' => [[['_route' => 'unit_of_measure_index', '_controller' => 'App\\Controller\\UnitOfMeasureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/unitofmeasure/new' => [[['_route' => 'unit_of_measure_new', '_controller' => 'App\\Controller\\UnitOfMeasureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/usertype' => [[['_route' => 'user_type_index', '_controller' => 'App\\Controller\\UserTypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usertype/new' => [[['_route' => 'user_type_new', '_controller' => 'App\\Controller\\UserTypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/attribute/(?'
                    .'|([^/]++)(?'
                        .'|(*:194)'
                        .'|/edit(*:207)'
                        .'|(*:215)'
                    .')'
                    .'|value(?'
                        .'|(*:232)'
                        .'|/([^/]++)(?'
                            .'|(*:252)'
                            .'|/edit(*:265)'
                            .'|(*:273)'
                        .')'
                    .')'
                .')'
                .'|/brand/([^/]++)(?'
                    .'|(*:302)'
                    .'|/edit(*:315)'
                    .'|(*:323)'
                .')'
                .'|/c(?'
                    .'|ategories/([^/]++)(?'
                        .'|(*:358)'
                        .'|/edit(*:371)'
                        .'|(*:379)'
                    .')'
                    .'|ollege/([^/]++)(?'
                        .'|(*:406)'
                    .')'
                .')'
                .'|/department/([^/]++)(?'
                    .'|(*:439)'
                .')'
                .'|/order/([^/]++)(?'
                    .'|(*:466)'
                    .'|/edit(*:479)'
                    .'|(*:487)'
                .')'
                .'|/product(?'
                    .'|/([^/]++)(?'
                        .'|(*:519)'
                        .'|/edit(*:532)'
                        .'|(*:540)'
                    .')'
                    .'|type/([^/]++)(?'
                        .'|(*:565)'
                        .'|/edit(*:578)'
                        .'|(*:586)'
                    .')'
                .')'
                .'|/sto(?'
                    .'|ck/([^/]++)(?'
                        .'|(*:617)'
                        .'|/edit(*:630)'
                        .'|(*:638)'
                    .')'
                    .'|re/([^/]++)(?'
                        .'|(*:661)'
                        .'|/edit(*:674)'
                        .'|(*:682)'
                    .')'
                .')'
                .'|/transfer/([^/]++)(?'
                    .'|(*:713)'
                    .'|/edit(*:726)'
                    .'|(*:734)'
                .')'
                .'|/u(?'
                    .'|nitofmeasure/([^/]++)(?'
                        .'|(*:772)'
                        .'|/edit(*:785)'
                        .'|(*:793)'
                    .')'
                    .'|ser(?'
                        .'|/([^/]++)(?'
                            .'|(*:820)'
                            .'|/edit(*:833)'
                            .'|(*:841)'
                        .')'
                        .'|type/([^/]++)(?'
                            .'|(*:866)'
                            .'|/edit(*:879)'
                            .'|(*:887)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'attribute_show', '_controller' => 'App\\Controller\\AttributeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'attribute_edit', '_controller' => 'App\\Controller\\AttributeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        215 => [[['_route' => 'attribute_delete', '_controller' => 'App\\Controller\\AttributeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        232 => [[['_route' => 'attribute_value_index', '_controller' => 'App\\Controller\\AttributeValueController::index'], [], ['GET' => 0], null, true, false, null]],
        252 => [[['_route' => 'attribute_value_show', '_controller' => 'App\\Controller\\AttributeValueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        265 => [[['_route' => 'attribute_value_edit', '_controller' => 'App\\Controller\\AttributeValueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        273 => [[['_route' => 'attribute_value_delete', '_controller' => 'App\\Controller\\AttributeValueController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        302 => [[['_route' => 'brand_show', '_controller' => 'App\\Controller\\BrandController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'brand_edit', '_controller' => 'App\\Controller\\BrandController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        323 => [[['_route' => 'brand_delete', '_controller' => 'App\\Controller\\BrandController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        358 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        371 => [[['_route' => 'categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        379 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        406 => [
            [['_route' => 'college_show', '_controller' => 'App\\Controller\\CollegeController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'college_delete', '_controller' => 'App\\Controller\\CollegeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        439 => [
            [['_route' => 'department_show', '_controller' => 'App\\Controller\\DepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'department_delete', '_controller' => 'App\\Controller\\DepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        466 => [[['_route' => 'order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        487 => [[['_route' => 'order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        519 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        532 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        540 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        565 => [[['_route' => 'product_type_show', '_controller' => 'App\\Controller\\ProductTypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        578 => [[['_route' => 'product_type_edit', '_controller' => 'App\\Controller\\ProductTypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        586 => [[['_route' => 'product_type_delete', '_controller' => 'App\\Controller\\ProductTypeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        617 => [[['_route' => 'stock_show', '_controller' => 'App\\Controller\\StockController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        630 => [[['_route' => 'stock_edit', '_controller' => 'App\\Controller\\StockController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        638 => [[['_route' => 'stock_delete', '_controller' => 'App\\Controller\\StockController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        661 => [[['_route' => 'store_show', '_controller' => 'App\\Controller\\StoreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        674 => [[['_route' => 'store_edit', '_controller' => 'App\\Controller\\StoreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        682 => [[['_route' => 'store_delete', '_controller' => 'App\\Controller\\StoreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        713 => [[['_route' => 'transfer_show', '_controller' => 'App\\Controller\\TransferController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        726 => [[['_route' => 'transfer_edit', '_controller' => 'App\\Controller\\TransferController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        734 => [[['_route' => 'transfer_delete', '_controller' => 'App\\Controller\\TransferController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        772 => [[['_route' => 'unit_of_measure_show', '_controller' => 'App\\Controller\\UnitOfMeasureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        785 => [[['_route' => 'unit_of_measure_edit', '_controller' => 'App\\Controller\\UnitOfMeasureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        793 => [[['_route' => 'unit_of_measure_delete', '_controller' => 'App\\Controller\\UnitOfMeasureController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        820 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        833 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        841 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        866 => [[['_route' => 'user_type_show', '_controller' => 'App\\Controller\\UserTypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        879 => [[['_route' => 'user_type_edit', '_controller' => 'App\\Controller\\UserTypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        887 => [
            [['_route' => 'user_type_delete', '_controller' => 'App\\Controller\\UserTypeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
