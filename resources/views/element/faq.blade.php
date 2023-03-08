 <!--faq section start-->
 <section class="faq-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center">
                    <h2>Những câu hỏi thường gặp</h2>
                </div>
            </div>
        </div>
        <div class="faq-tab hm2-faq-tab mt-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="tab-left">
                        <ul class="hm2-server-tab-control nav nav-tabs border-0" role="tablist">
                            <li><button data-bs-toggle="tab" data-bs-target="#faq_could_hosting" aria-selected="true" role="tab" class="active"><i class="fa-solid fa-cloud-meatball"></i><span class="ms-3">Node là gì?</span></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#faq_vps_hosting" aria-selected="false" role="tab" class="" tabindex="-1"><i class="fa-solid fa-database"></i><span class="ms-3">Mua VPS ở đâu để chạy node?</span></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#faq_wp_hosting" aria-selected="false" role="tab" class="" tabindex="-1"><i class="fa-brands fa-warning"></i><span class="ms-3">Bạn đang gặp lỗi?</span></button></li>
                            <li><button class="" data-bs-toggle="tab" data-bs-target="#faq_shared_hosting" aria-selected="false" role="tab" tabindex="-1"><i class="fa-solid fa-server"></i><span class="ms-3">Kiểm tra trạng thái</span></button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content mt-5 mt-lg-0">
                        <div class="tab-pane fade" id="faq_shared_hosting" role="tabpanel">
                            <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_1">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#sh_1" data-bs-toggle="collapse">Cài đặt ứng dụng để kiểm tra RAM - CPU, các ứng dụng chạy nền trên VPS/Ubuntu.</a>
                                    </div>
                                    <div class="accordion-collapse collapse show" id="sh_1" data-bs-parent="#accordion_1">
                                        <div class="accordion-body">
                                            <p class="mb-0">- Nhập lệnh cài đặt: sudo apt install htop.</p>
                                            <p class="mb-0">- Nhập lệnh: htop.</p>
                                            <p class="mb-0">- Trong ô màu Cam như hình ảnh diễn giải: số 1-2-3-4 là số nhân CPU của VPS bạn sử dụng.</p>
                                            <p class="mb-0">- Số MEM là phần Ram đang sử dụng.</p>
                                            <p class="mb-0">- Số Swp là số Ram Vitual khi máy sử dụng hết phần Ram sẽ chuyển dần sang phần Swp này.</p><br>
                                            <p class="mb-0">Để thoát trạng thái kiểm tra này có thể dùng lệnh: Control C, hoặc nhấn F10 (Quit).</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#sh_2" data-bs-toggle="collapse" class="collapsed">Kiểm tra dung lượng ổ đĩa VPS/Ubuntu bạn đang dùng bằng lệnh: df -h</a>
                                    </div>
                                    <div class="accordion-collapse collapse" id="sh_2" data-bs-parent="#accordion_1">
                                        <div class="accordion-body">
                                            <p class="mb-0">- Phần màu cam thể hiện:</p>
                                            <p class="mb-0">- Size: Tổng GB</p>
                                            <p class="mb-0">- Used: Đã dùng</p>
                                            <p class="mb-0">- Avail: Còn lại</p>
                                            <p class="mb-0">- Use%: Số phần trăm còn trống.</p><br>
                                            <p class="mb-0">Thư mục cài đặt của ổ nằm ở /dev/sda2, như của mình ổ 2TB và đang dùng 14GB, còn trống 1.9TB và mới sử dụng 1% ổ.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#sh_5" data-bs-toggle="collapse" class="collapsed">Các câu lệnh liên quan đến mở PORT</a>
                                    </div>
                                    <div class="accordion-collapse collapse" id="sh_5" data-bs-parent="#accordion_1">
                                        <div class="accordion-body">
                                            <p class="mb-0">- Câu lệnh mở port muốn mở: <strong>ufw allow (số port)</strong> </p>
                                            <p class="mb-0">- Câu lệnh mở SSH khi bật tường lửa: <strong>sudo ufw allow ssh</strong></p>
                                            <p class="mb-0">- Câu lệnh mở tường lửa VPS/Ubuntu: <strong>sudo ufw enable -y</strong></p>
                                            <p class="mb-0">- Câu lệnh kiểm tra các port đang mở: <strong>sudo ufw status</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="faq_wp_hosting" role="tabpanel">
                            <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_2">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#sh_3" data-bs-toggle="collapse" class="collapsed">Lỗi không kết nối được với host key</a>
                                    </div>
                                    <div class="accordion-collapse collapse" id="sh_3" data-bs-parent="#accordion_1">
                                        <div class="accordion-body">
                                            <p class="mb-0">Thường xảy ra khi bạn Re-install lại VPS, có 2 cách fix được vấn đề này:</p><br>
                                            <p class="mb-0">- Copy đường dẫn theo diễn giải trong <a href="https://t.me/RunnodeVietNamese/17" target="_blank" rel="noopener noreferrer">ảnh</a>, sau đoá xoá 2 file known_hosts đi, rồi đăng nhập lại VPS là được.</p>
                                            <p class="mb-0">- Nhập lệnh: ssh-keygen -R (địa chỉ IP vps).</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#sh_4" data-bs-toggle="collapse" class="collapsed">Lỗi Port-22 khi đăng nhập VPS</a>
                                    </div>
                                    <div class="accordion-collapse collapse" id="sh_4" data-bs-parent="#accordion_1">
                                        <div class="accordion-body">
                                            <p class="mb-0">- Khi vừa khởi tạo xong VPS nếu vội vàng login ngay sẽ gặp thông báo như vậy, có thể chờ 5 phút rồi login lại sau.</p>
                                            <p class="mb-0">- Lỗi từ nhà cung cấp VPS, có trường hợp bảo trì hoặc liên quan đến đường truyền mạng.</p>
                                            <p class="mb-0">- Khi mở tường lửa bằng lệnh: sudo ufw enable mà quên không mở ssh sẽ bị, bằng cách nhập thêm lệnh này khi mở tường lửa sẽ vào được: sudo ufw allow ssh.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#sh_6" data-bs-toggle="collapse" class="collapsed">Khi nhập lệnh mà bị từ chối thực thi do không dùng quyền root</a>
                                    </div>
                                    <div class="accordion-collapse collapse" id="sh_6" data-bs-parent="#accordion_1">
                                        <div class="accordion-body">
                                            <p class="mb-0">- Có thể sử dụng lệnh: sudo (câu lệnh)</p>
                                            <p class="mb-0">- Nếu quên password root có thể dùng lệnh sau để tạo lại: sudo passwd root.</p>
                                            <p class="mb-0">- Thay đổi quyền User sang root: <strong>su hoặc sudo su</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="faq_vps_hosting" role="tabpanel">
                            <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_3">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#sh_12" data-bs-toggle="collapse">Mục đích sử dụng VPS để chạy node</a>
                                    </div>
                                    <div class="accordion-collapse collapse show" id="sh_12" data-bs-parent="#accordion_3">
                                        <div class="accordion-body">
                                        <p class="mb-0">VPS (Virtual Private Server) là một dịch vụ lưu trữ trên máy chủ ảo, cho phép người dùng có thể cài đặt và chạy các ứng dụng và phần mềm trên một môi trường độc lập. Đối với một cá nhân mới bắt đầu chạy, thì bắt đầu với VPS là tốt nhất mục đích để làm quen và thực hành cách thức cài đặt node.</p><br>
                                        <p class="mb-0">Với VPS, cá nhân có thể chạy một node blockchain 24/7 trên một môi trường độc lập với các ứng dụng khác, mà không cần phải đảm bảo máy tính của mình luôn hoạt động. Việc sử dụng VPS giúp cho node blockchain có thể chạy ổn định, không bị gián đoạn, đồng thời giúp tăng tốc độ xác thực giao dịch và đóng góp vào tính toàn vẹn của mạng blockchain.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#sh_13" data-bs-toggle="collapse" class="collapsed">How many websites can I host?</a>
                                    </div>
                                    <div class="accordion-collapse collapse" id="sh_13" data-bs-parent="#accordion_3">
                                        <div class="accordion-body">
                                            <p class="mb-0">We care about safety big time — and so do your site's visitors. With a Shared Hosting account, you get an SSL certificate for free to add to your site. In this day and age, having an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe interacting with your site — this is particularly important if you run an e-commerce site.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="faq_could_hosting" role="tabpanel">
                            <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_4">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#sh_14" data-bs-toggle="collapse">Node là gì? và có bao nhiêu loại node.</a><br>
                                    </div>
                                    <div class="accordion-collapse collapse show" id="sh_14" data-bs-parent="#accordion_4">
                                        <div class="accordion-body">
                                            <p class="mb-0">Node trong blockchain là một máy tính hoặc thiết bị kết nối với mạng blockchain để tham gia vào việc xác nhận giao dịch và tạo các khối mới.</p><br>
                                            <p class="mb-0">Trong hệ thống blockchain, có nhiều loại node khác nhau tùy thuộc vào mục đích và chức năng của chúng. Tuy nhiên, NodeVietNam sẽ liệt kê ra một số loại node phổ biến nhất trong blockchain như sau:</p><br>
                                            <p class="mb-0">1. <strong>Full node</strong>: Full node chứa toàn bộ dữ liệu của blockchain và duy trì một bản sao đầy đủ của blockchain trên thiết bị của nó. Full node kiểm tra và xác minh tất cả các giao dịch mới trước khi chúng được đưa vào mạng và thêm vào khối mới. Full node cũng đóng vai trò quan trọng trong việc đảm bảo tính toàn vẹn của blockchain bằng cách xác nhận các giao dịch và khối được tạo ra bởi các node khác trên mạng.</p><br>
                                            <p class="mb-0">2. <strong>Light node</strong>: Light node không lưu trữ toàn bộ dữ liệu của blockchain, mà chỉ lưu trữ một phần nhỏ của blockchain và yêu cầu các dữ liệu còn lại từ các node khác trên mạng khi cần thiết. Light node thường được sử dụng trên các thiết bị có tài nguyên hạn chế, như điện thoại thông minh hoặc các thiết bị IoT.</p><br>
                                            <p class="mb-0">3. <strong>Validator node</strong>: Validator node là một loại node đặc biệt trong hệ thống blockchain, có nhiệm vụ xác thực các giao dịch trên blockchain và đưa ra quyết định về việc chấp nhận hay từ chối một giao dịch cụ thể. Validator node thường được sử dụng trong các hệ thống blockchain có cơ chế Proof of Stake (PoS) hoặc Delegated Proof of Stake (DPoS).</p><br>
                                            <p class="mb-0">4. <strong>Bridge node</strong>: Bridge node là một loại node được sử dụng để kết nối hai blockchain hoặc nhiều blockchain khác nhau. Bridge node có thể chuyển đổi các token hoặc thông tin từ một blockchain sang blockchain khác, giúp tạo ra một hệ sinh thái blockchain liên kết và phát triển các ứng dụng phi tập trung (dApp) chạy trên nhiều blockchain khác nhau.</p><br>
                                            <p class="mb-0">5. <strong>Mining node</strong>: Mining node là một loại node trong hệ thống blockchain Proof of Work (PoW), có nhiệm vụ giải quyết các bài toán toán học phức tạp để tạo ra các khối mới trong blockchain.</p><br>
                                            <p class="mb-0">6. <strong>Masternode</strong>: Masternode là một loại node trong hệ thống blockchain Proof of Stake (PoS) hoặc Delegated Proof of Stake (DPoS), có nhiệm vụ thực hiện các chức năng đặc biệt như xác thực giao dịch, đưa ra quyết định về việc tạo khối mới, hoặc cung cấp các dịch vụ tài khoản chuyên nghiệp.</p><br>
                                            <p class="mb-0">- Các node trong mạng blockchain giao tiếp với nhau thông qua giao thức mạng đặc biệt để trao đổi thông tin và thực hiện các hoạt động trên blockchain. Việc có nhiều node tham gia trong mạng blockchain giúp tăng tính bảo mật và độ tin cậy của hệ thống.</p><br>
                                            <p class="mb-0">- Trong hệ thống blockchain, các loại node này đóng vai trò rất quan trọng trong việc duy trì tính toàn vẹn của hệ thống và đảm bảo rằng các giao dịch được xác nhận và xử lý đúng cách. Việc có các loại node khác nhau trong mạng blockchain giúp tăng tính linh hoạt và đa dạng cho hệ thống, đồng thời cũng tăng tính bảo mật và độ tin cậy của nó.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--faq section end-->
