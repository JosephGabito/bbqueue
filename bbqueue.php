<?php
/**
 * Plugin Name: BBQueue
 * Description: A robust task queueing system for WordPress.
 * Version: 1.0.0
 * Author: Your Name
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Load Composer's autoloader.
require_once __DIR__ . '/vendor/autoload.php';

use BBQueue\Application\UseCases\Process_Tasks;
use BBQueue\Application\API\REST_Controller;

// Set up PHP-DI container.
$container_factory = require __DIR__ . '/src/Helpers/container.php';
$container = $container_factory();

// Hook shutdown processor.
add_action( 'shutdown', function () use ( $container ) {
    $process_tasks = $container->get( Process_Tasks::class );
    $process_tasks->execute( 5 );
} );

// Register REST API routes.
add_action( 'rest_api_init', function () use ( $container ) {
    $rest_controller = $container->get( REST_Controller::class );
    $rest_controller->register_routes();
} );
