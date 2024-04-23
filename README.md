## Source code by huynh thanh van

1. Create database and run: php artisan migrate
   add role type tintInterger if ===1 => admin
   else => user
2. Create seeder and run:
   php artisan make:seeder UserSeeder
   php artisan db:seeder --class
3. we created 2 controller
   UserController: crud basic for profile
   AuthController: login, logout, register, reset password, forgot password
4. route write in api.php
