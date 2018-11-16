# DesignPattern
Factory method
Bản chất của mẫu thiết kế Factory là "Định nghĩa một giao diện (interface) cho việc tạo một đối tượng,
nhưng để các lớp con quyết định lớp nào sẽ được tạo. "Factory method" giao việc khởi tạo một đối tượng cụ thể cho lớp con."

Abstract factory
Là thiết kế mẫu hướng đối tượng trong việc thiết kế phần mềm, cung cấp một giao diện lớp có chức năng tạo ra một
tập hợp các đối tượng liên quan hoặc phụ thuộc lẫn nhau mà không chỉ ra đó là những lớp cụ thể nào tại thời điểm thiết kế.
Mẫu thiết kế Abstract Factory đóng gói một nhóm những lớp đóng vai trò "sản xuất" (Factory) trong ứng dụng, đây là
những lớp được dùng để tạo lập các đối tượng. Các lớp sản xuất này có chung một giao diện lập trình được kế thừa từ 
một lớp cha thuần ảo gọi là "lớp sản xuất ảo".
Có thể hiểu đơn giản Abstract Farctory như 1 siêu nhà máy dùng để tạo ra các nhà máy (factory) khác.

Observe 
Có thể hiểu Observer thuộc nhóm pattern Behavioral là một mẫu thiết kế dành cho việc một đối tượng khi thay đổi 
trạng thái của bản thân nó thì các đối tượng đính kèm theo cũng sẽ được thông báo. 
Trong trường hợp của EDP, một đối tượng phát nổ (trigger) lên một sự kiện, thì các listener được đính kèm sẽ lắng
nghe và thực hiện (nếu có).


Adapter 
Adapter Design pattern thực sự rất hữu ích khi bạn code với ứng dụng lớn có sử dụng nhiều API từ bên ngoài,
nó giúp bạn giảm thiểu tối đa nhưng thay đổi từ nhà cung cấp API. Nhìn thì thực sự nó hơi phức tạp vì phải tạo
ra nhiều lớp và interface khác nhau nhưng nếu hệ thống lớn thì nó lại có rất nhiều hữu ích.

Observer
Observer ( Người Quan Sát ) cho phép các đối tượng có thể lắng nghe một thông báo ( notify) từ một đối tượng khác, 
và phản ứng lại với thông báo đó, Mình lấy ví dụ là : Bạn nhận được tin nhắn Khuyến Mại,… từ việt theo suốt ngày, 
bạn có 2 sự lựa chọn 1 là : tiếp tục nhận tin nhắn, 2 là soạn TC gửi 199 để từ chối nhận tin nhắn, đó là cách các 
bạn nhận thông báo và phản ứng lại với thông báo đó ( đọc hay không đọc, nhận hay không nhận nữa … )
