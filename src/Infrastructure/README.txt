Infrastructure Layer

The Infrastructure Layer contains the implementation of external systems and technologies used by the application.

Purpose:
- Provide concrete implementations of interfaces defined in the Domain Layer.
- Handle data persistence, communication with external APIs, and low-level details.

Contents:
- Repositories/: Handles data storage (e.g., `MySQL_Task_Repository.php`).
- Processors/: Implements task processors (e.g., `Shutdown_Processor.php`).

Why:
- Keeps external dependencies isolated.
- Ensures the application can easily swap components (e.g., switch from MySQL to Redis).
