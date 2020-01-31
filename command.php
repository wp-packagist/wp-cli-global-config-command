<?php

# Check Exist WP-CLI
if (!class_exists('WP_CLI')) {
    return;
}

# Register 'global-config' Command
WP_CLI::add_command('global-config', Global_Config_Command::class);
