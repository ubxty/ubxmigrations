# UBX Migrations Package

[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.0-777BB4)](https://php.net)
[![Laravel Version](https://img.shields.io/badge/Laravel-%3E%3D9.0-FF2D20)](https://laravel.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

Safe database migrations with column-level error handling.

## Installation
```bash
composer require ubxty/ubxmigrations --dev
```

## Features
- Column-level error handling
- Migration safety checks
- Laravel-native integration
- Zero-configuration setup

## Usage
Create a new migration:
```bash
php artisan make:ubxmigration add_columns_to_table --table=your_table
```

## About the Developer
**UBXTY - Unboxing Technology**
Maintained by [UBXTY](https://ubxty.com/).
We specialize in creating robust and developer-friendly solutions for modern web applications.

## License
This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
