<?php



/**
 * Implements template_preprocess_page().
 */
function summary_preprocess_page(&$variables){
  if ($vocabulary = taxonomy_vocabulary_machine_name_load('tags')) {
    $terms = taxonomy_get_tree($vocabulary->vid) ;
	$tags = '<ul>';
	foreach ($terms as $term) {
      $tags .= '<li>' . l($term->name, 'taxonomy/term/'.$term->tid, array(
        'attributes' => array(
           'class' => array('label label-primary')
        )
      )) . '</li>';
    }
    $tags .= '</ul>';
    $variables['tags'] = $tags; 
  }
  else{
    $variables['tags'] = t('N/A');
  }
}

/**
 * Implements template_preprocess_node().
 */
function summary_preprocess_node(&$variables){
  //get the url of user picture
  $user = user_load($variables['uid']);
  if ($user->picture) {
	$variables['user_picture'] = file_create_url($user->picture->uri);
  }
  else{
	$variables['user_picture'] = $GLOBALS['base_url'] . '/' . path_to_theme() . '/images/default.png';
  }
  //Plain username string
  $variables['name'] = $user->name;
  //Get tags as a string of links
  if (!empty($variables['field_tags']) && count($variables['field_tags'])) {
	$tags = '';
	foreach($variables['field_tags'] as $term){
	  $tags .= l($term['taxonomy_term']->name, 'taxonomy/term/'.$term['taxonomy_term']->tid , array(
		'attributes' => array(
		  'class' => array('label label-primary')
		)
	  ));
	}
	$variables['tags'] = $tags;
  }
  else{
    $variables['tags'] = t('N/A');
  }
}

/**
 *Implements template_preprocess_comment().
 */
function summary_preprocess_comment(&$variables){
  //Get the URL to user piture
  $user = user_load($variables['user']->uid);
  if ($user->picture) {
    $variables['picture'] = file_create_url($user->picture->uri);
  }
  else{
	$variables['picture'] = $GLOBALS['base_url'] . '/' . path_to_theme() . '/images/default.png';
  }
}
