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

## Contributing

Thank you for considering contributing to Bow Framework! The contribution guide is in the framework documentation.

- [Franck DAKIA](https://github.com/papac)
- [Thank's collaborators](https://github.com/bowphp/tintin/graphs/contributors)

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

## Contact

- [papac@bowphp.com](mailto:papac@bowphp.com)
- [@papacdev](https://twitter.com/papacdev)

Please, if there is a bug on the project contact me by email or leave me a message on [Slack](https://bowphp.slack.com). or [join us on Slask](https://join.slack.com/t/bowphp/shared_invite/enQtNzMxOTQ0MTM2ODM5LTQ3MWQ3Mzc1NDFiNDYxMTAyNzBkNDJlMTgwNDJjM2QyMzA2YTk4NDYyN2NiMzM0YTZmNjU1YjBhNmJjZThiM2Q)
