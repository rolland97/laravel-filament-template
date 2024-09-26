# Filament Starter Pack Template

This is a template repository for quickly setting up a Laravel project with Filament admin panel pre-configured.

## Getting Started

To use this template:

1. Click the "Use this template" button at the top of this repository.
2. Choose a name for your new repository and create it.
3. Clone your new repository to your local machine.

## Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js and npm

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

## Future Enhancements

### Docker Support

We plan to add Docker support in the future for easier environment setup and consistency across different development machines.

### GitHub Actions

We're working on implementing GitHub Actions for automated testing and deployment processes.

## Contributing

If you'd like to contribute to this template, please fork the repository and submit a pull request with your proposed changes.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
