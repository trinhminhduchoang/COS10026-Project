<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    header("Location: login.php"); 
    exit(); 
} 
$active_page = 'about';
include 'header_vi.inc';
?>

  <main id="main" class="page-main">
    <header class="page-intro glass-panel">
      <p class="eyebrow">Những người đứng sau dự án</p>
      <h1>Gặp gỡ Quadro Techies.</h1>
      <p>Chúng tôi là nhóm sinh viên xây dựng ý tưởng doanh nghiệp công nghệ giáo dục, tập trung vào việc học trực tuyến dễ tiếp cận, toàn diện và sẵn sàng cho tương lai tại Việt Nam.</p>
    </header>

    <section class="about-section glass-panel team-overview">
      <div>
        <p class="eyebrow">Nhóm của chúng tôi</p>
        <h2>Cùng tò mò, cùng hợp tác.</h2>
        <ul class="nested-details">
          <li><strong>Tên nhóm:</strong> Quadro Techies
            <ul>
              <li><strong>Ngày và giờ học:</strong> Bổ sung ngày và giờ học của nhóm</li>
              <li><strong>Chủ đề dự án:</strong> G04 — Doanh nghiệp Công nghệ Giáo dục (EdTech)</li>
            </ul>
          </li>
        </ul>
        <p>Trong kịch bản dự án, chúng tôi hình dung một doanh nghiệp công nghệ tạo ra công cụ và nền tảng học tập số phù hợp với thực tế giáo dục hiện đại tại Việt Nam. Nhóm đang xây dựng website rõ ràng, dễ tiếp cận để giới thiệu doanh nghiệp và các cơ hội nghề nghiệp.</p>
      </div>
      <figure class="team-figure glass-panel">
        <img src="./images/Team.jpg" width="720" height="460" alt="Bốn thành viên của nhóm Quadro Techies">
        <figcaption>Đội ngũ Quadro Techies.</figcaption>
      </figure>
    </section>

    <section class="about-section glass-panel">
      <div class="section-heading">
        <p class="eyebrow">Thành viên và đóng góp</p>
        <h2>Mỗi người mang đến một thế mạnh riêng.</h2><br>
      </div>
      <dl class="member-list">
        <div class="member-entry glass-panel">
          <dt><img class="member-photo" src="./images/Hoang.jpg" alt="Chân dung Trịnh Minh Đức Hoàng">Thành viên 1 — Trịnh Minh Đức Hoàng (Trưởng nhóm)</dt>
          <dd class="student-id">Mã sinh viên: SWS02219</dd>
          <dd><strong>Đóng góp:</strong> Xây dựng bố cục và thiết kế giao diện.</dd>
          <dd><strong>Câu nói yêu thích:</strong> <q lang="vi">Một bậc thầy chân chính là một học đồ vĩnh cửu.</q></dd>
          <dd><strong>Dịch nghĩa:</strong> Bậc thầy thực thụ luôn là người học hỏi.</dd>
        </div>
        <div class="member-entry glass-panel">
          <dt><img class="member-photo" src="./images/Nhat.png" alt="Chân dung Lê Minh Nhật">Thành viên 2 — Lê Minh Nhật</dt>
          <dd class="student-id">Mã sinh viên: SWS02419</dd>
          <dd><strong>Đóng góp:</strong> Hiệu ứng hình ảnh và thiết kế trang chủ.</dd>
          <dd><strong>Câu nói yêu thích:</strong> <q lang="vi">Có làm thì mới có ăn.</q></dd>
          <dd><strong>Dịch nghĩa:</strong> Có làm thì mới có thành quả.</dd>
        </div>
        <div class="member-entry glass-panel">
          <dt><img class="member-photo" src="./images/Kha.jpg" alt="Chân dung Huỳnh Lê Minh Kha">Thành viên 3 — Huỳnh Lê Minh Kha</dt>
          <dd class="student-id">Mã sinh viên: SWS02179</dd>
          <dd><strong>Đóng góp:</strong> Thiết kế trang ứng tuyển.</dd>
          <dd><strong>Câu nói yêu thích:</strong> <q lang="vi">Suy nghĩ trước khi hành động. Nhưng đừng suy nghĩ quá lâu rồi không hành động.</q></dd>
          <dd><strong>Dịch nghĩa:</strong> Hãy suy nghĩ trước khi làm, nhưng đừng chần chừ đến mức không bắt đầu.</dd>
        </div>
        <div class="member-entry glass-panel">
          <dt><img class="member-photo" src="./images/Triet.jpg" alt="Chân dung Huỳnh Phan Minh Triết">Thành viên 4 — Huỳnh Phan Minh Triết</dt>
          <dd class="student-id">Mã sinh viên: SWS02372</dd>
          <dd><strong>Đóng góp:</strong> Phát triển tính năng bổ sung và thiết kế trang giới thiệu nhóm.</dd>
          <dd><strong>Câu nói yêu thích:</strong> <q lang="vi">Áp lực tạo nên kim cương.</q></dd>
          <dd><strong>Dịch nghĩa:</strong> Áp lực có thể tạo nên điều quý giá.</dd>
        </div>
      </dl>
    </section>

    <section class="about-section glass-panel">
      <div class="section-heading">
        <p class="eyebrow">Một vài điều thú vị</p>
        <h2>Những sở thích của nhóm.</h2>
      </div>
      <div class="table-wrap glass-panel">
        <table class="facts-table" style="border-color: #176d56;">
          <caption>Thông tin vui về Quadro Techies</caption>
          <thead><tr><th scope="col">Thành viên</th><th scope="col">Nghề nghiệp mơ ước</th><th scope="col">Đồ ăn khi lập trình</th><th scope="col">Quê quán</th></tr></thead>
          <tbody>
            <tr><th scope="row">Thành viên 1 — Trịnh Minh Đức Hoàng</th><td>Luật sư</td><td>Bánh phô mai</td><td>TP. Hồ Chí Minh</td></tr>
            <tr><th scope="row">Thành viên 2 — Lê Minh Nhật</th><td>Lập trình viên phần mềm</td><td>Khoai tây chiên</td><td>TP. Hồ Chí Minh</td></tr>
            <tr><th scope="row">Thành viên 3 — Huỳnh Lê Minh Kha</th><td>Lập trình viên phần mềm</td><td>Tiramisu</td><td>TP. Hồ Chí Minh</td></tr>
            <tr><th scope="row">Thành viên 4 — Huỳnh Phan Minh Triết</th><td>An ninh mạng</td><td>Bánh quy</td><td>TP. Hồ Chí Minh</td></tr>
          </tbody>
        </table>
      </div>
    </section>

    <section class="country-note glass-panel" aria-labelledby="country-heading">
      <div class="country-note-inner">
        <p class="eyebrow">Công nhận Đất nước Bản địa</p>
        <h2 id="country-heading">Chúng tôi công nhận các Người Gìn Giữ Truyền Thống của Đất nước.</h2>
        <p>EduTechies công nhận các dân tộc bản địa Aboriginal và Torres Strait Islander là Người Gìn Giữ Truyền Thống của các vùng đất, nguồn nước và bầu trời nơi chúng tôi sinh sống và làm việc. Chúng tôi bày tỏ sự tôn trọng đối với các Bậc Trưởng Lão quá khứ, hiện tại và tương lai, đồng thời ghi nhận mối gắn kết bền vững của họ với đất đai, văn hóa và cộng đồng.</p>
        <p>Là đội ngũ xây dựng công nghệ giáo dục, chúng tôi nhận thức rằng tri thức, truyền miệng và học tập luôn là những giá trị cốt lõi trong văn hóa Aboriginal và Torres Strait Islander. Chúng tôi cam kết phát triển các nền tảng toàn diện, tôn trọng và phản ánh những truyền thống đó, đồng thời tích cực khuyến khích người Aboriginal và Torres Strait Islander đóng góp và tham gia vào công việc của chúng tôi.</p>
      </div>
    </section>
  </main>

<?php
include 'footer_vi.inc';
?>