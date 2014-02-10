<?php
/*
 * This file is part of the MediaWiki extension Popups.
 *
 * Popups is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * Popups is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Popups.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @file
 * @ingroup extensions
 */

class PopupsHooks {
	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin) {
		// Depends on PageImages & TextExtracts extensions
		if ( class_exists( 'ApiQueryExtracts' )
			&& class_exists( 'ApiQueryPageImages' )
		) {
			$out->addModules( array( 'ext.popups' ) );
		}
	}
}
