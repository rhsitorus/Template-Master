###INSTRUCTION###
##Introduction##
##Installation##
Add to composer.json
```
...
"rofil/template-master": "master-dev"
...
```

update composer.json by running
```
    ...
    $ composer update
    ...
```

register the bundle in appkernel.php

```
...
    new Rofil\Template\MasterBundle\RofilTemplateMasterBundle(),
...
```

##Configuration###

in app/config/config.yml
```
...
assetic:
    ...
    bundles:        [ "RofilTemplateMasterBundle" ]
... 
```
```
twig:
    ...
    form:
        resources:
            - 'RofilTemplateMaster:Form:fields.html.twig'
```

##Dump Asset##
```
app/console assets:install
```

##Using##