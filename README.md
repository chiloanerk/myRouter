# Simple PHP MVC Router

This repository contains a basic PHP MVC (Model-View-Controller) router that provides a simple and structured way to handle routes, controllers, and views in your PHP web projects.

## Features

- Define routes using customizable HTTP methods (GET, POST, etc.) and paths.
- Route requests to corresponding controller actions using a simple mapping.
- Organize your application logic with a simple Model-View-Controller structure.
- Reusable and easy to integrate into new or existing PHP projects.

## Getting Started

1. Clone the repository to your local environment:

   ```bash
   git clone https://github.com/chiloanerk/myRouter.git

2. Configure your web server to point to the public directory as the document root.
    ```I use php -S localhost:8080 -t public

3. Define your routes in the app/routes/routes.php file.

4. Customize your controllers and views according to your project's requirements.

5. Access your web application in the browser and navigate to the defined routes.

## Usage
- Define routes in the app/routes/routes.php file using the router's methods.
- Create controllers in the app/controllers directory.
- Place views in the app/views directory in the format name.view.php.