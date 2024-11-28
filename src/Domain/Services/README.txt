Services

Services encapsulate business rules or logic that operate on entities or coordinate between them.

Purpose:
- Provide reusable operations for handling business logic.
- Coordinate between entities and repositories to perform workflows.

Contents:
- Task_Service_Interface.php: Defines the contract for interacting with tasks.
- Task_Service.php: Implements the interface and handles task-related workflows.

Why:
- Services ensure the Domain Layer focuses on business rules.
- They decouple entity logic from workflows, making the domain easier to extend and test.
