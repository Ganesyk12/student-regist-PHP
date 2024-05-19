<p align="center"><a href="https://codeigniter.com" target="_blank"><img src="https://www.codeigniter.com/user_guide/_static/ci-logo-text.svg" width="400" alt="Codeigniter Logo"></a></p>

# CodeIgniter <sup>4</sup> Application - Student Regist Web Apps
[![PHPUnit](https://github.com/codeigniter4/CodeIgniter4/workflows/PHPUnit/badge.svg)](https://github.com/codeigniter4/CodeIgniter4/actions/workflows/test-phpunit.yml)
[![PHPStan](https://github.com/codeigniter4/CodeIgniter4/actions/workflows/test-phpstan.yml/badge.svg)](https://github.com/codeigniter4/CodeIgniter4/actions/workflows/test-phpstan.yml)
[![Psalm](https://github.com/codeigniter4/CodeIgniter4/actions/workflows/test-psalm.yml/badge.svg)](https://github.com/codeigniter4/CodeIgniter4/actions/workflows/test-psalm.yml)
[![Coverage Status](https://coveralls.io/repos/github/codeigniter4/CodeIgniter4/badge.svg?branch=develop)](https://coveralls.io/github/codeigniter4/CodeIgniter4?branch=develop)
[![Downloads](https://poser.pugx.org/codeigniter4/framework/downloads)](https://packagist.org/packages/codeigniter4/framework)
[![GitHub release (latest by date)](https://img.shields.io/github/v/release/codeigniter4/CodeIgniter4)](https://packagist.org/packages/codeigniter4/framework)
[![GitHub stars](https://img.shields.io/github/stars/codeigniter4/CodeIgniter4)](https://packagist.org/packages/codeigniter4/framework)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/codeigniter4/CodeIgniter4/pulls)
<br>


## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).
This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework. When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Using Templates

To develop a project using a combination of templates, you can add in the `public/assets/` folder

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## Screenshots
- Home
  <img src="https://i.ibb.co/kyvht3B/Screenshot-5.png" alt="Screenshot-5" border="0">
- Dashboard
  <img src="https://i.ibb.co/zm9KSDT/Screenshot-6.png" alt="Screenshot-6" border="0">
- Form
  <img src="https://i.ibb.co/bgXwnR4/Screenshot-8.png" alt="Screenshot-8" border="0">
- Database
  <img src="https://i.ibb.co/pR6C3sw/Screenshot-13.png" alt="Screenshot-13" border="0">
