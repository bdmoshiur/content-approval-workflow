# Content Approval Workflow

A Laravel package to simplify content approval processes in your application. It provides role-based approval functionality, customizable states, email notifications, and workflow tracking.

---

## Features

- **Role-based Approval System:** Supports roles like `Submitter`, `Reviewer`, and `Approver`.  
- **Customizable States:** Define custom states such as `Draft`, `In Review`, `Approved`, etc.  
- **Email Notifications:** Notify users about status changes.  
- **Workflow Logging:** Track the history of approval processes.  
- **Modular Structure:** Extensible and adheres to Laravel's best practices.

---

## Table of Contents

1. [Installation](#installation)
2. [Configuration](#configuration)
3. [Database Migration](#database-migration)
4. [Usage](#usage)
    - [Define States](#define-states)
    - [Assign Roles](#assign-roles)
    - [Manage Workflow](#manage-workflow)
5. [Testing](#testing)
6. [Changelog](#changelog)
7. [Contributing](#contributing)
8. [License](#license)
9. [Credits](#credits)

---

## Installation

Install the package via Composer:

```bash
composer require interlink/content-approval-workflow
