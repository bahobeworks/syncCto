<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @copyright  MEN AT WORK 2011
 * @package    Language
 * @license    GNU/LGPL 
 * @filesource
 */


/**
 * Back end modules
 */
$GLOBALS['TL_LANG']['MSC']['edit'] = 'Bearbeiten';
$GLOBALS['TL_LANG']['MSC']['copy'] = 'Duplizieren';
$GLOBALS['TL_LANG']['MSC']['syncTo'] = 'Client synchronisieren';
$GLOBALS['TL_LANG']['MSC']['syncFrom'] = 'Server synchronisieren';

$GLOBALS['TL_LANG']['MSC']['restore_backup'] = 'Backup einspielen';
$GLOBALS['TL_LANG']['MSC']['start_backup'] = 'Backup starten';

$GLOBALS['TL_LANG']['SYC']['files'] = 'Datei-Synchronisation';
$GLOBALS['TL_LANG']['SYC']['backup'] = 'Backup-Kategorie';
$GLOBALS['TL_LANG']['SYC']['option_small'] = array('Persönliche Daten', 'Nur ausgewählte Dateien und Ordner innerhalb tl_files werden berücksichtigt.');
$GLOBALS['TL_LANG']['SYC']['option_full'] = array('Contao-Installation', 'Die komplette Contao-Installation, inklusive tl_files wird berücksichtigt.');

/**
 * Errors
 */
$GLOBALS['TL_LANG']['ERR']['cant_open'] = "Datei %s kann nicht geöffnet werden.";
$GLOBALS['TL_LANG']['ERR']['file_not_exists'] = "Datei %s konnte nicht erstellt werden.";
$GLOBALS['TL_LANG']['ERR']['zero_tables'] = "Es wurden keine SQL-Tabellen für ein Backup gefunden.";
$GLOBALS['TL_LANG']['ERR']['table_dmg'] = "Die Datei für die SQL-Tabellen ist beschädigt.";
$GLOBALS['TL_LANG']['ERR']['insert_dmg'] = "Die Datei für den SQL-Inhalt ist beschädigt.";
$GLOBALS['TL_LANG']['ERR']['missing_table_file'] = "Die Datei für die SQL-Tabellen fehlt.";
$GLOBALS['TL_LANG']['ERR']['missing_insert_file'] = "Die Datei für die SQL-Inhalte fehlt.";
$GLOBALS['TL_LANG']['ERR']['reading_table_file'] = "Die SQL-Tabellen konnten nicht gelesen werden.";
$GLOBALS['TL_LANG']['ERR']['reading_insert_file'] = "Die SQL-Inhalte konnten nicht gelesen werden.";
$GLOBALS['TL_LANG']['ERR']['unknown_error'] = "Unbekannter Fehler.";
$GLOBALS['TL_LANG']['ERR']['unknown_function'] = "Unbekannte Funktion.";
$GLOBALS['TL_LANG']['ERR']['unknown_method'] = "Unbekannte Methode.";
$GLOBALS['TL_LANG']['ERR']['unknown_table'] = "Unbekannte Tabelle.";
$GLOBALS['TL_LANG']['ERR']['no_backup_tables'] = "Keine Tabellen für das Backup ausgewählt.";
$GLOBALS['TL_LANG']['ERR']['no_backup_file'] = "Keine Backupdatei ausgewählt.";
$GLOBALS['TL_LANG']['ERR']['session_file_error'] = "Die Dateiliste konnte nicht aus der Session wiederhergestellt werden.";
$GLOBALS['TL_LANG']['ERR']['restore_session_tables'] = "Die Tabellen konnten nicht aus der Session wiederhergestellt werden.";
$GLOBALS['TL_LANG']['ERR']['restore_session_zip_id'] = "Die ZIP-ID konnte nicht aus der Session wiederhergestellt werden.";
$GLOBALS['TL_LANG']['ERR']['restore_session_zip_name'] = "Der ZIP-Name konnte nicht aus der Session wiederhergestellt werden.";
$GLOBALS['TL_LANG']['ERR']['unknown_backup_step'] = "Unbekannter Schritt im Backup-Prozess.";
$GLOBALS['TL_LANG']['ERR']['unknown_backup_error'] = "Unbekannter Fehler im Backup-Prozess.";
$GLOBALS['TL_LANG']['ERR']['unknown_restore_error'] = "Unbekannter Fehler im Wiederherstellungsprozess.";
$GLOBALS['TL_LANG']['ERR']['maximum_filesize'] = "Zu große Datei(en):";
$GLOBALS['TL_LANG']['ERR']['uploaded_files_list'] = "Übertragene Datei(en):";
$GLOBALS['TL_LANG']['ERR']['deleted_files_list'] = "Gelöschte Datei(en):";
/* OK */$GLOBALS['TL_LANG']['ERR']['rpc_maximum_calls'] = "Maximale Versuche für Übertragung erreicht. Versuchen Sie es späer nocheinmal.";
/* OK */$GLOBALS['TL_LANG']['ERR']['rpc_maximum_logins'] = "Maximale Versuche für Anmeldung erreicht.";
$GLOBALS['TL_LANG']['ERR']['checksum_error'] = "Fehler in den Prüfsummen.";
$GLOBALS['TL_LANG']['ERR']['upload_move_error'] = "Fehler beim Speichern.";
$GLOBALS['TL_LANG']['ERR']['unknown_response'] = "Unbekannte Antwort.";
/* DE */$GLOBALS['TL_LANG']['ERR']['rpc_call_missing'] = "Fehlende RPC ID.";
/* OK */$GLOBALS['TL_LANG']['ERR']['rpc_data_missing'] = "Fehlende Daten für RPC.";
/* OK */$GLOBALS['TL_LANG']['ERR']['rpc_unknown'] = "Unbekannte RPC Anfrage.";
/* NE */$GLOBALS['TL_LANG']['ERR']['rpc_unknown_exception'] = "Unbekannter Fehler.";
/* NE */$GLOBALS['TL_LANG']['ERR']['rpc_missing_starttag'] = "Nicht verwertbare Antwort vom Client erhalten.";
/* NE */$GLOBALS['TL_LANG']['ERR']['rpc_missing_endtag'] = "Nicht verwertbare Antwort vom Client erhalten.";
/* NE */$GLOBALS['TL_LANG']['ERR']['rpc_answer_no_array'] = "Atwort vom Client ist kein Array.";
/* NE */$GLOBALS['TL_LANG']['ERR']['codifyengine_unknown'] = "Konnte die angegebene Verschlüsselungs-Engine nicht finden: %s";

?>