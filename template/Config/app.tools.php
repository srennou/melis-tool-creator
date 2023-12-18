<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'moduletpl' => [
            'tools' => [
                'moduletpl_tools' => [
                    'conf' => [
                        'title' => 'tr_moduletpl_templates',
                        'id' => 'id_moduletpl_templates',
                    ],
                    'table' => [
                        // table ID
                        'target' => '#tableToolModuleTpl',
                        'ajaxUrl' => '/melis/ModuleTpl/List/getList',
                        'dataFunction' => 'initModuleTplList',
                        'initComplete' => 'initcompleteModuleTplList()',
                        'ajaxCallback' => 'ajaxCallbackModuleTplList()',
                        'filters' => [
                            'left' => [
#CONFIGFILTERDATA
                            ],
                            'center' => [
                                'moduletpl-tbl-filter-search' => [
                                    'module' => 'ModuleTpl',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-search',
                                ],
                            ],
                            'right' => [
                                'moduletpl-tbl-filter-limit' => [
                                    'module' => 'ModuleTpl',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-limit',
                                ],
                                'moduletpl-tbl-filter-refresh' => [
                                    'module' => 'ModuleTpl',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-refresh',
                                ],
#TCSHOWHIDEFILTERPOSITION
                            ],
                        ],
                        'columns' => [
#TCTABLEORDERCOLUMN
#TCTABLECOLUMNS
                        ],
                        // define what columns can be used in searching
                        'searchables' => [
#TCTABLESEARCHCOLUMNS
                        ],
                        'actionButtons' => [
#TCTABLEACTIONBUTTONS
                        ]
                    ],
#TCFORMELEMENTS
                ]
            ]
        ]
    ]
];