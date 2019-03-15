<?php if (!class_exists('CaptchaConfiguration')) { return; }

// BotDetect PHP Captcha configuration options

$config = array(
  // Captcha configuration for example page
  'ExampleCaptcha' => array(
    'UserInputID' => 'CaptchaCode',
    'ImageWidth' => 250,
    'ImageHeight' => 50,
	'Locale' =>'fr-Latn-CA',
  ),

);