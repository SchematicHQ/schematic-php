# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Common Commands

### Installation

```bash
composer install
```

### Running Tests

```bash
# Run all tests
vendor/bin/phpunit

# Run a specific test class
vendor/bin/phpunit --filter AccesstokensApiTest

# Run a specific test method
vendor/bin/phpunit --filter 'AccesstokensApiTest::testIssueTemporaryAccessToken'
```

### Code Formatting

```bash
# Run PHP CS Fixer to check code style
vendor/bin/php-cs-fixer fix --dry-run --diff

# Run PHP CS Fixer to fix code style issues
vendor/bin/php-cs-fixer fix
```

## Code Architecture

This repository contains the Schematic PHP SDK, which provides a client for interacting with the [Schematic API](https://schematichq.com).

### Key Components

1. **Main Client Class**: `Schematic\Schematic` (in `src/Schematic.php`) is the main entry point for using the SDK. It initializes all the API clients with the provided API key and configuration.

2. **API Classes**: Located in `src/Api/`, each class corresponds to a specific API endpoint group:
   - `AccesstokensApi`
   - `AccountsApi`
   - `BillingApi`
   - `CheckoutApi`
   - `CompaniesApi`
   - `ComponentsApi`
   - `EntitlementsApi`
   - `EventsApi`
   - `FeaturesApi`
   - `PlangroupsApi`
   - `PlansApi`
   - `WebhooksApi`

3. **Model Classes**: Located in `src/Model/`, these classes represent the data structures used by the API.

4. **Support Classes**:
   - `Configuration`: Handles SDK configuration and API settings
   - `ApiException`: Custom exception class for API errors
   - `HeaderSelector`: Helps with HTTP header selection
   - `ObjectSerializer`: Handles serialization/deserialization of data

### Code Generation

This SDK is generated using [OpenAPI Generator](https://openapi-generator.tech/), which creates most of the code from the Schematic API specification. The generator is configured via `config.yaml` and `openapitools.json`.

```bash
# Regenerate from the latest remote spec
./generate.sh

# Regenerate from a local spec file
./generate.sh --spec=/path/to/local.yml
```

The script runs the OpenAPI generator and then applies `php-cs-fixer` to the output. Files listed in `.openapi-generator-ignore` (e.g. `src/Schematic.php`) are preserved during generation.

### Usage Pattern

The typical usage pattern is:

1. Initialize the Schematic client with an API key
2. Use the desired API client to make API calls
3. Handle any exceptions that might occur
4. Process the response

Example:
```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

// Initialize the Schematic client
$schematic = new Schematic('YOUR_SECRET_API_KEY');

// Make an API call
try {
    $companies = $schematic->CompaniesApi->listCompanies();
    // Process the companies
} catch (\Exception $e) {
    // Handle the exception
    echo 'Error: ' . $e->getMessage();
}
```

### Versioning

The SDK version is defined in `config.yaml` (`artifactVersion` and `httpUserAgent`). Running `./generate.sh` propagates it to `composer.json` and `src/Configuration.php`. To release a new version:

1. Update `artifactVersion` and `httpUserAgent` in `config.yaml`
2. Run `./generate.sh`
3. Commit, tag, and push

## Development Notes

- PHP 7.4 or 8.0+ is required for development
- Required extensions: curl, json, mbstring
- Tests are PHPUnit-based and located in the `test/` directory
- Most of the code is auto-generated; direct edits to generated files are discouraged
- Additions to the functionality should follow the existing architecture