# Task Manage

This project is a task management tool designed to streamline task organization, enhance collaboration, and improve productivity for teams. It is built using PHP for the backend, MySQL for the database, and utilizes Composer for managing PHP packages.

## Table of Contents

- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction
Task Manage (task management) tool is a seamless web and mobile-friendly platform, designed for efficient task management, aimed to simplify the complexities faced by teams in their daily Task Manages. The tool strives to not only meet the technical requirements but also address the practical needs of the users.

Team

[Willington Mhlanga](https://github.com/WillingtonM) 

Software Engineer, specializing in front-end development. Mainly focuses on frontend development and ensuring that there is a seamless coordination between frontend and backend systems.

### Story Behind the Project:
Sharing a personal anecdote, the inspiration for this project struck when I encountered the overwhelming challenges when using other existing online task management tools, these challenges range from difficulty in setting up tasks and the complexities that come with it dur the overwhelming integrated features. It ignited a passion to contribute a solution that would benefit others facing similar challenges.

## Getting Started

To get started with using or contributing to this project, follow the instructions below.

## Prerequisites

Before you begin, ensure you have the following installed:

- PHP: [Installation Guide](https://www.php.net/manual/en/install.php)
- Composer: [Installation Guide](https://getcomposer.org/doc/00-intro.md)
- MySQL: [Installation Guide](https://dev.mysql.com/doc/mysql-installation-excerpt/5.7/en/)
- Node.js: [Installation Guide](https://nodejs.org/en/download/)

## Installation

1. **Clone the repository**:

    ```bash
    git clone https://github.com/yourusername/task_manage.git
    ```

2. **Navigate to the project directory**:

    ```bash
    cd task_manage
    ```

3. **Install PHP dependencies using Composer**:

    ```bash
    composer install
    ```

4. **Install Node.js packages (if applicable)**:

    ```bash
    npm install
    ```

5. **Set up the database**:

    - Create a MySQL database for the project.
    - Import the database schema from `database/schema.sql`.
    - Update the database configuration in `config/database.php` with your MySQL credentials.

## Usage

1. **Start the PHP development server**:

    ```bash
    php -S localhost:8000 -t public
    ```

2. **Access the application**:

    Open your web browser and navigate to `http://localhost:8000`.

3. **Register an account or log in**:

    Use the provided functionality to register a new account or log in with existing credentials.

4. **Start managing tasks**:

    Once logged in, you can start creating, assigning, and managing tasks within the application.

## Contributing

Contributions are welcome! To contribute to this project, follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/my-feature`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature/my-feature`).
6. Create a new pull request.

## License

This project is licensed under the [MIT License](LICENSE).