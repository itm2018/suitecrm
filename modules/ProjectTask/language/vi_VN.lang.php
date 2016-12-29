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
	'LBL_MODULE_NAME' => 'Công việc dự án',
	'LBL_MODULE_TITLE' => 'Công việc dự án: Trang chủ',
	'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm công việc dự án',
	'LBL_LIST_FORM_TITLE'=> 'Công việc dự án',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Edit Task In Grid',    
	
	'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Project Task Id:',
    'LBL_PROJECT_ID' => 'Project Id:',
	'LBL_DATE_ENTERED' => 'Ngày tạo:',
	'LBL_DATE_MODIFIED' => 'Ngày sửa:',
	'LBL_ASSIGNED_USER_ID' => 'Giao cho:',
	'LBL_MODIFIED_USER_ID' => 'Modified User Id:',
	'LBL_CREATED_BY' => 'Tạo bởi:',
	'LBL_TEAM_ID' => 'Nhóm:',
	'LBL_NAME' => 'Tên:',
	'LBL_STATUS' => 'Trạng thái:',
	'LBL_DATE_DUE' => 'Ngày hết hạn:',
	'LBL_TIME_DUE' => 'Thời gian hết hạn:',
    'LBL_RESOURCE' => 'Nguồn:',
    'LBL_PREDECESSORS' => 'tiền nhiệm:',
	'LBL_DATE_START' => 'Ngày bắt đầu:',
    'LBL_DATE_FINISH' => 'Ngày kết thúc:',    
	'LBL_TIME_START' => 'Thời gian bắt đầu:',
    'LBL_TIME_FINISH' => 'Thời gian kết thúc:',
    'LBL_DURATION' => 'Thời lượng:',
    'LBL_DURATION_UNIT' => 'Đơn vị tính:',
    'LBL_ACTUAL_DURATION' => 'Thời lượng thực tế:',
	'LBL_PARENT_ID' => 'Dự án:',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id:',    
    'LBL_PERCENT_COMPLETE' => '% Hoàn thành:',
	'LBL_PRIORITY' => 'ưu tiên:',
	'LBL_DESCRIPTION' => 'Ghi chú:',
	'LBL_ORDER_NUMBER' => 'Số thứ tự:',
	'LBL_TASK_NUMBER' => 'Số công việc:',
    'LBL_TASK_ID' => 'Task ID:',
	'LBL_DEPENDS_ON_ID' => 'Phụ thuộc vào:',
	'LBL_MILESTONE_FLAG' => 'Mốc:',
	'LBL_ESTIMATED_EFFORT' => 'Ước lượng chi phí (hrs):',
	'LBL_ACTUAL_EFFORT' => 'Chi phí thực tế (hrs):',
	'LBL_UTILIZATION' => 'Sử dụng (%):',
	'LBL_DELETED' => 'đã xóa:',

	'LBL_LIST_ORDER_NUMBER' => 'Số thứ tự',
	'LBL_LIST_NAME' => 'tên',
    'LBL_LIST_DAYS' => 'Ngày',
	'LBL_LIST_PARENT_NAME' => 'Dự án',
	'LBL_LIST_PERCENT_COMPLETE' => '% Hoàn thành',
	'LBL_LIST_STATUS' => 'Trạng thái',
    'LBL_LIST_DURATION' => 'Thời lượng',
    'LBL_LIST_ACTUAL_DURATION' => 'Thời lượng thực tế',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Giao cho',
	'LBL_LIST_DATE_DUE' => 'Ngày hết hạn',
	'LBL_LIST_DATE_START' => 'Ngày bắt đầu',
    'LBL_LIST_DATE_FINISH' => 'Ngày kết  thúc',    
	'LBL_LIST_PRIORITY' => 'ưu tiên',
	'LBL_LIST_CLOSE' => 'Đóng',
	'LBL_PROJECT_NAME' => 'Tên dự án',

	'LNK_NEW_PROJECT'	=> 'Tạo dự án',
	'LNK_PROJECT_LIST'	=> 'Danh sách dự án',
	'LNK_NEW_PROJECT_TASK'	=> 'Tạo công việc dự án',
	'LNK_PROJECT_TASK_LIST'	=> 'Công việc dự án',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Công việc dự án của tôi',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Công việc dự án',
	'LBL_NEW_FORM_TITLE' => 'Công việc dự án mới',

	'LBL_ACTIVITIES_TITLE'=>'Hoạt động',
	'LBL_HISTORY_TITLE'=>'Lịch sử',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Hoạt động',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Lịch sử', 
	'DATE_JS_ERROR' => 'Please enter a date corresponding to the time entered',

    'LBL_ASSIGNED_USER_NAME' => 'Giao cho',
    'LBL_PARENT_NAME' => 'Tên dự án',
    'LBL_LIST_PROJECT_NAME' => 'Dự án',
	'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',
	
	'LBL_SUBTASK' => 'Sub-Task',
	'LBL_LAG' => 'Lag',
	'LBL_DAYS' => 'Ngày',
	'LBL_HOURS' => 'Giờ',
	'LBL_RELATIONSHIP_TYPE' => 'Relationship Type',
);

?>