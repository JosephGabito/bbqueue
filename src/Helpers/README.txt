Helpers

The Helpers folder contains utility files and configuration needed by the application.

Purpose:
- Provide reusable utilities and configurations (e.g., the DI container).
- Simplify bootstrapping and dependency management.

Contents:
- Autoloader.php: (Optional) If not using Composer, this would handle class autoloading.
- container.php: Defines PHP-DI container configurations.

Why:
- Keeps utility logic centralized and out of the main application logic.
- Simplifies initialization of dependencies and services.
