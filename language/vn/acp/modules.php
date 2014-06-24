<?php
/** 
*
* acp_modules [Vietnamese]
*
* @package language
* @version $Id: modules.php,v 1.03 2006/06/26 11:47:00 nedka Exp $
* @copyright (c) 2006 phpBBVietNam Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*
* Vietnamese Language Pack for phpBB3
* 
* phpBB iVN (phpBB in Vietnamese) Project
* Translated by phpBBVietNam Group [ The Vietnamize Team ]
* Translators in this file: nedka (Nguyen Dang Khoa)
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE 
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Công cụ này cho phép bạn quản lý tất cả các loại moduel trong hệ thống. Lưu ý rằng nếu bạn sắp xếp các moduel giống nhau trong những nhóm moduel khác nhau thì nhóm moduel được chọn là nhóm đầu tiên được tìm thấy trong nhánh hiển thị.',
	'ADD_MODULE'					=> 'Thêm moduel',
	'ADD_MODULE_CONFIRM'			=> 'Bạn có chắc chắn muốn thêm vào moduel với chế độ đã chọn?',
	'ADD_MODULE_TITLE'				=> 'Thêm vào moduel',

	'CANNOT_REMOVE_MODULE'	=> 'Không thể gỡ bỏ module này vì nó có chứa nhiều mục con. Hãy gở bỏ hoặc di chuyển tất cả các mục con trước khi thực hiện yêu cầu này.',
	'CATEGORY'				=> 'Nhóm moduel',
	'CHOOSE_MODE'			=> 'Chọn chế độ moduel',
	'CHOOSE_MODE_EXPLAIN'	=> 'Chọn những chế độ moduel được sử dụng.',
	'CHOOSE_MODULE'			=> 'Chọn module',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Chọn tập tin được thực thi bởi moduel này.',
	'CREATE_MODULE'			=> 'Tạo moduel mới',

	'DEACTIVATED_MODULE'	=> 'Module đã ngưng kích hoạt',
	'DELETE_MODULE'			=> 'Xoá module',
	'DELETE_MODULE_CONFIRM'	=> 'Bạn có chắc chắn muốn gỡ bỏ moduel này?',

	'EDIT_MODULE'			=> 'Sửa module',
	'EDIT_MODULE_EXPLAIN'	=> 'Bạn có thể thay đổi lại thiết lập của moduel tại đây',

	'HIDDEN_MODULE'			=> 'Module ẩn',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Module đã được tạo thành công',
	'MODULE_DELETED'			=> 'Module đã được gỡ bỏ thành công',
	'MODULE_DISPLAYED'			=> 'Module đã được hiển thị thành công',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Nếu bạn không muốn hiển thị moduel này nhưng vẫn muốn sử dụng chức năng của nó, hãy chọn không hiển thị moduel tại đây.',
	'MODULE_EDITED'				=> 'Module đã được sửa thành công',
	'MODULE_ENABLED'			=> 'Module đã được kích hoạt',
	'MODULE_LANGNAME'			=> 'Tên ngôn ngữ moduel',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Nhập vào tên ngôn ngữ mà moduel sẽ được hiển thị. Sử dụng tên hằng ngôn ngữ để nhập vào nếu tên này đã được xác trong tập tin ngôn ngữ.',
	'MODULE_TYPE'				=> 'Loại moduel',

	'NO_CATEGORY_TO_MODULE'	=> 'Không thể thay đổi nhóm moduel trở thành module. Hãy gở bỏ hoặc di chuyển tất cả các mục con trước khi thực hiện yêu cầu này.',
	'NO_MODULE'				=> 'Không tìm thấy moduel',
	'NO_MODULE_ID'			=> 'Không có moduel nào được xác định',
	'NO_MODULE_LANGNAME'	=> 'Không có tên ngôn ngữ moduel nào được xác định',
	'NO_PARENT'				=> 'Không có thư mục chính',

	'PARENT'				=> 'Thư mục chính',
	'PARENT_NO_EXIST'		=> 'Thư mục chính không tồn tại',

	'SELECT_MODULE'			=> 'Chọn một module',
));

?>