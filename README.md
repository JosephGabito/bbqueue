# BBQueue - A Robust Task Queueing System for WordPress

BBQueue is a WordPress plugin designed to provide a scalable, maintainable, and efficient task queueing system. Built with modern software design principles like Domain-Driven Design (DDD) and Onion Architecture, BBQueue is ideal for developers who need a reliable way to process background tasks in WordPress.

---

## 🚀 Features

- Efficient Task Queueing: Queue and process tasks with customizable priorities.
- Modern Architecture: Built using DDD and Onion Architecture for maintainability and scalability.
- Multiple Processing Methods: Includes support for WordPress hooks (e.g., shutdown), CRON jobs, and CLI.
- Extensible Design: Easily integrate new processors (e.g., Redis, RabbitMQ).
- REST API: Expose task-related operations for external integrations.

---

## 🛠️ Installation

### Manual Installation

1. Clone or download this repository:
   git clone https://github.com/JosephGabito/bbqueue.git

2. Copy the bbqueue folder to your WordPress plugins directory:
   /wp-content/plugins/bbqueue/

3. Install dependencies using Composer:
   composer install

4. Activate the plugin from the WordPress admin dashboard:
   - Navigate to Plugins > Installed Plugins and activate "BBQueue".

---

## 📚 Usage

### 1. Adding a Task

Use the REST API to enqueue a task:

Request:
POST /wp-json/bbqueue/v1/tasks
Content-Type: application/json

Payload:
{
  "name": "send_email",
  "data": {
    "to": "example@example.com",
    "subject": "Welcome!",
    "message": "Hello, and welcome to BBQueue!"
  },
  "priority": "high"
}

### 2. Processing Tasks

Tasks are automatically processed during the shutdown event. Alternatively, you can trigger processing manually:
- CLI: (Coming Soon)
- Custom Processor Integration: (e.g., Redis)

---

## 🧱 Architecture Overview

### Key Concepts

BBQueue is built on the principles of Domain-Driven Design (DDD) and Onion Architecture:
- Domain Layer: Contains core business logic (e.g., task entities and services).
- Application Layer: Handles use cases (e.g., processing tasks) and external communication (e.g., REST API).
- Infrastructure Layer: Implements data storage and processing logic.
- UI Layer: Exposes functionality through admin pages.

### Folder Structure
src/
├── Domain/          // Core domain logic (entities and services)
├── Application/     // Use cases and REST API
├── Infrastructure/  // Repositories and processors
├── UI/              // Admin dashboard and user-facing components
├── Core/            // Task Manager and cross-cutting concerns
├── Helpers/         // Utility files (e.g., DI container configuration)

---

## 📖 Documentation

1. Task Management: [Read Documentation](docs/tasks.md)
2. API Reference: [Read API Documentation](docs/api.md)
3. Architecture Details: [Learn More](docs/architecture.md)

---

## 🤝 Contributing

We welcome contributions to BBQueue! Here's how you can help:

1. Fork the repository.
2. Create a new branch:
   git checkout -b feature/your-feature-name

3. Commit your changes:
   git commit -m "Add new feature: your feature name"

4. Push to the branch:
   git push origin feature/your-feature-name

5. Create a Pull Request on GitHub.

---

## 🐛 Bug Reports & Feature Requests

If you encounter any issues or have ideas for new features, feel free to open an issue on GitHub: [Issues](https://github.com/JosephGabito/bbqueue/issues).

---

## 📝 License

This project is licensed under the GPL-2.0-or-later license. See the LICENSE file for details.
