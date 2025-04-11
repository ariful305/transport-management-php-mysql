# Transport Management System

A comprehensive PHP and MySQL-based transport management system designed for educational institutions to streamline bus route management, student transport applications, and scheduling.

## Features

- **User Management**: Separate roles for administrators and students
- **Route Management**: Define bus routes with start/end points, distances, and fares
- **Bus Fleet Management**: Track buses, drivers, and capacity information
- **Transport Applications**: Students can apply for transport services
- **Schedule Management**: Organize bus departures and routes
- **Payment Tracking**: Record payments via cash

## Technology Stack

- PHP
- MySQL
- HTML/CSS (Bootstrap)
- JavaScript

## Installation

1. Clone the repository
```bash
git clone https://github.com/ariful305/transport-management-php-mysql.git
cd transport-management-php-mysql
```

2. Import the database schema
   - Create a MySQL database named `transport_management`
   - Import `setup.phptransport_management.sql` or run it directly in your browser to set up the database structure

3. Configure the database connection
   - Open `setup.php` and update the database credentials:
```php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "transport_management";
```

4. Start your local server (XAMPP, WAMP, MAMP,Laragon etc.)

5. Access the application through your browser
```
http://localhost/transport-management-php-mysql/
```

## Default Admin Access

- Username: admin
- Password: 123456789
- Email: admin@gmail.com

## Database Structure

The system consists of several key tables:
1. **users** - Store user authentication information
2. **profiles** - Contains extended user information
3. **routes** - Defines transport routes with pricing
4. **buses** - Manages bus fleet information
5. **transport_applications** - Tracks student applications for transport
6. **schedule_buses** - Manages bus scheduling

## Usage

### For Administrators

- Manage users and approve student registrations
- Configure routes and pricing
- Manage bus fleet
- Review and approve transport applications
- Set up bus schedules

### For Students

- Register and complete profile
- Browse available routes
- Apply for transport services
- Make payments
- View approved routes and schedules

## Security Notes

- Default password encryption uses MD5, which is not recommended for production use. Consider upgrading to PHP's `password_hash()` function for better security.
- Validate all user inputs to prevent SQL injection.


## Acknowledgments

- Developed for educational institutions to manage transportation services
- Simplifies the management of bus fleets, routes, and student applications
