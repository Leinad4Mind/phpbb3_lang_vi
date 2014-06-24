<?php
/** 
*
* install [Vietnamese]
*
* @package language
* @version $Id: install.php,v 1.09 2006/06/27 14:47:00 nedka Exp $
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
	'ADMIN_CONFIG'				=> 'Cấu hình tài khoản Administrator',
	'ADMIN_PASSWORD'			=> 'Mật khẩu của Administrator',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Xác nhận mật khẩu Administrator',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Mật khẩu không được phép ít hơn <strong>6<strong> ký tự và vượt quá <strong>30</strong> ký tự)',
	'ADMIN_TEST'				=> 'Kiểm tra thiết lập Administrator',
	'ADMIN_USERNAME'			=> 'Tên thành viên của Administrator',
	'APP_MAGICK'				=> 'Hỗ trợ Imagemagick [ Đính kèm tập tin ]',
	'AUTHOR_NOTES'				=> 'Ghi chú của tác giả<br />&#187; %s',
	'AVAILABLE'					=> 'Có sẵn',
	'AVAILABLE_CONVERTORS'		=> 'Những chuyển đổi có sẵn',

	'BEGIN_CONVERT'				=> 'Bắt đầu chuyển đổi',
	'BLANK_PREFIX_FOUND'		=> 'Bạn chưa xác định tiền tố đầu mỗi tên table trong cơ sở dữ liệu.',

	'CACHE_STORE'				=> 'Loại cache',
	'CACHE_STORE_EXPLAIN'		=> 'Thư mục nơi chứa các tập tin sử dụng thường xuyên được cache, hệ thống tập tin được tối ưu hoá.',
	'CAT_CONVERT'				=> 'Chuyển đổi',
	'CAT_INSTALL'				=> 'Cài đặt',
	'CAT_OVERVIEW'				=> 'Tổng quan',
	'CHECK_TABLE_PREFIX'		=> 'Hãy kiểm tra tiền tố đầu mỗi tên table rồi thử lại.',
	'CLEAN_VERIFY'				=> 'Đang dọn dẹp và kiểm tra cấu trúc cơ sở dữ liệu lần cuối',
	'CONFIG_CONVERT'			=> 'Đang chuyển đổi cấu hình hệ thống',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Không thể tạo tập tin cấu hình. Những phương pháp khác sử dụng để tạo tập tin này được liệt kê dưới đây',
	'CONFIG_FILE_WRITTEN'		=> 'Tập tin cấu hình đã được tạo, ngay bây giờ bạn có thể chuyển sang bước kế tiếp trong quá trình cài đặt',
	'CONFIG_RETRY'				=> 'Thử lại',
	'CONTACT_EMAIL_CONFIRM'		=> 'Xác nhận địa chỉ Email liên hệ',
	'CONTINUE_CONVERT'			=> 'Tiếp tục chuyển đổi',
	'CONTINUE_LAST'				=> 'Tiếp tục câu lệnh trước',
	'CONVERT'					=> 'Chuyển đổi',
	'CONVERT_COMPLETE'			=> 'Việc chuyển đổi đã hoàn tất',
	'CONVERT_INTRO'				=> 'Chào mừng bạn đã đến với công cụ chuyển đổi hợp nhất của phpBB',
	'CONVERT_INTRO_BODY'		=> 'Với công cụ này, bạn có thể chuyển đổi dữ liệu từ những hệ thống khác phpBB đã cài đặt trước đây sang hệ thống phpBB. Danh sách bên dưới liệt kê tất cả các moduel chuyển đổi có sẵn hiện tại. Nếu như danh sách này không có moduel chuyển đổi cho hệ thống mà bạn đang sử dụng, hãy ghé thăm website của chúng tôi để download và tìm hiểu nhiều thông tin hơn về các moduel chuyển đổi sẵn có tại đây.',
	'CONVERT_NOT_EXIST'			=> 'Chuyển đổi bạn vừa chọn không tồn tại',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Thông tin mà bạn nhập vào đây sẽ được kiểm tra lại. Để bắt đầu quá trình chuyển đổi, bạn hãy bấm vào nút chấp nhận bên dưới để bắt đầu',
	'COULD_NOT_FIND_PATH'		=> 'Không thể tìm thấy đường dẫn đến thư mục cài đặt hệ thống. Hãy kiểm tra thiết lập của bạn rồi thử lại.<br />&#187; Đường dẫn được xác định là <strong>%s</strong>',

	'DBMS'						=> 'Loại cơ sở dữ liệu',
	'DB_CONFIG'					=> 'Cấu hình cơ sở dữ liệu',
	'DB_CONNECTION'				=> 'Kết nối cơ sở dữ liệu',
	'DB_ERR_INSERT'				=> 'Có lỗi trong khi tiến hành truy vấn <strong>INSERT</strong>',
	'DB_ERR_LAST'				=> 'Có lỗi trong khi tiến hành <strong>query_last</strong>',
	'DB_ERR_QUERY_FIRST'		=> 'Có lỗi trong khi thực thi <strong>query_first</strong>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Có lỗi trong khi thực thi <strong>query_first</strong>, %s ("%s")',
	'DB_ERR_SELECT'				=> 'Có lỗi trong khi tiến hành truy vấn <strong>SELECT</strong>',
	'DB_HOST'					=> 'Tên miền hoặc địa chỉ DSN của server cơ sở dữ liệu',
	'DB_HOST_EXPLAIN'			=> 'DSN là tên viết tắt của <strong>Data Source Name</strong> và chỉ được sử dụng khi bạn chọn cài đặt với ODBC.',
	'DB_NAME'					=> 'Tên cơ sở dữ liệu',
	'DB_PASSWORD'				=> 'Mật khẩu kết nối cơ sở dữ liệu',
	'DB_PORT'					=> 'Cổng server cơ sở dữ liệu',
	'DB_PORT_EXPLAIN'			=> 'Để trống mục này nếu như bạn không biết cổng tiêu chuẩn đang được sử dụng của server.',
	'DB_USERNAME'				=> 'Tên đăng nhập cơ sở dữ liệu',
	'DB_TEST'					=> 'Kiểm tra kết nối',
	'DEFAULT_LANG'				=> 'Ngôn ngữ mặc định',
	'DEFAULT_PREFIX_IS'			=> 'Tiền tố đầu mỗi tên table mặc định cho <strong>%1$s</strong> là <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Không có giá trị nào được xác định cho biến <strong>test_file</strong> của moduel chuyển đổi. Nếu bạn là người sử dụng moduel chuyển đổi này, bạn không nên xem lỗi này, hãy báo cáo lỗi này cho tác giả của moduel chuyển đổi. Còn nếu bạn là tác giả của moduel chuyển đổi này, bạn phải xác định tên của một tập tin tồn tại trong thư mục nguồn của hệ thống để kiểm tra chính xác đường dẫn hệ thống.',
	'DIRECTORIES_AND_FILES'		=> 'Thư mục và tập tin cài đặt',
	'DISABLE_KEYS'				=> 'Loại vô hiệu',
	'DLL_FIREBIRD'				=> 'Firebird 1.5+',
	'DLL_FTP'					=> 'Hỗ trợ FTP [ Cài đặt ]',
	'DLL_MBSTRING'				=> 'Hỗ trợ loại ký tự Multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ qua ODBC',
	'DLL_MYSQL'					=> 'MySQL 3.23.x/4.x',
	'DLL_MYSQL4'				=> 'MySQL 4.x/5.x',
	'DLL_MYSQLI'				=> 'MySQL 4.1.x/5.x với ứng dụng mở rộng MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Hỗ trợ XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Hỗ trợ chế độ nén zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Download tập tin cấu hình',
	'DL_CONFIG_EXPLAIN'			=> 'Bạn có thể donaload toàn bộ tập tin cấu hình <strong>config.php</strong> về máy tính của mình. Sau đó bạn cần phải tự mình upload tập tin này lên hệ thống thay thế cho tập tin <strong>config.php</strong> hiện có trong thư mục chính của hệ thống. Hãy nhớ upload tập tin này trong định dạng ASCII. Xem tài liệu hướng dẫn của ứng dụng FTP mà bạn đang sử dụng nếu bạn không biết về loại định dạng này. Sau khi bạn đã upload xong tập tin <strong>config.php</strong>, hãy bấm vào nút <strong>Hoàn tất </strong> để chuyển đến bước kế tiếp.',
	'DL_DOWNLOAD'				=> 'Download',
	'DONE'						=> 'Hoàn tất',

	'ENABLE_KEYS'				=> 'Đang bật lại những loại bị vô hiệu. Quá trình này có thể mất nhiều thời gian',

	'FILES_OPTIONAL'			=> 'Thư mục và tập tin tuỳ chọn',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Tuỳ chọn</strong> - Những thư mục và tập tin hay thiết lập cấp phép này không bắt buộc. Công cụ cài đặt sẽ sử dụng các phương pháp khác nhau để hoàn tất quá trình này nếu như chúng không tồn tại hoặc không thể ghi được trên server. Tuy nhiên, nếu có những thư mục và tập tin hay thiết lập cấp phép này sẽ đẩy nhanh quá trình cài đặt.',
	'FILES_REQUIRED'			=> 'Thư mục và tập tin',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Yêu cầu bắt buộc</strong> - Để có thể sử dụng các chức năng đã được xây dựng, hệ thống phpBB cần phải được phép truy nhập hoặc ghi tập tin đến các thư mục và tập tin của hệ thống. Nếu bạn nhìn thấy thông báo <strong>Không tìm thấy</strong>, bạn cần phải tạo hay upload lại những thư mục và tập tin tương ứng. Nếu bạn nhìn thấy thông báo <strong>Không thể ghi</strong>, bạn cần phải thay đổi lại thiết lập cấp phép trên server cho các thư mục hay tập tin tương ứng.',
	'FILLING_TABLE'				=> 'Điền vào table <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Table điền vào',
	'FINAL_STEP'				=> 'Thực thi bước cuối cùng',
	'FORUM_ADDRESS'				=> 'Địa chỉ hệ thống',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Địa chỉ HTTP của hệ thống',
	'FORUM_PATH'				=> 'Đường dẫn hệ thống',
	'FORUM_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chính cài đặt hệ thống trên server của bạn',
	'FOUND'						=> 'Đã tìm thấy',
	'FTP_CONFIG'				=> 'Chuyển tập tin cầu hình bằng FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'Hệ thống đã xác định sự tồn tại của moduel FTP trên server của bạn. Bạn có thể chọn cài đặt với tập tin cấu hình <strong>config.php</strong> của mình thông qua phương pháp này. Bạn sẽ cần phải cung cấp thông tin về FTP trong phần bên dưới. Hãy nhớ tên đăng nhập và mật khẩu kết nối đến server FTP của bạn. Nếu không nhớ, bạn có thể yêu cầu nhà cung cấp dịch vụ hosting của mình gửi lại cho bạn những thông tin này',
	'FTP_PATH'					=> 'Đường dẫn FTP',
	'FTP_PATH_EXPLAIN'			=> 'Đây là đương dẫn đến thư mục chính cài đặt hệ thống, ví dụ như <strong>htdocs/phpBB2/</strong>',
	'FTP_UPLOAD'				=> 'Upload',

	'GPL'						=> 'General Public License',
	
	'INITIAL_CONFIG'			=> 'Cấu hình đơn giản',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Chương trình cài đặt xác định server của bạn có thể sử dụng hệ thống phpBB. Bạn cần phải cung cấp cho hệ thống biết một vài thông tin xác định bên dưới. Nêu bạn không biết làm thế nào để kết nối đến cơ sở dữ liệu của mình, hãy liên hệ trước tiên đến nhà cung cấp dịch vụ hosting của bạn hoặc tìm kiếm sự giúp đỡ trong các diễn đàn hỗ trợ phpBB. Khi nhập vào thông tin, hãy chắc chắn bạn đã kiểm tra hoàn toàn những thông tin này trước khi tiếp tục quá trình cài đặt.',
	'INSTALL_CONGRATS'			=> 'Xin chúc mừng!',
	'INSTALL_CONGRATS_EXPLAIN'	=> 'Bạn đã cài đặt thành công hệ thống phpBB trên server của mình. Hãy bấm vào nút chấp nhận bên dưới để chuyển đến bảng điều khiển của Administrator. Bạn hãy dành một chút thời gian để tìm hiểu các tuỳ chọn cấu hình trong hệ thống mới. Hãy nhớ những giúp đỡ từ cộng đồng trực tuyến thông qua tài liệu hướng dẫn sử dụng và các diễn đàn hỗ trợ phpBB. Bạn cũng có thể xem qua tập tin %sREADME%s để biết thêm thông tin.',
	'INSTALL_INTRO'				=> 'Chào mừng bạn đã đến với công cụ cài đặt',
	'INSTALL_INTRO_BODY'		=> 'Với công cụ này, bạn sẽ có thể cài đặt hệ thống phpBB trên server của mình.</p><p>Để bắt đầu quá trình cài đặt, bạn sẽ cần phải cung cấp cho hệ thống biết những thông tin được yêu cầu dưới đây:</p>
	<ul>
	<li>Địa chỉ server cơ sở dữ liệu</li>
	<li>Tên cơ sở dữ liệu</li>
	<li>Tên đăng nhập và mật khẩu kết nối đến cơ sở dữ liệu</li>
	</ul>
	<p>Một vài thông tin giới thiệu khác ...',
	'INSTALL_INTRO_NEXT'		=> 'Để bắt đầu việc cài đặt, bạn hãy bấm vào nút chấp nhận bên dưới.',
	'INSTALL_LOGIN'				=> 'Đăng nhập',
	'INSTALL_NEXT'				=> 'Bước kế tiếp',
	'INSTALL_NEXT_FAIL'			=> 'Có một vài thao tác kiểm tra thất bại và bạn nên giải quyết những rắc rối này trước khi chuyển sang bước kế tiếp. Những kiểm tra thất bại này có thể dẫn đến việc cài đặt hệ thống không thể hoàn tất hay cài đặt không trọn vẹn.',
	'INSTALL_NEXT_PASS'			=> 'Tất cả những kiểm tra đơn giản đều hợp lệ và bạn có thể chuyển sang bước kế tiếp trong quá trình cài đặt. Nếu bạn đã thay đổi bất kì thiết lập cấp phép, module ... nào và bạn muốn kiểm tra lại cho chắc chắn thì bạn có thể thực hiện lại việc kiểm tra.',
	'INSTALL_PANEL'				=> 'Bảng điều khiển cài đặt',
	'INSTALL_SEND_CONFIG'		=> 'Thật đáng tiếc, hệ thống không thể ghi những thông tin cấu hình cài đặt đến tập tin <strong>config.php</strong>. Điều này xảy ra bởi vì tập tin này không tồn tại hoặc không được cấp phép có thể ghi trên server. Các tuỳ chọn được liệt kê bên dưới sẽ giúp bạn hoàn tất việc cài đặt của mình với tập tin cấu hình <strong>config.php</strong> này.',
	'INSTALL_START'				=> 'Bắt đầu cài đặt',
	'INSTALL_TEST'				=> 'Kiểm tra lại',
	'INST_ERR_DB_CONNECT'		=> 'Không thể kết nối đến cơ sở dữ liệu, bạn hãy xem thông báo lỗi bên dưới để biết nguyên nhân',
	'INST_ERR_DB_NO_ERROR'		=> 'Không có thông báo lỗi nào được đưa ra',
	'INST_ERR_EMAIL_INVALID'	=> 'Địa chỉ Email bạn vừa nhập không hợp lệ',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Địa chỉ Email bạn vừa nhập không phù hợp.',
	'INST_ERR_FATAL'			=> 'Lỗi cài đặt nghiêm trọng',
	'INST_ERR_FATAL_DB'			=> 'Một lỗi cơ sở dữ liệu nghiêm trọng và không thể phục hồi lại đã xảy ra. Lỗi này xảy ra bởi vì bạn đã xác định tên đăng nhập cơ sở dữ liệu không được phép sử dụng các lệnh <strong>CREATE TABLES</strong> hay <strong>INSERT</strong> dữ liệu ... Nhiều thông tin hơn về lỗi này được cung cấp bên dưới. Hãy liên hệ trước tiên với nhà cung cấp dịch vụ hosting của bạn hoặc các diễn đàn hỗ trợ phpBB để nhận được nhiều sự giúp đỡ hơn.',
	'INST_ERR_FTP_PATH'			=> 'Không thể thay đổi thư mục đã cung cấp, bạn hãy vui lòng kiểm tra lại đường dẫn.',
	'INST_ERR_FTP_LOGIN'		=> 'Không thể kết nối đến server FTP, bạn hãy vui lòng kiểm tra lại tên đăng nhập và mật khẩu kết nối',
	'INST_ERR_MISSING_DATA'		=> 'Bạn phải điền đầy đủ thông tin trong phần này',
	'INST_ERR_NO_DB'			=> 'Không thể nạp moduel PHP cho loại cơ sở dữ liệu đã chọn',
	'INST_ERR_PASSWORD_MISMATCH' => 'Mật khẩu bạn vừa nhập không phù hợp.',
	'INST_ERR_PASSWORD_TOO_LONG' => 'Mật khẩu bạn vừa nhập quá dài. Mật khẩu không được phép vượt quá <strong>30</strong> ký tự.',
	'INST_ERR_PASSWORD_TOO_SHORT' => 'Mật khẩu bạn vừa nhập quá ngắn. Mật khẩu không được phép ít hơn <strong>6</strong> ký tự.',
	'INST_ERR_PREFIX'			=> 'Tiền tố đầu mỗi tên table bạn vừa xác định đã được sử dụng, hãy vui lòng chọn một tên khác.',
	'INVALID_PRIMARY_KEY'		=> 'Primary key không hợp lệ: %s',

	'MAKE_FOLDER_WRITABLE'		=> 'Hãy chắc chắn rằng thư mục này có tồn tại trong hệ thống và có thể ghi được trên server rồi thử lại:<br />&#187;<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Hãy chắc chắn rằng những thư mục này có tồn tại trong hệ thống và có thể ghi được trên server rồi thử lại:<br />&#187;<strong>%s</strong>',

	'NAMING_CONFLICT'			=> 'Xung đột trong việc đặt tên: %s và %s đều là tên không được phép sử dụng<br /><br />%s',
	'NEXT_STEP'					=> 'Chuyển sang bước kế tiếp',
	'NOT_FOUND'					=> 'Không thể tìm',
	'NOT_UNDERSTAND'			=> 'Không hiểu %s #%d, table %s ("%s")',
	'NO_CONVERTORS'				=> 'Không chuyển đổi nào có sẵn đề sử dụng',
	'NO_CONVERT_SPECIFIED'		=> 'Không chuyển đổi nào được xác định',
	'NO_LOCATION'				=> 'Không thể chọn thư mục định vị',
	'NO_TABLES_FOUND'			=> 'Không tìm thấy table nào.',
// TODO: Write some explanatory introduction text
	'OVERVIEW_BODY'					=> 'Chào mừng bạn đã sử dụng phiên bản Beta đầu tiên của phpBB 3.0.0 kể từ sau thế hệ phpBB 2.x.x! Việc phát hành bản Beta này dự định dành cho các thành viên có nhiều kinh nghiệm và kiến thức về lập trình dùng thử trong những môi trường phát triển cố định để giúp đỡ chúng tôi hoàn tất việc tạo ra một giải pháp về phần mềm Bulletin Board mã nguồn mở tốt nhất.</p><p><strong style="text-transform: uppercase;">Lưu ý:</strong> Phiên bản này <strong style="text-transform: uppercase;">không phải là phiên bản hoàn tất cuối cùng</strong> của phpBB 3.0.0 và chỉ sử dụng cho mục đích <strong style="text-transform: uppercase;">thử nghiệm</strong>.</p><p>Việc cài đặt hệ thống này sẽ giúp bạn làm quen trong việc cài đặt hệ thống phpBB thế hệ mới, chuyển đổi từ một hệ thống phần mềm khác sang phpBB hay cập nhật/nâng cấp lên phiên bản mới nhất của phpBB. Để biết thêm nhiều thông tin về mỗi tuỳ chọn cài đặt, hãy chọn trong menu bên dưới.',
	'PHP_OPTIONAL_MODULE'			=> 'Moduel tuỳ chọn',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Tuỳ chọn</strong> - Những moduel hay ứng dụng này đều hoàn toàn tuỳ chọn, bạn không nhất thiết phải cài đặt đầy đủ mới có thể sử dụng được phpBB. Tuy nhiên, nếu được cài đặt đầy đủ trên server, bạn sẽ sử dụng được đầy đủ chức năng của hệ thống.',
	'PHP_SUPPORTED_DB'				=> 'Loại cơ sở dữ liệu được hỗ trợ',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Yêu cầu bắt buộc</strong> - Server của bạn ít nhất phải hỗ trợ một loại cơ sở dữ liệu tương thích với PHP. Nếu không có bất cứ moduel cơ sở dữ liệu nào có sẵn để sử dụng, bạn nên liên hệ với nhà cung cấp dịch vụ hosting của mình hoặc xem lại tài liệu cài đặt PHP để tìm thấy lời khuyên.',
	'PHP_REGISTER_GLOBALS'			=> 'Thiết lập PHP <strong>register_globals</strong> đã bị vô hiệu',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'Hê thống sẽ vẫn hoạt động nếu thiết lập này được bật, nhưng nếu có thể, chúng tôi khuyến cáo bạn nên tắt thiết lập PHP <strong>register_globals</strong> vì một số nguyên nhân bảo mật.',
	'PHP_SAFE_MODE'					=> 'Chế độ an toàn',
	'PHP_SETTINGS'					=> 'Phiên bản PHP và thiết lập',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Yêu cầu bắt buộc</strong> - Bạn phải cài đặt phiên bản PHP ít nhất là <strong>4.3.3</strong> trở lên để sử dụng được hệ thống phpBB. Nếu chế độ an toàn được hiển thị bên dưới thì cũng có nghĩa PHP trên server của bạn đang chạy trong chế độ này. Điều này sẽ hạn chế việc quản trị hệ thống từ xa và những chức năng tương tự.',
	'PHP_VERSION_REQD'				=> 'Phiên bản PHP >= 4.3.3',
	'PREFIX_FOUND'					=> 'Tiền tố đầu mỗi tên table <strong>%s</strong> mà bạn vừa chọn đã được sử dụng trong gói cơ sở dữ liệu này.',
	'PREPROCESS_STEP'				=> 'Đang thực thi quá trình kiểm tra trước các <strong>function/query</strong>',
	'PRE_CONVERT_COMPLETE'			=> 'Tất cả các bước kiểm tra trước việc chuyển đổi đã hoàn tất. Bây giờ bạn thực sự bắt đầu việc chuyển đổi hệ thống.',
	'PROCESS_LAST'					=> 'Tiến hành lệnh thực thi trước',

//	'REQUIRED'					=> 'Required',
	'REQUIREMENTS_TITLE'		=> 'Yêu cầu tương thích khi cài đặt',
	'REQUIREMENTS_EXPLAIN'		=> 'Trước khi tiến hành việc cài đặt hệ thống phpBB, chương trình cài đặt sẽ thực hiện một số kiểm tra về cấu hình và các tập tin trên server của bạn để chắc chắn rằng server của bạn có thể cài đặt và sử dụng được hệ thống phpBB. Hãy xem kĩ tất cả các kết quả kiểm tra và đừng tiến hành cài đặt cho đến khi các kiểm tra bắt buộc đều hợp lệ. Nếu bạn muốn kích hoạt bất kì moduel chức năng nào được liệt kê trong danh sách những kiểm tra tuỳ chọn, bạn cũng hãy chắc chắn rằng những kiểm tra tuỳ chọn đó cũng hợp lệ.',
	'RETRY_WRITE'				=> 'Cố gắng tạo lại tập tin cấu hình',
	'RETRY_WRITE_EXPLAIN'		=> 'Nếu muốn, bạn có thể thay đổi lại thiết lập cấp phép cho tập tin cấu hình <strong>config.php</strong> để hệ thống thực hiện việc tạo tập tin này. Sau khi thay đổi xong thiết lập cấp phép, bạn hãy bấm vào nút <strong>Cố gắng tạo lại tập tin cấu hình</strong> bên dưới để thử lại. Hãy nhớ trả lại những thiết lập cấp phép ban đầu cho tập tin cấu hình <strong>config.php</strong> sau khi việc cài đặt hệ thống hoàn tất.',

	'SCRIPT_PATH'				=> 'Đường dẫn',
	'SCRIPT_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục cài đặt hệ thống phpBB, xác định bởi tên miền',
	'SERVER_CONFIG'				=> 'Cấu hình server',
	'SOFTWARE'					=> 'Phần mềm hệ thống',
	'SPECIFY_OPTIONS'			=> 'Xác định tuỳ chọn chuyển đổi',
	'STAGE_ADMINISTRATOR'		=> 'Thông tin chi tiết về Administrator',
	'STAGE_ADVANCED'			=> 'Thiết lập nâng cao',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Những thiết lập trong trang này chỉ thực sự cần thiết nếu bạn muốn thay đổi những thiết lập mặc định trong hệ thống. Nếu không chắc chắn, bạn có thể chuyển sang bước kế tiếp, những thiết lập này có thể thay đổi lại sau này trong bảng điều khiển của Administrator.',
	'STAGE_CONFIG_FILE'			=> 'Tập tin cấu hình',
	'STAGE_DATABASE'			=> 'Thiết lập cơ sở dữ liệu',
	'STAGE_FINAL'				=> 'Bước cuối cùng',
	'STAGE_INTRO'				=> 'Giới thiệu',
	'STAGE_IN_PROGRESS'			=> 'Quá trình chuyển đổi đang được tiến hành',
	'STAGE_REQUIREMENTS'		=> 'Yêu cầu',
	'STAGE_SETTINGS'			=> 'Thiết lập',
	'STARTING_CONVERT'			=> 'Bắt đầu tiến hành chuyển đổi',
	'STEP_PERCENT_COMPLETED'	=> 'Bước <strong>%d</strong> trong tổng số <strong>%d</strong> bước: %d%% đã hoàn tất',
	'SUB_INTRO'					=> 'Giới thiệu',
	'SUB_LICENSE'				=> 'Bản quyền',
	'SUB_SUPPORT'				=> 'Hỗ trợ',
	'SUCCESSFUL_CONNECT'		=> 'Kết nối thành công',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'Trong suốt quá trình sử dụng phiên bản Beta1 của phpBB 3.0.0, bạn có thể tìm kiếm một vài sự trợ giúp nho nhỏ từ <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">diễn đàn hỗ trợ của phpBB Group</a>. Chúng tôi sẽ giải đáp các thắc mắc và vấn đề thường gặp trong việc cài đặt, các rắc rối trong việc cấu hình hệ thống và hỗ trợ giải quyết các rắc rối thường gặp liên quan đến các lỗi bug. Chúng tôi sẽ không hỗ trợ bất kì Modification, mã nguồn tuỳ chỉnh, giao diện bổ sung hay thành viên nào sử dụng bản Beta này trong một cộng đồng trực tuyến.</p><p>Để tìm kiếm thêm sự giúp đỡ, hãy tham khảo tài liệu trực tuyến <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_start_guide.html">Quick Start Guide</a> của chúng tôi.</p><p>Để biết những thông tin mới nhất về việc phát hành các phiên bản mới, tại sao bạn không tham gia vào <a href="http://www.phpbb.com/support/" target="_new">danh sách tin tức qua Email</a> của chúng tôi',
	'SYNC_FORUMS'				=> 'Bắt đầu đồng bộ chuyên mục',
	'SYNC_TOPICS'				=> 'Bắt đầu đồng bộ chủ đề',
	'SYNC_TOPIC_ID'				=> 'Đang đồng bộ những chủ đề có topic_id từ <strong>$1%s</strong> đến <strong>$2%s</strong>',

	'TABLES_MISSING'			=> 'Không thể tìm thấy những table sau<br />&#187; <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Tiền tố trước tên của mỗi table trong cơ sở dữ liệu',
	'TABLE_PREFIX_SAME'			=> 'Tiền tố trước tên của mỗi table trong cơ sở dữ liệu đã được sử dụng bởi hệ thống mà bạn đang muốn chuyển đổi sang phpBB.<br />&#187; Tiền tố đã được xác định là <strong>%s</strong>',
	'TESTS_PASSED'				=> 'Kiểm tra hợp lệ',
	'TESTS_FAILED'				=> 'Kiểm tra thất bại',

	'UNAVAILABLE'				=> 'Không có sẵn',
	'UNWRITEABLE'				=> 'Không thể ghi',

	'VERSION'					=> 'Phiên bản',

	'WELCOME_INSTALL'			=> 'Chào mừng bạn đã đến với chương trình cài đặt hệ thống phpBB',
	'WRITEABLE'					=> 'Có thể ghi',
));

?>