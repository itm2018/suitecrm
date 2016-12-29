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

 


$mod_strings = array (
  'LBL_MODULE_NAME' => 'Lịch sử',
  'LBL_MODULE_TITLE' => 'Lịch sử: Trang chủ',
  'LBL_SEARCH_FORM_TITLE' => 'History Search',
  'LBL_LIST_FORM_TITLE' => 'Lịch sử',
  'LBL_LIST_SUBJECT' => 'Chủ đề',
  'LBL_LIST_CONTACT' => 'Danh sách liên hệ',
  'LBL_LIST_RELATED_TO' => 'Liên quan đến',
  'LBL_LIST_DATE' => 'Date',
  'LBL_LIST_TIME' => 'Thời gian bắt đầu',
  'LBL_LIST_CLOSE' => 'Đóng',
  'LBL_SUBJECT' => 'Chủ đề:',
  'LBL_STATUS' => 'Tình trạng:',
  'LBL_LOCATION' => 'Thời lượng:',
  'LBL_DATE_TIME' => 'Ngày & thời gian bắt đầu:',
  'LBL_DATE' => 'Ngày bắt đầu:',
  'LBL_TIME' => 'Thời gian bắt đầu:',
  'LBL_DURATION' => 'Thời lượng:',
  'LBL_HOURS_MINS' => '(giờ/phút)',
  'LBL_CONTACT_NAME' => 'Contact Name: ',
  'LBL_MEETING' => 'Hội họp:',
  'LBL_DESCRIPTION_INFORMATION' => 'Thông tin mô tả',
  'LBL_DESCRIPTION' => 'Mô tả:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Planned',
  'LNK_NEW_CALL' => 'Log Cuộc gọi',
  'LNK_NEW_MEETING' => 'Lịch họp',
  'LNK_NEW_TASK' => 'Tạo Tác vụ',
  'LNK_NEW_NOTE' => 'Tạo Ghi chú hoặc Đính kèm',
  'LNK_NEW_EMAIL' => 'Lưu trữ Email',
  'LNK_CALL_LIST' => 'Cuộc gọi',
  'LNK_MEETING_LIST' => 'Xem Hội họp',
  'LNK_TASK_LIST' => 'Công việc',
  'LNK_NOTE_LIST' => 'Ghi chú',
  'LNK_EMAIL_LIST' => 'Email',
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
  'NTC_REMOVE_INVITEE' => 'Are you sure you want to remove this invitee from the meeting?',
  'LBL_INVITEE' => 'Người được mời',
  'LBL_LIST_DIRECTION' => 'Phương hướng',
  'LBL_DIRECTION' => 'Phương hướng',
  'LNK_NEW_APPOINTMENT' => 'New Appointment',
  'LNK_VIEW_CALENDAR' => 'Xem Lịch',
  'LBL_OPEN_ACTIVITIES' => 'Open Activities',
  'LBL_HISTORY' => 'Lịch sử',
  'LBL_UPCOMING' => 'My Upcoming Appointments',
  'LBL_TODAY' => 'through ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Tạo Tác vụ',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Tạo Tác vụ',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Lịch họp',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Lịch họp',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Log Cuộc gọi',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log Cuộc gọi',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Tạo Ghi chú hoặc Đính kèm',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Tạo Ghi chú hoặc Đính kèm',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Lưu trữ Email',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Lưu trữ Email',
  'LBL_LIST_STATUS' => 'Tình trạng',
  'LBL_LIST_DUE_DATE' => 'Ngày hạn',
  'LBL_LIST_LAST_MODIFIED' => 'Lần sửa cuối',
  'NTC_NONE_SCHEDULED' => 'Không theo lịch trình.',
  'appointment_filter_dom' => array(
  	 'today' => 'hôm nay'
  	,'tomorrow' => 'ngày mai'
  	,'this Saturday' => 'thứ 7 này'
  	,'next Saturday' => 'thứ 7 tới'
  	,'last this_month' => 'tháng này'
  	,'last next_month' => 'tháng tới'
  ),
  'LNK_IMPORT_NOTES'=>'Nhập Ghi chú',
  'NTC_NONE'=>'Không',
	'LBL_ACCEPT_THIS'=>'Đồng ý?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lịch sử',
);

?>