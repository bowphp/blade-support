## Usage

Installez une copie du package avec [composer](https://getcomposer.org).

```bash
composer require bowphp/blade
```

Vous pouvez utiliser directement la configuration `\Bow\Blade\BladeEngineConfiguration::class` fournir dans le package et aller le [confirguer](#configuration).

## Configuration

Dans le fichier `Kernel.php` du dossier `app`. Ajoutez la configuration comme suit:

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

Notez qui le nom du moteur de template ici est `blade`. C'est ce nom qui doit être utiliser dans la configuration des vues dans le fichier `config/view.php`. Ensuite mettez l'extension à `.blade.php` comme ceci.

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
