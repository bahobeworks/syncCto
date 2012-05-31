<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  MEN AT WORK 2012
 * @package    Language
 * @license    GNU/LGPL 
 * @filesource
 */

/**
 * List
 */

$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_1']['description_1']   = 'Vorbereitung des Clients.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_1']['description_2']   = 'Temporäre Ordner leeren.';

$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_2']['description_1']   = 'Abgleich und Versand der Vergleichslisten.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_2']['description_2']   = 'Nach löschbaren Dateien suchen.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_2']['description_3']   = 'Aufbereitung der Vergleichsliste.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_2']['description_4']   = 'Es wurden %s neue, %s veränderte, %s gelöschte und %s nicht zustellbare Datei(en) gefunden.<br />Das ergibt eine Größe von %s neuen, %s veränderten und %s gelöschten Dateien.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_2']['description_5']   = 'Es wurden %s zu große Dateien gefunden.';

$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_3']['description_1']   = 'Dateien verarbeiten.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_3']['description_2']   = '%s von %s Datei(en) verarbeitet.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_3']['description_3']   = 'Große Dateien transferieren.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_3']['description_4']   = '%s von %s großen Datei(en) verarbeitet.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_3']['description_5']   = 'Große Dateien zusammenbauen.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_3']['description_6']   = '%s von %s großen Datei(en) wurden erfolgreich verarbeitet.';

$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_4']['description_1']   = 'Abgleich der Datenbanken.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_4']['description_2']   = 'SQL-Scripte erstellen.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_4']['description_3']   = 'SQL-Scripte transferieren.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_4']['description_4']   = 'SQL-Scripte wurden erfolgreich importiert.';

$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_5']['description_1']   = 'Dateien importieren.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_5']['description_2']   = 'Konfigurationsdateien importieren.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_5']['description_3']   = ' Datei(en) übersprungen.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_5']['description_4']   = ' Datei(en) gesendet.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_5']['description_5']   = ' Datei(en) wartend.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_5']['description_6']   = 'Übertragende Dateien:';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_5']['description_7']   = 'Gelöschte Dateien:';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['step_5']['description_8']   = 'Fehlerhafte Dateien:';

$GLOBALS['TL_LANG']['tl_syncCto_sync']['abort']                     = 'Abbruch der Synchronisation und Säuberung des Clients.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['complete_client']           = 'Die Synchronisation des %sClients%s wurde erfolgreich abgeschlossen.';
$GLOBALS['TL_LANG']['tl_syncCto_sync']['complete_server']           = 'Die Synchronisation des %sServers%s wurde erfolgreich abgeschlossen.';

?>
