## Group CEO

## About

## Instruction
1. Install Composer (https://getcomposer.org/)
2. Navigate to the project's root directory in your terminal or command prompt. Run the following command to install the required dependencies:
   
   ```bat
   composer install
   ```

3. Create a copy of the .env.example file and name it .env:

   ```bat
   cp .env.example .env
   ```

4. Migrate the Database:

   ```bat
   php artisan migrate
   ```

5. Seed the Database (Optional):

   ```bat
   php artisan db:seed
   ```

6. Start the Development Server:

   ```bat
   php artisan serve
   ```

7. This will start the server at http://localhost:8000 by default.
8. For admin page, use this url: http://localhost:8000/admin.
