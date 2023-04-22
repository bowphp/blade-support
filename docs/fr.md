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
