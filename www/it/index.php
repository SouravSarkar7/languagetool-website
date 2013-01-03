<?php
$page = "homepage";
$title = "LanguageTool";
$title2 = "Correttore di Stile e Grammatica";
$lastmod = "2012-12-30 17:21:00 CET";
$enable_fancybox = 1;
include("../../include/header.php");
?>

<a title="LanguageTool installato come add-on in LibreOffice 3.3" class="fancyboxImage"
   href="screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot di LanguageTool"/></a>

<p class="firstpara"><strong>LanguageTool � uno strumento Open Source che permette la correzione di testi in scritti in <?=show_link("pi� di 20 lingue", "languages/", 0) ?>. Tra i linguaggi supportati abbiamo: Italiano, Inglese, Francese e Tedesco. Permette di identificare errori che un semplice correttore ortografico non pu� riconoscere. Suggerisce, ad esempio, l'uso corretto delle <em>eufoniche</em> o il corretto articolo per la parola <em>pneumatico</em>. Effettua numerosi controlli di tipo grammaticale grazie al contributo della community degli utenti stessi.</p>

<p>LanguageTool, infatti, � uno sturmento molto potente che trova errori ricercando, all'interno del testo, delle combinazioni definite in regole di tipo XML ovvero codificate in Java.</p>


<h2 style="margin-top: 40px">Try it online</h2>

<p>Potete utilizzare LanguageTool <?=show_link("in LibreOffice/OpenOffice.org, come applicazione a s� stante, oppure inclusa in altre applicazioni", "usage/", 0)?>
  oppure provarlo direttamente dal sito scrivendo nel riquadro sottostante:</p>

<?php
$checkSubmitButtonValue = "Check Text";
$showLanguageBox = 0;
$checkDefaultLang = "auto";
$checkDefaultText = "Incollate qu� il vostro testo... oppure provate a scrivere direttamente per provare quali problemi errori possono essere identificati con LanguageTool.";
include("../include/checkform.php");
?>

<p><strong>Provate LanguageTool senza installazione utilizzando Java WebStart.</strong>
Richiede <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> o versioni successive:<br />
<strong><?=show_link("Start LanguageTool (&gt;30&nbsp;MB)", "webstart/web/LanguageTool.jnlp", 0) ?></strong></p>

<h2>Download</h2>

<p>LanguageTool richiede <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> o versioni successive - al momento, raccomandiamo di utilizzare Java 6 
in quanto alcuni utenti hanno riportato problemi di performance utilizzando LanguageTool con Java 7.
<strong>State riscontrando dei problemi? Controllate la <?=show_link("lista dei problemi noti", "issues", 0)?>.</strong></p>

<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadPath = "download";
           include("../include/download.php");
           ?>
        </td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
           <?php
           $downloadPath = "download";
           include("../include/downloadStandAlone.php");
           ?>
        </td>
      </tr>
      <tr>
        <td valign="top">

          <ul style="padding-left: 20px">
            <li><strong>Raccomandiamo di utilizzare le pi� recenti versioni di
              <a href="http://www.libreoffice.org/download">LibreOffice</a></strong> o di 
              <strong><a href="http://www.openoffice.org/download/">Apache OpenOffice</a></strong> in quanto le versioni pi� vecchie 
              hanno un problema che causa uno stallo in partenza</li>
            <li>Utilizzate poi il menu <em>Tools -&gt; Extension Manager -&gt; Add...</em> per installare il fole che scaricate</li>
            <li><strong>Restart OpenOffice.org/LibreOffice</strong> after installation of the extension</li>
            <li>Se volete utilizzare LanguageTool in LibreOffice 3.5.x e volete controllare testi in Inglese:
              Utilizzate <em>Options -> Language Settings -> Writing Aids -> Edit...</em> per disabilitare LightProof e abilitare LanguageTool</li>
          </ul>

        </td>

        <td></td>

        <td valign="top">

          <ul style="padding-left: 20px">
            <li>Scompattate lo zip scaricato file e fate doppio click sul file LanguageToolGUI.jar.
              Per ulteriori informazioni fate riferimento a <?=show_link("altre modalit� di utilizzo di LanguageTool", "usage/", 0)?>.</li>
          </ul>

        </td>

      </tr>
    </table>
</div>

<p>Versioni non testate e aggiornate giornalmente del tool sono disponibili al link
<?=show_link("the snapshot directory", "download/snapshots/?C=M;O=D", 0) ?>
 (<?=show_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>).
 Rilasci precedenti sono disponibili al link <?=show_link("download directory", "download/", 0) ?>.</p>


<h3>License &amp; Source Code</h3>

<p>LanguageTool � disponibile sotto licenza <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
Il codice sorgente � disponibile <?=show_link("in SVN su Sourceforge", "http://sourceforge.net/scm/?type=svn&group_id=110216", 0) ?>.
I contenuti di questa homepage sono disponibili sotto licenza <?=show_link("CC BY-SA 3.0", "http://creativecommons.org/licenses/by-sa/3.0/", 0) ?>.</p>

<?php
include("../include/footer.php");
?>
