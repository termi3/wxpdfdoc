<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
  ////////////////////////////////////////////////////////////////////////////////////////////
  // Author: Ulrich Telle
  // Creation date: 31/08/2005
  // RCS-ID: $Id: index.php,v 1.29 2006/12/15 22:00:33 utelle Exp $
  // Notes: the index page of the website of this component
  ////////////////////////////////////////////////////////////////////////////////////////////
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">
	<?php
      $compname = "wxPdfDocument";
      $subdir = "wxpdfdoc";
      require("compwebsite.inc.php");
  ?>

  <br/><?php write_h1("News"); ?>

<dl>
<dt><b>August 2013</b></dt>
<dd>
<p>Version <b>0.9.4</b> of wxPdfDocument has been released and is available for
<b><a href="http://sourceforge.net/project/showfiles.php?group_id=51305&package_id=45182&release_id=354159">download</a></b>.</p>

<p>This is mainly a bug fixing release.</p>

<p>A package with precompiled Windows binaries for the wxPdfDocument utilities <b>MakeFont</b> and <b>ShowFont</b> has been added to the file release section <b><i><a href="http://sourceforge.net/project/showfiles.php?group_id=51305&package_id=45182&release_id=468705">wxPdfDocument Add-Ons</a></i></b>. The file release provides additional tools, fonts and applications which may be of interest to users of wxPdfDocument.</p>
<p>Currently the following add-ons are provided for use with wxPdfDocument:</p>
<ol>
<li><b>wxpdfdoc-utilities-1.2.zip</b> - Precompiled Windows binaries for the wxPdfDocument utilities <b>MakeFont</b> and <b>ShowFont</b></li>
<li><b>wxpdfdoc-dejavu-2.12.zip</b> - Preprocessed DejaVu Unicode fonts version 2.12</li>
<li><b>wxpdfdoc-ttf2ufm.zip</b> - A modfied version of the utility TTF2UFM which allows to
generate AFM and UFM files from TrueType or OpenType font files as needed for the wxPdfDocument
utility MakeFont. A Windows executable is included.</li>
</ol>
<p><b>NOTE:</b> The AFM files generated by the modified version of TTF2UFM are only usable with the
MakeFont utility included in wxPdfDocument version 0.8.5 and above.</p>
</dd>
</dl>

  <br/><?php write_h1("Documentation"); ?>
  <p>The doxygen-generated documentation for this component is available online
  <a href="../../docs/wxpdfdoc/">here</a>. Please let me know if you think something is missing.</p>

<p>To get an impression what can be done with this component take a look at the sample documents
generated with <b>wxPdfDocument</b>:</p>
<ul>
<li><a href="../../docs/wxpdfdoc/samples/tutorial1.pdf" target="_blank">Hello world!</a></li>
<li><a href="../../docs/wxpdfdoc/samples/tutorial2.pdf" target="_blank">Header, footer, page break and image embedding</a></li>
<li><a href="../../docs/wxpdfdoc/samples/tutorial3.pdf" target="_blank">Line breaks and colors</a></li>
<li><a href="../../docs/wxpdfdoc/samples/tutorial4.pdf" target="_blank">Multi-columns</a></li>
<li><a href="../../docs/wxpdfdoc/samples/tutorial5.pdf" target="_blank">Tables</a></li>
<li><a href="../../docs/wxpdfdoc/samples/tutorial6.pdf" target="_blank">Links and flowing text</a></li>
<li><a href="../../docs/wxpdfdoc/samples/tutorial7.pdf" target="_blank">Font embedding</a></li>
<li><a href="../../docs/wxpdfdoc/samples/bookmark.pdf" target="_blank">Document outline</a></li>
<li><a href="../../docs/wxpdfdoc/samples/cjktest.pdf" target="_blank">Chinese/Japanese/Korean</a> <font size="-1">(You need CJK support installed for Acrobat Reader)</font></li>
<li><a href="../../docs/wxpdfdoc/samples/clipping.pdf" target="_blank">Using clipping areas</a></li>
<li><a href="../../docs/wxpdfdoc/samples/drawing.pdf" target="_blank">Graphics primitives</a></li>
<li><a href="../../docs/wxpdfdoc/samples/protection1.pdf" target="_blank">Setting access permissions</a></li>
<li><a href="../../docs/wxpdfdoc/samples/protection2.pdf" target="_blank">Setting password protection</a> <font size="-1">(User password: <i>Hello</i>, Owner password: <i>World</i>)</font></li>
<li><a href="../../docs/wxpdfdoc/samples/rotation.pdf" target="_blank">Rotating text and image</a></li>
<li><a href="../../docs/wxpdfdoc/samples/wmf.pdf" target="_blank">Embedding Windows Meta File image</a></li>
<li><a href="../../docs/wxpdfdoc/samples/transformation.pdf" target="_blank">Geometric transformations</a></li>
<li><a href="../../docs/wxpdfdoc/samples/gradients.pdf" target="_blank">Color gradients</a></li>
<li><a href="../../docs/wxpdfdoc/samples/barcodes.pdf" target="_blank">Barcodes</a></li>
<li><a href="../../docs/wxpdfdoc/samples/charting.pdf" target="_blank">Simple charting examples</a></li>
<li><a href="../../docs/wxpdfdoc/samples/labels.pdf" target="_blank">Simple label printing examples</a></li>
<li><a href="../../docs/wxpdfdoc/samples/javascript.pdf" target="_blank">Document level JavaScript</a></li>
<li><a href="../../docs/wxpdfdoc/samples/form.pdf" target="_blank">PDF forms example</a></li>
<li><a href="../../docs/wxpdfdoc/samples/xmlwrite.pdf" target="_blank">Text styling using simple markup language</a></li>
<li><a href="../../docs/wxpdfdoc/samples/transparency.pdf" target="_blank">Alpha transparency and image masks</a></li>
<li><a href="../../docs/wxpdfdoc/samples/templates1.pdf" target="_blank">Internal templates</a></li>
<li><a href="../../docs/wxpdfdoc/samples/templates2.pdf" target="_blank">External templates</a></li>
<li><a href="../../docs/wxpdfdoc/samples/kerning.pdf" target="_blank">Kerning</a></li>
<li><a href="../../docs/wxpdfdoc/samples/twoencodings.pdf" target="_blank">Using a font with 2 different encodings</a></li>
<li><a href="../../docs/wxpdfdoc/samples/fontlist.pdf" target="_blank">List of usable system fonts</a></li>
<li><b>Layers</b> (Optional Content Groups)<br>
<a href="../../docs/wxpdfdoc/samples/layersordered.pdf" target="_blank">Ordered</a>, 
<a href="../../docs/wxpdfdoc/samples/layersgrouped.pdf" target="_blank">Grouped</a>, 
<a href="../../docs/wxpdfdoc/samples/layersnested.pdf" target="_blank">Nested</a>, 
<a href="../../docs/wxpdfdoc/samples/layersautomatic.pdf" target="_blank">Automatic layers</a>, 
<a href="../../docs/wxpdfdoc/samples/layersradiogroup.pdf" target="_blank">Radio group</a> </li>
<li><a href="../../docs/wxpdfdoc/samples/glyphwriting.pdf" target="_blank">Direct glyph writing</a></li>
<li><b>Indic script support</b><br>
<a href="../../docs/wxpdfdoc/samples/fullmoon.pdf" target="_blank">Full Moon in 9 Indic Scripts</a>, 
<a href="../../docs/wxpdfdoc/samples/indicfonts.pdf" target="_blank">Indic Fonts and Languages</a></li>
<li><a href="../../docs/wxpdfdoc/samples/attachment.pdf" target="_blank">File attachments</a> <b>(new)</b></li>
</ul>

	<br/><?php write_h1("Known bugs"); ?>
<p>Information about known bugs is now placed on a <a href="../../docs/wxpdfdoc/samples/knownbugs.html" target="_blank">separate page</a>.</p>
<p>To submit a bug report please look at <a href="../../support.php">wxCode support page</a>.</p>

    
	<br/><?php write_h1("Future enhancements"); ?>
<p>Enhancements planned for the next versions:
<ul>
<li><p>Version 0.9.5: wxWidgets printing support via wxPdfGraphicsContext based on wxPdfDocument.</p></li>
</ul>
</p>
    
<p>To submit a feature request please look at <a href="../../support.php">wxCode support page</a>.</p>

	<br/><?php write_h1("Supporting further development"); ?>
<table><tr><td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="image" src="https://www.paypal.com/de_DE/i/btn/x-click-but04.gif" border="0" name="submit" alt="Make a donation through PayPal - fast, free of charge and secure!">
<img alt="" border="0" src="https://www.paypal.com/de_DE/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
</form>
</td><td valign="top"><p>If you find <b>wxPdfDocument</b> useful and would like to support the further development of this <b>wxWidgets</b> component, you may make a <b>donation</b> by clicking on the button on the left.</p></td></tr></table>


	<br/><?php require("footer.inc.php"); ?>
</html>
