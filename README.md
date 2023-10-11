# User List App
[Read in Português](README_PT.md)
This project allows you to consume the API [https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0](https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6- 71a188eaaee0) using the Laravel framework and displaying user data in a paginated table. Completing this challenge demonstrates the ability to configure Laravel, consume APIs, and create user interfaces effectively.

## Requirements

Before starting the project, ensure that the following software is installed in your development environment:

- **Laravel**: Laravel was installed in the development environment.
- **Composer**: Composer is installed. You can verify the installation by running the `composer --version` command in the terminal.
- **Node.js**: Node.js is installed. You can verify the installation by running the `node -v` command in the terminal. If it is not installed, you can download it from [https://nodejs.org/](https://nodejs.org/).
- The environment is correctly configured to run Laravel.

# Start the Project

Follow the steps below to launch the project in your development environment:

1. Clone the project repository from GitHub to your local environment:
```
git clone https://github.com/Mizaeldouglas/technical_test_laravel_user_list.git
```

2. Navigate to the project directory:
```
cd technical_test_laravel_user_list
```

3. Install PHP dependencies using Composer:
```
composer install
```

4. Install JavaScript dependencies using npm:
```
npm install
```

5. Compile JavaScript and CSS assets using npm:
```
npm run dev
```

6. Start the Laravel development server:
```
php artisan serves
```

After following these steps, you will be able to access the project in your browser at `http://localhost:8000/users-list`. Make sure the environment is configured correctly and the requirements (Laravel, Composer, Node.js) are installed.

Keep in mind that you may need to configure Laravel's `.env` file with appropriate settings, such as database connection, if necessary for your project. Be sure to read the Laravel documentation for detailed information about the environment and settings.

## Tasks Performed

To carry out this project, the following tasks were completed:

- [x] **Laravel Configuration**: Initial configuration of the development environment with Laravel.

- [x] **API Consumption**: Implementation of the route to consume data from the external API using Laravel features to make HTTP requests.

- [x] **Paginated User Table**: Creation of a route to access the users page. Development of a controller that consumes the API, retrieves user data and implements the paging logic.

- [x] **Table View**: Creating a view that displays user data in a paginated table.

- [x] **Styling**: Styling the table and the user page using CSS (I used pure CSS and tailwind).

## Additional Tasks
- [x] **Ordering the User List in Alphabetical Order**: The user list was sorted in alphabetical order.

- [x] **Loading during API Loading**: A loading was added to indicate external API loading.

- [x] **Responsiveness**: The site was designed to be responsive and work well on mobile and tablet screens.

- [x] **Deploy**: The project was Deployed and is accessible at [https://user-list.mizaeldouglas.com.br/users-list](https://user-list.mizaeldouglas. com.br/users-list).

<br>
<hr>
<br>
