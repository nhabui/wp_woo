<?php

class Custom_Mega_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
    if ($depth === 0) {
        // Add a new column for each submenu
        $output .= "\n<div class=\"mega-menu-column\">\n";

        // Add a new <ul> for the submenu
        $output .= "<ul class=\"category-mega-menu\">\n";
    } else {
        // Add a new <ul> for nested submenus
        $output .= "\n<ul class=\"submenu\">\n";
    }
}

function end_lvl(&$output, $depth = 0, $args = null) {
    // Indentation based on depth
    $indent = str_repeat("\t", $depth);

    if ($depth === 0) {
        // Close the submenu </ul>
        $output .= "$indent</ul>\n";

        // Close the mega menu column </div>
        $output .= "$indent</div>\n";
    } else {
        // Close the nested submenu </ul>
        $output .= "$indent</ul>\n";
    }
}

    
    function start_el(&$output, $item, $depth = 0, $args = null, $current_object_id = 0) {
        // Your custom code for the start of each menu item here

        // Indentation based on depth
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Add classes to the list item
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Output the menu item start
        $output .= $indent . '<li class="' . implode(' ', $classes) . '">';

        // Output the link
        $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';

        // Output a child list if the item has children
        if ($args->walker->has_children) {
            $output .= "\n" . $indent . '<ul class="submenu">' . "\n";
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        // Your custom code for the end of each menu item here

        // Check if the menu item has children
        $has_children = in_array('menu-item-has-children', $item->classes);

        // Output the submenu end if the item has children
        if ($has_children) {
            $output .= "</ul>\n";
        }

        // Output the menu item end
        $output .= "</li>\n";
    }
}

?>