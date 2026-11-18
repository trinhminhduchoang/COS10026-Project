<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    header("Location: login.php"); 
    exit(); 
} 
$active_page = 'apply';
include 'header_vi.inc';
?>

    <form class="application-form" action="https://mercury.swin.edu.au/it000000/formtest.php" method="post" enctype="multipart/form-data">
      <fieldset class="form-section glass-panel">
        <legend>Vị trí ứng tuyển và thông tin liên hệ</legend>
        <div class="form-grid">

          <div class="form-field reference-field">
            <input class="form-input" id="job-reference" name="jobReference" type="text" pattern="[A-Za-z0-9]{5}" title="Nhập chính xác 5 chữ cái hoặc chữ số." maxlength="5" autocomplete="off" placeholder=" " required>
            <label class="form-label" for="job-reference">
              <span class="form-label-char" style="--index: 0">M</span>
              <span class="form-label-char" style="--index: 1">ã</span>
              <span class="form-label-char" style="--index: 2">&nbsp;</span>
              <span class="form-label-char" style="--index: 3">t</span>
              <span class="form-label-char" style="--index: 4">h</span>
              <span class="form-label-char" style="--index: 5">a</span>
              <span class="form-label-char" style="--index: 6">m</span>
              <span class="form-label-char" style="--index: 7">&nbsp;</span>
              <span class="form-label-char" style="--index: 8">c</span>
              <span class="form-label-char" style="--index: 9">h</span>
              <span class="form-label-char" style="--index: 10">i</span>
              <span class="form-label-char" style="--index: 11">ế</span>
              <span class="form-label-char" style="--index: 12">u</span>
            </label>
            <small>Nhập mã gồm 5 ký tự, ví dụ: ED105</small>
          </div>

          <div class="form-field">
            <input class="form-input" id="first-name" name="firstName" type="text" pattern="[\p{L} ]{1,40}" title="Nhập từ 1 đến 40 chữ cái." maxlength="40" autocomplete="given-name" required>
            <label class="form-label" for="first-name">
              <span class="form-label-char" style="--index: 0">T</span>
              <span class="form-label-char" style="--index: 1">ê</span>
              <span class="form-label-char" style="--index: 2">n</span>
            </label>
            <small>Chỉ nhập chữ cái, ví dụ: Minh</small>
          </div>

          <div class="form-field">
            <input class="form-input" id="last-name" name="lastName" type="text" pattern="[\p{L} ]{1,40}" title="Nhập từ 1 đến 40 chữ cái." maxlength="40" autocomplete="family-name" required>
            <label class="form-label" for="last-name">
              <span class="form-label-char" style="--index: 0">H</span>
              <span class="form-label-char" style="--index: 1">ọ</span>
              <span class="form-label-char" style="--index: 2">&nbsp;</span>
              <span class="form-label-char" style="--index: 3">v</span>
              <span class="form-label-char" style="--index: 4">à</span>
              <span class="form-label-char" style="--index: 5">&nbsp;</span>
              <span class="form-label-char" style="--index: 6">t</span>
              <span class="form-label-char" style="--index: 7">ê</span>
              <span class="form-label-char" style="--index: 8">n</span>
              <span class="form-label-char" style="--index: 9">&nbsp;</span>
              <span class="form-label-char" style="--index: 10">đ</span>
              <span class="form-label-char" style="--index: 11">ệ</span>
              <span class="form-label-char" style="--index: 12">m</span>
            </label>
            <small>Ví dụ: Nguyễn Văn</small>
          </div>

          <div class="form-field">
            <input class="form-input" id="date-of-birth" name="dateOfBirth" type="date" title="Nhập ngày sinh theo định dạng ngày/tháng/năm." autocomplete="bday" required>
            <label class="form-label" for="date-of-birth">
              <span class="form-label-char" style="--index: 0">N</span>
              <span class="form-label-char" style="--index: 1">g</span>
              <span class="form-label-char" style="--index: 2">à</span>
              <span class="form-label-char" style="--index: 3">y</span>
              <span class="form-label-char" style="--index: 4">&nbsp;</span>
              <span class="form-label-char" style="--index: 5">s</span>
              <span class="form-label-char" style="--index: 6">i</span>
              <span class="form-label-char" style="--index: 7">n</span>
              <span class="form-label-char" style="--index: 8">h</span>
            </label>
          </div>

          <fieldset class="form-field gender-field">
            <legend>Giới tính</legend>
            <div class="choice-row radio-group">
              <label class="liquid-radio variant-lavender">
                <input type="radio" name="gender" value="female" required>
                <span class="radio-visual" aria-hidden="true"></span>
                <span class="radio-label">Nữ</span>
              </label>
              <label class="liquid-radio variant-coral">
                <input type="radio" name="gender" value="male">
                <span class="radio-visual" aria-hidden="true"></span>
                <span class="radio-label">Nam</span>
              </label>
              <label class="liquid-radio variant-mint">
                <input type="radio" name="gender" value="prefer-not-to-say">
                <span class="radio-visual" aria-hidden="true"></span>
                <span class="radio-label">Không muốn trả lời</span>
              </label>
            </div>
          </fieldset>

          <div class="form-field">
            <input class="form-input" id="street-address" name="streetAddress" type="text" maxlength="80" autocomplete="street-address" required>
            <label class="form-label" for="street-address">
              <span class="form-label-char" style="--index: 0">Đ</span>
              <span class="form-label-char" style="--index: 1">ị</span>
              <span class="form-label-char" style="--index: 2">a</span>
              <span class="form-label-char" style="--index: 3">&nbsp;</span>
              <span class="form-label-char" style="--index: 4">c</span>
              <span class="form-label-char" style="--index: 5">h</span>
              <span class="form-label-char" style="--index: 6">ỉ</span>
            </label>
            <small>Ví dụ: 12, Trần Hưng Đạo</small>
          </div>

          <div class="form-field">
            <input class="form-input" id="suburb" name="suburb" type="text" maxlength="80" autocomplete="address-level3" required>
            <label class="form-label" for="suburb">
              <span class="form-label-char" style="--index: 0">P</span>
              <span class="form-label-char" style="--index: 1">h</span>
              <span class="form-label-char" style="--index: 2">ư</span>
              <span class="form-label-char" style="--index: 3">ờ</span>
              <span class="form-label-char" style="--index: 4">n</span>
              <span class="form-label-char" style="--index: 5">g</span>
              <span class="form-label-char" style="--index: 6">/</span>
              <span class="form-label-char" style="--index: 7">Q</span>
              <span class="form-label-char" style="--index: 8">u</span>
              <span class="form-label-char" style="--index: 9">ậ</span>
              <span class="form-label-char" style="--index: 10">n</span>
            </label>
            <small>Ví dụ: Phường Bến Nghé, Quận 1</small>
          </div>

          <div class="form-field">
            <select class="form-select form-input" id="state" name="state" autocomplete="address-level1" required>
              <option value="" selected disabled></option>
              <option value="VIC">VIC</option>
              <option value="NSW">NSW</option>
              <option value="QLD">QLD</option>
              <option value="NT">NT</option>
              <option value="WA">WA</option>
              <option value="SA">SA</option>
              <option value="TAS">TAS</option>
              <option value="ACT">ACT</option>
            </select>
            <label class="form-label form-select-label" for="state">Bang hoặc vùng lãnh thổ</label>
          </div>

          <div class="form-field">
            <input class="form-input" id="postcode" name="postcode" type="text" inputmode="numeric" pattern="[0-9]{5,6}" title="Nhập mã bưu chính gồm 5 hoặc 6 chữ số." maxlength="6" autocomplete="postal-code" required>
            <label class="form-label" for="postcode">
              <span class="form-label-char" style="--index: 0">M</span>
              <span class="form-label-char" style="--index: 1">ã</span>
              <span class="form-label-char" style="--index: 2">&nbsp;</span>
              <span class="form-label-char" style="--index: 3">b</span>
              <span class="form-label-char" style="--index: 4">ư</span>
              <span class="form-label-char" style="--index: 5">u</span>
              <span class="form-label-char" style="--index: 6">&nbsp;</span>
              <span class="form-label-char" style="--index: 7">c</span>
              <span class="form-label-char" style="--index: 8">h</span>
              <span class="form-label-char" style="--index: 9">í</span>
              <span class="form-label-char" style="--index: 10">n</span>
              <span class="form-label-char" style="--index: 11">h</span>
            </label>
            <small>Nhập mã bưu chính tại nơi bạn sinh sống</small>
          </div>

          <div class="form-field">
            <input class="form-input" id="email" name="email" type="email" autocomplete="email" required>
            <label class="form-label" for="email">
              <span class="form-label-char" style="--index: 0">E</span>
              <span class="form-label-char" style="--index: 1">m</span>
              <span class="form-label-char" style="--index: 2">a</span>
              <span class="form-label-char" style="--index: 3">i</span>
              <span class="form-label-char" style="--index: 4">l</span>
            </label>
            <small>Ví dụ: minh@gmail.com</small>
          </div>

          <div class="form-field">
            <input class="form-input" id="phone" name="phone" type="tel" inputmode="numeric" pattern="0[0-9]{9}" title="Nhập số điện thoại Việt Nam gồm 10 chữ số, bắt đầu bằng số 0." maxlength="10" autocomplete="tel" required>
            <label class="form-label" for="phone">
              <span class="form-label-char" style="--index: 0">Đ</span>
              <span class="form-label-char" style="--index: 1">i</span>
              <span class="form-label-char" style="--index: 2">ệ</span>
              <span class="form-label-char" style="--index: 3">n</span>
              <span class="form-label-char" style="--index: 4">&nbsp;</span>
              <span class="form-label-char" style="--index: 5">t</span>
              <span class="form-label-char" style="--index: 6">h</span>
              <span class="form-label-char" style="--index: 7">o</span>
              <span class="form-label-char" style="--index: 8">ạ</span>
              <span class="form-label-char" style="--index: 9">i</span>
            </label>
            <small>Nhập số điện thoại gồm 10 chữ số</small>
          </div>

        </div>
      </fieldset>

      <fieldset class="form-section glass-panel skill-fieldset">
        <legend>Kỹ năng và kinh nghiệm</legend>
        <p class="field-hint">Chọn những kỹ năng phù hợp với bạn.</p>
        <div class="skill-grid">
          <label for="web"><input type="checkbox" id="web" name="skills" value="web-development">Phát triển web</label>
          <label for="access-des"><input type="checkbox" id="access-des" name="skills" value="accessible-design">Thiết kế dễ tiếp cận</label>
          <label for="learn-des"><input type="checkbox" id="learn-des" name="skills" value="learning-design">Thiết kế học tập</label>
          <label for="user"><input type="checkbox" id="user" name="skills" value="user-research">Nghiên cứu người dùng</label>
          <label for="content"><input type="checkbox" id="content" name="skills" value="content-writing">Viết nội dung</label>
          <label for="project"><input type="checkbox" id="project" name="skills" value="project-management">Quản lý dự án</label>
        </div>
        <div class="form-field">
          <label for="other-skills">Kỹ năng hoặc thông tin khác (không bắt buộc)</label>
          <textarea class="form-input form-textarea" id="other-skills" name="otherSkills" rows="4" placeholder="Chia sẻ thêm kỹ năng hoặc kinh nghiệm bạn muốn chúng tôi biết."></textarea>
        </div>
        <div class="form-field">
          <label for="cv-upload">Vui lòng tải CV lên tại đây (chỉ chấp nhận ảnh hoặc PDF)</label>
          <input type="file" id="cv-upload" name="cv" accept=".pdf,image/*">
        </div>
      </fieldset>
      <button class="button button-primary submit-button" type="submit">Gửi hồ sơ ứng tuyển</button>
    </form>
  </main>

<?php
include 'footer_vi.inc';
?>
