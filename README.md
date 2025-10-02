## Topics

1. [Introduction](#introduction)
2. [Requirements](#requirements)
3. [Installation & Configuration](#installation-and-configuration)
4. [License](#license)
5. [Security Vulnerabilities](#security-vulnerabilities)

### Introduction

**Smart ERP** is built upon the open-source foundation of [Aureus ERP](https://github.com/aureuserp/aureuserp), a comprehensive Enterprise Resource Planning (ERP) solution for small, medium, and large enterprises.  

Leveraging the power of **[Laravel](https://laravel.com)**, the most popular PHP framework, and **[FilamentPHP](https://filamentphp.com)**, a flexible resource management library, Smart ERP inherits a strong and extensible architecture.  

Our goal is to continue the vision of Aureus ERP while delivering:  
- **Optimized features for businesses in Vietnam**  
- **A more user-friendly experience**  
- **Flexible extensibility for developers**  

Smart ERP respects and acknowledges the original work of Aureus ERP while striving to bring additional value and improvements for practical business needs.

**Key Features**

-   **Built with Laravel**: Leverages the robust and scalable features of Laravel, ensuring security, reliability, and flexibility for enterprise needs.
-   **Powered by FilamentPHP**: Incorporates FilamentPHP for intuitive resource management, modular forms, and dynamic admin panels.
-   **Highly Modular Design**: Enables seamless integration of custom modules for finance, HR, inventory, CRM, and more.
-   **Open-Source Solution**: Free to use, modify, and extend, fostering community-driven innovation and improvements.
-   **Scalable for Enterprises**: Built to handle complex business processes and workflows, making it suitable for growing organizations.

## Why Choose Smart ERP?

-   **Proven Foundation**: Built upon the solid architecture of [Aureus ERP](https://github.com/...), ensuring reliability and scalability.  
-   **Modern Technology Stack**: Powered by **Laravel** and **FilamentPHP**, with a responsive UI enhanced by **TailwindCSS**.  
-   **Localized & Optimized**: Tailored features and workflows designed to better fit the needs of businesses in Vietnam.  
-   **Developer-Friendly**: Clean, modular codebase that is easy to extend and customize for specific use cases.  
-   **Scalable & Flexible**: Suitable for small businesses up to large enterprises, with room to grow as your business expands.  
-   **Community-Driven**: Open-source, with contributions encouraged to foster collaboration and innovation.  

### Requirements

To run and develop Aureus ERP, ensure your environment meets the following requirements:

-   **PHP**: Version 8.2 or higher.
-   **Laravel**: Version 11.x, for leveraging the latest framework features and improvements.
-   **FilamentPHP**: Version 4.x, for a seamless and modern admin panel experience.
-   **Database**: MySQL 8.0+ or SQLite for database management.
-   **Composer**: Latest version, to manage PHP dependencies.
-   **Node.js & NPM**: Latest stable versions for compiling front-end assets.
-   **Server**: Apache/Nginx with required PHP extensions (e.g., OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON).
-   **Browser**: A modern browser (Chrome, Firefox, Edge) for accessing the admin panel.

### Installation & Configuration

Installing and setting up ERP is quick and straightforward. Follow the steps below to get started:

1. **Run the Installation Command**  
   Simply execute the following command in your terminal:

    ```bash
    php artisan erp:install
    ```

2. **What Happens During Installation**:

    - **Migrations & Seeders**:
        - All migrations and seeders from the core or base Laravel project are executed to set up the database schema and populate initial data.
    - **Roles & Permissions**:
        - The `Filament Shield` package automatically generates roles and permissions for the application.
    - **Database Seeders**:
        - Additional seeders are generated and executed to ensure the database is fully populated with the required default configurations.

3. **Admin Account Setup**

    - After the installation process, the command prompts you to provide **Admin Login Credentials** (email and password).
    - These credentials are used to log in to the admin panel.

4. **Installation Complete**  
   Once the above steps are finished, the installation process is complete, and you can start using Aureus ERP.

That’s it! With just one command, your Aureus ERP environment is ready to use.

## Plugins

Divided into two categories:

### Core Plugin (System Plugin)

These plugin are essential components of the system and are installed by default:

| Module     | Description                                       |
| ---------- | ------------------------------------------------- |
| Analytics  | Business intelligence and reporting tools         |
| Chatter    | Internal communication and collaboration platform |
| Fields     | Customizable data structure management            |
| Security   | Role-based access control and authentication      |
| Support    | Help desk and documentation                       |
| Table View | Customizable data presentation framework          |

### Installable Plugin

These plugin can be installed as needed to extend system functionality:

| Module       | Description                                  |
| ------------ | -------------------------------------------- |
| Blogs        | Manage blogs                                 |
| Accounts     | Financial accounting and reporting           |
| Contacts     | Contact management for customers and vendors |
| Employees    | Employees management                         |
| Inventories  | Inventory and warehouse management           |
| Invoices     | Invoice generation and management            |
| Partners     | Partner relationship management              |
| Payments     | Payment processing and tracking              |
| Products     | Product catalog and management               |
| Projects     | Project planning and management              |
| Purchases    | Procurement and purchase order management    |
| Recruitments | Applicant tracking and hiring                |
| Sales        | Sales pipeline and opportunity management    |
| Timeoffs     | Leave management and tracking                |
| Timesheet    | Employee work hour tracking                  |
| Website      | Website for customer                         |

## Installation and Management

### Installing a Plugin

To install a plugin, use the following command syntax:

```bash
php artisan <plugin-name>:install
```

For example, to install the Inventories plugin:

```bash
php artisan inventories:install
```

During installation, the system will check for dependencies and prompt you if there are any conflicts or prerequisites:

```
This package products is already installed. What would you like to do? [Skip]:
  [0] Reseed
  [1] Skip
  [2] Show Seeders
```

Options:

-   **Reseed**: Reinstall the plugin's seed data
-   **Skip**: Continue without modifying an already installed dependency
-   **Show Seeders**: Display the available data seeders for the plugin

### Uninstalling a Plugin

To remove a plugin, use the following command syntax:

```bash
php artisan <plugin-name>:uninstall
```

For example, to uninstall the Inventories plugin:

```bash
php artisan inventories:uninstall
```

## Module Dependencies

Some plugins require other plugin to function properly. The system will automatically inform you of these dependencies during the installation process and guide you through installing any required components.


### License

Smart ERP is an open-source ERP framework, distributed under the [MIT License](./LICENSE).  
This project is originally forked from Aureus ERP and continues to remain free and open for the community.  

### Security Vulnerabilities

Please **do not disclose security vulnerabilities publicly**.  
If you discover a security issue in Smart ERP, kindly report it responsibly by emailing us at: **support@smarterp.vn** (or your preferred contact).  

We appreciate the efforts of the community to help us keep the system secure and reliable.
