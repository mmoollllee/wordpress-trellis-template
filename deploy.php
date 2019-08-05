<?php

namespace Deployer;

require 'vendor/deployer/deployer/recipe/common.php';
require 'vendor/florianmoser/plesk-deployer/recipe/chroot_fixes.php';
require 'vendor/florianmoser/bedrock-deployer/recipe/bedrock_db.php';
require 'vendor/florianmoser/bedrock-deployer/recipe/bedrock_env.php';
require 'vendor/florianmoser/bedrock-deployer/recipe/bedrock_misc.php';
require 'vendor/florianmoser/bedrock-deployer/recipe/common.php';
require 'vendor/florianmoser/bedrock-deployer/recipe/filetransfer.php';
require 'vendor/florianmoser/bedrock-deployer/recipe/sage.php';
require 'vendor/florianmoser/bedrock-deployer/recipe/trellis.php';

// Configuration

// Common Deployer config
set( 'repository', 'git@github.org/vendor/repository.git' );
set( 'chroot_path_prefix', '/var/www/vhosts/example.com/stage.example.com/deploy' );
set( 'chroot_index_file', 'web/index.php' );
set( 'shared_dirs', [
	'web/app/uploads'
] );

// Bedrock DB config
set( 'vagrant_dir', dirname( __FILE__ ) . '/../trellis' );
set( 'vagrant_root', '/srv/www/example.com/current' );

// Bedrock DB and Sage config
set( 'local_root', dirname( __FILE__ ) );;

// File transfer config
set( 'sync_dirs', [
	dirname( __FILE__ ) . '/web/app/uploads/' => '{{deploy_path}}/shared/web/app/uploads/',
] );


// Hosts

set( 'default_stage', 'staging' );

host( 'your-host.com/staging' )
	->stage( 'staging' )
	->user( 'your-username' )
	->set( 'deploy_path', '/staging.domain.com/deploy' );

host( 'your-host.com/production' )
	->stage( 'production' )
	->user( 'your-username' )
	->set( 'deploy_path', '/domain.com/deploy' );


// Tasks

// Deployment flow
// ToDo adapt sage:vendors...
desc( 'Deploy your project' );
task( 'deploy', [
	'deploy:prepare',
	'deploy:lock',
	'deploy:release',
	'deploy:update_code',
	'trellis:remove',
	'deploy:shared',
	'deploy:writable',
	'bedrock:vendors',
	'push:assets',
	'bedrock:env',
	'deploy:clear_paths',
	'deploy:symlink',
  'push:db',
	'deploy:unlock',
	'cleanup',
	'success',
] );

// [Optional] if deploy fails automatically unlock.
after( 'deploy:failed', 'deploy:unlock' );
