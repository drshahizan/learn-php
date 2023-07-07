## Group CEO

## Instruction
1. Install Composer (https://getcomposer.org/)
2. Navigate to the project's root directory in your terminal or command prompt:
   
   ```composer install```

3. Create a copy of the .env.example file and name it .env:

   ```cp .env.example .env```

4. Migrate the Database:

   ```php artisan migrate```

5. Seed the Database (Optional):

   ```php artisan db:seed```

6. Start the Development Server:

   ```php artisan serve```
