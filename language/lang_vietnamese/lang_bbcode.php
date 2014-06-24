<?php
/** 
*
* lang_bbcode [Vietnamese]
*
* @package language
* @version $Id: lang_bbcode.php,v 1.06 2006/07/01 20:26:00 nedka Exp $
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
	2006-03-27	Nguyen Dang Khoa
	First translated into Vietnamese ...
*/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Giới thiệu");
$faq[] = array("BBCode là gì?", "BBCode là một dạng thức bổ sung đặc biệt của mã HTML. Việc bạn có sử dụng BBCode được hay không là tuỳ vào quyết định của người quản trị. Bạn cũng có thể tắt BBCode với lựa chọn xuất hiện sau mỗi form soạn bài viết. Bản thân BBCode tương tự gần giống như HTML: thẻ lệnh được đóng mở bằng dấu [ và ] thay vì &lt; và &gt;. Nó cho phép tuỳ biến sử dụng và điều khiển dễ dàng hơn mã HTML. Tuỳ thuộc vào giao diện mà bạn đang sử dụng, bạn sẽ nhận thấy việc sử dụng các thẻ lệnh BBCode dễ dàng như thế nào khi chỉ với thao tác click chuột với thanh công cụ BBCode nằm bên trên khung soạn thảo nội dung bài viết. Thậm chí với những công cụ dễ dàng như vậy, bạn cũng sẽ được cung cấp một tài liệu hướng dẫn sử dụng chi tiết trong phần dưới đây.");

$faq[] = array("--","Định dạng văn bản");
$faq[] = array("Làm thế nào để tạo chữ in đậm, in nghiêng và gạch chân?", "Sử dụng thẻ BBCode bạn có thể thay đổi nhanh chóng kiểu dáng đơn giản của văn bản. Hãy xem xét các phương pháp sau đây: <ul><li>Để in đậm một đoạn văn bản hãy đặt nó nằm trong cặp thẻ <b>[b][/b]</b>, ví dụ như: <br /><br /><b>[b]</b>Xin chào!<b>[/b]</b><br /><br />sẽ trở thành <b>Xin chào!</b></li><br /><li>Để gạch chân văn bản hãy sử dụng cặp thẻ <b>[u][/u]</b>, ví dụ như:<br /><br /><b>[u]</b>Chào buổi sáng!<b>[/u]</b><br /><br />sẽ thành <u>Chào buổi sáng!</u></li><br /><li>Để tạo văn bản in nghiêng bạn dùng cặp thẻ <b>[i][/i]</b>, ví dụ như:<br /><br />Điều này thật <b>[i]</b>tuyệt vời!<b>[/i]</b><br /><br />sẽ hiển thị thành Điều này thật <i>tuyệt vời!</i></li></ul>");
$faq[] = array("Làm thế nào để thay đổi màu hay kích thước của văn bản?", "Để thay đổi màu hay kích thước của văn bản, những thẻ BBCode sau đây sẽ được dùng. Hãy nhớ rằng sự hiển thị như thế nào còn tuỳ thuộc vào trình duyệt của người xem và hệ thống: <ul><li>Để thay đổi màu văn bản, bạn hãy đặt nó trong cặp thẻ <b>[color=][/color]</b>. Bạn có thể xác định bằng một tên màu được chấp nhận như: red, blue, yellow ... hay sử dụng mã màu hex như: #FFFFFF, #000000 ... Ví dụ, để tạo một đoạn văn bản có chữ màu đỏ bạn có thể dùng như sau:<br /><br /><b>[color=red]</b>Xin chào!<b>[/color]</b><br /><br />hoặc<br /><br /><b>[color=#FF0000]</b>Xin chào!<b>[/color]</b><br /><br />cả hai cách trên sẽ cho ra cùng kết quả <span style=\"color:red\">Xin chào!</span></li><br /><li>Thay đổi kích thước của văn bản cũng làm tương tự như trên nhưng dùng với cặp thẻ <b>[size=][/size]</b>. Sử dụng cặp thẻ này còn tuỳ thuộc vào giao diện mà bạn đang sử dụng trong hệ thống nhưng khuyến cáo bạn nên dùng kích thước là một giá trị số đếm tiêu biểu với đơn vị tính là Pixel, bắt đầu từ số 1 rất nhỏ không nhìn thấy được cho đến số 29 rất lớn. Ví dụ:<br /><br /><b>[size=9]</b>NHỎ XÍU!<b>[/size]</b><br /><br />sẽ tạo ra <span style=\"font-size:9px\">NHỎ XÍU!</span><br /><br />nhưng ngược lại:<br /><br /><b>[size=24]</b>LỚN QUÁ!<b>[/size]</b><br /><br />sẽ cho ra <span style=\"font-size:24px\">LỚN QUÁ!</span></li></ul>");
$faq[] = array("Tôi có thể phối hợp các thẻ định dạng với nhau không?", "Vâng! Chắc chắn bạn có thể làm được điều này. Ví dụ để tạo sự chú ý của một ai đó bạn có thể viết như sau:<br /><br /><b>[size=18][color=red][b]</b>HÃY NHÌN TÔI!<b>[/b][/color][/size]</b><br /><br />nó sẽ hiển thị <span style=\"color:red;font-size:18px\"><b>HÃY NHÌN TÔI!</b></span><br /><br />Chúng tôi không khuyến cáo bạn sử dụng quá nhiều thẻ định dạng văn bản như thế! Hãy nhớ rằng khi bạn sử dụng phối hợp nhiều thẻ BBCode như thế bạn phải dùng các thẻ đóng tương ứng theo thứ tự. Ví dụ, cách dùng sau đây là sai:<br /><br /><b>[b][u]</b>Sai rồi!<b>[/b][/u]</b>");

$faq[] = array("--","Trích dẫn và xuất văn bản cố định chiều rộng");
$faq[] = array("Trích dẫn văn bản trong những bài trả lời", "Có 2 cách để bạn trích dẫn một văn bản: trích dẫn có nguồn gốc hoặc trích dẫn không nguồn gốc.<ul><li>Khi bạn sử dụng chức năng trích dẫn để trả lời một bài viết trong diễn đàn, bạn phải đặt toàn bộ nội dung muốn trích dẫn nằm trong cặp thẻ <b>[quote=\"\"][/quote]</b>. Phương pháp này cho phép bạn trích dẫn một văn bản có nguồn gốc từ một người hoặc bất cứ ai, bất cứ cái gì bạn muốn thêm vào. Ví dụ, để trích dẫn một đoạn văn bản mà Mr. Blobby đã viết, bạn sẽ phải sử dụng như sau:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Đoạn văn bản muốn trích dẫn của Mr. Blobby<b>[/quote]</b><br /><br />Kết quả xuất ra sẽ tự động thêm vào dòng <b>Mr. Blobby đã viết:</b> trước đoạn văn bản bạn dùng để trích dẫn. Hãy nhớ rằng bạn <b>phải</b> đính kèm dấu ngoặc kép \"\" trước và sau tên người hay tên của bất cứ thứ gì mà bạn muốn dùng làm nguồn để trích dẫn. Đây là tuỳ chọn không bắt buộc phải có.</li><br /><li>Cách thứ hai cho phép bạn trích dẫn tuỳ ý bất cứ thứ gì. Để sử dụng đúng, bạn cũng phải đặt đoạn văn bản muốn trích dẫn nằm trong cặp thẻ <b>[quote][/quote]</b>. Khi bạn xem bài viết nó sẽ tự động hiển thị dòng <b>Trích dẫn:</b> trước đoạn văn bản bạn dùng để trích dẫn.</li></ul>");
$faq[] = array("Trích dẫn mã hoặc văn bản cố định chiều rộng", "Nếu bạn muốn trích dẫn một đoạn mã nguồn trong bài viết hoặc thực ra chỉ là một đoạn văn bản yêu cầu phải cố định chiều rộng trong khung với phông chữ Courier, bạn nên đặt nó trong cặp thẻ <b>[code][/code]</b>, ví dụ như<br /><br /><b>[code]</b>echo \"Mã nguồn nè ...\";<b>[/code]</b><br /><br />Tất cả định dạng hay thẻ lệnh được sử dụng trong cặp thẻ <b>[code][/code]</b> đều được giữ nguyên khi bạn xem bài viết.");

$faq[] = array("--","Tạo danh sách liệt kê");
$faq[] = array("Tạo danh sách liệt kê không theo thứ tự", "Thẻ lệnh BBCode hỗ trợ 2 loại danh sách liệt kê: không theo thứ tự và có thứ tự. Về bản chất chúng cũng giống như những thẻ lệnh HTML tương tự. Một danh sách liệt kê không theo thứ tự sẽ xuất ra mỗi mục trong danh sách liệt kê của bạn liên tục từng dòng và tự động thụt vào trong với một ký tự hình tròn. Để tạo danh sách loại này bạn dùng cặp thẻ <b>[list][/list]</b> và xác định trước mỗi mục trong danh sách liệt kê một thẻ con <b>[*]</b>. Ví dụ, để tạo một danh sách liệt kê những màu mà mình ưa thích, bạn làm như sau:<br /><br /><b>[list]</b><br /><b>[*]</b>Đỏ<br /><b>[*]</b>Xanh<br /><b>[*]</b>Vàng<br /><b>[/list]</b><br /><br />Kết quả sẽ tạo ra một danh sách liệt kê như sau:<ul><li>Đỏ</li><li>Xanh</li><li>Vàng</li></ul>");
$faq[] = array("Tạo danh sách liệt kê theo thứ tự", "Loại danh sách liệt kê thứ hai - danh sách liệt kê có thứ tự - sẽ giúp bạn tự động đánh số thứ tự trước mỗi mục liệt kê trong danh sách. Để tạo danh sách loại này bạn dùng cặp thẻ <b>[list=1][/list]</b> để tạo ra một danh sách liệt kê theo thứ tự số đếm hoặc lựa chọn <b>[list=a][/list]</b> để tạo ra một danh sách liệt kê theo thứ tự chữ cái ABC. Giống như khi tạo danh sách liệt kê không theo thứ tự, mỗi mục liệt kê trong danh sách này đều phải có thẻ con <b>[*]</b> đứng trước. Ví dụ:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Đi đến cửa hàng<br /><b>[*]</b>Mua một chiếc máy vi tính mới<br /><b>[*]</b>Nguyền rủa chiếc máy tính khi nó bị hư<br /><b>[/list]</b><br /><br />sẽ cho ra kết quả như sau:<ol type=\"1\"><li>Đi đến cửa hàng</li><li>Mua một chiếc máy vi tính mới</li><li>Nguyền rủa chiếc máy tính khi nó bị hư</li></ol>Trong khi muốn tạo danh sách liệt kê theo thứ tự chữ cái ABC bạn phải làm như sau:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Câu trả lời hợp lí thứ nhất<br /><b>[*]</b>Câu trả lời hợp lí thứ hai<br /><b>[*]</b>Câu trả lời hợp lí thứ ba<br /><b>[/list]</b><br /><br />sẽ thành<ol type=\"a\"><li>Câu trả lời hợp lí thứ nhất</li><li>Câu trả lời hợp lí thứ hai</li><li>Câu trả lời hợp lí thứ ba</li></ol>");

$faq[] = array("--", "Tạo liên kết");
$faq[] = array("Liên kết đến những website khác", "Thẻ lệnh BBCode hỗ trợ nhiều cách để tạo ra các liên kết URL (Uniform Resource Indicators).<ul><li>Trước tiên cặp thẻ cần sử dụng là <b>[url=][/url]</b>. Bất cứ thứ gì bạn nhập sau dấu = sẽ trở thành nội dung của thẻ đó và được hiểu là một địa chỉ URL. Ví dụ, để liên kết đến website phpBB.com bạn sẽ sử dụng như sau:<br /><br /><b>[url=http://www.phpbb.com/]</b>Ghé thăm phpBB nào!<b>[/url]</b><br /><br />Một liên kết sẽ được tạo ra như sau: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Ghé thăm phpBB nào!</a> Bạn cần lưu ý là liên kết này sẽ mở ra trong một cửa sổ mới để mọi người vẫn có thể tiếp tục với những mục mà họ đang xem.</li><br /><li>Nếu bạn muốn tạo một liên kết hiển thị với chính địa chỉ URL của nó, hãy làm như sau:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Liên kết tạo ra sẽ là: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><br /><li>Ngoài ra, một chức năng trong hệ thống còn được gọi là <i>những liên kết thông minh</i>. Khi bạn gõ những địa chỉ website trong bài viết, chúng sẽ được tự động hiển thị như là các địa chỉ URL mà không cần bạn phải đặt chúng trong bất cứ thẻ lệnh nào và thậm chí không cần bắt đầu bằng cụm từ http:// quen thuộc. Ví dụ, nếu bạn gõ www.phpbb.com trong bài viết nó sẽ được tự động đặt thành <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> khi bạn xem bài viết.</li><br /><li>Cách tạo liên kết cũng được áp dụng tương tự cho địa chỉ Email. Bạn chỉ cần xác định một địa chỉ Email rõ ràng, ví dụ như:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />nó sẽ được hiển thị thành <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> hoặc bạn chỉ cần gõ no.one@domain.adr trong bài viết là nó sẽ được tự động chuyển thành một liên kết đến địa chỉ Email trên khi bạn xem bài viết.</li></ul>Giống như tất cả thẻ lệnh BBCode khác, bạn có thể sử dụng phối hợp thẻ tạo liên kết URL này với các thẻ lệnh BBCode khác, ví dụ như <b>[img][/img]</b> (Xem mục kế tiếp), <b>[b][/b]</b> ... Với những thẻ định dạng như trên, bạn cần phải đặt thẻ lệnh mở bắt đầu và thẻ lệnh đóng kết thúc tương ứng theo thứ tự. Ví dụ:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />là <u>không chính xác</u> và có thể làm cho bài viết của bạn bị xoá khỏi diễn đàn. Vì thế, hãy cẩn thận và kiểm tra kĩ khi sử dụng.");

$faq[] = array("--", "Hiển thị hình ảnh trong bài viết");
$faq[] = array("Thêm một hình ảnh trong bài viết", "Các thẻ lệnh BBCode kết hợp chặt chẽ với thẻ lệnh đính kèm hình ảnh trong bài viết. Có 2 điều quan trọng mà bạn cần nhớ khi sử dụng thẻ này là: Nhiều người không đánh giá cao việc dùng quá nhiều hình ảnh trong bài viết và thứ hai, hình ảnh bạn dùng hiển thị trong bài viết phải hiện hữu trên Internet, nó không thể là hình trên máy tính của bạn được trừ khi máy tính của bạn là một Web Server. Hiện tại chưa có phương pháp lưu trữ hình trên hệ thống với phpBB (Những khó khăn này sẽ được giải quyết trong nhánh phiên bản kế tiếp của phpBB). Để hiển thị đúng hình ảnh, bạn phải đặt đường dẫn URL của nó nằm trong cặp thẻ <b>[img][/img]</b>. Ví dụ:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Bạn cũng có thể tạo ra một liên kết là một hình ảnh khi dùng cách trên phối hợp với cặp thẻ <b>[url][/url]</b>. Ví dụ như:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />sẽ tạo thành:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Những vấn đề khác");
$faq[] = array("Tôi có thể tự tạo những thẻ BBCode cho riêng mình?", "Không! Chúng tôi e rằng bạn không thể làm được điều này với các phiên bản phpBB 2.0.x hiện tại. Chúng tôi đang xem xét chức năng tạo và sử dụng những thẻ lệnh BBCode có thể tuỳ biến tự do trong nhánh phiên bản kế tiếp của phpBB.");

//
// This ends the BBCode guide entries
//

?>