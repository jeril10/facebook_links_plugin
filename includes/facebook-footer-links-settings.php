<?php

function ffl_options_content() {
    
    global $ffl_options;

    ob_start(); ?>

<div class="wrap">
    <h2>Facebook Footer links</h2>
    <p>Setting for Facebook Footer links</p>
    
    <form method="post" action="options.php">
        <?php settings_fields('ffl_settings_group'); ?>
        
        <input name="ffl_settings[enable]" value="0" type="hidden"/>
        <input name="ffl_settings[show]" value="0" type="hidden"/>
        
        <table class="form-table">
            <tbody>
                <tr>
                    <th><label for="ffl_settings[enable]">Enable</label></th>
                    <td><input name="ffl_settings[enable]" type="checkbox" id="ffl_settings[enable]" value="1" <?php checked('1', $ffl_options['enable']); ?> /></td>
                </tr>
                <tr>
                    <th><label for="ffl_settings[facebook_url]">Facebook url</label></th>
                    <td><input placeholder="facebook.com/user" name="ffl_settings[facebook_url]" type="text" id="ffl_settings[facebook_url]" value="<?php echo $ffl_options['facebook_url']; ?>" class="regular-text"/>
                        <p><small>&nbsp;Enter your facebook url here</small></p>
                    </td>
                </tr>
                <tr>
                    <th><label for="ffl_settings[link_color]">Link Color</label></th>
                    <td><input placeholder="#b3fs33" name="ffl_settings[link_color]" type="text" id="ffl_settings[link_color]" value="<?php echo $ffl_options['link_color']; ?>" class="regular-text" />
                        <p><small>&nbsp;Pick the color of the link</small></p>
                    </td>
                </tr>
                <tr>
                    <th><label for="ffl_settings[show]">Show in Posts Feed</label></th>
                    <td><input name="ffl_settings[show]" type="checkbox" id="ffl_settings[show]" value="1" <?php checked('1', $ffl_options['show']); ?> /></td>
                </tr>
            </tbody>
        </table>
        
        <p class="submit">
            <input type="submit" class="button button-primary" id="submit" value="Save"/>
        </p>
    </form>
    
</div>

    <?php 
    echo ob_get_clean();
}

function ffl_options_menu_links() {
    add_options_page(
            'Facebook footer link options', 
            'Facebook footer links', 
            'manage_options', 
            'ffl-options',
            'ffl_options_content');
}

add_action('admin_menu', 'ffl_options_menu_links');


function ffl_register_settings() {
    register_setting('ffl_settings_group', 'ffl_settings');
}

add_action('admin_init', 'ffl_register_settings');
