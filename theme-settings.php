<?php

/**
 *Implements hook_form_FORM_ID_alter().
 */

function summary_form_system_theme_settings_alter(&$form , $form_state){
  $form['summary'] = array(
	'#type' => 'fieldset',
	'#title' => t('Summary Theme Settings'),
	'#collapsible' => TRUE,
	'#collapsed' => FALSE
  );
	
  $form['summary']['about'] = array(
	'#type' => 'textarea',
	'#title' => t('About YourSelf'),
	'#description' => t('Enter a few sentences about yourself'),
	'#default_value' => theme_get_setting('about' , 'summary'),
  );
	
  $form['summary']['social'] = array(
	'#type' => 'fieldset',
	'#title' => t('Social Media'),
	'#collapsible' => TRUE,
	'#collapsed' => TRUE
  );
	
  $form['summary']['social']['facebook'] = array(
	'#type' => 'textfield',
	'#title' => t('Facebook Profile URL'),
	'#description' => t('Link to your facebook profile'),
	'#default_value' => theme_get_setting('facebook' , 'summary'),
  );
	
  $form['summary']['social']['twitter'] = array(
	'#type' => 'textfield',
	'#title' => t('Twitter Profile URL'),
	'#description' => t('Link to your twitter profile'),
	'#default_value' => theme_get_setting('twitter' , 'summary'),
  );
	
  $form['summary']['social']['linkedin'] = array(
	'#type' => 'textfield',
	'#title' => t('Linkedin Profile URL'),
	'#description' => t('Link to your Linkedin profile'),
	'#default_value' => theme_get_setting('linkedin' , 'summary'),
  );
	
  $form['summary']['social']['flikr'] = array(
	'#type' => 'textfield',
	'#title' => t('Flikr Profile URL'),
	'#description' => t('Link to your Flikr profile'),
	'#default_value' => theme_get_setting('flikr' , 'summary'),
  );
	
  $form['summary']['social']['pinterest'] = array(
	'#type' => 'textfield',
	'#title' => t('Pinterest Profile URL'),
	'#description' => t('Link to your Pinterest profile'),
	'#default_value' => theme_get_setting('pinterest' , 'summary'),
  );
	
  $form['summary']['social']['tumblr'] = array(
	'#type' => 'textfield',
	'#title' => t('Tumblr Profile URL'),
	'#description' => t('Link to your Tumblr profile'),
	'#default_value' => theme_get_setting('tumblr' , 'summary'),
  );
	
  $form['summary']['social']['gplus'] = array(
	'#type' => 'textfield',
	'#title' => t('Google+ Profile URL'),
	'#description' => t('Link to your Google+ profile'),
	'#default_value' => theme_get_setting('gplus' , 'summary'),
  );
	
  $form['summary']['social']['dropbox'] = array(
	'#type' => 'textfield',
	'#title' => t('Dropbox Profile URL'),
	'#description' => t('Link to your Dropbox profile'),
	'#default_value' => theme_get_setting('dropbox' , 'summary'),
  );
	
  $form['summary']['social']['instagram'] = array(
	'#type' => 'textfield',
	'#title' => t('Instagram Profile URL'),
	'#description' => t('Link to your Instagram profile'),
	'#default_value' => theme_get_setting('instagram' , 'summary'),
  );
	
  $form['summary']['social']['github'] = array(
    '#type' => 'textfield',
    '#title' => t('GitHub Profile URL'),
      '#description' => t('Link to your GitHub profile'),
      '#default_value' => theme_get_setting('github' , 'summary'),
  );
	
  $form['summary']['social']['bitbucket'] = array(
    '#type' => 'textfield',
    '#title' => t('BitBucket Profile URL'),
    '#description' => t('Link to your BitBucket profile'),
    '#default_value' => theme_get_setting('bitbucket' , 'summary'),
  );
	
  $form['summary']['social']['vk'] = array(
    '#type' => 'textfield',
    '#title' => t('VK Profile URL'),
    '#description' => t('Link to your VK profile'),
    '#default_value' => theme_get_setting('vk' , 'summary'),
  );
}