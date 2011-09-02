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
 * @package    syncCto
 * @license    GNU/LGPL
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_syncCto_backup_file'] = array(
    // Config
    'config' => array
        (
        'dataContainer' => 'Memory',
        'closed' => true,
        'disableSubmit' => false,
        'onload_callback' => array(
            array('tl_syncCto_backup_file', 'onload_callback'),
        ),
        'onsubmit_callback' => array(
            array('tl_syncCto_backup_file', 'onsubmit_callback'),
        )
    ),
    // Palettes
    'palettes' => array
        (
        'default' => '{backup_legend},backupType,backupName;{filelist_legend},filelist;',
    ),
    // Fields
    'fields' => array(
        'backupType' => array
            (
            'label' => &$GLOBALS['TL_LANG']['tl_syncCto_backup_file']['backupType'],
            'inputType' => 'select',
			'exclude' => true,
            'reference' => &$GLOBALS['TL_LANG']['SYC'],
            'options_callback' => array('SyncCtoCallback', 'getBackupType'),
        ),
        'filelist' => array
            (
            'label' => &$GLOBALS['TL_LANG']['tl_syncCto_backup_file']['filelist'],
            'exclude' => true,
            'inputType' => 'fileTree',
            'eval' => array('fieldType'=>'checkbox', 'files'=>true, 'filesOnly'=>false, 'tl_class'=>'clr'),
        ),
        'backupName' => array
            (
            'label' => &$GLOBALS['TL_LANG']['tl_syncCto_backup_file']['backupName'],
            'inputType' => 'text',
			'exclude' => true,
            'eval' => array('maxlength' => 32),
        ),
    )
);

class tl_syncCto_backup_file extends Backend
{

    public function onload_callback(DataContainer $dc)
    {
        $dc->removeButton('save');
        $dc->removeButton('saveNclose');

        $arrData = array
            (
            'id' => 'start_backup',
            'formkey' => 'start_backup',
            'class' => '',
            'accesskey' => 'g',
            'value' => specialchars($GLOBALS['TL_LANG']['MSC']['start_backup']),
            'button_callback' => array('tl_syncCto_backup_file', 'onsubmit_callback')
        );

        $dc->addButton('start_backup', $arrData);
    }
	
	public function onsubmit_callback(DataContainer $dc)
    {
        $this->redirect($this->Environment->base . "contao/main.php?do=syncCto_backups&amp;table=tl_syncCto_backup_file&amp;act=start");
    }

}

?>