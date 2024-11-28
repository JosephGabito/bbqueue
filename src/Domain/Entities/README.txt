Entities

Entities are the core objects in the Domain Layer. They represent business concepts with a unique identity and encapsulate their own behaviors.

Purpose:
- Define the attributes and behaviors of business objects.
- Maintain consistency and rules related to the object's lifecycle.

Contents:
- Task.php: Represents a unit of work to be processed by the queue.

Why:
- Entities ensure the business logic remains centralized and reusable.
- They model the core business concepts and enforce rules directly on the object.
