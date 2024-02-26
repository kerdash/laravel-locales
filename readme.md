## Laravel locales
Language files in Laravel applications.

### Installation
You can install the package via Composer by running the following command:

```
composer require hassankerdash/laravel-locales
```

## Usage

You can use the `lang:locale` Artisan command to publish language files for specific languages in your Laravel application.

### Command Syntax:

```bash
php artisan lang:locale --lang=en,ar
```

This command will publish language files for the English (en) and Arabic (ar) languages.

Make sure to replace `en` and `ar` with the language codes you want to publish.

### Example:

To publish language files for English and Arabic:

```bash
php artisan lang:locale --lang=en,ar
```

### License
This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Author
- [Hassan Kerdash](https://github.com/kerdash)

### Contributing
Contributions are welcome! Feel free to submit issues or pull requests on [GitHub](https://github.com/kerdash/laravel-locales).

### Support
For any questions or support, please contact Hassan Kerdash via [GitHub Issues](https://github.com/kerdash/laravel-locales/issues).


### Security Vulnerabilities
If you discover a security vulnerability within this package, please send an e-mail to Hassan Kerdash via [kerdash@gmail.com](mailto:kerdash@gmail.com). All security vulnerabilities will be promptly addressed.
