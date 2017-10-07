<?php

/**
 * Menu callback for admin/structure/storage/stream-wrappers.
 */
function storage_stream_wrapper_admin() {
  $header = array(t('Stream wrapper'), t('Scheme'), t('Storage API Selector'), t('Storage API Class'), t('Operations'));
  $rows = array();

  $wrappers = storage_stream_wrapper_stream_wrappers();
  foreach ($wrappers as $scheme => $wrapper) {
    $selector = storage_stream_wrapper_selector($scheme);
    $class = $selector->storageClass();
    $row = array();
    $row[] = $wrapper['name'];
    $row[] = $scheme . '://';
    $row[] = $selector->selector_id;
    $row[] = l($class->name, 'admin/structure/storage/class/' . $class->class_id);
    $row[] = l('edit', 'admin/structure/storage/stream-wrappers/' . $scheme . '/edit');
    $rows[] = $row;
  }

  if (empty($rows)) {
    $rows[] = array(array('data' => t('No containers exist.'), 'colspan' => 6, 'class' => 'message'));
  }

  return theme('table', array(
    'header' => $header,
    'rows' => $rows,
    'attributes' => array('style' => 'width: auto;'),
  ));
}

/**
 * Form builder for admin/structure/storage/stream-wrappers/%/edit.
 */
function storage_stream_wrapper_admin_edit_form($form, $form_state, $scheme) {
  $wrappers = module_invoke('storage_stream_wrapper', 'stream_wrappers');
  if (!isset($wrappers[$scheme])) {
    return drupal_not_found();
  }

  $wrapper = $wrappers[$scheme];
  $selector = storage_stream_wrapper_selector($scheme);

  $form['name'] = array(
    '#type' => 'textfield',
    '#disabled' => TRUE,
    '#title' => t('Name'),
    '#default_value' => $wrapper['name'],
  );
  $form['description'] = array(
    '#type' => 'textfield',
    '#disabled' => TRUE,
    '#title' => t('Description'),
    '#default_value' => $wrapper['description'],
  );
  $form['private'] = array(
    '#type' => 'textfield',
    '#disabled' => TRUE,
    '#title' => t('Private'),
    '#default_value' => isset($wrapper['private']) ? t('yes') : t('no'),
  );
  $form['scheme'] = array(
    '#type' => 'textfield',
    '#disabled' => TRUE,
    '#title' => t('Scheme'),
    '#default_value' => $scheme . '://',
  );
  $form['class'] = array(
    '#type' => 'textfield',
    '#disabled' => TRUE,
    '#title' => t('Class'),
    '#default_value' => $wrapper['class'],
  );
  $form['storage_selector'] = array(
    '#type' => 'textfield',
    '#disabled' => TRUE,
    '#title' => t('Storage selector'),
    '#default_value' => $selector->selector_id,
  );
  $form['storage_class'] = $selector->formItem();

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit'),
  );

  return $form;
}

/**
 * Form submission handler for admin/structure/storage/stream-wrappers/%/edit.
 */
function storage_stream_wrapper_admin_edit_form_submit($form, &$form_state) {
  $scheme = $form_state['build_info']['args'][0];
  storage_stream_wrapper_selector($scheme)->submit($form_state['values']['storage_class']);

  drupal_set_message(t('!scheme stream wrapper has been updated.', array('!scheme' => $scheme)));
  $form_state['redirect'] = 'admin/structure/storage/stream-wrappers';
}

