BBQueue - A WordPress Plugin for Task Queueing

This plugin implements a robust task queueing system for WordPress using modern design principles:
- Domain-Driven Design (DDD)
- Onion Architecture

The structure ensures scalability, maintainability, and separation of concerns. Below is an overview of the directory structure:

src/
├── Domain/          // Core domain logic, the heart of the application.
├── Application/     // Use cases and interactions between the Domain and Infrastructure.
├── Infrastructure/  // Implementations of interfaces and external systems like databases.
├── UI/              // User-facing elements like admin dashboards.
├── Core/            // Cross-cutting concerns like the Task Manager.
├── Helpers/         // Utility files and configuration (e.g., DI container).

Each folder has its own README.txt file explaining its role and contents.
