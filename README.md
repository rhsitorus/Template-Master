#INSTRUCTION#
##Introduction##
This bundle is used as default theme of my symfony project. This theme is based on bootstrap css framework.
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
##Assetic Dump
```
php app/console assetic:dump
```
##Usage##
in template you can extends our template by using 
```
{% extends("RofilTemplateMasterBundle:one-column.html.twig") %}

{% block "content" %}
    ...
{% endblock %}
```

for one column template or for two column template by using 
```
{% extends("RofilTemplateMasterBundle:one-column.html.twig") %}

{% block "sidebar" %}
    ...
{% endblock %}

{% block "content" %}
    ...
{% endblock %}
```
the available block that availabel to override are `header`, `navigation`, `title`, `layout` and `footer`. 