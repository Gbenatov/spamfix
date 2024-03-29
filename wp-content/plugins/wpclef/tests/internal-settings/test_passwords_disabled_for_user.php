<?php

/**
 * Tests to test that that testing framework is testing tests. Meta, huh?
 *
 * @package wordpress-plugins-tests
 */
require_once BASE_TEST_DIR . '/includes/class.clef-setup.php';
require_once BASE_TEST_DIR . '/includes/class.clef-utils.php';
require_once BASE_TEST_DIR . '/includes/class.clef-internal-settings.php';

class WP_Test_InternalSettings_Passwords_Disabled_For_User extends WP_UnitTestCase {

    public function setUp() {
        parent::setUp();
        $this->settings = ClefInternalSettings::start();
        $this->settings->set('clef_settings_app_id', 'test_app_id');
        $this->settings->set('clef_settings_app_secret', 'test_app_secret');
        $this->user = get_user_by('id', $this->factory->user->create());
    }

    function test_no_passwords_disabled() {
        $this->assertFalse($this->settings->passwords_are_disabled_for_user($this->user));
    }

    function test_all_passwords_disabled() {
        $this->settings->set('clef_password_settings_force', true);

        $this->assertTrue($this->settings->passwords_are_disabled_for_user($this->user));
    }

    function test_passwords_disabled_for_clef_users() {
        $this->settings->set('clef_password_settings_disable_passwords', true);

        $this->assertFalse($this->settings->passwords_are_disabled_for_user($this->user));

        update_user_meta($this->user->ID, 'clef_id', '1234567890');

        $this->assertTrue($this->settings->passwords_are_disabled_for_user($this->user));
    }

    function test_passwords_disabled_for_role() {
        $this->settings->set('clef_password_settings_disable_certain_passwords', '');

        $this->assertFalse($this->settings->passwords_are_disabled_for_user($this->user));

        $this->user->add_role('subscriber');


        $this->settings->set('clef_password_settings_disable_certain_passwords', 'Contributor');
        $this->assertFalse($this->settings->passwords_are_disabled_for_user($this->user));

        $this->user->add_role('contributor');
        $this->assertTrue($this->settings->passwords_are_disabled_for_user($this->user));


        $this->settings->set('clef_password_settings_disable_certain_passwords', 'Author');
        $this->assertFalse($this->settings->passwords_are_disabled_for_user($this->user));

        $this->user->add_role('author');
        $this->assertTrue($this->settings->passwords_are_disabled_for_user($this->user));


        $this->settings->set('clef_password_settings_disable_certain_passwords', 'Editor');
        $this->assertFalse($this->settings->passwords_are_disabled_for_user($this->user));

        $this->user->add_role('editor');
        $this->assertTrue($this->settings->passwords_are_disabled_for_user($this->user));


        $this->settings->set('clef_password_settings_disable_certain_passwords', 'Administrator');
        $this->assertFalse($this->settings->passwords_are_disabled_for_user($this->user));

        $this->user->add_role('administrator');
        $this->assertTrue($this->settings->passwords_are_disabled_for_user($this->user));


        $this->settings->set('clef_password_settings_disable_certain_passwords', 'Super Administrator');
        $this->assertTrue($this->settings->passwords_are_disabled_for_user($this->user));
    }

}