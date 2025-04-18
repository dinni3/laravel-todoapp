# Laravel To-Do App
This is a simple To-Do App built with Laravel. It includes authentication, task management, and user profile features.

### 1. **Registration and Login Page**
- **Validation**: Input validation is included using Laravel Form Request classes for both registration and login pages
- **Regex Pattern**: Used Laravel's regex pattern in the form request class to make sure that the name input is restricted to letters and spaces only and password must be at least 8 characters long

### 2. **Dashboard**
- **Routes**: User will be directed to the dashboard once login and they can access the profile update page from the dashboard
- **View**: Included a simple welcome message which says welcome (username)

### 3. **Profile Update Page**
- **Editable Fields**: Added fields to the user profile so that user can update their profile information. Those fields are Nickname, Profile Picture, Email, Password, Phone Number, City
- **File Upload**: Implemented a feature that allows user to upload files to change their avatar/profile picture
- **Password change**: Added functionality so that user can change their password while also being restricted where the password must be at least 8 characters long.
- **Account Deletion**: Included a feature that allows  user to delete their account

### 4. **MVC Enhancements**
- **Model**: Modified users table using migration to add nickname, avatar, phone, and city fields
- **View**: Created and Updated - 
resources/views/dashboard.blade.php
resources/views/profile/edit.blade.php
Enhanced register.blade.php and login.blade.php with error messages and styling
- **Controller**: Created ProfileController to handle the profile page with edit(), update(), and destroy() methods. Also added DashboardController
 

## Installation

# 1. Clone the repo
git clone https://github.com/yourusername/your-repo-name.git

# 2. Navigate into the project folder
cd your-repo-name

# 3. Install PHP dependencies
composer install

# 4. Install frontend dependencies
npm install && npm run dev

# 5. Set up environment file
cp .env.example .env

# 6. Generate app key
php artisan key:generate

# 7. Run migrations
php artisan migrate

# 8. Start the Laravel development server
php artisan serve
