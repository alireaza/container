# Container


## Install

Via Composer
```bash
$ composer require alireaza/container
```


## Usage

```php
use AliReaza\Container\Container;

$container = new Container();

$container->containers['foo'] = 'bar';

$container->get('foo'); // bar
```


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.