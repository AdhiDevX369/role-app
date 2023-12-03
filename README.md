# Laravel Artisan Commands

This repository contains commonly used `php artisan` commands in Laravel along with their descriptions.

## Commands

### `php artisan migrate`

**Description:** Runs all the outstanding migrations.

### `php artisan db:seed`

**Description:** Seeds the database with records as defined in the seed files.

### `php artisan make:model ModelName`

**Description:** Creates a new Eloquent model in the app/Models directory.

### `php artisan make:controller ControllerName`

**Description:** Generates a new controller class in the app/Http/Controllers directory.

### `php artisan make:migration create_table_name`

**Description:** Creates a new migration file for creating a new database table.

### `php artisan cache:clear`

**Description:** Flushes the application cache.

### `php artisan route:list`

**Description:** Displays the list of all registered routes.

### `php artisan queue:work`

**Description:** Starts processing jobs on the queue as a daemon.

### `php artisan key:generate`

**Description:** Generates a new application key for securing sessions and other encrypted data.

### `php artisan storage:link`

**Description:** Creates a symbolic link from `public/storage` to `storage/app/public`.

### `php artisan config:cache`

**Description:** Consolidates and caches all of the configuration files.

### `php artisan make:middleware MiddlewareName`

**Description:** Creates a new middleware class in the app/Http/Middleware directory.

## Additional Commands

### `php artisan make:factory FactoryName`

**Description:** Generates a new model factory in the database/factories directory.

### `php artisan make:migration add_column_to_table --table=tableName`

**Description:** Creates a migration file for adding a new column to an existing table.

### `php artisan make:policy PolicyName`

**Description:** Generates a new policy class in the app/Policies directory.

### `php artisan make:provider ProviderName`

**Description:** Creates a new service provider class in the app/Providers directory.

### `php artisan route:cache`

**Description:** Creates a route cache file to speed up route registration.

### `php artisan make:command CommandName`

**Description:** Generates a new Artisan command.

### `php artisan optimize`

**Description:** Optimizes the framework for better performance.

### `php artisan queue:restart`

**Description:** Restarts queue worker daemons after their current job is finished.

### `php artisan make:resource ResourceName`

**Description:** Creates a new resource class.

### `php artisan schedule:run`

**Description:** Runs the scheduled commands defined in the `App\Console\Kernel`.

### `php artisan tinker`

**Description:** Opens an interactive shell to interact with your application.

### `php artisan vendor:publish --tag=tagName`

**Description:** Publishes assets from a package.

### `php artisan make:middleware MiddlewareName`

**Description:** Creates a new middleware class in the app/Http/Middleware directory.

### `php artisan down`

**Description:** Puts the application into maintenance mode.

### `php artisan up`

**Description:** Takes the application out of maintenance mode.

### `php artisan make:channel ChannelName`

**Description:** Creates a new channel class for broadcasting.

### `php artisan make:listener ListenerName`

**Description:** Generates a new event listener class.

### `php artisan queue:failed`

**Description:** List all of the failed queue jobs.

### `php artisan event:generate`

**Description:** Generates the missing events and listeners based on registrations.

### `php artisan make:mail MailName`

**Description:** Generates a new email class for notifications.

### `php artisan storage:link`

**Description:** Creates a symbolic link from `public/storage` to `storage/app/public`.

### `php artisan make:auth`

**Description:** Scaffold basic login and registration views and routes.

### `php artisan make:test TestName`

**Description:** Creates a new test class in the tests directory.

### `php artisan make:console CommandName`

**Description:** Generates a new Artisan command.

### `php artisan optimize:clear`

**Description:** Clears the cached bootstrap files.
