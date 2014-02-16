EnseparHtml2pdfBundle
=====================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/0e16b696-0da3-4efc-b856-60429a9672b4/mini.png)](https://insight.sensiolabs.com/projects/0e16b696-0da3-4efc-b856-60429a9672b4)

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

Override these parameters in your configuration. These are the parameters given to HTML2PDF constructor. See http://wiki.spipu.net/doku.php?id=html2pdf:en:v4:accueil

```yml
html2pdf.orientation           # The orientation of the document. P for portrait, L for landscape
html2pdf.format                # The format of the document. A4, A5 .... 
html2pdf.lang                  # The language of the document
html2pdf.unicode: true         # true means clustering the input text is unicode
html2pdf.encoding: 'UTF-8'     # The charset encoding of the document.
html2pdf.margin: [10,15,10,15] # The margins of the document content, in order (left, top, right, bottom)
```
