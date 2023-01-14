<h1 align="center">Repository</h1>

This package provides is an implementation of repository pattern for Lumen and Laravel.

Getting Started
---

Installation :

```
$ composer require tripteki/laravelphp-repository
```

How to use it :

- Initiate file `app/Contracts/Repository/IRepository.php`.

```php
<?php

namespace App\Contracts\Repository;

use Tripteki\Repository\Contracts\Allable;
use Tripteki\Repository\Contracts\Getable;
use Tripteki\Repository\Contracts\Createable;
use Tripteki\Repository\Contracts\Updateable;
use Tripteki\Repository\Contracts\Deleteable;

interface IRepository extends Allable, Createable, Deleteable
{
    //
};
```

- For QueryBuilder instance just initiate file `app/Repositories/QueryBuilder/MyRepository.php`.

```php
<?php

namespace App\Repositories\QueryBuilder;

use App\Contracts\Repository\IRepository;
use Tripteki\Repository\AbstractRepository;

class MyRepository extends AbstractRepository implements IRepository
{
    /**
     * @param array $querystring
     * @return mixed
     */
    public function all($querystring = []) {}

    /**
     * @param array $data
     * @return mixed
     */
    public function create($data) {}

    /**
     * @param int|string $identifier
     * @return mixed
     */
    public function delete($identifier) {}
};
```

- For Eloquent instance just initiate file `app/Repositories/Eloquent/MyRepository.php`.

```php
<?php

namespace App\Repositories\Eloquent;

use App\Contracts\Repository\IRepository;
use Tripteki\Repository\AbstractRepository;

class MyRepository extends AbstractRepository implements IRepository
{
    /**
     * @param array $querystring
     * @return mixed
     */
    public function all($querystring = []) {}

    /**
     * @param array $data
     * @return mixed
     */
    public function create($data) {}

    /**
     * @param int|string $identifier
     * @return mixed
     */
    public function delete($identifier) {}
};
```

- Initiate file `app/Providers/RepositoryServiceProvider.php`.

```php
<?php

namespace App\Providers;

use Tripteki\Repository\RepositoryServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $repositories =
    [
        // For QueryBuilder //
        \App\Contracts\Repository\IRepository::class => \App\Repositories\QueryBuilder\MyRepository::class,

        // For Eloquent //
        \App\Contracts\Repository\IRepository::class => \App\Repositories\Eloquent\MyRepository::class,
    ];
};
```

- Put `App\Providers\RepositoryServiceProvider` to service provider configuration list.

Author
---

- Trip Teknologi ([@tripteki](https://linkedin.com/company/tripteki))
- Hasby Maulana ([@hsbmaulana](https://linkedin.com/in/hsbmaulana))
