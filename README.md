EnseparHtml2pdfBundle
=====================

[![Build Status](https://travis-ci.org/FrDeamon/EnseparHtml2pdfBundle.svg?branch=master)](https://travis-ci.org/FrDeamon/EnseparHtml2pdfBundle)

[Html2pdf](https://github.com/spipu/html2pdf) for Symfony as a service.

How to install?
----------------

Just add this to your composer.json file:

```json
"require": {
  ...
  "ensepar/html2pdf-bundle" : "^5.0"
}
```
or via composer: 
```bash
$ composer require ensepar/html2pdf-bundle
```

Enable it in bundles if not already

```php
Ensepar\Html2pdfBundle\EnseparHtml2pdfBundle::class => ['all' => true],
```

How to use?
------------

Via dependency injection:

```php
class Html2Pdf
{
    /**
     * @Route("/create")
     */
    public function create(Html2pdfFactory $html2pdfFactory)
    {

        $html2pdf = $html2pdfFactory->create();
    }
}
```

Via the container: 
```php
$html2pdf = $this->get('html2pdf_factory')->create();
```

You can pass every option you would pass to html2pdf, for instance :

```php
$html2pdf = $this->get('html2pdf_factory')->create('P', 'A4', 'en', true, 'UTF-8', [10, 15, 10, 15]);
```

If the previous arguments are not provided, the factory uses its own default values.  
You can change those default values by adding the bundle configuration to your config file:

```yaml
ensepar_html2pdf:
    orientation: 'P'
    format: 'A4'
    lang: 'en'
    unicode: true
    encoding: 'UTF-8'
    margin: [10, 15, 10, 15]
```

Read more on the library `Html2pdf` [here](https://github.com/spipu/html2pdf/blob/master/doc/README.md).

How to run the tests?
----------------------

```shell
$ composer install
$ php vendor/bin/phpunit
```
