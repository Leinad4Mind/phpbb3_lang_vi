<?php
/** 
*
* help_faq [Vietnamese]
*
* @package language
* @version $Id: help_faq.php,v 1.32 2007/01/30 21:33:00 nedka Exp $
* @copyright (c) 2006, 2007 phpBBVietNam Group 
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
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
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
		1 => 'Có một vài nguyên nhân dẫn đến việc này. Trước tiên, hãy chắc chắn rằng tên thành viên và mật khẩu của bạn đã nhập vào chính xác. Nếu bạn đã nhập chính xác mà vẫn không thể đăng nhập được, hãy liên hệ với người quản lý website này để chắc chắn rằng bạn không bị cấm tham gia vào website. Cũng có thể, người quản lý website đã cấu hình sai hệ thống ở một chỗ nào đó và họ cần bạn thông báo để biết mà tiến hành khắc phục.'
	),
	array(
		0 => 'Tại sao tôi cần phải đăng ký làm thành viên?',
		1 => 'Bạn có thể không cần phải làm như thế nhưng đôi khi bạn cần phải đăng ký mới có thể gửi bài trong diễn đàn, tuỳ theo yêu cầu của người quản trị. Tuy nhiên, việc đăng ký làm thành viên sẽ giúp bạn sử dụng được hết tất cả các chức năng mà hệ thống chỉ dành cho các thành viên đã đăng ký và không dành cho khách sử dụng, ví dụ như hình đại diện, gửi tin nhắn, gửi Email đến các thành viên khác, tham gia vào các nhóm thành viên… Bạn chỉ mất vài phút để hoàn tất việc đăng ký, vì vậy hãy đăng ký làm thành viên của chúng tôi.'
	),
	array(
		0 => 'Tại sao tôi thường xuyên bị thoát ra khỏi hệ thống?',
		1 => 'Nếu bạn không đánh dấu chọn vào lựa chọn <em>Đăng nhập tự động mỗi lần ghé thăm</em> khi bạn đăng nhập, hệ thống sẽ chỉ cho phép bạn đăng nhập vào trong thời điểm hiện tại. Điều này sẽ giúp ngăn cản việc lạm dụng tài khoản của bạn bởi một ai đó. Để vẫn luôn trong trạng thái đã đăng nhập, hãy đánh dấu vào lựa chọn trên một lần trong khi đăng nhập. Điều này không được khuyến cáo sử dụng nếu bạn đang truy nhập vào hệ thống từ một máy tính dùng chung, ví dụ như trong thư viện, tiệm Internet, phòng vi tính trong trường học. Nếu bạn không nhìn thấy lựa chọn này, điều này có nghĩa người quản trị đã vô hiệu chức năng này.'
	),
	array(
		0 => 'Làm sao để tên thành viên của tôi không xuất hiện trong danh sách các thành viên đang trực tuyến?',
		1 => 'Trong bảng điều khiển dành cho thành viên của mình, tại phần “Thiết lập hệ thống”, bạn hãy tìm đến lựa chọn <em>Luôn ẩn trạng thái trực tuyến của tôi</em>. Nếu bạn chọn <samp>Đồng ý</samp>, bạn sẽ chỉ xuất hiện trực tuyến đối với các quản trị viên, các điều hành viên hoặc với chính mình. Bạn sẽ được tính như là một thành viên ẩn.'
	),
	array(
		0 => 'Tôi đã quên mật khẩu của mình!',
		1 => 'Đừng lo lắng! Tuy mật khẩu của bạn không thể phục hồi lại được nhưng có thể được tạo lại. Để làm điều này, trong trang đăng nhập, bạn hãy bấm vào liên kết <em>Quên mật khẩu</em>. Hãy làm theo hướng dẫn của công cụ này và không mất nhiều thời gian, bạn sẽ có thể đăng nhập trở lại vào hệ thống.'
	),
	array(
		0 => 'Tôi đã đăng ký nhưng không thể đăng nhập được!',
		1 => 'Trước tiên, hãy kiểm tra xem bạn đã nhập tên thành viên và mật khẩu của mình chính xác chưa. Nếu tất cả đều chính xác thì có thể bạn rơi vào một trong hai trường hợp sau: Nếu yêu cầu COPPA được bật trong website này và bạn đã bấm vào liên kết <em>Tôi đồng ý các điều khoản trên và tôi từ 13 tuổi trở xuống</em> khi đăng ký thì bạn cần phải làm theo những hướng dẫn đã được gửi sau đó. Nếu bạn không rơi vào trường hợp trên thì có thể tài khoản của bạn chưa được kích hoạt. Một vài diễn đàn bắt buộc tài khoản thành viên phải được kích hoạt sau khi đăng ký thành công, có thể bạn được yêu cầu tự làm việc này hoặc chờ người quản trị của diễn đàn kích hoạt trước khi có thể đăng nhập vào hệ thống. Khi bạn đăng ký thành công bạn sẽ được thông báo có phải kích hoạt tài khoản của mình hay không. Nếu bạn nhận được một Email yêu cầu kích hoạt thì hãy làm theo hướng dẫn trong đó. Nếu bạn không nhận được Email nào, có thể bạn đã cung cấp sai địa chỉ Email của mình khi đăng ký. Lý do của việc bắt buộc phải kích hoạt tài khoản này là để hạn chế sự lạm dụng của một vài người muốn quấy phá hệ thống. Nếu bạn chắc chắn đã nhập đúng địa chỉ Email của mình và không còn một lý do nào khác, hãy liên hệ với người quản trị của diễn đàn.'
	),
	array(
		0 => 'Tôi đã từng đăng ký trước đây nhưng bây giờ không thể đăng nhập được nữa!',
		1 => 'Hầu hết những nguyên nhân thường gặp về điều này là: Bạn đã nhập sai tên thành viên hay mật khẩu của mình, hoặc là cả hai. Hãy kiểm tra lại Email mà bạn nhân được lần đầu khi đăng ký làm thành viên. Cũng có thể người quản trị đã xoá tài khoản của bạn ra khỏi hệ thống vì một lý do nào đó. Nếu là trường hợp này thì có lẽ bạn đã không tham gia gửi bài vào diễn đàn trong một thời gian dài chăng? Thông thường một vài diễn đàn sẽ xoá định kỳ các tài khoản thành viên không hoạt động trong một thời gian dài để giảm bớt dung lượng của cơ sở dữ liệu trong hệ thống. Hãy cố gắng đăng ký trở lại và tham gia nhiều hơn vào diễn đàn!'
	),
	array(
		0 => 'Điều khoản COPPA là gì?',
		1 => 'COPPA là tên viết tắt từ <strong>Child Online Privacy and Protection Act</strong> là một luật lệ ban hành vào năm 1998 trong hệ thống pháp luật của Mỹ. Luật lệ này yêu cầu các website có những hoạt động thu thập thông tin từ trẻ vị thành niên dưới 13 tuổi phải được sự đồng ý của cha mẹ hay người bảo hộ của chúng hoặc sử dụng một vài biện pháp khác từ hệ thống kiến thức bảo hộ pháp luật trong việc cho phép thu thập những thông tin cá nhân có thể nhận biết từ một trẻ vị thành niên dưới 13 tuổi. Nếu bạn chắc chắn rằng mình hay một vài người khác thuộc diện quy định trong điều khoản này hoặc website mà bạn đang đăng ký thành viên có áp dụng điều khoản này, bạn hãy liên hệ với các luật sư tư vấn pháp lý để tìm kiếm sự giúp đỡ. Lưu ý rằng phpBB Group không thể đưa ra cho bạn bất kỳ một lời khuyên nào về pháp luật và cũng đừng liên hệ với chúng tôi về những vấn đề này ngoại trừ một vài nguyên tắc chung bên dưới.',
	),
	array(
		0 => 'Tại sao tôi không thể đăng ký thành viên?',
		1 => 'Có thể người quản lý website đã cấm địa chỉ IP của bạn hoặc không cho phép sử dụng tên thành viên mà bạn đang định sử dụng để đăng ký mới. Cũng có thể người quản lý website đã cho tạm ngưng đăng ký thành viên mới bằng cách vô hiệu chức năng này trong hệ thống vì một lý do nào đó. Bạn hãy liên hệ với người quản trị của diễn đàn để được giúp đỡ.',
	),
	array(
		0 => 'Liên kết “Xóa tất cả cookie từ website này” có tác dụng gì?',
		1 => 'Tùy chọn này sẽ xóa tất cả các cookie được tạo ra bởi hệ thống phpBB trên máy của bạn. Việc tạo ra các cookie này là nhằm giữ cho việc xác thực và đăng nhập vào hệ thống của bạn luôn ở trong trạng thái sẵn sàng đồng thời nó cũng đi kèm với một vài chức năng khác từ hệ thống như việc đánh dấu những chủ đề/bài viết đã xem nếu thiết lập này được bật bởi người quản trị hệ thống.',
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về thiết lập cá nhân của thành viên'
	),
	array(
		0 => 'Làm sao để tôi thay đổi thiết lập cá nhân của mình?',
		1 => 'Tất cả thiết lập cá nhân của bạn nếu bạn đã đăng ký làm thành viên đều được lưu giữ trong cơ sở dữ liệu của hệ thống. Để thay đổi chúng, bạn hãy bấm vào liên kết <em>Thiết lập cá nhân</em> trên hệ thống. Liên kết này thường hiện ra ở đầu trang, trên menu hoặc một chỗ khác tuỳ thuộc vào giao diện mà hệ thống sử dụng. Công cụ này sẽ giúp bạn thay đổi tất cả thiết lập và thông tin cá nhân của mình.'
	),
	array(
		0 => 'Thời gian trên hệ thống không chính xác!',
		1 => 'Hiếm có khi nào giờ trên máy chủ chạy sai và căn cứ thời gian này hầu như luôn luôn chính xác. Tuy nhiên, cũng có thể bạn đang nhìn thấy giờ được hiển thị theo một múi giờ khác nơi bạn đang ở. Nếu rơi vào trường hợp này, bạn nên thay đổi lại múi giờ cho phù hợp trong thiết lập cá nhân của mình theo từng khu vực xác định, ví dụ như <em>London, Paris, New York, Sydney…</em>. Cũng cần lưu ý rằng chức năng thay đổi lại thiết lập múi giờ là thiết lập chỉ dành cho những thành viên đã đăng ký. Vì thế, nếu bạn vẫn chưa đăng ký làm thành viên của chúng tôi thì đây là thời điểm thích hợp cho bạn thực hiện điều này và nếu như bạn bỏ qua cho lời nói vui này!'
	),
	array(
		0 => 'Tôi đã thay đổi múi giờ nhưng thời gian vẫn chạy sai!',
		1 => 'Nếu bạn đã chắc chắn thay đổi thiết lập múi giờ chính xác với nơi mình đang ở mà thời gian thì vẫn cứ chạy sai, câu trả lời là có thể bạn đã rơi vào giờ mùa hè (<em>Daylight Savings Time</em> hay <em>Summer Time</em> như được gọi ở Mỹ và một số nơi khác). Hệ thống này không được thiết kế để có thể tự động thay đổi giữa giờ tiêu chuẩn và giờ mùa hè. Vì thế, trong những tháng mùa hè, có thể bạn sẽ thấy thời gian trên hệ thống chạy sai lệch trong giới hạn một giờ so với thời gian thực.'
	),
	array(
		0 => 'Ngôn ngữ của tôi không có trong danh sách hỗ trợ!',
		1 => 'Nguyên nhân chủ yếu của điều này là quản trị viên chưa cài đặt gói ngôn ngữ mà bạn dùng vào hệ thống hay đơn giản là chưa từng có ai phiên dịch hệ thống sang ngôn ngữ của bạn. Hãy cố gắng yêu cầu người quản trị cài đặt gói ngôn ngữ của bạn vào hệ thống nếu nó sẵn có hay nếu chưa có, bạn có thể đề nghị cùng tham gia phiên dịch hệ thống sang ngôn ngữ của bạn. Bạn có thể tìm hiểu nhiều thông tin về các gói ngôn ngữ cho hệ thống này tại website của phpBB Group có ở cuối trang.'
	),
	array(
		0 => 'Làm sao để hiển thị hình ảnh bên dưới tên thành viên của tôi?',
		1 => 'Có hai loại hình ảnh được hiển thị đưới tên thành viên trong phần xem bài viết của diễn đàn. Đầu tiên là hình ảnh kết hợp với xếp hạng hiện tại của bạn trong diễn đàn, thông thường chúng là những hình ngôi sao hay hình khối hiển thị tuỳ thuộc vào số bài viết mà bạn đã gửi trong diễn đàn hay trạng thái, vị trí, công việc… của bạn trong website. Bên dưới hình xếp hạng là một hình lớn hơn, được gọi là hình đại diện. Đây là những hình ảnh thể hiện cá tính riêng của mỗi thành viên. Nếu người quản trị cho phép sử dụng hình đại diện trên diễn đàn, bạn có thể tự do thay đổi chúng và lựa chọn cách thức sử dụng phù hợp. Nếu bạn không thể sử dụng được hình đại diện trên diễn đàn vì đây là quyết định của người quản trị thì hãy hỏi họ lý do tại sao.'
	),
	array(
		0 => 'Làm sao để thay đổi xếp hạng của tôi?',
		1 => 'Bạn không thể thay đổi trực tiếp hình xếp hạng của mình xuất hiện dưới tên thành viên trong phần xem bài viết và trong phần thông tin cá nhân của mình hay ở bất cứ đâu tuỳ thuộc vào giao diện mà bạn đang sử dụng. Hầu hết các diễn đàn sử dụng xếp hạng thành viên để tượng trưng cho sự tích cực của bạn thông qua số lượng bài viết mà bạn đã gửi trong diễn đàn hay dùng để xác định một vài thành viên đặc biệt. Ví dụ, các quản trị viên và điều hành viên có thể có những xếp hạng đặc biệt tương ứng và không lệ thuộc vào số lượng bài viết của họ. Xin đừng lạm dụng gửi nhiều bài viết vô ích và nhảm nhí chỉ để mong tăng xếp hạng thành viên của bạn bởi vì đơn giản các quản trị viên hay điều hành viên sẽ chỉ cần hạ thấp số lượng bài viết của bạn xuống hoặc có một cách xử lý nghiêm khắc hơn dành cho bạn.'
	),
	array(
		0 => 'Khi tôi bấm vào liên kết Email của một thành viên, tôi được yêu cầu phải đăng nhập!',
		1 => 'Xin lỗi, chỉ có những thành viên đã đăng ký mới được phép gửi Email đến mọi người trong hệ thống từ công cụ gửi Email nếu người quản trị đã kích hoạt công cụ này. Điều này nhằm để ngăn cản những kẻ quấy phá ẩn danh dùng công cụ gửi Email của hệ thống để gây rối.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về chức năng gửi bài'
	),
	array(
		0 => 'Làm sao để tôi tạo một chủ đề mới trong một chuyên mục?',
		1 => 'Để gửi một chủ đề mới trong các chuyên mục, bạn hãy bấm vào nút tạo chủ đề mới trong phần xem chuyên mục hay xem chủ đề. Bạn có thể được yêu cầu phải đăng nhập trước khi có thể tiếp tục gửi bài. Những chức năng của công cụ gửi bài mà bạn có thể sử dụng được liệt kêt cuối mỗi trang trong phần xem chuyên mục hay xem chủ đề. Ví dụ như: <em>Bạn có thể tạo chủ đề mới trong chuyên mục này, Bạn có thể tham gia bình chọn trong chuyên mục này…</em>'
	),
	array(
		0 => 'Làm sao để tôi sửa hay xoá một bài viết?',
		1 => 'Nếu bạn không phải là người quản trị của diễn đàn hay người điều hành trong chuyên mục đó thì bạn chỉ có thể sửa hay xoá những bài viết của chính mình. Bạn có thể sửa một bài viết vì lý do chưa hoàn chỉnh, sai chính tả… bằng cách bấm vào nút <em>Sửa</em> trong bài viết tương ứng. Nếu có một ai đó đã trả lời bài viết này, bạn sẽ thấy một danh sách hiển thị thời gian và tổng số lần mà bạn đã sửa ngay bên dưới bài viết đó cùng với thời điểm sửa bài. Danh sách này sẽ không xuất hiện nếu chưa có ai trả lời bài viết ngay sau đó hoặc nếu các quản trị viên hay điều hành viên sửa bài viết này. Có thể họ sẽ để lại một ghi chú nêu rõ lý do vì sao bài viết của bạn bị sửa với quan điểm của họ. Lưu ý rằng những thành viên bình thường sẽ không được phép xoá một bài viết đã được trả lời dù rằng đó là bài viết của họ.'
	),
	array(
		0 => 'Làm sao để tôi đính kèm chữ ký cá nhân sau mỗi bài viết của mình?',
		1 => 'Để đính kèm chữ ký cá nhân sau mỗi bài viết của mình, trước tiên, bạn cần phải tạo chữ ký cá nhân trong phần thiết lập cá nhân của mình. Sau khi tạo, bạn hãy đánh dấu vào ô lựa chọn <em>Đính kèm chữ ký cá nhân (Có thể thay đổi trong phần thiết lập cá nhân)</em> dưới phần soạn nội dung bài viết mỗi khi gửi bài để thêm vào chữ ký cá nhân của mình. Bạn cũng có thể thiết lập mặc định tự động chèn chữ ký cá nhân này đến tất cả bài viết của mình bằng cách chọn <samp>Đồng ý</samp> trong lựa chọn <em>Luôn đính kèm chữ ký cá nhân của tôi</em> tại bảng điều khiển dành cho thành viên của mình. Bạn vẫn có thể quyết định không đính kèm chữ ký này trong một số bài viết riêng lẻ bằng việc bỏ dấu chọn trong lựa chọn <em>Đính kèm chữ ký cá nhân (Chữ ký có thể thay đổi từ bảng điều khiển dành cho thành viên của bạn)</em> dưới phần soạn nội dung bài viết mỗi khi gửi bài sau này.'
	),
	array(
		0 => 'Làm sao để tôi tạo một bình chọn?',
		1 => 'Quá trình tạo một bình chọn rất dễ dàng. Khi bạn tạo một chủ đề mới hoặc sửa bài viết đầu tiên của một chủ đề, nếu bạn được cấp phép tạo bình chọn, bạn sẽ nhìn thấy phần <em>Tạo bình chọn</em> bên dưới phần soạn thảo nội dung bài viết. Nếu bạn không nhìn thấy phần này thì trong chuyên mục đó bạn không được phép tạo bình chọn. Bạn phải nhập vào câu hỏi bình chọn và ít nhất là hai đối tượng bình chọn trong một bình chọn. Để thêm vào một đối tượng bình chọn, bạn hãy bấm vào nút <em>Thêm đối tượng bình chọn</em> sau khi đã nhập tên cho đối tượng bình chọn mới. Bạn cũng có thể giới hạn thời gian tham gia bình chọn hoặc nhập vào số 0 hay để trống cho bình chọn không giới hạn thời gian tham gia. Số đối tượng bình chọn đối đa mà bạn có thể tạo trong một bình chọn tuỳ thuộc vào thiết lập cho phép của người quản trị trong diễn đàn.'
	),
	array(
		0 => 'Làm sao để tôi sửa hay xoá một bình chọn?',
		1 => 'Như những bài viết khác, các bình chọn chỉ có thể được sửa bởi chính người tạo ra nó, người điều hành của chuyên mục đó hay người quản trị của diễn đàn. Để sửa một bình chọn, trước hết hãy bấm vào bài viết đầu tiên của chủ đề có bình chọn đã được tạo trong đó. Nếu chưa có ai tham gia bình chọn, bạn có thể xoá bình chọn này hoặc sửa đổi bất kỳ đối tượng bình chọn nào. Tuy nhiên, nếu bình chọn đã có người tham gia bình chọn thì chỉ có người điều hành của chuyên mục đó hay người quản trị của diễn đàn mới có quyền sửa hay xoá nó. Điều này nhằm để ngăn cản một vài người muốn thay đổi tính khách quan của một bình chọn bằng cách thay đổi những đối tượng bình chọn đã được người khác bình chọn.'
	),
	array(
		0 => 'Tại sao tôi không thể truy cập vào một chuyên mục?',
		1 => 'Một vài chuyên mục giới hạn đối với các thành viên hay nhóm thành viên. Để có thể nhìn thấy chúng hiển thị, xem, gửi bài… bạn cần phải được cấp phép đặc biệt từ người điều hành của chuyên mục hay người quản trị của diễn đàn. Vì thế, bạn hãy liên hệ với họ về vấn đề này!'
	),
	array(
		0 => 'Tại sao tôi không thể tham gia bình chọn được?',
		1 => 'Chỉ có những thành viên đã đăng ký mới được phép tham gia vào các bình chọn trong diễn đàn nhằm để hạn chế những kết quả bình chọn giả mạo từ khách ẩn danh khi tham gia bình chọn. Nếu bạn đã đăng ký làm thành viên rồi mà vẫn không thể tham gia vào bình chọn thì có thể bạn đã không được cấp phép để tham gia bình chọn trong chuyên mục đó.'
	),
	array(
		0 => 'Tại sao tôi không thể đính kèm tập tin?',
		1 => 'Chức năng đính kèm tập tin được sử dụng trong mỗi chuyên mục bởi mỗi nhóm hay mỗi cá nhân thành viên. Người quản trị diễn đàn có thể không cho phép sử dụng tập tin đính kèm trong từng chuyên mục xác định và một trong số những chuyên mục đó là chuyên mục mà bạn đang gửi bài. Đối với những chuyên mục như thế thì chỉ có những quản trị viên mới có thể sử dụng được chức năng đính kèm tập tin mà thôi. Bạn có thể liên hệ với người quản trị nếu bạn không chắc chắn lý do tại sao mình không thể đính kèm tập tin.'
	),
	array(
		0 => 'Tại sao tôi lại nhận được một cảnh cáo?',
		1 => 'Mỗi quản trị viên có những quy định riêng dành cho website của họ. Nếu họ thấy bạn vi phạm một trong những nội quy của mình, họ có thể gửi đến bạn một cảnh cáo. Bạn cần lưu ý rằng đây là quyết định của chính người quản trị và phpBB Group không có liên quan gì trong việc đưa ra những cảnh cáo này.'
	),
	array(
		0 => 'Làm sao tôi có thể báo cáo bài viết đến người điều hành?',
		1 => 'Nếu người quản trị diễn đàn cho phép bạn sử dụng chức năng này, hãy chuyển đến bài viết mà bạn muốn báo cáo và bạn sẽ nhìn thấy một nút bấm dành cho việc báo cáo bài viết. Bấm vào nút báo cáo này, bạn sẽ được hướng dẫn từng bước để hoàn tất việc báo cáo bài viết của mình.'
	),
	array(
		0 => 'Nút “Lưu” trong phần gửi bài có tác dụng gì?',
		1 => 'Đây là chức năng cho phép bạn lưu lại vào hệ thống toàn bộ nội dung mà mình đang soạn dở dang để gửi nó đi vào một thời điểm thích hợp sau này. Để nạp lại những nội dung đã lưu này, bạn hãy chuyển đến bảng điều khiển dành cho thành viên của mình và thực hiện những thao tác thích hợp theo hướng dẫn tại đây.'
	),
	array(
		0 => 'Tại sao bài viết của tôi cần phải được chấp thuận?',
		1 => 'Quản trị viên diễn đàn có thể quyết định những chuyên mục nào khi có bài gửi mới cần phải được chấp nhận bài viết như là một hình thức xét duyệt nội dung trước. Cũng có thể những người quản trị đã đặt bạn vào một nhóm thành viên mà họ cảm thấy cần phải xét duyệt nội dung bài viết trước khi cho hiển thị ra để mọi người đều xem được. Bạn hãy liên hệ với người quản trị để biết thêm thông tin.'
	),
	array(
		0 => 'Làm sao để tôi có thể đẩy chủ đề của mình lên trên danh sách chuyên mục?',
		1 => 'Bằng cách bấm vào liên kết “Đẩy chủ đề lên” tại trang mà bạn đang xem, bạn có thể đẩy chủ đề đó lên đầu trang hiển thị trong chuyên mục tại trang đầu tiên. Tuy nhiên, nếu bạn không nhìn thấy liên kết này thì có nghĩa là bạn không được phép sử dụng chức năng này hoặc chức năng này đã bị vô hiệu trong hệ thống. Bạn cũng có thể đẩy chủ đề lên trên danh sách thật dễ dàng bằng việc trả lời chủ đề đó. Tuy nhiên, hãy chắc chắn rằng bạn không phạm vào nội quy của website mà mình đang ghé thăm.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về định dạng bài viết và các loại chủ đề'
	),
	array(
		0 => 'BBCode là gì?',
		1 => 'BBCode là một dạng thức bổ sung đặc biệt của mã HTML. Việc bạn có sử dụng BBCode được hay không là tuỳ vào quyết định của người quản trị. Bạn cũng có thể tắt BBCode với lựa chọn xuất hiện sau phần soạn bài viết. Bản thân BBCode tương tự gần giống như HTML: thẻ lệnh được đóng mở bằng dấu [ và ] thay vì &lt; và &gt;. Nó cho phép tuỳ biến sử dụng và điều khiển dễ dàng hơn mã HTML. Để tìm hiểu nhiều thông tin hơn về BBCode, bạn hãy tham khảo tài liệu hướng dẫn sử dụng BBCode từ liên kết có trong phần soạn bài viết.'
	),
	array(
		0 => 'Tôi có thể sử dụng mã HTML được không?',
		1 => 'Câu trả lời là không. Bạn không thể sử dụng mã HTML trong diễn đàn cũng như bất cứ đoạn mã nào gửi trả kịch bản như ngôn ngữ HTML. Hầu hết những định dạng bài viết mà bạn muốn sử dụng bằng mã HTML đều có thể dễ dàng sử dụng thay thế bằng các thẻ BBCode tương ứng.'
	),
	array(
		0 => 'Biểu tượng vui là gì?',
		1 => 'Biểu tượng vui là những hình ảnh nhỏ dùng để biểu thị cảm xúc hiện tại của bạn với một vài mã tượng trưng riêng biệt, ví dụ như :) nghĩa là vui, :( nghĩa là buồn. Bạn có thể xem toàn bộ biểu tượng vui được phép sử dụng bằng cách bấm vào liên kết <em>Xem tất cả biểu tượng vui</em> tại phần soạn bài viết. Việc bạn lạm dụng chèn quá nhiều biểu tượng vui trong bài viết sẽ làm cho bài viết đó ít người đọc đi và người điều hành của chuyên mục đó có thể sẽ phải sửa lại chúng hay nghiêm khắc hơn là xoá bài viết đó đi. Người quản trị diễn đàn cũng có thể giới hạn số lượng hình biểu tượng vui mà bạn có thể sử dụng trong mỗi bài viết.'
	),
	array(
		0 => 'Tôi có thể gửi hình trong bài viết?',
		1 => 'Câu trả lời là có. Bạn có thể gửi hình ảnh vào trong bài viết của mình. Tuy nhiên, nếu người quản trị diễn đàn cho phép sử dụng chức năng đính kèm tập tin, bạn có thể tải ngay những hình ảnh này lên diễn đàn. Còn nếu không, bạn phải sử dụng hình ảnh liên kết đến từ một máy chủ lưu trữ khác có thể truy cập được, ví dụ như <code>http://www.example.com/my-picture.gif</code>. Bạn không thể sử dụng liên kết đến những hình ảnh được lưu trữ trong máy tính của mình nếu như nó không phải là một máy chủ có thể truy cập được. Bạn cũng không thể sử dụng liên kết đến những hình ảnh được lưu trữ yêu cầu phải xác thực mới có thể xem được, ví dụ như dịch vụ Hotmail, Yahoo! Mail… hay những website được bảo vệ bằng mật khẩu. Để hiển thị hình ảnh trong bài viết, bạn hãy sử dụng thẻ BBCode [img] trong phần soạn bài viết.'
	),
	array(
		0 => 'Thông báo chung là gì?',
		1 => 'Thông báo chung chứa những thông tin rất quan trọng trong diễn đàn và bạn nên xem qua chúng ngay khi có thể. Những thông báo chung luôn xuất hiện đầu mỗi trang xem chuyên mục và ngay cả trong bảng điều khiển dành cho thành viên của bạn. Việc bạn có thể tạo những thông báo chung như thế trong diễn đàn hay không là tuỳ thuộc vào thiết lập cấp phép của quản trị viên dành cho bạn.'
	),
	array(
		0 => 'Thông báo là gì?',
		1 => 'Thông báo thường chứa những thông tin quan trọng trong chuyên mục mà bạn đang xem và bạn nên xem qua chúng ngay khi có thể. Những thông báo luôn xuất hiện đầu mỗi trang xem chủ đề khi chúng được gửi lên. Giống như những thông báo chung, việc bạn có thể tạo những thông báo như thế trong một chuyên mục hay không là tuỳ thuộc vào thiết lập cấp phép của quản trị viên dành cho bạn.'
	),
	array(
		0 => 'Chú ý là gì?',
		1 => 'Chú ý thường xuất hiện sau các thông báo trong phần xem chủ đề và chỉ hiển thị trong trang đầu tiên. Các chú ý cũng thường có những thông tin quan trọng vì thế bạn cũng nên đọc chúng ngay khi có thể. Giống như các thông báo, việc bạn có được phép tạo các chú ý trong một chuyên mục hay không là tuỳ thuộc vào thiết lập cấp phép của quản trị viên dành cho bạn.'
	),
	array(
		0 => 'Chủ đề bị khoá là gì?',
		1 => 'Những chủ đề bị khoá chỉ có thể được thiết lập bởi người điều hành của chuyên mục đó hay người quản trị của diễn đàn. Bạn không thể trả lời những chủ đề đã bị khoá và bất kỳ bình chọn nào có trong những chủ đề đó cũng sẽ kết thúc bình chọn. Một chủ đề bị khoá thường có nhiều nguyên nhân khác nhau trong diễn đàn.'
	),
	array(
		0 => 'Biểu tượng bài viết là gì?',
		1 => 'Biểu tượng bài viết là những hình ảnh đi kèm với mỗi bài viết để nhấn mạnh nội dung của những bài viết này. Việc bạn có thể sử dụng biểu tượng bài viết khi gửi bài hay không là tùy thuộc vào thiết lập cấp phép của quản trị viên dành cho bạn.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về cấp bậc thành viên và nhóm thành viên'
	),
	array(
		0 => 'Quản trị viên là ai?',
		1 => 'Quản trị viên là những người có quyền hạn cao nhất trong việc điều khiển toàn bộ mọi hoạt động của hệ thống. Những người quản trị có thể điều khiển tất cả các thành phần chức năng của diễn đàn, bao gồm: thiết lập cấp phép, cấm thành viên, tạo nhóm thành viên hay các điều hành viên… tùy thuộc vào những thiết lập được cho phép của người sáng lập ra website dành cho các quản trị viên. Những người quản trị cũng có đầy đủ quyền hạn của điều hành viên trong tất cả các chuyên mục và cũng tùy thuộc vào sự cho phép của người sáng lập ra website dành cho họ.'
	),
	array(
		0 => 'Điều hành viên là ai?',
		1 => 'Điều hành viên có thể là một cá nhân hay nhóm thành viên có nhiệm vụ quản lý thường xuyên hoạt động của diễn đàn. Họ có quyền sửa hay xoá các bài viết và khoá, mở khoá, di chuyển, xoá và di chuyển các chủ đề trong chuyên mục mà họ quản lý. Thông thường, các quản trị viên có thể ngăn cản một vài người cố ý gửi những bài viết vi phạm nội  của diễn đàn hay câu bài, gửi những bài nhảm nhí, có nội dung không tốt…'
	),
	array(
		0 => 'Nhóm thành viên là gì?',
		1 => 'Nhóm thành viên là một biện pháp hữu hiệu để người quản trị có thể tập trung quản lý thành viên theo nhóm. Mỗi thành viên có thể tham gia nhiều nhóm khác nhau, điều này có thể khác biệt ở hầu hết một số diễn đàn khác và mỗi nhóm được cấp phép những quyền hạn khác nhau. Điều này tạo thuận lợi cho người quản trị có thể thiết lập nhiều thành viên khác nhau làm việc như một điều hành viên trong một chuyên mục hoặc cho phép họ truy cập vào một chuyên mục cá nhân…'
	),
	array(
		0 => 'Làm sao để tôi tham gia vào một nhóm thành viên?',
		1 => 'Để tham gia vào một nhóm thành viên, bạn hãy bấm vào liên kết của nhóm đó trong bảng điều khiển dành cho thành viên của mình. Bạn có thể xem tất cả các nhóm thành viên tại đây. Không phải bao giờ tất cả các nhóm thành viên đều là <em>nhóm tự do</em> có thể tham gia tùy thích, một vài nhóm đòi hỏi yêu cầu tham gia của bạn cần phải được chấp nhận, một vài nhóm khác đã cố định và thậm chí có cả một vài nhóm ẩn. Nếu là nhóm tự do, bạn có thể tham gia bằng cách bấm vào nút lựa chọn tham gia thích hợp. Nếu là một nhóm đòi hỏi yêu cầu tham gia phải được chấp nhận, để tham gia vào nhóm này, trước hết bạn phải gửi một yêu cầu tham gia vào nhóm bằng cách bấm vào nút lựa chọn thích hợp. Người điều hành của nhóm sẽ xem xét yêu cầu này của bạn và có thể sẽ hỏi bạn lý do vì sao muốn tham gia vào nhóm đó. Xin đừng làm phiền những người lãnh đạo nhóm nếu họ không chấp thuận yêu cầu của bạn bởi vì họ có lý do của mình và có thể sẽ giải thích cho bạn hiểu.'
	),
	array(
		0 => 'Làm sao để tôi trở thành một người điều hành của nhóm?',
		1 => 'Bất kỳ nhóm thành viên nào cũng được tạo ra ban đầu bởi người quản trị của diễn đàn và quản trị viên cũng có thể trở thành luôn người điều hành của nhóm đó. Nếu bạn muốn đề nghị tạo một nhóm thành viên và làm người điều hành của nhóm đó, việc đầu tiên bạn cần làm là hãy liên hệ với người quản trị bằng một tin nhắn nêu rõ đề nghị của bạn.'
	),
	array(
		0 => 'Tại sao một vài nhóm thành viên có tên nhóm hiển thị với màu sắc khác nhau?',
		1 => 'Sở dĩ những nhóm này có màu sắc khác nhau là do người quản trị của diễn đàn đã chỉ định mỗi màu sắc cho các thành viên trong một nhóm để mọi người dễ dàng phân biệt các thành viên của nhóm này với những nhóm khác.'
	),
	array(
		0 => '“Nhóm mặc định” là gì?',
		1 => 'Nếu bạn là thành viên của nhiều nhóm khác nhau, theo mặc định trong hệ thống, nhóm mặc định của bạn sẽ được sử dụng để quyết định màu nhóm và xếp hạng của nhóm hiển thị cho bạn. Quản trị viên diễn đàn có thể cấp phép cho bạn quyền được thay đổi nhóm mặc định của mình trong bảng điều khiển dành cho thành viên.'
	),
	array(
		0 => 'Liên kết “Ban điều hành” là gì?',
		1 => 'Trang này sẽ cung cấp cho bạn một danh sách gồm toàn bộ các thành viên trong ban điều hành website, bao gồm thông tin về các quản trị viên, điều hành viên và những chuyên mục mà họ đang điều hành.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về tin nhắn cá nhân'
	),
	array(
		0 => 'Tôi không thể gửi tin nhắn được!',
		1 => 'Có ba nguyên nhân cho việc này: Bạn chưa đăng ký làm thành viên hoặc đã là thành viên nhưng chưa đăng nhập vào hệ thống, người quản trị của diễn đàn đã tắt chức năng gửi tin nhắn trong diễn đàn hoặc người quản trị đã không cho phép bạn sử dụng chức năng gửi tin nhắn trong hệ thống. Nếu rơi vào trường hợp thứ ba thì bạn hãy liên hệ với người quản trị của diễn đàn để hỏi rõ lý do tại sao.'
	),
	array(
		0 => 'Tôi nhận được những tin nhắn không muốn!',
		1 => 'Bạn có thể cấm một thành viên gửi tin nhắn đến mình bằng cách sử dụng thiết lập nội quy tin nhắn trong bảng điều khiển dành cho thành viên. Nếu bạn nhận được những tin nhắn lừa đảo, xâm phạm tính riêng tư, xúc phạm đến danh dự của mình từ một ai đó, bạn hãy thông báo ngay cho người quản trị diễn đàn biết về điều này bởi vì họ có quyền hạn cấm một thành viên có thể gửi tin nhắn đến tất cả những thành viên khác.'
	),
	array(
		0 => 'Tài khoản Email của tôi toàn nhận được thư rác từ một ai đó trong hệ thống!',
		1 => 'Chúng tôi thật sự xin lỗi về điều này. Chức năng gửi Email từ hệ thống này đã cố gắng bảo vệ và kiểm tra những người gửi có phải là thành viên của hệ thống hay không một khi họ gửi Email cho bạn. Bạn nên gửi Email thông báo cho người quản trị với bản sao của Email quấy phá mà bạn nhận được và điều quan trọng là gửi kèm cả tiêu đề Email có chứa thông tin chi tiết về thành viên đã gửi Email cho bạn. Họ sẽ có hành động cụ thể để ngăn chặn việc này.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về thiết lập quan hệ bạn thân và kẻ thù'
	),
	array(
		0 => 'Danh sách bạn thân và danh sách kẻ thù là gì?',
		1 => 'Bạn có thể sử dụng những danh sách này để tổ chức quản lý các thành viên khác trong diễn đàn. Những thành viên được thêm vào trong danh sách bạn thân sẽ được liệt kê trong bảng điều khiển dành cho thành viên của bạn để bạn bạn có thể biết nhanh trạng thái trực tuyến của họ và gửi cho họ những tin nhắn. Nếu giao diện hỗ trợ, các bài viết từ những thành viên này đều được tô sáng nổi bật. Nếu bạn thêm một thành viên vào danh sách kẻ thù của mình thì bất kỳ bài viết nào của họ theo mặc định trong hệ thống sẽ ẩn đi đối với bạn.'
	),
	array(
		0 => 'Làm thế nào tôi có thể thêm/gỡ bỏ các thành viên trong danh sách bạn thân hay kẻ thù của mình?',
		1 => 'Bạn có thể thêm các thành viên vào danh sách của mình theo hai cách. Trong mỗi trang thông tin cá nhân của thành viên đó, có một liên kết để bạn thêm họ vào danh sách bạn thân hay kẻ thù của mình. Ngoài ra, trong bảng điều khiển dành cho thành viên của mình, bạn có thể thêm trực tiếp các thành viên bằng cách nhập vào tên thành viên của họ. Bạn cũng có thể gỡ bỏ các thành viên ra khỏi danh sách của mình cũng từ trang ở trên.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về chức năng tìm kiếm'
	),
	array(
		0 => 'Làm thế nào tôi có thể tìm kiếm trong hệ thống?',
		1 => 'Bạn có thể thực hiện tìm kiếm nhanh bằng cách nhập vào từ khóa cần tìm trong khung tìm kiếm xuất hiện trên trang chủ, trang xem chuyên mục hoặc trang xem chủ đề. Để sử dụng chức năng tìm kiếm nâng cao với nhiều tùy chọn cần thiết hơn, bạn hãy bấm vào liên kết “Tìm kiếm” xuất hiện trên menu đầu mỗi trang.'
	),
	array(
		0 => 'Tại sao tìm kiếm của tôi không có kết quả?',
		1 => 'Việc tìm kiếm của bạn quá chung chung và đính kèm nhiều điều kiện tìm kiếm phổ biến nên không được lập chỉ mục tìm kiếm bởi hệ thống phpBB. Bạn hãy vui lòng xác định nhiều tìm kiện tìm kiếm và sử dụng những tùy chọn có thể trong trang tìm kiếm nâng cao.'
	),
	array(
		0 => 'Tại sao tìm kiếm của tôi lại hiện ra một trang trắng?',
		1 => 'Việc tìm kiếm của bạn có quá nhiều kết quả dẫn đến hao tổn tài nguyên của máy chủ. Bạn hãy vui lòng sử dụng chức năng tìm kiếm nâng cao, xác định càng nhiều điều kiện tìm kiếm và những chuyên mục nào thực sự cần tìm bên trong càng tốt.'
	),
	array(
		0 => 'Làm thế nào tôi có thể tìm kiếm các thành viên?',
		1 => 'Bạn hãy chuyển đến trang “Thành viên” và bấm vào liên kết “Tìm một thành viên”. Với công cụ này, bạn hãy điền đủ những thông tin tùy chọn cho việc tìm kiếm của mình.'
	),
	array(
		0 => 'Làm thế nào tôi có thể xem lại các chủ đề và bài viết của mình?',
		1 => 'Bạn có thể xem lại các bài viết của chính mình bằng cách bấm vào liên kết “Tìm tất cả bài viết của thành viên này” trong bảng điều khiển dành cho thành viên hoặc thông qua trang thông tin cá nhân của chính mình. Để tìm lại các chủ đề của mình, bạn hãy sử dụng trang tìm kiếm nâng cao của hệ thống và điền vào các điều kiện tìm kiếm thích hợp.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về chức năng đánh dấu và theo dõi chủ đề'
	),
	array(
		0 => 'Theo dõi chủ đề và đánh dấu chủ đề khác nhau như thế nào?',
		1 => 'Chức năng đánh dấu chủ đề trong hệ thống phpBB3 cũng giống như việc bạn đánh dấu các trang Web trong trình duyệt của mình. Bạn không nhất thiết phải được thông báo mỗi khi chủ đề này được cập nhật nhưng bạn có thể quay lại xem chủ đề này một cách nhanh chóng bất cứ khi nào. Ngược lại, chức năng theo dõi chủ đề sẽ thông báo cho bạn biết mỗi khi chủ đề hay chuyên mục mà bạn chọn theo dõi được cập nhật trong diễn đàn thông qua cách thông báo mà bạn lựa chọn.'
	),
	array(
		0 => 'Làm thế nào tôi có thể theo dõi các chuyên mục hay chủ đề xác định?',
		1 => 'Để theo dõi một chuyên mục, trong phần xem chuyên mục, bạn sẽ nhìn thấy liên kết “Theo dõi chuyên mục”. Bấm vào đây và bạn sẽ bắt đầu theo dõi chuyên mục đó. Để theo dõi một chủ đề, trong khi trả lời chủ đề đó, bạn hãy đánh dấu chọn vào lựa chọn thông báo bằng Email khi có bài viết trả lời hoặc bạn có thể bấm vào liên kết “Theo dõi chủ đề” trong phần xem chủ đề.'
	),
	array(
		0 => 'Làm thế nào tôi có thể ngưng việc theo dõi chủ đề của mình?',
		1 => 'Để ngưng việc theo dõi của mình, đơn giản là bạn hãy chuyển đến bảng điều khiển dành cho thành viên của mình, chọn liên kết không muốn theo dõi nữa rồi bấm vào nút “Ngừng theo dõi những mục đã đánh dấu”.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về tập tin đính kèm'
	),
	array(
		0 => 'Những loại tập tin đính kèm nào tôi được phép sử dụng trong diễn đàn?',
		1 => 'Mỗi quản trị viên trong diễn đàn có thể cho phép hoặc cấm sử dụng một loại tập tin đính kèm nào đó. Nếu bạn không chắc chắn về những loại tập tin đính kèm nào được phép sử dụng, hãy liên hệ với người quản trị diễn đàn để được giúp đỡ.'
	),
	array(
		0 => 'Làm thế nào tôi có thể xem lại tất cả tập tin đính kèm của mình?',
		1 => 'Để tìm danh sách các tập tin mà bạn đã đính kèm, bạn hãy chuyển đến bảng điều khiển dành cho thành viên của mình và bấm vào liên kết trong phần tập tin đính kèm.'
	),	
	array(
		0 => '--',
		1 => 'Những câu hỏi về hệ thống phpBB'
	),
	array(
		0 => 'Ai đã viết và phát triển hệ thống này?',
		1 => 'Chương trình này với những chức năng ban đầu của nó đã được phát triển, phát hành và thuộc bản quyền của <a href="http://www.phpbb.com/">phpBB Group</a>. Nó được phát hành dưới bản quyền của <em>GNU General Public License</em> và phân phối hoàn toàn miễn phí. Bạn hãy ghé thăm website chính của chúng tôi để tìm hiểu thêm thông tin về phpBB.'
	),
	array(
		0 => 'Tại sao hệ thống không có những chức năng khác?',
		1 => 'Chương trình này được phát triển và thuộc bản quyền của <em>phpBB Group</em>. Nếu bạn cảm thấy một chức năng mới cần được thêm vào chương trình này, hãy ghé thăm website phpBB.com của chúng tôi và xem ý kiến đánh giá của <em>phpBB Group</em>. Xin đừng gửi bài yêu cầu những chức năng mới trong diễn đàn của phpBB.com bởi vì chỉ có những thành viên của phpBB trong <em>SourceForge</em> mới có nhiệm vụ phát triển những chức năng mới. Hãy đọc qua các chuyên mục trong diễn đàn để xem ý kiến của họ, dù cho thế nào chăng nữa chúng tôi cũng cần phải quyết định thật kỹ càng về những chức năng cần thiết phải làm cho chương trình này.'
	),
	array(
		0 => 'Tôi phải liên hệ với ai về việc lạm dụng và vi phạm pháp luật liên quan đến website này?',
		1 => 'Bạn nên liên hệ với người quản trị của diễn đàn về điều này. Nếu bạn không thể tìm ra thông tin về họ, bạn nên liên hệ trước hết với một trong những điều hành viên của diễn đàn và hỏi họ những ai mà bạn cần phải liên hệ về vấn đề của bạn. Nếu vẫn không có sự phản hồi nào, bạn nên liên hệ với người chủ của tên miền này bằng cách sử dụng các công cụ tra cứu thông tin về tên miền. Hoặc nếu diễn đàn đang hoạt động trên các dịch vụ hosting miễn phí như Yahoo, free.fr, f2s.com… thì hãy liên hệ với người quản lý của dịch vụ đó. Cần lưu ý rằng <em>phpBB Group</em> hoàn toàn không liên quan đến bất kỳ vấn đề nào xảy ra trong website này ở bất kỳ đâu và bất kỳ ai sử dụng chương trình này. Sẽ hoàn toàn vô nghĩa nếu bạn tìm cách liên hệ với <em>phpBB Group</em> về các vấn đề liên quan đến pháp luật, các trách nhiệm pháp lý, những bài viết nói xấu lẫn nhau… nếu nó không liên quan trực tiếp đến website phpBB.com hoặc những chương trình riêng biệt của phpBB. Nếu bạn gửi Email cho <em>phpBB Group</em> về bất kỳ vấn đề nào trong việc sử dụng chương trình này của người dùng cuối thì có thể bạn sẽ nhận được một hồi âm ngắn gọn hoặc không có sự phản hồi nào.'
	)
);

?>