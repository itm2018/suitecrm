<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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

	'LBL_MODULE_NAME' => 'Lịch',
	'LBL_AGENDADAY' => 'Ngày',
	'LBL_AGENDAWEEK' => 'Tuần',
	'LBL_SHAREDWEEK' => 'Shared Week',
	'LBL_SHAREDMONTH' => 'Shared Month',


	'LBL_MODULE_NAME' => 'Lịch',
	'LBL_MODULE_TITLE' => 'Lịch',
	'LNK_NEW_CALL' => 'Log Cuộc gọi',
	'LNK_NEW_MEETING' => 'Lịch họp',
	'LNK_NEW_APPOINTMENT' => 'Tạo cuộc hẹn',
	'LNK_NEW_TASK' => 'Tạo Tác vụ',
	'LNK_CALL_LIST' => 'Xem Cuộc gọi',
	'LNK_MEETING_LIST' => 'Xem Hội họp',
	'LNK_TASK_LIST' => 'Xem Tác vụ',
	'LNK_TASK' => 'Công việc',
	'LNK_TASK_VIEW' => 'View Task',
	'LNK_EVENT' => 'Event',
	'LNK_EVENT_VIEW' => 'View Event',
	'LNK_VIEW_CALENDAR' => 'Xem Lịch',
	'LNK_IMPORT_CALLS' => 'Nhập Cuộc gọi',
	'LNK_IMPORT_MEETINGS' => 'Nhập Hội họp',
	'LNK_IMPORT_TASKS' => 'Nhập Tác vụ',
	'LBL_MONTH' => 'Tháng',
	'LBL_AGENDADAY' => 'Ngày',
	'LBL_YEAR' => 'Năm',
	'LBL_AGENDAWEEK' => 'Tuần',
	'LBL_PREVIOUS_MONTH' => 'Tháng trước',
	'LBL_PREVIOUS_DAY' => 'Ngày trước',
	'LBL_PREVIOUS_YEAR' => 'Năm trước',
	'LBL_PREVIOUS_WEEK' => 'Tuần trước',
	'LBL_NEXT_MONTH' => 'Tháng tới',
	'LBL_NEXT_DAY' => 'Ngày tới',
	'LBL_NEXT_YEAR' => 'Năm tới',
	'LBL_NEXT_WEEK' => 'Tuần tới',
	'LBL_AM' => 'Sáng',
	'LBL_PM' => 'Chiều',
	'LBL_SCHEDULED' => 'Lịch',
	'LBL_BUSY' => 'Bận',
	'LBL_CONFLICT' => 'Mâu thuẫn',
	'LBL_USER_CALENDARS' => 'Lịch Người dùng',
	'LBL_SHARED' => 'Chia sẻ',
	'LBL_PREVIOUS_SHARED' => 'Trước',
	'LBL_NEXT_SHARED' => 'Tới',
	'LBL_SHARED_CAL_TITLE' => 'Chia sẻ Lịch',
	'LBL_USERS' => 'Người dùng',
	'LBL_REFRESH' => 'Refresh',
	'LBL_EDIT_USERLIST' => 'User List',
	'LBL_SELECT_USERS' => 'Select users for calendar display',
	'LBL_FILTER_BY_TEAM' => 'Filter user list by team:',
	'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
	'LBL_DATE' => 'Ngày & thời gian bắt đầu',
	'LBL_CREATE_MEETING' => 'Lịch họp',
	'LBL_CREATE_CALL' => 'Log Cuộc gọi',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Có',
	'LBL_NO' => 'Không',
	'LBL_SETTINGS' => 'Tùy chỉnh',
	'LBL_CREATE_NEW_RECORD' => 'Create Activity',
	'LBL_LOADING' => 'Loading ......',
	'LBL_SAVING' => 'Saving ......',
	'LBL_SENDING_INVITES' => 'Saving & Sending Invites .....',
	'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
	'LBL_EDIT_RECORD' => 'Edit Activity',
	'LBL_ERROR_SAVING' => 'Error while saving',
	'LBL_ERROR_LOADING' => 'Error while loading',
	'LBL_GOTO_DATE' => 'Goto Date',
	'NOTICE_DURATION_TIME' => 'Thời lượng không được quá 0',
	'LBL_STYLE_BASIC' => 'Cơ bản',
	'LBL_STYLE_ADVANCED' => 'Nâng cao',

	'LBL_INFO_TITLE' => 'Chi tiết thêm',
	'LBL_INFO_DESC' => 'Mô tả',
	'LBL_INFO_START_DT' => 'Ngày bắt đầu',
	'LBL_INFO_DUE_DT' => 'Due Date & Time',
	'LBL_INFO_DURATION' => 'Thời lượng',
	'LBL_INFO_NAME' => 'Chủ đề',
	'LBL_INFO_RELATED_TO' => 'Liên quan đến',

	'LBL_NO_USER' => 'No match for field: Assigned to',
	'LBL_SUBJECT' => 'Chủ đề',
	'LBL_DURATION' => 'Thời lượng',
	'LBL_STATUS' => 'Tình trạng',
	'LBL_PRIORITY' => 'Ưu tiên',
	'LBL_DATE_TIME' => 'Date and Time',


	'LBL_SETTINGS_TITLE' => 'Tùy chỉnh',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
	'LBL_SETTINGS_TIME_STARTS'=>'Start time:',
	'LBL_SETTINGS_TIME_ENDS'=>'End time:',
	'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

	'LBL_SAVE_BUTTON' => 'Lưu',
	'LBL_DELETE_BUTTON' => 'Xóa',
	'LBL_APPLY_BUTTON' => 'Apply',
	'LBL_SEND_INVITES' => 'Gửi thư mời',
	'LBL_CANCEL_BUTTON' => 'Hủy',
	'LBL_CLOSE_BUTTON' => 'Đóng',

	'LBL_GENERAL_TAB' => 'Chi tiết',
	'LBL_PARTICIPANTS_TAB' => 'Người được mời',
	'LBL_REPEAT_TAB' => 'Recurrence',
	
	'LBL_REPEAT_TYPE' => 'Repeat',
	'LBL_REPEAT_INTERVAL' => 'Every',
	'LBL_REPEAT_END' => 'Kết thúc',
	'LBL_REPEAT_END_AFTER' => 'After',
	'LBL_REPEAT_OCCURRENCES' => 'recurrences',
	'LBL_REPEAT_END_BY' => 'By',
	'LBL_REPEAT_DOW' => 'On',
	'LBL_REPEAT_UNTIL' => 'Repeat Until',
	'LBL_REPEAT_COUNT' => 'Number of recurrences',
	'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

	'LBL_DATE_END_ERROR' => 'End date is before start date',
	'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
	'LBL_MODULE' => 'Chức năng',
	'LBL_BODY' => 'Body',
	'LBL_BORDER' => 'Border',
	'LBL_TEXT' => 'Text',
);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"C.Nhật",
			"T.2",
			"T.3",
			"T.4",
			"T.5",
			"T.6",
			"T.7",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Chủ Nhật",
			"Thứ Hai",
			"Thứ Ba",
			"Thứ Tư",
			"Thứ Năm",
			"Thứ Sáu",
			"Thứ Bảy",
		),
	'dom_cal_month'=>
		array(
			"",
			"Th. 1",
			"Th. 2",
			"Th. 3",
			"Th. 4",
			"Tháng Năm",
			"Th. 6",
			"Th. 7",
			"Th. 8",
			"Th. 9",
			"Th. 10",
			"Th. 11",
			"Th. 12",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"January",
			"Tháng Hai",
			"Tháng Ba",
			"Tháng Tư",
			"Tháng Năm",
			"Tháng Sáu",
			"Tháng Bảy",
			"Tháng Tám",
			"Tháng Chín",
			"Tháng Mười",
			"Tháng Mười Một",
			"Tháng Mười Hai",
		),
);
?>
