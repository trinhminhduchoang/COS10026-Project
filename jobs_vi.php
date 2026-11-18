<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    header("Location: login.php"); 
    exit(); 
}
$active_page = 'careers';
include 'header_vi.inc';
?>

  <main id="main" class="page-main">
    <header class="page-intro glass-panel">
      <p class="eyebrow">Cơ hội nghề nghiệp tại EduTechies</p>
      <h1>Cùng tạo nên trải nghiệm học tập tốt hơn.</h1>
      <p>Gia nhập đội ngũ hợp tác xây dựng công cụ học tập số dễ tiếp cận cho giáo dục Việt Nam. Xem thông tin từng vị trí và sử dụng mã tham chiếu khi ứng tuyển.</p>
    </header>

    <div class="job-list">
      <article class="job-card glass-panel" aria-labelledby="job-dev-title">
        <header class="job-card-header">
          <div>
            <p class="job-reference">Mã vị trí: <strong>ED105</strong></p>
            <h2 id="job-dev-title">Lập trình viên Front-end</h2>
          </div>
          <a class="button button-primary" href="apply_vi.php">Ứng tuyển vị trí này</a>
        </header>
        <aside class="job-aside glass-panel blue-panel">
          <h3>Kết quả mong đợi</h3>
          <p>Người học sử dụng được các tính năng trên nhiều thiết bị và cùng công nghệ hỗ trợ; giáo viên có thể tập trung giảng dạy thay vì xử lý sự cố.</p>
        </aside>
        <p class="job-summary">Phát triển giao diện trực quan, dễ tiếp cận và tương thích nhiều kích thước màn hình cho sản phẩm học tập trực tuyến tại Việt Nam.</p>
        <dl class="job-facts glass-panel">
          <div><dt>Mức lương</dt><dd>16.500–26.500 AUD/năm + phúc lợi</dd></div>
          <div><dt>Báo cáo cho</dt><dd>Trưởng nhóm Kỹ thuật</dd></div>
          <div><dt>Địa điểm</dt><dd>TP. Hồ Chí Minh · kết hợp tại văn phòng và từ xa</dd></div>
        </dl>
        <section class="job-section">
          <h3>Trách nhiệm chính</h3>
          <ol>
            <li>Phát triển và duy trì giao diện đáp ứng bằng HTML, CSS và JavaScript.</li>
            <li>Phối hợp với nhà thiết kế và giáo viên để chuyển nhu cầu học tập thành trải nghiệm rõ ràng.</li>
            <li>Rà soát mã nguồn, kiểm tra khả năng tiếp cận và cải thiện hiệu năng trên các trình duyệt được hỗ trợ.</li>
          </ol>
        </section>
        <div class="requirements-grid">
          <section class="job-section">
            <h3>Yêu cầu bắt buộc</h3>
            <ul>
              <li>Có kinh nghiệm xây dựng giao diện web bằng HTML ngữ nghĩa và CSS hiện đại.</li>
              <li>Nắm được JavaScript và các mẫu tương tác dễ tiếp cận.</li>
              <li>Giao tiếp tốt, phối hợp hiệu quả để giải quyết vấn đề.</li>
            </ul>
          </section>
          <section class="job-section">
            <h3>Ưu tiên</h3>
            <ul>
              <li>Có kinh nghiệm với framework như React hoặc Vue.</li>
              <li>Hiểu hướng dẫn tiếp cận WCAG và kiểm thử tự động.</li>
              <li>Quan tâm đến giáo dục, nền tảng học tập hoặc hòa nhập số.</li>
            </ul>
          </section>
        </div>
      </article>

      <article class="job-card glass-panel" aria-labelledby="job-design-title">
        <header class="job-card-header">
          <div>
            <p class="job-reference">Mã vị trí: <strong>UX204</strong></p>
            <h2 id="job-design-title">Chuyên viên thiết kế trải nghiệm học tập</h2>
          </div>
          <a class="button button-primary" href="apply_vi.php">Ứng tuyển vị trí này</a>
        </header>
        <aside class="job-aside glass-panel blue-panel">
          <h3>Kết quả mong đợi</h3>
          <p>Người học hiểu mục tiêu, tiếp cận nội dung theo cách phù hợp và cảm thấy được hỗ trợ trong suốt quá trình học.</p>
        </aside>
        <p class="job-summary">Thiết kế hành trình học tập số toàn diện, kết hợp thiết kế giảng dạy, nghiên cứu người dùng và nội dung phù hợp với người học Việt Nam.</p>
        <dl class="job-facts glass-panel">
          <div><dt>Mức lương</dt><dd>13.200–20.900 AUD/năm + phúc lợi</dd></div>
          <div><dt>Báo cáo cho</dt><dd>Quản lý Thiết kế học tập</dd></div>
          <div><dt>Địa điểm</dt><dd>TP. Hồ Chí Minh · kết hợp tại văn phòng và từ xa</dd></div>
        </dl>
        <section class="job-section">
          <h3>Trách nhiệm chính</h3>
          <ol>
            <li>Thiết kế trải nghiệm học trực tuyến có cấu trúc và hấp dẫn.</li>
            <li>Phối hợp với chuyên gia để diễn giải chủ đề phức tạp thành nội dung dễ hiểu.</li>
            <li>Thu thập phản hồi và cải thiện luồng học cũng như khả năng sử dụng.</li>
          </ol>
        </section>
        <div class="requirements-grid">
          <section class="job-section">
            <h3>Yêu cầu bắt buộc</h3>
            <ul>
              <li>Có kinh nghiệm về thiết kế học tập, thiết kế giảng dạy hoặc giáo dục số.</li>
              <li>Có khả năng viết mục tiêu, hoạt động và hướng dẫn đánh giá rõ ràng.</li>
              <li>Có kỹ năng tổ chức tốt và quan tâm đến nhu cầu đa dạng của người học.</li>
            </ul>
          </section>
          <section class="job-section">
            <h3>Ưu tiên</h3>
            <ul>
              <li>Có kinh nghiệm với hệ thống quản lý học tập hoặc công cụ biên soạn.</li>
              <li>Am hiểu nội dung số dễ tiếp cận và thiết kế toàn diện.</li>
              <li>Đã đánh giá tài liệu học tập cùng người dùng hoặc giáo viên.</li>
            </ul>
          </section>
        </div>
      </article>

      <article class="job-card glass-panel" aria-labelledby="job-ux-title">
        <header class="job-card-header">
          <div>
            <p class="job-reference">Mã vị trí: <strong>UX307</strong></p>
            <h2>Chuyên viên nghiên cứu UX</h2>
          </div>
          <a class="button button-primary" href="apply_vi.php">Ứng tuyển vị trí này</a>
        </header>
        <aside class="job-aside glass-panel blue-panel">
          <h3>Kết quả mong đợi</h3>
          <p>Tính năng mới phản ánh nhu cầu thực tế và sản phẩm phát triển theo hướng rõ ràng, hữu ích, đáng tin cậy.</p>
        </aside>
        <p class="job-summary">Chuyển phản hồi của người học và giáo viên thành thông tin hữu ích để cải thiện trải nghiệm số trong môi trường giáo dục Việt Nam.</p>
        <dl class="job-facts glass-panel">
          <div><dt>Mức lương</dt><dd>15.400–23.700 AUD/năm + phúc lợi</dd></div>
          <div><dt>Báo cáo cho</dt><dd>Trưởng nhóm Sản phẩm</dd></div>
          <div><dt>Địa điểm</dt><dd>Hà Nội · kết hợp tại văn phòng và từ xa</dd></div>
        </dl>
        <section class="job-section">
          <h3>Trách nhiệm chính</h3>
          <ol>
            <li>Phỏng vấn, kiểm thử khả năng sử dụng và khảo sát người học, giáo viên.</li>
            <li>Phân tích xu hướng và tìm cơ hội cải thiện trải nghiệm học tập số.</li>
            <li>Viết báo cáo nghiên cứu rõ ràng để định hướng quyết định sản phẩm và thiết kế.</li>
          </ol>
        </section>
        <div class="requirements-grid">
          <section class="job-section">
            <h3>Yêu cầu bắt buộc</h3>
            <ul>
              <li>Có kinh nghiệm nghiên cứu người dùng, kiểm thử UX hoặc khám phá sản phẩm.</li>
              <li>Biết chuyển phản hồi thành thông tin có thể áp dụng cho sản phẩm.</li>
              <li>Kỹ năng giao tiếp và trình bày tốt.</li>
            </ul>
          </section>
          <section class="job-section">
            <h3>Ưu tiên</h3>
            <ul>
              <li>Có kinh nghiệm trong giáo dục, dịch vụ công hoặc sản phẩm cộng đồng.</li>
              <li>Quen thuộc với phỏng vấn, sắp xếp thẻ hoặc công cụ phân tích.</li>
              <li>Thoải mái đánh giá cả dữ liệu định tính và định lượng.</li>
            </ul>
          </section>
        </div>
      </article>

      <article class="job-card glass-panel" aria-labelledby="job-content-title">
        <header class="job-card-header">
          <div>
            <p class="job-reference">Mã vị trí: <strong>ED412</strong></p>
            <h2>Chuyên viên chiến lược nội dung</h2>
          </div>
          <a class="button button-primary" href="apply_vi.php">Ứng tuyển vị trí này</a>
        </header>
        <aside class="job-aside glass-panel blue-panel">
          <h3>Kết quả mong đợi</h3>
          <p>Nội dung rõ ràng, hấp dẫn và thực sự hữu ích, giúp người học tiến bộ tự tin hơn và ít bối rối hơn.</p>
        </aside>
        <p class="job-summary">Lập kế hoạch và phát triển nội dung giáo dục có ý nghĩa, giúp người học xây dựng kỹ năng và duy trì động lực.</p>
        <dl class="job-facts glass-panel">
          <div><dt>Mức lương</dt><dd>12.100–18.700 AUD/năm + phúc lợi</dd></div>
          <div><dt>Báo cáo cho</dt><dd>Giám đốc Tiếp thị và Sản phẩm</dd></div>
          <div><dt>Địa điểm</dt><dd>Đà Nẵng · có thể làm việc từ xa</dd></div>
        </dl>
        <section class="job-section">
          <h3>Trách nhiệm chính</h3>
          <ol>
            <li>Xây dựng kế hoạch nội dung phù hợp với nhu cầu người học, thương hiệu và mục tiêu giáo dục.</li>
            <li>Viết, biên tập nội dung giáo dục cho trang web, khóa học và tài liệu tiếp thị.</li>
            <li>Phối hợp với nhóm sản phẩm và thiết kế để nội dung nhất quán, tập trung vào người dùng.</li>
          </ol>
        </section>
        <div class="requirements-grid">
          <section class="job-section">
            <h3>Yêu cầu bắt buộc</h3>
            <ul>
              <li>Kỹ năng viết và biên tập tốt, chú trọng sự rõ ràng và khả năng tiếp cận.</li>
              <li>Có kinh nghiệm lập kế hoạch nội dung, quy trình biên tập hoặc truyền thông giáo dục.</li>
              <li>Biết điều chỉnh giọng văn và cấu trúc theo từng nhóm độc giả.</li>
            </ul>
          </section>
          <section class="job-section">
            <h3>Ưu tiên</h3>
            <ul>
              <li>Có kinh nghiệm tạo nội dung giáo dục hoặc đào tạo cho môi trường số.</li>
              <li>Hiểu SEO, chiến lược nội dung hoặc lập kế hoạch chiến dịch.</li>
              <li>Quan tâm đến giao tiếp toàn diện, lấy người học làm trung tâm.</li>
            </ul>
          </section>
        </div>
      </article>
    </div>

    <section class="country-note glass-panel" aria-labelledby="inclusion-heading">
      <div class="country-note-inner">
        <p class="eyebrow">Tuyển dụng toàn diện</p>
        <h2 id="inclusion-heading">Chúng tôi khuyến khích người Aboriginal và Torres Strait Islander nộp đơn.</h2>
        <p>EduTechies cam kết xây dựng một đội ngũ phản ánh sự đa dạng của các cộng đồng chúng tôi phục vụ. Chúng tôi đặc biệt khuyến khích người Aboriginal và Torres Strait Islander ứng tuyển vào bất kỳ vị trí nào. Chúng tôi nhận thức rằng họ mang đến những góc nhìn, tri thức và kinh nghiệm vô giá cho lĩnh vực công nghệ giáo dục — và chúng tôi đang tích cực đảm bảo quy trình tuyển dụng, văn hóa làm việc và sản phẩm của mình thực sự toàn diện và chào đón.</p>
        <p>Nếu bạn muốn trao đổi về bất kỳ khía cạnh nào của đơn ứng tuyển hoặc cần hỗ trợ trong quá trình ứng tuyển, vui lòng liên hệ với chúng tôi qua <a href="mailto:info@edutechies.com">info@edutechies.com</a>. Chúng tôi luôn sẵn sàng hỗ trợ.</p>
      </div>
    </section>
  </main>

<?php
include 'footer_vi.inc';
?>
