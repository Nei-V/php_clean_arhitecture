<?php

namespace Invoicer;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\InvoicerController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'invoicer' => __DIR__ . '/../view',
        ],
    ],
];
