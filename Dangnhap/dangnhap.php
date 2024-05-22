<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
    />
  </head>
  <body>
    <div class="ng-nhp">
      <div class="left-column">
        <div class="top">
          <div class="logo">
            <img
              class="remove-bg-1-icon"
              loading="lazy"
              alt=""
              src="./public/removebg-1@2x.png"
            />

            <h1 class="kpi-control">KPI Control</h1>
          </div>
        </div>
        <div class="content">
          <div class="text">
            <h1 class="ng-nhp1">ĐĂNG NHẬP</h1>
          </div>
          <div class="form">
            <div class="input1">
              <input class="mt-khu" placeholder="Email" type="text" />

              
            </div>
            <div class="input1">
              <input class="mt-khu mt-khu1" placeholder="Mật khẩu" type="text" />

              <img class="eye-off-icon" alt="" src="./public/eyeoff.svg" />
            </div>
            <div class="keep">
              <input class="square" type="checkbox" />

              <div class="lu-mt-khu">Lưu mật khẩu</div>
            </div>
            <button class="button" id="button">
              <div class="ng-nhp2"><a href="../Trangchu/trangchu.php" style="text-decoration: none; color : white;">Đăng nhập</a></div>
            </button>
            <div class="qun-mt-khu">Quên mật khẩu?</div>
            <div class="or">
              <img
                class="or-child"
                loading="lazy"
                alt=""
                src="./public/vector-1.svg"
              />

              <div class="hoc">hoặc</div>
              <img
                class="or-item"
                loading="lazy"
                alt=""
                src="./public/vector-2.svg"
              />
            </div>
            <button class="button1" id="button1">
              <div class="ng-nhp-vi">Đăng nhập với</div>
              <img class="plus-icon" alt="" src="./public/plus.svg" />
            </button>
          </div>
          <div class="bn-cha-c-container" id="bnChaC">
            <span>Bạn chưa có tài khoản? </span>
            <span class="hy-to-ngay">Hãy tạo ngay</span>
          </div>
        </div>
      </div>
    </div>

    <script>
      var button = document.getElementById("button");
      if (button) {
        button.addEventListener("click", function (e) {
          // Please sync "TRANG CHỦ" to the project
        });
      }
      
      var button1 = document.getElementById("button1");
      if (button1) {
        button1.addEventListener("click", function (e) {
          // Please sync "Frame 289845" to the project
        });
      }
      
      var bnChaC = document.getElementById("bnChaC");
      if (bnChaC) {
        bnChaC.addEventListener("click", function (e) {
          // Please sync "ĐĂNG KÝ" to the project
        });
      }
      </script>
  </body>
</html>
