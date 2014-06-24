<?php
/**
*
* acp/extensions [Vietnamese]
*
* @package language
* @version 1.00
* @copyright (c) 2006 nedka
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

/**
* DEVELOPERS PLEASE NOTE
*
* All language files should use UTF-8 as their encoding and the files must not contain a BOM.
*
* Placeholders can now contain order information, e.g. instead of
* 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
* translators to re-order the output of data while ensuring it remains correct
*
* You do not need this where single placeholders are used, e.g. 'Message %d' is fine
* equally where a string contains only two placeholders which are used to wrap text
* in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
*
* Some characters you may want to copy & paste:
* ’ » “ ” …
*/


$lang = array_merge($lang, array(
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Trang chủ',
	'AUTHOR_INFORMATION'	=> 'Thông tin tác giả',
	'AUTHOR_NAME'			=> 'Tên',
	'AUTHOR_ROLE'			=> 'Công việc',
	'AVAILABLE'				=> 'Có thể dùng',

	'CLEAN_NAME'	=> 'Tên đóng gói',

	'DELETE_EXPLAIN'		=> 'Xóa phần mở rộng sẽ xóa sạch hoàn toàn thiết lập lẫn tập tin của phần mở rộng đó. Các bản ghi nhận từ phần mở rộng vẫn còn trên hệ thống, dù các biến ngôn ngữ đã không còn.',
	'DESCRIPTION'			=> 'Giới thiệu',
	'DETAILS'				=> 'Chi tiết',
	'DISABLE'				=> 'Vô hiệu',
	'DISABLE_CONFIRM'		=> 'Bạn có chắc chắn muốn vô hiệu phần mở rộng này?',
	'DISABLE_EXPLAIN'		=> 'Vô hiệu phần mở rộng để gỡ bỏ chức năng của nó trong hệ thống nhưng vẫn giữa lại các tập tin và thiết lập liên quan.',
	'DISABLE_FAIL'			=> 'Không thể vô hiệu phần mở rộng',
	'DISABLE_IN_PROGRESS'	=> 'Phần mở rộng đang được vô hiệu, vui lòng đừng rời khỏi trang này cho đến khi hoàn tất.',
	'DISABLED'				=> 'Đã vô hiệu',
	'DISPLAY_NAME'			=> 'Tên',

	'ENABLE'					=> 'Cài đặt',
	'ENABLE_CONFIRM'			=> 'Bạn có chắc chắn muốn sử dụng phần mở rộng này?',
	'ENABLE_EXPLAIN'			=> 'Cài đặt phần mở rộng cho phép bạn sử dụng chức năng của nó trong hệ thống.',
	'ENABLE_FAIL'				=> 'Không thể cài đặt phần mở rộng',
	'ENABLE_IN_PROGRESS'		=> 'Phần mở rộng đang được cài đặt, vui lòng đừng rời khỏi trang này cho đến khi hoàn tất.',
	'DISABLE_SUCCESS'			=> 'Phần mở rộng đã được vô hiệu thành công.',
	'ENABLE_SUCCESS'			=> 'Phần mở rộng đã được cài đặt thành công.',
	'ENABLED'					=> 'Đang sử dụng',
	'EXT_DETAILS'				=> 'Thông tin chi tiết',
	'EXTENSION'					=> 'Phần mở rộng',
	'EXTENSION_ACTIONS'			=> 'Thao tác',
	'EXTENSION_INVALID_LIST'	=> 'Phần mở rộng “%s” không hợp lệ.<br /><p>%s</p>',
	'EXTENSION_NAME'			=> 'Tên phần mở rộng',
	'EXTENSION_NOT_AVAILABLE'	=> 'Phần mở rộng bạn chọn không thể sử dụng trên hệ thống, hãy vui lòng kiểm tra lại phiên bản phpBB và phiên bản PHP mà nó hỗ trợ.',
	'EXTENSION_OPTIONS'			=> 'Tùy chọn',
	'EXTENSIONS'				=> 'Phần mở rộng',
	'EXTENSIONS_ADMIN'			=> 'Cài đặt phần mở rộng',
	'EXTENSIONS_EXPLAIN'		=> 'Công cụ cài đặt phần mở rộng cho phép bạn xem thông tin và cài đặt các phần mở rộng chức năng cho hệ thống phpBB của mình.',

	'HOMEPAGE'	=> 'Trang chủ',

	'LICENCE'	=> 'Bản quyền',

	'PATH'				=> 'Đường dẫn',
	'PHP_VERSION'		=> 'Phiên bản PHP',
	'PHPBB_VERSION'		=> 'Phiên bản phpBB',
	'PURGE'				=> 'Gỡ bỏ',
	'PURGE_CONFIRM'		=> 'Bạn có chắc chắn muốn gỡ bỏ toàn bộ phần mở rộng này? Thao tác này sẽ xóa sạch mọi thiết lập liên quan đến phần mở rộng này và không thể phục hồi!',
	'PURGE_EXPLAIN'		=> 'Gỡ bỏ phần mở rộng sẽ xóa sạch các thiết lập liên quan nhưng vẫn giữ lại các tập tin cài đặt.',
	'PURGE_FAIL'		=> 'Không thể gỡ bỏ phần mở rộng',
	'PURGE_IN_PROGRESS'	=> 'Phần mở rộng đang được gỡ bỏ, vui lòng đừng rời khỏi trang này cho đến khi hoàn tất.',
	'PURGE_SUCCESS'		=> 'Phần mở rộng đã được gỡ bỏ thành công.',
	'PURGED'			=> 'Đã gỡ bỏ',

	'REQUIREMENTS'	=> 'Yêu cầu',
	'RETURN'		=> 'Quay về',

	'TIME'	=> 'Ngày phát hành',
	'TYPE'	=> 'Loại',

	'UPLOADED'	=> 'Đã tải lên',

	'VERSION'	=> 'Phiên bản',

	'WARNING'	=> 'Cảnh báo',
));
