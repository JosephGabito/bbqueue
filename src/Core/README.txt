Core Layer

The Core Layer handles cross-cutting concerns that don’t belong to a specific domain, application, or infrastructure.

Purpose:
- Manage shared functionality like the Task Manager or service discovery.
- Provide utilities that interact with multiple layers of the application.

Contents:
- Task_Manager.php: Central coordinator for managing tasks across processors and repositories.

Why:
- Reduces duplication of cross-cutting concerns.
- Centralizes application-wide logic for better maintainability.
