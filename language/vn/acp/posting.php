<?php
/** 
*
* posting [Vietnamese]
*
* @package language
* @version $Id: posting.php,v 1.11 2006/08/15 16:08:00 nedka Exp $
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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode là một dạng thức bổ sung đặc biệt của mã HTML, bản thân tương tự gần giống như HTML, cho phép bạn tuỳ biến sử dụng và điều khiển dễ dàng hơn mã HTML. Với công cụ này, bạn có thể thêm vào, gỡ bỏ hay chỉnh sửa những thẻ BBCode tuỳ chọn',
	'ADD_BBCODE'				=> 'Tạo thẻ BBCode mới',
 
	'BBCODE_ADDED'				=> 'Thẻ BBCode đã được tạo thành công',
	'BBCODE_EDITED'				=> 'Thẻ BBCode đã được chỉnh sửa thành công',
	'BBCODE_INVALID_TAG_NAME'	=> 'Tên thẻ BBCode bạn vừa chọn không hợp lệ',
	'BBCODE_NOT_EXIST'			=> 'Thẻ BBCode bạn vừa chọn không tồn tại',
	'BBCODE_HELPLINE'			=> 'Hướng dẫn sử dụng thẻ BBCode',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Mục thông tin hướng dẫn sử dụng này sẽ được hiển thị khi rê chuột lên thẻ BBCode tương ứng trong phần soạn bài viết',
	'BBCODE_HELPLINE_TEXT'		=> 'Nội dung hướng dẫn',
	'BBCODE_TAG'				=> 'Thẻ BBCode',
	'BBCODE_TAG_TOO_LONG'		=> 'Thẻ BBCode xác định bạn vừa nhập quá dài, hãy vui lòng chọn tên thẻ ngắn hơn.',
	'BBCODE_USAGE'				=> 'Cách sử dụng thẻ BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[colour={COLOR}]{TEXT}[/colour]<br /><br />[font={TEXT1}]{TEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Bạn có thể xác định cách sử dụng thẻ BBCode tại đây. Thay thế bất kì biến nào nhập vào bằng mã tương ứng (%sXem bên dưới%s)',

	'EXAMPLE'						=> 'Ví dụ:',
	'EXAMPLES'						=> 'Các ví dụ:',

	'HTML_REPLACEMENT'				=> 'Mã HTML thay thế',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;font color="{COLOR}"&gt;{TEXT}&lt;/font&gt;<br /><br />&lt;font face="{TEXT1}"&gt;{TEXT2}&lt;/font&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Bạn có thể xác định mã HTML thay thế cho thẻ BBCode tại đây. Mỗi giao diện có thể có mã HTML thay thế của riêng mình. Đừng đặt lại những mã thay thế mà bạn đã sử dụng ở bên trên!',

	'TOKEN'					=> 'Mã thay thế',
	'TOKENS'				=> 'Những mã thay thế',
	'TOKENS_EXPLAIN'		=> 'Mã thay thế có nhiệm vụ thay thế cho nguồn nhập vào của thành viên. Nguồn nhập vào chỉ được kiểm tra hợp lệ nếu kết quả định danh của nó chính xác. Nếu cần thiết, bạn có thể đánh số chúng bằng cách thêm vào một con số sau ký tự nằm trong dấu ngoặc móc, ví dụ như <strong>{USERNAME1}, {USERNAME2}</strong>.<br /><br />Ngoài ra, những mã thay thế này có thể sử dụng bất kì chuỗi ngôn ngữ nào trong thư mục <strong>language/</strong> của hệ thống, giống như: <strong>{L_<em>&lt;tên_chuỗi&gt;</em>}</strong> với <strong><em>&lt;tên_chuỗi&gt;</em></strong> là tên của chuỗi ngôn ngữ trong gói ngôn ngữ mà bạn muốn thêm vào. Ví dụ, <strong>{L_WROTE}</strong> là một chuỗi ngôn ngữ trong gói ngôn ngữ sẽ được hiển thị thành <strong>đã viết</strong> hoặc có thể hiển thị nội dung này theo nhiều ngôn ngữ khác nhau tuỳ vào gói ngôn ngữ mà thành viên chọn',
	'TOKEN_DEFINITION'		=> 'Định danh mã thay thế',
	'TOO_MANY_BBCODES'		=> 'Bạn không thể tạo quá nhiều thẻ BBCode. Hãy gỡ bỏ một hay nhiều thẻ BBCode rồi thử lại',

	'tokens'	=>	array(
		'TEXT'			=> 'Bất kì văn bản nào, bao gồm các ký tự, chữ số ...',
		'NUMBER'		=> 'Bất kì giá trị số nào',
		'EMAIL'			=> 'Địa chỉ Email hợp lệ',
		'URL'			=> 'Địa chỉ URL hợp lệ sử dụng bất kì giao thức nào như http://, ftp:// ... không thể sử dụng được vì các vấn đề với mã Javascript. Nếu bạn không nhập vào giao thức, <strong>http://</strong> sẽ được sử dụng làm giao thức mặc định',
		'LOCAL_URL'		=> 'Địa chỉ URL trong hệ thống. Địa chỉ URL này phải liên quan đến các trang trong hệ thống và không thể chứa một tên miền khác hay giao thức nào',
		'COLOR'			=> 'Mã màu HTML, có thể sử dụng định dạng mã màu số như <strong>#FF1234</strong> hay một tên màu tiếng Anh giống như <strong>blue</strong>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, gỡ bỏ hoặc chỉnh sửa những biểu tượng bài viết mà thành viên có thể thêm vào trong chủ đề hay bài viết của họ. Những biểu tượng bài viết này thường được hiển thị trước tên chủ đề trong phần xem chuyên mục hoặc tiêu đề bài viết trong phần xem chủ đề. Bạn cũng có thể cài đặt và tạo ra các gói biểu tượng bài viết mới.',
	'ACP_SMILIES_EXPLAIN'	=> 'Biểu tượng vui thông thường là những hình ảnh nhỏ, chủ yếu là những hình vui nhộn được sử dụng để truyền đạt cảm xúc của thành viên trong bài viết. Với công cụ này, bạn có thể thêm vào, gỡ bỏ hay chỉnh sửa những biểu tượng vui mà thành viên có thể sử dụng trong bài viết và tin nhắn của họ. Bạn cũng có thể cài đặt và tạo ra các gói biểu tượng vui mới.',
	'ADD_SMILIES'			=> 'Thêm nhiều biểu tượng vui',
	'ADD_ICONS'				=> 'Thêm nhiều biểu tượng bài viết',
	'AFTER_ICONS'			=> 'Sau biểu tượng bài viết %s',
	'AFTER_SMILIES'			=> 'Sau biểu tượng vui %s',

	'CODE'						=> 'Mã',
	'CURRENT_ICONS'				=> 'Biểu tượng bài viết hiện tại',
	'CURRENT_ICONS_EXPLAIN'		=> 'Chọn yêu cầu bạn muốn thực hiện với những biểu tượng bài viết đã cài đặt hiện tại của mình',
	'CURRENT_SMILIES'			=> 'Biểu tượng vui hiện tại',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Chọn yêu cầu bạn muốn thực hiện với những biểu tượng vui đã cài đặt hiện tại của mình',

	'DISPLAY_ON_POSTING'	=> 'Hiển thị trong phần gửi bài viết',

	'EDIT_ICONS'				=> 'Sửa biểu tượng bài viết',
	'EDIT_SMILIES'				=> 'Sửa biểu tượng vui',
	'EMOTION'					=> 'Ký tự xác định biểu tượng vui',
	'EXPORT_ICONS'				=> 'Tạo gói biểu tượng bài viết',
	'EXPORT_ICONS_EXPLAIN'		=> 'Để tạo gói biểu tượng cho những biểu tượng bài viết đã cài đặt của bạn, hãy bấm %svào đây%s để tải về tập tin gói biểu tượng .pak. Sau khi tải về, bạn hãy tạo một tập tin zip hay tgz có chứa tất cả các biểu tượng bài viết mà bạn muốn thêm vào gói biểu tượng cùng với tập tin cấu hình .pak của gói biểu tượng bên trong.',
	'EXPORT_SMILIES'			=> 'Tạo gói biểu tượng vui',
	'EXPORT_SMILIES_EXPLAIN'	=> 'Để tạo gói biểu tượng cho những biểu tượng vui đã cài đặt của bạn, hãy bấm %svào đây%s để tải về tập tin gói biểu tượng .pak. Sau khi tải về, bạn hãy tạo một tập tin zip hay tgz có chứa tất cả các biểu tượng vui mà bạn muốn thêm vào gói biểu tượng cùng với tập tin cấu hình .pak của gói biểu tượng bên trong.',

	'FIRST'			=> 'Đầu tiên',

	'ICONS_ADD'				=> 'Thêm biểu tượng bài viết mới',
	'ICONS_ADDED'			=> 'Biểu tượng bài viết đã được thêm vào thành công.',
	'ICONS_CONFIG'			=> 'Cấu hình biểu tượng bài viết',
	'ICONS_DELETED'			=> 'Biểu tượng bài viết đã được gỡ bỏ thành công.',
	'ICONS_EDIT'			=> 'Sửa biểu tượng bài viết',
	'ICONS_EDITED'			=> 'Biểu tượng bài viết đã được cập nhật thành công.',
	'ICONS_HEIGHT'			=> 'Chiều cao biểu tượng bài viết',
	'ICONS_IMAGE'			=> 'Hình dùng làm biểu tượng bài viết',
	'ICONS_IMPORTED'		=> 'Gói biểu tượng bài viết đã được cài đặt thành công.',
	'ICONS_IMPORT_SUCCESS'	=> 'Gói biểu tượng bài viết đã được nhập thành công',
	'ICONS_LOCATION'		=> 'Vị trí biểu tượng bài viết',
	'ICONS_NOT_DISPLAYED'	=> 'Những biểu tượng bài viết dưới đây không được hiển thị trong phần gửi bài viết',
	'ICONS_ORDER'			=> 'Sắp xếp biểu tượng bài viết',
	'ICONS_URL'				=> 'Tập tin hình ảnh dùng làm biểu tượng bài viết',
	'ICONS_WIDTH'			=> 'Chiều rộng biểu tượng bài viết',
	'IMPORT_ICONS'			=> 'Cài đặt gói biểu tượng bài viết',
	'IMPORT_SMILIES'		=> 'Cài đặt gói biểu tượng vui',

	'KEEP_ALL'			=> 'Bỏ qua tất cả',

	'MASS_ADD_SMILIES'	=> 'Thêm vào nhiều biểu tượng vui',

	'NO_ICONS_EXPORT'	=> 'Bạn không có biểu tượng bài viết nào để tạo gói biểu tượng.',
	'NO_ICONS_PAK'		=> 'Không tìm thấy gói biểu tượng bài viết nào.',
	'NO_SMILIES_EXPORT'	=> 'Bạn không có biểu tượng vui nào để tạo gói biểu tượng.',
	'NO_SMILIES_PAK'	=> 'Không tìm thấy gói biểu tượng vui nào.',

	'PAK_FILE_NOT_READABLE'		=> 'Không thể đọc được tập tin .pak của gói biểu tượng',

	'REPLACE_MATCHES'	=> 'Kết quả thay thế',

	'SELECT_PACKAGE'			=> 'Chọn một gói biểu tượng',
	'SMILIES_ADD'				=> 'Thêm biểu tượng vui mới',
	'SMILIES_ADDED'				=> 'Biểu tượng vui đã được thêm vào thành công.',
	'SMILIES_CODE'				=> 'Mã biểu tượng vui',
	'SMILIES_CONFIG'			=> 'Cấu hình biểu tượng vui',
	'SMILIES_DELETED'			=> 'Biểu tượng vui đã được gỡ bỏ thành công.',
	'SMILIES_EDIT'				=> 'Sửa biểu tượng vui',
	'SMILIES_EDITED'			=> 'Biểu tượng vui đã được cập nhật thành công.',
	'SMILIES_EMOTION'			=> 'Biểu tượng vui',
	'SMILIES_HEIGHT'			=> 'Chiều cao biểu tượng vui',
	'SMILIES_IMAGE'				=> 'Hình dùng làm biểu tượng vui',
	'SMILIES_IMPORTED'			=> 'Gói biểu tượng vui đã được cài đặt thành công.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Gói biểu tượng vui đã được nhập thành công',
	'SMILIES_LOCATION'			=> 'Vị trí biểu tượng vui',
	'SMILIES_NOT_DISPLAYED'		=> 'Những biểu tượng vui dưới đây không được hiển thị trong phần gửi bài viết',
	'SMILIES_ORDER'				=> 'Sắp xếp biểu tượng vui',
	'SMILIES_URL'				=> 'Tập tin hình ảnh dùng làm biểu tượng vui',
	'SMILIES_WIDTH'				=> 'Chiều rộng biểu tượng vui',

	'WRONG_PAK_TYPE'	=> 'Gói biểu tượng bạn vừa chọn không chứa dữ liệu thích hợp.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, chỉnh sửa và gỡ bỏ những từ kiểm duyệt tự động trong hệ thống. Ngoài ra, mọi người sẽ không được phép sử dụng tên thành viên có chứa những từ kiểm duyệt này để đăng ký thành viên. Bạn có thể sử dụng dấu đại diện * trong từ kiểm duyệt, Ví dụ như <strong>*test*</strong> cũng sẽ kiểm duyệt luôn từ <strong>detestable</strong>, <strong>test*</strong> cũng sẽ kiểm duyệt luôn từ <strong>testing</strong>, <strong>*test</strong> cũng sẽ kiểm duyệt luôn từ <strong>detest</strong>.',
	'ADD_WORD'				=> 'Thêm từ kiểm duyệt mới',

	'EDIT_WORD'		=> 'Sửs từ kiểm duyệt',
	'ENTER_WORD'	=> 'Bạn phải nhập vào từ kiểm duyệt và từ thay thế',

	'NO_WORD'	=> 'Không có từ kiểm duyệt nào được chọn để chỉnh sửa',

	'REPLACEMENT'	=> 'Từ thay thế',

	'UPDATE_WORD'	=> 'Cập nhật từ kiểm duyệt',

	'WORD'				=> 'Từ kiểm duyệt',
	'WORD_ADDED'		=> 'Từ kiểm duyệt đã được thêm vào thành công',
	'WORD_REMOVED'		=> 'Từ kiểm duyệt bạn vừa chọn đã được gỡ bỏ thành công',
	'WORD_UPDATED'		=> 'Từ kiểm duyệt bạn vừa chọn đã được cập nhật thành công',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, chỉnh sửa, xem và xoá các xếp hạng. Bạn cũng có thể chỉ định những xếp hạng tuỳ chọn đặc biệt áp dụng cho thành viên thông qua phần quản lý thành viên.',
	'ADD_RANK'				=> 'Thêm xếp hạng mới',

	'MUST_SELECT_RANK'		=> 'Bạn phải chọn một xếp hạng.',
	
	'NO_ASSIGNED_RANK'		=> 'Không có xếp hạng đặc biệt nào được chỉ định.',
	'NO_RANK_TITLE'			=> 'Bạn chưa nhập vào tên xếp hạng.',
	'NO_UPDATE_RANKS'		=> 'Xếp hạng đã được xoá thành công. Tuy nhiên, những tài khoản thành viên đang sử dụng xếp hạng này chưa được cập nhật. Bạn sẽ phải tự mình thay đổi lại xếp hạng cho những tài khoản thành viên này.',

	'RANK_ADDED'			=> 'Xếp hạng đã được thêm vào thành công.',
	'RANK_IMAGE'			=> 'Hình ảnh xếp hạng',
	'RANK_IMAGE_EXPLAIN'	=> 'Hình ảnh xác định nhỏ hiển thị cùng với xếp hạng này. Đường dẫn đến hình ảnh phải nằm trong thư mục hệ thống.',
	'RANK_MINIMUM'			=> 'Số bài viết tối thiểu',
	'RANK_REMOVED'			=> 'Xếp hạng đã được gỡ bỏ thành công.',
	'RANK_SPECIAL'			=> 'Chọn làm xếp hạng đặc biệt',
	'RANK_TITLE'			=> 'Tên xếp hạng',
	'RANK_UPDATED'			=> 'Xếp hạng đã được cập nhật thành công.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lý các tên thành viên không được phép sử dụng. Với những tên thành viên bị cấm, bạn có thể sử dụng dấu đại diện * để cấm nhiều tên thành viên cùng loại. Lưu ý rằng bạn không thể cấm những tên thành viên đã được thành viên sử dụng để đăng ký, trước hết bạn cần xoá tên này rồi hãy cấm sử dụng nó trong đây',
	'ADD_DISALLOW_EXPLAIN'	=> 'Bạn có thể cấm một tên thành viên bằng cách sử dụng dấu đại diện * để cấm nhiều ký tự đi cùng',
	'ADD_DISALLOW_TITLE'	=> 'Thêm tên thành viên cấm',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Bạn có thể gỡ bỏ một tên thành viên bị cấm bằng cách chọn tên thành viên đó từ danh sách này và bấm vào nút chấp nhận',
	'DELETE_DISALLOW_TITLE'		=> 'Gỡ bỏ tên thành viên cấm',
	'DISALLOWED_ALREADY'		=> 'Tên thành viên bạn vừa nhập không thể bị cấm. Có thể tên này đã tồn tại trong danh sách tên thành viên cấm, trong danh sách từ kiểm duyệt hay đã được một thành viên nào đó sử dụng.',
	'DISALLOWED_DELETED'		=> 'Tên thành viên cấm đã được gỡ bỏ thành công',
	'DISALLOW_SUCCESSFUL'		=> 'Tên thành viên cấm đã được thêm vào thành công',

	'NO_DISALLOWED'				=> 'Không có tên thành viên nào bị cấm sử dụng',
	'NO_USERNAME_SPECIFIED'		=> 'Bạn chưa chọn hoặc nhập vào tên thành viên.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lý những nguyên nhân được sử dụng trong các báo cáo và nội dung từ chối khi từ chối những bài viết. Có một nguyên nhân mặc định trong đây được đánh dấu * mà bạn không thể gỡ bỏ được, nguyên nhân này được sử dụng cho tất cả các báo cáo khi từ chối mà không chọn nguyên nhân.',

	'ADD_NEW_REASON'		=> 'Thêm nguyên nhân mới',
	
	'IS_NOT_TRANSLATED'		=> 'Nguyên nhân chưa được phiên dịch',
	'IS_TRANSLATED'			=> 'Nguyên nhân đã được phiên dịch',
	
	'NO_REASON'					=> 'Không thể tìm thấy nguyên nhân',
	'NO_REASON_INFO'			=> 'Bạn phải nhập vào tên và nội dung của nguyên nhân này.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Bạn không thể gỡ bỏ nguyên nhân mặc định <strong>Những nguyên nhân khác</strong>.',

	'REASON_ADD'			=> 'Thêm báo cáo/nguyên nhân từ chối',
	'REASON_ADDED'			=> 'Báo cáo/nguyên nhân từ chối đã được thêm vào thành công',
	'REASON_ALREADY_EXIST'	=> 'Một nguyên nhân hiện tại đã sử dụng tên này, hãy nhập vào tên khác cho nguyên nhân này.',
	'REASON_DESCRIPTION'	=> 'Nội dung nguyên nhân',
	'REASON_EDIT'			=> 'Sửa báo cáo/nguyên nhân từ chối',
	'REASON_EDIT_EXPLAIN'	=> 'Với công cụ này, bạn có thể thêm vào hoặc chỉnh sửa các nguyên nhân. Nếu nguyên nhân đã được phiên dịch trong gói ngôn ngữ thì nội dung phiên dịch này sẽ thay thế cho nội dung nguyên nhân bạn nhập vào tại đây.',
	'REASON_REMOVED'		=> 'Báo cáo/nguyên nhân từ chối đã được gỡ bỏ thành công',
	'REASON_TITLE'			=> 'Tên nguyên nhân',
	'REASON_UPDATED'		=> 'Báo cáo/nguyên nhân từ chối đã được cập nhật thành công',

	'USED_IN_REPORTS'		=> 'Đã sử dụng trong báo cáo',
));

?>