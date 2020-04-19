<?php
/**
 * Plugin Activator.
 *
 * Runs the plugin activation routine.
 *
 * @package   MembersIntegrationMetaBox
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2019, Justin Tadlock
 * @link      https://themehybrid.com/plugins/members-metabox-integration
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 */

namespace Members\Integration\MetaBox;

/**
 * Activator class.
 *
 * @since  1.0.0
 * @access public
 */
class Activator {

	/**
	 * Runs necessary code when first activating the plugin.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public static function activate() {

		// Get the administrator role.
		$role = get_role( 'administrator' );

		// If the administrator role exists, add required capabilities
		// for the plugin.
		if ( ! empty( $role ) ) {

			$role->add_cap( 'create_metabox_field_groups' );
			$role->add_cap( 'edit_metabox_field_groups'   );
			$role->add_cap( 'delete_metabox_field_groups' );
		}
	}
}
