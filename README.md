# Laravel-Excel-System
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

1. Simple, fast routing engine.
2. Powerful dependency injection container.
3. Multiple back-ends for session and cache storage.
4. Expressive, intuitive database ORM.
5. Database agnostic schema migrations.
6. Robust background job processing.
7. Real-time event broadcasting.
8. Laravel is accessible, powerful, and provides tools required for large, robust applications.

# About The System
This system is a web application developed using Laravel 10. It is designed to manage users and their uploaded Excel files, displaying the content of these files in a user-friendly dashboard. The system provides custom authentication, an Excel file upload functionality, and database integration with PostgreSQL.

# Key Features
Custom Authentication:
User registration, login, and account management without using Laravel scaffolding tools such as Breeze, Jetstream, or Fortify. Secure handling of user credentials and sessions.

# User-Friendly Dashboard:
Created using Blade templates. Styled with Bootstrap or Tailwind CSS without using pre-built admin themes.

# Excel File Upload:
Allows users to upload Excel files (.xlsx format). Provides a preview of the uploaded file before final submission.

# Database Integration:
Stores user data and uploaded Excel data in a PostgreSQL database. Includes migration files for database schema setup.

# Display Excel Data:
Extracts data from uploaded Excel files. Displays the extracted data in a structured format on the user's dashboard.

# Technology Stack
Backend: Laravel 10 Frontend: Blade, HTML, CSS, Vanilla JS (no JavaScript frameworks) Database: PostgreSQL.

# Clone the Repository:
1. sh git clone https://github.com/your-repo.git cd your-repo

2. Install Dependencies: sh composer install npm install npm run dev

3. cp .env.example .env

4. Update the .env file with your database credentials:

5. DB_CONNECTION=pgsql DB_HOST=127.0.0.1 DB_PORT=5432 DB_DATABASE=your_database_name DB_USERNAME=your_username DB_PASSWORD=your_password

6. Run Migrations and Seed Database:

7. sh php artisan migrate --seed

Serve the Application:

sh php artisan serve Access the Application:

Open your web browser and navigate to http://localhost:8000.