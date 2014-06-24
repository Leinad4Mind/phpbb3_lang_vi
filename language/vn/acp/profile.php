<?php
/** 
*
* acp_profile [Vietnamese]
*
* @package language
* @version $Id: profile.php,v 1.04 2006/06/28 02:53:00 nedka Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Mục thông tin cá nhân mới đã được thêm vào thành công',
	'ALPHA_ONLY'			=> 'Chỉ sử dụng chữ số và chữ cái',
	'ALPHA_SPACERS'			=> 'Chỉ sử dụng chữ số, chữ cái và khoảng trắng',
	'ALWAYS_TODAY'			=> 'Sử dụng ngày tháng hiện tại',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Nhập vào tuỳ chọn của bạn',
	'BOOL_TYPE_EXPLAIN'		=> 'Xác định loại là hộp kiểm checkbox hay các nút bấm radio',

	'CHANGED_PROFILE_FIELD'		=> 'Mục thông tin cá nhân đã được thay đổi thành công',
	'CHARS_ANY'					=> 'Bất kì ký tự nào',
	'CHECKBOX'					=> 'Ô kiểm checkbox',
	'CP_LANG_DEFAULT_VALUE'		=> 'Giá trị mặc định',
	'CP_LANG_EXPLAIN'			=> 'Giới thiệu mục thông tin cá nhân',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Giới thiệu về mục thông tin cá nhân này hiển thị cho thành viên',
	'CP_LANG_NAME'				=> 'Tên mục hiển thị cho thành viên',
	'CP_LANG_OPTIONS'			=> 'Tuỳ chọn',
	'CREATE_NEW_FIELD'			=> 'Tạo mục thông tin cá nhân mới',
	'COLUMNS'					=> 'Số cột',

	'DEFAULT_ISO_LANGUAGE'			=> 'Ngôn ngữ mặc định [%s]',
	'DEFAULT_VALUE'					=> 'Giá trị mặc định',
	'DELETE_PROFILE_FIELD'			=> 'Gỡ bỏ mục thông tin cá nhân',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Bạn có chắc chắn muốn xoá mục thông tin cá nhân này?',
	'DISPLAY_AT_PROFILE'			=> 'Hiển thị trong phần thông tin cá nhân của thành viên',
	'DISPLAY_AT_REGISTER'			=> 'Hiển thị trong phần đăng ký thành viên mới',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Nếu tuỳ chọn này được bật, mục thông tin cá nhân sẽ được thêm vào trong phần đăng ký thành viên.',
	'DISPLAY_PROFILE_FIELD'			=> 'Hiển thị mục thông tin cá nhân',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Hiển thị mục thông tin cá nhân torng phần xem chủ đề/xem thông tin cá nhân/danh sách thành viên ...',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Nhập vào những tuỳ chọn của bạn với mỗi tuỳ chọn trên một dòng',

	'EMPTY_FIELD_IDENT'			=> 'Bạn chưa nhập tên mục thông tin cá nhân',
	'EMPTY_USER_FIELD_NAME'		=> 'Bạn chưa nhập tên mục thông tin cá nhân hiển thị cho thành viên',
	'ENTRIES'					=> 'Mục',
	'EVERYTHING_OK'				=> 'Mọi thứ đều bình thường',

	'FIELD_BOOL'				=> 'Toán tử logic (Có/Không)',
	'FIELD_DATE'				=> 'Ngày tháng',
	'FIELD_DESCRIPTION'			=> 'Giới thiệu mục thông tin cá nhân',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Giới thiệu về mục thông tin cá nhân này hiển thị cho thành viên',
	'FIELD_DROPDOWN'			=> 'Menu thả xuống dropdown',
	'FIELD_IDENT'				=> 'Tên mục thông tin cá nhân',
	'FIELD_IDENT_EXPLAIN'		=> 'Tên mục thông tin cá nhân giúp bạn định danh và quản lý dễ dàng, nó không hiển thị đến các thành viên.',
	'FIELD_INT'					=> 'Chữ số',
	'FIELD_LENGTH'				=> 'Độ dài khung input',
	'FIELD_NOT_FOUND'			=> 'Không tìm thấy mục thông tin cá nhân',
	'FIELD_STRING'				=> 'Trường văn bản đơn',
	'FIELD_TEXT'				=> 'Khung nhập văn bản textarea',
	'FIELD_TYPE'				=> 'Loại mục thông tin cá nhân',
	'FIELD_TYPE_EXPLAIN'		=> 'Bạn không thể thay đổi loại mục thông tin cá nhân sau này.',
	'FIELD_VALIDATION'			=> 'Kiểm tra mục thông tin cá nhân',
	'FIRST_OPTION'				=> 'Tuỳ chọn đầu tiên',

	'HIDE_PROFILE_FIELD'			=> 'Ẩn mục thông tin cá nhân',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Chỉ có các Administrator và Moderator mới có thể nhìn thấy và điền vào mục thông tin cá nhân loại này. Nếu tuỳ chọn này được bật, mục thông tin cá nhân sẽ chỉ hiển thị trong phần thông tin cá nhân của thành viên.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Tên mục thông tin cá nhân chỉ được phép sử dụng ký tự thường a-z và dấu gạch nối _',
	'ISO_LANGUAGE'				=> 'Ngôn ngữ [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Tuỳ chọn xác định ngôn ngữ [<b>%s</b>]',

	'MAX_FIELD_CHARS'		=> 'Số lượng ký tự tối đa cho phép sử dụng',
	'MAX_FIELD_NUMBER'		=> 'Số tối đa cho phép sử dụng',
	'MIN_FIELD_CHARS'		=> 'Số lượng ký tự tối thiểu cho phép sử dụng',
	'MIN_FIELD_NUMBER'		=> 'Số tối thiểu cho phép sử dụng',

	'NO_FIELD_ENTRIES'			=> 'Không có mục nào được chỉ định',
	'NO_FIELD_ID'				=> 'Không có mục thông tin cá nhân nào được chỉ định',
	'NO_FIELD_TYPE'				=> 'Không có loại mục thông tin cá nhân nào được chỉ định',
	'NO_VALUE_OPTION'			=> 'Tuỳ chọn ngang bằng đến những giá trị không nhập vào',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Giá trị không được nhập vào. Nếu mục thông tin cá nhân là bắt buộc, thành viên sẽ được thông báo lỗi nếu chọn tuỳ chọn trong đây',
	'NUMBERS_ONLY'				=> 'Chỉ sử dụng chữ số (0-9)',

	'PREVIEW_PROFILE_FIELD'		=> 'Xem trước mục thông tin cá nhân',
	'PROFILE_BASIC_OPTIONS'		=> 'Tuỳ chọn đơn giản',
	'PROFILE_FIELD_ACTIVATED'	=> 'Mục thông tin cá nhân đã được kích hoạt thành công',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Mục thông tin cá nhân đã được ngưng kích hoạt thành công',
	'PROFILE_LANG_OPTIONS'		=> 'Tuỳ chọn xác định ngôn ngữ',
	'PROFILE_TYPE_OPTIONS'		=> 'Tuỳ chọn xác định loại thông tin cá nhân',

	'RADIO_BUTTONS'				=> 'Nút tuỳ chọn radio',
	'REMOVED_PROFILE_FIELD'		=> 'Đã gỡ bỏ thành công mục thông tin cá nhân.',
	'REQUIRED_FIELD'			=> 'Mục thông tin cá nhân bắt buộc',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Yêu cầu thành viên phải nhập thông tin đầy đủ trong mục này. Nếu thiết lập này được chọn, mục thông tin cá nhân này sẽ được hiển thị trong phần đăng ký thành viên mới.',
	'ROWS'						=> 'Số hàng',

	'SAVE'							=> 'Lưu',
	'SECOND_OPTION'					=> 'Tuỳ chọn thứ hai',
	'STEP_1_EXPLAIN_CREATE'			=> 'Với công cụ này, bạn có thể nhập vào những thông số cơ bản đầu tiên cho mục thông tin cá nhân mới. Những thông số này rất cần thiết trong bước thứ hai: bạn có thể thiết lập những tuỳ chọn còn lại cũng như có thể xem trước và kiểm tra mục thông tin cá nhân nhiều hơn.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Với công cụ này, bạn có thể thay đổi những thông số cớ bản của các mục thông tin cá nhân. Những tuỳ chọn có liên quan được tính toán lại trong bước thứ hai: bạn có thể xem trước và kiểm tra những thiết lập đã thay đổi.',
	'STEP_1_TITLE_CREATE'			=> 'Thêm vào mục thông tin cá nhân',
	'STEP_1_TITLE_EDIT'				=> 'Sửa mục thông tin cá nhân',
	'STEP_2_EXPLAIN_CREATE'			=> 'Với công cụ này, bạn có thể xác định một vài tuỳ chọn thường gặp. Ngoài ra, bạn có thể xem trước mục thông tin cá nhân mà bạn đã tạo giống như khi thành viên nhìn thấy. Hãy kiểm tra kĩ càng cho đến khi bạn cảm thấy hài lòng với mục thông tin cá nhân.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Với công cụ này, bạn có thể thay đổi một vài tuỳ chọn thường gặp. Ngoài ra, bạn có thể xem trước những mục thông tin cá nhân đã thay đổi giống như khi thành viên nhìn thấy. Hãy kiểm tra kĩ càng cho đến khi bạn cảm thấy hài lòng với mục thông tin cá nhân.<br /><b>Lưu ý rằng những thay đổi đến mục thông tin cá nhân sẽ không ảnh hưởng đến những mục thông tin cá nhân hiện có được nhập vào bởi các thành viên.</b>',
	'STEP_2_TITLE_CREATE'			=> 'Tuỳ chọn xác định loại thông tin cá nhân',
	'STEP_2_TITLE_EDIT'				=> 'Tuỳ chọn xác định loại thông tin cá nhân',
	'STEP_3_EXPLAIN_CREATE'			=> 'Kể từ khi bạn có nhiều gói ngôn ngữ được cài đặt trong hệ thống, bạn phải điền đầy đủ thông tin cho các mục này trong từng gói ngôn ngữ. Mục thông tin cá nhân sẽ hiển thị với gói ngôn ngữ mặc định được chọn, bạn có thể điền đầy đủ thông tin cho các mục này trong từng gói ngôn ngữ sau nếu muốn.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Kể từ khi bạn có nhiều gói ngôn ngữ được cài đặt trong hệ thống, bạn có thể thay đổi ngay bây giờ hao8c5 thêm vào đầy đủ thông tin cho các mục này trong từng gói ngôn ngữ. Mục thông tin cá nhân sẽ hiển thị với gói ngôn ngữ mặc định được chọn.',
	'STEP_3_TITLE_CREATE'			=> 'Xác định ngôn ngữ còn lại',
	'STEP_3_TITLE_EDIT'				=> 'Xác định ngôn ngữ',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Nhập vào một cụm từ mặc định được hiển thị hay một giá trị mặc định. Bỏ trống phần này nếu bạn muốn hiển thị rỗng mục thông tin này cho thành viên tự điền vào.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Nhập vào một đoạn văn bản mặc định được hiển thị hay một giá trị mặc định. Bỏ trống phần này nếu bạn muốn hiển thị rỗng mục thông tin này cho thành viên tự điền vào.',

	'UPDATE_PREVIEW'	=> 'Xem trước cập nhật',
	'USER_FIELD_NAME'	=> 'Tên mục thông tin cá nhân đã hiển thị cho thành viên',

	'VISIBILITY_OPTION'				=> 'Tuỳ chọn hiển thị',
));

?>