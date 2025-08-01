# Changelog

All notable changes to the Refynd CLI will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.1] - 2024-12-19

### Fixed
- Command naming compatibility with Symfony Console 7
- Replaced deprecated static `$defaultName` properties with `setName()` method calls
- Fixed "Command cannot have an empty name" errors for all commands

### Commands Fixed
- `new` - Project creation command
- `make:controller` - Controller generator
- `make:model` - Model generator  
- `make:middleware` - Middleware generator
- `serve` - Development server
- `test` - Test runner

## [1.0.0] - 2024-12-19

### Added
- Initial release of Refynd CLI
- Project creation with `refynd new` command
- Code generators for controllers, models, and middleware
- Built-in development server with `refynd serve`
- Test runner integration with `refynd test`
- Symfony Console 7 integration
- Twig templating for generated files
- Cross-platform support (macOS, Linux, Windows)

### Features
- **Project Creation**: Scaffold new Refynd applications with proper structure
- **Code Generation**: Generate controllers, models, and middleware with customizable templates
- **Development Server**: Built-in PHP development server with auto-reload
- **Test Integration**: Run PHPUnit tests with simplified commands
- **Template System**: Extensible Twig-based templates for code generation

### Dependencies
- PHP 8.2+
- Symfony Console 7.0+
- Refynd Framework 1.1+
- Twig 3.0+
