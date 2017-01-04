<?php
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
  'LBL_ASSIGNED_TO_ID' => 'Mã người dùng được chỉ định',
  'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
  'LBL_SECURITYGROUPS' => 'Security Groups',
  'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups',
  'LBL_ID' => 'Định danh',
  'LBL_DATE_ENTERED' => 'Ngày tạo',
  'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa',
  'LBL_MODIFIED' => 'Chỉnh sửa bởi',
  'LBL_MODIFIED_ID' => 'Chỉnh sửa bởi Id',
  'LBL_MODIFIED_NAME' => 'Chỉnh sửa bởi Tên',
  'LBL_CREATED' => 'Khởi tạo bởi',
  'LBL_CREATED_ID' => 'Tạo bởi người dùng',
  'LBL_DESCRIPTION' => 'Mô tả',
  'LBL_DELETED' => 'Đã xóa',
  'LBL_NAME' => 'Tên',
  'LBL_CREATED_USER' => 'Tạo bởi người dùng',
  'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
  'LBL_LIST_NAME' => 'Tên',
  'LBL_EDIT_BUTTON' => 'Sửa',
  'LBL_REMOVE' => 'Xóa đi',
  'LBL_MODULE_NAME' => 'Đặt Hàng',
  'LBL_MODULE_TITLE' => 'Đặt Hàng',
  'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Đặt Hàng',
  'LBL_VIEW_FORM_TITLE' => 'Sale View',
  'LBL_LIST_FORM_TITLE' => 'Đặt Hàng List',
  'LBL_SALE_NAME' => 'Sale Name:',
  'LBL_SALE' => 'Sale:',
  'LBL_LIST_SALE_NAME' => 'Tên',
  'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
  'LBL_LIST_AMOUNT' => 'Trị giá',
  'LBL_LIST_DATE_CLOSED' => 'Đóng',
  'LBL_LIST_SALE_STAGE' => 'Công đoạn kinh doanh',
  'LBL_ACCOUNT_ID' => 'ID Khách hàng',
  'LBL_CURRENCY_ID' => 'Loại tiền tệ',
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
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
  'LBL_LEADS_SUBPANEL_TITLE' => 'Nguồn gốc',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Dự án',
  'LBL_NEXT_STEP' => 'Bước kế tiếp:',
  'LBL_LEAD_SOURCE' => 'Nguồn gốc:',
  'LBL_SALES_STAGE' => 'Giai đoạn Kinh doanh:',
  'LBL_PROBABILITY' => 'Ước lượng (%):',
  'LBL_DUPLICATE' => 'Possible Duplicate Sale',
  'MSG_DUPLICATE' => 'The Sale record you are about to create might be a duplicate of a sale record that already exists. Sale records containing similar names are listed below.<br>Click Save to continue creating this new Sale, or click Cancel to return to the module without creating the sale.',
  'LBL_NEW_FORM_TITLE' => 'Mới Đặt Hàng',
  'LNK_NEW_SALE' => 'Create Sale',
  'LNK_SALE_LIST' => 'Sale',
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the sale.',
  'LBL_TOP_SALES' => 'My Top Open Sale',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Are you sure you want to remove this contact from the sale?',
  'SALE_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this sale from the project?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sale',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
  'LBL_RAW_AMOUNT' => 'Raw Amount',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Giao cho người dùng',
  'LBL_MY_CLOSED_SALES' => 'My Closed Sales',
  'LBL_TOTAL_SALES' => 'Total Sales',
  'LBL_CLOSED_WON_SALES' => 'Closed Won Sales',
  'LBL_SALE_INFORMATION' => 'Sale Information',
  'LBL_CURRENCY_NAME' => 'Đơn vị tiền tệ',
  'LBL_CURRENCY_SYMBOL' => 'Dấu hiệu tiền tệ',
  'LBL_HOMEPAGE_TITLE' => 'My Đặt Hàng',
  'LNK_NEW_RECORD' => 'Tạo Đặt Hàng',
  'LNK_LIST' => 'Xem Đặt Hàng',
  'LNK_IMPORT_SALES_ORDER' => 'Nhập Đặt Hàng',
  'LBL_SALES_ORDER_SUBPANEL_TITLE' => 'Đặt Hàng',
  'LBL_ORDER_OPPORTUNITY_OPPORTUNITY_ID' => 'Cơ hội (related Cơ hội ID)',
  'LBL_ORDER_OPPORTUNITY' => 'Cơ hội',
  'LBL_ORDER_QUOTE_AOS_QUOTES_ID' => 'Báo giá (related  ID)',
  'LBL_ORDER_QUOTE' => 'Báo giá',
  'LBL_ORDER_ACCOUNT_ACCOUNT_ID' => 'order account (related Tài khoản ID)',
  'LBL_ORDER_ACCOUNT' => 'Khách hàng',
  'LBL_ORDER_CONTACT_CONTACT_ID' => 'Liên hệ (related Danh sách liên hệ ID)',
  'LBL_ORDER_CONTACT' => 'Liên hệ',
  'LBL_ORDER_ADDRESS_STREET' => 'Tên đường',
  'LBL_ORDER_ADDRESS_CIY' => 'Thành phố',
  'LBL_ORDER_ADDRESS_STATE' => 'Tiểu bang',
  'LBL_ORDER_ADDRESS_POSTALCODE' => 'Mã bưu chính',
  'LBL_ORDER_ADDRESS_COUNTRY' => 'Quốc gia',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Địa chỉ giao hàng',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Thành phố',
  'LBL_SHPPING_ADDRESS_STATE' => 'Tiểu bang',
  'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Mã bưu chính',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Quốc gia',
  'LBL_TOTAL_AMT' => 'Tổng',
  'LBL_TOTAL_AMT_USDOLLAR' => 'Tổng (USD)',
  'LBL_SUBTOTAL_AMOUNT' => 'Giá chưa thuế',
  'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Giá trước thuế (USD)',
  'LBL_DISCOUNT_AMOUNT' => 'Giảm giá',
  'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Giảm giá (USD)',
  'LBL_TAX_AMOUNT' => 'Thuế',
  'LBL_TAX_AMOUNT_USDOLLAR' => 'Thuế (USD)',
  'LBL_SHIPPING_TAX' => 'Thuế giao hàng',
  'LBL_SHIPPING_TAX_AMT' => 'Tổng thuế giao hàng',
  'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Tổng thuế giao hàng (USD)',
  'LBL_ORDER_DATE' => 'Ngày đơn hàng',
  'LBL_ORDER_EXPECTED_SHIPPING_DATE' => 'Ngày giao hàng dự kiến',
  'LBL_ORDER_TRUE_SHIPPING_DATE' => 'Ngày giao hàng thực tế',
  'LBL_ORDER_STATUS' => 'Tình trạng đơn hàng',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Tiểu bang',
  'LBL_ORDER_ADDRESS_CITY' => 'Thành phố',
  'LBL_TOTAL_AMOUNT' => 'Tổng cộng',
  'LBL_TOTAL_AMOUNT_USDOLLAR' => 'Tổng cộng (USD)',
  'LBL_EDITVIEW_PANEL1' => 'Đơn hàng đến',
  'LBL_EDITVIEW_PANEL2' => 'New Panel 2',
  'LBL_SHIPPING_AMOUNT' => 'Phí giao hàng',
  'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Phí giao hàng (USD)',
);