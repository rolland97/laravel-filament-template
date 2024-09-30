# Filament Starter Pack Template

This is a template repository for quickly setting up a Laravel project with Filament admin panel pre-configured.

## Getting Started

To use this template:

1. Click the "Use this template" button at the top of this repository.
2. Choose a name for your new repository and create it.
3. Clone your new repository to your local machine.

## Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and npm

## Included Packages

This template comes pre-configured with the following packages:

### Additional Development Packages

- `barryvdh/laravel-debugbar`: ^3.14
- `barryvdh/laravel-ide-helper`: ^3.1
- `larastan/larastan`: ^2.9
- `laravel/pint`: ^1.18
- `pestphp/pest`: ^2.35
- `pestphp/pest-plugin-faker`: ^2.0
- `pestphp/pest-plugin-laravel`: ^2.4
- `pestphp/pest-plugin-livewire`: ^2.1

These packages provide tools for debugging, IDE support, static analysis, and testing.

## Setup Instructions

1. Navigate to your project directory:
   ```
   cd your-project-name
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install and compile frontend dependencies:
   ```
   npm install
   npm run build
   ```

4. Set up environment file:
   ```
   cp .env.example .env
   ```

5. Generate application key:
   ```
   php artisan key:generate
   ```

6. Link storage:
   ```
   php artisan storage:link
   ```

7. Install Filament:
   ```
   php artisan filament:install --panels
   ```

## Local Development

We recommend using Laragon for easy local development. It provides a user-friendly interface and automatically sets up virtual hosts.

## Email Testing

For email testing, we recommend using Mailtrap. Update your `.env` file with your Mailtrap credentials.

## Continuous Integration

This template includes a GitHub Actions workflow for continuous integration. The workflow:

- Runs on push and pull requests to the `main` and `docker` branches
- Uses a matrix strategy to test across multiple configurations:
  - PHP versions: 8.2, 8.3
  - Laravel versions: 10.\*, 11.\*
  - Dependency versions: prefer-lowest, prefer-stable
- Sets up a MySQL database for testing
- Runs migrations and seeds the database
- Executes PEST tests
- Performs static analysis with PHPStan
- Checks code style with PHP Code Sniffer

To view or modify the workflow, check the `.github/workflows/tests.yaml` file in your repository.

## Future Enhancements

### Docker Support

We plan to add Docker support in the future for easier environment setup and consistency across different development machines.

## Contributing

If you'd like to contribute to this template, please fork the repository and submit a pull request with your proposed changes.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
