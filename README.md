## Installation

1. Clone Repository with [Trellis](https://github.com/roots/trellis/)-Subtree
    ```sh
    $ git clone git@github.com:mmoollllee/wordpress-trellis-template.git domain.tld && cd domain.tld
    ```
2. Setup .env
    ```sh
    $ cd site && cp .env.example .env && code .env
    ```
    Actually get's overwritten with `vagrant up`, but we need the inital ACF_PRO_KEY to run Composer Install.
    ```sh
    $ composer install
    ```
3. Configure Local Domain in `trellis/group_vars/development/wordpress_sites.yml` and add following
    ```yml
    site_title: Example
    admin_user: example
    ```
4. Configure Local Domain in `trellis/group_vars/development/vault.yml`
5. Vagrant Up:
    ```sh
    $ cd ../trellis && vagrant up
    ```
6. Vagrant SSH:
    ```sh
    $ vagrant ssh
    $ sh /srv/www/domain.tld/current/scripts/wp-reset-options.sh
    ```
7. Deploy with [Bedrock Deployer](https://github.com/mmoollllee/bedrock-deployer):
    1. Create GitHub Repo
    2. Setup Plesk Environment (bin/bash, add SSH-Key)
    3. SSH into Webserver, create SSH key and add pub key to [GitHub Repo Deploy Keys](https://github.com/mmoollllee/site-template/settings/keys)
    ```sh
    $ ssh-keygen -t rsa -b 4096
    ```
    4. Edit deploy.php
    5. Change Admin PW
    6. Run
    ```sh
    $ dep deploy (production)
    ```
    7. Make changes on stage and ...
    ```sh
    $ dep pull (production)
    ```


### Updates

To update Wordpress:
    ```sh
    $ composer require johnpbloch/wordpress 5.2.x
    $ wp core update-db
    ```

Update Plugins:
    ```sh
    $ composer update
    ```

Update Trellis:
    ```sh
    $ git subtree pull --prefix trellis https://github.com/roots/trellis.git master --squash
    ```

## Documentation

Bedrock documentation is available at [https://roots.io/bedrock/docs/](https://roots.io/bedrock/docs/).
Good Guide is available at [https://css-tricks.com/intro-bedrock-wordpress/](https://css-tricks.com/intro-bedrock-wordpress/).

## Contributing

Contributions are welcome from everyone. We have [contributing guidelines](https://github.com/roots/guidelines/blob/master/CONTRIBUTING.md) to help you get started.

## Bedrock sponsors

Help support our open-source development efforts by [becoming a patron](https://www.patreon.com/rootsdev).

<a href="https://kinsta.com/?kaid=OFDHAJIXUDIV"><img src="https://cdn.roots.io/app/uploads/kinsta.svg" alt="Kinsta" width="200" height="150"></a> <a href="https://k-m.com/"><img src="https://cdn.roots.io/app/uploads/km-digital.svg" alt="KM Digital" width="200" height="150"></a>

## Community

Keep track of development and community news.

* Participate on the [Roots Discourse](https://discourse.roots.io/)
* Follow [@rootswp on Twitter](https://twitter.com/rootswp)
* Read and subscribe to the [Roots Blog](https://roots.io/blog/)
* Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)
* Listen to the [Roots Radio podcast](https://roots.io/podcast/)


## ToDo

* [Trellis Deployment Workflow](https://github.com/hamedb89/trellis-db-push-and-pull) [Docs](https://roots.io/trellis/docs/deploys/)
* Write own file-renaming-on-upload Plugin
* Add other Plugins too?
  * Mail project
  * Relevanssi
