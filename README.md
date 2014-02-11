HirviidCleengBundle
============

This bundle provides a simple integration of the "[Cleeng PHP SDK](https://github.com/Cleeng/cleeng-php-sdk)" into Symfony2.
Cleeng offers an iTunes™ like purchase experience to any website, from video platforms to newspapers and live concerts. You can find more
information about Cleeng on its dedicated page at
http://cleeng.com.

    <?php

    $cleengApi = $this->container->get('cleeng')->api;

The bundle provides a new `cleeng` service that returns an instance of
`Cleeng_Api`.

## Installation

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

That's it! You are ready to use Cleeng with symfony2.
