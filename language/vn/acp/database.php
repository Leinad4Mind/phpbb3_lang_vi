<?php
/** 
*
* acp_database [Vietnamese]
*
* @package language
* @version $Id: database.php,v 1.05 2006/06/26 11:48:00 nedka Exp $
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

// Banning
$lang = array_merge($lang, array(
	'DATABASE' => 'Cơ sở dữ liệu',
	'ACP_BACKUP_EXPLAIN'	=> 'Sử dụng công cụ này, bạn có thể sao lưu toàn bộ cơ sở dữ liệu hệ thống của mình. Bạn có thể lưu trữ bản sao lưu này trong thư mục <strong>store/</strong> trên hệ thống hoặc download về trực tiếp. Tuỳ thuộc vào cấu hình server của bạn, bạn có thể chọn nén tập tin sao lưu này theo một số định dạng nhất định. Nếu bạn muốn sao lưu thêm một số table khác ngoài hệ thống chung với bản sao lưu này, hãy liệt kê tất cả tên của chúng trong phần table thêm vào, ngăn cách bởi dấu phẩy.',
	'BACKUP_OPTIONS'	=> 'Tuỳ chọn sao lưu',
	'BACKUP_TYPE'		=> 'Loại sao lưu',
	'BACKUP_INVALID'	=> 'Tập tin bạn vừa chọn sao lưu không hợp lệ',
	'START_BACKUP'		=> 'Bắt đầu sao lưu',
	'FULL_BACKUP'		=> 'Toàn bộ',
	'STRUCTURE_ONLY'	=> 'Chỉ sao lưu cấu trúc',
	'DATA_ONLY'			=> 'Chỉ sao lưu dữ liệu',
	'TABLE_SELECT'		=> 'Chọn table',
	'FILE_TYPE'			=> 'Loại tập tin',
	'STORE_LOCAL'		=> 'Lưu trữ tập tin sao lưu trên hệ thống',
	'SELECT_ALL'		=> 'Chọn tất cả',
	'DESELECT_ALL'		=> 'Bỏ chọn tất cả',
	'BACKUP_SUCCESS'	=> 'Tập tin sao lưu đã được tạo thành công',
	'BACKUP_DELETE'		=> 'Tập tin sao lưu đã được xoá thành công',

	'STORE_AND_DOWNLOAD'	=> 'Lưu trữ và download',
	'ACP_RESTORE_EXPLAIN'	=> 'Công cụ này sẽ giúp bạn phục hồi lại cơ sở dữ liệu cho hệ thống của mình từ một tập tin đã sao lưu trước đây. Bạn có thể upload tập tin sao lưu từ bảng điều khiển này hoặc tự mình upload lên một thư mục trong hệ thống. Nếu server của bạn hỗ trợ, bạn có thể sử dụng tập tin sao lưu nén theo định dạng <strong>gzip</strong> hay <strong>bzip2</strong> và nó sẽ được tự động giải nén khi hệ thống thực hiện quá trình phục hồi. <strong>CẢNH BÁO</strong> Việc phục hồi này sẽ thay thế toàn bộ dữ liệu hiện có trong hệ thống. Quá trình phục hồi có thể mất nhiều thời gian tuỳ thuộc vào dung lượng cơ sở dữ liệu của bạn, vì thế đừng thoát khỏi trang này cho đến khi công việc phục hồi hoàn tất.',
	'SELECT_FILE'			=> 'Chọn một tập tin',
	'RESTORE_OPTIONS'		=> 'Tuỳ chọn phục hồi',
	'START_RESTORE'			=> 'Bắt đầu phục hồi',
	'DELETE_BACKUP'			=> 'Xoá tập tin sao lưu',
	'DOWNLOAD_BACKUP'		=> 'Download tập tin sao lưu',
	'RESTORE_SUCCESS'		=> 'Cơ sở dữ liệu của hệ thống đã được phục hồi thành công.<br /><br />Toàn bộ dữ liệu trong hệ thống sẽ quay trở về thời điểm thực hiện bản sao lưu này.',
));

?>