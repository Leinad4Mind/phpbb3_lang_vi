<?php
/** 
*
* acp_language [Vietnamese]
*
* @package language
* @version $Id: language.php,v 1.06 2006/06/26 11:48:00 nedka Exp $
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
	'ACP_FILES'						=> 'Tập tin ngôn ngữ dùng trong bảng điều khiển của Administrator',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Bảng điều khiển này sẽ giúp bạn cài đặt hoặc gỡ bỏ các gói ngôn ngữ trong hệ thống.',

	'EMAIL_FILES'			=> 'Tập tin ngôn ngữ dùng trong Email',

	'FILE_CONTENTS'				=> 'Nội dung tập tin',
	'FILE_FROM_STORAGE'			=> 'Tập tin từ thư mục lưu trữ',

	'HELP_FILES'				=> 'Tập tin ngôn ngữ dùng trong trợ giúp',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Những gói ngôn ngữ đã cài đặt',
	'INVALID_LANGUAGE_PACK'		=> 'Gói ngôn ngữ bạn vừa chọn dường như không hợp lệ. Hãy kiểm tra lại gói ngôn ngữ này và upload lại lần nữa nếu cần thiết.',
	'INVALID_UPLOAD_METHOD'		=> 'Phương pháp upload bạn vừa chọn không hợp lệ. Hãy vui lòng chọn phương pháp upload khác.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Thông tin chi tiết về gói ngôn ngữ đã được cập nhật thành công.',
	'LANGUAGE_ENTRIES'					=> 'Mục từ ngôn ngữ',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Công cụ này sẽ giúp bạn thay đổi nội dung các mục từ hiện có trong gói ngôn ngữ hoặc những mục từ chưa được phiên dịch hoàn chỉnh.<br /><strong>Lưu ý:</strong> Khi bạn thay đổi các tập tin ngôn ngữ, những thay đổi sẽ được lưu trữ trong một thư mục xác định của hệ thống để bạn download về. Những thành viên khác trong hệ thống sẽ không nhận ra những thay đổi trong gói ngôn ngữ cho đến khi bạn thay thế những tập tin ngôn ngữ gốc bằng các tập tin này trên server bằng cách tự upload chúng lên.',
	'LANGUAGE_FILES'					=> 'Tập tin ngôn ngữ',
	'LANGUAGE_KEY'						=> 'Phím ngôn ngữ',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Gói ngôn ngữ này đã được cài đặt.',
	'LANGUAGE_PACK_DELETED'				=> 'Gói ngôn ngữ <strong>%s</strong> đã được gỡ bỏ thành công. Tất cả thành viên đang sử dụng gói ngôn ngữ này sẽ được tự động thay bằng gói ngôn ngữ mặc định của hệ thống.',
	'LANGUAGE_PACK_DETAILS'				=> 'Thông tin chi tiết về gói ngôn ngữ',
	'LANGUAGE_PACK_INSTALLED'			=> 'Gói ngôn ngữ <strong>%s</strong> đã được cài đặt thành công.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Tên hệ thống',
	'LANGUAGE_PACK_NAME'				=> 'Tên',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Gói ngôn ngữ bạn vừa chọn không tồn tại.',
	'LANGUAGE_PACK_USED_BY'				=> 'Sử dụng bởi',
	'LANGUAGE_VARIABLE'					=> 'Biến ngôn ngữ',
	'LANG_AUTHOR'						=> 'Tác giả gói ngôn ngữ',
	'LANG_ENGLISH_NAME'					=> 'Tên tiếng Anh',
	'LANG_ISO_CODE'						=> 'Mã ISO',
	'LANG_LOCAL_NAME'					=> 'Tên hệ thống',

	'MISSING_LANGUAGE_FILE'		=> 'Tập tin ngôn ngữ bị thiếu: <span style="color:red">%s</span>',
	'MISSING_LANG_VARIABLES'	=> 'Những biến ngôn ngữ bị thiếu',
	'MODS_FILES'				=> 'Tập tin ngôn ngữ dùng trong các gói MOD',

	'NO_LANG_ID'					=> 'Bạn đã không xác định gói ngôn ngữ',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Bạn không thể gõ bỏ gói ngôn ngữ mặc định.<br />Nếu bạn muốn gõ bỏ gói ngôn ngữ này, trước hết hãy thay đổi ngôn ngữ mặc định của hệ thống.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Không có gói ngôn ngữ nào được gỡ bỏ',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Gỡ bỏ từ thư mục lưu trữ',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Chọn định dạng download',
	'SUBMIT_AND_DOWNLOAD'		=> 'Chấp nhận và download tập tin',
	'SUBMIT_AND_UPLOAD'		=> 'Chấp nhận và upload tập tin',

	'THOSE_MISSING_LANG_FILES'			=> 'Những tập tin ngôn ngữ dưới đây bị thiếu trong gói ngôn ngữ <strong>%s</strong>',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Những biến ngôn ngữ dưới đây bị thiếu trong gói ngôn ngữ <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Những gói ngôn ngữ đã gỡ bỏ',

	'UPLOAD_COMPLETED'			=> 'Quá trình upload đã hoàn tất',
	'UPLOAD_METHOD'				=> 'Phương pháp upload',
	'UPLOAD_SETTINGS'			=> 'Thiết lập upload',

	'WRONG_LANGUAGE_FILE'		=> 'Tập tin ngôn ngữ bạn vừa chọn không hợp lệ',
));

?>