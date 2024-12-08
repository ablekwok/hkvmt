<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.1.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'HKVMT FAQ Form 送出',
	'heading' => '新的表單送出',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => '已核取',
		'checkbox_unchecked' => '取消選取',
		'submitted_from' => '表單由此網站送出: %s',
		'submitted_by' => '訪客 IP 位址: %s',
		'too_many_submissions' => '此 IP 最近有太多送出記錄',
		'failed_to_send_email' => '傳送電子郵件失敗',
		'invalid_reCAPTCHA_private_key' => '無效的 reCAPTCHA 私密金鑰。',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => '不明的欄位類型「%s」。',
		'invalid_form_config' => '「%s」欄位有無效的設定。',
		'unknown_method' => '不明的伺服器要求方式'
	),
	'email' => array(
		'from' => 'hkv10000@hkvmt.com',
		'to' => 'hkv10000@hkvmt.com'
	),
	'fields' => array(
		'custom_U806643' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Contact Name',
			'required' => true,
			'errors' => array(
				'required' => '欄位「Contact Name」為必填。'
			)
		),
		'Email' => array(
			'order' => 3,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => '欄位「Email」為必填。',
				'format' => '「Email」欄位有無效的電子郵件。'
			)
		),
		'custom_U806618' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U806634' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Organization’s Name',
			'required' => true,
			'errors' => array(
				'required' => '欄位「Organization’s Name」為必填。'
			)
		),
		'custom_U806622' => array(
			'order' => 4,
			'type' => 'radiogroup',
			'label' => 'Type',
			'required' => true,
			'optionItems' => array(
				'Apply as collaborative partner',
				'About HK-VMT',
				'About the Central Management Platform'
			),
			'errors' => array(
				'required' => '欄位「Type」為必填。',
				'format' => '「Type」欄位有無效的值。'
			)
		)
	)
);

process_form($form);
?>
