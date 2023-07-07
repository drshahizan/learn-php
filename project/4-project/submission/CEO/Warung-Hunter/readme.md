## Group CEO

## Instruction
1. Install Composer (https://getcomposer.org/)
2. Navigate to the project's root directory in your terminal or command prompt:
   
   ```composer install```

3. Create a copy of the .env.example file and name it .env:

   ```cp .env.example .env```

4. Run the following command to generate a unique application key:

   ```php artisan key:generate```

5. Migrate the Database:

   ```php artisan migrate```

6. Seed the Database (Optional):

   ```php artisan db:seed```

7. Start the Development Server:

   ```php artisan serve```
