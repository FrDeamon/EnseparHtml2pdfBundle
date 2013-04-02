EnseparHtml2pdfBundle
=====================

Html2pdf for Symfony 2 as a service.

How to install ?
----------------

Just add this to your composer.json file:

```js
"require": {
  ...
  "ensepar/html2pdf-bundle" : "dev-master"
}
```
Enable it in the Kernel

```php
new Ensepar\Html2pdfBundle\EnseparHtml2pdfBundle(),
```
How to use ?
------------

In your action:

```php
$html2pdf = $this->get('html2pdf')->get();
```

How to configure?
-----------------

Override these parameters in your configuration.

```yml
html2pdf.orientation  # The orientation of the document. P for portrait, L for landscape
html2pdf.format       # The format of the document. A4, A5 .... 
html2pdf.lang         # The language of the document
```
