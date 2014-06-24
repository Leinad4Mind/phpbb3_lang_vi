<?php
/** 
*
* viewtopic [Vietnamese]
*
* @package language
* @version $Id: viewtopic.php,v 1.05 2006/06/26 11:51:00 nedka Exp $
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
	'ATTACHMENT'						=> 'Tập tin đính kèm',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Chức năng gửi tập tin đính kèm đã bị vô hiệu',

	'BOOKMARK_ADDED'		=> 'Đã đánh dấu chủ đề thành công.',
	'BOOKMARK_REMOVED'		=> 'Đã gỡ bỏ đánh dấu chủ đề thành công.',
	'BOOKMARK_TOPIC'		=> 'Đánh dấu chủ đề',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Gỡ bỏ đánh dấu',
	'BUMPED_BY'				=> 'Bump lần cuối bởi <strong>%1$s</strong> vào ngày %2$s',
	'BUMP_TOPIC'			=> 'Bump chủ đề',

	'CODE'					=> 'Mã',

	'DELETE_TOPIC'			=> 'Xoá chủ đề',
	'DOWNLOAD_NOTICE'		=> 'Bạn không được cấp phép để xem tập tin đính kèm trong bài viết này.',

	'EDITED_TIMES_TOTAL'	=> 'Sửa lần cuối bởi <strong>%1$s</strong> vào ngày %2$s với %3$d lần sửa trong tổng số.',
	'EDITED_TIME_TOTAL'		=> 'Sửa lần cuối bởi <strong>%1$s</strong> vào ngày %2$s với %3$d lần sửa trong tổng số.',
	'EMAIL_TOPIC'			=> 'Gửi Email giới thiệu cho bạn bè',
	'ERROR_NO_ATTACHMENT'	=> 'Tập tin đính kèm bạn vừa chọn không tồn tại',

	'FILE_NOT_FOUND_404'	=> 'Tập tin <strong>%s</strong> không tồn tại.',
	'FORK_TOPIC'			=> 'Copy chủ đề',

	'LINKAGE_FORBIDDEN'		=> 'Bạn không được phép xem, download hoặc liên kết đến website này.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Hãy vui lòng đăng nhập để xem chủ đề này.',
	'LOGIN_VIEWTOPIC'		=> 'Administrator yêu cầu bạn phải đăng ký làm thành viên và đăng nhập vào hệ thống để xem chủ đề này.',

	'MAKE_ANNOUNCE'				=> 'Thay đổi thành thông báo',
	'MAKE_GLOBAL'				=> 'Thay đổi thành thông báo quan trọng',
	'MAKE_NORMAL'				=> 'Thay đổi thành bài viết bình thường',
	'MAKE_STICKY'				=> 'Thay đổi thành chú ý',
	'MAX_OPTIONS_SELECT'		=> 'Bạn có thể chọn đến <strong>%d</strong> đối tượng bình chọn',
	'MAX_OPTION_SELECT'			=> 'Bạn chỉ có thể chọn <strong>1</strong> đối tượng bình chọn',
	'MISSING_INLINE_ATTACHMENT'	=> 'Tập tin đính kèm <strong>%s</strong> hiện tại không còn trên server',
	'MOVE_TOPIC'				=> 'Di chuyển chủ đề',

	'NO_ATTACHMENT_SELECTED'=> 'Bạn chưa chọn tập tin đính kèm để xem hoặc download.',
	'NO_NEWER_TOPICS'		=> 'Không có chủ đề nào mới hơn trong chuyên mục này.',
	'NO_OLDER_TOPICS'		=> 'Không có chủ đề nào cũ hơn trong chuyên mục này.',
	'NO_UNREAD_POSTS'		=> 'Không có bài viết chưa xem mới nào trong chủ đề này.',
	'NO_VOTE_OPTION'		=> 'Bạn phải chọn một đối tượng khi bình chọn.',

	'POLL_RUN_TILL'			=> 'Bình chọn cho đến ngày %s',
	'POLL_VOTED_OPTION'		=> 'Bạn đã bình chọn cho đối tượng này',
	'POST_ENCODING'			=> 'Bài viết này được gửi bởi <strong>%1$s</strong> với nội dung được mã hoá khác với chế độ mã hoá trong ngôn ngữ mà bạn đang dùng. Bấm %2$svào đây%3$s để xem đúng chế độ mã hoá của bài viết này.',
	'PRINT_TOPIC'			=> 'Xem bản in',

	'QUICK_MOD'				=> 'Công cụ',
	'QUOTE'					=> 'Trích dẫn',

	'REPLY_TO_TOPIC'		=> 'Gửi bài trả lời',
	'RETURN_POST'			=> '%sQuay về bài viết đang xem%s',

	'SUBMIT_VOTE'			=> 'Chấp nhận bình chọn',

	'TOTAL_VOTES'			=> 'Tổng số bình chọn',

	'UNLOCK_TOPIC'			=> 'Mở khoá chủ đề',

	'VIEW_INFO'				=> 'Thông tin chi tiết về bài viết',
	'VIEW_NEXT_TOPIC'		=> 'Chủ đề kế tiếp',
	'VIEW_PREVIOUS_TOPIC'	=> 'Chủ đề trước',
	'VIEW_RESULTS'			=> 'Xem kết quả bình chọn',
	'VIEW_TOPIC_POST'		=> '1 bài viết',
	'VIEW_TOPIC_POSTS'		=> '%d bài viết',
	'VIEW_UNREAD_POST'		=> 'Bài viết chưa xem đầu tiên',
	'VISIT_WEBSITE'			=> 'Ghé thăm website của người gửi',
	'VOTE_SUBMITTED'		=> 'Bạn đã tham gia bình chọn xong',

	'WROTE'					=> 'đã viết',
));

?>