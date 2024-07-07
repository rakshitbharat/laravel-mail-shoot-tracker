# Laravel Mail Shoot Tracker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rakshitbharat/laravel-mail-shoot-tracker.svg?style=flat-square)](https://packagist.org/packages/rakshitbharat/laravel-mail-shoot-tracker)
[![Total Downloads](https://img.shields.io/packagist/dt/rakshitbharat/laravel-mail-shoot-tracker.svg?style=flat-square)](https://packagist.org/packages/rakshitbharat/laravel-mail-shoot-tracker)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

Laravel Mail Shoot Tracker is a Laravel package that helps you track if emails are being sent from your Laravel application. This package logs the details of every email sent, which can help in debugging and ensuring that emails are being dispatched as expected.

## Features

- Automatically logs details of every sent email
- Logs recipients and subject of the email
- Seamless integration with Laravel's mail system
- No additional configuration required
- Easy to use and configure

## Installation

You can install the package via Composer:

```bash
composer require rakshitbharat/laravel-mail-shoot-tracker
```

Usage
Once installed, the package will automatically log all sent emails to the Laravel log. No additional configuration is required.

Logging Details
The package logs the following details for each sent email:

Recipients
Subject
The log entry will look something like this:

```sh
[YYYY-MM-DD HH:MM:SS] local.INFO: Mail sent {"to":"recipient@example.com","subject":"Your Subject Here"}
````

Configuration
Currently, there are no additional configuration options. The package works out of the box by listening to the MessageSent event provided by Laravel.

Service Provider
The package includes a service provider that is automatically discovered by Laravel. The service provider registers the event listener that logs the email details.

Event Listener
The package includes an event listener that handles the MessageSent event and logs the email details.

Contributing
Thank you for considering contributing to the Laravel Mail Shoot Tracker! You can contribute by submitting issues or pull requests.

License
The Laravel Mail Shoot Tracker is open-sourced software licensed under the MIT license.
