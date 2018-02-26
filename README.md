Contao 4 deployer edition
=========================

Contao is an Open Source PHP Content Management System for people who want a
professional website that is easy to maintain. Visit the [project website][1]
for more information.


What's inside?
--------------

The Contao deployer edition is based on the [Contao managed edition][2] and
additionally includes [Deployer][3], a deployment tool for PHP.


How to use
----------

Install the Contao deployer edition with Composer:

```bash
php composer.phar create-project contao/deployer-edition new-project
```

Initialize a Git repository in the new directory:

```bash
cd new-project
git init
```

Adjust the `.gitignore`, `composer.json` and `deploy.php` files to your needs,
run `php composer.phar update` and commit everything.


Shared resources
----------------

Shared resources are files and folders that are not in your Git repository and
shall be preserved during deployment. The shared resources need to be set up
before the first deployment, so create them on your target server:

```
/var/www/target:
    shared/
        app/
            config/
                parameters.yml
    system/
        config/
            localconfig.php
    templates/
    var/
        logs/
    web/
        share/
```


Deploy
------

Now you can deploy by running `vendor/bin/deploy` on the command line.


Notes
-----

Deployer will try to clone your repository during deployment, so you need to
have Git installed on the target server and the target server needs permission
to read your repository.

Other than in the managed edition, the `files` directory is not ignored in the
.gitignore file, because it is meant to be under version control.

If you want to put your custom templates under version control (recommended),
store them in `app/Resources/contao/templates` instead of in the `templates`
folder. This way you can still overwrite them with the Contao template editor.


[1]: https://contao.org
[2]: https://github.com/contao/managed-edition
[3]: https://deployer.org
