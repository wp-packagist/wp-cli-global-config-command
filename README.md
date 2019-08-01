# WP-CLI Global Configuration Command.

WP-CLI has a series of global parameters (e.g. --path=<path> and --user=<user>) which work with all commands.

This config saved in `config.yml` or `wp-cli.yml` files. [ https://make.wordpress.org/cli/handbook/config/ ]

With this package you can easily add, delete or edit WP-CLI global parameters in the command line and you no longer need to edit the source settings file.

<br>
<p align="center">
<img src="https://raw.githubusercontent.com/wp-packagist/wp-cli-global-config-command/master/wp-cli.png" alt="WP-CLI logo">
</p>
  
- [Installation](#installation)
- [Structure](#structure)
- [Commands](#commands)
  * [Show list](#show-list)
  * [Set New Config](#set-new-config)
      - [Set new config with space in key](#set-new-config-with-space-in-key)
      - [Set new config with boolean value](#set-new-config-with-boolean-value)
      - [Set new config with number value](#set-new-config-with-number-value)
      - [Set new config with array value](#set-new-config-with-array-value)
      - [Set new config with null value](#set-new-config-with-null-value)
      - [Set new config with empty value](#set-new-config-with-empty-value)
  * [Set new config with nested array key](#set-new-config-with-nested-array-key)
  * [Get Config Value](#get-config-value)
  * [Remove Config Value](#remove-config-value)
  * [Reset Configuration](#reset-configuration)
- [Author](#author)
- [Contributing](#contributing)  
  

## Installation

You can install this package with:

```
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

For All commands in this package you can use `--local` flag for process in local config file current working directory [wp-cli.local.yml]. 



## Commands

List of WP-CLI global config Commands :



### Show list

For show list all global parameters:

```
wp global-config list
```

also for show list of all global config in current directory:

```
wp global-config list
```



### Set New Config

Structure:

```
wp global-config set <key> <value> [--local]
```

For example set new path:

```
wp global-config set path ~/wp-cli/site
```

##### Set new config with space in key

```
wp global-config set "config create" new_value
```

##### Set new config with boolean value

```
wp global-config set color false
```

##### Set new config with number value

```
wp global-config set my-custom-number 100
```

##### Set new config with array value

use JSON Format.

```
wp global-config set disabled_commands '["db drop","plugin install"]'
```

##### Set new config with null value

```
wp global-config set db_pass null
```

##### Set new config with empty value

```
wp global-config set db_pass ''
```



### Set new config with nested array key

you can use `:` for per level.

```
wp global-config set @staging:user wpcli
```

example 2:

```
wp global-config set @staging:user:ID 32
```

example 3:

disable plugin install command only in current directory project.

```
wp global-config set disabled_commands '["plugin install"]' --local
```



### Get Config Value

Structure:

```
wp global-config get <key> [--local]
```

For example:

```
wp global-config get port
```

or for local config

```
wp global-config get url --local
```



### Remove Config Value

Structure:

```
wp global-config remove <key>
```

for example:

```
wp global-config remove path
```

```
wp global-config remove color --local
```

You can also nested key name in this command.

```
wp global-config remove key_1:key_2_child
```



### Reset Configuration

```
wp global-config reset
```

for local current directory config:

```
wp global-config reset --local
```



## Author

<p align="center">
<img src="https://raw.githubusercontent.com/wp-packagist/wp-cli-gdrive-command/master/screenshot/author.png" alt="Mehrshad Darzi">
 </p>
 <p align="center">Mehrshad Darzi
 <br>PHP Fullstack and WordPress Developer
 <br>Mehrshad198 [at] gmail.com</p>



## Contributing

We appreciate you taking the initiative to contribute to this project.
Contributing isn’t limited to just code. We encourage you to contribute in the way that best fits your abilities, by writing tutorials, giving a demo at your local meetup, helping other users with their support questions, or revising our documentation.
