<?php
/**
*
* migrator [Vietnamese]
*
* @package language
* @version 1.01
* @copyright (c) 2013 nedka
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
	'CONFIG_NOT_EXIST'	=> 'Mục cấu hình “%s” không tồn tại.',

	'GROUP_NOT_EXIST'	=> 'Nhóm “%s” không tồn tại.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Áp dụng phụ thuộc từ %s.',
	'MIGRATION_DATA_DONE'				=> 'Dữ liệu đã hoàn tất: %1$s; Thời gian: %2$.2f giây',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Dữ liệu đang cập nhật: %1$s; Thời gian: %2$.2f giây',
	'MIGRATION_DATA_RUNNING'			=> 'Dữ liệu đang xử lí: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Các nâng cấp đã thực hiện trên hệ thống (không cần áp dụng lại): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Có lỗi xảy ra trong khi thực hiện yêu cầu và ngoại lệ trong mã xuất hiện. Những thay đổi đã thực hiện trên hệ thống trước khi gặp lỗi này đã được phục hồi lại như ban đầu. Bạn nên kiểm tra lại hệ thống để đảm bảo không xảy ra lỗi.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Việc nâng cấp “%s” không thực thi toàn vẹn, đã bỏ qua thao tác “%2$s”.',
	'MIGRATION_NOT_VALID'				=> '%s không phải thao tác nâng cấp hợp lệ.',
	'MIGRATION_SCHEMA_DONE'				=> 'Cấu trúc dữ liệu đã hoàn tất: %1$s; Thời gian: %2$.2f giây',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Cấu trúc dữ liệu đang xử lí: %s.',
	'MODULE_ERROR'						=> 'Có lỗi xuất hiện trong khi thêm vào gói chức năng: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Tập tin cài đặt của gói chức năng đã yêu cầu bị thiếu: %2$s',
	'MODULE_NOT_EXIST'					=> 'Gói chức năng đã yêu cầu không tồn tại: %s',

	'PERMISSION_NOT_EXIST'	=> 'Thiết lập cấp phép “%s” không tồn tại.',

	'ROLE_NOT_EXIST'	=> 'Nhiệm vụ cấp phép “%s” không tồn tại.',
));
