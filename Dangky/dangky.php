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
    <div class="ng-k">
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
          <h1 class="ng-k1">ĐĂNG KÝ</h1>
          <div class="form">
            <div class="input">
              <input class="nguyn-vinh" placeholder="" type="text" />

              <div class="label">
                <div class="tn">Tên</div>
              </div>
            </div>
            <div class="input1">
              <input class="nguyn-vinh" placeholder="" type="text" />
              <div class="label1">
                
                <div class="ngy-sinh">Ngày sinh</div>
              </div>
            </div>
            <div class="input2">
              <input class="nguyn-vinh" placeholder="" type="text" />
              <div class="label2">
                <div class="email">Email</div>
              </div>
              
            </div>
            <button class="button" id="button">
              <div class="tip-tc"><a href="../Dangnhap/dangnhap.php" style="text-decoration: none; color : white;">Tiep Tuc</a></div>
            </button>
            <div class="or">
              <img
                class="alternative-login-icons"
                loading="lazy"
                alt=""
                src="./public/vector-1.svg"
              />

              <div class="hoc">hoặc</div>
              <img
                class="alternative-login-icons1"
                loading="lazy"
                alt=""
                src="./public/vector-2.svg"
              />
            </div>
            <button class="button1" id="button1">
              <div class="ng-k-vi">Đăng ký với</div>
              <img class="plus-icon" alt="" src="./public/plus.svg" />
            </button>
          </div>
          <div class="text"></div>
          <div class="bn-c-container" id="bnC">
            <span>Bạn đã có tài khoản? </span>
            <span class="ng-nhp">Đăng nhập</span>
          </div>
        </div>
      </div>
    </div>

    <script>
      var button = document.getElementById("button");
      if (button) {
        button.addEventListener("click", function (e) {
          // Please sync "ĐĂNG KÝ" to the project
        });
      }
      
      var button1 = document.getElementById("button1");
      if (button1) {
        button1.addEventListener("click", function (e) {
          // Please sync "ĐĂNG KÝ" to the project
        });
      }
      
      var bnC = document.getElementById("bnC");
      if (bnC) {
        bnC.addEventListener("click", function (e) {
          // Please sync "ĐĂNG NHẬP" to the project
        });
      }
      </script>
  </body>
</html>
