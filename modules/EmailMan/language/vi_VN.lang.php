<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Ngày gửi',
	'LBL_IN_QUEUE'								=> 'Đang thực hiện',
	'LBL_IN_QUEUE_DATE'							=> 'Hàng',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Chỉ dùng số nguyên',

	'LBL_ATTACHMENT_AUDIT'						=> ' Đã gửi.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Cấu hình email',
	'LBL_CUSTOM_LOCATION'						=> 'Xác định người dùng',
	'LBL_DEFAULT_LOCATION'						=> 'mặc định',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Thêm tin nhắn bảo mật cho email',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Nội dung',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'Cảnh báo: email chứa nội dung tuyệt mật(s) Cấm các hành vi lan truyền hoặc sao chép. Nếu bạn không phải là người nhận xin xóa email.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Soạn tin nhắn email trong bộ ký tự này',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Soạn email sử dụng khách hàng này',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Xóa ghi chú liên quan và file đính kèm với email đã bị xóa',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Prefill Gmail&#153; Defaults',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Số lượng email được gửi đi mỗi loạt:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Enable SMTP over SSL?',
	'LBL_EMAIL_USER_TITLE'						=> 'người dùng email mặc định',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Outgoing Mail Configuration',
	'LBL_EMAILS_PER_RUN'						=> 'Số lượng email được gửi đi mỗi loạt:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Chiến dịch',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Xử lý',
	'LBL_LIST_FORM_TITLE'						=> 'hàng đợi',
	'LBL_LIST_FROM_EMAIL'						=> 'Từ Email',
	'LBL_LIST_FROM_NAME'						=> 'Từ tên',
	'LBL_LIST_IN_QUEUE'							=> 'Trong quá trình',
	'LBL_LIST_MESSAGE_NAME'						=> 'tin nhắn Marketing',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Người nhận Email',
	'LBL_LIST_RECIPIENT_NAME'					=> 'tên người nhận',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Cố gắng gửi',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Gửi',
	'LBL_LIST_USER_NAME'						=> 'Tên người dùng',
	'LBL_LOCATION_ONLY'							=> 'Địa điểm',
	'LBL_LOCATION_TRACK'						=> 'Location of campaign tracking files (like campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Giữ tin nhắn của chiến dịch:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Bạn có muốn giữ email <bold>EACH</bold> tin nhắn đã gửi?  <bold>Chúng tôi đề nghị không</bold>.  Chọn không sẽ chỉ lưu mẫu và các giá trị có sẵn.',
	'LBL_MAIL_SENDTYPE'							=> 'Mail Transfer Agent:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Use SMTP Authentication:',
	'LBL_MAIL_SMTPPASS'							=> 'Mật khẩu:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP Port:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP Mail Server:',
	'LBL_MAIL_SMTPUSER'							=> 'Username:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Choose your Email provider',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail Password',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Password',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail Email Address',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Password',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Username',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Server Port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server',
	'LBL_EMAIL_LINK_TYPE'				=> 'Email khách hàng',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Marketing Id',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Email Tùy chỉnh',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Configure Campaign Email Settings',
	'LBL_MODULE_TITLE'							=> 'Outbound Email Queue Management',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'When enabled, emails are sent to users when records are assigned to them.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"From" Address:',
	'LBL_NOTIFY_FROMNAME' 						=> '"From" Name:',
	'LBL_NOTIFY_ON'								=> 'Assignment Notifications',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Send notifications to new users',
	'LBL_NOTIFY_TITLE'							=> 'Email Options',
	'LBL_OLD_ID'								=> 'Old Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Outbound Email Options',
	'LBL_RELATED_ID'							=> 'Related Id',
	'LBL_RELATED_TYPE'							=> 'Related Type',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Save Outbound Raw Emails',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Processed Search',
	'LBL_SEARCH_FORM_TITLE'						=> 'Queue Search',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'View Processed Emails',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'View Queued Emails',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Value of Config.php setting site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Để xóa bạn khỏi danh sách email',
	'TXT_REMOVE_ME_CLICK'						=> 'bấm vào đây',
	'TXT_REMOVE_ME'								=> 'Để xóa bạn từ danh sách email ',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Gửi thông báo từ người dùng được chỉ định\'s e-mail address',

	'LBL_SECURITY_TITLE'						=> 'Email Security Settings',
	'LBL_SECURITY_DESC'							=> 'Check the following that should NOT be allowed in via InboundEmail or displayed in the Emails module.',
	'LBL_SECURITY_APPLET'						=> 'Applet tag',
	'LBL_SECURITY_BASE'							=> 'Base tag',
	'LBL_SECURITY_EMBED'						=> 'Embed tag',
	'LBL_SECURITY_FORM'							=> 'Form tag',
	'LBL_SECURITY_FRAME'						=> 'Frame tag',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset tag',
	'LBL_SECURITY_IFRAME'						=> 'iFrame tag',
	'LBL_SECURITY_IMPORT'						=> 'Import tag',
	'LBL_SECURITY_LAYER'						=> 'Layer tag',
	'LBL_SECURITY_LINK'							=> 'Link tag',
	'LBL_SECURITY_OBJECT'						=> 'Object tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Select Outlook default minimum security settings (errs on the side of correct display).',
	'LBL_SECURITY_SCRIPT'						=> 'Script tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Toggle All Options',
	'LBL_SECURITY_XMP'							=> 'Xmp tag',
    'LBL_YES'                                   => 'Có',
    'LBL_NO'                                    => 'Không',
    'LBL_PREPEND_TEST'                          => '[Test]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Cố gắng gửi',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configure the default outgoing mail server for sending email notifications, including workflow alerts.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'When this option selected, all users will be able to send emails using the same outgoing<br> mail account used to send system notifications and alerts.  If the option is not selected,<br> users can still use the outgoing mail server after providing their own account information.',
    'LBL_FROM_ADDRESS_HELP'                     => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Giúp đỡ' /*for 508 compliance fix*/,
	'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
);

?>