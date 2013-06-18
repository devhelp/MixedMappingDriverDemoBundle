Credits
-------

Bundle brought to you by : Devhelp.pl (http://devhelp.pl)

Purpose
-------

This is a simple demo of how doctrine in symfony handles case when
on entity is mapped using annotation, yaml and xml at one time.

SPOILER ALERT !

It doesn't handle it ;) You can have the same entity mapped only 
using one of the drivers not mixing many of them

SPOILER ALERT ! - END

Basically, this is the order of mapping drivers. It the earlier does
not exist then the next one is applied

- XML
- YAML
- Annotations

Installation
------------

### Composer

add package to composer.json

    "require" : {
        "devhelp/mixed-mapping-driver-demo-bundle": "dev-master"
    }

run update

    composer update
    
register bundle in your kernel class

    public function registerBundles()
    {
        $bundles = array(
            //...
            new Devhelp\Bundle\MixedMappingDriverDemoBundle\DevhelpMixedMappingDriverDemoBundle(),
            //...
        );
    }

Usage
------------

run schema update task to see it yourself

    php app/console doctrine:schema:update --dump-sql
