# ISP-Worker REST API CRUD Application
This repository contains a Worker REST API CRUD application developed using PHP and Laravel, purposed to be served through Docker. The application was developed as part of an onboarding process with the leading internet service provider in Azerbaijan. This does not include the project undertaken with collaboration with AzEduNet. The API allows you to perform CRUD operations (Create, Read, Update, Delete) on worker entities.

## API Documentation

The API endpoints and their corresponding functionalities are documented below:

GET /api/workers: Get a list of all workers.
GET /api/workers/{id}: Get the details of a specific worker.
POST /api/workers: Create a new worker.
PUT /api/workers/{id}: Update the details of a specific worker.
DELETE /api/workers/{id}: Delete a specific worker.

## Development

If you wish to make changes to the application, you can follow these guidelines:

The source code for the application is located in the *app* directory.
The routes for the API endpoints can be found in *routes/api.php*.
The controllers for handling the API requests are located in *app/Http/Controllers*.
Database migrations can be found in *database/migrations*.
Model definitions can be found in *app/Models*.
Unit tests can be added to the *tests/Unit* directory.
