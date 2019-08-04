## Installation

1. Clone [Trellis]()
    ```sh
    $ mkdir domain.tld && cd domain.tld
    $ git clone --depth=1 git@github.com:roots/trellis.git && rm -rf trellis/.git
    ```
2. Install [Bedrock Site Template](https://github.com/Mediengestalter-schw-Art/site-template):
    ```sh
    $ git clone https://github.com/Mediengestalter-schw-Art/site-template.git site
    $ cd site
    $ cp .env.example .env && atom .env
    ```
    Edit .env, generate salts, Add ACF_PRO_KEY, Domain,...
    Actually get's overwritten if used with Trellis.
    ```sh
    $ composer install
    ```
3. Configure Local Domain in `group_vars/development/wordpress_sites.yml`
4. Vagrant Up:
    ```sh
    $ cd .. && cd trellis && vagrant up
    ```
5. Vagrant SSH:
    ```sh
    $ vagrant ssh
    $ cd /srv/www/example.com/current
    $ wp site switch-language de_DE
    $ wp option update blogdescription ''
    $ wp option update ping_sites '' && wp option update default_pingback_flag false && wp option update default_pingback_flag false && wp option update default_ping_status false && wp option update default_comment_status false && wp option update show_avatars false && wp option update date_format 'j. F Y' && wp option update time_format 'G:i'
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

* How to define the different .env files? Is it .env.local,...?
* [Disable Gutenberg by Code](https://digwp.com/2018/12/enable-gutenberg-block-editor/)
* Write own file-renaming-on-upload Plugin
* Add other Plugins too?
  * Better Search Replace
  * Code Snippets
  * Duplicator
  * Mail project
  * Relevanssi
