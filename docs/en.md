## Usage

Install a copy of the package with [composer](https://getcomposer.org).

```bash
composer require bowphp/blade
```

You can directly use the `\Bow\Blade\BladeEngineConfiguration::class` configuration in the package and go to [config](#configuration).

## Configuration

In the `Kernel.php` file in the `app` folder. Add the configuration as follows:

```php
/**
 * All app services register
 *
 * @return array
 */
public function configurations()
{
  /**
   * Put here you service
   */
  return [
    // other
    \Bow\Blade\BladeEngineConfiguration::class,
  ];
}
```

Note that the name of the template engine here is `blade`. This is the name that should be used in the view configuration in the `config/view.php` file. Then put the extension to `.blade.php` like this.

```php
return [
  'engine' => 'blade',
  ...
  'extension' => '.blade.php'
  ...
];
```
