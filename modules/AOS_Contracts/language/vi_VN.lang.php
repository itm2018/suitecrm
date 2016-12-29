<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

$mod_strings = array (
    'LBL_ASSIGNED_TO_NAME' => 'Quản lý hợp đồng',
    'LBL_CONTRACT_ACCOUNT' => 'Tài khoản',
    'LBL_OPPORTUNITY' => 'Cơ hội',
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
    'LBL_NAME' => 'Contract Title',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_NAME' => 'tên',
    'LBL_LIST_FORM_TITLE' => 'Contracts List',
    'LBL_MODULE_NAME' => 'Hợp đồng',
    'LBL_MODULE_TITLE' => 'Contracts: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Contracts',
    'LNK_NEW_RECORD' => 'Create Contract',
    'LNK_LIST' => 'View Contracts',
    'LNK_IMPORT_AOS_CONTRACTS' => 'Import Contracts',
    'LBL_SEARCH_FORM_TITLE' => 'Search Contracts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => 'Hợp đồng',
    'LBL_NEW_FORM_TITLE' => 'New Contract',
    'LBL_CONTRACT_NAME' => 'Contract Name',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'Ngày bắt đầu',
    'LBL_END_DATE' => 'Ngày kết thúc',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Contract Value',
    'LBL_STATUS' => 'Tình trạng',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Customer Signed Date',
    'LBL_COMPANY_SIGNED_DATE' => 'Company Signed Date',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renewal Reminder Date',
    'LBL_CONTRACT_TYPE' => 'Contract Type',
    'LBL_CONTACT' => 'Danh sách liên hệ',
    'LBL_ADD_GROUP' => 'Thêm nhóm',
    'LBL_DELETE_GROUP' => 'Xóa nhóm',
    'LBL_GROUP_NAME' => 'Tên nhóm',
    'LBL_GROUP_TOTAL' => 'Tổng của nhóm',
    'LBL_PRODUCT_QUANITY' => 'Số lượng',
    'LBL_PRODUCT_NAME' => 'Sản phẩm',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Ghi chú',
    'LBL_PRODUCT_DESCRIPTION' => 'Mô tả',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_TYPE' => 'Loại',
    'LBL_DISCOUNT_AMT' => 'Giảm giá',
    'LBL_UNIT_PRICE' => 'Giá bán',
    'LBL_TOTAL_PRICE' => 'Tổng',
    'LBL_VAT' => 'Thuế',
    'LBL_VAT_AMT' => 'Thuế tổng',
    'LBL_SERVICE_NAME' => 'Dịch vụ',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Giá bán',
    'LBL_SERVICE_DISCOUNT' => 'Giảm giá',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_SUBTOTAL_AMOUNT' => 'Giá chưa thuế',
    'LBL_DISCOUNT_AMOUNT' => 'Giảm giá',
    'LBL_TAX_AMOUNT' => 'Thuế',
    'LBL_SHIPPING_AMOUNT' => 'Phí giao hàng',
    'LBL_TOTAL_AMT' => 'Tổng',
    'LBL_GRAND_TOTAL' => 'Tổng cộng',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_ADD_PRODUCT_LINE' => 'Thêm dòng sản phẩm',
    'LBL_ADD_SERVICE_LINE' => 'Thêm dòng dịch vụ ',
    'LBL_PRINT_AS_PDF' => 'In ra PDF',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'Hợp đồng',
    'LBL_EMAIL_NAME' => 'Hợp đồng cho',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Contract template, go to the PDF templates module and create one',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Contract Value (Default Currency)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Tổng (Default Currency)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Tổng cộng (Default Currency)',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line item groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Báo giá sản phẩm',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Báo giá : Hợp đồng',
    'LBL_AOS_CONTRACTS' => 'Hợp đồng',
);
?>
