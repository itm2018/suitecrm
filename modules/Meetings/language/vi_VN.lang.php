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
	'ERR_DELETE_RECORD' => 'A record number must be specified to delete the meeting.',

	'LBL_ACCEPT_THIS'=>'Đồng ý?',
	'LBL_ADD_BUTTON'=> 'Thêm',
	'LBL_ADD_INVITEE' => 'Thêm Người được mời',
	'LBL_COLON' => ':',
	'LBL_CONTACT_NAME' => 'Liên hệ:',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
	'LBL_CREATED_BY'=>'Tạo bởi',
	'LBL_DATE_END'=>'Ngày kết thúc',
	'LBL_DATE_TIME' => 'Ngày & thời gian bắt đầu:',
	'LBL_DATE' => 'Ngày bắt đầu:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hội họp',
	'LBL_DEL'=> 'Xóa',
	'LBL_DESCRIPTION_INFORMATION' => 'Thông tin mô tả',
	'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_DIRECTION' => 'Phương hướng:',
	'LBL_DURATION_HOURS' => 'Thời lượng - giờ:',
	'LBL_DURATION_MINUTES' => 'Thời lượng - phút:',
	'LBL_DURATION' => 'Thời lượng:',
	'LBL_EMAIL' => 'Emails',
	'LBL_FIRST_NAME' => 'Họ',
	'LBL_HISTORY_SUBPANEL_TITLE' => 'Ghi chú',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_HOURS_MINS' => '(giờ/phút)',
	'LBL_INVITEE' => 'Người được mời',
	'LBL_LAST_NAME' => 'Tên',
	'LBL_ASSIGNED_TO_NAME'=>'Chỉ định cho:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Người dùng được chỉ định',
	'LBL_LIST_CLOSE' => 'Đóng',
	'LBL_LIST_CONTACT' => 'Liên hệ',
	'LBL_LIST_DATE_MODIFIED'=>'Ngày sửa',
	'LBL_LIST_DATE' => 'Ngày bắt đầu',
	'LBL_LIST_DIRECTION' => 'Phương hướng',
	'LBL_LIST_DUE_DATE'=>'Ngày hạn',
	'LBL_LIST_FORM_TITLE' => 'Danh sách Hội họp',
	'LBL_LIST_MY_MEETINGS' => 'Hội họp',
	'LBL_LIST_RELATED_TO' => 'Liên quan tới',
	'LBL_LIST_STATUS'=>'Tình trạng',
	'LBL_LIST_SUBJECT' => 'Chủ đề',
	'LBL_LIST_TIME' => 'Thời gian bắt đầu',
	'LBL_LEADS_SUBPANEL_TITLE' => 'Dẫn dắt',
	'LBL_LOCATION' => 'Thời lượng:',
	'LBL_MEETING' => 'Hội họp:',
	'LBL_MINSS_ABBREV' => 'm',
	'LBL_MODIFIED_BY'=>'Sửa bởi',
	'LBL_MODULE_NAME' => 'Hội họp',
	'LBL_MODULE_TITLE' => 'Hội họp: Tr.chính',
	'LBL_NAME' => 'Tên',
	'LBL_NEW_FORM_TITLE' => 'Tạo cuộc hẹn',
	'LBL_OUTLOOK_ID' => 'Outlook ID',
	'LBL_SEQUENCE' => 'Meeting update sequence',
	'LBL_PHONE' => 'Điện thoại VP:',
	'LBL_REMINDER_TIME'=>'Thời gian nhắc nhở',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
	'LBL_REMINDER' => 'Nhắc nhở:',
	'LBL_REMINDER_POPUP' => 'Popup',
	'LBL_REMINDER_EMAIL' => 'Emails',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_REMOVE' => 'Bỏ',
	'LBL_SCHEDULING_FORM_TITLE' => 'Lịch trình',
	'LBL_SEARCH_BUTTON'=> 'Tìm kiếm',
	'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm',
	'LBL_SEND_BUTTON_KEY'=>'I',
	'LBL_SEND_BUTTON_LABEL'=>'Gửi thư mời',
	'LBL_SEND_BUTTON_TITLE'=>'Gửi thư mời',
	'LBL_STATUS' => 'Tình trạng:',
    'LBL_TYPE' => 'Loại Hội họp',
    'LBL_PASSWORD' => 'Mật khẩu',
    'LBL_URL' => 'Bắt đầu Hội họp',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Display URL',
    'LBL_CREATOR' => 'Chủ tọa',
    'LBL_EXTERNALID' => 'External App ID',
	'LBL_SUBJECT' => 'Chủ đề:',
	'LBL_TIME' => 'Thời gian bắt đầu:',
	'LBL_USERS_SUBPANEL_TITLE' => 'Người dùng',
	'LBL_ACTIVITIES_REPORTS' => 'Báo cáo hoạt động',
    'LBL_PARENT_TYPE' => 'Loại Cấp trên',
    'LBL_PARENT_ID' => 'Parent ID',
	'LNK_MEETING_LIST'=>'Xem Hội họp',
	'LNK_NEW_APPOINTMENT' => 'Tạo cuộc hẹn',
	'LNK_NEW_MEETING'=>'Lịch trình Hội họp',
	'LNK_IMPORT_MEETINGS' => 'Nhập Hội họp',

	'NTC_REMOVE_INVITEE' => 'Are you sure you want to remove this invitee from the meeting?',
    'LBL_CREATED_USER' => 'Người dùng tạo',
    'LBL_MODIFIED_USER' => 'Người dùng sửa',
    'NOTICE_DURATION_TIME' => 'Thời lượng phải được lớn hơn 0',
    'LBL_MEETING_INFORMATION' => 'Xem Toàn bộ',
	'LBL_LIST_JOIN_MEETING' => 'Tham gia Hội họp',
	'LBL_JOIN_EXT_MEETING' => 'Tham gia Hội họp',
	'LBL_HOST_EXT_MEETING' => 'Bắt đầu Hội họp',
    'LBL_ACCEPT_STATUS' => 'Tình trạng chấp nhận',
    'LBL_ACCEPT_LINK' => 'Accept Link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_HEADER' => 'Error: Not Invited',
    'LBL_EXTNOT_MAIN' => 'You are not able to join this meeting because you are not an Invitee.',
    'LBL_EXTNOT_RECORD_LINK' => 'View Meeting',
    'LBL_EXTNOT_GO_BACK' => 'Go back to the previous record',

    //cannot start messages
    'LBL_EXTNOSTART_HEADER' => 'Error: Cannot Start Meeting',
    'LBL_EXTNOSTART_MAIN' => 'You cannot start this meeting because you are not an Administrator or the owner of the meeting.',

  //For export labels
    'LBL_EXPORT_JOIN_URL' => 'Join Url',
    'LBL_EXPORT_HOST_URL' => 'Host Url',
    'LBL_EXPORT_DISPLAYED_URL' => 'Displayed Url',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
    'LBL_EXPORT_EXTERNAL_ID' => 'External ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
    'LBL_EXPORT_CREATED_BY' => 'Created By ID',

    'LBL_EXPORT_DATE_START' => 'Start Date and Time',
    'LBL_EXPORT_DATE_END' => 'End Date and Time',
    'LBL_EXPORT_PARENT_TYPE' => 'Related Type',
    'LBL_EXPORT_PARENT_ID' => 'Parent ID',
    'LBL_EXPORT_REMINDER_TIME' =>'Reminder Time (in minutes)',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'As Lead',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Hủy',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',
    
    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',
    
    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Related to:',

	// for reminders
	'LBL_REMINDERS' => 'Reminders',
	'LBL_REMINDERS_ACTIONS' => 'Actions:',
	'LBL_REMINDERS_POPUP' => 'Popup',
	'LBL_REMINDERS_EMAIL' => 'Email invitees',
	'LBL_REMINDERS_WHEN' => 'When:',
	'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
	'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
	'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',
);
?>
