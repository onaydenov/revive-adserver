<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

// Note: New translations not found in original lang files but found in CSV
$GLOBALS['strDeliveryLimitations'] = "Omejitve dostave";
$GLOBALS['strChooseSection'] = "Izberi oddelek";
$GLOBALS['strRecalculatePriority'] = "Preračunaj prioriteto";
$GLOBALS['strCheckBannerCache'] = "Preveri pomnilnik pasice";
$GLOBALS['strBannerCacheErrorsFound'] = "Preverba podatkovne baze pomnilnika pasic je našla napake. Te pasice ne bodo delovale, dokler jih ročno ne popravite.";
$GLOBALS['strBannerCacheOK'] = "Nobena napaka ni bila odkrita. Vaša pomnilniška baza pasic deluje pravilno.";
$GLOBALS['strBannerCacheDifferencesFound'] = "Vaša pomnilniška baza pasice ni posodobljena. Za normalno delovanje je potrebna posodobitev.";
$GLOBALS['strBannerCacheRebuildButton'] = "Ponovno sestavi";
$GLOBALS['strRebuildDeliveryCache'] = "Ponovno sestavi pomnilniško bazo pasice";
$GLOBALS['strBannerCacheExplaination'] = "Pomnilniška baza pasice je namenjena pohitritvi dostave pasic.<br />
Pomnilnik mora biti posodobljen ko:
<ul>
<li>Posodobite vašo različico OpenX-a</li>
<li>Premaknete vašo inštalacijo OpenX-a na drugoten strežnik</li>
</ul>";
$GLOBALS['strCache'] = "Dostavni pomnilnik";
$GLOBALS['strAge'] = "Starost";
$GLOBALS['strDeliveryCacheSharedMem'] = "	Skupen pomnilnik je trenutno v uporabi za hrambo dostavnega pomnilnika.";
$GLOBALS['strDeliveryCacheDatabase'] = "	Podatkovna baza je trenutno v uporabi za hrambo dostavnega pomnilnika.";
$GLOBALS['strDeliveryCacheFiles'] = "	Dostavni pomnilnik je trenutno v hrambi v večih datotekah na vašem strežniku.";
$GLOBALS['strStorage'] = "Shramba";
$GLOBALS['strMoveToDirectory'] = "Premakni slike shranjene v podatkovni bazi v mapo";
$GLOBALS['strStorageExplaination'] = "	Slike, ki jih uporablja lokalna pasica, so shranjene v podatkovni bazi ali mapi. Če boste slike shranili
	v mapo, boste pospešili nalagalni čas podatkovne baze.";
$GLOBALS['strSearchingUpdates'] = "Preverjam za posodobitve. Prosimo, počakajte...";
$GLOBALS['strAvailableUpdates'] = "Razpoložljive posodobitve";
$GLOBALS['strDownloadZip'] = "Shrani (.zip)";
$GLOBALS['strDownloadGZip'] = "Shrani (.tar.gz)";
$GLOBALS['strUpdateAlert'] = "Na voljo je nova različica {$PRODUCT_NAME}.

Želite več informacij
o tej posodobitvi?";
$GLOBALS['strUpdateAlertSecurity'] = "Na voljo je nova različica {$PRODUCT_NAME}.

Priporočamo vam posodobitev,
saj ta različica vsebuje
razne varnostne popravke.";
$GLOBALS['strUpdateServerDown'] = "Zaradi neznane napake je bilo nemogoče pridobiti <br>informacije o možnih posodobitvah. Prosimo, poizkusite znova kasneje.";
$GLOBALS['strNoNewVersionAvailable'] = "	Vaša različica {$PRODUCT_NAME} je najnovejša. Trenutno ni na voljo nobenih posodobitev.";
$GLOBALS['strNewVersionAvailable'] = "	<b>Na voljo je nova različicica {$PRODUCT_NAME}.</b><br /> Priporočamo vam posodobitev,
	saj nova verzija odpravlja težave in prinaša novo funkcionalnost. Za več informacij
	o tej posodobitvi si prosimo preberite priloženo dokumentacijo.";
$GLOBALS['strSecurityUpdate'] = "	<b>Priporočamo vam namestitev te posodobitve, saj vsebuje veliko število
	varnostnih popravkov.</b> Različica {$PRODUCT_NAME}, ki jo trenutno uporabljate, je
	ranljiva za razne napade. Za več informacij
	o tej posodobitvi si prosimo preberite priloženo dokumentacijo.";
$GLOBALS['strNotAbleToCheck'] = "	<b>Ker XML razširitev ni na voljo na vašem strežniku, {$PRODUCT_NAME} ne
more preveriti za posodobitve.</b>";
$GLOBALS['strForUpdatesLookOnWebsite'] = "	Če želite vedeti, ali obstaja novejša različica, vas prosimo, da obiščete našo spletno stran.";
$GLOBALS['strClickToVisitWebsite'] = "Kliknite tukaj za obisk naše spletne strani";
$GLOBALS['strCurrentlyUsing'] = "Trenutno uporabljate";
$GLOBALS['strRunningOn'] = "teče na";
$GLOBALS['strAndPlain'] = "in";
$GLOBALS['strStatisticsExplaination'] = "	Omogočeno imate <i>Zgoščeno statistiko</i>, vendar so starejši statistični podatki še vedno v preobširnem formatu.
	Si jih želite spremeniti v zgoščen format?";
$GLOBALS['strBannerCacheFixed'] = "Uspešno končano. Vaš pomnilnik podatkovne baze je posodobljen.";
$GLOBALS['strEncoding'] = "Šifriranje";
$GLOBALS['strEncodingExplaination'] = "{$PRODUCT_NAME} zdaj shranjuje podatke v bazo v UTF-8 formatu.<br />Vaši podatki so bili samodejno pretvorjeni v ta format, kjer je to bilo mogoče.<br />Če po posodobitvi najdete pokvarjene znake in poznate, katero šifriranje ste izbrali, lahko uporabite to orodje za pretvorbo podatkov v format UTF-8";
$GLOBALS['strEncodingConvertFrom'] = "Pretvori iz tega šifriranja:";
$GLOBALS['strEncodingConvert'] = "Pretvori";
$GLOBALS['strEncodingConvertTest'] = "Preveri pretvorbo";
$GLOBALS['strConvertThese'] = "Naslednji podatki bodo spremenjeni, če boste nadaljevali";
$GLOBALS['strAppendCodes'] = "Pripni zbirnike";
$GLOBALS['strScheduledMaintenanceHasntRun'] = "<b>Načrtovano vzdrževanje ni bilo zagnano v zadnji uri. To lahko pomeni, da ga niste pravilno nastavili.</b>";
$GLOBALS['strAutoMantenaceEnabledAndHasntRun'] = "Samodejno vzdrževanje je omogočeno, vendar ni bilo aktivirano. Samodejno vzdrževanje je aktivirano samo ko {$PRODUCT_NAME} dostavlja pasice. Za optimalno delovanje, nastavite <a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>načrtovano vzdrževanje</a>.";
$GLOBALS['strAutoMantenaceDisabledAndHasntRun'] = "Samodejno vzdrževanje je trenutno onemogočeno, zato {$PRODUCT_NAME} pri dostavi pasic samodejnega vzdrževanja ne bo aktiviral. Za optimalno delovanje nastavite <a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>načrtovano vzdrževanje</a>. Če ne boste nastavili <a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>načrtovanega vzdrževanja</a>, potem <i>morate</i> <a href='account-settings-maintenance.php'> omogočiti samodejno vzdrževanje</a> za zagotovitev delovanja {$PRODUCT_NAME}";
$GLOBALS['strAutoMantenaceEnabledAndRunning'] = "Samodejno vzdrževanje je omogočeno in bo aktivirano, ko {$PRODUCT_NAME} dostavlja pasice. Za optimalno delovanje, nastavite<a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>načrtovano vzdrževanje</a>.";
$GLOBALS['strAutoMantenaceDisabledAndRunning'] = "Samodejno vzdrževanje je bilo pred kratkim onemogočeno. Za zagotovite pravilnega {$PRODUCT_NAME} delovanja, nastavite <a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>načrtovano vzdrževanja</a> ali <a href='account-settings-maintenance.php'>znova omogočite samodejno vzdrževanje</a>.<br><br>Za optimalno delovanje, nastavite <a href='{$PRODUCT_DOCSURL}/maintenance' target='_blank'>načrtovano vzdrževanje</a>.";
$GLOBALS['strScheduledMantenaceRunning'] = "<b>Načrtovano vzdrževanje deluje pravilno.</b>";
$GLOBALS['strAutomaticMaintenanceHasRun'] = "<b>Samodejno vzdrževanje deluje pravilno.</b>";
$GLOBALS['strAutoMantenaceEnabled'] = "Samodejno vzdrževanje je še vedno omogočeno. Za optimalno delovanje <a href='account-settings-maintenance.php'>onemogočite to funcijo</a>.";
$GLOBALS['strAutoMaintenanceDisabled'] = "Samodejno vzdrževanje je onemogočeno.";
$GLOBALS['strAutoMaintenanceEnabled'] = "Samodejno vzdrževanje je omogočeno. Za optimalno delovanje je priporočljivo to funkcijo <a href='settings-admin.php'>onemogočiti</a>.";
$GLOBALS['strCheckACLs'] = "Preveri ACL-je";
$GLOBALS['strScheduledMaintenance'] = "Načrtovano vzdrževanje deluje pravilno.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered'] = "Samodejno vzdrževanje je omogočeno, vendar ni bilo aktivirano. Aktivirano je samo takrat, ko {$PRODUCT_NAME} dostavlja pasice.";
$GLOBALS['strAutoMaintenanceBestPerformance'] = "Za optimalno delovanje nastavite <a href='{$PRODUCT_DOCSURL}/maintenance.html' target='_blank'>načrtovano vzdrževanje</a>";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger'] = "Samodejno vzdrževanje je omogočeno in bo aktiviralo vzdrževalni postopek vsako uro.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Tudi samodejno vzdrževanje je omogočeno, vendar je v kratkem bil zagnan vzdrževalni postopek. Za zagotovitev pravilnega {$PRODUCT_NAME} delovanja, nastavite <a href='http://{$PRODUCT_DOCSURL}/maintenance.html' target='_blank'>načrtovano vzdrževanje</a> ali <a href='settings-admin.php'>omogočite samodejno vzdrževanje</a>.";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Samodejno vzdrževanje je onemogočeno. Ko {$PRODUCT_NAME} dostavlja pasice, vzdrževanje ni aktivirano. Če ne želite delovanja <a href='http://{$PRODUCT_DOCSURL}/maintenance.html' target='_blank'>načrtovanega vzdrževanja</a>, morate <a href='settings-admin.php'>omogočiti samodejno vzdrževanje</a> za zagotovitev pravilnega delovanja {$PRODUCT_NAME}.";
$GLOBALS['strAllBannerChannelCompiled'] = "Vse zbrane omejitvene vrednosti pasice/kanala so bile sestavljene";
$GLOBALS['strBannerChannelResult'] = "Tukaj so rezultati veljavne zbrane omejitve pasice/kanala";
$GLOBALS['strChannelCompiledLimitationsValid'] = "Vse zbrane omejitve kanala so veljavne";
$GLOBALS['strBannerCompiledLimitationsValid'] = "Vse zbrane omejitve pasice so veljavne";
$GLOBALS['strErrorsFound'] = "Najdene napake";
$GLOBALS['strRepairCompiledLimitations'] = "Zgoraj je bilo najdenih nekaj nedoslednosti. Te lahko odpravite s klikom na spodnjim gumbom, ki bo znova sestavil zbrane omejitve za vsako pasico/kanal v sistemu<br />";
$GLOBALS['strRecompile'] = "Znova sestavi";
$GLOBALS['strAppendCodesDesc'] = "Po nekaterimi pogoji dostavno orodje ne deluje pravilno z shranjenim zbirnikom za sledilnike. Uporabite naslednjo povezavo za potrditev zbrinika v podatkovni bazi";
$GLOBALS['strCheckAppendCodes'] = "Preveri pripojitveni zbirnik";
$GLOBALS['strAppendCodesRecompiled'] = "Vse zbrane pripojitvene vrednosti zbirnika so bile znova sestavljene";
$GLOBALS['strAppendCodesResult'] = "Tukaj so rezultati veljavnosti zbranih pripojitvenih zbirnikov";
$GLOBALS['strAppendCodesValid'] = "Vsi zbrani pripojitveni zbirniki sledilnika so veljavni";
$GLOBALS['strRepairAppenedCodes'] = "Zgoraj je bilo najdenih nekaj nedoslednosti. Te lahko odpravite s klikom na spodnji gumb.";
$GLOBALS['strScheduledMaintenanceNotRun'] = "Načrtovano vzdrževanje ni bilo zagnano v zadnji uri. To verjetno pomeni, da ni nastavljeno pravilno.";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "V nekaterih okoliščinah dostavno orodje pride v navzkrižje z shranjenimi ACL-ji za pasice in kanale. Uporabite naslednjo povezavo za potrditev ACL-jev v podatkovni bazi";
$GLOBALS['strPlugins'] = "Vtičniki";
$GLOBALS['strPluginsPrecis'] = "Diagnosticiraj in popravi težave z OpenX vtičniki";
$GLOBALS['strPluginsOk'] = "Nobenih težav ni bilo najdenih";
$GLOBALS['strMenus'] = "Meniji";
$GLOBALS['strMenusPrecis'] = "Ponovno sestavi menijski pomnilnik";
$GLOBALS['strMenusCachedOk'] = "Menijskih pomnilnik je bil ponovno sestavljen";
$GLOBALS['strMenusCachedErr'] = "Prišlo je do napak pri sestavljanju menijskega pomnilnika";
$GLOBALS['strServerCommunicationError'] = "<b>Komunikacija z strežnikom za posodabljanje je bila prekinjena, zato  {$PRODUCT_NAME} ne more preveriti ali je na voljo novejša različica. Prosimo, poskusite znova kasneje.</b>";
$GLOBALS['strCheckForUpdatesDisabled'] = "<b>Preveri za posodobitve je onemogočne.Â Prosimo omogočiteÂ preko <a href='account-settings-update.php'>posodobitvenega</a> zaslona.</b>";
?>