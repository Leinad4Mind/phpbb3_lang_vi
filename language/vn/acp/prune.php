<?php
/** 
*
* acp_prune [Vietnamese]
*
* @package language
* @version $Id: prune.php,v 1.07 2006/10/31 18:59:00 nedka Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Sử dụng công cụ này, bạn có thể xoá hoặc ngưng kích hoạt tài khoản của các thành viên trong hệ thống. Bạn có thể thực hiện việc này theo nhiều cách khác nhau: theo số bài viết, lần ghé thăm trước… Mỗi cách dọn dẹp có thể kết hợp với nhau, ví dụ như bạn muốn dọn dẹp những thành viên có lần ghé thăm cuối cùng trước ngày 2002/01/01 và có ít hơn 10 bài viết. Bạn có thể nhập vào trực tiếp danh sách của các thành viên vào khung bên dưới, bất kỳ điều kiện nào nhập vào khung này đều vô hiệu. Hãy cẩn thận với công cụ này! Khi một thành viên đã bị xoá bạn không thể phục hồi lại được.',

	'DEACTIVATE_DELETE'			=> 'Ngưng kích hoạt hoặc xoá',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Chọn ngưng kích hoạt thành viên hay xoá tài khoản của họ hoàn toàn, lưu ý rằng thao tác này không thể phục hồi lại!',
	'DELETE_USERS'				=> 'Xoá',
	'DELETE_USER_POSTS'			=> 'Xoá bài viết của những thành viên đã dọn dẹp',
	'DELETE_USER_POSTS_EXPLAIN' => 'Gỡ bỏ những bài viết được gửi bởi các thành viên đã bị xoá, sẽ không có tác dụng nếu thành viên chưa được kích hoạt.',

	'JOINED_EXPLAIN'			=> 'Nhập vào ngày tham gia theo định dạng ngày tháng <kbd>YYYY-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Nhập vào ngày ghé thăm trước theo định dạng ngày tháng <kbd>YYYY-MM-DD</kbd>.',

	'SELECT_USERS_EXPLAIN'		=> 'Nhập vào những tên thành viên xác định tại đây, những tên thành viên này được sử dụng để thiết lập trong các tuỳ chọn bên dưới.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Những thành viên bạn vừa chọn đã được ngưng kích hoạt thành công.',
	'USER_DELETE_SUCCESS'		=> 'Những thành viên bạn vừa chọn đã được xoá thành công.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Với công cụ này, bạn có thể xoá bất kỳ chủ đề nào không có bài viết mới hoặc không hề được xem qua trong vòng số ngày mà bạn đã chọn. Nếu bạn không nhập vào số ngày thì tất cả các chủ đề sẽ bị xoá. Mặc định, công cụ này sẽ không gỡ bỏ những chủ đề có các bình chọn chưa hoặc không kết thúc cũng như đối với các chú ý hay thông báo.',

	'FORUM_PRUNE'		=> 'Dọn dẹp chuyên mục',

	'NO_PRUNE'			=> 'Không có chuyên mục nào được dọn dẹp',

	'SELECTED_FORUM'	=> 'Chuyên mục đã chọn',
	'SELECTED_FORUMS'	=> 'Những chuyên mục đã chọn',

	'POSTS_PRUNED'					=> 'Những bài viết đã dọn dẹp',
	'PRUNE_ANNOUNCEMENTS'			=> 'Dọn dẹp thông báo',
	'PRUNE_FINISHED_POLLS'			=> 'Dọn dẹp bình chọn đã kết thúc',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Gỡ bỏ những chủ đề có các bình chọn đã kết thúc.',
	'PRUNE_NOT_POSTED'				=> 'Số ngày kể từ lần gửi bài mới nhất',
	'PRUNE_NOT_VIEWED'				=> 'Số ngày kể từ lần xem mới nhất',
	'PRUNE_OLD_POLLS'				=> 'Dọn dẹp bình chọn cũ',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Gỡ bỏ những chủ đề có các bình chọn không được ai tham gia.',
	'PRUNE_STICKY'					=> 'Dọn dẹp chú ý',
	'PRUNE_SUCCESS'					=> 'Việc dọn dẹp chuyên mục đã thành công.',

	'TOPICS_PRUNED'		=> 'Những chủ đề đã dọn dẹp',
));

?>