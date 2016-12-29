<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_first_name' => 'LBL_LIST_FIRST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_title' => 'LBL_LIST_TITLE', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Mô tả Khách hàng',
    'LBL_ACCOUNT_ID' => 'ID Khách hàng',
    'LBL_ACCOUNT_NAME' => 'Tên Khách hàng:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Các hoạt động',
    'LBL_ADD_BUSINESSCARD' => 'Thêm Business Card',
    'LBL_ADDRESS_INFORMATION' => 'Thông tin địa chỉ',
    'LBL_ALT_ADDRESS_CITY' => 'Thành phố',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Quốc gia',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Mã bưu chính',
    'LBL_ALT_ADDRESS_STATE' => 'Tiểu bang',
    'LBL_ALT_ADDRESS_STREET_2' => 'Địa chỉ 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Địa chỉ 3',
    'LBL_ALT_ADDRESS_STREET' => 'Địa chỉ',
    'LBL_ALTERNATE_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ALT_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ANY_ADDRESS' => 'Địa chỉ bất kỳ:',
    'LBL_ANY_EMAIL' => 'Email bất kỳ:',
    'LBL_ANY_PHONE' => 'Điện thoại bất kỳ:',
    'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
    'LBL_ASSIGNED_TO_ID' => 'Người được chỉ định:',
    'LBL_BACKTOLEADS' => 'Trở về Đầu mối',
    'LBL_BUSINESSCARD' => 'Chuyển đổi',
    'LBL_CITY' => 'Thành phố:',
    'LBL_CONTACT_ID' => 'ID Liên hệ',
    'LBL_CONTACT_INFORMATION' => 'Xem tổng quát',
    'LBL_CONTACT_NAME' => 'Tên Đầu mối:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Đầu mối-Cơ hội:',
    'LBL_CONTACT_ROLE' => 'Vai trò:',
    'LBL_CONTACT' => 'Đầu mối:',
    'LBL_CONVERTED_ACCOUNT' => 'Khách hàng đã được chuyển đổi:',
    'LBL_CONVERTED_CONTACT' => 'Liên hệ đã được chuyển đổi:',
    'LBL_CONVERTED_OPP' => 'Cơ hội đã được chuyển đổi:',
    'LBL_CONVERTED' => 'Đã chuyển đổi',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Chuyển đổi',
    'LBL_CONVERTLEAD' => 'Chuyển đổi Đầu mối',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: The status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Possible Contact: ',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_CREATED_NEW' => 'Đã tạo cái mới',
    'LBL_CREATED_ACCOUNT' => 'Đã tạo Khách hàng mới',
    'LBL_CREATED_CALL' => 'Đã tạo Cuộc gọi mới',
    'LBL_CREATED_CONTACT' => 'Đã tạo Liên hệ mới',
    'LBL_CREATED_MEETING' => 'Đã tạo Hội họp mới',
    'LBL_CREATED_OPPORTUNITY' => 'Đã tạo Cơ hội mới',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Đầu mối',
    'LBL_DEPARTMENT' => 'Phòng ban:',
    'LBL_DESCRIPTION_INFORMATION' => 'Thông tin mô tả',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_DO_NOT_CALL' => 'Xin đừng gọi:',
    'LBL_DUPLICATE' => 'Đầu mối tương tự',
    'LBL_EMAIL_ADDRESS' => 'Địa chỉ Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Chọn Khách hàng hiện hữu',
    'LBL_EXISTING_CONTACT' => 'Chọn Liên hệ hiện hữu',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Ho:',
    'LBL_FULL_NAME' => 'Tên đầy đủ:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',
    'LBL_HOME_PHONE' => 'Điện thoại nhà:',
    'LBL_IMPORT_VCARD' => 'Nhập vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new lead by importing a vCard from your file system.',
    'LBL_INVALID_EMAIL' => 'Email không tồn tại:',
    'LBL_INVITEE' => 'Báo cáo trực tiếp',
    'LBL_LAST_NAME' => 'Tên:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Mô tả nguồn Đầu mối:',
    'LBL_LEAD_SOURCE' => 'Nguồn đầu mối:',
    'LBL_LIST_ACCEPT_STATUS' => 'Tình trạng chấp nhận',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên Khách hàng',
    'LBL_LIST_CONTACT_NAME' => 'Tên Đầu mối',
    'LBL_LIST_CONTACT_ROLE' => 'Vai trò',
    'LBL_LIST_DATE_ENTERED' => 'Ngày tạo',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emails',
    'LBL_LIST_FIRST_NAME' => 'Họ',
    'LBL_VIEW_FORM_TITLE' => 'Xem Đầu mối',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Đầu mối',
    'LBL_LIST_LAST_NAME' => 'Tên',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Mô tả nguồn Đầu mối',
    'LBL_LIST_LEAD_SOURCE' => 'Nguồn đầu mối',
    'LBL_LIST_MY_LEADS' => 'Đầu mối',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_PHONE' => 'Điện thoại VP',
    'LBL_LIST_REFERED_BY' => 'Tham khảo bởi',
    'LBL_LIST_STATUS' => 'Tình trạng',
    'LBL_LIST_TITLE' => 'Chức danh',
    'LBL_MOBILE_PHONE' => 'Di động:',
    'LBL_MODULE_NAME' => 'Đầu mối',
    'LBL_MODULE_TITLE' => 'Đầu mối: Tr.chính',
    'LBL_NAME' => 'Tên:',
    'LBL_NEW_FORM_TITLE' => 'Đầu mối mới',
    'LBL_NEW_PORTAL_PASSWORD' => 'Mật khẩu portal mới:',
    'LBL_OFFICE_PHONE' => 'Điện thoại VP:',
    'LBL_OPP_NAME' => 'Tên Cơ hội:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Trị giá:',
    'LBL_OPPORTUNITY_ID' => 'ID Cơ hội',
    'LBL_OPPORTUNITY_NAME' => 'Tên Cơ hội:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email khác:',
    'LBL_OTHER_PHONE' => 'Điện thoại khác:',
    'LBL_PHONE' => 'Điện thoại:',
    'LBL_PORTAL_ACTIVE' => 'Hoạt động:',
    'LBL_PORTAL_APP' => 'Ứng dụng',
    'LBL_PORTAL_INFORMATION' => 'Thông tin',
    'LBL_PORTAL_NAME' => 'Tên:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Mật khẩu đã được thiết lập:',
    'LBL_POSTAL_CODE' => 'Mã bưu chính:',
    'LBL_STREET' => 'Địa chỉ',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Thành phố',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Quốc gia',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Mã bưu chính',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Tiểu bang',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Địa chỉ 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Địa chỉ 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Địa chỉ chính',
    'LBL_PRIMARY_ADDRESS' => 'Địa chỉ chính:',
    'LBL_REFERED_BY' => 'Được tham chiếu bởi:',
    'LBL_REPORTS_TO_ID' => 'Báo cáo cho ID',
    'LBL_REPORTS_TO' => 'Báo cáo cho:',
    'LBL_REPORTS_FROM' => 'Reports From:',
    'LBL_SALUTATION' => 'Xưng hô',
    'LBL_MODIFIED' => 'Sửa bởi',
    'LBL_MODIFIED_ID' => 'Sửa bởi Id',
    'LBL_CREATED' => 'Tạo bởi',
    'LBL_CREATED_ID' => 'Tạo bởi Id',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Đầu mối',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Chọn lựa Đầu mối',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Chọn lựa Đầu mối',
    'LBL_STATE' => 'Tiểu bang:',
    'LBL_STATUS_DESCRIPTION' => 'Mô tả trạng thái:',
    'LBL_STATUS' => 'Trạng thái:',
    'LBL_TITLE' => 'Chức danh:',
    'LNK_IMPORT_VCARD' => 'Tạo Đầu mối từ vCard',
    'LNK_LEAD_LIST' => 'Xem Đầu mối',
    'LNK_NEW_ACCOUNT' => 'Tạo Khách hàng',
    'LNK_NEW_APPOINTMENT' => 'Tạo Cuộc hẹn',
    'LNK_NEW_CONTACT' => 'Tạo Liên hệ',
    'LNK_NEW_LEAD' => 'Tạo Đầu mối',
    'LNK_NEW_NOTE' => 'Tạo Ghi chú',
    'LNK_NEW_TASK' => 'Tạo Tác vụ',
    'LNK_NEW_CASE' => 'Tạo Vụ việc',
    'LNK_NEW_CALL' => 'Log Cuộc gọi',
    'LNK_NEW_MEETING' => 'Lịch trình Hội họp',
    'LNK_NEW_OPPORTUNITY' => 'Tạo Cơ hội',
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Chọn khách hàng',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copy địa chỉ phụ sang địa chỉ chính',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copy địa chỉ chính sang địa chỉ phụ',
    'NTC_DELETE_CONFIRMATION' => 'Bạn có muốn xóa bản ghi này?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Creating an opportunity requires an account.\n Please either create a new one or select an existing one.',
    'NTC_REMOVE_CONFIRMATION' => 'Bạn có muốn loại bỏ Đầu mối từ Vụ việc này?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Are you sure you want to remove this record as a direct report?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Chiến dịch',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Chiến dịch thành công:',
    'LBL_TARGET_BUTTON_LABEL' => 'Đối tượng',
    'LBL_TARGET_BUTTON_TITLE' => 'Đối tượng',
    'LBL_TARGET_BUTTON_KEY' => 'Mục tiêu',
    'LBL_CAMPAIGN' => 'Chiến dịch:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Người được chỉ định',
    'LBL_PROSPECT_LIST' => 'Danh sách Tiềm năng',
    'LBL_CAMPAIGN_LEAD' => 'Chiến dịch',
    'LBL_BIRTHDATE' => 'Ngày sinh:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Cảm ơn bạn.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'We are sorry, the server is currently unavailable, please try again later.',
    'LBL_ASSISTANT_PHONE' => 'Điện thoại trợ lý',
    'LBL_ASSISTANT' => 'Trợ lý',
    'LBL_REGISTRATION' => 'Đăng ký',
    'LBL_MESSAGE' => 'Please enter your information below. Information and/or an account will be created for you pending approval.',
    'LBL_SAVED' => 'Thank you for registering. Your account will be created and someone will contact you shortly.',
    'LBL_CLICK_TO_RETURN' => 'Trở về Portal',
    'LBL_CREATED_USER' => 'Người tạo',
    'LBL_MODIFIED_USER' => 'Người sửa',
    'LBL_CAMPAIGNS' => 'Chiến dịch',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Chiến dịch',
    'LBL_CONVERT_MODULE_NAME' => 'Chức năng',
    'LBL_CONVERT_REQUIRED' => 'Yêu cầu',
    'LBL_CONVERT_SELECT' => 'Cho phép chọn lựa',
    'LBL_CONVERT_COPY' => 'Copy Data',
    'LBL_CONVERT_EDIT' => 'Sửa',
    'LBL_CONVERT_DELETE' => 'Xóa',
    'LBL_CONVERT_ADD_MODULE' => 'Thêm Chức năng',
    'LBL_CREATE' => 'Tạo',
    'LBL_SELECT' => ' <b>OR</b> Chọn',
    'LBL_WEBSITE' => 'Trang web',
    'LNK_IMPORT_LEADS' => 'Nhập Đầu mối',
    'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Notice: The current Convert Lead screen contains custom fields. When you customize the Convert Lead screen in Studio for the first time, you will need to add custom fields to the layout, as necessary. The custom fields will not automatically appear in the layout, as they did previously.',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'The module to create a new record in.',
    'LBL_REQUIRED_TIP' => 'Required modules must be created or selected before the lead can be converted.',
    'LBL_COPY_TIP' => 'If checked, fields from the lead will be copied to fields with the same name in the newly created records.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Move Activities to',
    'LBL_ACTIVITIES_COPY' => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_PHONE_HOME' => 'Phone Home',
    'LBL_PHONE_MOBILE' => 'Phone Mobile',
    'LBL_PHONE_WORK' => 'Phone Work',
    'LBL_PHONE_OTHER' => 'Phone Other',
    'LBL_PHONE_FAX' => 'Phone Fax',
    'LBL_CAMPAIGN_ID' => 'ID Chiến dịch',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
    'LBL_EXPORT_CREATED_BY' => 'Created By ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobile Phone',
    'LBL_EXPORT_EMAIL2' => 'Other Email Address',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Nhập vào ngày' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Sửa' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
    'LBL_WWW' => 'WWW',
);
?>
