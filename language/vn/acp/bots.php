<?php
/** 
*
* acp_bots [Vietnamese]
*
* @package language
* @version $Id: bots.php,v 1.03 2006/06/26 11:49:00 nedka Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Quản lý Bot',
	'BOTS_EXPLAIN'		=> 'Bot hay Crawler là những cỗ máy tự động thường được sử dụng trong các dịch vụ tìm kiếm để cập nhật chỉ mục tìm kiếm trong cơ sở dữ liệu của họ. Hiếm khi những loại này sử dụng session thích hợp vì thế thường làm cho kết quả trong các bộ đếm của hệ thống sai lệch khi đếm số lượt người ghé thăm website, đếm tăng thêm số lượng không chính xác và thỉnh thoảng không thể lập chỉ mục cho website chính xác. Với công cụ này, bạn có thể xác định một loại thành viên đặc biệt gồm những loại Bot hay Crawler này để khắc phục những rắc rối kể trên.',
	'BOT_ACTIVATE'		=> 'Kích hoạt',
	'BOT_ACTIVE'		=> 'Bot được kích hoạt',
	'BOT_ADD'			=> 'Thêm Bot',
	'BOT_ADDED'			=> 'Bot mới đã được thêm vào thành công',
	'BOT_AGENT'			=> 'Kết quả xác định Bot',
	'BOT_AGENT_EXPLAIN'	=> 'Một chuỗi kết quả định danh Bot trong trình duyệt, những chuỗi không hoàn chỉnh vẫn được phép sử dụng.',
	'BOT_DEACTIVATE'	=> 'Ngưng kích hoạt',
	'BOT_DELETED'		=> 'Bot đã được xoá thành công',
	'BOT_EDIT'			=> 'Sửa Bot',
	'BOT_EDIT_EXPLAIN'	=> 'Với công cụ này, bạn có thể thêm vào một Bot mới hay chỉnh sửa một Bot sẵn có. Bạn có thể xác định một chuỗi định danh, có thể cộng thêm với một hay nhiều địa chỉ IP, thậm chí là một vùng trong địa chỉ IP để làm kết quả định danh Bot. Hãy cẩn thận trong việc xác định kết quả định danh Bot bằng chuỗi hay địa chỉ IP. Bạn cũng có thể chọn giao diện và ngôn ngữ riêng trong hệ thống cho Bot khi ghé thăm website. Bạn sẽ tiết kiệm được nhiều băng thông website của mình bằng cách chọn một giao diện đơn giản không nạp quá nhiều hình ảnh cho Bot. Bạn cũng phải nhớ thiết lập cấp phép thích hợp cho những loại Bot đặc biệt này.',
	'BOT_LANG'			=> 'Ngôn ngữ dành cho Bot',
	'BOT_LANG_EXPLAIN'	=> 'Chọn ngôn ngữ hiện tại xác định cho Bot trong trình duyệt.',
	'BOT_LAST_VISIT'	=> 'Lần ghé thăm trước',
	'BOT_IP'			=> 'Địa chỉ IP của Bot',
	'BOT_IP_EXPLAIN'	=> 'Địa chỉ IP không hoàn chỉnh vẫn được chấp nhận sử dụng, ngăn cách các địa chỉ IP với nhau bằng dấu phẩy.',
	'BOT_NAME'			=> 'Tên Bot',
	'BOT_NAME_EXPLAIN'	=> 'Chỉ sử dụng để quản lý thông tin của bạn.',
	'BOT_NEVER'			=> 'Không bao giờ',
	'BOT_STYLE'			=> 'Giao diện dành cho Bot',
	'BOT_STYLE_EXPLAIN'	=> 'Chọn giao diện của hệ thống mà bạn muốn sử dụng cho Bot.',
	'BOT_UPDATED'		=> 'Bot hiện tại đã được cập nhật thành công',
	'BOT_VIS'			=> 'Hiển thị Bot',
	'BOT_VIS_EXPLAIN'	=> 'Đồng ý hiển thị Bot trong danh sách các thành viên đang online.',

	'ERR_BOT_NO_IP'			=> 'Địa chỉ IP mà bạn vừa nhập không hợp lệ hoặc do tên miền này không thể sử dụng được.',
	'ERR_BOT_NO_MATCHES'	=> 'Bạn phải khai báo ít nhất là một kết quả định danh hoặc địa chỉ IP cho kết quả xác định của Bot này.',

	'NO_BOT'	=> 'Không tìm thấy bất kì Bot nào với số ID đã xác định',
));

?>