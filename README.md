# Child Registration System

A simple web application for registering children and storing their details, including a photo upload feature. This system allows users to register a child with details such as name, class, and pick-up persons.

## Features
- **Child Registration**: Users can register a child with personal details and a photo.
- **Photo Validation**: The photo upload process checks for minimum image dimensions (100x100 pixels).
- **Pick-up Persons**: Users can add persons authorized to pick up the child.
- **Data Persistence**: All data (child details and pick-up persons) are stored in a database.

## Technologies Used
- **Laravel**: A PHP framework used for building the application.
- **MySQL**: Relational database management system to store child and pick-up persons data.
- **Bootstrap**: Frontend framework used for the user interface.
- **PHP**: Backend scripting language.
- **jQuery**: For client-side interactivity.

## Installation

To run this project locally, follow the steps below:

### Prerequisites
- PHP >= 8.0
- Composer
- MySQL (or any other relational database)
- Laravel >= 11

### Steps
1. **Clone the repository**:
   ```bash
   git remote add origin https://github.com/msaShahid/kinder-garden.git
   cd kinder-garden
   ```

2. **Install the dependencies**:
   ```bash
   composer install 
   ```

3. **Create and configure the `.env` file**:
   Copy the `.env.example` file to `.env` and modify the database settings:
   ```bash
   cp .env.example .env
   ```
   Open the `.env` file and update the following:
   - `DB_CONNECTION=mysql`
   - `DB_HOST=127.0.0.1`
   - `DB_PORT=3306`
   - `DB_DATABASE=your_database_name`
   - `DB_USERNAME=your_database_user`
   - `DB_PASSWORD=your_database_password`

4. **Generate application key**:
   ```bash
   php artisan key:generate
   ```

5. **Run migrations** to create the necessary database tables:
   ```bash
   php artisan migrate
   ```

6. **Run Database Seeders**: After running the migrations, you can populate your database with sample data by running the database seeders:

   ```bash
   php artisan db:seed
   ```
   
7. **Serve the application**:
   ```bash
   php artisan serve
   ```

   Your application will be accessible at `http://127.0.0.1:8000` in your browser.

## Usage

- **Register a Child**: Fill out the registration form with the child's details and upload a photo. The image must be at least 100x100 pixels.
- **Pick-up Persons**: Add people authorized to pick up the child, including their name, relation, and contact number.
- **View Child Details**: After successful registration, view the child details and their photo.




