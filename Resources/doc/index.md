Using HirviidCleengBundle
=========================

## Configuration

If you skip this step, these defaults will be used.

```yaml
# app/config/config.yml
hirviid_cleeng:
    sandbox: false # if true, uses the Cleeng Sandbox endpoint
    publisher_token: null # The publisher token to use
```

## Usage example

```php
    <?php

    $cleengApi = $this->container->get('cleeng')->api;

    $customerEmail = 'current@email.com';
    $newCustomerEmail = 'new@email.com';

    $cleengApi->updateCustomerEmail($customerEmail, $newCustomerEmail);
```