<?php
/** 
*
* lang_main [Vietnamese]
*
* @package language
* @version $Id: lang_main.php,v 1.17 2007/07/07 00:21:00 nedka Exp $
* @copyright (c) 2006, 2007 phpBBVietNam Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*
* Vietnamese Language Pack for phpBB2
* 
* phpBB iVN (phpBB in Vietnamese) Project
* Translated by phpBBVietNam Group [ The Vietnamize Team ]
* Translators in this file: nedka (Nguyen Dang Khoa)
*
*/

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
// 2006-03-25  Nguyen Dang Khoa        - First translated into Vietnamese ...
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION'] = 'Vietnamese translation by <a href="http://www.vinabb.com/">nedka</a>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Chuyên mục';
$lang['Category'] = 'Chuyên đề';
$lang['Topic'] = 'Chủ đề';
$lang['Topics'] = 'Chủ đề';
$lang['Replies'] = 'Trả lời';
$lang['Views'] = 'Số lần xem';
$lang['Post'] = 'Bài viết';
$lang['Posts'] = 'Bài viết';
$lang['Posted'] = 'Ngày gửi';
$lang['Username'] = 'Tên thành viên';
$lang['Password'] = 'Mật khẩu';
$lang['Email'] = 'Địa chỉ Email';
$lang['Poster'] = 'Người gửi';
$lang['Author'] = 'Tác giả';
$lang['Time'] = 'Ngày gửi';
$lang['Hours'] = 'Giờ';
$lang['Message'] = 'Nội dung';

$lang['1_Day'] = '1 Ngày';
$lang['7_Days'] = '7 Ngày';
$lang['2_Weeks'] = '2 Tuần';
$lang['1_Month'] = '1 Tháng';
$lang['3_Months'] = '3 Tháng';
$lang['6_Months'] = '6 Tháng';
$lang['1_Year'] = '1 Năm';

$lang['Go'] = 'Chuyển';
$lang['Jump_to'] = 'Chuyển đến chuyên mục';
$lang['Submit'] = 'Chấp nhận';
$lang['Reset'] = 'Làm lại';
$lang['Cancel'] = 'Hủy bỏ';
$lang['Preview'] = 'Xem trước';
$lang['Confirm'] = 'Xác nhận';
$lang['Spellcheck'] = 'Kiểm tra chính tả';
$lang['Yes'] = 'Đồng ý';
$lang['No'] = 'Không đồng ý';
$lang['Enabled'] = 'Có thể';
$lang['Disabled'] = 'Không thể';
$lang['Error'] = 'Xuất hiện lỗi!';

$lang['Next'] = 'Trang kế tiếp';
$lang['Previous'] = 'Trang trước';
$lang['Goto_page'] = 'Chuyển đến trang';
$lang['Joined'] = 'Ngày tham gia';
$lang['IP_Address'] = 'Địa chỉ IP';

$lang['Select_forum'] = 'Chọn chuyên mục ...';
$lang['View_latest_post'] = 'Xem bài viết vừa cập nhật';
$lang['View_newest_post'] = 'Xem bài viết mới nhất';
$lang['Page_of'] = 'Bạn đang xem trang <b>%d</b> trong tổng số <b>%d</b> trang'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'Tài khoản ICQ';
$lang['AIM'] = 'Tài khoản AIM';
$lang['MSNM'] = 'Tài khoản MSN';
$lang['YIM'] = 'Tài khoản Yahoo';

$lang['Forum_Index'] = '%s @ Trang chủ';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Tạo chủ đề mới';
$lang['Reply_to_topic'] = 'Trả lời chủ đề';
$lang['Reply_with_quote'] = 'Trích dẫn chủ đề';

$lang['Click_return_topic'] = 'Bấm %svào đây%s để quay về chủ đề đang xem.'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Bấm %svào đây%s để thử lại lần nữa.';
$lang['Click_return_forum'] = 'Bấm %svào đây%s để quay về diễn đàn.';
$lang['Click_view_message'] = 'Bấm %svào đây%s để xem bài viết của bạn.';
$lang['Click_return_modcp'] = 'Bấm %svào đây%s to để quay về bảng điều khiển của người điều hành.';
$lang['Click_return_group'] = 'Bấm %svào đây%s để xem thông tin về nhóm.';

$lang['Admin_panel'] = 'Chuyển đến bảng điều khiển của quản trị viên';

$lang['Board_disable'] = 'Xin lỗi, website tạm thời ngưng hoạt động. Mời bạn hãy vui lòng ghé thăm trở lại vào một ngày gần đây!';


//
// Global Header strings
//
$lang['Registered_users'] = 'Các thành viên đang online:';
$lang['Browsing_forum'] = 'Các thành viên đang xem chuyên mục này:';
$lang['Online_users_zero_total'] = 'Không có người nào đang truy cập vào website: ';
$lang['Online_users_total'] = 'Hiện có <b>%d</b> người đang truy cập vào website: ';
$lang['Online_user_total'] = 'Hiện có <b>%d</b> người đang truy cập vào website: ';
$lang['Reg_users_zero_total'] = 'không có thành viên, ';
$lang['Reg_users_total'] = '<b>%d</b> thành viên, ';
$lang['Reg_user_total'] = 'chỉ có <b>%d</b> thành viên, ';
$lang['Hidden_users_zero_total'] = 'không có thành viên ẩn và ';
$lang['Hidden_user_total'] = 'chỉ có <b>%d</b> thành viên ẩn và ';
$lang['Hidden_users_total'] = '<b>%d</b> thành viên ẩn và ';
$lang['Guest_users_zero_total'] = 'không có vị khách nào cả.';
$lang['Guest_users_total'] = '%d vị khách.';
$lang['Guest_user_total'] = 'chỉ có %d vị khách.';
$lang['Record_online_users'] = 'Số lượng người truy cập đông nhất là <b>%s</b> người vào ngày %s.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sNgười quản trị%s';
$lang['Mod_online_color'] = '%sNgười điều hành%s';

$lang['You_last_visit'] = 'Lần ghé thăm trước của bạn là vào ngày %s'; // %s replaced by date/time
$lang['Current_time'] = 'Hôm nay, %s'; // %s replaced by time

$lang['Search_new'] = 'Xem tất cả các bài viết mới kể từ lần ghé thăm trước của bạn';
$lang['Search_your_posts'] = 'Xem những bài viết của bạn';
$lang['Search_unanswered'] = 'Xem những bài viết chưa được trả lời';

$lang['Register'] = 'Đăng ký';
$lang['Profile'] = 'Thiết lập cá nhân';
$lang['Edit_profile'] = 'Sửa thông tin cá nhân của bạn';
$lang['Search'] = 'Tìm kiếm';
$lang['Memberlist'] = 'Danh sách thành viên';
$lang['FAQ'] = 'Trợ giúp';
$lang['BBCode_guide'] = 'Tài liệu hướng dẫn sử dụng BBCode';
$lang['Usergroups'] = 'Nhóm';
$lang['Last_Post'] = 'Bài viết mới nhất';
$lang['Moderator'] = 'Người điều hành';
$lang['Moderators'] = 'Người điều hành';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Diễn đàn không có bài viết nào.'; // Number of posts
$lang['Posted_articles_total'] = 'Tổng số bài viết:<b>%d</b> bài viết'; // Number of posts
$lang['Posted_article_total'] = 'Tổng số bài viết: chỉ có <b>%d</b> bài viết'; // Number of posts
$lang['Registered_users_zero_total'] = 'Website không có thành viên nào đăng ký.'; // # registered users
$lang['Registered_users_total'] = 'Website có tất cả <b>%d</b> thành viên.'; // # registered users
$lang['Registered_user_total'] = 'Website chỉ có <b>%d</b> thành viên.'; // # registered users
$lang['Newest_user'] = 'Chào mừng thành viên mới nhất vừa gia nhập: <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Không có bài viết nào kể từ lần ghé thăm trước của bạn.';
$lang['No_new_posts'] = 'Chủ đề';
$lang['New_posts'] = 'Chủ đề mới';
$lang['New_post'] = 'Chủ đề mới';
$lang['No_new_posts_hot'] = 'Bài viết [ Nhiều người xem ]';
$lang['New_posts_hot'] = 'Bài viết mới [ Nhiều người xem ]';
$lang['No_new_posts_locked'] = 'Bài viết [ Đã bị khóa ]';
$lang['New_posts_locked'] = 'Bài viết [ Đã bị khóa ]';
$lang['Forum_is_locked'] = 'Chuyên mục đã bị khóa';


//
// Login
//
$lang['Enter_password'] = 'Hãy nhập tên thành viên và mật khẩu để đăng nhập.';
$lang['Login'] = 'Đăng nhập';
$lang['Logout'] = 'Thoát';

$lang['Forgotten_password'] = 'Quên mật khẩu';

$lang['Log_me_in'] = 'Đăng nhập tự động mỗi lần ghé thăm';

$lang['Error_login'] = 'Bạn đã nhập tên thành viên không chính xác hoặc chưa được kích hoạt, hoặc là sai mật khẩu.';


//
// Index page
//
$lang['Index'] = 'Trang chủ';
$lang['No_Posts'] = 'Không có bài viết';
$lang['No_forums'] = 'Diễn đàn không có chuyên mục nào.';

$lang['Private_Message'] = 'Tin nhắn';
$lang['Private_Messages'] = 'Tin nhắn';
$lang['Who_is_Online'] = 'Ai đang online?';

$lang['Mark_all_forums'] = 'Đánh dấu tất cả các chuyên mục như là đã được xem';
$lang['Forums_marked_read'] = 'Tất cả chuyên mục đã được đánh dấu xem rồi.';


//
// Viewforum
//
$lang['View_forum'] = 'Xem chuyên mục';

$lang['Forum_not_exist'] = 'Chuyên mục bạn vừa chọn không tồn tại.';
$lang['Reached_on_error'] = 'Có lỗi xuất hiện trong trang bạn đang xem!';

$lang['Display_topics'] = 'Hiển thị các chủ đề trong khoảng';
$lang['All_Topics'] = 'Tất cả chủ đề';

$lang['Topic_Announcement'] = '<b>Thông báo:</b>';
$lang['Topic_Sticky'] = '<b>Chú ý:</b>';
$lang['Topic_Moved'] = '<b>Di chuyển:</b>';
$lang['Topic_Poll'] = '<b>[ Bình chọn ]</b>';

$lang['Mark_all_topics'] = 'Đánh dấu tất cả các chủ đề như là đã được xem';
$lang['Topics_marked_read'] = 'Tất cả chủ đề trong chuyên mục này đã được đánh dấu xem rồi.';

$lang['Rules_post_can'] = 'Bạn <b>có thể</b> tạo chủ đề mới trong chuyên mục này.';
$lang['Rules_post_cannot'] = 'Bạn <b>Không thể</b> tạo chủ đề mới trong chuyên mục này.';
$lang['Rules_reply_can'] = 'Bạn <b>có thể</b> trả lời bài viết trong chuyên mục này.';
$lang['Rules_reply_cannot'] = 'Bạn <b>không thể</b> trả lời bài viết trong chuyên mục này.';
$lang['Rules_edit_can'] = 'Bạn <b>có thể</b> sửa bài viết của mình trong chuyên mục này.';
$lang['Rules_edit_cannot'] = 'Bạn <b>không thể</b> sửa bài viết của mình trong chuyên mục này.';
$lang['Rules_delete_can'] = 'Bạn <b>có thể</b> xóa bài viết của mình trong chuyên mục này.';
$lang['Rules_delete_cannot'] = 'Bạn <b>không thể</b> xóa bài viết của mình trong chuyên mục này.';
$lang['Rules_vote_can'] = 'Bạn <b>có thể</b> tham gia bình chọn trong chuyên mục này.';
$lang['Rules_vote_cannot'] = 'Bạn <b>không thể</b> tham gia bình chọn trong chuyên mục này.';
$lang['Rules_moderate'] = 'Bạn <b>có thể</b> %sđiều hành%s chuyên mục này.'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'Không có bài viết nào trong chuyên mục này.<br />Hãy bấm vào nút <b>Chủ đề mới</b> để tạo một chủ đề mới cho chuyên mục này.';


//
// Viewtopic
//
$lang['View_topic'] = 'Xem chủ đề';

$lang['Guest'] = 'Khách';
$lang['Post_subject'] = 'Tiêu đề';
$lang['View_next_topic'] = 'Xem chủ đề kế tiếp';
$lang['View_previous_topic'] = 'Xem chủ đề trước';
$lang['Submit_vote'] = 'Tham gia bình chọn';
$lang['View_results'] = 'Xem kết quả bình chọn';

$lang['No_newer_topics'] = 'Không có chủ đề nào mới hơn trong chuyên mục này.';
$lang['No_older_topics'] = 'Không có chủ đề nào cũ hơn trong chuyên mục này.';
$lang['Topic_post_not_exist'] = 'Chủ đề hoặc bài viết bạn vừa nhập không tồn tại.';
$lang['No_posts_topic'] = 'Không có bài viết nào tồn tại trong chủ đề này.';

$lang['Display_posts'] = 'Hiển thị những bài viết cách đây';
$lang['All_Posts'] = 'Tất cả bài viết';
$lang['Newest_First'] = 'Mới nhất xếp trước';
$lang['Oldest_First'] = 'Cũ nhất xếp trước';

$lang['Back_to_top'] = 'Chuyển lên đầu trang';

$lang['Read_profile'] = 'Xem thông tin cá nhân của thành viên này'; 
$lang['Visit_website'] = 'Ghé thăm website của thành viên này';
$lang['ICQ_status'] = 'Trạng thái ICQ';
$lang['Edit_delete_post'] = 'Sửa/Xóa bài viết này';
$lang['View_IP'] = 'Xem địa chỉ IP của người gửi';
$lang['Delete_post'] = 'Xóa bài viết này';

$lang['wrote'] = 'đã viết'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Trích dẫn'; // comes before bbcode quote output.
$lang['Code'] = 'Mã'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Được sửa lần cuối bởi %s vào ngày %s với %d lần trong tổng số.'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Được sửa lần cuối bởi %s vào ngày %s với %d lần trong tổng số.'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Khóa chủ đề này';
$lang['Unlock_topic'] = 'Mở khóa chủ đề này';
$lang['Move_topic'] = 'Di chuyển chủ đề này';
$lang['Delete_topic'] = 'Xóa chủ đề này';
$lang['Split_topic'] = 'Chia nhỏ chủ đề này';

$lang['Stop_watching_topic'] = 'Ngừng theo dõi chủ đề này';
$lang['Start_watching_topic'] = 'Theo dõi chủ đề này';
$lang['No_longer_watching'] = 'Bạn đã chọn không theo dõi chủ đề này nữa.';
$lang['You_are_watching'] = 'Bạn đã chọn theo dõi chủ đề này.';

$lang['Total_votes'] = 'Tổng số người tham gia bình chọn';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Trình bày bài viết';
$lang['Topic_review'] = 'Xem lại chủ đề';

$lang['No_post_mode'] = 'Không có bài viết nào được xác định.'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Tạo chủ đề mới';
$lang['Post_a_reply'] = 'Trả lời';
$lang['Post_topic_as'] = 'Tạo chủ đề mới như là';
$lang['Edit_Post'] = 'Sửa bài viết';
$lang['Options'] = 'Đối tượng';

$lang['Post_Announcement'] = 'Thông báo';
$lang['Post_Sticky'] = 'Chú ý';
$lang['Post_Normal'] = 'Bài viết bình thường';

$lang['Confirm_delete'] = 'Bạn có chắc chắn muốn xóa bài viết này?';
$lang['Confirm_delete_poll'] = 'Bạn có chắc chắn muốn xóa bình chọn này?';

$lang['Flood_Error'] = 'Bạn không thể gửi hai bài viết liên tục cùng lúc. Hãy gửi tiếp sau vài phút nữa!';
$lang['Empty_subject'] = 'Bạn phải nhập tiêu đề cho chủ đề mới!';
$lang['Empty_message'] = 'Bạn chưa nhập nội dung bài viết.';
$lang['Forum_locked'] = 'Chuyên mục này đã bị khóa: Bạn không thể tạo mới, trả lời hay sửa các chủ đề.';
$lang['Topic_locked'] = 'Chủ đề này đã bị khóa: Bạn không thể sửa hay trả lời các bài viết.';
$lang['No_post_id'] = 'Bạn phải chọn một bài viết để sửa!';
$lang['No_topic_id'] = 'Bạn phải chọn một chủ đề để trả lời!';
$lang['No_valid_mode'] = 'Bạn chỉ có thể tạo, trả lời, sửa hay trích dẫn các bài viết. Hãy quay về và thử lại lần nữa!';
$lang['No_such_post'] = 'Không có bài viết nào. Hãy quay về và thử lại!';
$lang['Edit_own_posts'] = 'Xin lỗi, bạn chỉ có thể sửa những bài viết của mình.';
$lang['Delete_own_posts'] = 'Xin lỗi, bạn chỉ có thể xóa những bài viết của mình.';
$lang['Cannot_delete_replied'] = 'Xin lỗi, bạn không thể xóa những bài viết đã được trả lời.';
$lang['Cannot_delete_poll'] = 'Xin lỗi, bạn không thể xóa một bình chọn đã có người tham gia.';
$lang['Empty_poll_title'] = 'Bạn phải nhập tiêu đề cho bình chọn của mình!';
$lang['To_few_poll_options'] = 'Bạn phải nhập ít nhất hai đối tượng bình chọn!';
$lang['To_many_poll_options'] = 'Bạn đã vượt quá số đối tượng bình chọn tối đa cho phép.';
$lang['Post_has_no_poll'] = 'Bài viết này không có bình chọn.';
$lang['Already_voted'] = 'Bạn đã tham gia vào bình chọn này rồi!';
$lang['No_vote_option'] = 'Bạn phải chọn một đối tượng bình chọn khi tham gia bình chọn!';

$lang['Add_poll'] = 'Tạo bình chọn';
$lang['Add_poll_explain'] = 'Nếu bạn không muốn thêm bình chọn vào bài viết của mình, hãy bỏ qua phần này.';
$lang['Poll_question'] = 'Câu hỏi bình chọn';
$lang['Poll_option'] = 'Đối tượng bình chọn';
$lang['Add_option'] = 'Thêm đối tượng bình chọn';
$lang['Update'] = 'Cập nhật';
$lang['Delete'] = 'Xóa';
$lang['Poll_for'] = 'Thời gian bình chọn';
$lang['Days'] = 'Ngày'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '(Nhập vào <b>0</b> hay để trống cho bình chọn không giới hạn thời gian)';
$lang['Delete_poll'] = 'Xóa bình chọn này?';

$lang['Disable_HTML_post'] = 'Tắt <b>HTML</b> trong bài viết này.';
$lang['Disable_BBCode_post'] = 'Tắt <b>BBCode</b> trong bài viết này.';
$lang['Disable_Smilies_post'] = 'Tắt <b>Biểu tượng vui</b> trong bài viết này.';

$lang['HTML_is_ON'] = '<b>HTML</b> đang <u>bật</u>';
$lang['HTML_is_OFF'] = '<b>HTML</b> đang <u>tắt</u>';
$lang['BBCode_is_ON'] = '<b>%sBBCode%s</b> đang <u>bật</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '<b>%sBBCode%s</b> đang <u>tắt</u>';
$lang['Smilies_are_ON'] = '<b>Biểu tượng vui</b> đang <u>bật</u>';
$lang['Smilies_are_OFF'] = '<b>Biểu tượng vui</b> đang <u>tắt</u>';

$lang['Attach_signature'] = 'Đính kèm chữ ký cá nhân (Có thể thay đổi trong phần <b>Thiết lập cá nhân</b>)';
$lang['Notify'] = 'Gửi Email thông báo cho tôi khi có bài trả lời';

$lang['Stored'] = 'Bài viết của bạn đã được tạo thành công.';
$lang['Deleted'] = 'Bài viết của bạn đã được xóa thành công.';
$lang['Poll_delete'] = 'Bình chọn của bạn đã được xóa thành công.';
$lang['Vote_cast'] = 'Bạn đã tham gia bình chọn xong.';

$lang['Topic_reply_notification'] = 'Thông báo chủ đề được trả lời';

$lang['bbcode_b_help'] = 'Văn bản in đậm: [b]văn bản muốn in đậm[/b]  (Phím tắt: Alt + B)';
$lang['bbcode_i_help'] = 'Văn bản in nghiêng: [i]văn bản muốn in nghiêng[/i]  (Phím tắt: Alt + I)';
$lang['bbcode_u_help'] = 'Văn bản gạch chân: [u]văn bản muốn gạch chân[/u]  (Phím tắt: Alt + U)';
$lang['bbcode_q_help'] = 'Trích dẫn văn bản: [quote]văn bản muốn trích dẫn[/quote]  (Phím tắt: Alt + Q)';
$lang['bbcode_c_help'] = 'Trích dẫn mã: [code]mã muốn trích dẫn[/code]  (Phím tắt: Alt + C)';
$lang['bbcode_l_help'] = 'Tạo danh sách: [list]văn bản muốn tạo danh sách[/list] (Phím tắt: Alt + L)';
$lang['bbcode_o_help'] = 'Tạo danh sách theo thứ tự: [list=]văn bản muốn tạo danh sách theo thứ tự[/list]  (Phím tắt: Alt + O)';
$lang['bbcode_p_help'] = 'Chèn hình ảnh: [img]http://địa chỉ URL của hình[/img]  (Phím tắt: Alt + P)';
$lang['bbcode_w_help'] = 'Chèn địa chỉ URL: [url]http://địa chỉ URL[/url] hay [url=http://địa chỉ URL]tên liên kết[/url]  (Phím tắt: Alt + W)';
$lang['bbcode_a_help'] = 'Đóng tất cả các đuôi lệnh BBCode còn mở.';
$lang['bbcode_s_help'] = 'Màu chữ: [color=red]văn bản muốn tô màu[/color]  hoặc bạn cũng có thể sử dụng định dạng màu #??????';
$lang['bbcode_f_help'] = 'Kích thước chữ: [size=x-small]văn bản muốn thay đổi kích thước[/size]';

$lang['Emoticons'] = 'Biểu tượng vui';
$lang['More_emoticons'] = 'Xem tất cả biểu tượng vui';

$lang['Font_color'] = 'Màu chữ';
$lang['color_default'] = 'Mặc định';
$lang['color_dark_red'] = 'Đỏ đậm';
$lang['color_red'] = 'Đỏ';
$lang['color_orange'] = 'Cam';
$lang['color_brown'] = 'Nâu';
$lang['color_yellow'] = 'Vàng';
$lang['color_green'] = 'Xanh lá cây';
$lang['color_olive'] = 'Ôliu';
$lang['color_cyan'] = 'Xanh lá mạ';
$lang['color_blue'] = 'Xanh dương';
$lang['color_dark_blue'] = 'Xanh đậm';
$lang['color_indigo'] = 'Chàm';
$lang['color_violet'] = 'Tím';
$lang['color_white'] = 'Trắng';
$lang['color_black'] = 'Đen';

$lang['Font_size'] = 'Kích thước';
$lang['font_tiny'] = 'Nhỏ nhất';
$lang['font_small'] = 'Nhỏ';
$lang['font_normal'] = 'Vừa';
$lang['font_large'] = 'Lớn';
$lang['font_huge'] = 'Lớn nhất';

$lang['Close_Tags'] = 'Đóng tất cả các đuôi lệnh BBCode còn mở';
$lang['Styles_tip'] = 'Nội dung soạn thảo:';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Gửi tin nhắn cá nhân';

$lang['Login_check_pm'] = 'Đăng nhập để kiểm tra tin nhắn của bạn';
$lang['New_pms'] = 'Bạn có <b>%d</b> tin nhắn mới'; // You have 2 new messages
$lang['New_pm'] = 'Bạn chỉ có <b>%d</b> tin nhắn mới'; // You have 1 new message
$lang['No_new_pm'] = 'Bạn không có tin nhắn mới nào';
$lang['Unread_pms'] = 'Bạn có <b>%d</b> tin nhắn chưa xem';
$lang['Unread_pm'] = 'Bạn chỉ có <b>%d</b> tin nhắn chưa xem';
$lang['No_unread_pm'] = 'Bạn không có tin nhắn nào chưa xem.';
$lang['You_new_pm'] = 'Bạn chỉ có một tin nhắn mới trong <b>Hộp thư nhận</b> của mình.';
$lang['You_new_pms'] = 'Bạn có nhiều tin nhắn mới trong <b>Hộp thư nhận</b> của mình.';
$lang['You_no_new_pm'] = 'Bạn không có tin nhắn mới nào trong <b>Hộp thư nhận</b> của mình.';

$lang['Unread_message'] = 'Tin nhắn chưa xem';
$lang['Read_message'] = 'Tin nhắn đã xem';

$lang['Read_pm'] = 'Xem tin nhắn';
$lang['Post_new_pm'] = 'Gửi tin nhắn mới';
$lang['Post_reply_pm'] = 'Trả lời tin nhắn';
$lang['Post_quote_pm'] = 'Trích dẫn tin nhắn';
$lang['Edit_pm'] = 'Sửa tin nhắn';

$lang['Inbox'] = 'Hộp thư nhận';
$lang['Outbox'] = 'Hộp thư chuyển';
$lang['Savebox'] = 'Hộp thư lưu';
$lang['Sentbox'] = 'Hộp thư gửi';
$lang['Flag'] = 'Đánh dấu';
$lang['Subject'] = 'Tiêu đề';
$lang['From'] = 'Người gửi';
$lang['To'] = 'Người nhận';
$lang['Date'] = 'Ngày gửi';
$lang['Mark'] = 'Đánh dấu';
$lang['Sent'] = 'Đã gửi';
$lang['Saved'] = 'Đã lưu';
$lang['Delete_marked'] = 'Xóa đánh dấu';
$lang['Delete_all'] = 'Xóa tất cả';
$lang['Save_marked'] = 'Lưu đánh dấu'; 
$lang['Save_message'] = 'Lưu tin nhắn';
$lang['Delete_message'] = 'Xóa tin nhắn';

$lang['Display_messages'] = 'Hiển thị những tin nhắn trong khoảng'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Tất cả tin nhắn';

$lang['No_messages_folder'] = 'Bạn không có tin nhắn nào trong hộp thư này.';

$lang['PM_disabled'] = 'Công cụ gửi tin nhắn trong diễn đàn đã bị vô hiệu.';
$lang['Cannot_send_privmsg'] = 'Xin lỗi, người quản trị đã không cho phép bạn được gửi tin nhắn trong diễn đàn.';
$lang['No_to_user'] = 'Bạn phải chọn một thành viên để gửi tin nhắn!';
$lang['No_such_user'] = 'Xin lỗi, tên thành viên bạn vừa chọn không tồn tại.';

$lang['Disable_HTML_pm'] = 'Tắt <b>HTML</b> trong tin nhắn này.';
$lang['Disable_BBCode_pm'] = 'Tắt <b>BBCode</b> trong tin nhắn này.';
$lang['Disable_Smilies_pm'] = 'Tắt <b>Biểu tượng vui</b> trong tin nhắn này.';

$lang['Message_sent'] = 'Tin nhắn của bạn đã được gửi thành công.';

$lang['Click_return_inbox'] = 'Bấm %svào đây%s để quay về hộp thư nhận của bạn.';
$lang['Click_return_index'] = 'Bấm %svào đây%s để quay về trang chủ.';

$lang['Send_a_new_message'] = 'Gửi tin nhắn mới';
$lang['Send_a_reply'] = 'Trả lời tin nhắn';
$lang['Edit_message'] = 'Sửa tin nhắn';

$lang['Notification_subject'] = 'Bạn nhận được tin nhắn mới!';

$lang['Find_username'] = 'Tìm thành viên';
$lang['Find'] = 'Tìm';
$lang['No_match'] = 'Không tìm thấy kết quả.';

$lang['No_post_id'] = 'Không có tin nhắn nào được xác định.';
$lang['No_such_folder'] = 'Không có hộp thư nào tồn tại.';
$lang['No_folder'] = 'Không có hộp thư nào được chọn.';

$lang['Mark_all'] = 'Đánh dấu tất cả';
$lang['Unmark_all'] = 'Bỏ đánh dấu tất cả';

$lang['Confirm_delete_pm'] = 'Bạn có chắc chắn muốn xóa tin nhắn này?';
$lang['Confirm_delete_pms'] = 'Bạn có chắc chắn muốn xóa những tin nhắn này?';

$lang['Inbox_size'] = 'Dung lượng <b>Hộp thư nhận</b> của bạn: %d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Dung lượng <b>Hộp thư gửi</b> của bạn: %d%%'; 
$lang['Savebox_size'] = 'Dung lượng <b>Hộp thư lưu</b> của bạn: %d%%'; 

$lang['Click_view_privmsg'] = 'Bấm %svào đây%s để kiểm tra <b>Hộp thư nhận</b> của bạn.';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Thông tin cá nhân của %s'; // %s is username 
$lang['About_user'] = 'Thông tin về thành viên %s'; // %s is username

$lang['Preferences'] = 'Thiết lập cá nhân';
$lang['Items_required'] = 'Những mục có đánh dấu * bắt buộc phải có thông tin.';
$lang['Registration_info'] = 'Thông tin đăng ký';
$lang['Profile_info'] = 'Thông tin cá nhân';
$lang['Profile_info_warn'] = '<b><u>Lưu ý:</u></b> Những thông tin này mọi người đều có thể xem được.';
$lang['Avatar_panel'] = 'Bảng điều khiển hình đại diện';
$lang['Avatar_gallery'] = 'Xem thư viện hình đại diện';

$lang['Website'] = 'Website';
$lang['Location'] = 'Đến từ';
$lang['Contact'] = 'Thông tin liên hệ';
$lang['Email_address'] = 'Địa chỉ Email';
$lang['Send_private_message'] = 'Gửi tin nhắn';
$lang['Hidden_email'] = '[ Đang ẩn ]';
$lang['Interests'] = 'Sở thích';
$lang['Occupation'] = 'Nghề nghiệp'; 
$lang['Poster_rank'] = 'Xếp hạng';

$lang['Total_posts'] = 'Tổng số bài viết';
$lang['User_post_pct_stats'] = '%.2f%% trong tổng số'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f bài viết / ngày'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Tìm tất cả bài viết của %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Xin lỗi, thành viên này không tồn tại.';
$lang['Wrong_Profile'] = 'Xin lỗi, bạn không thể sửa thông tin cá nhân của người khác.';

$lang['Only_one_avatar'] = 'Bạn chỉ được chọn một loại hình đại diện.';
$lang['File_no_data'] = 'Tập tin tại đại chỉ URL bạn vừa nhập bị rỗng.';
$lang['No_connection_URL'] = 'Không thể kết nối tới địa chỉ URL bạn vừa nhập.';
$lang['Incomplete_URL'] = 'Địa chỉ URL bạn vừa nhập không chính xác.';
$lang['Wrong_remote_avatar_format'] = 'Bạn đã nhập sai địa chỉ URL của hình đại diện.';
$lang['No_send_account_inactive'] = 'Xin lỗi, mật khẩu của bạn không tìm lại được do tài khoản của bạn hiện chưa được kích hoạt. Hãy liên hệ với người quản trị để biết thêm thông tin!';

$lang['Always_smile'] = 'Luôn bật <b>Biểu tượng vui</b>';
$lang['Always_html'] = 'Luôn bật <b>HTML</b>';
$lang['Always_bbcode'] = 'Luôn bật <b>BBCode</b>';
$lang['Always_add_sig'] = 'Luôn đính kèm chữ ký cá nhân của tôi';
$lang['Always_notify'] = 'Luôn thông báo cho tôi khi có bài viết trả lời';
$lang['Always_notify_explain'] = 'Gửi Email thông báo cho bạn khi có người gửi bài viết trả lời. Bạn có thể thay đổi lại thiết lập này cuối mỗi bài viết.';

$lang['Board_style'] = 'Giao diện';
$lang['Board_lang'] = 'Ngôn ngữ';
$lang['No_themes'] = 'Không có giao diện nào trong hệ thống website.';
$lang['Timezone'] = 'Múi giờ';
$lang['Date_format'] = 'Định dạng ngày tháng';
$lang['Date_format_explain'] = 'Sử dụng hàm cú pháp <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> như trong PHP.';
$lang['Signature'] = 'Chữ ký cá nhân';
$lang['Signature_explain'] = 'Chữ ký được tự động chèn vào cuối mỗi bài viết của bạn hay tin nhắn bạn gửi với tối đa là <b>%d</b> ký tự.';
$lang['Public_view_email'] = 'Luôn hiện địa chỉ Email của tôi';

$lang['Current_password'] = 'Mật khẩu hiện tại';
$lang['New_password'] = 'Mật khẩu mới';
$lang['Confirm_password'] = 'Xác nhận mật khẩu';
$lang['Confirm_password_explain'] = 'Bạn phải xác nhận mật khẩu hiện tại của mình nếu bạn muốn thay đổi nó hoặc thay đổi địa chỉ Email của bạn.';
$lang['password_if_changed'] = 'Bạn chỉ cung cấp mật khẩu nếu bạn muốn thay đổi nó.';
$lang['password_confirm_if_changed'] = 'Bạn chỉ xác nhận mật khẩu nếu bạn muốn thay đổi nó ở trên.';

$lang['Avatar'] = 'Hình đại diện';
$lang['Avatar_explain'] = 'Hình ảnh hiển thị kèm theo tên thành viên của bạn trong mỗi bài viết hay trong phần thông tin cá nhân của bạn. Bạn chỉ được phép chọn một hình đại diện cho mình với kích thước chiều rộng là <b>%d</b> Pixel, chiều cao là <b>%d</b> Pixel và dung lượng tập tin không được phép vượt quá <b>%d</b> KB.';
$lang['Upload_Avatar_file'] = 'Tải hình đại diện từ máy tính của bạn';
$lang['Upload_Avatar_URL'] = 'Tải hình đại diện từ website khác';
$lang['Upload_Avatar_URL_explain'] = 'Bạn hãy nhập vào địa chỉ URL của hình đại diện và nó sẽ được copy vào website này.';
$lang['Pick_local_Avatar'] = 'Chọn hình đại diện từ thư viện';
$lang['Link_remote_Avatar'] = 'Đường dẫn đến hình đại điện';
$lang['Link_remote_Avatar_explain'] = 'Bạn hãy nhập vào địa chỉ URL của hình đại diện và nó sẽ được hiển thị trong diễn đàn này.';
$lang['Avatar_URL'] = 'Địa chỉ URL của hình đại diện';
$lang['Select_from_gallery'] = 'Chọn hình đại diện từ thư viện của website';
$lang['View_avatar_gallery'] = 'Xem thư viện hình đại diện';

$lang['Select_avatar'] = 'Chọn hình đại diện';
$lang['Return_profile'] = 'Bỏ chọn hình đại diện';
$lang['Select_category'] = 'Chọn gói hình đại diện';

$lang['Delete_Image'] = 'Xóa hình đại diện hiện tại';
$lang['Current_Image'] = 'Hình đại diện hiện tại của bạn';

$lang['Notify_on_privmsg'] = 'Luôn thông báo cho tôi khi có tin nhắn mới';
$lang['Popup_on_privmsg'] = 'Mở cửa sổ popup khi có tin nhắn mới'; 
$lang['Popup_on_privmsg_explain'] = 'Mở cửa sổ popup thông báo cho bạn khi có tin nhắn mới gửi đến. Một số trình duyệt và phần mềm chống gián điệp có thể sẽ vô hiệu hóa chức năng này.';
$lang['Hide_user'] = 'Ẩn trạng thái online của tôi';

$lang['Profile_updated'] = 'Thiết lập cá nhân của bạn đã được cập nhật.';
$lang['Profile_updated_inactive'] = 'Thiết lập cá nhân của bạn đã được cập nhật. Tuy nhiên, bạn đã thay đổi những thông tin quan trọng, do đó tài khoản của bạn sẽ trở về trạng thái chưa kích hoạt. Hãy kiểm tra Email của bạn để kích hoạt lại tài khoản này hoặc nếu việc kích hoạt chỉ được thực hiện bởi người quản trị, hãy chờ đợi cho đến khi quản trị viên kích hoạt nó.';

$lang['Password_mismatch'] = 'Mật khẩu bạn vừa nhập không phù hợp.';
$lang['Current_password_mismatch'] = 'Mật khẩu hiện tại bạn vừa nhập không tìm thấy trong cơ sở dữ liệu của website.';
$lang['Password_long'] = 'Mật khẩu của bạn không được phép vượt quá <b>32</b> ký tự.';
$lang['Username_taken'] = 'Xin lỗi, tên thành viên này đã được đăng ký.';
$lang['Username_invalid'] = 'Xin lỗi, tên thành viên của bạn có chứa những ký tự không được phép sử dụng như \'.';
$lang['Username_disallowed'] = 'Xin lỗi, tên thành viên này không được phép sử dụng trong website.';
$lang['Email_taken'] = 'Xin lỗi, địa chỉ Email này đã có thành viên khác sử dụng.';
$lang['Email_banned'] = 'Xin lỗi, địa chỉ Email này đã bị cấm.';
$lang['Email_invalid'] = 'Xin lỗi, địa chỉ Email bạn vừa nhập không chính xác.';
$lang['Signature_too_long'] = 'Chữ ký cá nhân của bạn quá dài!';
$lang['Fields_empty'] = 'Bạn phải cung cấp những thông tin bắt buộc!';
$lang['Avatar_filetype'] = 'Loại tập tin của hình đại diện chỉ được phép sử dụng: <b>*.jpg</b>, <b>*.gif</b> và <b>*.png</b>.';
$lang['Avatar_filesize'] = 'Dung lượng hình đại diện không được phép vượt quá <b>%d</b> KB.'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Kích thước hình đại diện không được phép vượt quá kích thước <b>%d</b> Pixel chiều rộng và <b>%d</b> Pixel chiều cao.'; 

$lang['Welcome_subject'] = 'Chào mừng bạn đã đến với %s!'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Đăng ký thành viên mới';
$lang['Account_activated_subject'] = 'Tài khoản của bạn đã được kích hoạt';

$lang['Account_added'] = 'Cám ơn bạn đã đăng ký thành viên! Tài khoản của bạn đã được tạo. Ngay bây giờ bạn có thể bạn có thể đăng nhập vào website với tên thành viên và mật khẩu đã đăng ký.';
$lang['Account_inactive'] = 'Tài khoản của bạn đã được tạo. Tuy nhiên, diễn đàn đòi hỏi bạn phải tự kích hoạt tài khoản của mình. Một khóa kích hoạt đã được gửi tới địa chỉ Email mà bạn đã cung cấp. Hãy kiểm tra địa chỉ Email của bạn để biết thêm thông tin.';
$lang['Account_inactive_admin'] = 'Tài khoản của bạn đã được tạo. Tuy nhiên, website đòi hỏi tài khoản của bạn phải được kích hoạt bởi người quản trị. Một Email đã được gửi đến yêu cầu và bạn sẽ được thông báo khi tài khoản của mình được kích hoạt.';
$lang['Account_active'] = 'Tài khoản của bạn đã được kích hoạt. Cám ơn bạn đã đăng ký thành viên!';
$lang['Account_active_admin'] = 'Tài khoản đã được kích hoạt.';
$lang['Reactivate'] = 'Kích hoạt lại tài khoản của bạn';
$lang['Already_activated'] = 'Bạn vừa mới kích hoạt xong tài khoản của mình.';
$lang['COPPA'] = 'Tài khoản của bạn đã được tạo. Tuy nhiên, vì bạn dưới 13 tuổi nên cần phải được sự cho phép của cha mẹ hoặc người lớn bảo hộ. Hãy kiểm tra Email để biết thêm thông tin.';

$lang['Registration'] = 'Điều khoản đăng ký thành viên của website';
$lang['Reg_agreement'] = 'Trong khi các quản trị viên và điều hành viên của website này luôn cố gắng gỡ bỏ hoặc xử lí bất kì bài viết nào có nội dung gây phản cảm cho hầu hết mọi người với thời gian nhanh nhất có thể, điều quan trọng là họ phải xem kĩ nội dung của từng bài viết một. Vì thế, bạn phải chấp nhận rằng tất cả bài viết được gửi trong website này có thể được xem nhanh chóng bởi tất cả mọi người và phải đánh giá dựa theo tác giả của những bài viết đó chứ không phải các quản trị viên hay điều hành viên, ngoại trừ nếu đó là những bài viết riêng của chính họ và do đó họ sẽ không chịu bất kì trách nhiệm pháp lí nào về các bài viết của những thành viên khác.<br /><br />Bạn phải cam kết không gửi bất cứ bài viết nào có nội dung lừa đảo, tục tĩu, khiêu dâm, vu khống, khiêu khích, đe doạ, xúc phạm đến người khác, các vấn đề về tình dục hoặc bất cứ tài liệu nào vi phạm pháp luật ... Nếu vẫn cố tình vi phạm, ngay lập tức bạn sẽ bị cấm tham gia vào website lâu dài giống như một số nhà cung cấp dịch vụ khác của bạn. Địa chỉ IP của tất cả các bài viết đều được ghi nhận lại để bảo vệ các điều khoản cam kết này trong trường hợp bạn không tuân thủ. Bạn đồng ý với các quản trị viên và điều hành viên của website này rằng họ có quyền gỡ bỏ, sửa, di chuyển hoặc khoá bất kì bài viết nào trong website vào bất cứ lúc nào tuỳ theo công việc của họ. Đăng ký làm thành viên của chúng tôi, bạn cũng phải cam kết bất kì thông tin cá nhân nào mà bạn cung cấp đều được lưu trữ trong cơ sở dữ liệu của hệ thống. Trong khi những thông tin này sẽ không được cung cấp cho bất kì người thứ ba nào khác mà không được sự đồng ý của bạn, các quản trị viên và điều hành viên sẽ không chịu trách nhiệm về việc những thông tin cá nhân này của bạn bị lộ ra bên ngoài từ những kẻ phá hoại có ý đồ xấu vào dữ liệu của hệ thống.<br /><br />Hệ thống có sử dụng cookie để lưu trữ thông tin trên máy tính của bạn. Những cookie này không chứa bất kì thông tin cá nhân nào của bạn, chúng chỉ được tận dụng để ghi lại quá trình ghé thăm của bạn vào website nhằm phục vụ bạn tốt hơn. Địa chỉ Email mà bạn cung cấp sẽ chỉ được dùng để xác nhận quá trình đăng ký thành viên của bạn và gửi cho bạn mật khẩu mới theo yêu cầu của bạn khi cần. Vì thế, bạn đừng quên địa chỉ Email mà mình đã sử dụng khi đăng ký thành viên mới.<br /><br />Nếu bạn đồng ý với các điều khoản trên đây, hãy bấm vào hai liên kết đồng ý bên dưới tuỳ theo độ tuổi của mình và tham gia cùng với chúng tôi. Nếu không đồng ý, đơn giản là bạn hãy đóng trang này lại.';

$lang['Agree_under_13'] = 'Tôi <b>đồng ý</b> các điều khoản trên và tôi <b>từ 13 tuổi trở xuống</b>';
$lang['Agree_over_13'] = 'Tôi <b>đồng ý</b> các điều khoản trên và tôi <b>trên 13 tuổi</b>';
$lang['Agree_not'] = 'Tôi <b>không đồng ý</b> các điều khoản trên';

$lang['Wrong_activation'] = 'Khóa kích hoạt bạn vừa thực hiện không phù hợp trong cơ sở dữ liệu của website.';
$lang['Send_password'] = 'Gửi mật khẩu mới'; 
$lang['Password_updated'] = 'Một mật khẩu mới đã được tạo. Hãy kiểm tra Email của bạn để kích hoạt nó.';
$lang['No_email_match'] = 'Địa chỉ Email bạn vừa cung cấp không phù hợp so với trong danh sách của tên thành viên đó.';
$lang['New_password_activation'] = 'Kích hoạt tài khoản mới';
$lang['Password_activated'] = 'Tài khoản của bạn đã được kích hoạt lại. Để đăng nhập, hãy sử dụng mật khẩu mà bạn nhận được trong Email gửi đến.';

$lang['Send_email_msg'] = 'Gửi Email';
$lang['No_user_specified'] = 'Không có thành viên nào được chọn.';
$lang['User_prevent_email'] = 'Thành viên này không muốn nhận Email gửi đến. Hãy sử dụng công cụ gửi tin nhắn!';
$lang['User_not_exist'] = 'Thành viên này không tồn tại.';
$lang['CC_email'] = 'Gửi cho tôi bản copy của Email này.';
$lang['Email_message_desc'] = 'Nội dung Email chỉ được sử dụng văn bản đơn thuần và không được phép sử dụng mã <b>HTML</b> hay mã <b>BBCode</b>. Địa chỉ người gửi sẽ được thiết lập là địa chỉ Email của bạn.';
$lang['Flood_email_limit'] = 'Bạn không thể gửi thêm Email trong lúc này được. Hãy thử lại sau vài phút nữa!';
$lang['Recipient'] = 'Người nhận thư';
$lang['Email_sent'] = 'Email đã được gửi thành công.';
$lang['Send_email'] = 'Gửi Email';
$lang['Empty_subject_email'] = 'Bạn phải nhập tiêu đề cho Email của mình!';
$lang['Empty_message_email'] = 'Bạn chưa nhập nội dung cho Email!';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Mã xác nhận bạn vừa nhập không chính xác!';
$lang['Too_many_registers'] = 'Bạn đã vượt quá số lượng đăng ký được phép trong session của mình. Hãy đăng ký lại vào ngày mai!';
$lang['Confirm_code_impaired'] = 'Nếu vì một lý do nào đó mà bạn không thể nhìn thấy đoạn mã xác nhận trên, hãy liên hệ với <b>%squản trị viên%s</b> để được giúp đỡ.';
$lang['Confirm_code'] = 'Mã xác nhận';
$lang['Confirm_code_explain'] = 'Nhập vào mã xác nhận bạn nhìn thấy bên trên. Mã xác nhận phân biệt rõ ràng chữ hoa với chữ thường và số <b>0</b> sẽ được đánh dấu bằng một đường chéo để phân biệt với chữ <b>O</b>.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Chọn cách sắp xếp';
$lang['Sort'] = 'Sắp xếp';
$lang['Sort_Top_Ten'] = 'Top 10 thành viên gửi bài nhiều nhất';
$lang['Sort_Joined'] = 'Ngày tham gia';
$lang['Sort_Username'] = 'Tên thành viên';
$lang['Sort_Location'] = 'Nơi đến';
$lang['Sort_Posts'] = 'Tổng số bài viết';
$lang['Sort_Email'] = 'Địa chỉ Email';
$lang['Sort_Website'] = 'Website';
$lang['Sort_Ascending'] = 'Tăng dần (0 &raquo; 9 ; A &raquo; Z ... )';
$lang['Sort_Descending'] = 'Giảm dần (9 &raquo; 0 ; Z &raquo; A ... )';
$lang['Order'] = 'Theo thứ tự';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Bảng điều khiển nhóm';
$lang['Group_member_details'] = 'Thông tin chi tiết về tư cách thành viên trong nhóm';
$lang['Group_member_join'] = 'Tham gia vào nhóm';

$lang['Group_Information'] = 'Thông tin về nhóm';
$lang['Group_name'] = 'Tên nhóm';
$lang['Group_description'] = 'Giới thiệu về nhóm';
$lang['Group_membership'] = 'Tư cách thành viên trong nhóm';
$lang['Group_Members'] = 'Thành viên của nhóm';
$lang['Group_Moderator'] = 'Người điều hành nhóm';
$lang['Pending_members'] = 'Thành viên chờ quyết định tham gia vào nhóm';

$lang['Group_type'] = 'Loại nhóm';
$lang['Group_open'] = 'Nhóm mở';
$lang['Group_closed'] = 'Nhóm cố định';
$lang['Group_hidden'] = 'Nhóm ẩn';

$lang['Current_memberships'] = 'Tư cách thành viên hiện tại';
$lang['Non_member_groups'] = 'Không phải thành viên của nhóm.';
$lang['Memberships_pending'] = 'Tư cách thành viên đang chờ quyết định';

$lang['No_groups_exist'] = 'Không có nhóm nào trong diễn đàn.';
$lang['Group_not_exist'] = 'Nhóm này không tồn tại.';

$lang['Join_group'] = 'Tham gia nhóm';
$lang['No_group_members'] = 'Nhóm này chưa có thành viên.';
$lang['Group_hidden_members'] = 'Nhóm này đang ẩn: Bạn không thể xem tư cách thành viên trong nhóm.';
$lang['No_pending_group_members'] = 'Nhóm này không có thành viên nào đang chờ quyết định tham gia.';
$lang['Group_joined'] = 'Bạn đã gửi yêu cầu tham gia nhóm thành công.<br />Bạn sẽ được thông báo khi nào yêu cầu của bạn được chấp thuận bởi người điều hành nhóm.';
$lang['Group_request'] = 'Yêu cầu tham gia nhóm của bạn đã được gửi thành công.';
$lang['Group_approved'] = 'Yêu cầu của bạn đã được chấp thuận.';
$lang['Group_added'] = 'Bạn đã trở thành thành viên chính thức của nhóm.'; 
$lang['Already_member_group'] = 'Bạn đang là thành viên của nhóm này.';
$lang['User_is_member_group'] = 'Thành viên của nhóm này';
$lang['Group_type_updated'] = 'Đã cập nhật loại nhóm thành công.';

$lang['Could_not_add_user'] = 'Thành viên bạn vừa chọn không tồn tại.';
$lang['Could_not_anon_user'] = 'Bạn không thể chọn khách làm thành viên của nhóm.';

$lang['Confirm_unsub'] = 'Bạn có chắc chắn không muốn tham gia vào nhóm này nữa?';
$lang['Confirm_unsub_pending'] = 'Yêu cầu tham gia vào nhóm của bạn đang chờ quyết định. Bạn có chắc chắn không muốn tham gia nữa?';

$lang['Unsub_success'] = 'Bạn không được chấp thuận tham gia vào nhóm này.';

$lang['Approve_selected'] = 'Chấp thuận đánh dấu';
$lang['Deny_selected'] = 'Từ chối đánh dấu';
$lang['Not_logged_in'] = 'Bạn phải đăng nhập để tham gia vào nhóm.';
$lang['Remove_selected'] = 'Xóa đánh dấu';
$lang['Add_member'] = 'Thêm thành viên';
$lang['Not_group_moderator'] = 'Bạn không phải là người điều hành của nhóm, vì thế yêu cầu của bạn không được thực hiện!';

$lang['Login_to_join'] = 'Đăng nhập để tham gia hoặc quản lý nhóm.';
$lang['This_open_group'] = 'Đây là nhóm mở: Bạn có thể tham gia vào nhóm này.';
$lang['This_closed_group'] = 'Đây là nhóm cố định: Bạn không thể tham gia thêm vào nhóm này.';
$lang['This_hidden_group'] = 'Đây là nhóm ẩn: Những thành viên tự động thêm vào sẽ không được chấp nhận trong nhóm này.';
$lang['Member_this_group'] = 'Bạn là thành viên của nhóm này.';
$lang['Pending_this_group'] = 'Tư cách thành viên của bạn trong nhóm này đang chờ quyết định.';
$lang['Are_group_moderator'] = 'Bạn là người điều hành của nhóm.';
$lang['None'] = 'Không có';

$lang['Subscribe'] = 'Chấp thuận';
$lang['Unsubscribe'] = 'Không chấp thuận';
$lang['View_Information'] = 'Xem thông tin nhóm';


//
// Search
//
$lang['Search_query'] = 'Lựa chọn tìm kiếm';
$lang['Search_options'] = 'Đối tượng tìm kiếm';

$lang['Search_keywords'] = 'Tìm kiếm với từ khóa';
$lang['Search_keywords_explain'] = 'Bạn có thể sử dụng từ <u>AND</u> để xác định những từ phải có trong kết quả tìm kiếm, <u>OR</u> để xác định những từ có thể có trong kết quả tìm kiếm và <u>NOT</u> để loại bỏ những từ trong kết quả tìm kiếm. Sử dụng dấu * cho những đối tượng tìm kiếm cùng loại từng phần.';
$lang['Search_author'] = 'Tìm kiếm theo người gửi';
$lang['Search_author_explain'] = 'Sử dụng dấu * để tìm kiếm những người gửi có tên thành viên giống nhau theo một số ký tự.';

$lang['Search_for_any'] = 'Tìm kiếm theo bất cứ điều kiện nào nhập vào';
$lang['Search_for_all'] = 'Tìm kiếm theo tất cả điều kiện nhập vào.';
$lang['Search_title_msg'] = 'Tìm kiếm theo tiêu đề và nội dung bài viết.';
$lang['Search_msg_only'] = 'Chỉ tìm kiếm theo nội dung bài viết.';

$lang['Return_first'] = 'Hiển thị'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'ký tự đầu tiên của bài viết';

$lang['Search_previous'] = 'Tìm kiếm trong khoảng'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sắp xếp theo';
$lang['Sort_Time'] = 'Ngày gửi';
$lang['Sort_Post_Subject'] = 'Bài viết';
$lang['Sort_Topic_Title'] = 'Chủ đề';
$lang['Sort_Author'] = 'Người gửi';
$lang['Sort_Forum'] = 'Chuyên mục';

$lang['Display_results'] = 'Hiển thị kết quả tìm kiếm dưới dạng';
$lang['All_available'] = 'Tất cả';
$lang['No_searchable_forums'] = 'Bạn không được phép tìm kiếm bất cứ chuyên mục nào trong diễn đàn này.';

$lang['No_search_match'] = 'Không tìm thấy kết quả với lựa chọn tìm kiếm của bạn.';
$lang['Found_search_match'] = 'Chỉ tìm thấy <b>%d</b> kết quả'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Đã tìm thấy <b>%d</b> kết quả'; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = 'Bạn không thể sử dụng liên tục công cụ tìm kiếm trong hệ thống. Hãy vui lòng tiếp tục tìm kiếm sau vài phút nữa!';

$lang['Close_window'] = 'Đóng cửa sổ';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Xin lỗi, chỉ có %s mới được phép tạo thông báo trong chuyên mục này.';
$lang['Sorry_auth_sticky'] = 'Xin lỗi, chỉ có %s mới được phép tạo chú ý trong chuyên mục này.'; 
$lang['Sorry_auth_read'] = 'Xin lỗi, chỉ có %s mới được phép xem các chủ đề trong chuyên mục này.'; 
$lang['Sorry_auth_post'] = 'Xin lỗi, chỉ có %s mới được phép tạo chủ đề mới trong chuyên mục này.'; 
$lang['Sorry_auth_reply'] = 'Xin lỗi, chỉ có %s mới được phép trả lời bài viết trong chuyên mục này.';
$lang['Sorry_auth_edit'] = 'Xin lỗi, chỉ có %s mới được phép sửa bài viết trong chuyên mục này.'; 
$lang['Sorry_auth_delete'] = 'Xin lỗi, chỉ có %s mới được phép xóa bài viết trong chuyên mục này.';
$lang['Sorry_auth_vote'] = 'Xin lỗi, chỉ có %s mới được phép tham gia bình chọn trong chuyên mục này.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>khách</b>';
$lang['Auth_Registered_Users'] = '<b>thành viên</b>';
$lang['Auth_Users_granted_access'] = '<b>thành viên được cấp phép đặc biệt</b>';
$lang['Auth_Moderators'] = '<b>người điều hành</b>';
$lang['Auth_Administrators'] = '<b>người quản trị</b>';

$lang['Not_Moderator'] = 'Bạn không phải là người điều hành của chuyên mục này.';
$lang['Not_Authorised'] = 'Không được cấp phép!';

$lang['You_been_banned'] = 'Bạn đã bị cấm tham gia vào website.<br />Để biết thêm thông tin và lý do bạn bị cấm tham gia, hãy liên hệ với người quản trị!';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Website không có thành viên nào và '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Website có tất cả <b>%d</b> thành viên và '; // There are 5 Registered and
$lang['Reg_user_online'] = 'Website có tất cả <b>%d</b> thành viên và '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = 'không có thành viên ẩn nào đang online.'; // 6 Hidden users online
$lang['Hidden_users_online'] = '<b>%d</b> thành viên ẩn đang online.'; // 6 Hidden users online
$lang['Hidden_user_online'] = 'chỉ có <b>%d</b> thành viên ẩn đang online.'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Có <b>%d</b> vị khách đang online.'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Không có vị khách nào đang online.'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Chỉ có <b>%d</b> vị khách đang online.'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Không có thành viên nào đang xem chuyên mục này.';

$lang['Online_explain'] = 'Thông tin trên vừa được cập nhật trong vòng <b>5</b> phút vừa qua.';

$lang['Forum_Location'] = 'Vị trí';
$lang['Last_updated'] = 'Cập nhật';

$lang['Forum_index'] = 'Trang chủ';
$lang['Logging_on'] = 'Đang đăng nhập';
$lang['Posting_message'] = 'Đang gửi bài viết';
$lang['Searching_forums'] = 'Đang tìm kiếm';
$lang['Viewing_profile'] = 'Đang xem thông tin cá nhân';
$lang['Viewing_online'] = 'Đang xem các thành viên online';
$lang['Viewing_member_list'] = 'Đang xem danh sách thành viên';
$lang['Viewing_priv_msgs'] = 'Đang xem tin nhắn';
$lang['Viewing_FAQ'] = 'Đang xem trợ giúp';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Bảng điều khiển của điều hành viên';
$lang['Mod_CP_explain'] = 'Sử dụng bảng điều khiển dưới đây, bạn có thể khóa, mở khóa, di chuyển hoặc xóa bất cứ chủ đề nào trong quyền hạn điều hành của mình.';

$lang['Select'] = 'Chọn';
$lang['Delete'] = 'Xóa';
$lang['Move'] = 'Di chuyển';
$lang['Lock'] = 'Khóa';
$lang['Unlock'] = 'Mở khóa';

$lang['Topics_Removed'] = 'Những chủ đề bạn vừa chọn đã được xóa thành công.';
$lang['Topics_Locked'] = 'Những chủ đề bạn vừa chọn đã được khóa thành công.';
$lang['Topics_Moved'] = 'Những chủ đề bạn vừa chọn đã được di chuyển thành công.';
$lang['Topics_Unlocked'] = 'Những chủ đề bạn vừa chọn đã được mở khóa thành công.';
$lang['No_Topics_Moved'] = 'Không có chủ đề nào bị di chuyển.';

$lang['Confirm_delete_topic'] = 'Bạn có chắc chắn muốn xóa những chủ đề đã chọn?';
$lang['Confirm_lock_topic'] = 'Bạn có chắc chắn muốn khóa những chủ đề đã chọn?';
$lang['Confirm_unlock_topic'] = 'Bạn có chắc chắn muốn mở khóa những chủ đề đã chọn?';
$lang['Confirm_move_topic'] = 'Bạn có chắc chắn muốn di chuyển những chủ đề đã chọn?';

$lang['Move_to_forum'] = 'Di chuyển đến chuyên mục';
$lang['Leave_shadow_topic'] = 'Để lại liên kết tới vị trí mới trong chuyên mục cũ.';

$lang['Split_Topic'] = 'Bảng điều khiển chia nhỏ chủ đề';
$lang['Split_Topic_explain'] = 'Sử dụng bảng điều khiển dưới đây, bạn có thể chia nhỏ một chủ đề quá dài thành hai phần, với một trong hai cái bằng việc chọn những bài viết riêng lẻ hoặc bằng việc chia nhỏ một bài viết đã chọn.';
$lang['Split_title'] = 'Tên chủ đề mới';
$lang['Split_forum'] = 'Chuyên mục của chủ đề mới';
$lang['Split_posts'] = 'Chia nhỏ những bài viết đã chọn';
$lang['Split_after'] = 'Chia nhỏ từ bài viết đã chọn';
$lang['Topic_split'] = 'Chủ đề đã được chia nhỏ thành công.';

$lang['Too_many_error'] = 'Bạn đã chọn quá nhiều bài viết. Bạn chỉ có thể chọn một bài viết để chia nhỏ!';

$lang['None_selected'] = 'Bạn chưa chọn một chủ đề nào để thực hiện yêu cầu vừa rồi. Hãy quay về và thử lại lần nữa!';
$lang['New_forum'] = 'Chuyên mục mới';

$lang['This_posts_IP'] = 'Địa chỉ IP của bài viết này';
$lang['Other_IP_this_user'] = 'Những địa chỉ IP khác mà thành viên này đã sử dụng để gửi bài';
$lang['Users_this_IP'] = 'Những thành viên đã gửi bài từ địa chỉ IP này';
$lang['IP_info'] = 'Thông tin IP';
$lang['Lookup_IP'] = 'Tra cứu địa chỉ IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Thời gian được tính theo giờ %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Giờ';
$lang['-11'] = 'GMT - 11 Giờ';
$lang['-10'] = 'GMT - 10 Giờ';
$lang['-9'] = 'GMT - 9 Giờ';
$lang['-8'] = 'GMT - 8 Giờ';
$lang['-7'] = 'GMT - 7 Giờ';
$lang['-6'] = 'GMT - 6 Giờ';
$lang['-5'] = 'GMT - 5 Giờ';
$lang['-4'] = 'GMT - 4 Giờ';
$lang['-3.5'] = 'GMT - 3.5 Giờ';
$lang['-3'] = 'GMT - 3 Giờ';
$lang['-2'] = 'GMT - 2 Giờ';
$lang['-1'] = 'GMT - 1 Giờ';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Giờ';
$lang['2'] = 'GMT + 2 Giờ';
$lang['3'] = 'GMT + 3 Giờ';
$lang['3.5'] = 'GMT + 3.5 Giờ';
$lang['4'] = 'GMT + 4 Giờ';
$lang['4.5'] = 'GMT + 4.5 Giờ';
$lang['5'] = 'GMT + 5 Giờ';
$lang['5.5'] = 'GMT + 5.5 Giờ';
$lang['6'] = 'GMT + 6 Giờ';
$lang['6.5'] = 'GMT + 6.5 Giờ';
$lang['7'] = 'GMT + 7 Giờ';
$lang['8'] = 'GMT + 8 Giờ';
$lang['9'] = 'GMT + 9 Giờ';
$lang['9.5'] = 'GMT + 9.5 Giờ';
$lang['10'] = 'GMT + 10 Giờ';
$lang['11'] = 'GMT + 11 Giờ';
$lang['12'] = 'GMT + 12 Giờ';
$lang['13'] = 'GMT + 13 Giờ';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 Giờ';
$lang['tz']['-11'] = 'GMT - 11 Giờ';
$lang['tz']['-10'] = 'GMT - 10 Giờ';
$lang['tz']['-9'] = 'GMT - 9 Giờ';
$lang['tz']['-8'] = 'GMT - 8 Giờ';
$lang['tz']['-7'] = 'GMT - 7 Giờ';
$lang['tz']['-6'] = 'GMT - 6 Giờ';
$lang['tz']['-5'] = 'GMT - 5 Giờ';
$lang['tz']['-4'] = 'GMT - 4 Giờ';
$lang['tz']['-3.5'] = 'GMT - 3.5 Giờ';
$lang['tz']['-3'] = 'GMT - 3 Giờ';
$lang['tz']['-2'] = 'GMT - 2 Giờ';
$lang['tz']['-1'] = 'GMT - 1 Giờ';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 Giờ';
$lang['tz']['2'] = 'GMT + 2 Giờ';
$lang['tz']['3'] = 'GMT + 3 Giờ';
$lang['tz']['3.5'] = 'GMT + 3.5 Giờ';
$lang['tz']['4'] = 'GMT + 4 Giờ';
$lang['tz']['4.5'] = 'GMT + 4.5 Giờ';
$lang['tz']['5'] = 'GMT + 5 Giờ';
$lang['tz']['5.5'] = 'GMT + 5.5 Giờ';
$lang['tz']['6'] = 'GMT + 6 Giờ';
$lang['tz']['6.5'] = 'GMT + 6.5 Giờ';
$lang['tz']['7'] = 'GMT + 7 Giờ';
$lang['tz']['8'] = 'GMT + 8 Giờ';
$lang['tz']['9'] = 'GMT + 9 Giờ';
$lang['tz']['9.5'] = 'GMT + 9.5 Giờ';
$lang['tz']['10'] = 'GMT + 10 Giờ';
$lang['tz']['11'] = 'GMT + 11 Giờ';
$lang['tz']['12'] = 'GMT + 12 Giờ';
$lang['tz']['13'] = 'GMT + 13 Giờ';

$lang['datetime']['Sunday'] = 'Chủ nhật';
$lang['datetime']['Monday'] = 'Thứ hai';
$lang['datetime']['Tuesday'] = 'Thứ ba';
$lang['datetime']['Wednesday'] = 'Thứ tư';
$lang['datetime']['Thursday'] = 'Thứ năm';
$lang['datetime']['Friday'] = 'Thứ sáu';
$lang['datetime']['Saturday'] = 'Thứ bảy';
$lang['datetime']['Sun'] = 'Chủ nhật';
$lang['datetime']['Mon'] = 'Thứ 2';
$lang['datetime']['Tue'] = 'Thứ 3';
$lang['datetime']['Wed'] = 'Thứ 4';
$lang['datetime']['Thu'] = 'Thứ 5';
$lang['datetime']['Fri'] = 'Thứ 6';
$lang['datetime']['Sat'] = 'Thứ 7';
$lang['datetime']['January'] = 'Tháng một';
$lang['datetime']['February'] = 'Tháng hai';
$lang['datetime']['March'] = 'Tháng ba';
$lang['datetime']['April'] = 'Tháng tư';
$lang['datetime']['May'] = 'Tháng năm';
$lang['datetime']['June'] = 'Tháng sáu';
$lang['datetime']['July'] = 'Tháng bảy';
$lang['datetime']['August'] = 'Tháng tám';
$lang['datetime']['September'] = 'Tháng chín';
$lang['datetime']['October'] = 'Tháng mười';
$lang['datetime']['November'] = 'Tháng mười một';
$lang['datetime']['December'] = 'Tháng mười hai';
$lang['datetime']['Jan'] = 'Tháng 1';
$lang['datetime']['Feb'] = 'Tháng 2';
$lang['datetime']['Mar'] = 'Tháng 3';
$lang['datetime']['Apr'] = 'Tháng 4';
$lang['datetime']['May'] = 'Tháng 5';
$lang['datetime']['Jun'] = 'Tháng 6';
$lang['datetime']['Jul'] = 'Tháng 7';
$lang['datetime']['Aug'] = 'Tháng 8';
$lang['datetime']['Sep'] = 'Tháng 9';
$lang['datetime']['Oct'] = 'Tháng 10';
$lang['datetime']['Nov'] = 'Tháng 11';
$lang['datetime']['Dec'] = 'Tháng 12';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Thông tin';
$lang['Critical_Information'] = 'Thông tin quan trọng';

$lang['General_Error'] = 'Lỗi tổng quát';
$lang['Critical_Error'] = 'Lỗi hệ thống';
$lang['An_error_occured'] = 'Có một lỗi xuất hiện!';
$lang['A_critical_error'] = 'Có một lỗi hệ thống xuất hiện!';

$lang['Admin_reauthenticate'] = 'Để chuyển đến bảng điều khiển của quản trị viên, bạn cần phải đăng nhập thêm một lần nữa.';
$lang['Login_attempts_exceeded'] = 'Bạn đã cố gắng đăng nhập vượt quá mức cho phép <b>%s</b> lần. Bạn sẽ không được phép đăng nhập trong vòng <b>%s</b> phút nữa.';
$lang['Please_remove_install_contrib'] = 'Hãy chắc chắn hai thư mục <b>install</b> và <b>contrib</b> đã được xoá trên server.';
$lang['Session_invalid'] = 'Session không hợp lệ. Bạn hãy vui lòng tiến hành lại thao tác trên.';

//
// That's all, Folks!
// -------------------------------------------------

?>