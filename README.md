Installation:
...
"rofil/template-master": "master-dev"
...

and update composer.json by running
composer update

register the bundle pada appkernel.php

...
    new Rofil\Template\MasterBundle\RofilTemplateMasterBundle(),
...

in app/config/config.yml
...
assetic:
    ...
    bundles:        [ "RofilTemplateMasterBundle" ]
... 
twig:
    ...
    form:
        resources:
            - 'RofilTemplateMaster:Form:fields.html.twig'

Dump Asset
app/console assets:install

Rofilde