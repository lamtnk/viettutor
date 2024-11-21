@extends('client.layouts.master')
@section('layoutTutorInfo')
<link rel="stylesheet" href="{{ url('') }}/assets/css/pages/layoutTutorInfo.css">

@endsection
@section('main')
    <div id="main" class="container mt-5">
      <!-- Header -->
      <div class="row">
        <div class="col-md-3">
          <div class="text-center">
            <img
              src="https://i.pinimg.com/736x/d5/bc/2f/d5bc2f4a1a5334706760c89ee8b9f0ec.jpg"
              alt="Profile Picture"
              class="profile-img"
            />
            <p class="mt-2"><strong class="ready-txt">Đang sẵn sàng</strong></p>
            <p>Ngày tham gia: zczxzxc</p>
          </div>

          <div>
            <h6 class="achievement-title">Thành Tích</h6>
            <hr />
            <div class="achievement-item">
              <div class="d-flex">
                <span class="achievement-icon">🎖️</span>
                <div class="achievement-content">
                  Thuê thì thuê hông thuê thì rent =)))
                </div>
              </div>
              <div class="achievement-date">09/07/2020</div>
            </div>

            <div class="achievement-item">
              <div class="d-flex">
                <span class="achievement-icon">🎖️</span>
                <div class="achievement-content">Không đấm khách!</div>
              </div>
              <div class="achievement-date">30/11/2022</div>
            </div>
            <div class="achievement-item">
              <div class="d-flex">
                <span class="achievement-icon">🎖️</span>
                <div class="achievement-content">
                  Cựu nhi đồng 2x tuổi, kẻ hủy diệt scam, kẻ thù của lướt mắt
                </div>
              </div>
              <div class="achievement-date">26/01/2024</div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-md-push-6">
          <div class="border rounded p-3 mt-2">
            <div class="price">80,000 ₫/h</div>
            <div class="rating my-2">
              ★★★★☆ <span class="text-muted">89 Đánh giá</span>
            </div>
            <button class="btn btn-custom w-100 mb-2">THUÊ</button>
            <button class="btn btn-outline-primary w-100 mb-2">DONATE</button>
            <button class="btn btn-outline-secondary w-100">CHAT</button>
          </div>
        </div>

        <div class="col-md-6 col-md-pull-3">
          <div class="row mb-4">
            <h3 class="col-md-9">Yan 🌸</h3>
            <button class="btn btn-danger col-md-3">Theo dõi</button>
          </div>

          <div class="row">
            <p class="col-md-3">
              <strong>Số người theo dõi:</strong> 1147 người
            </p>
            <p class="col-md-3"><strong>Số giờ dạy:</strong> 11450 giờ</p>
            <p class="col-md-3"><strong>Tỷ lệ hoàn thành:</strong> 96.41%</p>
            <p class="col-md-3"><strong>Tình trạng thiết bị:</strong> 🎤</p>
          </div>
          <hr />
          <div class="mb-4 mt-4 d-flex flex-wrap overflow-container">
            <span class="custom-tag">Liên Minh Huyền Thoại</span>
            <span class="custom-tag">PUBG PC</span>
            <span class="custom-tag">Liên Minh Huyền Thoại</span>
            <span class="custom-tag">PUBG PC</span>
            <span class="custom-tag">Liên Minh Huyền Thoại</span>
            <span class="custom-tag">PUBG PC</span>
            <span class="custom-tag">CSGO</span>
            <span class="custom-tag">PUBG PC</span>
            <span class="custom-tag">CSGO</span>
            <span class="custom-tag">PUBG PC</span>
          </div>
          <hr />
          <h4><strong>Thông tin</strong></h4>
          <div class="d-flex gap-3 flex-wrap">
            GIỌNG BẮC. MỎ HƠI HỖN. CHƠI GAME VUI VẺ KO TRYHARD !!! SAU 23H MÌNH
            NHẬN 100K/H VÌ MÌNH LƯỜI CHƠI ĐÊM HIHI Mình nhận chơi : - Lol: đơn
            đôi, flex chơi hơi dốt nhưng mà hứa ko tạ =)) - TFT: du học sinh PBE
            2 tuần, đã tốt nghiệp - TFT cặp đôi: gánh khách hoặc khách gánh -
            Aram: thách đấu aram ko lói nhìu :))))))) - PUBG PC: bắn gà nên chỉ
            nhận normal vui vẻ tkuii - Party Animal: Báo đời. chuyên đấm nhầm
            đồng đội =)) - Nhận chửi thuê theo style KhÁ bẢnH 👍 MÌNH KHÔNG BIẾT
            HÁT!!! ❌ KHÔNG RENT NỢ ❌ KHÔNG CHƠI TRƯỚC TRẢ SAU ❌ KHÔNG TIẾP
            NGƯỜI XÀM L Nếu hong thấy mình rep thì ib qua fb cho mình nhé ạ T.T
            https://www.facebook.com/huniedangiuu Đã ghé qua đây rùi thì cho
            mình xin 1 fl nhé hehe. iuuuuuuuuuuu ♥♥♥
          </div>
          <hr />
          <h4 class="mb-4 mt-2">Đánh giá</h4>
          <div class="review-item d-flex">
            <img
              src="https://via.placeholder.com/50"
              alt="Avatar"
              class="review-avatar"
            />
            <div class="flex-grow-1">
              <div class="d-flex justify-content-between">
                <div>
                  <span class="review-header">Nguyễn Ngọc Minh</span>
                  <span class="review-date d-block">22:54:24 8/11/2024</span>
                </div>
                <div>
                  <span class="review-stars">★★★★★</span>
                  <span class="review-duration d-block">(Thuê 3h)</span>
                </div>
              </div>
              <p class="mb-0">10 điểm không chê</p>
            </div>
          </div>

          <div class="review-item d-flex">
            <img
              src="https://via.placeholder.com/50"
              alt="Avatar"
              class="review-avatar"
            />
            <div class="flex-grow-1">
              <div class="d-flex justify-content-between">
                <div>
                  <span class="review-header">Lam Trúc</span>
                  <span class="review-date d-block">11:22:39 27/8/2024</span>
                </div>
                <div>
                  <span class="review-stars">★★★★★</span>
                  <span class="review-duration d-block">(Thuê 1h)</span>
                </div>
              </div>
              <p class="mb-0">Mê bạn này quá trời</p>
            </div>
          </div>

          <div class="review-item d-flex">
            <img
              src="https://via.placeholder.com/50"
              alt="Avatar"
              class="review-avatar"
            />
            <div class="flex-grow-1">
              <div class="d-flex justify-content-between">
                <div>
                  <span class="review-header">K49</span>
                  <span class="review-date d-block">06:58:51 16/8/2024</span>
                </div>
                <div>
                  <span class="review-stars">★★★★★</span>
                  <span class="review-duration d-block">(Thuê 1h)</span>
                </div>
              </div>
              <p class="mb-0">Ngoan xinh yêu 10d</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
