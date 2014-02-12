HirviidCleengBundle
============

This bundle provides a simple integration of the "[Cleeng PHP SDK](https://github.com/Cleeng/cleeng-php-sdk)" into Symfony2.
Cleeng offers an iTunes™ like purchase experience to any website, from video platforms to newspapers and live concerts. You can find more
information about Cleeng on its dedicated page at
http://cleeng.com.
```php
    <?php

    $cleengApi = $this->container->get('cleeng')->api;
``
The bundle provides a new `cleeng` service that returns an instance of
`Cleeng_Api`.

## Installation

#### Step 1) Get the bundle using composer (symfony 2.1 pattern)

Add on composer.json (see http://getcomposer.org/)

    "require" :  {
        // ...
        "hirviid/hirviid-cleeng-bundle": "dev-master",
    }

### Step 2) Register the bundle
```php
    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Hirviid\Bundle\CleengBundle\HirviidCleengBundle(),
            // ...
        );
    }
```
## Documentation

The documentation for this bundle is available in the `Resources/doc` directory of the bundle:

* Read the [HirviidCleengBundle documentation](https://github.com/hirviid/CleengBundle/tree/master/Resources/doc/index.md)


That's it! You are ready to use Cleeng with symfony2.
