<?php
/** 
*
* acp_modules [Vietnamese]
*
* @package language
* @version $Id: modules.php,v 1.06 2006/11/11 13:35:00 nedka Exp $
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
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Công cụ này cho phép bạn quản lý tất cả các loại module trong hệ thống. Cần lưu ý rằng bảng điều khiển của quản trị viên có cấu trúc menu đến ba cấp (Nhóm module -> Nhóm module -> Module) nhờ đó mà các module khác có cấu trúc menu hai cấp (Nhóm module -> Module) mới được giữ lại bên trong. Hãy cẩn thận vì bạn có thể làm hư hỏng toàn bộ các menu trong bảng điều khiển của quản trị viên và mất chức năng điều khiển nếu bạn vô hiệu hay xóa các module có nhiệm vụ quản lý cho các module khác và cả chính nó.',
	'ADD_MODULE'					=> 'Thêm module',
	'ADD_MODULE_CONFIRM'			=> 'Bạn có chắc chắn muốn thêm vào module với chế độ đã chọn?',
	'ADD_MODULE_TITLE'				=> 'Thêm vào module',

	'CANNOT_REMOVE_MODULE'	=> 'Không thể gỡ bỏ module này vì nó có chứa nhiều mục con. Hãy gở bỏ hoặc di chuyển tất cả các mục con trước khi thực hiện yêu cầu này.',
	'CATEGORY'				=> 'Nhóm module',
	'CHOOSE_MODE'			=> 'Chọn chế độ module',
	'CHOOSE_MODE_EXPLAIN'	=> 'Chọn những chế độ module được sử dụng.',
	'CHOOSE_MODULE'			=> 'Chọn module',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Chọn tập tin được thực thi bởi module này.',
	'CREATE_MODULE'			=> 'Tạo module mới',

	'DEACTIVATED_MODULE'	=> 'Module đã ngưng kích hoạt',
	'DELETE_MODULE'			=> 'Xoá module',
	'DELETE_MODULE_CONFIRM'	=> 'Bạn có chắc chắn muốn gỡ bỏ module này?',

	'EDIT_MODULE'			=> 'Sửa module',
	'EDIT_MODULE_EXPLAIN'	=> 'Bạn có thể thay đổi lại thiết lập của module tại đây',

	'HIDDEN_MODULE'			=> 'Module ẩn',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Module đã được tạo thành công.',
	'MODULE_DELETED'			=> 'Module đã được gỡ bỏ thành công.',
	'MODULE_DISPLAYED'			=> 'Module đã hiển thị',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Nếu bạn không muốn hiển thị module này nhưng vẫn muốn sử dụng chức năng của nó, hãy chọn không hiển thị module tại đây.',
	'MODULE_EDITED'				=> 'Module đã được sửa thành công.',
	'MODULE_ENABLED'			=> 'Module đã kích hoạt',
	'MODULE_LANGNAME'			=> 'Tên ngôn ngữ module',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Nhập vào tên ngôn ngữ mà module sẽ được hiển thị. Sử dụng tên hằng ngôn ngữ để nhập vào nếu tên này đã được xác trong tập tin ngôn ngữ.',
	'MODULE_TYPE'				=> 'Loại module',

	'NO_CATEGORY_TO_MODULE'	=> 'Không thể thay đổi nhóm module trở thành module. Hãy gở bỏ hoặc di chuyển tất cả các mục con trước khi thực hiện yêu cầu này.',
	'NO_MODULE'				=> 'Không tìm thấy module.',
	'NO_MODULE_ID'			=> 'Không có module nào được xác định.',
	'NO_MODULE_LANGNAME'	=> 'Không có tên ngôn ngữ module nào được xác định.',
	'NO_PARENT'				=> 'Không có thư mục chính',

	'PARENT'				=> 'Thư mục chính',
	'PARENT_NO_EXIST'		=> 'Thư mục chính không tồn tại.',

	'SELECT_MODULE'			=> 'Chọn một module',
));

?>