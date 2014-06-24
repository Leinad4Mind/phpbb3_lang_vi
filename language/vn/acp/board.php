<?php
/** 
*
* acp_board [Vietnamese]
*
* @package language
* @version $Id: board.php,v 1.23 2006/08/17 08:06:00 nedka Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể thay đổi các thiết lập đơn giản của hệ thống, từ tên website, việc đăng ký thành viên cho đến tin nhắn cá nhân.',

	'CUSTOM_DATEFORMAT'				=> 'Tuỳ chọn ...',
	'DEFAULT_DATE_FORMAT'			=> 'Định dạng ngày tháng',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Sử dụng cú pháp giống như hàm <a href="http://www.php.net/date" onclick="this.target=\'_blank\';" title="Xem trong cửa sổ mới">date()</a> trong <strong>PHP</strong>.',
	'DEFAULT_LANGUAGE'				=> 'Ngôn ngữ mặc định',
	'DEFAULT_STYLE'					=> 'Giao diện mặc định',
	'DISABLE_BOARD'					=> 'Ngưng hoạt động hệ thống',
	'DISABLE_BOARD_EXPLAIN'			=> 'Tuỳ chọn này sẽ ngưng hoạt động của hệ thống đối với các thành viên. Bạn cũng có nhập vào một tin nhắn giới hạn trong <strong>255</strong> ký tự hiển thị như thông báo ngưng hoạt động của hệ thống nếu muốn.',
	'OVERRIDE_STYLE'				=> 'Thay thế cho giao diện lựa chọn của thành viên',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Tuỳ chọn thay thế toàn bộ những giao diện đã được các thành viên lựa chọn bằng giao diện mặc định duy nhất của hệ thống.',
	'RELATIVE_DAYS'					=> 'Định dạng ngày tháng tương đối',
	'SITE_DESC'						=> 'Giới thiệu về website',
	'SITE_NAME'						=> 'Tên website',
	'SYSTEM_DST'					=> 'Bật chế độ giờ mùa hè DST (Daylight Savings Time)',
	'SYSTEM_TIMEZONE'				=> 'Múi giờ hệ thống',
	'WARNINGS_EXPIRE'				=> 'Cảnh báo trong vòng',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Số ngày sau khi một cảnh cáo gửi cho thành viên hết hiệu lực',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Với công cụ này, bạn có thể kích hoạt hay vô hiệu một vài chức năng trong hệ thống',

	'ALLOW_ATTACHMENTS'			=> 'Cho phép đính kèm tập tin',
	'ALLOW_BOOKMARKS'			=> 'Cho phép đánh dấu chủ đề vào trang yêu thích',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Tuỳ chọn cho phép thành viên đánh dấu lại những chủ đề mà mình quan tâm vào trang yêu thích',
	'ALLOW_BBCODE'				=> 'Cho phép sử dụng BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Cho phép theo dõi chuyên mục',
	'ALLOW_NAME_CHANGE'			=> 'Cho phép thay đổi tên thành viên',
	'ALLOW_NO_CENSORS'			=> 'Cho phép tắt chế độ kiểm duyệt từ',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Tuỳ chọn cho phép thành viên có thể tự tắt chế độ kiểm duyệt từ của hệ thống.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Cho phép đính kèm tập tin trong tin nhắn',
	'ALLOW_SIG'					=> 'Cho phép sử dụng chữ ký cá nhân',
	'ALLOW_SIG_BBCODE'			=> 'Cho phép sử dụng BBCode trong chữ ký cá nhân',
	'ALLOW_SIG_FLASH'			=> 'Cho phép sử dụng thẻ BBCode <strong>FLASH</strong> trong chữ ký cá nhân',
	'ALLOW_SIG_IMG'				=> 'Cho phép sử dụng thẻ BBCode <strong>IMG</strong> trong chữ ký cá nhân',
	'ALLOW_SIG_SMILIES'			=> 'Cho phép sử dụng biểu tượng vui trong chữ ký cá nhân',
	'ALLOW_SMILIES'				=> 'Cho phép sử dụng biểu tượng vui',
	'ALLOW_TOPIC_NOTIFY'		=> 'Cho phép theo dõi chủ đề',
	'BOARD_PM'					=> 'Cho phép gửi tin nhắn',
	'BOARD_PM_EXPLAIN'			=> 'Tuỳ chọn kích hoạt hay vô hiệu chức năng gửi tin nhắn trong hệ thống đối với tất cả thành viên.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Hình đại diện thường là những hình ảnh nhỏ, những hình đơn mà thành viên đính kèm torng thông tin cá nhân của mình. Tuỳ thuộc vào giao diện được sử dụng, hình đại diện thường hiển thị bên dưới tên thành viên trong phần xem chủ đề. Với công cụ này, bạn có thể thay đổi cách sử dụng hình đại diện của thành viên. Lưu ý rằng trong trường hợp bạn kích hoạt tuỳ chọn cho phép thành viên tải lên hình đại diện, bạn cần phải tạo thư mục mang tên bên dưới trong hệ thống theo đúng đường dẫn đã thiết lập và chắc chắn thiết lập cấp phép có thể ghi cho thư mục này trên máy chủ. Bạn cũng cần lưu ý rằng dung lượng tập tin hạn chế cho hình đại diện chỉ áp dụng cho những hình đại diện được tải lên và không có tác dụng đối với những hình đại diện được liên kết từ website khác.',

	'ALLOW_LOCAL'					=> 'Cho phép sử dụng thư viện hình đại diện',
	'ALLOW_REMOTE'					=> 'Cho phép liên kết hình đại diện',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Tuỳ chọn cho phép thành viên sử dụng hình đại diện được liên kết từ những website khác',
	'ALLOW_UPLOAD'					=> 'Cho phép tải lên hình đại diện',
	'AVATAR_GALLERY_PATH'			=> 'Đường dẫn thư viện hình đại diện',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Đường dẫn đến thư mục chứa hình ảnh sử dụng cho thư viện hình đại diện trong hệ thống, ví dụ như <strong>images/avatars/gallery</strong>',
	'AVATAR_STORAGE_PATH'			=> 'Đường dẫn thư mục chứa hình đại diện tải lên',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Đường dẫn đến thư mục chứa hình đại diện được tải lên trong hệ thống, ví dụ như <strong>images/avatars/upload</strong>',
	'MAX_AVATAR_SIZE'				=> 'Kích thước hình đại diện tối đa cho phép',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Chiều cao x chiều rộng với đơn vị tính Pixel)',
	'MAX_FILESIZE'					=> 'Dung lượng tập tin hình đại diện tối đa cho phép',
	'MAX_FILESIZE_EXPLAIN'			=> 'Áp dụng cho những hình đại diện được tải lên bởi thành viên',
	'MIN_AVATAR_SIZE'				=> 'Kích thước hình đại diện tối thiểu cho phép',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Chiều cao x chiều rộng với đơn vị tính Pixel)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với chức năng gửi tin nhắn trong hệ thống',

	'ALLOW_BBCODE_PM'			=> 'Cho phép sử dụng BBCode trong tin nhắn',
	'ALLOW_FLASH_PM'			=> 'Cho phép sử dụng thẻ BBCode <strong>FLASH</strong> trong tin nhắn',
	'ALLOW_FORWARD_PM'			=> 'Cho phép chuyển tiếp tin nhắn',
	'ALLOW_IMG_PM'				=> 'Cho phép sử dụng thẻ BBCode <strong>IMG</strong> trong tin nhắn',
	'ALLOW_MASS_PM'				=> 'Cho phép gửi tin nhắn đến nhiều thành viên và nhóm',
	'ALLOW_PRINT_PM'			=> 'Cho phép in tin nhắn',
	'ALLOW_QUOTE_PM'			=> 'Cho phép trích dẫn trong tin nhắn',
	'ALLOW_SIG_PM'				=> 'Cho phép sử dụng chữ ký cá nhân trong tin nhắn',
	'ALLOW_SMILIES_PM'			=> 'Cho phép sử dụng biểu tượng vui trong tin nhắn',
	'BOXES_LIMIT'				=> 'Số tin nhắn tối đa trong mỗi thư mục',
	'BOXES_LIMIT_EXPLAIN'		=> 'Số lượng tin nhắn tối đa mà thành viên nhận được trong mỗi thư mục tin nhắn của mình. Nhập vào số <strong>0</strong> để không hạn chế tin nhắn.',
	'BOXES_MAX'					=> 'Số thư mục tin nhắn tối đa',
	'BOXES_MAX_EXPLAIN'			=> 'Số lượng thư mục tin nhắn cá nhân tối đa mà thành viên có thể tạo cho mình.',
	'ENABLE_PM_ICONS'			=> 'Cho phép sử dụng biểu tượng tin nhắn',
	'FULL_FOLDER_ACTION'		=> 'Thao tác xử lí mặc định khi thư mục vượt quá dung lượng',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Thao tác xử lí mặc định sẽ được áp dụng nếu một thư mục tin nhắn của thành viên vượt quá dung lượng cho phép và nếu thao tác xử lí thư mục của thành viên được thiết lập không phù hợp. Ví dụ đối với thư mục tin nhắn đặc biệt là <strong>Hộp thư gửi</strong>, thao tác xử lí mặc định luôn luôn là xoá những tin nhắn cũ.',
	'HOLD_NEW_MESSAGES'			=> 'Giữ lại những tin nhắn mới',
	'PM_EDIT_TIME'				=> 'Thời gian giới hạn sửa tin nhắn',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Thời gian giới hạn cho thành viên để sửa một tin nhắn chưa được gửi, nhập vào số <strong>0</strong> để không hạn chế',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Với công cụ này, bạn có thể thay đổi nhũng thiết lập mặc định đối với chức năng gửi bài viết trong hệ thống',

	'BUMP_INTERVAL'					=> 'Thời gian giữa hai lần bump',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Số phút, số giờ hoặc số ngày giữa thời gian bài viết mới nhất được gửi đến chủ đề và chức năng bump chủ đề này.',
	'CHAR_LIMIT'					=> 'Số ký tự tối đa cho phép trong mỗi bài viết',
	'CHAR_LIMIT_EXPLAIN'			=> 'Nhập vào số <strong>0</strong> để không hạn chế số ký tự.',
	'DISPLAY_LAST_EDITED'			=> 'Hiển thị thông tin về lần chỉnh sửa bài viết mới nhất',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Bật tuỳ chọn này nếu bạn muốn hiển thị thông tin về lần chỉnh sửa bài viết mới nhất cuối mỗi bài viết',
	'EDIT_TIME'						=> 'Thời gian giới hạn sửa bài viết',
	'EDIT_TIME_EXPLAIN'				=> 'Thời gian giới hạn cho thành viên để sửa một bài viết mới, nhập vào số <strong>0</strong> để không hạn chế',
	'FLOOD_INTERVAL'				=> 'Thời gian giữa hai lần gửi bài',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Số giây mà thành viên phải chờ đợi giữa hai lần gửi bài viết. Nếu bạn không muốn giới hạn thời gian này cho thành viên nào, hãy thay đổi trong cấp phép của thành viên đó.',
	'HOT_THRESHOLD'					=> 'Số bài viết hiển thị trong mỗi chủ đề nhiều người xem. Nhập vào số <strong>0</strong> để vô hiệu việc xác định chủ đề nhiều người xem',
	'MAX_POLL_OPTIONS'				=> 'Số lượng đối tượng bình chọn tối đa cho phép',
	'MAX_POST_FONT_SIZE'			=> 'Kích thước phông chữ tối đa trong mỗi bài viết',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Nhập vào số <strong>0</strong> để không hạn chế kích thước phông chữ.',
	'MAX_POST_IMG_HEIGHT'			=> 'Chiều cao hình ảnh tối đa cho phép trong mỗi bài viết',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Chiều cao tối đa cho phép sử dụng của hình ảnh/tập tin Flash khi gửi bài. Nhập vào số <strong>0</strong> để không giới hạn chiều cao.',
	'MAX_POST_IMG_WIDTH'			=> 'Chiều rộng hình ảnh tối đa cho phép trong mỗi bài viết',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Chiều rộng tối đa cho phép sử dụng của hình ảnh/tập tin Flash khi gửi bài. Nhập vào số <strong>0</strong> để không giới hạn chiều rộng.',
	'MAX_POST_URLS'					=> 'Số liên kết tối đa trong mỗi bài viết',
	'MAX_POST_URLS_EXPLAIN'			=> 'Nhập vào số <strong>0</strong> để không hạn chế số liên kết.',
	'POSTING'						=> 'Gửi bài',
	'POSTS_PER_PAGE'				=> 'Số bài viết hiển thị trong mỗi chủ đề',
	'QUOTE_DEPTH_LIMIT'				=> 'Độ dài trích dẫn tối đa cho phép trong mỗi bài viết',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Nhập vào số <strong>0</strong> để không hạn chế độ dài',
	'SMILIES_LIMIT'					=> 'Số lượng biểu tượng vui trong mỗi bài viết',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Nhập vào số <strong>0</strong> để không hạn chế số lượng biểu tượng vui.',
	'TOPICS_PER_PAGE'				=> 'Số chủ đề hiển thị trong mỗi chuyên mục',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với chữ ký cá nhân trong hệ thống',

	'MAX_SIG_FONT_SIZE'				=> 'Kích thước phông chữ tối đa cho phép',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Kích thước phông chữ tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế kích thước.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Chiều cao hình ảnh tối đa cho phép',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Chiều cao tối đa cho phép sử dụng của hình ảnh/tập tin Flash trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế chiều cao.',
	'MAX_SIG_IMG_WIDTH'				=> 'Chiều rộng hình ảnh tối đa cho phép',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Chiều rộng tối đa cho phép sử dụng của hình ảnh/tập tin Flash trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế chiều rộng.',
	'MAX_SIG_LENGTH'				=> 'Số ký tự tối đa cho phép',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Số ký tự tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên.',
	'MAX_SIG_SMILIES'				=> 'Số lượng biểu tượng vui tối đa cho phép',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Số lượng biểu tượng vui tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế số lượng biểu tượng vui.',
	'MAX_SIG_URLS'					=> 'Số liên kết tối đa cho phép',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Số lượng liên kết tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế số liên kết.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập đăng ký thành viên và thông tin cá nhân của thành viên trong hệ thống',

	'ACC_ACTIVATION'			=> 'Kích hoạt tài khoản',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Tuỳ chọn này cho phép bạn quyết định cách thức kích hoạt tài khoản thành viên khi đăng ký mới. Bạn cũng có thể cho ngưng đăng ký thành viên mới với tuỳ chọn này.',
	'ACC_ADMIN'					=> 'Quản trị viên',
	'ACC_DISABLE'				=> 'Ngưng đăng ký thành viên mới',
	'ACC_NONE'					=> 'Không cần',
	'ACC_USER'					=> 'Thành viên',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Cho phép sử dụng lại địa chỉ Email',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Tuỳ chọn cho phép những thành viên khác nhau có thể sử dụng cùng một địa chỉ Email giống nhau.',
	'COPPA'						=> 'Điều khoản COPPA',
	'COPPA_FAX'					=> 'Số Fax dùng cho điều khoản COPPA',
	'COPPA_MAIL'				=> 'Địa chỉ Email dùng cho điều khoản COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Địa chỉ Email dùng để cho cha mẹ hay người bảo hộ của các thành viên trong điều khoản COPPA gửi bản cam kết đến',
	'ENABLE_COPPA'				=> 'Bật điều khoản COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Tuỳ chọn này yêu cầu các thành viên từ 13 tuổi trở xuống phải cam kết với điều khoản U.S. COPPA khi tham gia vào website. Nếu bạn vô hiệu điều khoản này thì các nhóm thành viên COPPA sẽ không còn được hiển thị nữa',
	'MAX_CHARS'					=> 'Tối đa',
	'MIN_CHARS'					=> 'Tối thiểu',
	'PASSWORD_LENGTH'			=> 'Độ dài mật khẩu',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Số ký tự tối thiểu và tối đa bắt buộc đối với mật khẩu.',
	'REG_LIMIT'					=> 'Số lần giới hạn đăng ký',
	'REG_LIMIT_EXPLAIN'			=> 'Số lần nạp lại tốt đa mã xác nhận trong phần đăng ký thành viên trước khi bị khoá đăng ký trong phiên session đó.',
	'USERNAME_ALPHA_ONLY'		=> 'Chỉ được dùng chữ số và chữ cái',
	'USERNAME_ALPHA_SPACERS'	=> 'Chữ được dùng chữ số, chữ cái và khoảng trắng',
	'USERNAME_CHARS'			=> 'Giới hạn ký tự trong tên thành viên',
	'USERNAME_CHARS_ANY'		=> 'Bất kì ký tự nào',
	'USERNAME_CHARS_EXPLAIN'	=> 'Giới hạn loại ký tự được sử dụng trong tên thành viên và khoảng trắng: -, +, _, [ và ]',
	'USERNAME_LENGTH'			=> 'Độ dài tên thành viên',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Số ký tự tối thiểu và tối đa bắt buộc đối với tên thành viên.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với mã xác nhận và cơ chế đồ hoạ của mã xác nhận này trong hệ thống.',

	'BAD_POLICY'					=> 'Cơ chế đồ hoạ bạn vừa chọn không hợp lệ.',
	'CAPTCHA_3DBITMAP'				=> 'Đồ hoạ 3D',
	'CAPTCHA_CELLS'					=> 'Khối ô',
	'CAPTCHA_COMPOSITE'				=> 'Hỗn hợp',
	'CAPTCHA_ENTROPY'				=> 'Cơ chế vật lí Entropy',
	'CAPTCHA_OPTIONS'				=> 'Tuỳ chọn cơ chế đồ hoạ cho mã xác nhận',
	'CAPTCHA_OVERLAP'				=> 'Chồng chéo lên nhau',
	'CAPTCHA_SHAPE'					=> 'Hình dạng',
	'CAPTCHA_STENCIL'				=> 'Khuôn tô',
	'CAPTCHA_EXPLAIN'				=> 'Bấm %svào đây%s để xem trước cơ chế đồ hoạ của mã xác nhận.',	
	'ENTROPY_NOISE_LINE'			=> 'Cơ chế vật lí Entropy tạp nhiễu trong dòng',
	'ENTROPY_NOISE_PIXEL'			=> 'Kích thước cơ chế vật lí Entropy gây tạp nhiễu',
	'HEAVY'							=> 'Lớn',
	'LIGHT'							=> 'Nhỏ',
	'MEDIUM'						=> 'Trung bình',
	'NO_GD'							=> 'Máy chủ của bạn không hỗ trợ thư viện hình GD, một ứng dụng mở rộng được yêu cầu để bật chức năng cơ chế đồ hoạ nâng cao cho mã xác nhận. Một phương pháp hiển thị mã xác nhận đơn giản hơn sẽ được sử dụng nếu bạn vẫn quyết định bật chức năng yêu cầu thành viên nhập mã xác nhận.',
	'NO_NOISE'						=> 'Không sử dụng cơ chế vật lí Entropy',
	'NO_TTF'						=> 'Cơ chế đồ hoạ bạn vừa chọn yêu cầu thiết lập hỗ trợ TTF trên máy chủ phải được bật và trên máy chủ của bạn, thiết lập hỗ trợ TTF không được bật. Nếu bạn chọn sử dụng cơ chế đồ hoạ này, nó sẽ được bỏ qua và sử dụng cơ chế đồ hoạ khác để thay thế. Nếu không có cơ chế đồ hoạ hợp lệ nào được bật, một phương pháp hiển thị mã xác nhận đơn giản hơn sẽ được sử dụng nếu bạn vẫn quyết định bật chức năng yêu cầu thành viên nhập mã xác nhận.',
	'OVERLAP_NOISE_LINE'			=> 'Chồng chéo tạp nhiễu trong dòng',
	'OVERLAP_NOISE_PIXEL'			=> 'Kích thước chồng chéo gây tạp nhiễu',
	'SHAPE_NOISE_LINE'				=> 'Hình dạng tạp nhiễu trong dòng',
	'SHAPE_NOISE_PIXEL'				=> 'Kích thước hình dạng gây tạp nhiễu',
	'VISUAL_CONFIRM_POST'			=> 'Sử dụng mã xác nhận khi khách gửi bài',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'Tuỳ chọn yêu cầu khách khi gửi bài phải nhập vào một đoạn mã xác nhận trong hình ảnh được tạo ra ngẫu nhiên từ hệ thống để ngăn chặn việc gửi bài viết tự động hàng loạt.',
	'VISUAL_CONFIRM_REG'			=> 'Sử sụng mã xác nhận khi đăng ký',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'Tuỳ chọn yêu cầu các thành viên mới khi đăng ký phải nhập vào một đoạn mã xác nhận trong hình ảnh được tạo ra ngẫu nhiên từ hệ thống để ngăn chặn việc đăng ký thành viên tự động hàng loạt.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Những thiết lập bên dưới được sử dụng để gửi cookie đến trình duyệt của khách ghé thăm website. Trong hều hết các trường hợp, bạn nên sử dụng giá trị mặc định của cookie và đừng thay đổi chúng nếu không đủ khả năng quản lý hay không thực sự cần thiết. Nếu bạn thực sự cần thay đổi giá trị mặc định, hãy cẩn thận vì những thiết lập không chính xác sẽ ngăn cản thành viên đăng nhập vào hệ thống.',

	'COOKIE_DOMAIN'			=> 'Tên miền cookie',
	'COOKIE_NAME'			=> 'Tên cookie',
	'COOKIE_PATH'			=> 'Đường dẫn cookie',
	'COOKIE_SECURE'			=> 'Cookie bảo mật',
	'COOKIE_SECURE_EXPLAIN'	=> 'Nếu máy chủ của bạn đang chạy SSL thì hãy bật tuỳ chọn này, còn nếu không thì hãy vô hiệu đi. Nếu như bạn bật tuỳ chọn này và máy chủ của bạn không chạy trên SSL thì kết quả là sẽ xảy ra lỗi trong suốt quá trình truy xuất đến máy chủ.',
	'ONLINE_LENGTH'				=> 'Thời gian tính thành viên đang trực tuyến',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Số phút mà những thành viên không còn hoạt động trong hệ thống sẽ không được hiển thị trong danh sách các thành viên đang trực tuyến và xem như đã ngoại tuyến.',
	'SESSION_LENGTH'			=> 'Thời gian session hiệu lực',
	'SESSION_LENGTH_EXPLAIN'	=> 'Số giây session có hiệu lực kể từ khi được tạo mới.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể bật hay tắt những chức năng nhất định của hệ thống để giảm bớt số lượng xử lí được yêu cầu gửi đến máy chủ. Trên hều hết các máy chủ, bạn không cần thiết phải tắt bất kì chức năng nào của hệ thống tại đây. Tuy nhiên, trên một vài máy chủ nhất định hoặc các hệ thống sử dụng dịch vụ lưu trữ Web dùng chung với nhiều người khác trên cùng một máy chủ, việc tắt một vài chức năng không cần đến là rất hết sức cần thiết để giảm bớt khối lượng công việc xử lí cho máy chủ. Bạn cũng nên xác định giới hạn thời gian nạp hệ thống và số lượng session vượt quá để hệ thống tự động chuyển sang chế độ ngưng hoạt động kịp thời.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Mục thông tin cá nhân tuỳ biến',
	'LIMIT_LOAD'					=> 'Giới hạn thời gian nạp hệ thống',
	'LIMIT_LOAD_EXPLAIN'			=> 'Nếu trong vòng một phút hệ thống nạp vượt quá giá trị được thiết lập này thì hệ thống sẽ chuyển sang chế độ ngưng hoạt động, ví dụ 1.0 gần bằng ~100% tài nguyên được sử dụng của một bộ xử lí máy chủ. Chỉ sử dụng chức năng này trên các máy chủ UNIX.',
	'LIMIT_SESSIONS'				=> 'Giới hạn số session',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Nếu số lượng session vượt quá giá trị được thiết lập này trong quãng thời gian một phút thì hệ thống sẽ tự động chuyển sang chế độ ngưng hoạt động. Nhập vào số <strong>0</strong> để không hạn chế số session.',
	'LOAD_CPF_MEMBERLIST'			=> 'Hiển thị mục thông tin cá nhân tuỳ biến trong danh sách thành viên',
	'LOAD_CPF_VIEWPROFILE'			=> 'Hiển thị mục thông tin cá nhân tuỳ biến trong phần thông tin cá nhân',
	'LOAD_CPF_VIEWTOPIC'			=> 'Hiển thị mục thông tin cá nhân tuỳ biến trong phần xem chủ đề',
	'LOAD_USER_ACTIVITY'			=> 'Hiển thị hoạt động của thành viên',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Hiển thị những chuyên mục/chủ đề không bị khoá trong phần thông tin cá nhân của thành viên và trong bảng điều khiển của thành viên. Chúng tôi khuyến cáo bạn nên tắt tuỳ chọn này trên các diễn đàn có từ một triệu bài viết trở lên.',
	'RECOMPILE_TEMPLATES'			=> 'Biên dịch lại tập tin khuôn mẫu cũ',
	'RECOMPILE_TEMPLATES_EXPLAIN'	=> 'Kiểm tra những tập tin khuôn mẫu đã được cập nhật trong hệ thống tập tin giao diện và biên dịch lại cache.',
	'YES_ANON_READ_MARKING'			=> 'Bật đánh dấu chủ đề cho khách',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Tuỳ chọn sắp xếp thông tin trạng thái các chủ đề đã xem/chưa xem cho khách. Nếu bạn vô hiệu tuỳ chọn này, các bài viết sẽ luôn luôn được đánh xấu đã xem đối với khách.',
	'YES_BIRTHDAYS'					=> 'Hiển thị danh sách sinh nhật',
	'YES_JUMPBOX'					=> 'Hiển thị danh sách chuyên mục',
	'YES_MODERATORS'				=> 'Hiển thị danh sách điều hành viên',
	'YES_ONLINE'					=> 'Hiển thị danh sách thành viên đang trực tuyến',
	'YES_ONLINE_EXPLAIN'			=> 'Hiển thị thông tin các thành viên đang trực tuyến trên trang chủ, phần xem chuyên mục và phần xem chủ đề.',
	'YES_ONLINE_GUESTS'				=> 'Hiển thị danh sách khác đang trực tuyến trong phần xem thông tin trực tuyến',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Cho phép hiển thị thông tin về khác trong phần xem thông tin trực tuyến.',
	'YES_ONLINE_TRACK'				=> 'Hiển thị hình ảnh thành viên đang trực tuyến',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Hiển thị thông tin thành viên đang trực tuyến trong phần xem thông tin cá nhân và xem chủ đề.',
	'YES_POST_MARKING'				=> 'Hiển thị những chủ đề được đánh dấu',
	'YES_POST_MARKING_EXPLAIN'		=> 'Đánh dấu cho thành viên biết vừa gửi bài trong chủ đề nào.',
	'YES_READ_MARKING'				=> 'Đánh dấu chủ đề ngay trên máy chủ',
	'YES_READ_MARKING_EXPLAIN'		=> 'Lưu trữ thông tin xem/chưa xem bài viết của thành viên trong cơ sở dữ liệu thay vì sử dụng cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'Hệ thống phpBB hỗ trợ sử dụng các plugin hoặc module xác thực. Điều này giúp bạn lựa chọn phương pháp xác thực các thành viên khi họ đăng nhập vào hệ thống. Mặc định, có ba plugin được cung cấp kèm theo hệ thống phpBB: DB, LDAP và Apache. Không phải tất cả các phương pháp đều yêu cầu bạn phải khai báo thêm thông tin với hệ thống. Bạn chỉ cần cung cấp thêm thông tin cho hệ thống biết liên quan đến phương pháp xác thực mà mình đã chọn.',

	'AUTH_METHOD'				=> 'Chọn phương pháp xác thực',

	'APACHE_SETUP_BEFORE_USE'	=> 'Bạn phải cài đặt bộ xác thực cho Apache trước khi bạn chuyển đổi hệ thống đến phương pháp xác thực này. Cần lưu ý rằng tên tài khoản bạn sử dụng cho phương pháp xác thực này của Apache phải giống với tài khoản thành viên của bạn trong hệ thống.',

	'LDAP_DN'					=> 'Tên LDAP',
	'LDAP_DN_EXPLAIN'			=> 'Đây là tên định danh LDAP, xác định thông tin về thành viên, ví dụ như <strong>o=My Company, c=US ...</strong>',
	'LDAP_EMAIL'				=> 'Thuộc tính địa chỉ Email LDAP',
	'LDAP_EMAIL_EXPLAIN'		=> 'Thiết lập tên thuộc tính cho địa chỉ Email của các thành viên nếu bạn đã có sẵn để thiết lập tự động địa chỉ Email cho các thành viên mới. Để trống phần này cũng sẽ bỏ trống kết quả trong địa chỉ Email cho các thành viên đã đăng nhập lần đầu vào hệ thống.',
	'LDAP_NO_EMAIL'				=> 'Thuộc tính của địa chỉ Email bạn vừa xác định không tồn tại.',	
	'LDAP_NO_IDENTITY'			=> 'Không thể tìm khoá định danh đăng nhập cho <strong>%s</strong>',
	'LDAP_SERVER'				=> 'Địa chỉ máy chủ LDAP',
	'LDAP_SERVER_EXPLAIN'		=> 'Nếu bạn chọn sử dụng LDAP thì nhập vào đây tên miền hoặc địa chỉ của máy chủ LDAP.',
	'LDAP_UID'					=> 'Khoá LDAP',
	'LDAP_UID_EXPLAIN'			=> 'Đây là khoá tìm kiếm một định danh đăng nhập được cung cấp, ví dụ như <strong>uid, sn ...</strong>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể thay đổi các thiết lập về máy chủ và tên miền trong hệ thống. Hãy chắc chắn về những thông tin mà bạn nhập vào trong phần này, những lỗi xảy ra sẽ dẫn đến việc gửi thông tin qua Email không còn chính xác. Khi nhập vào tên miền, bạn phải nhớ đính kèm cả giao thức <strong>http://</strong> hoặc các giao thức khác. Chỉ thay đổi số cổng máy chủ nếu bạn chắc chắn máy chủ của mình đang chạy trên cổng khác, cổng <strong>80</strong> luôn chính xác và được sử dụng trong hầu hết mọi trường hợp.',

	'ENABLE_GZIP'				=> 'Bật chế độ nén GZip',
	'FORCE_SERVER_VARS'			=> 'Yêu cầu thiết lập máy chủ',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Nếu bật tuỳ chọn này, những thiết lập máy chủ đã được xác định trong phần này sẽ được sử dụng như những giá trị đã được thiết lập tự động',
	'ICONS_PATH'				=> 'Thư mục biểu tượng bài viết',
	'ICONS_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chứa biểu tượng bài viết trong hệ thống, ví dụ như <strong>images/icons</strong>',
	'PATH_SETTINGS'				=> 'Thiết lập đường dẫn đến thư mục',
	'RANKS_PATH'				=> 'Thư mục hình xếp hạng',
	'RANKS_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chứa hình xếp hạng trong hệ thống, ví dụ như <strong>images/ranks</strong>',
	'SEND_ENCODING'				=> 'Gửi mã hoá',
	'SEND_ENCODING_EXPLAIN'		=> 'Gửi tập tin mã hoá từ hệ thống phpBB thông qua HTTP thay thế cho cấu hình máy chủ',
	'SERVER_NAME'				=> 'Tên miền',
	'SERVER_NAME_EXPLAIN'		=> 'Tên miền mà máy chủ đang sử dụng, ví dụ như <strong>www.foo.bar</strong>',
	'SERVER_PORT'				=> 'Cổng máy chủ',
	'SERVER_PORT_EXPLAIN'		=> 'Cổng mà máy chủ của bạn đang sử dụng, thông thường là <strong>80</strong>, bạn chỉ nên thay đổi nếu chắc chắn máy chủ của mình đang chạy trên cổng khác',
	'SERVER_PROTOCOL'			=> 'Giao thức máy chủ',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Giao thức của máy chủ được sử dụng nếu những thiết lập máy chủ này được yêu cầu bên trên. Nếu bạn để trống hoặc không yêu cầu thì giao thức sẽ được xác định bằng thiết lập cookie bảo mật, ví dụ như <strong>http://</strong> hay <strong>https://</strong>',
	'SERVER_URL_SETTINGS'		=> 'Thiết lập địa chỉ URL cho máy chủ',
	'SMILIES_PATH'				=> 'Thư mục biểu tượng vui',
	'SMILIES_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chứa biểu tượng vui trong hệ thống, ví dụ như <strong>images/smilies</strong>',
	'UPLOAD_ICONS_PATH'			=> 'Thư mục biểu tượng tập tin',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Đường dẫn đến thư mục chứa biểu tượng tập tin trong hệ thống, ví dụ như <strong>images/upload_icons</strong>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập liên quan đến session và đăng nhập trong hệ thống',

	'ALL'							=> 'Tất cả',
	'ALLOW_AUTOLOGIN'				=> 'Cho phép đăng nhập tự động', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Tuỳ chọn cho phép thành viên có thể đăng nhập tự động vào hệ thống khi họ ghé thăm website.', 
	'AUTOLOGIN_LENGTH'				=> 'Số ngày hết hạn khoá đăng nhập tự động', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Số ngày kể từ lần ghé thăm trước của thành viên, khoá đăng nhập tự động sẽ hết hạn. Nhập vào số <strong>0</strong> để vô hiệu chức năng này.', 
	'BROWSER_VALID'					=> 'Kiểm tra trình duyệt',
	'BROWSER_VALID_EXPLAIN'			=> 'Bật chế độ kiểm tra trình duyệt cho mỗi session để tăng cường khả năng bảo mật.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'FORCE_PASS_CHANGE'				=> 'Số ngày yêu cầu thay đổi mật khẩu',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Yêu cầu thành viên phải thay đổi mật khẩu của họ sau khi hết số ngày được thiết lập. Nhập vào số <strong>0</strong> để vô hiệu chức năng này.',
	'IP_VALID'						=> 'Kiểm tra địa chỉ IP ',
	'IP_VALID_EXPLAIN'				=> 'Tuỳ chọn xác định số lượng địa chỉ IP được sử dụng để kiểm tra phiên session của thành viên. Toàn bộ địa chỉ IP dùng để so sánh: A.B.C thay cho x.x.x, A.B thay cho x.x. Bỏ trống mục này để tắt chức năng kiểm tra.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Số lần đăng nhập tối đa cho phép',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Số lần tối đa cho phép thành viên cố gắng đăng nhập vào hệ thống khi đăng nhập thất bại nhiều lần. Sau khi đăng nhập thất bại vượt quá số lần được thiết lập này, thành viên phải nhập thêm vào mã xác nhận khi đăng nhập',
	'NO_IP_VALIDATION'				=> 'Không kiểm tra địa chỉ IP',
	'PASSWORD_TYPE'					=> 'Độ phức tạp của mật khẩu',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Tuỳ chọn xác định mức độ phức tạp yêu cầu đối với mật khẩu của thành viên khi được tạo hay thay đổi, những tuỳ chọn sau bao gồm cả những tuỳ chọn trước.',
	'PASS_TYPE_ALPHA'				=> 'Phải sử dụng chữ số và chữ cái',
	'PASS_TYPE_ANY'					=> 'Không yêu cầu',
	'PASS_TYPE_CASE'				=> 'Phải sử dụng hỗn hợp',
	'PASS_TYPE_SYMBOL'				=> 'Phải sử dụng ký hiệu',
	'TPL_ALLOW_PHP'					=> 'Cho phép sử dụng mã PHP trong các tập tin khuôn mẫu',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Nếu tuỳ chọn này được bật, các lệnh PHP và INCLUDEPHP sẽ có thể được sử dụng và biên dịch trong các tập tin khuôn mẫu.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Những thiết lập này được sử dụng khi hệ thống gửi Email đến các thành viên khác. Hãy chắc chắn địa chỉ Email liên hệ mà bạn nhập vào là hợp lệ, bất kì thư rác hay Email không gửi được nào có khả năng sẽ được gửi đến địa chỉ này. Nếu máy chủ của bạn không hỗ trợ gửi Email thông qua PHP, bạn có thể thay thế bằng cách gửi Email trực tiếp thông qua máy chủ SMTP. Điều này yêu cầu bạn phải cung cấp một địa chỉ máy chủ SMTP chính xác cho hệ thống biết. Bạn có thể hỏi nhà cung cấp dịch vụ lưu trữ Web của bạn nếu cần thiết và đừng xác định những máy chủ đã quá lạc hậu! Nếu máy chủ SMTP yêu cầu phải xác thực và chỉ khi thực sự được yêu cầu, bạn hãy cung cấp cho hệ thống biết tên tài khoản và mật khẩu đăng nhập máy chủ SMTP. Lưu ý rằng hệ thống chỉ hỗ trợ những phương pháp xác thực đơn giản, các phương pháp xác thực khác hiện tại chưa được hỗ trợ.',

	'ADMIN_EMAIL'					=> 'Địa chỉ Email gửi đi',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Địa chỉ Email này được sử dụng làm địa chỉ Email của người gửi trên tất cả các Email được gửi đi.',
	'BOARD_EMAIL_FORM'				=> 'Cho phép thành viên gửi Email từ website',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Thay cho việc hiển thị địa chỉ Email của thành viên, tuỳ chọn này cho phép các thành viên có thể gửi Email cho nhau thông qua website.',
	'BOARD_HIDE_EMAILS'				=> 'Ẩn địa chỉ Email',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Tuỳ chọn ẩn toàn bộ địa chỉ Email cá nhân trong website.',
	'CONTACT_EMAIL'					=> 'Địa chỉ Email liên hệ',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Địa chỉ Email này được sử dụng khi có việc cần liên hệ, ví dụ như vấn đề thư rác, có lỗi xảy ra ...',
	'EMAIL_FUNCTION_NAME'			=> 'Tên hàm dùng để gửi Email',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Hàm chức năng PHP bạn muốn sử dụng để gửi Email.',
	'EMAIL_PACKAGE_SIZE'			=> 'Số lượng Email trong gói Email',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Số lượng Email được gửi đi trong một gói Email.',
	'EMAIL_SIG'						=> 'Chữ ký Email',
	'EMAIL_SIG_EXPLAIN'				=> 'Chữ ký được đính kèm trong tất cả các Email được gửi đi từ website.',
	'ENABLE_EMAIL'					=> 'Bật chức năng gửi Email trong hệ thống',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Nếu tắt tuỳ chọn này, sẽ không có Email nào được gửi đi từ diễn đàn.',
	'SMTP_AUTH_METHOD'				=> 'Chọn phương pháp xác thực cho SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Chỉ sử dụng nếu tên đăng nhập/mật khẩu xác thực đã được thiết lập. Hãy yêu cầu nhà cung cấp dịch vụ lưu trữ Web của bạn nếu bạn không chắc chắn phải chọn phương pháp nào.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Mật khẩu đăng nhập SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Chỉ nhập vào mật khẩu đăng nhập nếu máy chủ SMTP của bạn yêu cầu.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Cổng máy chủ SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Chỉ thay đổi cổng máy chủ SMTP nếu bạn chắc chắn máy chủ SMTP của mình đang chạy trên cổng khác.',
	'SMTP_SERVER'					=> 'Địa chỉ máy chủ SMTP',
	'SMTP_SETTINGS'					=> 'Thiết lập SMTP',
	'SMTP_USERNAME'					=> 'Tên đăng nhập SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Chỉ nhập vào tên đăng nhập nếu máy chủ SMTP của bạn yêu cầu.',
	'USE_SMTP'						=> 'Sử dụng máy chủ SMTP để gửi Email',
	'USE_SMTP_EXPLAIN'				=> 'Bật tuỳ chọn này nếu bạn muốn gửi Email thông qua một tên miền thay cho hàm gửi Email của PHP.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lý thiết lập và bật tuỳ chọn sử dụng máy chủ Jabber để gửi tin nhắn nhanh và thông báo của website. Jabber là một giao thức mã nguồn mở và bất kì ai cũng có thể sử dụng miễn phí. Một vài máy chủ Jabber đính kèm cả cổng truy xuất và dịch vụ chuyển tin cho phép bạn liên hệ với các thành viên trên các hệ thống mạng khác. Không phải tất cả các máy chủ đều có dịch vụ chuyển tin và những thay đổi trong giao thức kết nối có thể ngăn cản việc gửi tin nhắn. Lưu ý rằng việc sử dụng máy chủ Jabber chỉ mất vài giây để cập nhật thông tin về tài khoản Jabber của bạn, vì thế bạn đừng ngừng nạp trang cho đến khi hoàn tất!',

	'ERR_JAB_AUTH'			=> 'Không thể xác thực trên máy chủ Jabber',
	'ERR_JAB_CONNECT'		=> 'Không thể kết nối đến máy chủ Jabber',
	'ERR_JAB_PASSCHG'		=> 'Không thể thay đổi mật khẩu tài khoản Jabber',
	'ERR_JAB_PASSFAIL'		=> 'Mật khẩu tài khoản Jabber đã cập nhật thất bại, %s',
	'ERR_JAB_REGISTER'		=> 'Có một lỗi xảy ra trong khi đăng ký tài khoản Jabber này, %s',
	'ERR_JAB_USERNAME'		=> 'Tên tài khoản Jabber bạn vừa chọn đã được sử dụng, hãy chọn một tên khác.',

	'JAB_CHANGED'				=> 'Tài khoản Jabber đã được thay đổi thành công',
	'JAB_ENABLE'				=> 'Sử dụng tài khoản Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Tuỳ chọn cho phép nhắn tin và thông báo bằng máy chủ Jabber',
	'JAB_PACKAGE_SIZE'			=> 'Số lượng tin nhắn trong gói Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Số lượng tin nhắn được gửi đi trong một gói Jabber. Nếu bạn nhập vào số <strong>0</strong>, tin nhắn sẽ được gửi đi lập tức và sẽ không phải chờ đợi để được gửi.',
	'JAB_PASSWORD'				=> 'Mật khẩu đăng nhập tài khoản Jabber',
	'JAB_PASS_CHANGED'			=> 'Mật khẩu tài khoản Jabber đã được thay đổi thành công',
	'JAB_PORT'					=> 'Cổng máy chủ Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Để trống mục này nếu như bạn chắc chắn máy chủ này không chạy trên cổng <strong>5222</strong>',
	'JAB_REGISTERED'			=> 'Tài khoản Jabber mới đã được đăng ký thành công',
	'JAB_RESOURCE'				=> 'Tài nguyên Jabber',
	'JAB_RESOURCE_EXPLAIN'		=> 'Tài nguyên định vị cho kết nối đặc biệt này, ví dụ như <strong>board, home ...</strong>',
	'JAB_SERVER'				=> 'Địa chỉ máy chủ Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Ghé thăm %sjabber.org%s để xem danh sách các máy chủ hiện có',
	'JAB_SETTINGS_CHANGED'		=> 'Thiết lập Jabber đã được thay đổi thành công',
	'JAB_USERNAME'				=> 'Tên đăng nhập tài khoản Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Nếu tài khoản Jabber này chưa được đăng ký, tài khoản mới này sẽ được tạo nếu có thể.',
));

?>