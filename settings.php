<?php

if(is_admin() == false){
    return;
}

function mytheme_add_settings(){
    add_submenu_page(
        'options-general.php',
        "Butik",
        "Butik",
        "edit_pages",
        "butik",
        "mytheme_add_settings_callback"
    );
}

function mytheme_add_settings_callback(){
    ?>
        <div class="wrap">
            <h2>Shop Settings</h2>
            <form action="options.php" method="post">
                <?php
                    settings_fields("butik");
                    do_settings_sections("butik");
                    submit_button();
                ?>
            </form>
        </div>
    <?php
}

add_action('admin_menu', 'mytheme_add_settings');

// Registrerar inställningar tillgängliga på sidan "Butik"
function mytheme_add_settings_init(){
    add_settings_section(
        "butik_general",
        "General",
        "mytheme_add_settings_section_general",
        "butik"
    );

    register_setting(
        "butik",
        "store_message"
    );

    add_settings_field(
        "store_message",
        "Store Message",
        "mytheme_section_setting",
        "butik",
        "butik_general",
        array(
            "option_name" => "store_message",
            "option_type" => "text"
        )
    );

    register_setting(
        "butik",
        "store_show_message"
    );

    add_settings_field(
        "store_show_message",
        "Show message",
        "mytheme_section_setting",
        "butik",
        "butik_general",
        array(
            "option_name" => "store_show_message",
            "option_type" => "checkbox"
        )
    );
}

add_action('admin_init', 'mytheme_add_settings_init');

// Ritar ut sektionen "general"s beskrivning
function mytheme_add_settings_section_general(){
    echo "<p>General settings for store''</p>";
}

//Ritar ut inställningsfält
function mytheme_section_setting($args){
    $option_name = $args["option_name"];
    $option_type = $args["option_type"];
    $option_value = get_option($args["option_name"]);
    echo '<input type="' . $option_type . '" id="' . $option_name . '" name="' . $option_name . '" value="'. $option_value .'"/>';
}