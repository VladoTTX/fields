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

include "../../../inc/includes.php";
$path = PLUGINFIELDS_FRONT_PATH . '/' . $_REQUEST['ddtype'] . '.php';
$realpath = str_replace( "\\", "/", realpath($path));
$frontpath = str_replace("\\", "/", realpath(PLUGINFIELDS_FRONT_PATH));
if (strpos($realpath, $frontpath) === 0) {
    include_once $path;
} else {
    throw new \RuntimeException('Attempt to load unsecure or missing ' . $path .'!');
}
