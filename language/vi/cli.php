<?php
/** 
*
* cli [Vietnamese]
*
* @package language
* @version 1.02
* @copyright (c) 2014 nedka
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Bật tùy chọn này nếu mục cấu hình có sự thay đổi giá trị liên tục, không cần tạo bộ đệm.',
	'CLI_CONFIG_CURRENT'				=> 'Giá trị hiện tại của mục cấu hình, nhập vào số nhị phân 0 hoặc 1',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Đã xóa mục cấu hình %s thành công.',
	'CLI_CONFIG_NEW'					=> 'Giá trị khởi tạo của mục cấu hình, nhập vào số nhị phân 0 hoặc 1',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Mục cấu hình %s không tồn tại',
	'CLI_CONFIG_OPTION_NAME'			=> 'Tên hiển thị của mục cấu hình',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Bật tùy chọn này nếu giá trị mục cấu hình không kèm theo một dòng mới ở cuối.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Giá trị tăng thêm',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Đã tăng thêm giá trị cho mục cấu hình %s thành công',
	'CLI_CONFIG_SET_FAILURE'			=> 'Không thể cập nhật mục cấu hình %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Đã cập nhật mục cấu hình %s thành công',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'In danh sách tất cả thao tác hẹn giờ.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Chạy tất cả thao tác sẵn sàng.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Tên thao tác đang chạy',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Cập nhật cơ sở dữ liệu dựa trên dữ liệu thay đổi.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Xóa một mục cấu hình',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Vô hiệu phần mở rộng xác định.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Cài đặt phần mở rộng xác định.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Tìm dữ liệu thay đổi không bị phụ thuộc.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'In giá trị một mục cấu hình',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Tăng thêm giá trị số nguyên một mục cấu hình',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'In danh sách tất cả phần mở rộng có trong cơ sở dữ liệu và hệ thống tập tin.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Chạy chế độ an toàn (không sử dụng phần mở rộng).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Chạy dòng lệnh.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Xóa dữ liệu phần mở rộng xác định.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Tạo lại chuỗi mã hóa cho cột dữ liệu user_email_hash trong bảng người dùng.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Chỉ cập nhật lại giá trị cho mục cấu hình nếu giá trị cũ trùng với giá trị nhập vào',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Gán giá trị một mục cấu hình',

	'CLI_EXTENSION_DISABLE_FAILURE'	=> 'Không thể vô hiệu phần mở rộng %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'	=> 'Đã vô hiệu phần mở rộng %s thành công',
	'CLI_EXTENSION_ENABLE_FAILURE'	=> 'Không thể cài đặt phần mở rộng %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'	=> 'Đã cài đặt phần mở rộng %s thành công',
	'CLI_EXTENSION_NAME'			=> 'Tên phần mở rộng',
	'CLI_EXTENSION_PURGE_FAILURE'	=> 'Không thể xóa dữ liệu của phần mở rộng %s',
	'CLI_EXTENSION_PURGE_SUCCESS'	=> 'Đã xóa dữ liệu của phần mở rộng %s thành công',
	'CLI_EXTENSION_NOT_FOUND'		=> 'Không có phần mở rộng nào.',
	'CLI_EXTENSIONS_AVAILABLE'		=> 'Chưa cài đặt',
	'CLI_EXTENSIONS_DISABLED'		=> 'Đã vô hiệu',
	'CLI_EXTENSIONS_ENABLED'		=> 'Đã cài đặt',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Đã tạo lại chuỗi mã hóa cho toàn bộ địa chỉ email thành công.',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Xác định thêm tên thao tác, hệ thống sẽ chỉ chạy mỗi thao tác đó mà thôi.',
));
