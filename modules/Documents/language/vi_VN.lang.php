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
	//module
	'LBL_MODULE_NAME' => 'Tài liệu',
	'LBL_MODULE_TITLE' => 'Tài liệu: Home',
	'LNK_NEW_DOCUMENT' => 'Tạo Tài liệu',
	'LNK_DOCUMENT_LIST'=> 'Xem Tài liệu',
	'LBL_DOC_REV_HEADER' => 'Bản sửa Tài liệu',
	'LBL_SEARCH_FORM_TITLE'=> 'Tìm kiếm Tài liệu',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'ID Tài liệu',
	'LBL_NAME' => 'Tên Tài liệu',
	'LBL_DESCRIPTION' => 'Mô tả',
	'LBL_CATEGORY' => 'Chủng loại',
	'LBL_SUBCATEGORY' => 'Mục',
	'LBL_STATUS' => 'Tình trạng',
	'LBL_CREATED_BY'=> 'Tạo bởi',
	'LBL_DATE_ENTERED'=> 'Ngày tạo',
	'LBL_DATE_MODIFIED'=> 'Ngày sửa',
	'LBL_DELETED' => 'Đã xóa',
	'LBL_MODIFIED'=> 'Sửa bởi ID',
	'LBL_MODIFIED_USER' => 'Sửa bởi',
	'LBL_CREATED'=> 'Tạo bởi',
	'LBL_REVISIONS'=>'Bản sửa',
	'LBL_RELATED_DOCUMENT_ID'=>'ID Tài liệu liên quan',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID Bản sửa Tài liệu liên quan',
	'LBL_IS_TEMPLATE'=>'làm Mẫu',
	'LBL_TEMPLATE_TYPE'=>'Loại Tài liệu',
	'LBL_ASSIGNED_TO_NAME'=>'Chỉ định cho:',
	'LBL_REVISION_NAME' => 'Số Bản sửa',
	'LBL_MIME' => 'Loại Mime',
	'LBL_REVISION' => 'Bản sửa',
	'LBL_DOCUMENT' => 'Tài liệu liên quan',
	'LBL_LATEST_REVISION' => 'Bản sửa cuối cùng',
	'LBL_CHANGE_LOG'=> 'Log Thay đổi',
	'LBL_ACTIVE_DATE'=> 'Ngày phát hành',
	'LBL_EXPIRATION_DATE' => 'Ngày hết hạn',
	'LBL_FILE_EXTENSION'  => 'Tập tin mở rộng',
	'LBL_LAST_REV_MIME_TYPE' => 'Last revision MIME type',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Không xác định',
    'LBL_HOMEPAGE_TITLE' => 'Tài liệu',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Tài liệu mới',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Tên Tài liệu:',
	'LBL_FILENAME' => 'Tên File:',
	'LBL_LIST_FILENAME' => 'Tập tin:',
	'LBL_DOC_VERSION' => 'Phiên bản:',
	'LBL_FILE_UPLOAD' => 'Tập tin:',

	'LBL_CATEGORY_VALUE' => 'Chủng loại:',
	'LBL_LIST_CATEGORY' => 'Chủng loại',
	'LBL_SUBCATEGORY_VALUE'=> 'Mục:',
	'LBL_DOC_STATUS'=> 'Tình trạng:',
	'LBL_LAST_REV_CREATOR' => 'Bản sửa tạo bởi:',
	'LBL_LASTEST_REVISION_NAME' => 'Tên Bản sửa cuối:',
	'LBL_SELECTED_REVISION_NAME' => 'Tên Bản sửa được chọn:',
	'LBL_CONTRACT_STATUS' => 'Tình trạng Hợp đồng:',
	'LBL_CONTRACT_NAME' => 'Tên Hợp đồng:',
	'LBL_LAST_REV_DATE' => 'Ngày Bản sửa:',
	'LBL_DOWNNLOAD_FILE'=> 'Download File:',
	'LBL_DET_RELATED_DOCUMENT'=>'Tài liệu liên quan:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Phiên bản Tài liệu liên quan:",
	'LBL_DET_IS_TEMPLATE'=>'Mẫu? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Loại Tài liệu:',
	'LBL_DOC_DESCRIPTION'=>'Mô tả:',
	'LBL_DOC_ACTIVE_DATE'=> 'Ngày phát hành:',
	'LBL_DOC_EXP_DATE'=> 'Ngày hết hạn:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'DS Tài liệu',
	'LBL_LIST_DOCUMENT' => 'Tài liệu',
	'LBL_LIST_SUBCATEGORY' => 'Mục',
	'LBL_LIST_REVISION' => 'Bản sửa',
	'LBL_LIST_LAST_REV_CREATOR' => 'phát hành bởi',
	'LBL_LIST_LAST_REV_DATE' => 'Ngày Bản sửa',
	'LBL_LIST_VIEW_DOCUMENT'=>'Xem',
    'LBL_LIST_DOWNLOAD'=> 'Tải về',
	'LBL_LIST_ACTIVE_DATE' => 'Ngày phát hành',
	'LBL_LIST_EXP_DATE' => 'Ngày hết hạn',
	'LBL_LIST_STATUS'=>'Tình trạng',
	'LBL_LINKED_ID' => 'Linked id',
	'LBL_SELECTED_REVISION_ID' => 'ID Bản sửa được chọn',
	'LBL_LATEST_REVISION_ID' => 'ID Bản sửa cuối cùng',
	'LBL_SELECTED_REVISION_FILENAME' => 'Tên file Bản sửa đã chọn',
	'LBL_FILE_URL' => 'File url',
    'LBL_REVISIONS_PANEL' => 'Chi tiết Bản sửa',
    'LBL_REVISIONS_SUBPANEL' => 'Bản sửa',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Tên Tài liệu:',
	'LBL_SF_CATEGORY' => 'Chủng loại:',
	'LBL_SF_SUBCATEGORY'=> 'Mục:',
	'LBL_SF_ACTIVE_DATE' => 'Ngày phát hành:',
	'LBL_SF_EXP_DATE'=> 'Ngày hết hạn:',

	'DEF_CREATE_LOG' => 'Tài liệu đã được tạo',

	//error messages
	'ERR_DOC_NAME'=>'Tên Tài liệu',
	'ERR_DOC_ACTIVE_DATE'=>'Ngày phát hành',
	'ERR_DOC_EXP_DATE'=> 'Ngày hết hạn',
	'ERR_FILENAME'=> 'Tên file',
	'ERR_DOC_VERSION'=> 'Phiên bản Tài liệu',
	'ERR_DELETE_CONFIRM'=> 'Bản có muốn xóa Tài liệu này?',
	'ERR_DELETE_LATEST_VERSION'=> 'Bạn không thể xóa được Tài liệu này.',
	'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Mẫu Mail Merge:',
	'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload.  Please retry uploading the file or contact your administrator.',

	'LBL_TREE_TITLE' => 'Tài liệu',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Tên',
	'LBL_LIST_IS_TEMPLATE'=>'Mẫu?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Loại Tài liệu',
	'LBL_LIST_SELECTED_REVISION'=>'Bản điều chỉnh đã chọn',
	'LBL_LIST_LATEST_REVISION'=>'Bản điều chỉnh cuối',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Hợp đồng liên quan',
	'LBL_LAST_REV_CREATE_DATE'=>'Ngày tạo bản sửa cuối',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Hợp đồng',
    'LBL_CREATED_USER' => 'Người tạo',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Bản sửa',
    'LBL_DOCUMENT_INFORMATION' => 'Xem toàn bộ Tài liệu',
	'LBL_DOC_ID' => 'ID Nguồn Tài liệu',
	'LBL_DOC_TYPE' => 'Nguồn',
	'LBL_LIST_DOC_TYPE' => 'Nguồn',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
	'LBL_DOC_URL' => 'Nguồn Tài liệu URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Tên file',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Tên file',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Khách hàng',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Cơ hội',
    'LBL_CASES_SUBPANEL_TITLE' => 'Vụ việc',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Lỗi',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Báo giá',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Sản phẩm',
	'LBL_AOS_CONTRACTS' => 'Hợp đồng',
);


?>
