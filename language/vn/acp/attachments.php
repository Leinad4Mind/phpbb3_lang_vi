<?php
/** 
*
* acp_attachments [Vietnamese]
*
* @package language
* @version $Id: attachments.php,v 1.03 2006/08/15 15:04:00 nedka Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thay đổi những thiết lập chính về chức năng đính kèm tập tin và những nhóm tập tin kết hợp trong hệ thống.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, xoá và chỉnh sửa những nhóm tập tin của bạn, bạn có thể vô hiệu việc sử dụng một loại nhóm tập tin, chỉ định một loại nhóm tập tin đặc biệt, thay đổi cơ chế tải về và bạn có thể xác định biểu tượng tập tin cho từng loại tập tin hiển thị trong phần tải về tập tin đính kèm.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể quản lý những loại tập tin đã được cho phép sử dụng khi đính kèm tập tin trong hệ thống. Để kích hoạt những loại tập tin này, hãy tham khảo bảng quản lý các loại nhóm tập tin. Chúng tôi khuyến cáo bạn không nên thêm vào những loại tập tin mã nguồn như php, php3, php4, phtml, pl, cgi, asp, aspx ...',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Với công cụ này, bạn có thể phát hiện những tập tin đính kèm nằm trong thư mục tập tin tải lên nhưng không được sử dụng trong bất kì bài viết nào. Hầu hết điều này xảy ra khi các thành viên tải lên xong tập tin đính kèm nhưng lại không chấp nhận gửi bài viết nữa. Bạn có thể xoá những tập tin này hoặc đính kèm chúng vào những bài viết hiện tại. Việc đính kèm tập tin vào bài viết yêu cầu bạn phải xác định chính xác số ID của bài viết, bạn phải tự mình xác định số ID này. Chức năng này dành cho những ai muốn tải tập tin lên hệ thống bằng các chương trình phần mềm chuyên dụng khác, thông thường là do tập tin có dung lượng lớn, rồi đính kèm những tập tin này vào các bài viết hiện có trong hệ thống.',
	'ADD_EXTENSION'						=> 'Thêm loại tập tin',
	'ADD_EXTENSION_GROUP'				=> 'Thêm nhóm tập tin',
	'ADMIN_UPLOAD_ERROR'				=> 'Có lỗi xảy ra trong khi đính kèm tập tin: <strong>%s</strong>',
	'ALLOWED_FORUMS'					=> 'Chuyên mục được phép đính kèm tập tin',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Cho phép thành viên có thể đính kèm những loại tập tin trong các chuyên mục được chọn hoặc tất cả các chuyên mục',
	'ALLOW_ATTACHMENTS'					=> 'Cho phép đính kèm tập tin',
	'ALLOW_ALL_FORUMS'					=> 'Cho phép đính kèm tập tin trong tất cả các chuyên mục',
	'ALLOW_IN_PM'						=> 'Cho phép trong tin nhắn',
	'ALLOW_PM_ATTACHMENTS'				=> 'Cho phép sử dụng tập tin đính kèm trong tin nhắn',
	'ALLOW_SELECTED_FORUMS'				=> 'Chỉ những chuyên mục được chọn bên dưới',
	'ASSIGNED_EXTENSIONS'				=> 'Loại tập tin đã chỉ định',
	'ASSIGNED_GROUP'					=> 'Nhóm tập tin đã chỉ định',
	'ATTACH_EXTENSIONS_URL'				=> 'Loại tập tin',
	'ATTACH_EXT_GROUPS_URL'				=> 'Nhóm tập tin',
	'ATTACH_MAX_FILESIZE'				=> 'Dung lượng tập tin tối đa',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Dung lượng đính kèm tập tin tối đa cho phép của mỗi tập tin, nhập vào số <strong>0</strong> để không hạn chế dung lượng tập tin.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Dung lượng tập tin tối đa trong tin nhắn',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Dung lượng đính kèm tập tin tối đa cho phép sử dụng cấp cho mỗi thành viên trong tin nhắn, nhập vào số <strong>0</strong> để không hạn chế dung lượng tập tin.',
	'ATTACH_ORPHAN_URL'					=> 'Tập tin đính kèm không được sử dụng',
	'ATTACH_POST_ID'					=> 'Số ID bài viết',
	'ATTACH_QUOTA'						=> 'Tổng dung lượng đính kèm tập tin',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Dung lượng đính kèm tập tin tối đa cho phép của tất cả các tập tin đính kèm, nhập vào số <strong>0</strong> để không hạn chế dung lượng tập tin.',
	'ATTACH_TO_POST'					=> 'Đính kèm tập tin vào bài viết',

	'CAT_IMAGES'				=> 'Hình ảnh',
	'CAT_RM_FILES'				=> 'Nhóm tập tin Real Media',
	'CAT_WM_FILES'				=> 'Nhóm tập tin Windows Media',
	'CREATE_GROUP'				=> 'Tạo nhóm tập tin mới',
	'CREATE_THUMBNAIL'			=> 'Tạo hình thu nhỏ',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Tạo hình thu nhỏ cho tất cả các loại tập tin hình ảnh.',

	'DEFINE_ALLOWED_IPS'			=> 'Xác định địa chỉ IP/tên miền cho phép đính kèm tập tin',
	'DEFINE_DISALLOWED_IPS'			=> 'Xác định địa chỉ IP/tên miền cấm đính kèm tập tin',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Để xác định nhiều địa chỉ IP hay tên miền khác nhau, bạn hãy nhập mỗi địa chỉ IP hay tên miền trong một dòng. Để xác định một dãy địa chỉ IP, bắt đầu và kết thúc bằng dấu gạch nối (-), xác định những địa chỉ IP cùng loại bằng dấu đại diện *',
	'DOWNLOAD_MODE'					=> 'Chế độ tải về',
	'DOWNLOAD_MODE_EXPLAIN'			=> 'Nếu bạn gặp rắc rối trong việc tải về tập tin, thiết lập chế độ tải về này thành <strong>Vật lí</strong>, các thành viên sẽ tải trực tiếp tập tin về từ địa chỉ thư mục trên máy chủ. Đừng chuyển sang chế độ tải về vật lí nếu không thực sự cần thiết bởi vì nó chỉ rõ cho thành viên vị trí tập tin trên máy chủ.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Bạn có thể gỡ bỏ hoặc ngưng loại trừ nhiều địa chỉ IP hay tên miền cùng lúc trong một thao tác bằng cách kết hợp hiệu quả chuột và bàn phím từ máy tính và trình duyệt. Những địa chỉ IP hay tên miền bị loại trừ được đánh dấu bằng màu nền xám.',
	'DISPLAY_INLINED'				=> 'Hiển thị hình ảnh trong bài viết',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Nếu bạn tắt tuỳ chọn này, những hình ảnh được đính kèm sẽ hiển thị như liên kết.',
	'DISPLAY_ORDER'					=> 'Hiển thị tập tin đính kèm theo thứ tự',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Hiển thị những tập tin đính kèm theo thứ tự thời gian.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Sửa nhóm tập tin',
	'EXCLUDE_ENTERED_IP'			=> 'Bật tuỳ chọn này để loại trừ những địa chỉ IP/Tên miền được nhập vào.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Loại trừ từ những địa chỉ IP/Tên miền cho phép',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Loại trừ từ những địa chỉ IP/Tên miền đã cấm',
	'EXTENSIONS_UPDATED'			=> 'Loại tập tin đã được cập nhật thành công',
	'EXTENSION_EXIST'				=> 'Loại tập tin <strong>%s</strong> đã được sử dụng',
	'EXTENSION_GROUP'				=> 'Nhóm tập tin',
	'EXTENSION_GROUPS'				=> 'Nhóm tập tin',
	'EXTENSION_GROUP_DELETED'		=> 'Nhóm tập tin đã được xoá thành công',
	'EXTENSION_GROUP_EXIST'			=> 'Nhóm tập tin <strong>%s</strong> đã được sử dụng',

	'GO_TO_EXTENSIONS'		=> 'Chuyển đến phần quản lý loại tập tin',
	'GROUP_NAME'			=> 'Tên nhóm tập tin',

	'IMAGE_LINK_SIZE'			=> 'Kích thước hình ảnh sẽ hiển thị như liên kết',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Hiển thị những hình ảnh được đính kèm như liên kết nếu kích thước hình ảnh lớn hơn kích thước đã chọn, thiết lập <strong>0 Pixel x 0 Pixel</strong> để vô hiệu chức năng này.',
	'IMAGICK_PATH'				=> 'Đường dẫn chương trình Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Đường dẫn chính xác đến ứng dụng chuyển đổi hình ảnh Imagemagick trên máy chủ, ví dụ như <strong>/usr/bin/</strong>',

	'MAX_ATTACHMENTS'				=> 'Số tập tin đính kèm tối đa trong mỗi bài viết',
	'MAX_ATTACHMENTS_PM'			=> 'Số tập tin đính kèm tối đa trong mỗi tin nhắn',
	'MAX_EXTGROUP_FILESIZE'			=> 'Dung lượng tập tin tối đa',
	'MAX_IMAGE_SIZE'				=> 'Kích thước hình ảnh tối đa',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Kích thước tối đa cho những hình ảnh được đính kèm, thiết lập <strong>0 Pixel x 0 Pixel</strong> để vô hiệu việc đính kèm hình ảnh.',
	'MIN_THUMB_FILESIZE'			=> 'Dung lượng tập tin tạo hình thu nhỏ tối thiểu',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Không tạo hình thu nhỏ cho những tập tin có dung lượng lớn hơn mức dung lượng này.',
	'MODE_INLINE'					=> 'Trực tuyến',
	'MODE_PHYSICAL'					=> 'Vật lí',

	'NOT_ALLOWED_IN_PM'			=> 'Không cho phép trong tin nhắn',
	'NOT_ASSIGNED'				=> 'Không chỉ định',
	'NO_EXT_GROUP'				=> 'Không có nhóm tập tin nào',
	'NO_EXT_GROUP_NAME'			=> 'Bạn chưa nhập tên nhóm tập tin',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Không có nhóm tập tin nào được xác định',
	'NO_FILE_CAT'				=> 'Không có loại tập tin nào',	
	'NO_IMAGE'					=> 'Không có hình ảnh',
	'NO_THUMBNAIL_SUPPORT'		=> 'Chức năng hỗ trợ tạo hình thu nhỏ đã bị vô hiệu bởi vì máy chủ của bạn không hỗ trợ thư viện GD và đường dẫn đến chương trình Imagemagick không thể tìm thấy.',
	'NO_UPLOAD_DIR'				=> 'Thư mục tải lên bạn vừa chọn không tồn tại.',
	'NO_WRITE_UPLOAD'			=> 'Thư mục tải lên bạn vừa chọn không được cấp phép có thể ghi trên máy chủ. Bạn hãy vui lòng thay đổi thiết lập cấp phép có thể ghi cho thư mục này trên máy chủ.',

	'ORDER_ALLOW_DENY'		=> 'Đồng ý',
	'ORDER_DENY_ALLOW'		=> 'Từ chối',

	'REMOVE_ALLOWED_IPS'		=> 'Gỡ bỏ hoặc ngưng loại trừ những địa chỉ IP/Tên miền cho phép',
	'REMOVE_DISALLOWED_IPS'		=> 'Gỡ bỏ hoặc ngưng loại trừ những địa chỉ IP/Tên miền bị cấm',

	'SEARCH_IMAGICK'				=> 'Tìm kiếm ứng dụng Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Danh sách đồng ý/từ chối',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Danh sách đồng ý hay từ chối của các địa chỉ, thiết lập này chỉ áp dụng cho việc tải về tập tin',
	'SECURE_DOWNLOADS'				=> 'Bật chế độ tải về an toàn',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Nếu bật tuỳ chọn này, việc cho phép tải về tập tin sẽ giới hạn trong những địa chỉ IP/Tên miền mà bạn đã chỉ định cho phép.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Chế độ tải về an toàn không được bật. Những thiết lập bên dưới chỉ có tác dụng nếu như bạn bật chế độ tải về an toàn.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Danh sách địa chỉ IP/tên miền đã được cập nhật thành công',
	'SECURE_EMPTY_REFERRER'			=> 'Cho phép sử dụng tham chiếu địa chỉ trống',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Chế độ tải về an toàn dựa trên những tham chiếu địa chỉ của máy chủ. Bạn có muốn bỏ qua tham chiếu địa chỉ cho chế độ tải về an toàn?',
	'SETTINGS_CAT_IMAGES'			=> 'Thiết lập nhóm tập tin hình ảnh',
	'SPECIAL_CATEGORY'				=> 'Nhóm tập tin đặc biệt',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Nhóm tập tin đặc biệt là những loại tập tin xuất hiện đặc biệt trong bài viết.',
	'SUCCESSFULLY_UPLOADED'			=> 'Đã tải lên thành công',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Nhóm tập tin đã được tạo thành công',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Nhóm tập tin đã được cập nhật thành công',

	'UPLOADING_FILES'				=> 'Đang tải lên tập tin',
	'UPLOADING_FILE_TO'				=> 'Đang tải lên tập tin <strong>%1$s</strong> đến bài viết có số ID <strong>%2$d</strong> ...',
	'UPLOAD_DENIED_FORUM'			=> 'Bạn không được cấp phép để tải lên tập tin đến chuyên mục <strong>%s</strong>',
	'UPLOAD_DIR'					=> 'Thư mục tải lên',
	'UPLOAD_DIR_EXPLAIN'			=> 'Thư mục chưa những tập tin đính kèm trong hệ thống.',
	'UPLOAD_ICON'					=> 'Biểu tượng tập tin',
	'UPLOAD_NOT_DIR'				=> 'Thư mục tải lên bạn vừa chọn không phải là địa chỉ của một thư mục.',
));

?>