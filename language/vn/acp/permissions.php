<?php
/** 
*
* acp_permissions [Vietnamese]
*
* @package language
* @version $Id: permissions.php,v 1.17 2006/08/15 16:02:00 nedka Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Những thiết lập cấp phép chỉ định quyền hạn được phép thực hiện trong hệ thống và được chia thành bốn phần chủ yếu, bao gồm:</p>

		<h2>Cấp phép chung</h2>
		<p>Những thiết lập cấp phép này được sử dụng để điều khiển việc truy cập trong một cấp độ chung và áp dụng cho các mục trong hệ thống. Các loại cấp phép bao gồm: cấp phép thành viên, cấp phép nhóm, cấp phép quản trị viên và cấp phép điều hành viên chính.</p>

		<h2>Cấp phép chuyên mục</h2>
		<p>Những thiết lập cấp phép này được sử dụng để điều khiển việc truy cập trong mỗi chuyên mục. Các loại cấp phép bao gồm: cấp phép chuyên mục, cấp phép điều hành viên cho chuyên mục, cấp phép chuyên mục cho thành viên và cấp phép chuyên mục cho nhóm.</p>

		<h2>Cấp phép nhiệm vụ</h2>
		<p>Những nhiệm vụ này được sử dụng để tạo ra nhiều loại cấp phép khác nhau làm nền tảng để chỉ định quyền hạn được cấp phép. Những nhiệm vụ mặc định được dành cho công việc quản lý thường gặp trong các hệ thống lớn và nhỏ, được chia làm bốn loại riêng là: nhiệm vụ quản trị viên, nhiệm vụ thành viên, nhiệm vụ điều hành viên và nhiệm vụ chuyên mục. Bạn có thể xem/thêm/chỉnh sửa/xoá những nhiệm vụ này.</p>

		<h2>Danh sách cấp phép</h2>
		<p>Sử dụng danh sách cấp phép, bạn có thể xem toàn bộ những thiết lập cấp phép đã chỉ định cho các quản trị viên, thành viên, điều hành viên chính, điều hành viên hay chuyên mục.</p>
	
		<br />

		<p>Để biết thêm nhiều thông tin về những thiết lập này và quản lý thiết lập cấp phép trong hệ thống phpBB, bạn có thể tham khảo chương 1.5 trong tài liệu hướng dẫn trực tuyến <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Quick Start Guide</a> của chúng tôi.</p>
	',

	'ACL_NEVER'				=> 'Không bao giờ',	
	'ACL_SET'				=> 'Thiết lập cấp phép',
	'ACL_SET_EXPLAIN'		=> 'Những thiết lập cấp phép được thiết lập đơn giản bằng cách chọn <strong>Có/Không</strong> trong từng mục tương ứng. Thiết lập một tuỳ chọn là <strong>Không bao giờ</strong> cho một thành viên hay nhóm sẽ thay thế cho bất kì giá trị nào được chỉ định đến. Nếu bạn không muốn chỉ định cấp phép trong một tuỳ chọn nào dành cho thành viên hay nhóm, hãy chọn <strong>Không</strong>. Nếu các giá trị được chỉ định trong tuỳ chọn đã có trong thiết lập cá nhân của thành viên, hãy chọn <strong>Không bao giờ</strong> để sử dụng thiết lập của thành viên. Tất cả các đối tượng được đánh dấu chọn trong ô kiểm phía trước sẽ được copy thiết lập cấp phép giống như thiết lập cấp phép bạn đã chỉ định.',
	'ACL_SETTING'			=> 'Thiết lập',

	'ACL_TYPE_A_'			=> 'Cấp phép quản trị viên',
	'ACL_TYPE_F_'			=> 'Cấp phép chuyên mục',
	'ACL_TYPE_M_'			=> 'Cấp phép điều hành viên',
	'ACL_TYPE_U_'			=> 'Cấp phép thành viên',

	'ACL_TYPE_GLOBAL_A_'	=> 'Cấp phép quản trị viên',
	'ACL_TYPE_GLOBAL_U_'	=> 'Cấp phép thành viên',
	'ACL_TYPE_GLOBAL_M_'	=> 'Cấp phép điều hành viên chính',
	'ACL_TYPE_LOCAL_M_'		=> 'Cấp phép điều hành viên',
	'ACL_TYPE_LOCAL_F_'		=> 'Cấp phép chuyên mục',

	'ACL_NO'				=> 'Không',	
	'ACL_VIEW'				=> 'Xem thiết lập cấp phép',
	'ACL_VIEW_EXPLAIN'		=> 'Với công cụ này, bạn có thể toàn bộ thiết lập cấp phép đã chỉ định cho thành viên/nhóm. Ô màu đỏ cho biết thành viên/nhóm đó chưa được thiết lập cấp phép và ngược lại, ô màu xanh lá tức là thành viên/nhóm đó đã được thiết lập cấp phép.',
	'ACL_YES'				=> 'Có',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉ định nhũng quyền hạn của người quản trị đối với thành viên và nhóm. Tất cả thành viên được cấp phép quản trị viên đều có thể xem bảng điều khiển của quản trị viên.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉ định thành viên hay nhóm sẽ trở thành điều hành viên của chuyên mục. Để chỉ định thành viên được phép truy cập chuyên mục, chỉ định quyền hạn điều hành viên chính hay quản trị viên, hãy sử dụng trang cấp phép tương ứng.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Với công cụ này, bạn có thể thay đổi những thành viên và nhóm nào có thể truy cập vào chuyên mục. Để chỉ định điều hành viên hay quản trị viên, hãy sử dụng trang cấp phép tương ứng.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉ định quyền hạn điều hành viên chính cho các thành viên hay nhóm. Những điều hành viên chính đều giống với các điều hành viên bình thường ngoại trừ việc họ có thể truy cập bất cứ chuyên mục nào.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể chỉ định những cấp phép chuyên mục dành cho nhóm.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Với công cụ này, bạn có thể chỉ định những thiết lập cấp phép chung cho cấp phép thành viên - nhóm, cấp phép điều hành viên chính và quản trị viên. Thiết lập cấp phép thành viên ví dụ như sử dụng hình đại diện, gửi tin nhắn ... Thiết lập cấp phép điều hành viên chính và quản trị viên là bí mật. Những thiết lập cấp phép thành viên riêng lẻ ít khi cần thay đổi, phương pháp chúng tôi khuyên bạn nên dùng là đặt những thành viên vào chung trong nhóm và thiết lập cấp phép cho nhóm sẽ dễ dàng hơn.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Với công cụ này, bạn có thể quản lý những nhiệm vụ cho thiết lập cấp phép quản trị viên. Những nhiệm vụ là các thiết lập cấp phép có ảnh hưởng, nếu bạn thay đổi một loại nhiệm vụ đã được chỉ định thì cũng đồng nghĩa với việc bạn thay đổi thiết lập cấp phép.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Với công cụ này, bạn có thể quản lý những nhiệm vụ cho thiết lập cấp phép chuyên mục. Những nhiệm vụ là các thiết lập cấp phép có ảnh hưởng, nếu bạn thay đổi một loại nhiệm vụ đã được chỉ định thì cũng đồng nghĩa với việc bạn thay đổi thiết lập cấp phép.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Với công cụ này, bạn có thể quản lý những nhiệm vụ cho thiết lập cấp phép điều hành viên. Những nhiệm vụ là các thiết lập cấp phép có ảnh hưởng, nếu bạn thay đổi một loại nhiệm vụ đã được chỉ định thì cũng đồng nghĩa với việc bạn thay đổi thiết lập cấp phép.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Với công cụ này, bạn có thể quản lý những nhiệm vụ cho thiết lập cấp phép thành viên. Những nhiệm vụ là các thiết lập cấp phép có ảnh hưởng, nếu bạn thay đổi một loại nhiệm vụ đã được chỉ định thì cũng đồng nghĩa với việc bạn thay đổi thiết lập cấp phép.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể chỉ định cấp phép chuyên mục dành cho thành viên.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉ định những thiết lập cấp phép chung cho thành viên - cấp phép thành viên, cấp phép điều hành viên chính và quản trị viên. Thiết lập cấp phép thành viên ví dụ như sử dụng hình đại diện, gửi tin nhắn ... Thiết lập cấp phép điều hành viên chính và quản trị viên là bí mật. Để thay đổi những thiết lập này cho số lượng nhiều thành viên, bạn hãy sử dụng trang thiết lập cấp phép nhóm. Những thiết lập cấp phép thành viên riêng lẻ ít khi cần thay đổi, phương pháp chúng tôi khuyên bạn nên dùng là đặt những thành viên vào chung trong nhóm và thiết lập cấp phép cho nhóm sẽ dễ dàng hơn.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép quản trị viên đã được chỉ định cho thành viên/nhóm vừa chọn',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép điều hành viên chính đã được chỉ định cho thành viên/nhóm vừa chọn',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép chuyên mục đã được chỉ định cho thành viên/nhóm và chuyên mục vừa chọn',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép điều hành viên đã được chỉ định cho thành viên/nhóm và chuyên mục vừa chọn',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép thành viên đã được chỉ định cho thành viên/nhóm vừa chọn',

	'ADD_GROUPS'				=> 'Thêm nhóm',
	'ADD_PERMISSIONS'			=> 'Thêm thiết lập cấp phép',
	'ADD_USERS'					=> 'Thêm thành viên',
	'ALL_GROUPS'				=> 'Chọn tất cả nhóm',
	'ALL_NEVER'					=> 'Chọn tất cả không bao giờ',	
	'ALL_NO'					=> 'Chọn tất cả không',
	'ALL_USERS'					=> 'Chọn tất cả thành viên',
	'ALL_YES'					=> 'Chọn tất cả có',
	'APPLY_ALL_PERMISSIONS'		=> 'Áp dụng tất cả thiết lập cấp phép',
	'APPLY_PERMISSIONS'			=> 'Áp dụng thiết lập cấp phép',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Thiết lập cấp phép và nhiệm vụ được xác định cho mục này sẽ chỉ được áp dụng cho mục này và những mục bạn đã đánh dấu chọn.',
	'AUTH_UPDATED'				=> 'Thiết lập cấp phép đã được cập nhật thành công',

	'CREATE_ROLE'				=> 'Tạo nhiệm vụ mới',
	'CREATE_ROLE_FROM'			=> 'Sử dụng thiết lập từ ...',
	'CUSTOM'					=> 'Tuỳ chọn ...',

	'DEFAULT'					=> 'Mặc định',
	'DELETE_ROLE'				=> 'Xoá vài trò',
	'DELETE_ROLE_CONFIRM'		=> 'Bạn có chắc chắn muốn gỡ bỏ nhiệm vụ này? Những mục đã được chỉ định nhiệm vụ này sẽ không bị mất những thiết lập cấp phép.',
	'DISPLAY_ROLE_ITEMS'		=> 'Xem những mục sử dụng nhiệm vụ này',

	'EDIT_PERMISSIONS'			=> 'Sửa thiết lập cấp phép',
	'EDIT_ROLE'					=> 'Sửa nhiệm vụ',

	'GROUPS_NOT_ASSIGNED'		=> 'Không có nhóm nào được chỉ định nhiệm vụ này',

	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Bạn có thể chọn nhiều hơn một chuyên mục',
	'LOOK_UP_GROUP'				=> 'Tra cứu nhóm',
	'LOOK_UP_USER'				=> 'Tra cứu thành viên',

	'MANAGE_GROUPS'		=> 'Quản lý nhóm',
	'MANAGE_USERS'		=> 'Quản lý thành viên',

	'NO_AUTH_SETTING_FOUND'		=> 'Thiết lập cấp phép không xác định.',
	'NO_ROLE_ASSIGNED'			=> 'Không có nhiệm vụ nào được chỉ định ...',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Thiết lập nhiệm vụ này sẽ không thay đổi những thiết lập cấp phép. Nếu bạn muốn không thiết lập/gỡ bỏ tất cả thiết lập cấp phép, bạn nên bấm vào liên kết <strong>Chọn tất cả không</strong>.',
	'NO_ROLE_AVAILABLE'			=> 'Không có nhiệm vụ nào hiện tại',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Bạn chưa nhập tên của nhiệm vụ.',
	'NO_ROLE_SELECTED'			=> 'Không thể tìm thấy nhiệm vụ.',
	'NO_USER_GROUP_SELECTED'	=> 'Bạn chưa chọn bất kì thành viên hay nhóm nào.',

	'ONLY_FORUM_DEFINED'	=> 'Bạn chỉ có thể chỉ định những chuyên mục trong danh sách chọn. Bạn cũng phải chọn ít nhất là một thành viên hay một nhóm.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Những thiết lập cấp phép và nhiệm vụ sẽ được áp dụng đến tất cả đối tượng mà bạn đã chọn',
	'PLUS_SUBFORUMS'				=> '+ Chuyên mục con',

	'REMOVE_PERMISSIONS'			=> 'Gỡ bỏ thiết lập cấp phép',
	'REMOVE_ROLE'					=> 'Gỡ bỏ nhiệm vụ',
	'ROLE'							=> 'Nhiệm vụ',
	'ROLE_ADD_SUCCESS'				=> 'Nhiệm vụ mới đã được thêm vào thành công.',
	'ROLE_ASSIGNED_TO'				=> 'Thành viên/nhóm thành viên đã được chỉ định thành %s',
	'ROLE_DELETED'					=> 'Nhiệm vụ đã được gỡ bỏ thành công.',
	'ROLE_DESCRIPTION'				=> 'Giới thiệu về nhiệm vụ',

	'ROLE_DESCRIPTION_ADMIN_FORUM'		=> 'Có thể truy cập quản lý chuyên mục và thiết lập cấp phép chuyên mục.',
	'ROLE_DESCRIPTION_ADMIN_FULL'		=> 'Có thể sử dụng tất cả chức năng của quản trị viên trong chuyên mục này.<br />Không khuyến cáo sử dụng.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Có thể sử dụng hầu hết chức năng của quản trị viên nhưng không được phép sử dụng các công cụ thiết lập server hay hệ thống.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Có thể quản lý nhóm và thành viên: Thay đổi thiết lập cấp phép, thiết lập giá trị, quản lý bảng cấm và xếp hạng.',
	'ROLE_DESCRIPTION_FORUM_BOT'		=> 'Nhiệm vụ này được khuyến cáo nên sử dụng cho Bot và các máy tìm kiếm.',
	'ROLE_DESCRIPTION_FORUM_FULL'		=> 'Có thể sử dụng tất cả chức năng trong chuyên mục, bao gồm cả tạo thông báo và chú ý và không bị giới hạn thời gian gửi bài giữa hai bài viết.<br />Không khuyến cáo sử dụng cho thành viên bình thường.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Có thể sử dụng một vài chức năng trong chuyên mục nhưng không thể đính kèm tập tin hay sử dụng biểu tượng bài viết.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Không thể nhìn thấy hay truy cập vào chuyên mục.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Có thể sử dụng hầu hết chức năng trong chuyên mục như đính kèm tập tin nhưng chủ đề và bài viết gửi đến phải được chấp nhận bởi người điều hành.',
	'ROLE_DESCRIPTION_FORUM_POLLS'		=> 'Giống như truy cập tiêu chuẩn nhưng có thể tạo bình chọn.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Có thể xem chuyên mục nhưng không thể tạo chủ đề mới hay trả lời bài viết.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Có thể sử dụng hầu hết chức năng trong chuyên mục như đính kèm tập tin nhưng không thể khoá hay xoá những chủ đề của mình và không thể tạo bình chọn.',
	'ROLE_DESCRIPTION_MOD_FULL'			=> 'Có thể sử dụng tất cả chức năng của điều hành viên bao gồm cả bảng cấm.',
	'ROLE_DESCRIPTION_MOD_QUEUE'		=> 'Có thể sử dụng chức năng của điều hành viên để kiểm tra và sửa bài viết, ngoài ra không có gì khác.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'		=> 'Chỉ có thể sử dụng các thao tác chủ đề đơn giản. Không thể gửi cảnh cáo hay sử dụng các chức năng điều hành viên khác.',
	'ROLE_DESCRIPTION_MOD_STANDARD'		=> 'Chỉ có thể sử dụng hầu hết chức năng của điều hành viên nhưng không thể cấm thành viên hay thay đổi tác giả bài viết.',
	'ROLE_DESCRIPTION_USER_FULL'		=> 'Có thể sử dụng tất cả chức năng trong chuyên mục sẵn có dành cho thành viên bao gồm cả thay đổi tên thành viên hay không bị giới hạn thời gian gửi bài giữa hai bài viết.<br />Không khuyến cáo sử dụng.',
	'ROLE_DESCRIPTION_USER_LIMITED'		=> 'Có thể sử dụng một vài chức năng của thành viên nhưng không được phép đính kèm tập tin, gửi Email hay tin nhắn nhanh.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Hạn chế chức năng thiết lập và không được phép sử dụng hình đại diện.',
	'ROLE_DESCRIPTION_USER_NOPM'		=> 'Hạn chế chức năng thiết lập và không được phép sử dụng tin nhắn.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Có thể sử dụng hầu hết chức năng của thành viên nhưng không thể thay đổi tên thành viên hay bị giới hạn thời gian gửi bài giữa hai bài viết.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Bạn có thể nhập vào một giới thiệu ngắn về nhiệm vụ này có vai trò như thế nào trong hệ thống. Nội dung bạn nhập vào đây cũng sẽ được hiển thị trong trang thiết lập cấp phép.',
	'ROLE_DETAILS'					=> 'Thông tin nhiệm vụ',
	'ROLE_EDIT_SUCCESS'				=> 'Nhiệm vụ đã được chỉnh sửa thành công.',
	'ROLE_NAME'						=> 'Tên nhiệm vụ',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Nhiệm vụ được đặt tên là <strong>%s</strong> đã được sử dụng cho loại cấp phép xác định.',
	'ROLE_NOT_ASSIGNED'				=> 'Nhiệm vụ chưa được chỉ định cho bất cứ thành viên nào.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Chuyên mục bạn vừa chọn không tồn tại',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Nhóm bạn vừa chọn không tồn tại',
	'SELECTED_USER_NOT_EXIST'		=> 'Thành viên bạn vừa chọn không tồn tại',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Chuyên mục bạn chọn tại đây sẽ chọn toàn bộ các chuyên mục con bên trong',
	'SELECT_ROLE'					=> 'Chọn nhiệm vụ ...',
	'SELECT_TYPE'					=> 'Chọn loại',
	'SET_PERMISSIONS'				=> 'Thiết lập cấp phép',
	'SET_ROLE_PERMISSIONS'			=> 'Thiết lập cấp phép nhiệm vụ',
	'SET_USERS_PERMISSIONS'			=> 'Thiết lập cấp phép thành viên',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Thiết lập cấp phép chuyên mục cho thành viên',

	'TRACE_DEFAULT'					=> 'Mặc định, mọi thiết lập cấp phép đều được chọn là <strong>Không</strong>. Những thiết lập cấp phép sẽ thay thế cho những thiết lập khác.',
	'TRACE_FOR'						=> 'Theo dõi',
	'TRACE_GLOBAL_SETTING'			=> '%s (Chung)',
	'TRACE_GROUP_NO_TOTAL_NO'		=> 'Thiết lập cấp phép của nhóm này đã được chọn là <strong>Không bao giờ</strong> giống như tổng số giá trị cũ vì thế giá trị cũ được giữ lại.',
	'TRACE_GROUP_NO_TOTAL_UNSET'	=> 'Thiết lập cấp phép của nhóm này đã được chọn là <strong>Không bao giờ</strong> cho tổng số giá trị mới bởi vì nó chưa được thiết lập.',
	'TRACE_GROUP_NO_TOTAL_YES'		=> 'Thiết lập cấp phép của nhóm này đã được chọn là <strong>Không bao giờ</strong> sẽ thay thế cho tổng số giá trị <strong>Có</strong> trở thành giá trị <strong>Không bao giờ</strong> cho thành viên này.',
	'TRACE_GROUP_UNSET'				=> 'Thiết lập cấp phép <strong>Không</strong> cho nhóm này vì thế tổng số giá trị cũ được giữ lại.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Thiết lập cấp phép của nhóm này đã được chọn là <strong>Có</strong> nhưng tổng số giá trị <strong>Không bao giờ</strong> không thể được thay thế.',
	'TRACE_GROUP_YES_TOTAL_UNSET'	=> 'Thiết lập cấp phép của nhóm này đã được chọn là <strong>Có</strong> cho tổng số giá trị mới bởi vì nó chưa được thiết lập.',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Thiết lập cấp phép của nhóm này đã được chọn là <strong>Có</strong> và tổng số thiết lập cấp phép đã được chọn là <strong>Có</strong>, vì thế tổng số giá trị được giữ lại.',
	'TRACE_PERMISSION'				=> 'Theo dõi cấp phép - %s',
	'TRACE_SETTING'					=> 'Thiết lập theo dõi',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Thiết lập cấp phép thành viên trong chuyên mục độc lập được đánh giá là <strong>Có</strong> nhưng tổng số thiết lập cấp phép được chọn là <strong>Có</strong>, vì thế tổng số giá trị được giữ lại. %sTheo dõi cấp phép chung%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Thiết lập cấp phép thành viên trong chuyên mục độc lập được đánh giá là <strong>Có</strong> thay thế cho giá trị hiện tại là <strong>Không bao giờ</strong>. %sTheo dõi cấp phép chung%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Thiết lập cấp phép thành viên trong chuyên mục độc lập được đánh giá là <strong>Không bao giờ</strong> không ảnh hưởng đến thiết lập cấp phép riêng. %sTheo dõi cấp phép chung%s',
	'TRACE_USER_FOUNDER'			=> 'Đây là thành viên sáng lập, vì thế những thiết lập quản trị viên được thiết lập mặc định là <strong>Có</strong>.',
	'TRACE_USER_KEPT'				=> 'Thiết lập cấp phép của thành viên này là <strong>Không</strong> vì thế tổng số giá trị cũ được giữ lại.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'Thiết lập cấp phép của thành viên này đã được chọn là <strong>Không bao giờ</strong> và tổng số giá trị đã được chọn là <strong>Không bao giờ</strong>, vì thế không có mục nào được thay đổi.',
	'TRACE_USER_NEVER_TOTAL_NO'		=> 'Thiết lập cấp phép của thành viên này đã được chọn là <strong>Không bao giờ</strong> cho tổng số giá trị bởi vì nó đã được chọn là <strong>Không</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'Thiết lập cấp phép của thành viên này đã được chọn là <strong>Không bao giờ</strong> và sẽ thay thế cho giá trị <strong>Có</strong> trước đó.',
	'TRACE_USER_NO_TOTAL_NO'		=> 'Thiết lập cấp phép của thành viên này là <strong>Không</strong> và tổng số giá trị đã được chọn là <strong>Không</strong> vì thế giá trị mặc định là <strong>Không bao giờ</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'Thiết lập cấp phép của thành viên này đã được chọn là <strong>Có</strong> nhưng tổng số giá trị <strong>Không bao giờ</strong> không thể được thay thế.',
	'TRACE_USER_YES_TOTAL_NO'		=> 'Thiết lập cấp phép của thành viên này đã được chọn là <strong>Có</strong> cho tổng số giá trị bởi vì nó chưa được thiết lập.',
	'TRACE_USER_YES_TOTAL_YES'		=> 'Thiết lập cấp phép của thành viên này đã được chọn là <strong>Có</strong> và tổng số giá trị đã được chọn là <strong>Có</strong>, vì thế không có mục nào được thay đổi.',
	'TRACE_WHO'						=> 'Ai?',
	'TRACE_TOTAL'					=> 'Tổng số',

	'USERS_NOT_ASSIGNED'			=> 'Không có thành viên nào được chỉ định nhiệm vụ này',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'là một thành viên của những nhóm mặc định dưới đây',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'là một thành viên của những nhóm tuỳ chọn dưới đây',

	'VIEW_ASSIGNED_ITEMS'	=> 'Xem những mục đã chỉ định',
	'VIEW_PERMISSIONS'		=> 'Xem thiết lập cấp phép',

	'WRONG_PERMISSION_TYPE'	=> 'Loại thiết lập cấp phép sai đã được chọn',
));

?>