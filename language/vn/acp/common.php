<?php
/** 
*
* acp common [Vietnamese]
*
* @package language
* @version $Id: common.php,v 1.23 2006/06/28 11:38:00 nedka Exp $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Cấp phép Administrator',
	'ACP_ADMIN_LOGS'			=> 'Ghi nhận Administrator',
	'ACP_ADMIN_ROLES'			=> 'Nhiệm vụ Administrator',
	'ACP_ATTACHMENTS'			=> 'Tập tin đính kèm',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Thiết lập tập tin đính kèm',
	'ACP_AUTH_SETTINGS'			=> 'Thiết lập xác thực',
	'ACP_AUTOMATION'			=> 'Tự động hoá',
	'ACP_AVATAR_SETTINGS'		=> 'Thiết lập hình đại diện',

	'ACP_BACKUP'				=> 'Sao lưu',
	'ACP_BAN'					=> 'Bảng cấm',
	'ACP_BAN_EMAILS'			=> 'Cấm Email',
	'ACP_BAN_IPS'				=> 'Cấm IP',
	'ACP_BAN_USERNAMES'			=> 'Cấm tên thành viên',
	'ACP_BASIC_PERMISSIONS'		=> 'Cấp phép đơn giản',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Cấu hình hệ thống',
	'ACP_BOARD_DEFAULTS'		=> 'Thiết lập mặc định của hệ thống',
	'ACP_BOARD_FEATURES'		=> 'Thiết lập chức năng hệ thống',
	'ACP_BOARD_MANAGEMENT'		=> 'Quản lý hệ thống',
	'ACP_BOARD_SETTINGS'		=> 'Thiết lập hệ thống',
	'ACP_BOTS'					=> 'Quản lý Spider/Robot',
	
	'ACP_CAT_DATABASE'			=> 'Cơ sở dữ liệu',
	'ACP_CAT_DOT_MODS'			=> '.MOD',
	'ACP_CAT_FORUMS'			=> 'Chuyên mục',
	'ACP_CAT_GENERAL'			=> 'Tổng quát',
	'ACP_CAT_MAINTENANCE'		=> 'Bảo trì',
	'ACP_CAT_PERMISSIONS'		=> 'Cấp phép',
	'ACP_CAT_POSTING'			=> 'Gửi bài viết',
	'ACP_CAT_STYLES'			=> 'Giao diện',
	'ACP_CAT_SYSTEM'			=> 'Hệ thống',
	'ACP_CAT_USERGROUP'			=> 'Thành viên và nhóm',
	'ACP_CAT_USERS'				=> 'Thành viên',
	'ACP_CLIENT_COMMUNICATION'	=> 'Ứng dụng truyền thông',
	'ACP_COOKIE_SETTINGS'		=> 'Thiết lập cookie',
	'ACP_CRITICAL_LOGS'			=> 'Ghi nhận lỗi',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Tuỳ biến mục thông tin cá nhân',
	
	'ACP_DATABASE'				=> 'Quản lý cơ sở dữ liệu',
	'ACP_DISALLOW'				=> 'Cấm',
	'ACP_DISALLOW_USERNAMES'	=> 'Tên thành viên bị cấm',
	
	'ACP_EMAIL_SETTINGS'		=> 'Thiết lập Email',
	'ACP_EXTENSION_GROUPS'		=> 'Quản lý tập tin đính kèm của nhóm',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Cấp phép cho chuyên mục',
	'ACP_FORUM_LOGS'				=> 'Ghi nhận chuyên mục',
	'ACP_FORUM_MANAGEMENT'			=> 'Quản lý chuyên mục',
	'ACP_FORUM_MODERATORS'			=> 'Cấp phép Moderator cho chuyên mục',
	'ACP_FORUM_PERMISSIONS'			=> 'Cấp phép chuyên mục',
	'ACP_FORUM_ROLES'				=> 'Nhiệm vụ chuyên mục',

	'ACP_GENERAL_CONFIGURATION'		=> 'Cấu hình tổng quát',
	'ACP_GENERAL_TASKS'				=> 'Thao tác tổng quát',
	'ACP_GLOBAL_MODERATORS'			=> 'Cấp phép Global Moderator',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Cấp phép chung',	
	'ACP_GROUPS'					=> 'Nhóm',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Cấp phép chuyên mục cho nhóm',
	'ACP_GROUPS_MANAGE'				=> 'Quản lý nhóm',
	'ACP_GROUPS_MANAGEMENT'			=> 'Quản lý nhóm',
	'ACP_GROUPS_PERMISSIONS'		=> 'Cấp phép nhóm',
	
	'ACP_ICONS'					=> 'Biểu tượng bài viết',
	'ACP_ICONS_SMILIES'			=> 'Biểu tượng bài viết/Biểu tượng vui',
	'ACP_IMAGESETS'				=> 'Gói hình ảnh giao diện',
	'ACP_INDEX'					=> 'Bảng điều khiển Administrator',
	
	'ACP_JABBER_SETTINGS'		=> 'Thiết lập Jabber',
	
	'ACP_LANGUAGE'				=> 'Quản lý ngôn ngữ',
	'ACP_LANGUAGE_PACKS'		=> 'Gói ngôn ngữ',
	'ACP_LOAD_SETTINGS'			=> 'Thiết lập nạp trang',
	'ACP_LOGGING'				=> 'Ghi nhận',
	
	'ACP_MAIN'					=> 'Bảng điều khiển Administrator',
	'ACP_MANAGE_EXTENSIONS'		=> 'Quản lý tập tin đính kèm',
	'ACP_MANAGE_FORUMS'			=> 'Quản lý chuyên mục',
	'ACP_MANAGE_RANKS'			=> 'Quản lý xếp hạng',
	'ACP_MANAGE_REASONS'		=> 'Quản lý báo cáo/Nguyên nhân từ chối',
	'ACP_MANAGE_USERS'			=> 'Quản lý thành viên',
	'ACP_MASS_EMAIL'			=> 'Gửi Email thành viên',
	'ACP_MESSAGES'				=> 'Bài viết',
	'ACP_MESSAGE_SETTINGS'		=> 'Thiết lập tin nhắn',
	'ACP_MODULE_MANAGEMENT'		=> 'Quản lý moduel',
	'ACP_MOD_LOGS'				=> 'Ghi nhận Moderator',
	'ACP_MOD_ROLES'				=> 'Nhiệm vụ Moderator',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Tập tin đính kèm không sử dụng',
	
	'ACP_PERMISSIONS'			=> 'Cấp phép',
	'ACP_PERMISSION_MASKS'		=> 'Danh sách cấp phép',
	'ACP_PERMISSION_ROLES'		=> 'Cấp phép nhiệm vụ',
	'ACP_PERMISSION_SETTINGS'	=> 'Thiết lập cấp phép',
	'ACP_PERMISSION_TRACE'		=> 'Dò theo cấp phép',
	'ACP_PHP_INFO'				=> 'Thông tin PHP',
	'ACP_POST_SETTINGS'			=> 'Thiết lập gửi bài',
	'ACP_PRUNE_FORUMS'			=> 'Dọn dẹp chuyên mục',
	'ACP_PRUNE_USERS'			=> 'Dọn dẹp thành viên',
	'ACP_PRUNING'				=> 'Dọn dẹp',
	
	'ACP_QUICK_ACCESS'			=> 'Truy cập nhanh',
	
	'ACP_RANKS'					=> 'Xếp hạng',
	'ACP_REASONS'				=> 'Báo cáo/Nguyên nhân từ chối',
	'ACP_REGISTER_SETTINGS'		=> 'Thiết lập đăng ký thành viên',

	'ACP_RESTORE'				=> 'Phục hồi',

	'ACP_SEARCH'				=> 'Cấu hình tìm kiếm',
	'ACP_SEARCH_INDEX'			=> 'Chỉ mục tìm kiếm',
	'ACP_SEARCH_SETTINGS'		=> 'Thiết lập tìm kiếm',

	'ACP_SECURITY_SETTINGS'		=> 'Thiết lập bảo mật',
	'ACP_SERVER_CONFIGURATION'	=> 'Cấu hình server',
	'ACP_SERVER_SETTINGS'		=> 'Thiết lập server',
	'ACP_SIGNATURE_SETTINGS'	=> 'Thiết lập chữ ký cá nhân',
	'ACP_SMILIES'				=> 'Biểu tượng vui',
	'ACP_SPECIAL_PERMISSIONS'	=> 'Cấp phép đặc biệt',
	'ACP_STYLE_COMPONENTS'		=> 'Thành phần giao diện',
	'ACP_STYLE_MANAGEMENT'		=> 'Quản lý giao diện',
	'ACP_STYLES'				=> 'Giao diện',
	
	'ACP_TEMPLATES'				=> 'Khuôn mẫu',
	'ACP_THEMES'				=> 'Kiểu dáng',
	
	'ACP_UPDATE'					=> 'Cập nhật',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Cấp phép chuyên mục cho thành viên',
	'ACP_USERS_LOGS'				=> 'Ghi nhận thành viên',
	'ACP_USERS_PERMISSIONS'			=> 'Cấp phép thành viên',
	'ACP_USER_ATTACH'				=> 'Tập tin đính kèm',
	'ACP_USER_AVATAR'				=> 'Hình đại diện',
	'ACP_USER_FEEDBACK'				=> 'Phản hồi',
	'ACP_USER_GROUPS'				=> 'Nhóm',
	'ACP_USER_MANAGEMENT'			=> 'Quản lý thành viên',
	'ACP_USER_OVERVIEW'				=> 'Tổng quan',
	'ACP_USER_PERM'					=> 'Cấp phép thành viên',
	'ACP_USER_PREFS'				=> 'Thiết lập cá nhân',
	'ACP_USER_PROFILE'				=> 'Thông tin cá nhân',
	'ACP_USER_RANK'					=> 'Xếp hạng thành viên',
	'ACP_USER_ROLES'				=> 'Nhiệm vụ thành viên',
	'ACP_USER_SECURITY'				=> 'Bảo mật thành viên',
	'ACP_USER_SIG'					=> 'Chữ ký cá nhân',

	'ACP_VC_SETTINGS'					=> 'Thiết lập mã xác nhận',
	'ACP_VERSION_CHECK'					=> 'Kiểm tra cập nhật',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Xem cấp phép cho Administrator',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Xem cấp phép chuyên mục cho Moderator',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Xem cấp phép cho chuyên mục',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Xem cấp phép cho Global Moderator',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Xem cấp phép cho thành viên',
	
	'ACP_WORDS'					=> 'Kiểm duyệt từ',

	'ACTION'				=> 'Thao tác',
	'ACTIVATE'				=> 'Kích hoạt',
	'ADD'					=> 'Thêm',
	'ADMIN'					=> 'Administrator',
	'ADMIN_INDEX'			=> 'Trang chủ administrator',
	'ADMIN_PANEL'			=> 'Bảng điều khiển của Administrator',

	'BACK'					=> 'Quay lại',

	'COLOUR_SWATCH'			=> 'Bảng mã màu an toàn',
	'CONFIG_UPDATED'		=> 'Cấu hình hệ thống đã được cập nhật thành công',
	'CONFIRM_OPERATION'		=> 'Bạn có chắc chắn muốn thực hiện yêu cầu này?',

	'DEACTIVATE'				=> 'Ngưng kích hoạt',
	'DIMENSIONS'				=> 'Kích thước',
	'DISABLE'					=> 'Vô hiệu',
	'DOWNLOAD'					=> 'Download',
	'DOWNLOAD_AS'				=> 'Download dưới dạng',
	'DOWNLOAD_STORE'			=> 'Download hoặc lưu trữ tập tin',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Bạn có thể download trực tiếp tập tin hoặc lưu trữ lại trong thư mục <strong>store/</strong> của hệ thống.',

	'EDIT'					=> 'Sửa',
	'ENABLE'				=> 'Bật',
	'EXPORT_DOWNLOAD'		=> 'Download',
	'EXPORT_STORE'			=> 'Lưu trữ',

	'FORUM_INDEX'			=> 'Trang chủ hệ thống',

	'GENERAL_OPTIONS'		=> 'Tuỳ chọn tổng quát',
	'GENERAL_SETTINGS'		=> 'Thiết lập tổng quát',
	'GLOBAL_MASK'			=> 'Danh sách cấp phép chung',

	'INSTALL'				=> 'Cài đặt',
	'IP'					=> 'Địa chỉ IP thành viên',
	'IP_HOSTNAME'			=> 'Địa chỉ IP hoặc tên miền',

	'LOGGED_IN_AS'			=> 'Bạn đã đăng nhập với tên thành viên:',
	'LOGIN_ADMIN'			=> 'Bạn phải được cấp phép trong hệ thống để chuyển đến bảng điều khiển của Administrator.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Để chuyển đến bảng điều khiển của Administrator, bạn cần phải xác thực lại tài khoản của mình trong hệ thống.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Bạn đã xác thực thành công với hệ thống và sẽ được chuyển đến bảng điều khiển của Administrator ngay bây giờ.',
	'LOOK_UP_FORUM'			=> 'Chọn một chuyên mục',

	'MANAGE'				=> 'Quản lý',
	'MOVE_DOWN'				=> 'Di chuyển xuống',
	'MOVE_UP'				=> 'Di chuyển lên',

	'NOTIFY'				=> 'Thông báo',
	'NO_ADMIN'				=> 'Bạn không được cấp phép để quản lý hệ thống.',
	'NO_EMAILS_DEFINED'		=> 'Không có địa chỉ Email hợp lệ nào được xác định',
	'NO_IPS_DEFINED'		=> 'Không có địa chỉ IP hay tên miền nào được xác định',

	'OFF'					=> 'TẮT',
	'ON'					=> 'BẬT',

	'PARSE_BBCODE'			=> 'Phân tách BBCode',
	'PARSE_SMILIES'			=> 'Phân tách biểu tượng vui',
	'PARSE_URLS'			=> 'Phân tách liên kết',
	'PROCEED_TO_ACP'		=> 'Bấm %svào đây%s để chuyển đến bảng điều khiển của Administrator',
	'REMIND'				=> 'Nhắc nhở',
	'REORDER'				=> 'Sắp xếp lại',
	'RESYNC'				=> 'Đồng bộ',	
	'RETURN_TO'				=> 'Quay về ...',

	'SELECT_ANONYMOUS'		=> 'Chọn thành viên ẩn',
	'SELECT_OPTION'			=> 'Chọn các mục tuỳ chọn',

	'UCP'					=> 'Bảng điều khiển của thành viên',
	'USERNAMES_EXPLAIN'		=> 'Xác định mỗi tên thành viên trên một hàng nhất định',
	'USER_CONTROL_PANEL'	=> 'Bảng điều khiển thành viên',

	'WARNING'				=> 'Cảnh báo',
	
	'DEBUG_EXTRA_WARNING'	=> 'Hằng số <strong>DEBUG_EXTRA</strong> chỉ dành riêng cho những người phát triển hệ thống trong quá trình phát triển.<br />Hệ thống đang thực thi mã để hiển thị các báo cáo về lệnh SQL, quá trình này có thể giảm đáng kể tốc độ truy vấn server của bạn. Những lỗi SQL nếu xảy ra luôn được hiển thị với mã truy vấn ban đầu đến tất cả các thành viên thay vì chỉ hiển thị dành riêng cho Administrator và đây là thiết lập mặc định của hệ thống.<br /><br />Nếu nhìn thấy những báo cáo này, hãy cẩn thận vì bạn đang chạy hệ thống trong chế độ <strong>Debug Mode</strong> và nếu đây là một hệ thống trực tuyến, hãy gỡ bỏ hằng số này từ tập tin cấu hình.',	
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Trang này liệt kê các thông tin về phiên bản PHP hiện tại được cài đặt trên server của bạn. Trang này cũng đính kèm thông tin chi tiết về các moduel đã được cài đặt và nạp cùng với PHP, những biến PHP sẵn có và những thiết lập PHP mặc định. Thông tin này có thể hữu ích cho bạn nếu bạn đang giải quyết những rắc rối mà mình gặp phải với hệ thống. Cần lưu ý rằng có một vài công ty hosting sẽ hạn chế những thông tin về PHP được hiển thị trong đây vì nguyên nhân bảo mật. Một lời khuyên dành cho bạn là đừng bao giờ cung cấp cho người khác biết những thông tin trên trang này ngoại trừ khi bạn đang cần hỗ trợ hoặc với các thành viên trong ban điều hành hệ thống.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Danh sách này liệt kê tất cả những thao tác được thực hiện bởi các Administrator. Bạn có thể sắp xếp theo tên thành viên, ngày tháng, địa chỉ IP hay thao tác. Nếu bạn được cấp phép, bạn có thể xoá từng bản ghi nhận thao tác cá nhân hay toàn bộ ghi nhận trong đây.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Danh sách này liệt kê tất cả những thao tác được thực hiện bởi chính hệ thống. Những ghi nhận này sẽ cung cấp cho bạn thông tin nếu như bạn đang giải quyết các rắc rối gặp phải với hệ thống, ví dụ như việc gửi Email từ hệ thống. Bạn có thể sắp xếp theo tên thành viên, ngày tháng, địa chỉ IP hay thao tác. Nếu bạn được cấp phép, bạn có thể xoá từng bản ghi nhận thao tác cá nhân hay toàn bộ ghi nhận trong đây.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Danh sách này liệt kê tất cả những thao tác được thực hiện bởi các Moderator, bạn hãy chọn một chuyên mục từ danh sách liệt kê để xem chi tiết. Bạn có thể sắp xếp theo tên thành viên, ngày tháng, địa chỉ IP hay thao tác. Nếu bạn được cấp phép, bạn có thể xoá từng bản ghi nhận thao tác cá nhân hay toàn bộ ghi nhận trong đây.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Đây là danh sách ghi nhận các thao tác của những thành viên torng hệ thống.',
	'ALL_ENTRIES'				=> 'Tất cả các mục',

	'DISPLAY_LOG'	=> 'Hiển thị những mục ghi nhận cách đây',

	'NO_ENTRIES'	=> 'Không có mục ghi nhận nào trong khoảng thời gian này',

	'SORT_IP'		=> 'Địa chỉ IP',
	'SORT_DATE'		=> 'Ngày tháng',
	'SORT_ACTION'	=> 'Thao tác ghi nhận',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Cám ơn bạn đã chọn sử dụng phpBB cho hệ thống của mình. Trang này sẽ cho bạn cái nhìn tổng quan về các giá trị thống kê khác nhau trong hệ thống. Các liên kết trong menu bên trái sẽ cho phép bạn điều khiển và cấu hình toàn bộ hệ thống với kinh nghiệm quản lý của mình. Mỗi trang sẽ có hướng dẫn riêng cách sử dụng từng loại công cụ trong hệ thống.',
	'ADMIN_LOG'					=> 'Những thao tác Administrator đã ghi nhận',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Đây là 5 thao tác mới nhất được thực hiện bởi các Administrator trong website. Bạn có thể xem danh sách đầy đủ trong phần ghi nhận thao tác tại menu bên dưới.',
	'AVATAR_DIR_SIZE'			=> 'Dung lượng thư mục hình đại diện',

	'BOARD_STARTED'		=> 'Ngày website bắt đầu hoạt động',

	'DATABASE_SIZE'		=> 'Dung lượng cơ sở dữ liệu',

	'FILES_PER_DAY'		=> 'Số tập tin đính kèm/ngày',
	'FORUM_STATS'		=> 'Thống kê website',

	'GZIP_COMPRESSION'	=> 'Chế độ nén Gzip',

	'INACTIVE_USERS'			=> 'Thành viên chưa kích hoạt',
	'INACTIVE_USERS_EXPLAIN'	=> 'Đây là danh sách của tất cả các thành viên đã đăng ký làm thành viên nhưng tài khoản của họ chưa được kích hoạt. Bạn có thể kích hoạt, xoá hay nhắc nhở bằng Email những tài khoản thành viên này nếu muốn.',

	'NO_INACTIVE_USERS'	=> 'Không có thành viên nào chưa kích hoạt',
	'NOT_AVAILABLE'		=> 'Không có sẵn',
	'NUMBER_FILES'		=> 'Tổng số tập tin đính kèm',
	'NUMBER_POSTS'		=> 'Tổng số bài viết',
	'NUMBER_TOPICS'		=> 'Tổng số chủ đề',
	'NUMBER_USERS'		=> 'Tổng số thành viên',

	'POSTS_PER_DAY'		=> 'Số bài viết/ngày',

	'RESET_DATE'			=> 'Tạo lại ngày website bắt đầu hoạt động mới',
	'RESET_ONLINE'			=> 'Tạo lại thông tin thành viên online mới',
	'RESYNC_POSTCOUNTS'		=> 'Đồng bộ lại bộ đếm số bài viết',
	'RESYNC_POST_MARKING'	=> 'Đồng bộ lại những chủ đề đã đánh dấu',
	'RESYNC_STATS'			=> 'Đồng bộ lại thống kê',

	'STATISTIC'			=> 'Thống kê',

	'TOPICS_PER_DAY'	=> 'Số chủ đề/ngày',

	'UPLOAD_DIR_SIZE'	=> 'Dung lượng thư mục upload',
	'USERS_PER_DAY'		=> 'Số thành viên/ngày',

	'VALUE'				=> 'Giá trị',

	'WELCOME_PHPBB'			=> 'Chào mừng bạn đã đến với hệ thống phpBB',
));

// Log
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa cấp phép thành viên</strong><br />&#187; %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa cấp phép nhóm thành viên</strong><br />&#187; %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa cấp phép Global Moderator</strong><br />&#187; %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa cấp phép nhóm Global Moderator</strong><br />&#187; %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa cấp phép Administrator</strong><br />&#187; %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa cấp phép nhóm Administrator</strong><br />&#187; %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa Administrator</strong><br />&#187; %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Đã thêm vào hoặc chỉnh sửa Global Moderator</strong><br />&#187; %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Đã thêm vào hoặc chỉnh sửa thành viên truy cập chuyên mục</strong> từ %s<br />&#187; %s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Đã thêm vào hoặc chỉnh sửa thành viên quản lý chuyên mục</strong> từ %s<br />&#187; %s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa nhóm truy cập chuyên mục</strong> từ %s<br />&#187; %s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa nhóm quản lý chuyên mục</strong> từ %s<br />&#187; %s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Đã thêm vào hoặc chỉnh sửa Moderator</strong> từ %s<br />&#187; %s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Đã thêm vào hoặc chỉnh sửa cấp phép chuyên mục</strong> từ %s<br />&#187; %s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Đã gỡ bỏ Administrator</strong><br />&#187; %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Đã gỡ bỏ Global Moderator</strong><br />&#187; %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Đã gỡ bỏ Moderator</strong> từ %s<br />&#187; %s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Đã gỡ bỏ cấp phép chuyên mục dành cho thành viên/nhóm thành viên</strong> từ %s<br />&#187; %s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Thiết lập cấp phép đã được chuyển từ</strong><br />&#187; %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Thiết lập cấp phép đã được khôi phục kể từ khi chuyển thiết lập cấp phép từ</strong><br />&#187; %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Đăng nhập thất bại vào bảng điều khiển của Administrator</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Đăng nhập thành công vào bảng điều khiển của Administrator</strong>',
	
	'LOG_ATTACH_EXT_ADD'		=> '<strong>Đã thêm vào hoặc chỉnh sửa loại tập tin đính kèm</strong><br />&#187; %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Đã gỡ bỏ loại tập tin đính kèm</strong><br />&#187; %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Đã cập nhật loại tập tin đính kèm</strong><br />&#187; %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Đã thêm vào nhóm tập tin đính kèm</strong><br />&#187; %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Đã chỉnh sửa nhóm tập tin đính kèm</strong><br />&#187; %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Đã gỡ bỏ nhóm tập tin đính kèm</strong><br />&#187; %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Tập tin đính kèm không sử dụng đã được đính kèm vào bài viết</strong><br />&#187; ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Những tập tin đính kèm không sử dụng đã được xoá</strong><br />&#187; %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Đã loại trừ thành viên khỏi bảng cấm</strong> vì nguyên nhân "<em>%s</em>"<br />&#187; %s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Đã loại trừ địa chỉ IP khỏi bảng cấm</strong> vì nguyên nhân "<em>%s</em>"<br />&#187; %s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Đã loại trừ địa chỉ Email khỏi bảng cấm</strong> vì nguyên nhân "<em>%s</em>"<br />&#187; %s ',
	'LOG_BAN_USER'			=> '<strong>Đã cấm thành viên</strong> vì nguyên nhân "<em>%s</em>"<br />&#187; %s ',
	'LOG_BAN_IP'			=> '<strong>Đã cấm địa chỉ IP</strong> vì nguyên nhân "<em>%s</em>"<br />&#187; %s',
	'LOG_BAN_EMAIL'			=> '<strong>Đã cấm địa chỉ Email</strong> vì nguyên nhân "<em>%s</em>"<br />&#187; %s',
	'LOG_UNBAN_USER'		=> '<strong>Đã ngưng cấm thành viên</strong><br />&#187; %s',
	'LOG_UNBAN_IP'			=> '<strong>Đã ngưng cấm địa chỉ IP</strong><br />&#187; %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Đã ngưng cấm địa chỉ Email</strong><br />&#187; %s',

	'LOG_BBCODE_ADD'		=> '<strong>Đã thêm vào thẻ BBCode mới</strong><br />&#187; %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Đã chỉnh sửa thẻ BBCode</strong><br />&#187; %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Đã xoá thẻ BBCode</strong><br />&#187; %s',

	'LOG_BOT_ADDED'		=> '<strong>Bot mới đã được tạo</strong><br />&#187; %s',
	'LOG_BOT_DELETE'	=> '<strong>Đã xoá Bot</strong><br />&#187; %s',
	'LOG_BOT_UPDATED'	=> '<strong>Bot đã được cập nhật</strong><br />&#187; %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Đã xoá ghi nhận của Administrator</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Đã xoá ghi nhận lỗi</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Đã xoá ghi nhận của Moderator</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Đã xoá ghi nhận của thành viên</strong><br />&#187; %s',
	'LOG_CLEAR_USERS'		=> '<strong>Đã xoá những ghi nhận của thành viên</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Đã thay đổi thiết lập đính kèm tập tin</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Đã thay đổi thiết lập xác thực</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Đã thay đổi thiết lập hình đại diện</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Đã thay đổi thiết lập cookie</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Đã thay đổi thiết lập Email</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Đã thay đổi thiết lập chức năng của hệ thống</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Đã thay đổi thiết lập nạp trang</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Đã thay đổi thiết lập tin nhắn</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Đã thay đổi thiết lập gửi bài</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Đã thay đổi thiết lập đăng ký thành viên</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Đã thay đổi thiết lập tìm kiếm</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Đã thay đổi thiết lập bảo mật</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Đã thay đổi thiết lập server</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Đã thay đổi thiết lập hệ thống</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Đã thay đổi thiết lập chữ ký cá nhân</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Đã thay đổi thiết lập mã xác nhận</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Đã chấp nhận chủ đề</strong><br />&#187; %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Thành viên đã bump chủ đề</strong><br />&#187; %s',
	'LOG_DELETE_POST'			=> '<strong>Đã xoá bài viết</strong><br />&#187; %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Đã xoá chủ đề</strong><br />&#187; %s',
	'LOG_FORK'					=> '<strong>Đã copy chủ đề</strong><br />&#187; from %s',
	'LOG_LOCK'					=> '<strong>Đã khoá chủ đề</strong><br />&#187; %s',
	'LOG_LOCK_POST'				=> '<strong>Đã khoá bài viết</strong><br />&#187; %s',
	'LOG_MERGE'					=> '<strong>Đã nhập chung bài viết</strong> sang chủ đề<br />&#187;%s',
	'LOG_MOVE'					=> '<strong>Đã di chuyển topic</strong><br />&#187; from %s',
	'LOG_TOPIC_DELETED'			=> '<strong>Đã xoá chủ đề</strong><br />&#187; %s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Đã đồng bộ lại bộ đếm số chủ đề</strong><br />&#187; %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Đã thay đổi loại chủ đề</strong><br />&#187; %s',
	'LOG_UNLOCK'				=> '<strong>Đã mở khoá chủ đề</strong><br />&#187; %s',
	'LOG_UNLOCK_POST'			=> '<strong>Đã mở khoá bài viết</strong><br />&#187; %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Đã thêm vào tên thành viên bị cấm</strong><br />&#187; %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Đã xoá tên thành viên bị cấm</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Sao lưu cơ sở dữ liệu</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Khôi phục cơ sở dữ liệu</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Đã loại trừ địa chỉ IP/Tên miền từ danh sách cho phép download</strong><br />&#187; %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Đã thêm vào địa chỉ IP/Tên miền từ danh sách cho phép download</strong><br />&#187; %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Đã gỡ bỏ địa chỉ IP/Tên miền từ danh sách cho phép download</strong><br />&#187; %s',

	'LOG_ERROR_JABBER'		=> '<strong>Lỗi Jabber</strong><br />&#187; %s',
	'LOG_ERROR_EMAIL'		=> '<strong>lỗi Email</strong><br />&#187; %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Đã tạo chuyên mục mới</strong><br />&#187; %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Đã xoá chuyên mục</strong><br />&#187; %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Đã xoá chuyên mục và toàn bộ chuyên mục con</strong><br />&#187; %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Đã xoá chuyên mục và di chuyển toàn bộ chuyên mục con</strong> đến %s<br />&#187; %s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Đã xoá chuyên mục và di chuyển toàn bộ bài viết</strong> đến %s<br />&#187; %s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Đã xoá chuyên mục và toàn bộ chuyên mục con, đã di chuyển toàn bộ bài viết</strong> đến %s<br />&#187; %s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Đã xoá chuyên mục, đã di chuyển toàn bộ bài viết</strong> đến %s <strong>và toàn bộ chuyên mục con</strong> đến %s<br />&#187; %s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Đã xoá chuyên mục và toàn bộ bài viết</strong><br />&#187; %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Đã xoá chuyên mục, toàn bộ chuyên mục con và bài viết</strong><br />&#187; %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Đã xoá chuyên mục và toàn bộ bài viết, đã di chuyển toàn bộ chuyên mục con</strong> đến %s<br />&#187; %s',
	'LOG_FORUM_EDIT'						=> '<strong>Đã chỉnh sửa thông tin chuyên mục</strong><br />&#187; %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Đã di chuyển chuyên mục</strong> %s <strong>xuống dưới</strong> %s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Đã di chuyển chuyên mục</strong> %s <strong>lên trên</strong> %s',
	'LOG_FORUM_SYNC'						=> '<strong>Đã đồng bộ lại chuyên mục</strong><br />&#187; %s',

	'LOG_GROUP_CREATED'		=> '<strong>Nhóm thành viên mới đã được tạo</strong><br />&#187; %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Thiết lập nhóm mặc định cho các thành viên</strong><br />&#187; %s',
	'LOG_GROUP_DELETE'		=> '<strong>Nhóm thành viên đã được xoá</strong><br />&#187; %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Người điều hành đã được giáng chức trong nhóm</strong> %s<br />&#187; %s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Thành viên đã được thăng chức người điều hành trong nhóm</strong> %s<br />&#187; %s',
	'LOG_GROUP_REMOVE'		=> '<strong>Thành viên đã được gỡ bỏ khỏi nhóm</strong> %s<br />&#187; %s',
	'LOG_GROUP_UPDATED'		=> '<strong>Thông tin về nhóm đã được cập nhật</strong><br />&#187; %s',
	'LOG_MODS_ADDED'		=> '<strong>Đã thêm vào người điều hành mới trong nhóm</strong> %s<br />&#187; %s',
	'LOG_USERS_APPROVED'	=> '<strong>Thành viên đã được chấp nhận tham gia vào nhóm</strong> %s<br />&#187; %s',
	'LOG_USERS_ADDED'		=> '<strong>Đã thêm vào thành viên mới trong nhóm</strong> %s<br />&#187; %s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Đã thêm vào gói hình ảnh giao diện mới trong cơ sở dữ liệu</strong><br />&#187; %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Đã thêm vào gói hình ảnh giao diện mới trong hệ thống tập tin giao diện</strong><br />&#187; %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Đã xoá gói hình ảnh giao diện</strong><br />&#187; %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Đã chỉnh sửa thông tin gói hình ảnh giao diện</strong><br />&#187; %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Đã chỉnh sửa gói hình ảnh giao diện</strong><br />&#187; %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Đã xuất gói hình ảnh giao diện</strong><br />&#187; %s',

	'LOG_INDEX_ACTIVATE'	=> '<strong>Đã kích hoạt những thành viên chưa kích hoạt</strong><br />&#187; %s',
	'LOG_INDEX_DELETE'		=> '<strong>Đã xoá những thành viên chưa kích hoạt</strong><br />&#187; %s',
	'LOG_INDEX_REMIND'		=> '<strong>Đã gửi Email nhắc nhở đến những thành viên chưa kích hoạt</strong><br />&#187; %s',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Đã cài đặt thành công hệ thống phpBB %s</strong>',

	'LOG_IP_BROWSER_CHECK'	=> '<strong>Không thể kiểm tra địa chỉ IP/trình duyệt trong phiên session này</strong><br />&#187;Địa chỉ IP của thành viên "<em>%s</em>" đã được kiểm tra lại trong session này với địa chỉ IP là "<em>%s</em>" và chuỗi kết quả về trình duyệt mà thành viên "<em>%s</em>" đang sử dụng được kiểm tra lại torng phiên session này với chuỗi kết quả trình duyệt là "<em>%s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Tài khoản Jabber đã được thay đổi</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Mật khẩu tài khoản Jabber đã được thay đổi</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Tài khoản Jabber đã được đăng ký</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Thiết lập Jabber đã được thay đổi</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Đã xoá gói ngôn ngữ</strong><br />&#187; %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Đã cài đặt gói ngôn ngữ</strong><br />&#187; %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Đã cập nhật thông tin về gói ngôn ngữ</strong><br />&#187; %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Đã thay thế gói ngôn ngữ</strong><br />&#187; %s',

	'LOG_MASS_EMAIL'		=> '<strong>Đã gửi Email số lượng lớn đến thành viên</strong><br />&#187; %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Đã thay đổi người gửi trong chủ đề "%s"</strong><br />&#187; từ %s thành %s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module đã được vô hiệu</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Module đã được kích hoạt</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module đã được di chuyển xuống</strong><br />&#187; %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module đã được di chuyển lên</strong><br />&#187; %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module đã được gỡ bỏ</strong><br />&#187; %s',
	'LOG_MODULE_ADD'		=> '<strong>Module đã được thêm vào</strong><br />&#187; %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module đã được chỉnh sửa</strong><br />&#187; %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Nhiệm vụ Administrator đã được thêm vào</strong><br />&#187; %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Nhiệm vụ Administrator đã được chỉnh sửa</strong><br />&#187; %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Nhiệm vụ Administrator đã được gỡ bỏ</strong><br />&#187; %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Nhiệm vụ chuyên mục đã được thêm vào</strong><br />&#187; %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Nhiệm vụ chuyên mục đã được chỉnh sửa</strong><br />&#187; %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Nhiệm vụ chuyên mục đã được gỡ bỏ</strong><br />&#187; %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Nhiệm vụ Moderator đã được thêm vào</strong><br />&#187; %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Nhiệm vụ Moderator đã được chỉnh sửa</strong><br />&#187; %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Nhiệm vụ Moderator đã được gỡ bỏ</strong><br />&#187; %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Nhiệm vụ thành viên đã được thêm vào</strong><br />&#187; %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Nhiệm vụ thành viên đã được chỉnh sửa</strong><br />&#187; %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Nhiệm vụ thành viên đã được gỡ bỏ</strong><br />&#187; %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Mục thông tin cá nhân đã được kích hoạt</strong><br />&#187; %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Mục thông tin cá nhân đã được thêm vào</strong><br />&#187; %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Mục thông tin cá nhân đã được ngưng kích hoạt</strong><br />&#187; %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Mục thông tin cá nhân đã được thay đổi</strong><br />&#187; %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Mục thông tin cá nhân đã được gỡ bỏ</strong><br />&#187; %s',

	'LOG_PRUNE'					=> '<strong>Đã dọn dẹp chuyên mục</strong><br />&#187; %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Đã dọn dẹp tự động chuyên mục</strong><br />&#187; %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Thành viên đã được ngưng kích hoạt</strong><br />&#187; %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Thành viên đã được dọn dẹp và toàn bộ bài viết đã được xoá</strong><br />&#187; %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Thành viên đã được dọn dẹp và toàn bộ bài viết đã được giữ lại</strong><br />&#187; %s',

	'LOG_REASON_ADDED'		=> '<strong>Đã thêm vào báo cáo/nguyên nhân từ chối</strong><br />&#187; %s',
	'LOG_REASON_REMOVED'	=> '<strong>Đã gỡ bỏ báo cáo/nguyên nhân từ chối</strong><br />&#187; %s',
	'LOG_REASON_UPDATED'	=> '<strong>Đã cập nhật báo cáo/nguyên nhân từ chối</strong><br />&#187; %s',

	'LOG_RESET_DATE'			=> '<strong>Ngày website bắt đầu hoạt động đã được tạo lại</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Thông tin thành viên online đã được tạo lại</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Bộ đếm số bài viết thành viên đã được đồng bộ lại</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Những chủ đề được đánh dấu đã được đồng bộ lại</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Trạng thái chủ đề, bài viết và thành viên đã được đồng bộ lại</strong>',

	'LOG_STYLE_ADD'				=> '<strong>Đã thêm vào giao diện mới</strong><br />&#187; %s',
	'LOG_STYLE_DELETE'			=> '<strong>Đã xoá giao diện</strong><br />&#187; %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Đã chỉnh sửa giao diện</strong><br />&#187; %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Đã xuất giao diện</strong><br />&#187; %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Đã thêm vào khuôn mẫu mới trong cơ sở dữ liệu</strong><br />&#187; %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Đã thêm vào khuôn mẫu mới trong hệ thống tập tin giao diện</strong><br />&#187; %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Đã xoá những tập tin cache trong khuôn mẫu <em>%s</em></strong><br />&#187; %s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Đã xoá khuôn mẫu</strong><br />&#187; %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Đã chỉnh sửa khuôn mẫu <em>%s</em></strong><br />&#187; %s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Đã chỉnh sửa thông tin khuôn mẫu</strong><br />&#187; %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Đã xuất khuôn mẫu</strong><br />&#187; %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Đã nạp lại khuôn mẫu</strong><br />&#187; %s',
	
	'LOG_THEME_ADD_DB'			=> '<strong>Đã thêm vào kiểu dáng mới trong cơ sở dữ liệu</strong><br />&#187; %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Đã thêm vào kiểu dáng mới trong hệ thống tập tin giao diện</strong><br />&#187; %s',
	'LOG_THEME_DELETE'			=> '<strong>Kiểu dáng đã được xoá</strong><br />&#187; %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Đã chỉnh sửa thông tin kiểu dáng</strong><br />&#187; %s',
	'LOG_THEME_EDIT'			=> '<strong>Đã chỉnh sửa kiểu dáng <em>%s</em></strong><br />&#187; Đã chỉnh sửa lớp CSS <em>%s</em>',
	'LOG_THEME_EDIT_ADD'		=> '<strong>Đã chỉnh sửa kiểu dáng <em>%s</em></strong><br />&#187; Đã thêm vào lớp CSS <em>%s</em>',	
	'LOG_THEME_EXPORT'			=> '<strong>Đã xuất kiểu dáng</strong><br />&#187; %s',

	'LOG_USER_ACTIVE'		=> '<strong>Thành viên đã được kích hoạt</strong><br />&#187; %s',
	'LOG_USER_BAN_USER'		=> '<strong>Đã cấm thành viên thông qua phần quản lý thành viên</strong> vì nguyên nhân "<em>%s</em>"<br />&#187; %s',
	'LOG_USER_BAN_IP'		=> '<strong>Đã cấm địa chỉ IP thông qua phần quản lý thành viên</strong> vì nguyên nhân "<em>%s</em>"<br />&#187; %s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Đã cấm địa chỉ Email thông qua phần quản lý thành viên</strong> vì nguyên nhân "<em>%s</em>"<br />&#187; %s',
	'LOG_USER_DELETED'		=> '<strong>Đã xoá thành viên</strong><br />&#187; %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Đã gỡ bỏ toàn bộ tập tin đính kèm được gửi bởi thành viên</strong><br />&#187; %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Đã gỡ bỏ hình đại diện của thành viên</strong><br />&#187; %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Đã gỡ bỏ toàn bộ bài viết được gửi bởi thành viên</strong><br />&#187; %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Đã gỡ bỏ chữ ký cá nhân của thành viên</strong><br />&#187; %s',
	'LOG_USER_INACTIVE'		=> '<strong>Thành viên đã được ngưng kích hoạt</strong><br />&#187; %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Đã di chuyển bài viết của thành viên</strong><br />&#187; bài viết gửi bởi "%s" sang chuyên mục "%s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Đã thay đổi mật khẩu của thành viên</strong><br />&#187; %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Đã yêu cầu thành viên kích hoạt lại tài khoản</strong><br />&#187; %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Thành viên "%s" đã thay đổi địa chỉ Email</strong><br />&#187; from "%s" to "%s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Đã thay đổi tên thành viên</strong><br />&#187; từ "%s" sang "%s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Đã cập nhật thông tin về thành viên</strong><br />&#187; %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Tài khoản thành viên đã được kích hoạt</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Hình đại diện của thành viên đã được gỡ bỏ</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Chữ ký cá nhân của thành viên đã được gỡ bỏ</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Đã thêm phản hồi thành viên</strong><br />&#187; %s',
	'LOG_USER_GENERAL'			=> '%s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Tài khoản thành viên đã ngưng kích hoạt</strong>',
	'LOG_USER_LOCK'				=> '<strong>Thành viên đã khoá chủ đề của mình</strong><br />&#187; %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Đã di chuyển tất cả bài viết đến chuyên mục "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Đã yêu cầu kích hoạt lại tài khoản thành viên</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Thành viên đã mở khoá chủ đề của mình</strong><br />&#187; %s',
	'LOG_USER_WARNING'			=> '<strong>Đã thêm cảnh cáo thành viên</strong><br />&#187;%s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Những cảnh cáo dành cho thành viên này</strong><br />&#187;%s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Thành viên đã thay đổi nhóm mặc định</strong><br />&#187; %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Thành viên đã bị giáng chức người điều hành từ nhóm</strong><br />&#187; %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Thành viên đã tham gia vào nhóm</strong><br />&#187; %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Thành viên đã tham gia vào nhóm và đang chờ quyết định chấp nhận</strong><br />&#187; %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Thành viên đã từ bỏ tư cách thành viên trong nhóm</strong><br />&#187; %s',

	'LOG_WORD_ADD'			=> '<strong>Đã thêm từ kiểm duyệt</strong><br />&#187; %s',
	'LOG_WORD_DELETE'		=> '<strong>Đã xoá từ kiểm duyệt</strong><br />&#187; %s',
	'LOG_WORD_EDIT'			=> '<strong>Đã sửa từ kiểm duyệt</strong><br />&#187; %s',
));

?>