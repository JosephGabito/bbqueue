Application Layer

The Application Layer coordinates the execution of use cases and bridges the Domain and Infrastructure layers.

Purpose:
- Orchestrate the business logic defined in the Domain Layer.
- Define use cases like processing tasks or interacting with external systems (e.g., REST APIs).
- Decouple higher-level workflows from low-level implementation details.

Contents:
- UseCases/: Specific use cases like `Process_Tasks.php`.
- API/: Controllers for external interactions, such as REST APIs.

Why:
- Keeps the domain logic clean and focused on business rules.
- Ensures the infrastructure and UI layers don’t need to know about the domain's internal workings.
