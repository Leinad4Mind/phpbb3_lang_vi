<?php
/** 
*
* acp_groups [Vietnamese]
*
* @package language
* @version $Id: groups.php,v 1.05 2006/08/15 15:55:00 nedka Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Với công cụ này, bạn có thể quản lý tất cả nhóm thành viên trong hệ thống, bạn có thể xoá, tạo mói hay chỉnh sửa những nhóm thành viên hiện có. Bạn cũng có thể chọn ra người điều hành cho nhóm, thay đổi loại nhóm thành viên cũng như cập nhật tên nhóm và giới thiệu về nhóm.',
	'ADD_USERS'						=> 'Thêm thành viên',
	'ADD_USERS_EXPLAIN'				=> 'Với công cụ này, bạn có thể thêm những thành viên mới cho nhóm. Bạn cũng có thể thay đổi nhóm mặc định cho các thành viên được chọn. Ngoài ra, bạn cũng có thể xác định thành viên trở thành người điều hành của nhóm. Hãy nhập mỗi tên thành viên trên một dòng xác định.',

	'COPY_PERMISSIONS'				=> 'Copy thiết lập cấp phép từ',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Sau khi copy thiết lập cấp phép, nhóm này sẽ có thiết lập cấp phép giống như thiêt lập cấp phép của nhóm mà bạn chọn copy đến.',
	'CREATE_GROUP'					=> 'Tạo nhóm thành viên mới',

	'GROUPS_NO_MEMBERS'				=> 'Nhóm này chưa có thành viên',
	'GROUPS_NO_MODS'				=> 'Bạn chưa xác định người điều hành cho nhóm',
	'GROUP_APPROVE'					=> 'Chấp nhận',
	'GROUP_APPROVED'				=> 'Thành viên được chấp nhận',
	'GROUP_AVATAR'					=> 'Hình đại diện của nhóm',
	'GROUP_AVATAR_EXPLAIN'			=> 'Hình ảnh được hiển thị trong bảng điều hành của nhóm.',
	'GROUP_CLOSED'					=> 'Cố định',
	'GROUP_COLOR'					=> 'Màu nhóm',
	'GROUP_COLOR_EXPLAIN'			=> 'Xác định màu phân biệt cho tên thành viên của các thành viên trong nhóm, để trống để sử dụng màu mặc định dành cho thành viên.',
	'GROUP_CREATED'					=> 'Nhóm đã được tạo thành công',
	'GROUP_DEFAULT'					=> 'Mặc định',
	'GROUP_DEFS_UPDATED'			=> 'Nhóm mặc định thiết lập cho tất cả thành viên đã chọn',
	'GROUP_DELETE'					=> 'Xoá nhóm',
	'GROUP_DELETED'					=> 'Nhóm đã được xoá và nhóm mặc định của thành viên đã được thiết lập thành công',
	'GROUP_DEMOTE'					=> 'Giáng chức',
	'GROUP_DESC'					=> 'Giới thiệu về nhóm',
	'GROUP_DETAILS'					=> 'Thông tin về nhóm',
	'GROUP_DST'						=> 'Bật chế độ giờ màu hè DST (Daylight Saving Time) cho nhóm',
	'GROUP_EDIT_EXPLAIN'			=> 'Với công cụ này, bạn có thể chỉnh sửa các nhóm thành viên hiện có. Bạn có thể thay đổi tên nhóm, giới thiệu về nhóm và loại nhóm như tự do, cố định ... bạn cũng có thể thiết lập những tuỳ chọn cho nhóm như màu sắc phân biệt, xếp hạng ... Những thay đổi thiết lập trong đây sẽ thay thế cho thiết lập hiện tại của thành viên. Lưu ý rằng những thành viên trong nhóm có thể thay đổi hình đại diện của họ nếu như bạn không thiết lập cấp phép phù hợp.',
	'GROUP_ERR_USERS_EXIST'			=> 'Thành viên bạn vừa chọn đã là thành viên trong nhóm',
	'GROUP_HIDDEN'					=> 'Ẩn',
	'GROUP_LANG'					=> 'Ngôn ngữ của nhóm',
	'GROUP_LEAD'					=> 'Người điều hành nhóm',
	'GROUP_LEADERS_ADDED'			=> 'Người điều hành đã được thêm vào nhóm thành công.',
	'GROUP_LEGEND'					=> 'Hiển thị nhóm trong chú thích',
	'GROUP_LIST'					=> 'Danh sách thành viên hiện tại trong nhóm',
	'GROUP_LIST_EXPLAIN'			=> 'Danh sách tất cả các thành viên hiện tại có trong nhóm với tư cách thành viên của họ. Bạn có thể xoá thành viên ngoại trừ trường hợp những nhóm đặc biệt hay thêm vào một số thành viên mới mà bạn muốn.',
	'GROUP_MEMBERS'					=> 'Thành viên của nhóm',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Đây là danh sách toàn bộ các thành viên của nhóm. Danh sách liệt kê này xác định rõ những loại thành viên trong nhóm như những người điều hành nhóm, các thành viên đang chờ quyết định cho phép tham gia và những thành viên hiện tại của nhóm. Với công cụ này, bạn có thể quản lý tư cách thành viên của tất cả thành viên cũng như vai trò của họ trong nhóm. Để bỏ chọn người điều hành của nhóm nhưng không gỡ bỏ họ khỏi nhóm, hãy giáng chức họ, việc này tốt hơn là xoá họ khỏi nhóm. Tương tự, việc chọn thăng chức sẽ thiết lập một thành viên trong nhóm trở thành người điều hành của nhóm.',
	'GROUP_MESSAGE_LIMIT'			=> 'Số tin nhắn giới hạn trong mỗi thư mục của các thành viên trong nhóm',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Thiết lập này sẽ thay thế cho số tin nhắn giới hạn trong mỗi thư mục của các thành viên khác ngoài nhóm. Nhập vào số <strong>0</strong> để sử dụng giới hạn mặc định giống như các thành viên khác ngoài nhóm.',
	'GROUP_MODS_ADDED'				=> 'Người điều hành mới của nhóm đã được thêm vào thành công.',
	'GROUP_MODS_DEMOTED'			=> 'Người điều hành của nhóm đã được giáng chức thành công',
	'GROUP_MODS_PROMOTED'			=> 'Người điều hành của nhóm đã được thăng chức thành công',
	'GROUP_NAME'					=> 'Tên nhóm',
	'GROUP_OPEN'					=> 'Tự do',
	'GROUP_PENDING'					=> 'Thành viên chờ quyết định',
	'GROUP_PROMOTE'					=> 'Thăng chức',
	'GROUP_RANK'					=> 'Xếp hạng của nhóm',
	'GROUP_RECEIVE_PM'				=> 'Cho phép nhóm nhận tin nhắn',
	'GROUP_REQUEST'					=> 'Yêu cầu tham gia vào nhóm',
	'GROUP_SETTINGS'				=> 'Chọn thiết lập chung cho các thành viên trong nhóm',
	'GROUP_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập cá nhân của các thành viên trong nhóm. Lưu ý rằng những thiết lập này không ảnh hưởng đến nhóm. Đây là phương pháp nhanh chóng để thay đổi những thiết lập cá nhân của tất cả các thành viên trong nhóm.',
	'GROUP_SETTINGS_SAVE'			=> 'Thiết lập của nhóm',
	'GROUP_TIMEZONE'				=> 'Múi giờ của nhóm',
	'GROUP_TYPE'					=> 'Loại nhóm',
	'GROUP_TYPE_EXPLAIN'			=> 'Chọn loại nhóm cho phép các thành viên tham gia vào nhóm hay xem thông tin về nhóm.',
	'GROUP_UPDATED'					=> 'Thiết lập của nhóm đã được cập nhật thành công.',
	'GROUP_USERS_ADDED'				=> 'Thành viên mới đã được thêm vào nhóm thành công.',
	'GROUP_USERS_EXIST'				=> 'Thành viên bạn vừa chọn đã là thành viên của nhóm.',
	'GROUP_USERS_REMOVE'			=> 'Thành viên đã được gỡ bỏ khỏi nhóm và những thiết lập mặc định đã được chọn thành công',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Chọn làm nhóm mặc định cho tất cả thành viên',
	'MEMBERS'				=> 'Thành viên',

	'NO_GROUP'					=> 'Không có nhóm nào được xác định',
	'NO_PERMISSIONS'			=> 'Đừng copy thiết lập cấp phép',

	'SPECIAL_GROUPS'			=> 'Nhóm đặc biệt',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Có một vài loại nhóm đặc biệt khác hẳn các loại nhóm thành viên khác, những nhóm này không thể xoá cũng như chỉnh sửa trực tiếp được. Tuy nhiên, bạn vẫn có thể thêm thành viên mới vào những nhóm này và thay đổi những thiết lập đơn giản. Bằng cách bấm vào nút <strong>Mặc định</strong>, bạn có thể chọn cho các nhóm này những giá trị thiết lập mặc định đến các thành viên có trong nhóm.',

	'TOTAL_MEMBERS'				=> 'Tổng số thành viên',

	'USERS_APPROVED'				=> 'Thành viên đã được chấp nhận thành công.',
	'USER_DEFAULT'					=> 'Thành viên mặc định',
	'USER_DEF_GROUPS'				=> 'Thành viên đã xác định nhóm',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Đây là những nhóm được tạo ra bởi chính bạn hoặc các quản trị viên trong website. Bạn có thể quản lý tư cách thành viên trong nhóm như sửa thiết lập của nhóm hoặc thậm chí là gỡ bỏ nhóm. Bằng cách bấm vào nút <strong>Mặc định</strong>, bạn có thể chọn cho các nhóm này những giá trị thiết lập mặc định đến các thành viên có trong nhóm.',
	'USER_GROUP_DEFAULT'			=> 'Chọn làm nhóm mặc định',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Bật tuỳ chọn này để thiết lập nhóm này làm nhóm mặc định cho các thành viên đã thêm vào',
	'USER_GROUP_LEADER'				=> 'Chọn làm người điều hành nhóm',
));

?>