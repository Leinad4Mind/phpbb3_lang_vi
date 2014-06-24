<?php
/** 
*
* acp/styles [Vietnamese]
*
* @package language
* @version 1.62
* @copyright (c) 2006 nedka
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
	'ACP_STYLES_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lí các giao diện hiện có trên hệ thống. Bạn có thể thay đổi các giao diện, xóa, ngưng kích hoạt, kích hoạt lại hay cài đặt những giao diện mới. Bạn cũng có thể xem trước một giao diện sẽ trông như thế nào khi cài đặt trên hệ thống. Bên cạnh đó, thông tin về số lượng người dùng lựa chọn mỗi giao diện cũng được cung cấp bên dưới. Thiết lập thay thế giao diện mặc định của người dùng không nằm tại đây.',
	'ADD_TEMPLATE'			=> 'Tạo khuôn mẫu',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Bạn có thể tạo một khuôn mẫu mới tại đây. Tùy thuộc vào cấu hình và thiết lập cấp phép tập tin trên máy chủ của mình mà bạn có thể thay đổi những tùy chọn thêm vào tại đây. Ví dụ, bạn có thể tạo ra một khuôn mẫu mới từ khuôn mẫu hiện có. Bạn cũng có thể tải lên hoặc nhập khuôn mẫu từ thư mục lưu trữ. Nếu bạn tải lên hoặc nhập khuôn mẫu thì tên của khuôn mẫu đó có thể tùy chọn lấy từ tên được lưu trữ bằng cách để trống trong phần tên khuôn mẫu.',
	'ARCHIVE_FORMAT'		=> 'Loại tập tin lưu trữ',
	'AUTOMATIC_EXPLAIN'		=> 'Để trống phần này để hệ thống tự động xác định kích thước.',

	'BACKGROUND'			=> 'Nền',
	'BACKGROUND_COLOUR'		=> 'Màu nền',
	'BACKGROUND_IMAGE'		=> 'Hình nền',
	'BACKGROUND_REPEAT'		=> 'Nền lặp lại',
	'BOLD'					=> 'Đậm',

	'CACHE'							=> 'Bộ nhớ đệm',
	'CACHE_CACHED'					=> 'Đã tạo bộ đệm',
	'CACHE_FILENAME'				=> 'Tập tin khuôn mẫu',
	'CACHE_FILESIZE'				=> 'Dung lượng tập tin',
	'CACHE_MODIFIED'				=> 'Ngày chỉnh sửa',
	'CANNOT_BE_INSTALLED'			=> 'Không thể cài đặt',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Bạn có chắc chắn muốn xóa tất cả các tập tin khuôn mẫu đã tạo bộ đệm?',
	'CONFIRM_DELETE_STYLES'			=> 'Bạn có chắc chắn muốn xóa giao diện đã chọn?',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Bạn có chắc chắn muốn gỡ bỏ giao diện đã chọn?',
	'COPYRIGHT'						=> 'Bản quyền',
	'CREATE_STYLE'					=> 'Tạo giao diện mới',
	'CREATE_TEMPLATE'				=> 'Tạo khuôn mẫu mới',
	'CREATE_THEME'					=> 'Tạo kiểu dáng mới',
	'CURRENT_IMAGE'					=> 'Hình ảnh hiện tại',

	'DEACTIVATE_DEFAULT'			=> 'Bạn không thể ngưng kích hoạt giao diện mặc định.',
	'DELETE_FROM_FS'				=> 'Xóa từ hệ thống tập tin giao diện',
	'DELETE_STYLE'					=> 'Xóa giao diện',
	'DELETE_STYLE_EXPLAIN'			=> 'Bạn có thể gỡ bỏ giao diện đã chọn tại đây. Hãy cẩn thận vì việc xóa giao diện không thể phục hồi lại được.',
	'DELETE_STYLE_FILES_FAILED'		=> 'Có lỗi xảy ra khi xóa giao diện “%s”.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Các tập tin của giao diện “%s” đã được xóa hết.',
	'DELETE_TEMPLATE'				=> 'Xóa khuôn mẫu',
	'DELETE_TEMPLATE_EXPLAIN'		=> 'Bạn có thể gỡ bỏ khuôn mẫu đã chọn khỏi cơ sở dữ liệu tại đây. Lưu ý rằng thao tác này không thể hoàn lại. Chúng tôi khuyên bạn nên xuất khuôn mẫu ra trước để sử dụng sau này.',
	'DETAILS'						=> 'Chi tiết',
	'DIMENSIONS_EXPLAIN'			=> 'Bật thiết lập này để đính kèm thông số chiều rộng/chiều cao.',

	'EDIT_DETAILS_STYLE'				=> 'Sửa giao diện',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Sử dụng bảng điều khiển bên dưới, bạn có thể chỉnh sửa giao diện hiện tại này. Bạn có thể thay đổi sự kết hợp của khuôn mẫu và kiểu dáng được sử dụng trong gói giao diện. Bạn cũng có thể thiết lập giao diện này trở thành giao diện mặc định.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Sửa thông tin khuôn mẫu',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Bạn có thể sửa tên của gói khuôn mẫu tại đây',
	'EDIT_DETAILS_THEME'				=> 'Sửa thông tin kiểu dáng',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Bạn có thể sửa tên của gói kiểu dáng tại đây. ',
	'EDIT_TEMPLATE'						=> 'Sửa khuôn mẫu',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉnh sửa trực tiếp khuôn mẫu của mình. Những chỉnh sửa này không thể phục hồi lại như cũ một khi đã tiến hành. Hãy cẩn thận khi chỉnh sửa khuôn mẫu của bạn và hãy nhớ dấu đóng thẻ cho tất cả các biến giao diện <var>{XXXX}</var> cũng như các thẻ lệnh điều kiện khác.',
	'EDIT_THEME'						=> 'Sửa kiểu dáng',
	'EDIT_THEME_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉnh sửa kiểu dáng đã chọn, thay đổi màu sắc, hình ảnh…',
	'EDITOR_DISABLED'					=> 'Công cụ chỉnh sửa khuôn mẫu đã bị vô hiệu.',
	'EXPORT'							=> 'Xuất',

	'FOREGROUND'			=> 'Tiền cảnh',
	'FONT_COLOUR'			=> 'Màu chữ',
	'FONT_FACE'				=> 'Phông chữ',
	'FONT_FACE_EXPLAIN'		=> 'Bạn có thể xác định nhiều phông chữ, ngăn cách nhau bằng dấu phẩy (,). Nếu trên máy tính của người dùng không có phông chữ đầu tiên mà bạn chọn thì lần lượt các phông chữ kế tiếp sẽ được chọn.',
	'FONT_SIZE'				=> 'Kích thước phông chữ',

	'GLOBAL_IMAGES'	=> 'Hình ảnh dùng chung',

	'HIDE_CSS'	=> 'Ẩn hết CSS',

	'IMAGE_WIDTH'		=> 'Chiều rộng',
	'IMAGE_HEIGHT'		=> 'Chiều cao',
	'IMAGE'				=> 'Hình ảnh',
	'IMAGE_NAME'		=> 'Tên tập tin',
	'IMAGE_PARAMETER'	=> 'Thông số',
	'IMAGE_VALUE'		=> 'Giá trị',
	'ITALIC'			=> 'Nghiêng',

	'IMG_CAT_BUTTONS'		=> 'Các nút bấm tùy thuộc vào ngôn ngữ',
	'IMG_CAT_CUSTOM'		=> 'Hình tùy chọn',
	'IMG_CAT_FOLDERS'		=> 'Biểu tượng chủ đề',
	'IMG_CAT_FORUMS'		=> 'Biểu tượng chuyên mục',
	'IMG_CAT_ICONS'			=> 'Biểu tượng tổng quát',
	'IMG_CAT_LOGOS'			=> 'Logo',
	'IMG_CAT_POLLS'			=> 'Hình bình chọn',
	'IMG_CAT_UI'			=> 'Các thành phần tổng quát trong giao diện người dùng',
	'IMG_CAT_USER'			=> 'Hình thêm vào',

	'IMG_SITE_LOGO'			=> 'Logo chính',
	'IMG_UPLOAD_BAR'		=> 'Thanh tiến trình tải lên',
	'IMG_POLL_LEFT'			=> 'Thanh bình chọn trái',
	'IMG_POLL_CENTER'		=> 'Thanh bình chọn giữa',
	'IMG_POLL_RIGHT'		=> 'Thanh bình chọn phải',
	'IMG_ICON_FRIEND'		=> 'Thêm bạn thân',
	'IMG_ICON_FOE'			=> 'Thêm kẻ thù',

	'IMG_FORUM_LINK'			=> 'Chuyên mục liên kết',
	'IMG_FORUM_READ'			=> 'Chuyên mục',
	'IMG_FORUM_READ_LOCKED'		=> 'Chuyên mục bị khóa',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Chuyên mục con',
	'IMG_FORUM_UNREAD'			=> 'Chuyên mục có bài viết chưa xem',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Chuyên mục có bài viết chưa xem bị khóa',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Chuyên mục con có bài viết chưa xem',
	'IMG_SUBFORUM_READ'			=> 'Danh sách chuyên mục con',
	'IMG_SUBFORUM_UNREAD'		=> 'Danh sách chuyên mục con có bài viết chưa xem',

	'IMG_TOPIC_MOVED'	=> 'Chủ đề đã di chuyển',

	'IMG_TOPIC_READ'				=> 'Chủ đề',
	'IMG_TOPIC_READ_MINE'			=> 'Chủ đề do thành viên gửi',
	'IMG_TOPIC_READ_HOT'			=> 'Chủ đề nhiều người xem',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Chủ đề nhiều người xem do thành viên gửi',
	'IMG_TOPIC_READ_LOCKED'			=> 'Chủ đề bị khóa',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Chủ đề bị khóa do thành viên gửi',

	'IMG_TOPIC_UNREAD'				=> 'Chủ đề có bài viết chưa xem',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Chủ đề có bài viết chưa xem do thành viên gửi',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Chủ đề có bài viết chưa xem nhiều người xem',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Chủ đề có bài viết chưa xem nhiều người xem do thành viên gửi',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Chủ đề có bài viết chưa xem bị khóa',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Chủ đề có bài viết chưa xem bị khóa do thành viên gửi',

	'IMG_STICKY_READ'				=> 'Chú ý',
	'IMG_STICKY_READ_MINE'			=> 'Chú ý do thành viên gửi',
	'IMG_STICKY_READ_LOCKED'		=> 'Chú ý bị khóa',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Chú ý bị khóa do thành viên gửi',
	'IMG_STICKY_UNREAD'				=> 'Chú ý có bài viết chưa xem',
	'IMG_STICKY_UNREAD_MINE'		=> 'Chú ý có bài viết chưa xem do thành viên gửi',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Chú ý có bài viết chưa xem bị khóa',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Chú ý có bài viết chưa xem bị khóa do thành viên gửi',

	'IMG_ANNOUNCE_READ'					=> 'Thông báo',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Thông báo do thành viên gửi',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Thông báo bị khóa',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Thông báo bị khóa do thành viên gửi',
	'IMG_ANNOUNCE_UNREAD'				=> 'Thông báo có bài viết chưa xem',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Thông báo có bài viết chưa xem do thành viên gửi',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Thông báo có bài viết chưa xem bị khóa',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Thông báo có bài viết chưa xem bị khóa do thành viên gửi',

	'IMG_GLOBAL_READ'					=> 'Thông báo chung',
	'IMG_GLOBAL_READ_MINE'				=> 'Thông báo chung do thành viên gửi',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Thông báo chung bị khóa',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Thông báo chung bị khóa do thành viên gửi',
	'IMG_GLOBAL_UNREAD'					=> 'Thông báo chung có bài viết chưa xem',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Thông báo chung có bài viết chưa xem do thành viên gửi',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Thông báo chung có bài viết chưa xem bị khóa',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Thông báo chung có bài viết chưa xem bị khóa do thành viên gửi',

	'IMG_PM_READ'		=> 'Tin nhắn đã xem',
	'IMG_PM_UNREAD'		=> 'Tin nhắn chưa xem',

	'IMG_ICON_BACK_TOP'		=> 'Đầu trang',

	'IMG_ICON_CONTACT_AIM'		=> 'Tài khoản AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Gửi email',
	'IMG_ICON_CONTACT_ICQ'		=> 'Tài khoản ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Tài khoản Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'Tài khoản Windows Live',
	'IMG_ICON_CONTACT_PM'		=> 'Gửi tin nhắn',
	'IMG_ICON_CONTACT_YAHOO'	=> 'Tài khoản Yahoo',
	'IMG_ICON_CONTACT_WWW'		=> 'Website',

	'IMG_ICON_POST_DELETE'			=> 'Xóa bài viết',
	'IMG_ICON_POST_EDIT'			=> 'Sửa bài viết',
	'IMG_ICON_POST_INFO'			=> 'Hiển thị thông tin bài viết',
	'IMG_ICON_POST_QUOTE'			=> 'Trích dẫn bài viết',
	'IMG_ICON_POST_REPORT'			=> 'Báo cáo bài viết',
	'IMG_ICON_POST_TARGET'			=> 'Bài viết',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Bài viết mới',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Tập tin đính kèm',
	'IMG_ICON_TOPIC_LATEST'			=> 'Bài viết sau cùng',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Bài viết chưa xem mới nhất',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Bài viết đã được báo cáo',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Bài viết đã bị từ chối',

	'IMG_ICON_USER_ONLINE'		=> 'Người dùng trực tuyến',
	'IMG_ICON_USER_OFFLINE'		=> 'Người dùng ngoại tuyến',
	'IMG_ICON_USER_PROFILE'		=> 'Hiển thị thông tin cá nhân',
	'IMG_ICON_USER_SEARCH'		=> 'Tìm kiếm bài viết của thành viên',
	'IMG_ICON_USER_WARN'		=> 'Cảnh cáo người dùng',

	'IMG_BUTTON_PM_FORWARD'		=> 'Tin nhắn chuyển tiếp',
	'IMG_BUTTON_PM_NEW'			=> 'Tin nhắn mới',
	'IMG_BUTTON_PM_REPLY'		=> 'Trả lời tin nhắn',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Chủ đề bị khóa',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Chủ đề mới',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Trả lời chủ đề',

	'IMG_USER_ICON1'		=> 'Hình tự tạo 1',
	'IMG_USER_ICON2'		=> 'Hình tự tạo 2',
	'IMG_USER_ICON3'		=> 'Hình tự tạo 3',
	'IMG_USER_ICON4'		=> 'Hình tự tạo 4',
	'IMG_USER_ICON5'		=> 'Hình tự tạo 5',
	'IMG_USER_ICON6'		=> 'Hình tự tạo 6',
	'IMG_USER_ICON7'		=> 'Hình tự tạo 7',
	'IMG_USER_ICON8'		=> 'Hình tự tạo 8',
	'IMG_USER_ICON9'		=> 'Hình tự tạo 9',
	'IMG_USER_ICON10'		=> 'Hình tự tạo 10',

	'INACTIVE_STYLES'			=> 'Giao diện không sử dụng',
	'INCLUDE_DIMENSIONS'		=> 'Đính kèm kích thước',
	'INCLUDE_TEMPLATE'			=> 'Đính kèm khuôn mẫu',
	'INCLUDE_THEME'				=> 'Đính kèm kiểu dáng',
	'INHERITING_FROM'			=> 'Kế thừa từ',
	'INSTALL_STYLE'				=> 'Cài đặt giao diện',
	'INSTALL_STYLES'			=> 'Cài đặt các giao diện',
	'INSTALL_STYLES_EXPLAIN'	=> 'Với công cụ này, bạn có thể cài đặt các giao diện mới cho hệ thống.<br />Nếu giao diện bạn đang muốn cài không được liệt kê trong danh sách bên dưới, hãy kiểm tra xem bạn đã cài đặt giao diện đó chưa. Nếu chưa, hãy chắc chắn rằng bạn đã tải lên gói giao diện hợp lệ.',
	'INSTALLED_STYLE'			=> 'Giao diện đã cài đặt',
	'INVALID_STYLE_ID'			=> 'Mã ID giao diện không hợp lệ.',

	'LINE_SPACING'		=> 'Khoảng cách dòng',
	'LOCALISED_IMAGES'	=> 'Hình ảnh thay đổi theo ngôn ngữ',

	'NO_CLASS'					=> 'Không thể tìm thấy lớp CSS trong kiểu dáng.',
	'NO_IMAGE'					=> 'Không có hình ảnh nào',
	'NO_IMAGE_ERROR'			=> 'Không thể tìm thấy hình ảnh trong hệ thống tập tin giao diện.',
	'NO_MATCHING_STYLES_FOUND'	=> 'Không có giao diện nào trùng khớp với truy vấn của bạn.',
	'NO_STYLE'					=> 'Không thể tìm thấy giao diện trong hệ thống tập tin giao diện.',
	'NO_TEMPLATE'				=> 'Không thể tìm thấy khuôn mẫu trong hệ thống tập tin giao diện.',
	'NO_THEME'					=> 'Không thể tìm thấy kiểu dáng trong hệ thống tập tin giao diện.',
	'NO_UNINSTALLED_STYLE'		=> 'Không có giao diện nào được gỡ bỏ.',
	'NO_UNIT'					=> 'Không có',

	'ONLY_STYLE'	=> 'Hiện tại chỉ có giao diện này, bạn không thể xóa được.',

	'PARENT_STYLE_NOT_FOUND'	=> 'Không tìm thấy giao diện kế thừa. Giao diện đang kế thừa từ nó sẽ hoạt dộng không chính xác. Hãy vui lòng gỡ bỏ.',
	'PURGED_CACHE'				=> 'Bộ đệm đã được dọn sạch.',

	'REFRESH'					=> 'Nạp lại',
	'REPEAT_NO'					=> 'Không có',
	'REPEAT_X'					=> 'Chỉ chiều ngang',
	'REPEAT_Y'					=> 'Chỉ chiều dọc',
	'REPEAT_ALL'				=> 'Cả hai chiều',
	'REPLACE_STYLE'				=> 'Thay thế giao diện bằng',
	'REPLACE_STYLE_EXPLAIN'		=> 'Giao diện này sẽ thay thế cho giao diện mà bạn đang xóa được người dùng sử dụng.',
	'REPLACE_TEMPLATE'			=> 'Thay thế khuôn mẫu bằng',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Khuôn mẫu này sẽ thay thế cho khuôn mẫu mà bạn đang xóa trong bất kì giao diện nào sử dụng đến.',
	'REPLACE_THEME'				=> 'Thay thế kiểu dáng bằng',
	'REPLACE_THEME_EXPLAIN'		=> 'Kiểu dáng này sẽ thay thế cho kiểu dáng mà bạn đang xóa trong bất kì giao diện nào sử dụng đến.',
	'REPLACE_WITH_OPTION'		=> 'Thay bằng “%s”',
	'REQUIRES_STYLE'			=> 'Giao diện này yêu cầu giao diện khác là “%s” phải được cài đặt trước.',

	'SELECT_IMAGE'							=> 'Chọn hình ảnh',
	'SELECT_TEMPLATE'						=> 'Chọn tập tin khuôn mẫu',
	'SELECT_THEME'							=> 'Chọn tập tin kiểu dáng',
	'SELECTED_IMAGE'						=> 'Hình đã chọn',
	'SELECTED_TEMPLATE'						=> 'Khuôn mẫu đã chọn',
	'SELECTED_TEMPLATE_FILE'				=> 'Tập tin khuôn mẫu đã chọn',
	'SELECTED_THEME'						=> 'Kiểu dáng đã chọn',
	'SELECTED_THEME_FILE'					=> 'Tập tin kiểu dáng đã chọn',
	'STORE_FILESYSTEM'						=> 'Hệ thống tập tin giao diện',
	'STYLE_ACTIVATE'						=> 'Kích hoạt',
	'STYLE_ACTIVATED'						=> 'Đã kích hoạt giao diện thành công.',
	'STYLE_ACTIVE'							=> 'Đang sử dụng',
	'STYLE_ADDED'							=> 'Giao diện đã được thêm vào thành công.',
	'STYLE_DEACTIVATE'						=> 'Ngưng kích hoạt',
	'STYLE_DEACTIVATED'						=> 'Đã ngưng kích hoạt giao diện thành công.',
	'STYLE_DEFAULT'							=> 'Chọn làm giao diện mặc định',
	'STYLE_DEFAULT_CHANGE'					=> 'Đổi giao diện mặc định',
	'STYLE_DEFAULT_CHANGE_INACTIVE'			=> 'Bạn phải kích hoạt giao diện trước khi chọn làm giao diện mặc định.',
	'STYLE_DELETED'							=> 'Giao diện “%s” đã được xóa thành công.',
	'STYLE_DETAILS_UPDATED'					=> 'Giao diện đã được chỉnh sửa thành công.',
	'STYLE_ERR_ARCHIVE'						=> 'Bạn hãy chọn một phương pháp lưu trữ giao diện.',
	'STYLE_ERR_COPY_LONG'					=> 'Nội dung bản quyền giao diện không được phép vượt quá <strong>60</strong> ký tự.',
	'STYLE_ERR_INVALID_PARENT'				=> 'Giao diện kế thừa không hợp lệ.',
	'STYLE_ERR_MORE_ELEMENTS'				=> 'Bạn phải chọn ít nhất một thành phần giao diện.',
	'STYLE_ERR_NAME_CHARS'					=> 'Tên giao diện chỉ được phép sử dụng chữ số, chữ cái, các ký tự -, +, _ và khoảng trắng.',
	'STYLE_ERR_NAME_EXIST'					=> 'Tên giao diện này đã được sử dụng.',
	'STYLE_ERR_NAME_LONG'					=> 'Tên giao diện không được phép vượt quá <strong>30</strong> ký tự.',
	'STYLE_ERR_NOT_STYLE'					=> 'Giao diện bạn nhập hay tải lên không hợp lệ.',
	'STYLE_ERR_STYLE_NAME'					=> 'Bạn phải nhập tên cho giao diện này.',
	'STYLE_EXPORT'							=> 'Xuất giao diện',
	'STYLE_EXPORT_EXPLAIN'					=> 'Với công cụ này, bạn có thể xuất một giao diện để lưu trữ. Giao diện xuất không nhất thiết phải đính kèm toàn bộ thành phần giao diện đi kèm nhưng phải chứa ít nhất một thành phần. Ví dụ, nếu bạn đã tạo một kiểu dáng mới và gói hình giao diện cho một khuôn mẫu được sử dụng nhiều bởi các kiểu dáng khác, bạn chỉ cần đơn giản là xuất kiểu dáng và gói hình giao diện đó mà thôi và bỏ qua khuôn mẫu. Bạn có thể chọn tải về tập tin này trực tiếp hoặc giữ lại trong thư mục lưu trữ của hệ thống để tải về sau.',
	'STYLE_EXPORTED'						=> 'Giao diện đã được xuất thành công và được lưu trữ trong %s.',
	'STYLE_INSTALLED'						=> 'Giao diện “%s” đã được cài đặt thành công.',
	'STYLE_INSTALLED_EDIT_DETAILS'			=> '<a href="%s">Bấm vào đây</a> để sửa các thành phần giao diện hoặc thay đổi giao diện mặc định.',
	'STYLE_INSTALLED_RETURN_STYLES'			=> '<a href="%s">Bấm vào đây</a> để xem danh sách các giao diện đã cài đặt.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED'	=> '<a href="%s">Bấm vào đây</a> để cài đặt thêm nhiều giao diện khác.',
	'STYLE_NAME'							=> 'Tên giao diện',
	'STYLE_NOT_INSTALLED'					=> 'Giao diện “%s” đã không được cài đặt.',
	'STYLE_PATH'							=> 'Đường dẫn giao diện:',
	'STYLE_PARENT'							=> 'Giao diện kế thừa:',
	'STYLE_TEMPLATE'						=> 'Khuôn mẫu',
	'STYLE_THEME'							=> 'Kiểu dáng',
	'STYLE_UNINSTALL'						=> 'Gỡ bỏ',
	'STYLE_UNINSTALL_DEPENDENT'				=> 'Không thể gỡ bỏ giao diện “%s” vì nó đang được các giao diện khác sử dụng kế thừa lại.',
	'STYLE_UNINSTALLED'						=> 'Giao diện “%s” đã được gỡ bỏ thành công.',
	'STYLE_USED_BY'							=> 'Số người sử dụng (Bao gồm máy tìm kiếm)',

	'TEMPLATE_ADDED'						=> 'Khuôn mẫu đã được thêm vào thành công.',
	'TEMPLATE_CACHE'						=> 'Khuôn mẫu đã tạo bộ đệm',
	'TEMPLATE_CACHE_EXPLAIN'				=> 'Theo thiết lập mặc định, hệ thống giao diện của phpBB sẽ biên dịch bộ đệm cho toàn bộ các tập tin khuôn mẫu. Việc này sẽ rút ngắn thời gian nạp trang cho bạn khi một trang trong hệ thống đã được xem lần đầu và theo cách này có thể giảm bớt thời gian tạo trang cho máy chủ. Với công cụ này, bạn có thể xem trạng thái bộ đệm của mỗi tập tin và xóa riêng lẻ từng tập tin hay chỉ mục bộ đệm.',
	'TEMPLATE_CACHE_CLEARED'				=> 'Bộ nhớ đệm của khuôn mẫu đã được xóa thành công.',
	'TEMPLATE_CACHE_EMPTY'					=> 'Không có khuôn mẫu nào được tạo bộ đệm.',
	'TEMPLATE_DELETED_FS'					=> 'Khuôn mẫu đã được gỡ bỏ khỏi cơ sở dữ liệu nhưng các tập tin của nó vẫn còn trên hệ thống.',
	'TEMPLATE_DETAILS_UPDATED'				=> 'Thông tin khuôn mẫu đã được cập nhật thành công.',
	'TEMPLATE_EDITOR'						=> 'Công cụ chỉnh sửa mã HTML của khuôn mẫu',
	'TEMPLATE_EDITOR_HEIGHT'				=> 'Chiều cao công cụ chỉnh sửa khuôn mẫu',
	'TEMPLATE_ERR_ARCHIVE'					=> 'Bạn hãy chọn một phương pháp lưu trữ khuôn mẫu.',
	'TEMPLATE_ERR_CACHE_READ'				=> 'Không thể đọc được thư mục dùng để lưu trữ bộ đệm cho các tập tin khuôn mẫu.',
	'TEMPLATE_ERR_COPY_LONG'				=> 'Nội dung bản quyền khuôn mẫu không được phép vượt quá <strong>60</strong> ký tự.',
	'TEMPLATE_ERR_NAME_CHARS'				=> 'Tên khuôn mẫu chỉ được phép sử dụng chữ số, chữ cái, các ký tự -, +, _ và khoảng trắng.',
	'TEMPLATE_ERR_NAME_LONG'				=> 'Tên khuôn mẫu không được phép vượt quá <strong>30</strong> ký tự.',
	'TEMPLATE_ERR_STYLE_NAME'				=> 'Bạn phải nhập tên cho khuôn mẫu này.',
	'TEMPLATE_EXPORT_EXPLAIN'				=> 'Với công cụ này, bạn có thể xuất một khuôn mẫu để lưu trữ. Khuôn mẫu được xuất ra sẽ được đính kèm toàn bộ dữ liệu cần thiết cho việc cài đặt sau này trên một hệ thống khác. Bạn có thể chọn tải về tập tin này trực tiếp hoặc giữ lại trong thư mục lưu trữ của hệ thống để tải về sau.',
	'TEMPLATE_EXPORTED'						=> 'Khuôn mẫu đã được xuất thành công và được lưu trữ trong %s.',
	'TEMPLATE_FILE'							=> 'Tập tin khuôn mẫu',
	'TEMPLATE_FILE_UPDATED'					=> 'Tập tin khuôn mẫu đã được tải lên thành công.',
	'TEMPLATE_NAME'							=> 'Tên khuôn mẫu',
	'TEMPLATE_FILE_NOT_WRITABLE'			=> 'Không thể ghi tập tin khuôn mẫu “%s”. Hãy vui lòng kiểm tra lại thiết lập cấp phép cho thư mục và các tập tin tương ứng.',

	'THEME_ADDED'				=> 'Kiểu dáng mới đã được thêm vào.',
	'THEME_CLASS_ADDED'			=> 'Lớp CSS tùy chọn đã được thêm vào thành công.',
	'THEME_DELETED'				=> 'Kiểu dáng đã được xóa thành công.',
	'THEME_DELETED_FS'			=> 'Kiểu dáng đã được gỡ bỏ khỏi cơ sở dữ liệu nhưng một vài tập tin vẫn còn trong hệ thống tập tin giao diện.',
	'THEME_DETAILS_UPDATED'		=> 'Thông tin kiểu dáng đã được cập nhật thành công.',
	'THEME_EDITOR'				=> 'Công cụ chỉnh sửa kiểu dáng',
	'THEME_EDITOR_HEIGHT'		=> 'Chiều cao công cụ chỉnh sửa kiểu dáng',
	'THEME_ERR_ARCHIVE'			=> 'Bạn hãy chọn một phương pháp lưu trữ kiểu dáng',
	'THEME_ERR_CLASS_CHARS'		=> 'Chỉ sử dụng chữ số, chữ cái cùng với dấu chấm (.), dấu hai chấm (:), dấu gạch ngang (-) và dấu thăng (#) trong tên lớp CSS hợp lệ.',
	'THEME_ERR_COPY_LONG'		=> 'Nội dung bản quyền kiểu dáng không được phép vượt quá <strong>60</strong> ký tự.',
	'THEME_ERR_NAME_CHARS'		=> 'Tên kiểu dáng chỉ được phép sử dụng chữ số, chữ cái, các ký tự -, +, _ và khoảng trắng.',
	'THEME_ERR_NAME_EXIST'		=> 'Tên kiểu dáng này đã được sử dụng.',
	'THEME_ERR_NAME_LONG'		=> 'Tên kiểu dáng không được phép vượt quá <strong>30</strong> ký tự.',
	'THEME_ERR_NOT_THEME'		=> 'Kiểu dáng bạn nhập hay tải lên không hợp lệ.',
	'THEME_ERR_STYLE_NAME'		=> 'Bạn phải nhập tên cho kiểu dáng này.',
	'THEME_FILE'				=> 'Tập tin kiểu dáng',
	'THEME_FILE_NOT_WRITABLE'	=> 'Không thể ghi tập tin kiểu dáng %s. Hãy vui lòng kiểm tra lại cấp phép các thư mục và tập tin.',
	'THEME_EXPORT'				=> 'Xuất kiểu dáng',
	'THEME_EXPORT_EXPLAIN'		=> 'Với công cụ này, bạn có thể xuất một kiểu dáng để lưu trữ. Kiểu dáng được xuất ra sẽ được đính kèm toàn bộ dữ liệu cần thiết cho việc cài đặt sau này trên một hệ thống khác. Bạn có thể chọn tải về tập tin này trực tiếp hoặc giữ lại trong thư mục lưu trữ của hệ thống để tải về sau.',
	'THEME_EXPORTED'			=> 'Kiểu dáng đã được xuất thành công và được chứa trong %s.',
	'THEME_NAME'				=> 'Tên kiểu dáng',
	'THEME_UPDATED'				=> 'Kiểu dáng đã được cập nhật thành công.',

	'UNDERLINE'			=> 'Gạch chân',
	'UNINSTALL_DEFAULT'	=> 'Bạn không thể gỡ bỏ giao diện mặc định.',
	'UNSET'				=> 'Không xác định',

));
