<?php
/**
*
* acp/extensions [Vietnamese]
*
* @package language
* @version 2.00
* @copyright (c) 2013 nedka
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Website',
	'AUTHOR_INFORMATION'	=> 'Thông tin tác giả',
	'AUTHOR_NAME'			=> 'Tên',
	'AUTHOR_ROLE'			=> 'Chức vụ',

	'CLEAN_NAME'	=> 'Xóa tên',

	'DESCRIPTION'	=> 'Giới thiệu',
	'DETAILS'		=> 'Thông tin chi tiết',
	'DISPLAY_NAME'	=> 'Tên hiển thị',

	'EXT_DETAILS'						=> 'Thông tin gói cài đặt',
	'EXTENSION'							=> 'Phần mở rộng',
	'EXTENSION_ACTIONS'					=> 'Thao tác',
	'EXTENSION_DELETE_DATA'				=> 'Xóa dữ liệu',
	'EXTENSION_DELETE_DATA_CONFIRM'		=> 'Bạn có chắc chắn muốn xóa dữ liệu được tạo ra bởi “%s”?<br /><br />Mọi dữ liệu và thiết lập đã xóa sẽ không thể phục hồi lại!',
	'EXTENSION_DELETE_DATA_EXPLAIN'		=> 'Thao tác này sẽ xóa sạch mọi tập tin hay thiết lập mà phần mở rộng đã tạo ra. Các tập tin ban đầu của phần mở rộng vẫn được giữ lại, vì thế bạn có thể cài đặt lại nếu muốn.',
	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Dữ liệu của phần mở rộng đang được xóa. Vui lòng đừng đóng hay nạp lại trang này cho đến khi hoàn tất.',
	'EXTENSION_DELETE_DATA_SUCCESS'		=> 'Dữ liệu của phần mở rộng đã được xóa thành công.',
	'EXTENSION_DISABLE'					=> 'Vô hiệu',
	'EXTENSION_DISABLE_CONFIRM'			=> 'Bạn có chắc chắn muốn vô hiệu phần mở rộng “%s”?',
	'EXTENSION_DISABLE_EXPLAIN'			=> 'Việc vô hiệu sẽ không xóa đi các tập tin, dữ liệu hay thiết lập của một phần mở rộng, nhưng các chức năng của nó sẽ không còn hoạt động.',
	'EXTENSION_DISABLE_IN_PROGRESS'		=> 'Phần mở rộng đang được vô hiệu. Vui lòng đừng đóng hay nạp lại trang này cho đến khi hoàn tất.',
	'EXTENSION_DISABLE_SUCCESS'			=> 'Phần mở rộng đã được vô hiệu thành công.',
	'EXTENSION_ENABLE'					=> 'Cài đặt',
	'EXTENSION_ENABLE_CONFIRM'			=> 'Bạn có chắc chắn muốn cài đặt phần mở rộng “%s”?',
	'EXTENSION_ENABLE_EXPLAIN'			=> 'Bạn phải cài đặt một phần mở rộng trước khi có thể sử dụng chức năng của nó trên hệ thống.',
	'EXTENSION_ENABLE_IN_PROGRESS'		=> 'Phần mở rộng đang được cài đặt. Vui lòng đừng đóng hay nạp lại trang này cho đến khi hoàn tất.',
	'EXTENSION_ENABLE_SUCCESS'			=> 'Phần mở rộng đã được bật thành công.',
	'EXTENSION_INVALID_LIST'			=> 'Phần mở rộng “%s” không hợp lệ.<br />%s<br /><br />',
	'EXTENSION_NAME'					=> 'Tên phần mở rộng',
	'EXTENSION_NOT_AVAILABLE'			=> 'Phần mở rộng đã chọn không thể sử dụng trên hệ thống này. Bạn hãy vui lòng kiểm tra lại phiên bản phpBB cũng như PHP được hỗ trợ bên dưới.',
	'EXTENSION_OPTIONS'					=> 'Tùy chọn',
	'EXTENSIONS'						=> 'Phần mở rộng',
	'EXTENSIONS_ADMIN'					=> 'Quản lí phần mở rộng',
	'EXTENSIONS_DISABLED'				=> 'Phần mở rộng đã vô hiệu',
	'EXTENSIONS_ENABLED'				=> 'Phần mở rộng đang dùng',
	'EXTENSIONS_EXPLAIN'				=> 'Công cụ quản lí phần mở rộng giúp bạn dễ dàng cài đặt, xem thông tin yêu cầu cũng như vô hiệu các chức năng mới bổ sung cho hệ thống phpBB của mình.',

	'HOMEPAGE'	=> 'Trang chủ',

	'LICENCE'	=> 'Bản quyền',

	'PATH'			=> 'Đường dẫn tập tin',
	'PHP_VERSION'	=> 'Phiên bản PHP',
	'PHPBB_VERSION'	=> 'Phiên bản phpBB',

	'REQUIREMENTS'				=> 'Yêu cầu',
	'RETURN_TO_EXTENSION_LIST'	=> 'Quay về danh sách phần mở rộng',

	'TIME'	=> 'Ngày phát hành',
	'TYPE'	=> 'Loại',

	'VERSION'	=> 'Phiên bản',
));
