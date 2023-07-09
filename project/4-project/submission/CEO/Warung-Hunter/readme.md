## Demo

Try out!
- Website: http://167.71.200.243/
- Admin: http://167.71.200.243/admin
  - email: admin@email.com
  - password: password

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

5. In the terminal, while still in the repository's root directory, run the following command to compile the assets:

   ```bat
   npm run dev
   ```

6. Seed the Database (Optional):

   ```bat
   php artisan db:seed
   ```

7. Start the Development Server:

   ```bat
   php artisan serve
   ```

8. This will start the server at http://localhost:8000 by default.
9. For admin page, use this url: http://localhost:8000/admin.
    - username: Admin
    - password: password
