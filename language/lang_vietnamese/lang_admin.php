<?php
/** 
*
* lang_admin [Vietnamese]
*
* @package language
* @version $Id: lang_admin.php,v 1.09 2006/07/01 20:51:00 nedka Exp $
* @copyright (c) 2006 phpBBVietNam Group 
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

/* CONTRIBUTORS
	2006-03-25	Nguyen Dang Khoa
	First translated into Vietnamese ...
*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Hệ thống';
$lang['Users'] = 'Thành viên';
$lang['Groups'] = 'Nhóm';
$lang['Forums'] = 'Chuyên mục';
$lang['Styles'] = 'Giao diện';

$lang['Configuration'] = 'Cấu hình';
$lang['Permissions'] = 'Cấp phép';
$lang['Manage'] = 'Quản lý';
$lang['Disallow'] = 'Tên thành viên cấm';
$lang['Prune'] = 'Dọn dẹp';
$lang['Mass_Email'] = 'Gửi Email thành viên';
$lang['Ranks'] = 'Xếp hạng';
$lang['Smilies'] = 'Biểu tượng vui';
$lang['Ban_Management'] = 'Bảng cấm';
$lang['Word_Censor'] = 'Kiểm duyệt từ';
$lang['Export'] = 'Xuất';
$lang['Create_new'] = 'Tạo';
$lang['Add_new'] = 'Thêm';
$lang['Backup_DB'] = 'Sao lưu dữ liệu';
$lang['Restore_DB'] = 'Phục hồi dữ liệu';


//
// Index
//
$lang['Admin'] = 'Hệ thống';
$lang['Not_admin'] = 'Bạn không được phép điều khiển website này!';
$lang['Welcome_phpBB'] = 'Chào mừng bạn đã đến với phpBB!';
$lang['Admin_intro'] = 'Cám ơn bạn đã chọn phpBB để sử dụng làm diễn đàn cho mình. Trang này sẽ đưa bạn một cái nhìn tổng quan về những giá trị thống kê trong diễn đàn của bạn. Bạn có thể quay lại trang này bằng cách bấm vào liên kết <u>Bảng điều khiển</u> trong menu bên trái. Để quay lại trang chủ trong diễn đàn, bạn hãy bấm vào logo của phpBB nằm trên cùng cũng ở menu bên trái. Những liên kết khác trên menu này sẽ cho phép bạn điều khiển từng thành phần của hệ thống với kinh nghiệm quản lý diễn đàn của bạn. Mỗi một công cụ sẽ có hướng dẫn riêng cho bạn làm thế nào sử dụng những chức năng trong đó.';
$lang['Main_index'] = 'Trang chủ';
$lang['Forum_stats'] = 'Thống kê diễn đàn';
$lang['Admin_Index'] = 'Bảng điều khiển';
$lang['Preview_forum'] = 'Xem trước diễn đàn';

$lang['Click_return_admin_index'] = 'Bấm %svào đây%s để quay về bảng điều khiển của quản trị viên.';

$lang['Statistic'] = 'Thống kê';
$lang['Value'] = 'Giá trị';
$lang['Number_posts'] = 'Tổng số bài viết';
$lang['Posts_per_day'] = 'Số bài viết / ngày';
$lang['Number_topics'] = 'Tổng số chủ đề';
$lang['Topics_per_day'] = 'Số chủ đề / ngày';
$lang['Number_users'] = 'Tổng số thành viên';
$lang['Users_per_day'] = 'Số thành viên / ngày';
$lang['Board_started'] = 'Ngày website bắt đầu hoạt động';
$lang['Avatar_dir_size'] = 'Dung lượng thư mục hình đại diện';
$lang['Database_size'] = 'Dung lượng cơ sở dữ liệu';
$lang['Gzip_compression'] ='Chế độ nén GZIP';
$lang['Not_available'] = 'Không có sẵn';

$lang['ON'] = 'Bật'; // This is for GZip compression
$lang['OFF'] = 'Tắt'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Công cụ cơ sở dữ liệu';

$lang['Restore'] = 'Phục hồi';
$lang['Backup'] = 'Sao lưu';
$lang['Restore_explain'] = 'Công cụ này sẽ giúp bạn phục hồi lại cơ sở dữ liệu cho hệ thống từ một tập tin đã sao lưu trước. Nếu server hỗ trợ, bạn có thể tải lên tập tin phục hồi được nén theo chế độ Gzip và nó sẽ được tự động giải nén khi hệ thống bắt đầu được khởi động phục hồi.<br /><br /><u><b>Cẩn thận</b></u>: Việc khôi phục sẽ chép đè lên toàn bộ cơ sở dữ liệu hiện có của hệ thống. Thời gian phục hồi tùy thuộc vào dung lượng cơ sở dữ liệu mà bạn muốn phục hồi và trong suốt thời gian hệ thống đang tiến hành phục hồi, bạn không được đóng trang này lại hay chuyển qua các liên kết khác. Những hành động đó sẽ làm hỏng tiến trình phục hồi của hệ thống và sẽ có nhiều rắc rối xảy ra cho hệ thống của bạn.';
$lang['Backup_explain'] = 'Công cụ này sẽ giúp bạn sao lưu toàn bộ cơ sở dữ liệu mà hệ thống đang sử dụng. Nếu bạn muốn sao lưu cả những table khác hiện có trong cơ sở dữ liệu nhưng không phải của hệ thống, hãy xác định chúng trong phần <b>Table thêm vào</b> và ngăn cách bằng dấu phẩy (,). Nếu server của bạn hỗ trợ, bạn có thể nén tập tin sao lưu theo chế độ nén Gzip trước khi tải về.';

$lang['Backup_options'] = 'Đối tượng sao lưu';
$lang['Start_backup'] = 'Khởi động sao lưu';
$lang['Full_backup'] = 'Sao lưu toàn bộ';
$lang['Structure_backup'] = 'Chỉ sao lưu cấu trúc cơ sở dữ liệu';
$lang['Data_backup'] = 'Chỉ sao lưu nội dung cơ sở dữ liệu';
$lang['Additional_tables'] = 'Table thêm vào';
$lang['Gzip_compress'] = 'Chế độ nén Gzip';
$lang['Select_file'] = 'Chọn tập tin phục hồi';
$lang['Start_Restore'] = 'Khởi động phục hồi';

$lang['Restore_success'] = 'Cơ sở dữ liệu của hệ thống đã được phục hồi thành công.<br /><br />Hệ thống của bạn sẽ quay trở lại thời điểm thực hiện bản sao lưu này.';
$lang['Backup_download'] = 'Đang bắt đầu sao lưu cơ sở dữ liệu của hệ thống. Hãy chờ đợi trong giây lát ...';
$lang['Backups_not_supported'] = 'Xin lỗi, loại cơ sở dữ liệu của tập tin phục hồi không được hỗ trợ trên server của bạn!';

$lang['Restore_Error_uploading'] = 'Có lỗi xuất hiện trong khi tải lên tập tin phục hồi!';
$lang['Restore_Error_filename'] = 'Có vấn đề xảy ra với tên của tập tin phục hồi. Hãy sử dụng một tên tập tin khác!';
$lang['Restore_Error_decompress'] = 'Không thể giải nén tập tin phục hồi dưới dạng gzip. Hãy tải lên một tập tin phục hồi khác dạng văn bản đơn giản và không sử dụng chế độ nén gzip!';
$lang['Restore_Error_no_file'] = 'Không có tập tin nào được tải lên!';


//
// Auth pages
//
$lang['Select_a_User'] = 'Chọn một thành viên';
$lang['Select_a_Group'] = 'Chọn một nhóm';
$lang['Select_a_Forum'] = 'Chọn một chuyên mục';
$lang['Auth_Control_User'] = 'Bảng điều khiển cấp phép thành viên'; 
$lang['Auth_Control_Group'] = 'Bảng điều khiển cấp phép nhóm'; 
$lang['Auth_Control_Forum'] = 'Bảng điều khiển cấp phép chuyên mục'; 
$lang['Look_up_User'] = 'Tra cứu thành viên'; 
$lang['Look_up_Group'] = 'Tra cứu nhóm'; 
$lang['Look_up_Forum'] = 'Tra cứu chuyên mục'; 

$lang['Group_auth_explain'] = 'Công cụ này sẽ giúp bạn thay đổi mức độ cấp phép và quyền hạn điều hành viên cho từng nhóm xác định. Đừng quên rằng khi bạn thay đổi mức độ cấp phép của một nhóm thì bạn cũng phải thay đổi mức độ cấp phép đối với tất cả các thành viên đã tham gia vào trong nhóm đó. Bạn sẽ được thông báo nếu xảy ra trường hợp này.';
$lang['User_auth_explain'] = 'Công cụ này sẽ giúp bạn thay đổi mức độ cấp phép và quyền hạn điều hành viên cho từng thành viên xác định. Đừng quên rằng khi bạn thay đổi mức độ cấp phép của một thành viên thì bạn cũng phải thay đổi mức độ cấp phép đối với nhóm mà thành viên đó đã tham gia vào. Bạn sẽ được thông báo nếu xảy ra trường hợp này.';
$lang['Forum_auth_explain'] = 'Công cụ này sẽ giúp bạn thay đổi mức độ cấp phép cho từng chuyên mục. Bạn có thể chuyển đổi sử dụng <b>chế độ đơn giản</b> hoặc <b>chế độ nâng cao</b> để thực hiện việc này. <b>Chế độ nâng cao</b> cho phép bạn thực hiện việc cấp phép chi tiết hơn <b>chế độ đơn giản</b>. Hãy nhớ việc thay đổi cấp phép sẽ ảnh hướng đến các thành viên trong hệ thống khi họ muốn xem, trả lời, sửa hay xóa ... những bài viết trong hệ thống tùy thuộc vào sự cấp phép của bạn dành cho họ.';

$lang['Simple_mode'] = 'Chế độ đơn giản';
$lang['Advanced_mode'] = 'Chế độ nâng cao';
$lang['Moderator_status'] = 'Quyền hạn của điều hành viên';

$lang['Allowed_Access'] = 'Truy nhập được phép';
$lang['Disallowed_Access'] = 'Truy nhập bị cấm';
$lang['Is_Moderator'] = 'Là người điều hành';
$lang['Not_Moderator'] = 'Không phải người điều hành';

$lang['Conflict_warning'] = 'Thông báo xung đột cấp phép';
$lang['Conflict_access_userauth'] = 'Thành viên này vẫn có thể truy nhập vào chuyên mục thông qua tư cách thành viên trong nhóm mà thành viên đã tham gia. Bạn phải thay đổi luôn cả mức độ cấp phép áp dụng cho nhóm mà thành viên này đã tham gia hoặc để tránh ảnh hưởng đến các thành viên khác trong nhóm đó, hãy di chuyển thành viên này ra khỏi nhóm để ngăn cản hoàn toàn quyền truy nhập của thành viên. Mức độ cấp phép của nhóm liên quan đến chuyên mục được lưu ý bên dưới.';
$lang['Conflict_mod_userauth'] = 'Thành viên này vẫn có thể quản lý chuyên mục thông qua tư cách thành viên trong nhóm mà thành viên đã tham gia. Bạn phải thay đổi luôn cả mức độ cấp phép áp dụng cho nhóm mà thành viên này đã tham gia hoặc để tránh ảnh hưởng đến các thành viên khác trong nhóm đó, hãy di chuyển thành viên này ra khỏi nhóm để ngăn cản hoàn toàn quyền quản lý của thành viên. Mức độ cấp phép của nhóm liên quan đến chuyên mục được lưu ý bên dưới.';

$lang['Conflict_access_groupauth'] = 'Những thành viên sau đây hoậc các thành viên khác vẫn có thể truy nhập vào chuyên mục này thông qua mức độ cấp phép cho tài khoản thành viên của họ. Bạn phải thay đổi luôn cả mức độ cấp phép áp dụng cho tài khoản của các thành viên để ngăn cản hoàn toàn quyền truy nhập của họ. Mức độ cấp phép của thành viên liên quan đến chuyên mục được lưu ý bên dưới.';
$lang['Conflict_mod_groupauth'] = 'Những thành viên sau đây hoậc các thành viên khác vẫn có thể quản lý chuyên mục này thông qua mức độ cấp phép cho tài khoản thành viên của họ. Bạn phải thay đổi luôn cả mức độ cấp phép áp dụng cho tài khoản của các thành viên để ngăn cản hoàn toàn quyền quản lý của họ. Mức độ cấp phép của thành viên liên quan đến chuyên mục được lưu ý bên dưới.';

$lang['Public'] = 'Công cộng';
$lang['Private'] = 'Cá nhân';
$lang['Registered'] = 'Thành viên';
$lang['Administrators'] = 'Quản trị viên';
$lang['Hidden'] = 'Ẩn';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'TẤT CẢ';
$lang['Forum_REG'] = 'THÀNH VIÊN';
$lang['Forum_PRIVATE'] = 'CÁ NHÂN';
$lang['Forum_MOD'] = 'ĐIỀU HÀNH VIÊN';
$lang['Forum_ADMIN'] = 'QUẢN TRỊ VIÊN';

$lang['View'] = 'Hiển thị';
$lang['Read'] = 'Xem';
$lang['Post'] = 'Gửi bài viết';
$lang['Reply'] = 'Trả lời';
$lang['Edit'] = 'Sửa';
$lang['Delete'] = 'Xóa';
$lang['Sticky'] = 'Chú ý';
$lang['Announce'] = 'Thông báo'; 
$lang['Vote'] = 'Bình chọn';
$lang['Pollcreate'] = 'Tạo bình chọn';

$lang['Permissions'] = 'Cấp phép';
$lang['Simple_Permission'] = 'Cấp phép đơn giản';

$lang['User_Level'] = 'Cấp bậc thành viên'; 
$lang['Auth_User'] = 'Thành viên';
$lang['Auth_Admin'] = 'Quản trị viên';
$lang['Group_memberships'] = 'Tư cách thành viên nhóm';
$lang['Usergroup_members'] = 'Các thành viên của nhóm này';

$lang['Forum_auth_updated'] = 'Thiết lập cấp phép chuyên mục đã được cập nhật.';
$lang['User_auth_updated'] = 'Thiết lập cấp phép thành viên đã được cập nhật.';
$lang['Group_auth_updated'] = 'Thiết lập cấp phép nhóm đã được cập nhật.';

$lang['Auth_updated'] = 'Thiết lập cấp phép đã được cập nhật.';
$lang['Click_return_userauth'] = 'Bấm %svào đây%s để quay về bảng cấp phép thành viên.';
$lang['Click_return_groupauth'] = 'Bấm %svào đây%s để quay về bảng cấp phép nhóm.';
$lang['Click_return_forumauth'] = 'Bấm %svào đây%s để quay về bảng cấp phép chuyên mục.';


//
// Banning
//
$lang['Ban_control'] = 'Bảng điều khiển cấm';
$lang['Ban_explain'] = 'Công cụ này sẽ giúp bạn điều khiển chức năng cấm các thành viên. Bạn có thể hoàn tất công việc này bằng cách ngăn cấm một trong hai hoặc tất cả: một tên thành viên xác định hay cá nhân riêng lẻ hoặc một dãy địa chỉ IP hay tên miền. Những biện pháp này sẽ ngăn cản bất kỳ ai mà bạn muốn không cho truy nhập vào website của mình. Để ngăn cản một thành viên dùng các tên thành viên khác nhau để đăng ký, bạn cũng có thể xác định một địa chỉ Email sẽ bị cấm. Cần lưu ý rằng việc cấm dùng một địa chỉ Email nào đó sẽ không ngăn cản thành viên này có thể đăng nhập hay gửi bài trong diễn đàn. Bạn nên sử dụng biện pháp đầu tiên để hoàn tất việc này.';
$lang['Ban_explain_warn'] = 'Cần lưu ý rằng việc nhập vào một dãy địa chỉ IP thì những địa chỉ IP nằm trong dãy từ số bắt đầu đến số kết thúc đều bị cấm. Hãy cố gắng thu nhỏ những con số trong dãy địa chỉ IP thêm vào cơ sở dữ liệu bằng cách sử dụng những ký tự đại diện tự động tại nơi thích hợp. Nếu bạn thực sự phải nhập vào một dãy địa chỉ IP, hãy cố thu hẹp dãy địa chỉ lại hoặc tốt hơn là nhập vào một địa chỉ IP rõ ràng.';

$lang['Select_username'] = 'Chọn một tên thành viên';
$lang['Select_ip'] = 'Chọn một địa chỉ IP';
$lang['Select_email'] = 'Chọn một địa chỉ Email';

$lang['Ban_username'] = 'Cấm một hoặc nhiều thành viên xác định';
$lang['Ban_username_explain'] = 'Bạn có thể cấm nhiều thành viên nhanh chóng bằng cách kết hợp chuột và bàn phím trên máy tính và trình duyệt của bạn thật thích hợp.';

$lang['Ban_IP'] = 'Cấm một hoặc nhiều địa chỉ IP hay tên miền';
$lang['IP_hostname'] = 'Địa chỉ IP hoặc tên miền';
$lang['Ban_IP_explain'] = 'Để xác định nhiều địa chỉ IP hay tên miền khác nhau, hãy ngăn cách chúng bằng dấu phẩy (,). Để xác định một dãy địa chỉ IP, hãy ngăn cách số bắt đầu và số kết thúc bằng dấu nối (-); để xác định một ký tự đại diện, hãy dùng một dấu hoa thị (*).';

$lang['Ban_email'] = 'Cấm một hoặc nhiều địa chỉ Email';
$lang['Ban_email_explain'] = 'Để xác định nhiều địa chỉ Email, hãy ngăn cách chúng bằng dấu phẩy (,). Để xác định một nhóm tài khoản, hãy dùng dấu * giống như sau: <b>*@hotmail.com</b>';

$lang['Unban_username'] = 'Hủy bỏ lệnh cấm cho một hoặc nhiều thành viên xác định';
$lang['Unban_username_explain'] = 'Bạn có thể huỷ bỏ lệnh cấm cho nhiều thành viên nhanh chóng bằng cách kết hợp chuột và bàn phím trên máy tính và trình duyệt của bạn thật thích hợp.';

$lang['Unban_IP'] = 'Hủy bỏ lệnh cấm cho một hoặc nhiều địa chỉ IP';
$lang['Unban_IP_explain'] = 'Bạn có thể huỷ bỏ lệnh cấm cho nhiều địa chỉ IP nhanh chóng bằng cách kết hợp chuột và bàn phím trên máy tính và trình duyệt của bạn thật thích hợp.';

$lang['Unban_email'] = 'Hủy bỏ lệnh cấm cho một hoặc nhiều địa chỉ Email';
$lang['Unban_email_explain'] = 'Bạn có thể huỷ bỏ lệnh cấm cho nhiều địa chỉ Email nhanh chóng bằng cách kết hợp chuột và bàn phím trên máy tính và trình duyệt của bạn thật thích hợp.';

$lang['No_banned_users'] = 'Những thành viên hủy bỏ lệnh cấm';
$lang['No_banned_ip'] = 'Những địa chỉ IP hủy bỏ lệnh cấm';
$lang['No_banned_email'] = 'Những địa chỉ Email hủy bỏ lệnh cấm';

$lang['Ban_update_sucessful'] = 'Danh sách cấm đã được cập nhật thành công.';
$lang['Click_return_banadmin'] = 'Bấm %svào đây%s để quay về bảng điều khiển cấm.';


//
// Configuration
//
$lang['General_Config'] = 'Cấu hình tổng quát';
$lang['Config_explain'] = 'Công cụ này sẽ giúp bạn thiết lập tổng quát các thông số cho hệ thống. Để thiết lập thành viên và cấu hình chuyên mục, hãy sử dụng các liên kết tương ứng trong menu bên trái.';

$lang['Click_return_config'] = 'Bấm %svào đây%s để quay về bảng cấu hình tổng quát.';

$lang['General_settings'] = 'Thiết lập tổng quát hệ thống';
$lang['Server_name'] = 'Tên miền';
$lang['Server_name_explain'] = 'Tên miền mà server của bạn đang sử dụng.';
$lang['Script_path'] = 'Đường dẫn';
$lang['Script_path_explain'] = 'Đường dẫn đến thư mục chính của hệ thống được định vị theo tên miền của bạn.';
$lang['Server_port'] = 'Cổng server';
$lang['Server_port_explain'] = 'Cổng mà server của bạn đang sử dụng, mặc định là <b>80</b>. Chỉ thay đổi nếu bạn đang sử dụng cổng khác.';
$lang['Site_name'] = 'Tên website';
$lang['Site_desc'] = 'Giới thiệu về website';
$lang['Board_disable'] = 'Tạm ngưng hoạt động';
$lang['Board_disable_explain'] = 'Lựa chọn này sẽ thiết lập hệ thống tạm ngừng hoạt động đối với tất cả các thành viên. Quản trị viên vẫn có thể truy nhập vào bảng điều khiển này khi hệ thống đã tạm ngưng hoạt động.';
$lang['Acct_activation'] = 'Bật kích hoạt tài khoản';
$lang['Acc_None'] = 'Không cần'; // These three entries are the type of activation
$lang['Acc_User'] = 'Thành viên';
$lang['Acc_Admin'] = 'Quản trị viên';

$lang['Abilities_settings'] = 'Thiết lập thành viên và chuyên mục';
$lang['Max_poll_options'] = 'Số lượng đối tượng bình chọn tối đa cho phép trong mỗi bình chọn';
$lang['Flood_Interval'] = 'Thời gian chờ gửi bài viết';
$lang['Flood_Interval_explain'] = 'Số giây mà thành viên phải chờ đợi giữa 2 lần gửi bài.'; 
$lang['Board_email_form'] = 'Cho phép thành viên gửi Email';
$lang['Board_email_form_explain'] = 'Thành viên có thể gửi Email đến các thành viên khác trong hệ thống.';
$lang['Topics_per_page'] = 'Số chủ đề mỗi trang';
$lang['Posts_per_page'] = 'Số bài viết mỗi trang';
$lang['Hot_threshold'] = 'Số bài viết mỗi trang cho những chủ đề được nhiều người xem';
$lang['Default_style'] = 'Giao diện mặc định';
$lang['Override_style'] = 'Chỉ sử dụng giao diện mặc định';
$lang['Override_style_explain'] = 'Thay thế tất cả giao diện mà thành viên lựa chọn bằng giao diện mặc định của hệ thống.';
$lang['Default_language'] = 'Ngôn ngữ mặc định';
$lang['Date_format'] = 'Định dạng ngày tháng';
$lang['System_timezone'] = 'Múi giờ hệ thống';
$lang['Enable_gzip'] = 'Bật chế độ nén Gzip';
$lang['Enable_prune'] = 'Bật chế độ dọn dẹp chuyên mục';
$lang['Allow_HTML'] = 'Cho phép sử dụng HTML';
$lang['Allow_BBCode'] = 'Cho phép sử dụng BBCode';
$lang['Allowed_tags'] = 'Những thẻ HTML được phép sử dụng';
$lang['Allowed_tags_explain'] = 'Ngăn cách từng thẻ HTML bằng dấu phẩy (,)';
$lang['Allow_smilies'] = 'Cho phép sử dụng biểu tượng vui';
$lang['Smilies_path'] = 'Đường dẫn đến thư mục biểu tượng vui';
$lang['Smilies_path_explain'] = 'Đường dẫn đến thư mục chứa biểu tượng vui trong hệ thống, mặc định là <b>images/smiles</b>';
$lang['Allow_sig'] = 'Cho phép sử dụng chữ ký cá nhân';
$lang['Max_sig_length'] = 'Ký tự tối đa cho phép';
$lang['Max_sig_length_explain'] = 'Số ký tự tối đa mà thành viên được phép sử dụng trong chữ ký cá nhân của mình.';
$lang['Allow_name_change'] = 'Cho phép thay đổi tên thành viên';

$lang['Avatar_settings'] = 'Thiết lập hình đại diện';
$lang['Allow_local'] = 'Cho phép thành viên sử dụng thư viện hình đại diện';
$lang['Allow_remote'] = 'Cho phép thành viên sử dụng hình đại diện từ website khác';
$lang['Allow_remote_explain'] = 'Cho phép thành viên sử dụng những hình đại diện trên các website khác thông qua một liên kết URL.';
$lang['Allow_upload'] = 'Cho phép thành viên tải lên hình đại diện';
$lang['Max_filesize'] = 'Dung lượng tập tin hình đại diện tối đa cho phép';
$lang['Max_filesize_explain'] = 'Chỉ áp dụng đối với những hình đại diện do thành viên tải lên website.';
$lang['Max_avatar_size'] = 'Kích thước hình đại diện tối đa cho phép';
$lang['Max_avatar_size_explain'] = '(Chiều cao x chiều rộng với đơn vị <b>Pixel</b>)';
$lang['Avatar_storage_path'] = 'Đường dẫn đến thư mục hình đại diện';
$lang['Avatar_storage_path_explain'] = 'Đường dẫn đến thư mục chứa hình đại diện trong hệ thống, mặc định là <b>images/avatars</b>';
$lang['Avatar_gallery_path'] = 'Đường dẫn đến thư viện hình đại diện';
$lang['Avatar_gallery_path_explain'] = 'Đường dẫn đến thư mục chứa hình đại diện của thư viện trong hệ thống, mặc định là <b>images/avatars/gallery</b>';

$lang['COPPA_settings'] = 'Thiết lập COPPA';
$lang['COPPA_fax'] = 'Số Fax sử dụng cho COPPA';
$lang['COPPA_mail'] = 'Danh sách địa chỉ Email sử dụng cho COPPA';
$lang['COPPA_mail_explain'] = 'Danh sách Email nhận đơn đăng ký COPPA từ cha mẹ của các thành viên dưới 13 tuổi đăng ký làm thành viên website.';

$lang['Email_settings'] = 'Thiết lập Email';
$lang['Admin_email'] = 'Địa chỉ Email của quản trị viên';
$lang['Email_sig'] = 'Chữ ký Email';
$lang['Email_sig_explain'] = 'Chữ ký được đính kèm cuối mỗi Email được gửi đi từ hệ thống.';
$lang['Use_SMTP'] = 'Sử dụng server SMTP để gửi Email';
$lang['Use_SMTP_explain'] = 'Bật chức năng này nếu bạn muốn gửi Email từ một server SMTP thay vì sử dụng hàm gửi Email <a href=\'http://www.php.net/sendmail\' target=\'_other\'>sendmail()</a> trong PHP';
$lang['SMTP_server'] = 'Địa chỉ của server SMTP';
$lang['SMTP_username'] = 'Tên tài khoản SMTP';
$lang['SMTP_username_explain'] = 'Chỉ nhập vào tên tài khoản nếu server SMTP của bạn yêu cầu.';
$lang['SMTP_password'] = 'Mật khẩu SMTP';
$lang['SMTP_password_explain'] = 'Chỉ nhập vào mật khẩu nếu server SMTP của bạn yêu cầu.';

$lang['Disable_privmsg'] = 'Cho phép thành viên gửi tin nhắn';
$lang['Inbox_limits'] = 'Số tin nhắn tối đa trong <b>Hộp thư nhận</b>';
$lang['Sentbox_limits'] = 'Số tin nhắn tối đa trong <b>Hộp thư gửi</b>';
$lang['Savebox_limits'] = 'Số tin nhắn tối đa trong <b>Hộp thư lưu</b>';

$lang['Cookie_settings'] = 'Thiết lập cookie'; 
$lang['Cookie_settings_explain'] = 'Những thông số này được thiết lập để xác định gửi cookie như thế nào đến trình duyệt của các thành viên. Trong hầu hết các trường hợp bạn chỉ cần giữ nguyên những giá trị mặc định của hệ thống. Nhưng nếu bạn thực sự cần thay đổi chúng thì hãy cẩn thận khi thiết lập bởi vì những thiết lập sai sẽ làm cho các thành viên không thể đăng nhập vào hệ thống.';
$lang['Cookie_domain'] = 'Tên miền cookie';
$lang['Cookie_name'] = 'Tên cookie';
$lang['Cookie_path'] = 'Đường dẫn cookie';
$lang['Cookie_secure'] = 'Cookie bảo mật';
$lang['Cookie_secure_explain'] = 'Nếu server của bạn đang sử dụng SSL với đường dẫn bắt đầu bằng <b>https://</b>, hãy bật thiết lập này, còn nếu không hãy tắt thiết lập này để tránh xảy ra xung đột.';
$lang['Session_length'] = 'Thời gian session có hiệu lực [ Giây ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Sử dụng mã xác nhận khi đăng ký';
$lang['Visual_confirm_explain'] = 'Yêu cầu thành viên phải nhập một đoạn mã xác nhận tự động khi đăng ký.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Cho phép sử dụng đăng nhập tự động';
$lang['Allow_autologin_explain'] = 'Cho phép thành viên sử dụng chức năng đăng nhập tự động mỗi khi đăng nhập vào hệ thống.';
$lang['Autologin_time'] = 'Thời gian cho phép sử dụng đăng nhập tự động';
$lang['Autologin_time_explain'] = 'Số ngày mà chức năng đăng nhập tự động còn hiệu lực tính từ ngày ghé thăm cuối cùng của thành viên trên website. Nhập vào <b>0</b> để vô hiệu thiết lập này.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Thời gian chờ sử dụng công cụ tìm kiếm';
$lang['Search_Flood_Interval_explain'] = 'Số giây mà thành viên phải chờ đợi giữa 2 lần sử dụng công cụ tìm kiếm trong hệ thống.'; 

//
// Forum Management
//
$lang['Forum_admin'] = 'Bảng quản lý chuyên mục';
$lang['Forum_admin_explain'] = 'Công cụ này cho phép bạn tạo mới, xoá, sửa, sắp xếp lại và đồng bộ hoá lại những nhóm thông tin và chuyên mục trong diễn đàn.';
$lang['Edit_forum'] = 'Sửa chuyên mục';
$lang['Create_forum'] = 'Tạo chuyên mục mới';
$lang['Create_category'] = 'Tạo nhóm thông tin mới';
$lang['Remove'] = 'Gỡ bỏ';
$lang['Action'] = 'Lựa chọn';
$lang['Update_order'] = 'Cập nhật thứ tự';
$lang['Config_updated'] = 'Thiết lập cấu hình đã được cập nhật thành công.';
$lang['Edit'] = 'Sửa';
$lang['Delete'] = 'Xóa';
$lang['Move_up'] = 'Di chuyển lên';
$lang['Move_down'] = 'Di chuyển xuống';
$lang['Resync'] = 'Đồng bộ';
$lang['No_mode'] = 'Không có chế độ nào được thiết lập.';
$lang['Forum_edit_delete_explain'] = 'Công cụ bên dưới sẽ cho phép bạn tuỳ chỉnh tất cả thiết lập tổng quát của diễn đàn. Để thay đổi thiết lập và quản lý các thành viên hay chuyên mục, bạn hãy sử dụng những liên kết tương ứng trong menu bên trái.';

$lang['Move_contents'] = 'Di chuyển tất cả nội dung';
$lang['Forum_delete'] = 'Xóa chuyên mục';
$lang['Forum_delete_explain'] = 'Công cụ bên dưới sẽ cho phép bạn xoá một chuyên mục hoặc nhóm thông tin và xác định nơi bạn muốn chuyển tất cả chủ đề hay chuyên mục chứa trong đó.';

$lang['Status_locked'] = 'Đã khóa';
$lang['Status_unlocked'] = 'Không bị khóa';
$lang['Forum_settings'] = 'Thiết lập chuyên mục tổng quát';
$lang['Forum_name'] = 'Tên chuyên mục';
$lang['Forum_desc'] = 'Giới thiệu về chuyên mục';
$lang['Forum_status'] = 'Trạng thái chuyên mục';
$lang['Forum_pruning'] = 'Dọn dẹp tự động';

$lang['prune_freq'] = 'Thời gian kiểm tra chủ đề';
$lang['prune_days'] = 'Gỡ bỏ những chủ đề không có bài viết mới trong vòng';
$lang['Set_prune_data'] = 'Bạn vừa bật chức năng tự động dọn dẹp bài viết cho chuyên mục này nhưng chưa thiết lập một tần số hoặc số ngày để thực hiện dọn dẹp. Hãy quay lại và hoàn tất!';

$lang['Move_and_Delete'] = 'Di chuyển và xóa';

$lang['Delete_all_posts'] = 'Xóa tất cả bài viết';
$lang['Nowhere_to_move'] = 'Không có chỗ nào để di chuyển.';

$lang['Edit_Category'] = 'Sửa nhóm thông tin';
$lang['Edit_Category_explain'] = 'Sử dụng công cụ này để sửa tên của một nhóm thông tin.';

$lang['Forums_updated'] = 'Thông tin về chuyên mục và nhóm thông tin đã được cập nhật thành công.';

$lang['Must_delete_forums'] = 'Bạn phải xóa tất cả các chuyên mục của nhóm thông tin trước khi bạn muốn xóa nhóm thông tin này.';

$lang['Click_return_forumadmin'] = 'Bấm %svào đây%s để quay về bảng quản lý chuyên mục.';


//
// Smiley Management
//
$lang['smiley_title'] = 'Bảng quản lý biểu tượng vui';
$lang['smile_desc'] = 'From this page you can add, remove and edit the emoticons or smileys that your users can use in their posts and private messages.';

$lang['smiley_config'] = 'Cấu hình biểu tượng vui';
$lang['smiley_code'] = 'Mã biểu tượng vui';
$lang['smiley_url'] = 'Tập tin hình biểu tượng vui';
$lang['smiley_emot'] = 'Lời cảm xúc của biểu tượng vui';
$lang['smile_add'] = 'Thêm biểu tượng vui mới';
$lang['Smile'] = 'Hình biểu tượng vui';
$lang['Emotion'] = 'Lời cảm xúc';

$lang['Select_pak'] = 'Chọn gói tập tin (*.pak)';
$lang['replace_existing'] = 'Thay thế những biểu tượng vui hiện có';
$lang['keep_existing'] = 'Giữ lại những biểu tượng vui hiện có';
$lang['smiley_import_inst'] = 'Bạn cần phải giải nén gói biểu tượng vui và tải lên tất cả tập tin trong đó đến thư mục biểu tượng vui thích hợp của hệ thống để tiến hành cài đặt. Sau đó chọn thông tin chính xác trong bảng điều khiển này để nhập gói biểu tượng vui thành công.';
$lang['smiley_import'] = 'Nhập gói biểu tượng vui';
$lang['choose_smile_pak'] = 'Chọn một gói biểu tượng vui với loại tập tin <b>*.pak</b>';
$lang['import'] = 'Nhập biểu tượng vui';
$lang['smile_conflicts'] = 'Giải quyết ra sao trong trường hợp xảy ra xung đột';
$lang['del_existing_smileys'] = 'Xoá những biểu tượng vui hiện có trước khi nhập';
$lang['import_smile_pack'] = 'Nhập gói biểu tượng vui';
$lang['export_smile_pack'] = 'Tạo gói biểu tượng vui';
$lang['export_smiles'] = 'Để tạo một gói biểu tượng vui từ những hình biểu tượng vui hiện có, bạn hãy bấm %svào đây%s để tải về tập tin của gói biểu tượng vui có đuôi mở rộng là <b>*.pak</b>. Chú ý tên của tập tin này phải có phần đuôi mở rộng là <b>*.pak</b>. Sau đó hãy tạo một tập tin nén <b>*.zip</b> chứa tất cả tập tin hình của gói biểu tượng vui cộng với tập tin cấu hình <b>*.pak</b> này.';

$lang['smiley_add_success'] = 'Biểu tượng vui đã được tạo thành công.';
$lang['smiley_edit_success'] = 'Biểu tượng vui đã được cập nhật thành công.';
$lang['smiley_import_success'] = 'Gói biểu tượng vui đã được nhập thành công.';
$lang['smiley_del_success'] = 'Biểu tượng vui đã được gỡ bỏ thành công.';
$lang['Click_return_smileadmin'] = 'Bấm %svào đây%s để quay về bảng quản lý biểu tượng vui.';

$lang['Confirm_delete_smiley'] = 'Bạn có chắc chắn muốn xoá biểu tượng vui này?';

//
// User Management
//
$lang['User_admin'] = 'Bảng quản lý thành viên';
$lang['User_admin_explain'] = 'Với công cụ này, bạn có thể thay đổi thông tin cá nhân của các thành viên và những tuỳ chọn cá nhân khác của họ. Để thay đổi cấp phép cho các thành viên, hãy sử dụng công cụ cấp phép thành viên trong hệ thống.';

$lang['Look_up_user'] = 'Tra cứu thành viên';

$lang['Admin_user_fail'] = 'Không thể cập nhật thông tin cá nhân của thành viên.';
$lang['Admin_user_updated'] = 'Thông tin cá nhân của thành viên đã được cập nhật thành công.';
$lang['Click_return_useradmin'] = 'Bấm %svào đây%s để quay về bảng quản lý thành viên.';

$lang['User_delete'] = 'Xóa thành viên này';
$lang['User_delete_explain'] = 'Lựa chọn này sẽ xóa thành viên ra khỏi hệ thống và không thể phục hồi lại được.';
$lang['User_deleted'] = 'Thành viên đã được xóa thành công.';

$lang['User_status'] = 'Thành viên đang hiệu lực';
$lang['User_allowpm'] = 'Thành viên có thể gửi tin nhắn';
$lang['User_allowavatar'] = 'Thành viên có thể sử dụng hình đại diện';

$lang['Admin_avatar_explain'] = 'Trong phần này, bạn có thể xem và xoá hình đại diện hiện tại của thành viên.';

$lang['User_special'] = 'Thiết lập đặc biệt dành cho quản trị viên';
$lang['User_special_explain'] = 'Những thiết lập đặc biệt này thành viên không thể thay đổi trong phần thiết lập cá nhân của mình. Trong phần này bạn có thể thiết lập trạng thái và những tuỳ chọn cá nhân khác của họ mà những thành viên này không thể thay đổi được.';


//
// Group Management
//
$lang['Group_administration'] = 'Bảng quản lý nhóm';
$lang['Group_admin_explain'] = 'Với công cụ này bạn có thể quản lý tất cả các nhóm thành viên có trong website. Bạn có thể xoá, tạo mới và sửa những nhóm hiện có. Bạn cũng có thể chọn người điều hành nhóm, chuyển đổi đóng/mở trạng thái của nhóm và thiết lập tên cũng như giới thiệu về nhóm.';
$lang['Error_updating_groups'] = 'Có một lỗi xuất hiện trong khi cập nhật nhóm!';
$lang['Updated_group'] = 'Nhóm đã được cập nhật thành công.';
$lang['Added_new_group'] = 'Nhóm mới đã được tạo thành công.';
$lang['Deleted_group'] = 'Nhóm đã được xóa thành công.';
$lang['New_group'] = 'Tạo nhóm mới';
$lang['Edit_group'] = 'Sửa nhóm';
$lang['group_name'] = 'Tên nhóm';
$lang['group_description'] = 'Giới thiệu về nhóm';
$lang['group_moderator'] = 'Người điều hành nhóm';
$lang['group_status'] = 'Trạng thái nhóm';
$lang['group_open'] = 'Nhóm mở';
$lang['group_closed'] = 'Nhóm cố định';
$lang['group_hidden'] = 'Nhóm ẩn';
$lang['group_delete'] = 'Xóa nhóm';
$lang['group_delete_check'] = 'Xóa nhóm này';
$lang['submit_group_changes'] = 'Chấp nhận thay đổi';
$lang['reset_group_changes'] = 'Làm lại thay đổi';
$lang['No_group_name'] = 'Bạn phải xác định tên của nhóm này!';
$lang['No_group_moderator'] = 'Bạn phải xác định người điều hành nhóm!';
$lang['No_group_mode'] = 'Bạn phải xác định một trạng thái cho nhóm này!';
$lang['No_group_action'] = 'Không có yêu cầu nào được xác định!';
$lang['delete_group_moderator'] = 'Xóa người điều hành cũ của nhóm?';
$lang['delete_moderator_explain'] = 'Nếu bạn thay đổi người điều hành của nhóm, hãy đánh dấu vào lựa chọn này để xoá người điều hành cũ ra khỏi nhóm. Nếu bạn không đánh dấu chọn, người điều hành cũ sẽ trở thành một thành viên bình thường trong nhóm.';
$lang['Click_return_groupsadmin'] = 'Bấm %svào đây%s để quay về bảng quản lý nhóm.';
$lang['Select_group'] = 'Chọn một nhóm';
$lang['Look_up_group'] = 'Tra cứu nhóm';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Bảng dọn dẹp chuyên mục';
$lang['Forum_Prune_explain'] = 'Công cụ này sẽ xoá bất kì chủ đề nào không có bài viết mới được gửi trong khoảng thời gian tính bằng ngày mà bạn đã chọn. Nếu bạn không nhập vào một số thời gian xác định thì toàn bộ chủ đề trong diễn đàn sẽ bị xoá. Công cụ này sẽ không xoá những chủ đề có các bình chọn còn hiệu lực và những thông báo trong diễn đàn. Bạn sẽ phải tự mình xoá những chủ đề loại này.';
$lang['Do_Prune'] = 'Thực hiện dọn dẹp';
$lang['All_Forums'] = 'Tất cả chuyên mục';
$lang['Prune_topics_not_posted'] = 'Dọn dẹp những chủ đề không có bài trả lời trong vòng [ Ngày ]';
$lang['Topics_pruned'] = 'Những chủ đề đã được dọn dẹp';
$lang['Posts_pruned'] = 'Những bài viết đã được dọn dẹp';
$lang['Prune_success'] = 'Những chuyên mục đã được dọn dẹp thành công.';


//
// Word censor
//
$lang['Words_title'] = 'Bảng quản lý kiểm duyệt từ';
$lang['Words_explain'] = 'Với công cụ này, bạn có thể thêm mới, sửa và xoá những từ được kiểm duyệt tự động trong diễn đàn. Ngoài ra, các thành viên cũng sẽ không thể đặt tên thành viên của mình có chứa những từ kiểm duyệt này. Ký tự đại diện (*) có thể được dùng trong từ kiểm duyệt.<br /><br />Ví dụ: <b>*test*</b> sẽ bao gồm <b>xxx-test-xxx</b> như <b>detestable</b>, <b>test*</b> sẽ bao gồm <b>test-xxx</b> như <b>testing</b> và <b>*test</b> sẽ bao gồm <b>xxx-test</b> như <b>detest</b>.';
$lang['Word'] = 'Từ';
$lang['Edit_word_censor'] = 'Sửa từ';
$lang['Replacement'] = 'Nội dung thay thế';
$lang['Add_new_word'] = 'Thêm từ mới';
$lang['Update_word'] = 'Cập nhật từ';

$lang['Must_enter_word'] = 'Bạn phải nhập một từ kiểm duyệt và nội dung thay thế của nó!';
$lang['No_word_selected'] = 'Không có từ kiểm duyệt nào được chọn để sửa!';

$lang['Word_updated'] = 'Từ kiểm duyệt bạn vừa chọn đã được cập nhật thành công.';
$lang['Word_added'] = 'Từ kiểm duyệt bạn vừa chọn đã được tạo thành công.';
$lang['Word_removed'] = 'Từ kiểm duyệt bạn vừa chọn đã được xóa thành công.';

$lang['Click_return_wordadmin'] = 'Bấm %svào đây%s để quay về bảng quản lý kiểm duyệt từ.';

$lang['Confirm_delete_word'] = 'Bạn có chắc chắn muốn xoá từ kiểm duyệt này?';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Với công cụ này, bạn có thể gửi Email cho tất cả thành viên trong website hoặc tất cả thành viên trong một nhóm xác định. Để thực hiện điều này, một Email sẽ được gửi đi từ địa chỉ Email của quản trị viên đã được cung cấp trong hệ thống với cùng nội dung như nhau đến tất cả địa chỉ Email của những người nhận. Nếu bạn gửi Email cho một số lượng thành viên lớn, hãy kiên nhẫn chờ đợi sau khi gửi và đừng ngừng nạp trang này nửa chừng. Việc gửi Email cho nhiều thành viên mất nhiều thời gian là bình thường và bạn sẽ được thông báo khi quá trình gửi hoàn tất.';
$lang['Compose'] = 'Soạn Email'; 

$lang['Recipients'] = 'Người nhận'; 
$lang['All_users'] = 'Tất cả thành viên';

$lang['Email_successfull'] = 'Email của bạn đã được gửi!';
$lang['Click_return_massemail'] = 'Bấm %svào đây%s để quay về công cụ gửi Email thành viên.';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Bảng quản lý xếp hạng';
$lang['Ranks_explain'] = 'Sử dụng công cụ này, bạn có thể tạo mới, sửa, xem và xoá những xếp hạng trong hệ thống. Bạn cũng có thể tạo những xếp hạng tuỳ chọn dành cho một vài thành viên đặc biệt từ chức năng quản lý thành viên torng hệ thống thật dễ dàng.';

$lang['Add_new_rank'] = 'Thêm xếp hạng mới';

$lang['Rank_title'] = 'Tiêu đề xếp hạng';
$lang['Rank_special'] = 'Chọn làm xếp hạng đặc biệt';
$lang['Rank_minimum'] = 'Số bài viết tối thiểu';
$lang['Rank_maximum'] = 'Số bài viết tối đa';
$lang['Rank_image'] = 'Hình ảnh xếp hạng (Định vị trên thư mục hình ảnh của hệ thống)';
$lang['Rank_image_explain'] = 'Hình ảnh hiển thị tương ứng cùng với tên của từng loại xếp hạng.';

$lang['Must_select_rank'] = 'Bạn phải chọn một xếp hạng!';
$lang['No_assigned_rank'] = 'Không có xếp hạng đặc biệt nào được thiết lập!';

$lang['Rank_updated'] = 'Xếp hạng đã được cập nhật thành công.';
$lang['Rank_added'] = 'Xếp hạng đã được tạo thành công.';
$lang['Rank_removed'] = 'Xếp hạng đã được xóa thành công.';
$lang['No_update_ranks'] = 'Xếp hạng đã được xóa thành công. Tuy nhiên, những tài khoản thành viên đang sử dụng xếp hạng này chưa được cập nhật. Bạn sẽ cần phải tự mình điều chỉnh lại các xếp hạng của những tài khoản này.';

$lang['Click_return_rankadmin'] = 'Bấm %svào đây%s để quay về bảng quản lý xếp hạng.';

$lang['Confirm_delete_rank'] = 'Bạn có chắc chắn muốn xoá xếp hạng này?';

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Bảng điều khiển cấm tên thành viên';
$lang['Disallow_explain'] = 'Với công cụ này, bạn có thể chọn ra những tên thành viên mà thành viên không được phép sử dụng. Những tên thành viên bị cấm này có thể chứa ký tự đại diện *. Cần lưu ý rằng bạn không thể nhập vào bất kì tên thành viên nào đã được đăng ký. Trước hết bạn phải xoá tên thành viên đó đi rồi hãy cấm sử dụng nó.';

$lang['Delete_disallow'] = 'Xóa';
$lang['Delete_disallow_title'] = 'Loại bỏ một tên thành viên bị cấm';
$lang['Delete_disallow_explain'] = 'Bạn có thể loại bỏ một tên thành viên bị cấm bằng cách chọn tên thành viên đó từ danh sách này và bấm nào nút <b>Xoá</b> kế bên.';

$lang['Add_disallow'] = 'Thêm';
$lang['Add_disallow_title'] = 'Thêm vào một tên thành viên bị cấm';
$lang['Add_disallow_explain'] = 'Bạn có thể cấm một tên thành viên bằng cách sử dụng ký tự đại diện * cho những tên đại loại tương tự.';

$lang['No_disallowed'] = 'Không có tên thành viên nào bị cấm.';

$lang['Disallowed_deleted'] = 'Tên thành viên bị cấm đã được loại bỏ thành công.';
$lang['Disallow_successful'] = 'Tên thành viên bị cấm đã được thêm vào thành công.';
$lang['Disallowed_already'] = 'Tên thành viên bạn vừa nhập vào không thể bị cấm. Nó đã có trong danh sách tên thành viên bị cấm này rồi, hoặc trong danh sách từ kiểm duyệt hay đó là tên thành viên đã được đăng ký và đang sử dụng.';

$lang['Click_return_disallowadmin'] = 'Bấm %svào đây%s để quay về bảng điều khiển cấm tên thành viên.';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Bảng quản lý giao diện';
$lang['Styles_explain'] = 'Sử dụng công cụ này, bạn có thể tạo mới, gỡ bỏ và quản lý toàn bộ hệ thống giao diện, bao gồm giao diện và kiểu dáng hiện có đến các thành viên trong hệ thống.';
$lang['Styles_addnew_explain'] = 'Danh sách bên dưới liệt kê tất cả những kiểu dáng hiện có từ những giao diện hiện tại trong hệ thống. Những mục trong danh sách này không đòi hỏi phải cập nhật đến cơ sở dữ liệu của hệ thống. Để cài đặt một kiểu dáng, đơn giản là bạn chỉ cần bấm vào nút <b>Cài đặt</b> nằm kế bên kiểu dáng tương ứng.';

$lang['Select_template'] = 'Chọn một giao diện';

$lang['Style'] = 'Kiểu dáng';
$lang['Template'] = 'Giao diện';
$lang['Install'] = 'Cài đặt';
$lang['Download'] = 'Tải về';

$lang['Edit_theme'] = 'Sửa kiểu dáng';
$lang['Edit_theme_explain'] = 'Với bảng công cụ bên dưới, bạn có thể sửa những thông số thiết lập cho những kiểu dáng đã chọn.';

$lang['Create_theme'] = 'Tạo kiểu dáng';
$lang['Create_theme_explain'] = 'Sử dụng công cụ bên dưới, bạn có thể tạo một kiểu dáng mới từ một giao diện đã chọn. Khi bạn nhập vào những giá trị màu sắc bạn phải sử dụng ký hiệu thuộc hệ 16 (hệ thập lục phân) hay còn gọi là mã màu hex. Bạn không cần và không được đính kèm ký tự # đi trước mã màu. Ví dụ: <b>CCCCCC</b> là <b>đúng</b>, <b>#CCCCCC</b> là <b>sai</b>.';

$lang['Export_themes'] = 'Xuất kiểu dáng';
$lang['Export_explain'] = 'Trong bảng điều khiển này, bạn có thể xuất những dữ liệu của kiểu dáng từ một giao diện đã chọn. Chọn giao diện từ danh sách bên dưới và công cụ này sẽ tạo cho bạn tập tin cấu hình kiểu dáng mới và cố gắng lưu nó vào chung với thư mục giao diện trong hệ thống. Nếu quá trình lưu tập tin không được, bạn sẽ được yêu cầu tải về tập tin này về. Ngoài ra, để công cụ này lưu được tập tin bạn cần phải cấp phép quyền ghi tập tin trên server cho thư mục giao diện của hệ thống. Để biết thêm thông tin, hãy đọc lại phần hướng dẫn người dùng của phpBB.';

$lang['Theme_installed'] = 'Kiểu dáng bạn vừa chọn đã được cài đặt thành công.';
$lang['Style_removed'] = 'Giao diện bạn vừa chọn đã được xoá khỏi cơ sở dữ liệu của hệ thống. Để gỡ bỏ hoàn toàn giao diện này, bạn cần phải xoá toàn bộ tập tin của nó trong thư mục giao diện của hệ thống.';
$lang['Theme_info_saved'] = 'Thông tin về kiểu dáng từ giao diện vừa chọn đã được lưu thành công. Bây giờ bạn nên cấp phép lại tập tin <b>theme_info.cfg</b> và cả thư mục giao diện hệ thống nếu được thành chỉ cho phép đọc trên server.';
$lang['Theme_updated'] = 'Kiểu dáng bạn vừa chọn đã được cập nhật thành công. Bạn nên xuất những dữ liệu mới của kiểu dáng ngay bây giờ.';
$lang['Theme_created'] = 'Kiểu dáng đã được tạo thành công. Bây giờ bạn nên xuất kiểu dáng này ra tập tin cấu hình kiểu dáng để đảm bảo an toàn và sử dụng tại một nơi nào khác.';

$lang['Confirm_delete_style'] = 'Bạn có chắc chắn muốn xoá giao diện này?';

$lang['Download_theme_cfg'] = 'Công cụ xuất kiểu dáng không thể ghi tập tin cấu hình kiểu dáng. Hãy bấm vào nút bên dưới để tải về tập tin này về máy bằng trình duyệt của bạn. Khi đã tải về thành công, bạn có thể tải nó lên thư mục giao diện của hệ thống. Bạn có thể đóng gói tập tin này để tiện phân phối hoặc sử dụng tại bất kì nơi đâu bạn muốn.';
$lang['No_themes'] = 'Giao diện bạn vừa chọn không có kiểu dáng nào đi kèm. Để tạo một kiểu dáng mới, hãy bấm vào liên kết tạo kiểu dáng mới tương ứng từ menu bên trái.';
$lang['No_template_dir'] = 'Không thể mở thư mục giao diện của hệ thống. Nó có thể đã bị cấm đọc bởi server hay đơn giản là không tồn tại.';
$lang['Cannot_remove_style'] = 'Bạn không thể gỡ bỏ giao diện đã được chọn làm giao diện mặc định của hệ thống. Hãy thay đổi giao diện mặc định của hệ thống rồi gỡ bỏ sau!';
$lang['Style_exists'] = 'Tên giao diện bạn vừa chọn đã tồn tại trên hệ thống. Hãy quay lại và chọn một tên khác!';

$lang['Click_return_styleadmin'] = 'Bấm %svào đây%s để quay về bảng quản lý giao diện.';

$lang['Theme_settings'] = 'Thiết lập giao diện';
$lang['Theme_element'] = 'Các thành phần giao diện';
$lang['Simple_name'] = 'Tên đơn giản';
$lang['Value'] = 'Giá trị';
$lang['Save_Settings'] = 'Lưu thiết lập';

$lang['Stylesheet'] = 'Định dạng CSS';
$lang['Stylesheet_explain'] = 'Tên tập tin CSS được sử dụng cho kiểu dáng này.';
$lang['Background_image'] = 'Hình nền';
$lang['Background_color'] = 'Màu nền';
$lang['Theme_name'] = 'Tên giao diện';
$lang['Link_color'] = 'Màu liên kết';
$lang['Text_color'] = 'Màu chữ';
$lang['VLink_color'] = 'Màu liên kết đã xem';
$lang['ALink_color'] = 'Màu liên kết hiện tại';
$lang['HLink_color'] = 'Màu liên kết khi rê chuột';
$lang['Tr_color1'] = 'Màu 1 của cặp thẻ &lt;tr&gt; ... &lt;/tr&gt;';
$lang['Tr_color2'] = 'Màu 2 của cặp thẻ &lt;tr&gt; ... &lt;/tr&gt;';
$lang['Tr_color3'] = 'Màu 3 của cặp thẻ &lt;tr&gt; ... &lt;/tr&gt;';
$lang['Tr_class1'] = 'Lớp 1 của cặp thẻ &lt;tr&gt; ... &lt;/tr&gt;';
$lang['Tr_class2'] = 'Lớp 2 của cặp thẻ &lt;tr&gt; ... &lt;/tr&gt;';
$lang['Tr_class3'] = 'Lớp 3 của cặp thẻ &lt;tr&gt; ... &lt;/tr&gt;';
$lang['Th_color1'] = 'Màu 1 của cặp thẻ &lt;th&gt; ... &lt;/th&gt;';
$lang['Th_color2'] = 'Màu 2 của cặp thẻ &lt;th&gt; ... &lt;/th&gt;';
$lang['Th_color3'] = 'Màu 3 của cặp thẻ &lt;th&gt; ... &lt;/th&gt;';
$lang['Th_class1'] = 'Lớp 1 của cặp thẻ &lt;th&gt; ... &lt;/th&gt;';
$lang['Th_class2'] = 'Lớp 2 của cặp thẻ &lt;th&gt; ... &lt;/th&gt;';
$lang['Th_class3'] = 'Lớp 3 của cặp thẻ &lt;th&gt; ... &lt;/th&gt;';
$lang['Td_color1'] = 'Màu 1 của cặp thẻ &lt;td&gt; ... &lt;/td&gt;';
$lang['Td_color2'] = 'Màu 2 của cặp thẻ &lt;td&gt; ... &lt;/td&gt;';
$lang['Td_color3'] = 'Màu 3 của cặp thẻ &lt;td&gt; ... &lt;/td&gt;';
$lang['Td_class1'] = 'Lớp 1 của cặp thẻ &lt;td&gt; ... &lt;/td&gt;';
$lang['Td_class2'] = 'Lớp 2 của cặp thẻ &lt;td&gt; ... &lt;/td&gt;';
$lang['Td_class3'] = 'Lớp 3 của cặp thẻ &lt;td&gt; ... &lt;/td&gt;';
$lang['fontface1'] = 'Phông chữ 1';
$lang['fontface2'] = 'Phông chữ 2';
$lang['fontface3'] = 'Phông chữ 3';
$lang['fontsize1'] = 'Kích thước chữ 1';
$lang['fontsize2'] = 'Kích thước chữ 2';
$lang['fontsize3'] = 'Kích thước chữ 3';
$lang['fontcolor1'] = 'Màu chữ 1';
$lang['fontcolor2'] = 'Màu chữ 2';
$lang['fontcolor3'] = 'Màu chữ 3';
$lang['span_class1'] = 'Định dạng lớp 1';
$lang['span_class2'] = 'Định dạng lớp 2';
$lang['span_class3'] = 'Định dạng lớp 3';
$lang['img_poll_size'] = 'Kích thước thanh bình chọn [Pixel]';
$lang['img_pm_size'] = 'Kích thước trạng thái khung dung lượng tin nhắn [Pixel]';


//
// Install Process
//
$lang['Welcome_install'] = 'Quá trình cài đặt hệ thống phpBB';
$lang['Initial_config'] = 'Cấu hình đơn giản';
$lang['DB_config'] = 'Cấu hình cơ sở dữ liệu';
$lang['Admin_config'] = 'Cấu hình cho quản trị viên';
$lang['continue_upgrade'] = 'Khi bạn đã tải tập tin cấu hình cũ về máy, bạn có thể bấm vào nút <b>Tiếp tục nâng cấp</b> để chuyển đến quá trình nâng cấp hệ thống. Hãy tải tập tin cấu hình lên trở lại sau khi việc nâng cấp đã hoàn tất.';
$lang['upgrade_submit'] = 'Tiếp tục nâng cấp';

$lang['Installer_Error'] = 'Có một lỗi xuất hiện trong qua trình cài đặt!';
$lang['Previous_Install'] = 'Hệ thống phát hiện phiên bản phpBB trước đã được cài đặt.';
$lang['Install_db_error'] = 'Có một lỗi xuất hiện trong qua trình cập nhật cơ sở dữ liệu!';

$lang['Re_install'] = 'Bản cài đặt phpBB trước của bạn vẫn còn đang hiện hữu.<br /><br />Nếu bạn muốn cài đặt lại phpBB, hãy bấm vào nút <b>Đồng ý</b> bên dưới. Hãy cẩn thận với những gì bạn đang làm vì nó có thể phá huỷ toàn bộ dữ liệu hiện có và không có bản sao lưu nào được tự động thực hiện! Tên thành viên và mật khẩu của quản trị viên trước đây bạn dùng đăng nhập vào hệ thống sẽ được tạo mới sau khi thực hiện quá trình cài đặt lại này và sẽ không có bất kì thiết lập cấu hình nào trên hệ thống cũ còn được giữ lại.<br /><br />Hãy suy nghĩ cẩn thận trước khi đồng ý thực hiện thao tác trên!';

$lang['Inst_Step_0'] = 'Cám ơn bạn đã chọn sử dụng phpBB! Để hoàn tất quá trình cài đặt, hãy điền đầy đủ thông tin được yêu cầu bên dưới. Hãy chắc chắn gói cơ sở dữ liệu bạn chọn sử dụng hiện đang tồn tại trên server. Nếu bạn muốn cài đặt và sử dụng với cơ sở dữ liệu dùng ODBC, ví dụ như MS Access, bạn nên tạo một DSN trước khi bắt đầu cài đặt tại đây.';

$lang['Start_Install'] = 'Bắt đầu cài đặt';
$lang['Finish_Install'] = 'Hoàn tất cài đặt';

$lang['Default_lang'] = 'Ngôn ngữ mặc định';
$lang['DB_Host'] = 'Tên miền kết nối tới cơ sở dữ liệu';
$lang['DB_Name'] = 'Tên cơ sở dữ liệu';
$lang['DB_Username'] = 'Tài khoản đăng nhập cơ sở dữ liệu';
$lang['DB_Password'] = 'Mật khẩu đăng nhập cơ sở dữ liệu';
$lang['Database'] = 'Cơ sở dữ liệu';
$lang['Install_lang'] = 'Chọn ngôn ngữ cài đặt';
$lang['dbms'] = 'Loại cơ sở dữ liệu';
$lang['Table_Prefix'] = 'Tên tiền tố đầu của mỗi table trong cơ sở dữ liệu';
$lang['Admin_Username'] = 'Tên quản trị viên';
$lang['Admin_Password'] = 'Mật khẩu quản trị viên';
$lang['Admin_Password_confirm'] = 'Xác nhận mật khẩu quản trị viên';

$lang['Inst_Step_2'] = 'Tài khoản quản trị viên của bạn đã được tạo. Những bước cài đặt ban đầu đã hoàn tất. Bước tiếp theo bạn sẽ được chuyển đến bảng điều khiển của người quản trị. Hãy kiểm tra những cấu hình tổng quát của hệ thống và chắc chắn về bất kì thay đổi nào mà bạn làm. Cám ơn bạn đã chọn sử dụng phpBB!';

$lang['Unwriteable_config'] = 'Tập tin cấu hình của bạn không thể ghi được vào lúc này. Một bản sao của tập tin cấu hình này sẽ được tải về máy của bạn khi bạn bấm vào nút để tải về bên dưới. Bạn phải tải tập tin này lên chung thư mục gốc đã cài phpBB. Khi đã hoàn tất, bạn nên đăng nhập với tên thành viên và mật khẩu của quản trị viên mà bạn đã chọn ở phần trước và truy cập vào bảng điều khiển của người quản trị ngay để kiểm tra cấu hình tổng quát của hệ thống. Một liên kết đến bảng điều khiển này sẽ xuất hiện cuối mỗi trang một khi bạn đã đăng nhập vào hệ thống bằng tài khoản quản trị viên của mình. Cám ơn bạn đã chọn sử dụng phpBB!';
$lang['Download_config'] = 'Tải về tập tin cấu hình';

$lang['ftp_choose'] = 'Chọn phương pháp tải về';
$lang['ftp_option'] = '<br />Kể từ khi giao thức mở rộng FTP được sử dụng trong phiên bản PHP này, bạn có thể sử dụng tuỳ chọn đầu tiên là cố gắng tự động tải tập tin cấu hình lên server thông qua FTP.';
$lang['ftp_instructs'] = 'Bạn đã chọn truyển tải tập tin thông qua FTP bằng tài khoản tự động. Hãy nhập vào những thông tin bên dưới để thuận tiện cho quá trình này. Cần lưu ý rằng đường dẫn đến FTP phải dẫn chính xác đến thư mục cài đặt phpBB trên server và bạn có thể sử dụng giao thức FTP trên bất cứ máy client bình thường nào.';
$lang['ftp_info'] = 'Khai báo thông tin về tài khoản FTP của bạn';
$lang['Attempt_ftp'] = 'Cố gắng tự động tải tập tin cấu hình lên server thông qua FTP';
$lang['Send_file'] = 'Chỉ gửi cho tôi tập tin cấu hình và tôi sẽ tự mình tải nó lên server';
$lang['ftp_path'] = 'Đường dẫn FTP đến thư mục cài phpBB';
$lang['ftp_username'] = 'Tài khoản FTP';
$lang['ftp_password'] = 'Mật khẩu FTP';
$lang['Transfer_config'] = 'Bắt đầu truyền tải';
$lang['NoFTP_config'] = 'Việc tải tập tin cấu hình thông qua FTP không thành công. Bạn hãy tải về tập tin cấu hình này về và tự mình tải lên server.';

$lang['Install'] = 'Cài đặt';
$lang['Upgrade'] = 'Nâng cấp';


$lang['Install_Method'] = 'Chọn phương pháp cài đặt';

$lang['Install_No_Ext'] = 'Cấu hình PHP trên server của bạn không hỗ trợ loại cơ sở dữ liệu mà bạn đã chọn!';

$lang['Install_No_PCRE'] = 'Cấu hình PHP trên server của bạn không hỗ trợ <b>Perl-Compatible Regular Expressions Module for PHP</b> mà hệ thống đòi hỏi!';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Bạn đang sử dụng phiên bản phpBB mới nhất, không có cập nhật mới nào hiện tại.';
$lang['Version_not_up_to_date'] = 'Phiên bản phpBB hiện tại của bạn <b>chưa</b> được cập nhật. Những cập nhật mới đã có cho phiên bản này, hãy ghé thăm <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> để cập nhật phiên bản mới nhất.';
$lang['Latest_version_info'] = 'Phiên bản mới nhất hiện tại là <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'Bạn đang sử dụng phiên bản <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Không thể mở kết nối tới server của phpBB, lỗi được báo cáo là:<br />%s';
$lang['Socket_functions_disabled'] = 'Không thể sử dụng chức năng <b>socket</b>.';
$lang['Mailing_list_subscribe_reminder'] = 'Để biết các thông tin mới nhất về những bản cập nhật cho phpBB, tại sao bạn không <a href="http://www.phpbb.com/support/" target="_new">đăng ký vào danh sách Email của chúng tôi</a>.';
$lang['Version_information'] = 'Thông tin phiên bản';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Số lần cho phép đăng nhập';
$lang['Max_login_attempts_explain'] = 'Số lần cho phép thành viên cố gắng thực hiện đăng nhập.';
$lang['Login_reset_time'] = 'Thời gian khoá đăng nhập';
$lang['Login_reset_time_explain'] = 'Số phút mà thành viên phải chờ đợi để được phép tiếp tục đăng nhập sau khi cố gắng đăng nhập vượt quá số lần cho phép đăng nhập ở trên.';

//
// That's all Folks!
// -------------------------------------------------

?>