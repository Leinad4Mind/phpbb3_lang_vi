<?php
/** 
*
* help_faq [Vietnamese]
*
* @package language
* @version $Id: help_faq.php,v 1.09 2006/08/15 13:28:00 nedka Exp $
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
*/

// DEVELOPERS PLEASE NOTE 
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Những câu hỏi về đăng ký thành viên và đăng nhập'
	),
	array(
		0 => 'Tại sao tôi không thể đăng nhập được?',
		1 => 'Bạn đã đăng ký chưa? Thật ra, bạn phải đăng ký lần đầu trước khi bắt đầu có thể đăng nhập. Bạn có bị cấm tham gia vào website? Một thông báo sẽ hiện ra nếu bạn ở trong trường hợp này. Nếu như thế, bạn nên liên hệ với người chủ của website này hay quản trị viên của diễn đàn để tìm hiểu lý do tại sao. Nếu bạn đã đăng ký và bạn không hề bị cấm tham gia vào website mà vẫn không đăng nhập được, hãy kiểm tra lại tên thành viên và mật khẩu của mình. Thông thường đây chính là vấn đề thường gặp. Nếu vẫn không phải như thế, hãy liên hệ với người quản trị của diễn đàn, có thể họ đã cấu hình sai hệ thống.'
	),
	array(
		0 => 'Tại sao tôi cần phải đăng ký làm thành viên?',
		1 => 'Bạn có thể không cần phải làm như thế nhưng đôi khi bạn cần phải đăng ký mới có thể gửi bài trong diễn đàn, tuỳ theo yêu cầu của người quản trị. Tuy nhiên, việc đăng ký làm thành viên sẽ giúp bạn sử dụng được hết tất cả các chức năng mà hệ thống chỉ dành cho các thành viên đã đăng ký và không dành cho khách sử dụng, ví dụ như hình đại diện, gửi tin nhắn, gửi Email đến các thành viên khác, tham gia vào các nhóm thành viên ... Bạn chỉ mất vài phút để hoàn tất việc đăng ký, vì vậy hãy đăng ký làm thành viên của chúng tôi.'
	),
	array(
		0 => 'Tại sao tôi thường xuyên bị thoát ra khỏi hệ thống?',
		1 => 'Nếu bạn không đánh dấu chọn vào lựa chọn <em>Đăng nhập tự động mỗi lần ghé thăm</em> khi bạn đăng nhập, hệ thống sẽ chỉ cho phép bạn đăng nhập vào trong thời điểm hiện tại. Điều này sẽ giúp ngăn cản việc lạm dụng tài khoản của bạn bởi một ai đó. Để vẫn luôn trong trạng thái đã đăng nhập, hãy đánh dấu vào lựa chọn trên một lần trong khi đăng nhập. Điều này không được khuyến cáo sử dụng nếu bạn đang truy nhập vào hệ thống từ một máy tính dùng chung, ví dụ như trong thư viện, tiệm Internet Cafe, trường học ...'
	),
	array(
		0 => 'Làm sao để tên thành viên của tôi không xuất hiện trong danh sách các thành viên đang trực tuyến?',
		1 => 'Trong phần <strong>Thiết lập cá nhân</strong> của mình, bạn hãy tìm đến lựa chọn <em>Ẩn trạng thái trực tuyến của tôi</em>. Nếu bạn chọn <em>Đồng ý</em>, bạn sẽ chỉ xuất hiện trực tuyến đối với người quản trị của diễn đàn và với chính mình. Bạn sẽ được tính như là một thành viên ẩn.'
	),
	array(
		0 => 'Tôi đã quên mật khẩu của mình!',
		1 => 'Đừng lo lắng! Tuy mật khẩu của bạn không thể phục hồi lại được nhưng có thể được tạo lại. Để làm điều này, trong trang đăng nhập, bạn hãy bấm vào liên kết <u>Quên mật khẩu</u>. Hãy làm theo hướng dẫn của công cụ và bạn sẽ có thể tham gia trở lại vào website.'
	),
	array(
		0 => 'Tôi đã đăng ký nhưng không thể đăng nhập được!',
		1 => 'Trước tiên, hãy kiểm tra xem bạn đã nhập tên thành viên và mật khẩu của mình chính xác chưa. Nếu tất cả đều chính xác thì có thể bạn rơi vào một trong hai trường hợp sau: Nếu yêu cầu COPPA được bật trong website này và bạn đã bấm vào liên kết <u>Tôi đồng ý các điều khoản trên và tôi từ 13 tuổi trở xuống</u> khi đăng ký thì bạn cần phải làm theo những hướng dẫn đã được gửi sau đó. Nếu bạn không rơi vào trường hợp trên thì có thể tài khoản của bạn chưa được kích hoạt. Một vài diễn đàn bắt buộc tài khoản thành viên phải được kích hoạt sau khi đăng ký thành công, có thể bạn được yêu cầu tự làm việc này hoặc chờ người quản trị của diễn đàn kích hoạt trước khi có thể đăng nhập vào hệ thống. Khi bạn đăng ký thành công bạn sẽ được thông báo có phải kích hoạt tài khoản của mình hay không. Nếu bạn nhận được một Email yêu cầu kích hoạt thì hãy làm theo hướng dẫn trong đó. Nếu bạn không nhận được Email nào, có thể bạn đã cung cấp sai địa chỉ Email của mình khi đăng ký. Lý do của việc bắt buộc phải kích hoạt tài khoản này là để hạn chế sự lạm dụng của một vài người muốn quấy phá hệ thống. Nếu bạn chắc chắn đã nhập đúng địa chỉ Email của mình và không còn một lý do nào khác, hãy liên hệ với người quản trị của diễn đàn.'
	),
	array(
		0 => 'Tôi đã từng đăng ký trước đây nhưng bây giờ không thể đăng nhập được nữa!',
		1 => 'Hầu hết những nguyên nhân thường gặp về điều này là: Bạn đã nhập sai tên thành viên hay mật khẩu của mình, hoặc là cả hai. Hãy kiểm tra lại Email mà bạn nhân được lần đầu khi đăng ký làm thành viên. Cũng có thể người quản trị đã xoá tài khoản của bạn ra khỏi hệ thống vì một lý do nào đó. Nếu là trường hợp này thì có lẽ bạn đã không tham gia gửi bài vào diễn đàn trong một thời gian dài chăng? Thông thường một vài diễn đàn sẽ xoá định kì các tài khoản thành viên không hoạt động trong một thời gian dài để giảm bớt dung lượng của cơ sở dữ liệu trong hệ thống. Hãy cố gắng đăng ký trở lại và tham gia nhiều hơn vào diễn đàn!'
	),
	array(
		0 => '--',
		1 => 'Nhũng câu hỏi về thiết lập cá nhân của thành viên'
	),
	array(
		0 => 'Làm sao để tôi thay đổi thiết lập cá nhân của mình?',
		1 => 'Tất cả thiết lập cá nhân của bạn nếu bạn đã đăng ký làm thành viên đều được lưu giữ trong cơ sở dữ liệu của hệ thống. Để thay đổi chúng, bạn hãy bấm vào liên kết <u>Thiết lập cá nhân</u> trên hệ thống. Liên kết này thường hiện ra ở đầu trang, trên menu hoặc một chỗ khác tuỳ thuộc vào giao diện mà hệ thống sử dụng. công cụ này sẽ giúp bạn thay đổi tất cả thiết lập cá nhân của mình.'
	),
	array(
		0 => 'Thời gian trên hệ thống không chính xác!',
		1 => 'Thòi gian trên hệ thống hầu hết đều chính xác. Tuy nhiên, có thể bạn đang nhìn thấy thời gian hiển thị trong một múi giờ khác không phải giờ ở nơi bạn đang ở. Nếu rơi vào tình huống này, bạn nên thay đổi lại múi giờ trong phần thiết lập cá nhân của mình cho phù hợp với nơi bạn đang ở, ví dụ như <strong>London, Paris, New York, Sydney ...</strong> Cần lưu ý rằng việc thay đổi thiết lập múi giờ cũng giống như những thiết lập cá nhân khác chỉ dành cho những thành viên đã đăng ký. Vì thế, nếu bạn chưa đăng ký làm thành viên của chúng tôi thì đây là một dịp tốt để làm nếu bạn thích như thế.'
	),
	array(
		0 => 'Tôi đã thay đổi múi giờ nhưng thời gian vẫn chạy sai!',
		1 => 'Nếu bạn đã chắc chắn thay đổi thiết lập múi giờ chính xác với nơi mình đang ở mà thời gian thì vẫn cứ chạy sai, câu trả lời là có thể bạn đã rơi vào giờ mùa hè (<em>Daylight Savings Time</em> hay <em>Summer Time</em> như được gọi ở Mỹ và một số nơi khác). Hệ thống này không được thiết kế để có thể tự động thay đổi giữa giờ tiêu chuẩn và giờ mùa hè. Vì thế, trong những tháng màu hè, có thể bạn sẽ thấy thời gian trên hệ thống chạy sai lệch trong giới hạn một giờ so với thời gian thực.'
	),
	array(
		0 => 'Ngôn ngữ của tôi không có trong danh sách hỗ trợ!',
		1 => 'Nguyên nhân chủ yếu của điều này là quản trị viên chưa cài đặt gói ngôn ngữ mà bạn dùng vào hệ thống hay đơn giản là chưa từng có ai phiên dịch hệ thống sang ngôn ngữ của bạn. Hãy cố gắng yêu cầu người quản trị cài đặt gói ngôn ngữ của bạn vào hệ thống nếu nó sẵn có hay nếu chưa có, bạn có thể đề nghị cùng tham gia phiên dịch hệ thống sang ngôn ngữ của bạn. Bạn có thể tìm hiểu nhiều thông tin về các gói ngôn ngữ cho hệ thống này tại website của phpBB Group có ở cuối trang.'
	),
	array(
		0 => 'Làm sao để hiển thị hình ảnh bên dưới tên thành viên của tôi?',
		1 => 'Có hai loại hình ảnh được hiển thị đưới tên thành viên trong phần xem bài viết của diễn đàn. Đầu tiên là hình ảnh kết hợp với xếp hạng hiện tại của bạn trong diễn đàn, thông thường chúng là những hình ngôi sao hay hình khối hiển thị tuỳ thuộc vào số bài viết mà bạn đã gửi trong diễn đàn hay trạng thái, vị trí, công việc ... của bạn trong website. Bên dưới hình xếp hạng là một hình lớn hơn, được gọi là hình đại diện. Đây là những hình ảnh thể hiện cá tính riêng của mỗi thành viên. Nếu người quản trị cho phép sử dụng hình đại diện trên diễn đàn, bạn có thể tự do thay đổi chúng và lựa chọn cách thức sử dụng phù hợp. Nếu bạn không thể sử dụng được hình đại diện trên diễn đàn vì đây là quyết định của người quản trị thì hãy hỏi họ lý do tại sao.'
	),
	array(
		0 => 'Làm sao để thay đổi xếp hạng của tôi?',
		1 => 'Bạn không thể thay đổi trực tiếp hình xếp hạng của mình xuất hiện dưới tên thành viên trong phần xem bài viết và trong phần thông tin cá nhân của mình hay ở bất cứ đâu tuỳ thuộc vào giao diện mà bạn đang sử dụng. Hầu hết các diễn đàn sử dụng xếp hạng thành viên để tượng trưng cho sự tích cực của bạn thông qua số lượng bài viết mà bạn đã gửi trong diễn đàn hay dùng để xác định một vài thành viên đặc biệt. Ví dụ, các quản trị viên và điều hành viên có thể có những xếp hạng đặc biệt tương ứng và không lệ thuộc vào số lượng bài viết của họ. Xin đừng lạm dụng gửi nhiều bài viết vô ích và nhảm nhí chỉ để mong tăng xếp hạng thành viên của bạn bởi vì đơn giản các quản trị viên hay điều hành viên sẽ chỉ cần hạ thấp số lượng bài viết của bạn xuống hoặc có một cách xử lí nghiêm khắc hơn dành cho bạn.'
	),
	array(
		0 => 'Khi tôi bấm vào liên kết Email của một thành viên, tôi được yêu cầu phải đăng nhập!',
		1 => 'Xin lỗi, chỉ có những thành viên đã đăng ký mới được phép gửi Email đến mọi người trong hệ thống từ công cụ gửi Email nếu người quản trị đã kích hoạt công cụ này. Điều này nhằm để ngăn cản những kẻ quấy phá ẩn danh dùng công cụ gửi Email của hệ thống để gây rối.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về gửi bài'
	),
	array(
		0 => 'Làm sao để tôi tạo một chủ đề mới trong một chuyên mục?',
		1 => 'Thật dễ dàng! Hãy bấm vào nút tạo chủ đề mới trong phần xem chuyên mục hay xem chủ đề. Bạn có thể được yêu cầu phải đăng nhập trước khi có thể tiếp tục gửi bài. Những chức năng của công cụ gửi bài mà bạn có thể sử dụng được liệt kêt cuối mỗi trang trong phần xem chuyên mục hay xem chủ đề. Ví dụ như: <em>Bạn có thể tạo chủ đề mới trong chuyên mục này, Bạn có thể tham gia bình chọn trong chuyên mục này ...</em>'
	),
	array(
		0 => 'Làm sao để tôi sửa hay xoá một bài viết?',
		1 => 'Nếu bạn không phải là người quản trị của diễn đàn hay người điều hành trong chuyên mục đó thì bạn chỉ có thể sửa hay xoá những bài viết của chính mình. Bạn có thể sửa một bài viết vì lí do chưa hoàn chỉnh, sai chính tả ... bằng cách bấm vào nút <strong>Sửa</strong> trong bài viết tương ứng. Nếu có một ai đó đã trả lời bài viết này, bạn sẽ thấy một dòng thông báo hiển thị thời gian và tổng số lần mà bạn đã sửa ngay bên dưới bài viết đó. Thông báo này sẽ không xuất hiện nếu chưa có ai trả lời bài viết ngay sau đó hoặc nếu các quản trị viên hay điều hành viên sửa bài viết này. Họ có thể sẽ để lại một dòng thông báo trong bài viết về lí do sửa bài của bạn. Những thành viên bình thường sẽ không được phép xoá một bài viết đã được trả lời dù rằng đó là bài viết của họ.'
	),
	array(
		0 => 'Làm sao để tôi đính kèm chữ ký cá nhân sau mỗi bài viết của mình?',
		1 => 'Để đính kèm chữ ký cá nhân sau mỗi bài viết của mình, trước tiên, bạn cần phải tạo chữ ký cá nhân trong phần thiết lập cá nhân của mình. Sau khi tạo, bạn hãy đánh dấu vào ô lựa chọn <em>Đính kèm chữ ký cá nhân (Có thể thay đổi trong phần Thiết lập cá nhân)</em> dưới phần soạn nội dung bài viết mỗi khi gửi bài để thêm vào chữ cá nhân của mình. Bạn cũng có thể thiết lập mặc định tự động chèn chữ ký cá nhân này đến tất cả bài viết của mình bằng cách chọn <em>Đồng ý</em> trong lựa chọn <em>Luôn đính kèm chữ ký cá nhân của tôi</em> tại phần <strong>Thiết lập cá nhân</strong> của mình. Bạn vẫn có thể quyết định không đính kèm chữ ký này trong một số bài viết riêng lẻ bằng việc bỏ dấu chọn trong lựa chọn <em>Đính kèm chữ ký cá nhân (Có thể thay đổi trong phần Thiết lập cá nhân)</em> dưới phần soạn nội dung bài viết mỗi khi gửi bài sau này.'
	),
	array(
		0 => 'Làm sao để tôi tạo một bình chọn?',
		1 => 'Quá trình tạo một bình chọn rất dễ dàng. Khi bạn tạo một chủ đề mới hoặc sửa bài viết đầu tiên của một chủ đề, nếu bạn được cấp phép tạo bình chọn, bạn sẽ nhìn thấy phần <strong>Tạo bình chọn</strong> bên dưới phần soạn thảo nội dung bài viết. Nếu bạn không nhìn thấy phần này thì trong chuyên mục đó bạn không được phép tạo bình chọn. Bạn phải nhập vào câu hỏi bình chọn và ít nhất là hai đối tượng bình chọn trong một bình chọn. Để thêm vào một đối tượng bình chọn, bạn hãy bấm vào nút <strong>Thêm đối tượng bình chọn</strong> sau khi đã nhập tên cho đối tượng bình chọn mới. Bạn cũng có thể giới hạn thời gian tham gia bình chọn hoặc nhập vào số <strong>0</strong> hay để trống cho bình chọn không giới hạn thời gian tham gia. Số đối tượng bình chọn đối đa mà bạn có thể tạo trong một bình chọn tuỳ thuộc vào thiết lập cho phép của người quản trị trong diễn đàn.'
	),
	array(
		0 => 'Làm sao để tôi sửa hay xoá một bình chọn?',
		1 => 'Như những bài viết khác, các bình chọn chỉ có thể được sửa bởi chính người tạo ra nó, người điều hành của chuyên mục đó hay người quản trị của diễn đàn. Để sửa một bình chọn, trước hết hãy bấm vào bài viết đầu tiên của chủ đề có bình chọn đã được tạo trong đó. Nếu chưa có ai tham gia bình chọn, bạn có thể xoá bình chọn này hoặc sửa đổi bất kì đối tượng bình chọn nào. Tuy nhiên, nếu bình chọn đã có người tham gia bình chọn thì chỉ có người điều hành của chuyên mục đó hay người quản trị của diễn đàn mới có quyền sửa hay xoá nó. Điều này nhằm để ngăn cản một vài người muốn thay đổi tính khách quan của một bình chọn bằng cách thay đổi những đối tượng bình chọn đã được người khác bình chọn.'
	),
	array(
		0 => 'Tại sao tôi không thể truy cập vào một chuyên mục?',
		1 => 'Một vài chuyên mục giới hạn đối với các thành viên hay nhóm thành viên. Để có thể nhìn thấy chúng hiển thị, xem, gửi bài ... bạn cần phải được cấp phép đặc biệt từ người điều hành của chuyên mục hay người quản trị của diễn đàn. Vì thế, bạn hãy liên hệ với họ về vấn đề này!'
	),
	array(
		0 => 'Tại sao tôi không thể tham gia bình chọn được?',
		1 => 'Chỉ có những thành viên đã đăng ký mới được phép tham gia vào các bình chọn trong diễn đàn nhằm để hạn chế những kết quả bình chọn giả mạo từ khách ẩn danh khi tham gia bình chọn. Nếu bạn đã đăng ký làm thành viên rồi mà vẫn không thể tham gia vào bình chọn thì có thể bạn đã không được cấp phép để tham gia bình chọn trong chuyên mục đó.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về định dạng bài viết và các loại chủ đề'
	),
	array(
		0 => 'BBCode là gì?',
		1 => 'BBCode là một dạng thức bổ sung đặc biệt của mã HTML. Việc bạn có sử dụng BBCode được hay không là tuỳ vào quyết định của người quản trị. Bạn cũng có thể tắt BBCode với lựa chọn xuất hiện sau phần soạn bài viết. Bản thân BBCode tương tự gần giống như HTML: thẻ lệnh được đóng mở bằng dấu [ và ] thay vì &lt; và &gt;. Nó cho phép tuỳ biến sử dụng và điều khiển dễ dàng hơn mã HTML. Để tìm hiểu nhiều thông tin hơn về BBCode, bạn hãy tham khảo <strong>Tài liệu hướng dẫn sử dụng BBCode</strong> từ liên kết có trong phần soạn bài viết.'
	),
	array(
		0 => 'Tôi có thể sử dụng mã HTML được không?',
		1 => 'Điều này tuỳ thuộc vào sự cấp phép của người quản trị dành cho bạn và họ có quyền điều khiển những thẻ HTML nào bạn được phép sử dụng. Nếu bạn được phép sử dụng HTML, bạn sẽ chắc chắn nhận ra rằng chỉ có một vài thẻ HTML thông dụng mới sử dụng được. Đây là chức năng an toàn bắt buộc của hệ thống để ngăn cản một vài người cố ý dùng những đoạn mã HTML xấu để phá hoại giao diện của diễn đàn hay một vài lỗi bảo mật nghiêm trọng khác luôn tiềm ẩn. Nếu HTML được bật, bạn có thể tắt nó với lựa chọn xuất hiện sau phần soạn bài viết.'
	),
	array(
		0 => 'Biểu tượng vui là gì?',
		1 => 'Biểu tượng vui là những hình ảnh nhỏ dùng để biểu thị cảm xúc hiện tại của bạn với một vài mã tượng trưng riêng biệt, ví dụ như :) nghĩa là vui, :( nghĩa là buồn. Bạn có thể xem toàn bộ biểu tượng vui được phép sử dụng bằng cách bấm vào liên kết <u>Xem tất cả biểu tượng vui</u> tại phần soạn bài viết. Việc bạn lạm dụng chèn quá nhiều biểu tượng vui trong bài viết sẽ làm cho bài viết đó ít người đọc đi và người điều hành của chuyên mục đó có thể sẽ phải sửa lại chúng hay nghiêm khắc hơn là xoá bài viết đó đi.'
	),
	array(
		0 => 'Tôi có thể gửi hình trong bài viết?',
		1 => 'Hình ảnh có thể được chèn trong bài viết của bạn. Tuy nhiên, hiện tại hệ thống chưa có chức năng tải hình lên trực tiếp lên khi gửi bài. Bạn phải biết liên kết của hình ảnh muốn chèn có thể truy nhập công cộng từ một máy chủ, ví dụ như http://www.some-unknown-place.net/my-picture.gif. Bạn không thể dùng liên kết đến những hình ảnh hiện có trên máy của bạn, nếu không người khác sẽ không thể nhìn thấy chúng hay những hình ảnh được chứa trên một vài máy chủ yêu cầu phải có quyền truy nhập vào như các dịch vụ Hotmail hay Yahoo, những website có mật khẩu bảo vệ ... Để hiện thị hình ảnh trong bài viết, bạn hãy dùng thẻ BBCode [img] hoặc mã HTML tương ứng nếu được phép sử dụng.'
	),
	array(
		0 => 'Thông báo là gì?',
		1 => 'Thông báo thường chứa những thông tin quan trọng trong diễn đàn và bạn nên đọc chúng ngay khi có thể. Những thông báo luôn xuất hiện đầu mỗi trang xem chủ đề khi chúng được gửi lên. Việc bạn có thể tạo những thông báo như thế trong một chuyên mục hay không là tuỳ thuộc vào sự cấp phép của người quản trị trong diễn đàn.'
	),
	array(
		0 => 'Chú ý là gì?',
		1 => 'Chú ý thường xuất hiện sau các thông báo trong phần xem chủ đề và chỉ hiển thị trong trang đầu tiên. Các chú ý cũng thường có những thông tin quan trọng vì thế bạn cũng nên đọc chúng ngay khi có thể. Giống như các thông báo, việc bạn có được phép tạo các chú ý trong một chuyên mục hay không là tuỳ thuộc vào sự cấp phép của người quản trị trong diễn đàn.'
	),
	array(
		0 => 'Chủ đề bị khoá là gì?',
		1 => 'Những chủ đề bị khoá chỉ có thể được thiết lập bởi người điều hành của chuyên mục đó hay người quản trị của diễn đàn. Bạn không thể trả lời những chủ đề đã bị khoá và bất kỳ bình chọn nào có trong những chủ đề đó cũng sẽ kết thúc bình chọn. Một chủ đề bị khoá thường có nhiều nguyên nhân khác nhau trong diễn đàn.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về cấp bậc thành viên và nhóm thành viên'
	),
	array(
		0 => 'Quản trị viên là ai?',
		1 => 'Quản trị viên là người có cấp bậc cao nhất và có quyền điều khiển toàn bộ diễn đàn. Họ có thể điều khiển toàn bộ thành phần chức năng của hệ thống như: thiết lập cấp phép thành viên, cấm thành viên, tạo nhóm thành viên hay các điều hành viên ... Và đương nhiên, họ có tất cả quyền hạn của một điều hành viên trong toàn bộ các chuyên mục của diễn đàn.'
	),
	array(
		0 => 'Điều hành viên là ai?',
		1 => 'Điều hành viên có thể là một cá nhân hay nhóm thành viên có nhiệm vụ quản lý thường xuyên hoạt động của diễn đàn. Họ có quyền sửa hay xoá các bài viết và khoá, mở khoá, di chuyển, xoá và di chuyển các chủ đề trong chuyên mục mà họ quản lý. Thông thường, các quản trị viên có thể ngăn cản một vài người cố ý gửi những bài viết vi phạm nội qui của diễn đàn hay câu bài, gửi những bài nhảm nhí, có nội dung không tốt ...'
	),
	array(
		0 => 'Nhóm thành viên là gì?',
		1 => 'Nhóm thành viên là một biện pháp hữu hiệu để người quản trị có thể tập trung quản lý thành viên theo nhóm. Mỗi thành viên có thể tham gia nhiều nhóm khác nhau, điều này có thể khác biệt ở hầu hết một số diễn đàn khác và mỗi nhóm được cấp phép những quyền hạn khác nhau. Điều này tạo thuận lợi cho người quản trị có thể thiết lập nhiều thành viên khác nhau làm việc như một điều hành viên trong một chuyên mục hoặc cho phép họ truy cập vào một chuyên mục cá nhân ...'
	),
	array(
		0 => 'Làm sao để tôi tham gia vào một nhóm thành viên?',
		1 => 'Để tham gia vào một nhóm thành viên, bạn hãy bấm vào liên kết <strong>Nhóm</strong> trên menu đầu trang, vị trí có thể khác biệt đôi chút tuỳ vào giao diện mà bạn đang sử dụng và bạn có thể xem danh sách các nhóm hiện có trên hệ thống. Không phải bất cứ nhóm nào cũng cho phép tham gia tự do, một số nhóm đã cố định lượng thành viên và một số khác thì ẩn tư cách thành viên. Nếu là nhóm thành viên cho phép tham gia tự do, bạn hãy bấm vào nút <strong>Tham gia vào nhóm</strong> để đề nghị tham gia làm thành viên của nhóm. Người điều hành của nhóm sẽ xem xét yêu cầu này của bạn và có thể sẽ hỏi bạn lý do vì sao muốn tham gia vào nhóm đó. Xin đừng làm phiền những người điều hành nhóm nếu họ không chấp thuận yêu cầu của bạn bởi vì họ có lý do của mình và có thể sẽ giải thích cho bạn hiểu.'
	),
	array(
		0 => 'Làm sao để tôi trở thành một người điều hành của nhóm?',
		1 => 'Bất kì nhóm thành viên nào cũng được tạo ra ban đầu bởi người quản trị của diễn đàn và quản trị viên cũng có thể trở thành luôn người điều hành của nhóm đó. Nếu bạn muốn đề nghị tạo một nhóm thành viên và làm người điều hành của nhóm đó, việc đầu tiên bạn cần làm là hãy liên hệ với người quản trị bằng một tin nhắn nêu rõ đề nghị của bạn.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về gửi tin nhắn'
	),
	array(
		0 => 'Tôi không thể gửi tin nhắn được!',
		1 => 'Có ba nguyên nhân cho việc này: Bạn chưa đăng ký làm thành viên hoặc đã là thành viên nhưng chưa đăng nhập vào hệ thống, người quản trị của diễn đàn đã tắt chức năng gửi tin nhắn trong diễn đàn hoặc người quản trị đã không cho phép bạn sử dụng chức năng gửi tin nhắn trong hệ thống. Nếu rơi vào trường hợp thứ ba thì bạn hãy liên hệ với người quản trị của diễn đàn để hỏi rõ lý do tại sao.'
	),
	array(
		0 => 'Tôi nhận được những tin nhắn không muốn!',
		1 => 'Trong tương lai, chúng tôi sẽ thêm vào chức năng tạo danh sách tin nhắn không muốn nhận cho hệ thống. Còn bây giờ, nếu như bạn vẫn nhận được những tin nhắn không mong muốn từ một ai đó, hãy thông báo cho người quản trị của diễn đàn biết về điều này vì họ có quyền ngăn cản một thành viên nào đó gửi tin nhắn đến các thành viên khác trong hệ thống.'
	),
	array(
		0 => 'Tài khoản Email của tôi toàn nhận được thư rác từ một ai đó trong hệ thống!',
		1 => 'Chúng tôi thật sự xin lỗi về điều này. Chức năng gửi Email từ hệ thống này đã cố gắng bảo vệ và kiểm tra những người gửi có phải là thành viên của hệ thống hay không một khi họ gửi Email cho bạn. Bạn nên gửi Email thông báo cho người quản trị với bản sao của Email quấy phá mà bạn nhận được và điều quan trọng là gủi kèm cả tiêu đề Email có chứa thông tin chi tiết về thành viên đã gửi Email cho bạn. Họ sẽ có hành động cụ thể để ngăn chặn việc này.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về phpBB'
	),
	array(
		0 => 'Ai đã viết và phát triển hệ thống này?',
		1 => 'Chương trình này với những chức năng ban đầu của nó đã được phát triển, phát hành và thuộc bản quyền của <a href="http://www.phpbb.com/" target="_blank">phpBB Group</a>. Nó được phát hành dưới bản quyền của <em>GNU General Public License</em> và phân phối hoàn toàn miễn phí. Bạn hãy ghé thăm website chính của chúng tôi để tìm hiểu thêm thông tin về phpBB.'
	),
	array(
		0 => 'Tại sao hệ thống không có những chức năng khác?',
		1 => 'Chương trình này được phát triển và thuộc bản quyền của <em>phpBB Group</em>. Nếu bạn cảm thấy một chức năng mới cần được thêm vào chương trình này, hãy ghé thăm website phpBB.com của chúng tôi và xem ý kiến đánh giá của <em>phpBB Group</em>. Xin đừng gửi bài yêu cầu nhũng chức năng mới trong diễn đàn của phpBB.com bởi vì chỉ có những thành viên của phpBB trong <em>SourceForge</em> mới có nhiệm vụ phát triển những chức năng mới. Hãy đọc qua các chuyên mục trong diễn đàn để xem ý kiến của họ, dù cho thế nào chăng nữa chúng tôi cũng cần phải quyết định thật kỹ càng về những chức năng cần thiết phải làm cho chương trình này.'
	),
	array(
		0 => 'Tôi phải liên hệ với ai về việc lạm dụng và vi phạm pháp luật liên quan đến website này?',
		1 => 'Bạn nên liên hệ với người quản trị của diễn đàn về điều này. Nếu bạn không thể tìm ra thông tin về họ, bạn nên liên hệ trước hết với một trong những điều hành viên của diễn đàn và hỏi họ những ai mà bạn cần phải liên hệ về vấn đề của bạn. Nếu vẫn không có sự phản hồi nào, bạn nên liên hệ với người chủ của tên miền này bằng cách sử dụng các công cụ tra cứu thông tin về tên miền. Hoặc nếu diễn đàn đang hoạt động trên các dịch vụ hosting miễn phí như Yahoo, free.fr, f2s.com ... thì hãy liên hệ với người quản lý của dịch vụ đó. Cần lưu ý rằng <em>phpBB Group</em> hoàn toàn không liên quan đến bất kì vấn đề nào xảy ra trong website này ở bất kỳ đâu và bất kỳ ai sử dụng chương trình này. Sẽ hoàn toàn vô nghĩa nếu bạn tìm cách liên hệ với <em>phpBB Group</em> về các vấn đề liên quan đến pháp luật, các trách nhiệm pháp lý, những bài viết nói xấu lẫn nhau ... nếu nó không liên quan trực tiếp đến website phpBB.com hoặc những chương trình riêng biệt của phpBB. Nếu bạn gửi Email cho <em>phpBB Group</em> về bất kì vấn đề nào trong việc sử dụng chương trình này của người dùng cuối thì có thể bạn sẽ nhận được một hồi âm ngắn gọn hoặc không có sự phản hồi nào.'
	)
);

?>