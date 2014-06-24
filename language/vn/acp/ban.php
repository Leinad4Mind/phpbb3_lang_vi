<?php
/** 
*
* acp_ban [Vietnamese]
*
* @package language
* @version $Id: ban.php,v 1.04 2006/06/26 11:49:00 nedka Exp $
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
	'1_HOUR'		=> '1 giờ',
	'30_MINS'		=> '30 phút',
	'6_HOURS'		=> '6 giờ',

	'ACP_BAN_EXPLAIN'	=> 'Sử dụng công cụ này, bạn có thể điều khiển việc cấm các thành viên theo tên thành viên, địa chỉ IP hay địa chỉ Email. Những phương pháp này sẽ ngăn cản thành viên bị cấm truy cập vào bất kì thành phần nào trong hệ thống. Bạn có thể đưa ra một nguyên nhân ngắn giới hạn trong <strong>255</strong> ký tự về việc vì sao thành viên đó bị cấm. Các thao tác cấm này sẽ được ghi nhận trong bảng ghi nhận của Administrator. Bạn cũng có thể xác định thời gian thực hiện lệnh cấm. Nếu bạn muốn xác định ngay ngày kết thúc lệnh cấm, tốt hơn cách thiết lập một khoảng thời gian cấm trong bao lâu, bạn có thể xác định trong mục <strong>Thời gian kết thúc lệnh cấm</strong> bằng cách nhập vào ngày tháng theo định dạng <strong>YYYY-MM-DD</strong>.',

	'BAN_EXCLUDE'			=> 'Loại ra từ lệnh cấm',
	'BAN_LENGTH'			=> 'Thời gian thực hiện lệnh cấm',
	'BAN_REASON'			=> 'Nguyên nhân bị cấm',
	'BAN_GIVE_REASON'		=> 'Nguyên nhân giải thích cho thành viên khi bị cấm',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Danh sách cấm đã được cập nhật thành công',

	'EMAIL_BAN'					=> 'Cấm một hay nhiều địa chỉ Email',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Bật tuỳ chọn này để ngăn chặn thành viên sử dụng các địa chỉ Email đã bị cấm.',
	'EMAIL_BAN_EXPLAIN'			=> 'Để xác định nhiều địa chỉ Email cùng lúc, bạn hãy nhập mỗi địa chỉ Email trong một dòng. Bạn cũng có thể sử dụng dấu đại diện * để xác định các địa chỉ Email cùng loại, ví dụ như <strong>*@hotmail.com</strong>, <strong>*@*.domain.tld</strong> ...',
	'EMAIL_NO_BANNED'			=> 'Không có địa chỉ Email nào bị cấm',
	'EMAIL_UNBAN'				=> 'Ngưng cấm hoặc ngưng loại trừ địa chỉ Email',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Bạn có thể ngưng cấm hoặc ngưng loại trừ nhiều địa chỉ Email cùng lúc trong một thao tác bằng cách kết hợp hiệu quả chuột và bàn phím từ máy tính và trình duyệt. Những địa chỉ Email bị loại trừ được đánh dấu bằng màu nền xám.',

	'IP_BAN'					=> 'Cấm một hay nhiều địa chỉ IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Bật tuỳ chọn này để ngăn chặn thành viên sử dụng các địa chỉ IP đã bị cấm.',
	'IP_BAN_EXPLAIN'			=> 'Để xác định nhiều địa chỉ IP hay tên miền cùng lúc, bạn hãy nhập mỗi địa chỉ IP hay tên miền trong một dòng. Để cấm một dãy địa chỉ IP xác định, bắt đầu và kết thúc bằng dấu gạch nối (-), xác định các địa chỉ IP cùng loại bằng dấu đại diện *',
	'IP_HOSTNAME'				=> 'Địa chỉ IP hoặc tên miền',
	'IP_NO_BANNED'				=> 'Không có địa chỉ IP nào bị cấm',
	'IP_UNBAN'					=> 'Ngưng cấm hoặc ngưng loại trừ địa chỉ IP',
	'IP_UNBAN_EXPLAIN'			=> 'Bạn có thể ngưng cấm hoặc ngưng loại trừ nhiều địa chỉ IP cùng lúc trong một thao tác bằng cách kết hợp hiệu quả chuột và bàn phím từ máy tính và trình duyệt. Những địa chỉ IP bị loại trừ được đánh dấu bằng màu nền xám.',

	'PERMANENT'		=> 'Vĩnh viễn',
	
	'UNTIL'						=> 'Thời gian kết thúc lệnh cấm',
	'USER_BAN'					=> 'Cấm một hay nhiều tên thành viên',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Bật tuỳ chọn này để ngăn chặn thành viên sử dụng các tên thành viên đã bị cấm.',
	'USER_BAN_EXPLAIN'			=> 'Để xác định nhiều thành viên cùng lúc, bạn hãy nhập mỗi tên thành viên trong một dòng. Bấm vào nút <strong>Tìm một tên thành viên</strong> để tra cứu và thêm vào một hay nhiều thành viên tự động.',
	'USER_NO_BANNED'			=> 'Không có thành viên nào bị cấm',
	'USER_UNBAN'				=> 'Ngưng cấm hoặc ngưng loại trừ thành viên',
	'USER_UNBAN_EXPLAIN'		=> 'Bạn có thể ngưng cấm hoặc ngưng loại trừ nhiều thành viên cùng lúc trong một thao tác bằng cách kết hợp hiệu quả chuột và bàn phím từ máy tính và trình duyệt. Những thành viên bị loại trừ được đánh dấu bằng màu nền xám.',
));

?>