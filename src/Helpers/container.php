<?php
use DI\ContainerBuilder;
use BBQueue\Infrastructure\Repositories\MySQL_Task_Repository;
use BBQueue\Domain\Services\Task_Service;
use BBQueue\Application\UseCases\Process_Tasks;
use BBQueue\Application\API\REST_Controller;

return function () {
    $builder = new ContainerBuilder();

    $builder->addDefinitions( [
        'wpdb' => $GLOBALS['wpdb'], // Inject WordPress database object.

        MySQL_Task_Repository::class => DI\autowire()->constructor( DI\get( 'wpdb' ) ),
        Task_Service::class => DI\autowire()->constructor( DI\get( MySQL_Task_Repository::class ) ),
        Process_Tasks::class => DI\autowire()->constructor( DI\get( Task_Service::class ) ),
        REST_Controller::class => DI\autowire()->constructor( DI\get( Task_Service::class ) ),
    ] );

    return $builder->build();
};
