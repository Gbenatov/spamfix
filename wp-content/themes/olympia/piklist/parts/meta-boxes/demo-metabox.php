<?php
/*
Title: My Demo Metabox
Post Type: post
*/

piklist('field', array(
    'type' => 'text'
    ,'field' => 'text'
    ,'label' => 'Text Box'
    ,'description' => 'Field Description'
    ,'value' => 'Default text'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
  piklist('field', array(
    'type' => 'select'
    ,'field' => 'select'
    ,'label' => 'Select Box'
    ,'description' => 'Choose from the drop-down.'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
    ,'choices' => array(
      'option1' => 'Option 1'
      ,'option2' => 'Option 2'
      ,'option3' => 'Option 3'
    )
  ));
  
  piklist('field', array(
    'type' => 'colorpicker'
    ,'field' => 'colorpicker'
    ,'label' => 'Choose a color'
    ,'value' => '#aee029'
    ,'description' => 'Click in the box to select a color.'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
      'class' => 'text'
    )
  ));