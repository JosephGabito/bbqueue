Domain Layer

The Domain Layer is the heart of the application. It contains the core business logic and rules, independent of any framework or external system.

Purpose:
- Encapsulate the core entities and behaviors of the application.
- Define interfaces for interacting with the domain.
- Serve as the "truth" for business logic.

Contents:
- Entities/: Contains domain objects like `Task.php`.
- Services/: Contains domain services that implement business rules, such as `Task_Service.php`.
- Task_Service_Interface.php: Defines how the application interacts with tasks.

Why:
- This layer ensures the business logic is independent and reusable.
- By isolating the domain, the application is more maintainable and testable.
