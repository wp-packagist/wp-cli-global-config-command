# WP-CLI Global Configuration Command

WP-CLI has a series of global parameters (e.g. --path=<path> and --user=<user>) which work with all commands.

This config saved in `config.yml` or `wp-cli.yml` files. [[WP-CLI Document]](https://make.wordpress.org/cli/handbook/config/).

With this package, you can easily add, delete or edit WP-CLI global parameters in the command line and you no longer need to edit the source settings file.

<br>
<p align="center">
<img src="https://raw.githubusercontent.com/wp-packagist/wp-cli-global-config-command/master/wp-cli-logo.png" alt="WP-CLI logo">
</p>
  
## Table of Contents
  
- [Installation](#installation)
- [Structure](#structure)
- [Commands](#commands)
  * [Show list](#show-list)
  * [Set New Config](#set-new-config)
      - [Set new config with the boolean value](#set-new-config-with-the-boolean-value)
      - [Set new config with the number value](#set-new-config-with-the-number-value)
      - [Set new config with the array value](#set-new-config-with-the-array-value)
      - [Set new config with the null value](#set-new-config-with-the-null-value)
      - [Set new config with empty value](#set-new-config-with-empty-value)
  * [Set new config with nested array key](#set-new-config-with-nested-array-key)
  * [Get Config Value](#get-config-value)
  * [Remove Config Value](#remove-config-value)
  * [Reset Configuration](#reset-configuration)
- [Author](#author)
- [Contributing](#contributing)
  

## Installation

You can install this package with:

```console
wp package install wp-packagist/wp-cli-global-config-command
```

> Installing this package requires WP-CLI v2 or greater. Update to the latest stable release with `wp cli update`.



## Structure

```
NAME

  wp global-config

DESCRIPTION

  Global Configuration.

SYNOPSIS

  wp global-config <command>

SUBCOMMANDS

  get         Show Custom Config.
  list        Show Configuration list.
  remove      Remove Config Parameter.
  reset       Reset Configuration.
  set         Set new config.
```

For All commands in this package, you can use `--local` flag for process in a local config file current working directory [wp-cli.local.yml]. 



## Commands

List of WP-CLI global config Commands:



### Show list

For show list all global parameters:

```console
wp global-config list
```

also for show list of all global config in the current directory:

```console
wp global-config list --local
```



### Set New Config

Structure:

```console
wp global-config set <key> <value> [--local]
```

For example, set new path:

```console
wp global-config set path ~/wp-cli/site
```

##### Set new config with the boolean value

```console
wp global-config set color false
```

##### Set new config with the number value

```console
wp global-config set my-custom-number 100
```

##### Set new config with the array value

use JSON Format.

```console
wp global-config set disabled_commands '["db drop","plugin install"]'
```

##### Set new config with the null value

```console
wp global-config set db_pass null
```


##### Set new config with space in key

```console
wp global-config set "config create" new_value
```

##### Set new config with empty value

```console
wp global-config set db_pass ''
```

### Set new config with nested array key

you can use `:` caharacter per level.

```console
wp global-config set @staging:user <value>
```

example 2:

```console
wp global-config set @staging:user:ID 32
```

example 3:

disable plugin install command only in the current directory project.

```console
wp global-config set disabled_commands '["plugin install"]' --local
```


### Get Config Value

Structure:

```console
wp global-config get <key> [--local]
```

For example:

```console
wp global-config get port
```

or for local config:

```console
wp global-config get url --local
```

### Remove Config Value

Structure:

```console
wp global-config remove <key>
```

for example:

```console
wp global-config remove path
```

```console
wp global-config remove color --local
```

You can also nested key name in this command.

```console
wp global-config remove key_1:key_2_child
```

### Reset Configuration

```console
wp global-config reset
```

For local current directory config:

```console
wp global-config reset --local
```

## Author

- [Mehrshad Darzi](https://www.linkedin.com/in/mehrshaddarzi/) | PHP Full Stack and WordPress Expert

## Contributing

We appreciate you taking the initiative to contribute to this project.

Contributing isn’t limited to just code. We encourage you to contribute in the way that best fits your abilities, by writing tutorials, giving a demo at your local meetup, helping other users with their support questions, or revising our documentation.

### Reporting a bug

Think you’ve found a bug? We’d love for you to help us get it fixed.
Before you create a new issue, you should [search existing issues](https://github.com/wp-packagist/wp-cli-global-config-command/issues?q=label%3Abug%20) to see if there’s an existing resolution to it, or if it’s already been fixed in a newer version.

### Creating a pull request

Want to contribute a new feature? Please first [open a new issue](https://github.com/wp-packagist/wp-cli-global-config-command/issues/new) to discuss whether the feature is a good fit for the project.

Once you've decided to commit the time to seeing your pull request through, please follow our guidelines for creating a pull request to make sure it's a pleasant experience:

1. Create a feature branch for each contribution.
2. Submit your pull request early for feedback.
3. Follow [PSR-2 Coding Standards](http://www.php-fig.org/psr/psr-2/).
