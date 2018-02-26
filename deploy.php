<?php

namespace Deployer;

require __DIR__.'/vendor/deployer/deployer/recipe/symfony3.php';

set('shared_dirs', [
    'templates',
    'var/logs',
    'web/share',
]);

add('shared_files', [
    'system/config/localconfig.php',
]);

// Enter the URL to your Git repository here
set('repository', 'git@github.com:vendor/repository.git');

set('writable_dirs', []);
set('keep_releases', 2);
set('default_stage', 'production');
set('ssh_type', 'native');
set('ssh_multiplexing', true);

// Enter the login credentials of your server here
host('your-host.com')
    ->user('username')
    ->set('deploy_path', '/var/www')
    ->stage('production')
;
