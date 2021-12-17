<?php

/**
 * -------------------------------------------------------------------------
 * GLPI - Gestionnaire Libre de Parc Informatique
 * Copyright (C) 2003-2021 by the Teclib Development Team.
 *
 * http://teclib.com/   http://glpi-project.org
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of Fields.
 *
 * Fields is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Fields is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Fields. If not, see <http://www.gnu.org/licenses/>.
 * --------------------------------------------------------------------------
 */

/** @file
* @brief
*/

include ('../../../inc/includes.php');
header("Content-Type: text/html; charset=UTF-8");
Html::header_nocache();

Session::checkLoginUser();

if (!isset($_POST['itemtype']) || !isset($_POST['items_id']) || !isset($_POST['id'])) {
   exit();
}

$translation = new PluginFieldsLabelTranslation();
$canedit = $translation->can($translation->getID(), CREATE);
if ($canedit) {
    $translation->showFormForItem($_POST['itemtype'], $_POST['items_id'], $_POST['id']);
} else {
   echo __('Access denied');
}

Html::ajaxFooter();
