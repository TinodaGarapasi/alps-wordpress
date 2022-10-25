<?php
/*
  Title: Theme Settings
  Order: 100
  Setting: alps_theme_settings
*/

  $languages = apply_filters('wpml_active_languages', NULL);
  if (!empty($languages)) {
    foreach ($languages as $language) {
      $language_code = '_' . $language['code'];
      $language_name = ' ' . $language['translated_name'];
      $language_label = ' (' . $language['translated_name'] . ')';
      piklist('field', array(
        'type' => 'group',
        'label' => 'Logo' . $language_label,
        'fields' => array(
          array(
            'type' => 'file',
            'field' => 'logo' . $language_code,
            'label' => 'Logo' . $language_label,
            'description' => 'Upload the default ' . $language_name . 'logo',
            'columns' => 12,
            'options' => array(
              'modal_title' => 'Upload Image',
              'button' => 'Add Image'
            )
          )
        )
      ));
    }
  } else {
    piklist('field', array(
      'type' => 'group',
      'label' => 'Logo',
      'fields' => array(
        array(
          'type' => 'file',
          'field' => 'logo',
          'label' => 'Logo',
          'description' => 'Upload the default logo',
          'columns' => 12,
          'options' => array(
            'modal_title' => 'Upload Image',
            'button' => 'Add Image'
          )
        )
      )
    ));
  }
  piklist('field', array(
    'type' => 'group',
    'label' => 'Sabbath Column',
    'fields' => array(
      array(
        'type' => 'file',
        'field' => 'sabbath_icon',
        'label' => 'Sabbath Icon',
        'description' => 'Upload an icon for the sabbath column.',
        'columns' => 12,
        'options' => array(
          'modal_title' => 'Upload Image',
          'button' => 'Add Image'
        )
      ),
      array(
        'type' => 'file',
        'field' => 'sabbath_background',
        'label' => 'Sabbath Background Image',
        'description' => 'Upload an image for the background of the sabbath column.',
        'columns' => 12,
        'options' => array(
          'modal_title' => 'Upload Image',
          'button' => 'Add Image'
        )
      ),
      array(
        'type' => 'checkbox',
        'field' => 'sabbath_scroll',
        'label' => 'Hide sabbath icon till scroll',
        'columns' => 4,
        'choices' => array(
          'true' => 'Select to hide the sabbath icon till you scroll.'
        )
      ),

      array(
        'type' => 'checkbox',
        'field' => 'sabbath_hide',
        'label' => 'Hide the sabbath column',
        'columns' => 4,
        'choices' => array(
          'true' => 'Select to hide the sabbath column.'
        )
      ),
      array(
        'type' => 'radio',
        'field' => 'sabbath_hide_screens',
        'label' => 'Hide the sabbath column at certain screen widths',
        'columns' => 4,
        'value' => 'hide-sabbath--all',
        'conditions' => array(
          array(
            'reset' => false,
            'field' => 'sabbath_hide',
            'value' => 'true'
          )
        ),
        'choices' => array(
          'hide-sabbath--all' => 'Hide the sabbath column for all screen widths.',
          'hide-sabbath--until-small' => 'Hide the sabbath column at small screens.',
          'hide-sabbath--until-medium' => 'Hide the sabbath column at medium screens.',
          'hide-sabbath--until-large' => 'Hide the sabbath column at large screens.'
        )
      ),
    )
  ));
  piklist('field', array(
    'type' => 'group',
    'label' => 'Theme Colors',
    'fields' => array(
      array(
        'type' => 'select',
        'field' => 'theme_color',
        'label' => 'Theme Color',
        'value' => 'treefrog',
        'columns' => 4,
        'choices' => array(
          'nad-denim' => 'NAD - Denim', 'alps',
          'nad-nile' => 'NAD - Nile', 'alps',
          'nad-amethyst' => 'NAD - Amethyst', 'alps',
          'nad-spark' => 'NAD - Spark', 'alps',
          'nad-miracle' => 'NAD - Miracle', 'alps',
          'nad-branch' => 'NAD - Branch', 'alps',
          'nad-vine' => 'NAD - Vine', 'alps',
          'treefrog' => 'Treefrog',
          'ming' => 'Ming',
          'bluejay' => 'Bluejay',
          'iris' => 'Iris',
          'lily' => 'Lily',
          'scarlett' => 'Scarlett',
          'campfire' => 'Campfire',
          'winter' => 'Winter',
          'forest' => 'Forest',
          'cave' => 'Cave',
          'denim' => 'Denim',
          'emperor' => 'Emperor',
          'grapevine' => 'Grapevine',
          'velvet' => 'Velvet',
          'earth' => 'Earth',
          'night' => 'Night'
        )
      ),
      array(
        'type' => 'checkbox',
        'field' => 'dark_theme',
        'label' => 'Dark Theme',
        'columns' => 4,
        'choices' => array(
          'true' => 'Select if you would like the theme to be dark'
        )
      ),
      array(
        'type' => 'checkbox',
        'field' => 'grid_lines',
        'label' => 'Grid Lines',
        'value' => true,
        'columns' => 4,
        'choices' => array(
          'true' => 'Select if you would like show the grid lines'
        )
      ),
      array(
        'type' => 'checkbox',
        'field' => 'square_button',
        'label' => 'Square Buttons',
        'value' => true,
        'columns' => 4,
        'choices' => array(
          'true' => 'Select if you would like square buttons'
        )
      ),
    )
  ));
  piklist('field', array(
    'type' => 'editor',
    'field' => 'footer_description',
    'label' => 'Footer Description',
    'columns' => 12,
    'value' => '<a href="//www.adventist.org/en/">Adventist.org</a> is the official website of the Seventh-day Adventist World Church &bull; <a href="//www.adventist.org/en/world-church/">View Regions</a>',
  ));
  piklist('field', array(
    'type' => 'textarea',
    'field' => 'site_branding_statement',
    'label' => 'Site Branding Statement',
    'description' => 'Found in the navigation drawer',
    'columns' => 12,
    'value' => '[Site Name] is a website of the Seventh-day Adventist church in [Region Name].'
  ));
  piklist('field', array(
    'type' => 'textarea',
    'field' => 'global_branding_statement',
    'label' => 'Global Branding Statement',
    'description' => 'Found in the navigation drawer',
    'columns' => 12,
    'value' => 'Seventh-day Adventists are devoted to helping people understand the Bible to find freedom, healing, and hope in Jesus.'
  ));
  piklist('field', array(
    'type' => 'textarea',
    'field' => 'footer_copyright',
    'label' => 'Footer Copyright',
    'columns' => 12,
    'value' => 'General Conference of Seventh-day Adventists'
  ));
  piklist('field', array(
    'type' => 'group',
    'label' => 'Footer Address',
    'fields' => array(
      array(
        'type' => 'text',
        'field' => 'footer_address_street',
        'label' => 'Street Address',
        'columns' => 12,
        'value' => '12501 Old Columbia Pike'
      ),
      array(
        'type' => 'text',
        'field' => 'footer_address_city',
        'label' => 'City',
        'columns' => 4,
        'value' => 'Silver Spring'
      ),
      array(
        'type' => 'text',
        'field' => 'footer_address_state',
        'label' => 'State',
        'columns' => 4,
        'value' => 'MD'
      ),
      array(
        'type' => 'text',
        'field' => 'footer_address_zip',
        'label' => 'Zipcode',
        'columns' => 4,
        'value' => '20904'
      ),
      array(
        'type' => 'text',
        'field' => 'footer_address_country',
        'label' => 'Country',
        'columns' => 6,
        'value' => 'USA'
      ),
      array(
        'type' => 'text',
        'field' => 'footer_phone',
        'label' => 'Phone Number',
        'columns' => 6,
        'value' => '301-680-6000'
      ),
    )
  ));
  piklist('field', array(
    'type' => 'file',
    'field' => 'footer_logo_icon',
    'label' => 'Footer Logo Icon',
    'description' => 'Upload a logo icon for the footer. *Only displays if the sabbath column is hidden.',
    'columns' => 12,
    'options' => array(
      'modal_title' => 'Upload Image',
      'button' => 'Add Image'
    )
  ));
  piklist('field', array(
    'type' => 'checkbox',
    'field' => 'index_hide_sidebar',
    'label' => 'Hide the sidebar',
    'description' => 'Hides the sidebar on the home/category page if it is active.',
    'columns' => 12,
    'choices' => array(
      'true' => 'Hide the content sidebar'
    )
  ));
  piklist('field', array(
    'type' => 'group',
    'label' => __('Home/Category Settings', 'alps'),
    'list' => false,
    'fields' => array(
      array(
        'type' => 'html',
        'value' => '<em>Select how you would like your category pages to display.</em>'
      ),
      array(
        'type' => 'checkbox',
        'field' => 'posts_label',
        'label' => 'Category Posts Feed Label',
        'columns' => 12,
        'value' => true,
        'choices' => array(
          'true' => 'Select to display the label "Category" on category posts feed.',
        )
      ),
      array(
        'type' => 'checkbox',
        'field' => 'posts_grid',
        'label' => 'Posts Feed Grid',
        'columns' => 12,
        'choices' => array(
          'true' => 'Select to display the posts side-by-side.',
        )
      ),
      array(
        'type' => 'checkbox',
        'field' => 'posts_grid_3up',
        'description' => '*The sidebar must be hidden for the pages to display 3up.',
        'label' => 'Posts Feed Grid (3up)',
        'columns' => 12,
        'choices' => array(
        'true' => 'Select to display the posts 3up at the largest breakpoint.',
        ),
        'conditions' => array(
          array(
            'reset' => false,
            'field' => 'posts_grid',
            'value' => 'true'
          )
        )
      ),
      array(
        'type' => 'checkbox',
        'field' => 'posts_image',
        'label' => 'Posts Feed Image',
        'columns' => 12,
        'choices' => array(
          'true' => 'Select to display the feature image for the posts.',
        )
      ),
      array(
        'type' => 'checkbox',
        'field' => 'posts_image_round',
        'label' => 'Round Image',
        'description' => '*Does not work for images displays side-by-side.',
        'columns' => 12,
        'choices' => array(
          'true' => 'Select to make the featured image round.',
        ),
        'conditions' => array(
          array(
            'reset' => false,
            'field' => 'posts_image',
            'value' => 'true'
          )
        )
      )
    )
  ));
?>
