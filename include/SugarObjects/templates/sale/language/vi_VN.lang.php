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
  'LBL_MODULE_NAME' => 'Sale',
  'LBL_MODULE_TITLE' => 'Bán: Trang chủ',
  'LBL_SEARCH_FORM_TITLE' => 'Sale Search',
  'LBL_VIEW_FORM_TITLE' => 'Sale View',
  'LBL_LIST_FORM_TITLE' => 'Sale List',
  'LBL_SALE_NAME' => 'Sale Name:',
  'LBL_SALE' => 'Sale:',
  'LBL_NAME' => 'tên',
  'LBL_LIST_SALE_NAME' => 'tên',
  'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
  'LBL_LIST_AMOUNT' => 'Trị giá',
  'LBL_LIST_DATE_CLOSED' => 'Đóng',
  'LBL_LIST_SALE_STAGE' => 'Công đoạn kinh doanh',
  'LBL_ACCOUNT_ID'=>'ID Khách hàng',
   'LBL_CURRENCY_ID'=>'Currency ID',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Sale - Currency Update',
  'UPDATE_DOLLARAMOUNTS' => 'Cập nhật giá U.S. Dollar',
  'UPDATE_VERIFY' => 'Xác thực giá trị',
  'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in sales are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
  'UPDATE_FIX' => 'Giá trị cố định',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for sales based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Tạo Tiền tệ mới:',
  'UPDATE_VERIFY_FAIL' => 'Record Failed Verification:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Giá trị hiện tại:',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'UPDATE_INCLUDE_CLOSE' => 'Include Closed Records',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Giá trị mới:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Tiền tệ mới:',
  'UPDATE_DONE' => 'Xong',
  'UPDATE_BUG_COUNT' => 'Lỗi đã tìm thấy và đang sửa:',
  'UPDATE_BUGFOUND_COUNT' => 'Lỗi tìm thấy:',
  'UPDATE_COUNT' => 'Bản ghi đã được cập nhật:',
  'UPDATE_RESTORE_COUNT' => 'Record Amounts Restored:',
  'UPDATE_RESTORE' => 'Phục hồi lại giá trị',
  'UPDATE_RESTORE_TXT' => 'Restores amount values from the backups created during fix.',
  'UPDATE_FAIL' => 'Could not update - ',
  'UPDATE_NULL_VALUE' => 'Amount is NULL setting it to 0 -',
  'UPDATE_MERGE' => 'Merge Currencies',
  'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
  'LBL_ACCOUNT_NAME' => 'Tên Khách hàng:',
  'LBL_AMOUNT' => 'Giá trị:',
  'LBL_AMOUNT_USDOLLAR' => 'Amount USD:',
  'LBL_CURRENCY' => 'Tiền tệ:',
  'LBL_DATE_CLOSED' => 'Ngày đóng dự kiến:',
  'LBL_TYPE' => 'Loại:',
  'LBL_CAMPAIGN' => 'Chiến dịch:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Dự án',  
  'LBL_NEXT_STEP' => 'Bước kế tiếp:',
  'LBL_LEAD_SOURCE' => 'Nguồn gốc:',
  'LBL_SALES_STAGE' => 'Giai đoạn Kinh doanh:',
  'LBL_PROBABILITY' => 'Ước lượng (%):',
  'LBL_DESCRIPTION' => 'Mô tả:',
  'LBL_DUPLICATE' => 'Possible Duplicate Sale',
  'MSG_DUPLICATE' => 'The Sale record you are about to create might be a duplicate of a sale record that already exists. Sale records containing similar names are listed below.<br>Click Save to continue creating this new Sale, or click Cancel to return to the module without creating the sale.',
  'LBL_NEW_FORM_TITLE' => 'Create Sale',
  'LNK_NEW_SALE' => 'Create Sale',
  'LNK_SALE_LIST' => 'Sale',
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the sale.',
  'LBL_TOP_SALES' => 'My Top Open Sale',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Are you sure you want to remove this contact from the sale?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this sale from the project?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sale',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Hoạt động',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Lịch sử',
    'LBL_RAW_AMOUNT'=>'Raw Amount',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
	'LBL_ASSIGNED_TO_NAME' => 'Giao cho người dùng:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Giao cho người dùng',
  'LBL_MY_CLOSED_SALES' => 'My Closed Sales',
  'LBL_TOTAL_SALES' => 'Total Sales',
  'LBL_CLOSED_WON_SALES' => 'Closed Won Sales',
  'LBL_ASSIGNED_TO_ID' =>'Assigned to ID',
  'LBL_CREATED_ID'=>'Tạo bởi ID',
  'LBL_MODIFIED_ID'=>'Sửa bởi ID',
  'LBL_MODIFIED_NAME'=>'Sửa bởi người dùng',
  'LBL_SALE_INFORMATION'=>'Sale Information',
  'LBL_CURRENCY_NAME'=>'Đơn vị tiền tệ',
  'LBL_CURRENCY_SYMBOL'=>'Dấu hiệu tiền tệ',
  'LBL_EDIT_BUTTON' => 'Sửa',
   'LBL_REMOVE' => 'Xóa đi',


);

?>
