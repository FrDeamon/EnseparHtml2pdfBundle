EnseparHtml2pdfBundle
=====================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/0e16b696-0da3-4efc-b856-60429a9672b4/mini.png)](https://insight.sensiolabs.com/projects/0e16b696-0da3-4efc-b856-60429a9672b4)
[![Build Status](https://travis-ci.org/OwlyCode/EnseparHtml2pdfBundle.svg?branch=master)](https://travis-ci.org/OwlyCode/EnseparHtml2pdfBundle)

[Html2pdf](https://github.com/spipu/html2pdf) for Symfony as a service.

How to install?
---------------

Use Composer to install it:

```bash
$ composer require ensepar/html2pdf-bundle
```

Enable it in your `Kernel.php` file:

```php
new Ensepar\Html2pdfBundle\EnseparHtml2pdfBundle(),
```

How to use?
-----------

In your code:

```php

use Ensepar\Html2pdfBundle\Factory\Html2pdfFactory;

class MyClass
{
	private $html2pdfFactory;

	public function __construct(Html2pdfFactory $html2pdfFactory)
	{
		$this->html2pdfFactory = $html2pdfFactory;
	}
}

// you can also get it from the container in your controller action:
$html2pdfFactory = $this->get(Html2pdfFactory::class)->create();

```

You can pass every options you would pass to html2pdf, for instance:

```php
$html2pdfFactory = $this->get(Html2pdfFactory::class)->create('P', 'A4', 'en', true, 'UTF-8', array(10, 15, 10, 15));
```

If the previous arguments are not provided, the factory uses its own default values.
You can configure those default values by adding the bundle configuration to your config file:

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

How to run tests?
-----------------

```
composer install
phpunit
```
