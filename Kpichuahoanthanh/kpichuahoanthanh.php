<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
    />
  </head>
  <body>
    <div class="chi-tit-kpi">
      <main class="general">
        <div class="general-inner">
          <div class="frame-parent">
            <div class="chi-tit-kpi-wrapper">
              <h1 class="chi-tit-kpi1">CHI TIẾT KPI</h1>
            </div>
            <div class="frame-group">
              <div class="frame-wrapper">
                <div class="trng-thi-parent">
                  <h1 class="trng-thi">Trạng thái :</h1>
                  <h1 class="tn-kpi">Tên KPI :</h1>
                </div>
              </div>
              <div class="frame-container">
                <button class="ang-thc-hin-wrapper">
                  <a class="ang-thc-hin">Đang thực hiện</a>
                </button>
                <div class="thi-jlpt-n3-wrapper">
                  <h2 class="thi-jlpt">Thi đỗ JLPT N3</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="frame-section">
          <div class="frame-div">
            <div class="frame-wrapper1">
              <div class="ngy-bt-u-15022024-parent">
                <div class="ngy-bt-u-container">
                  <span class="ngy-bt-u">Ngày bắt đầu : </span>
                  <span class="span">15/02/2024</span>
                </div>
                <div class="ngy-kt-thc-container">
                  <span class="ngy-kt-thc">Ngày kết thúc : </span>
                  <span class="span1">30/03/2024</span>
                </div>
              </div>
            </div>
            <div class="frame-parent1">
              <div class="frame-parent2">
                <div class="danh-sch-nhim-v-wrapper">
                  <div class="danh-sch-nhim">Danh sách nhiệm vụ :</div>
                </div>
                <div class="frame-parent3">
                  <div class="rectangle-parent">
                    <div class="frame-child"></div>
                    <div class="khng-hon-thnh-parent">
                      <div class="khng-hon-thnh">
                        <select name="" id="select-item-id" class="select-item" onchange="handleSelectChange(this)">
                                  <option value="Đã hoàn thành">Không hoàn thành</option>
                                  <option value="Không hoàn thành">Đã hoàn thành</option>
                        </select>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="trash-parent">
                <img
                  class="trash-icon"
                  loading="lazy"
                  alt=""
                  src="./public/trash@2x.png"
                />

                <div class="title">Học đọc hiểu trung văn</div>
                <img
                  class="calendar-icon"
                  alt=""
                  src="./public/calendar@2x.png"
                  id="calendarIcon"
                />

                <div class="frame-wrapper2">
                  <div class="ngy-22022024-parent">
                    <div class="ngy-22022024">Ngày 22/02/2024</div>
                    <div class="frame-wrapper3">
                      <div class="frame-parent5">
                        <div class="frame-wrapper4">
                          <div class="title-parent">
                            <div class="title1">5/10 bài đọc</div>
                            <div class="title2">Học đọc hiểu trường văn</div>
                            <div class="value">07 :00 | 8 : 30</div>
                            <div class="vector-parent">
                              <img
                                class="rectangle-icon"
                                alt=""
                                src="./public/rectangle-4.svg"
                              />
                              <button>
                                <img
                                  class="calendar-icon1"
                                  alt=""
                                  src="./public/calendar@2x.png"
                                  id="calendarIcon"
                                />
                              </button>
                              
                            </div>
                          </div>
                        </div>
                        <img
                          class="line-icon"
                          loading="lazy"
                          alt=""
                          src="./public/line-10.svg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-wrapper5">
                  <div class="frame-parent6">
                    <div class="title-group">
                      <div class="title3">Nghe bài 1 : 5/10 bài</div>
                      <div class="title4">Học nghe bài 1</div>
                      <div class="value1">10 :00 | 11 : 30</div>
                      <div class="vector-group">
                        <img
                          class="frame-child1"
                          alt=""
                          src="./public/rectangle-4-1.svg"
                        />

                        <img
                          class="calendar-icon2"
                          alt=""
                          src="./public/calendar@2x.png"
                          id="calendarIcon"
                        />

                        <img
                          class="trash-icon1"
                          loading="lazy"
                          alt=""
                          src="./public/trash@2x.png"
                        />
                      </div>
                    </div>
                    <img
                      class="frame-child2"
                      loading="lazy"
                      alt=""
                      src="./public/line-11.svg"
                    />
                  </div>
                </div>
                <div class="ngy-23022024-parent">
                  <div class="ngy-23022024">Ngày 23/02/2024</div>
                  <div class="frame-wrapper6">
                    <div class="frame-parent7">
                      <div class="title-container">
                        <div class="title5">Học ngữ pháp N3 bài 1</div>
                        <div class="frame-wrapper7">
                          <div class="title-parent1">
                            <div class="title6">0/10 ngữ pháp</div>
                            <div class="value-wrapper">
                              <p class="value2">15 :00 | 15 : 30</p>
                            </div>
                          </div>
                        </div>
                        <div class="vector-container">
                          <img
                            class="frame-child3"
                            alt=""
                            src="./public/rectangle-4.svg"
                          />

                          <img
                            class="calendar-icon3"
                            alt=""
                            src="./public/calendar@2x.png"
                            id="calendarIcon"
                          />

                          <img
                            class="trash-icon2"
                            loading="lazy"
                            alt=""
                            src="./public/trash@2x.png"
                          />
                        </div>
                      </div>
                      <div class="frame-parent8">
                        <div class="vector-frame">
                          <img
                            class="frame-child4"
                            loading="lazy"
                            alt=""
                            src="./public/line-11.svg"
                          />
                        </div>
                        <div class="title-parent2">
                          <div class="title7">Đọc : 0/5 bài</div>
                          <div class="value-container">
                            <div class="value3">16 :00 | 16 : 55</div>
                          </div>
                          <div class="vector-parent1">
                            <img
                              class="frame-child5"
                              alt=""
                              src="./public/rectangle-4.svg"
                            />

                            <img
                              class="trash-icon3"
                              loading="lazy"
                              alt=""
                              src="./public/trash@2x.png"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="vector-wrapper1">
                        <img
                          class="frame-child6"
                          loading="lazy"
                          alt=""
                          src="./public/line-14.svg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-wrapper8">
            <div class="calendar-parent">
              <div class="calendar">
                <div class="body"></div>
                <div class="calendar-header">
                  <div class="calendar-header1"></div>
                  <div class="angle-left-wrapper">
                    <img
                      class="angle-left-icon"
                      alt=""
                      src="./public/angleleft.svg"
                    />
                  </div>
                  <div class="thng-hai-wrapper">
                    <div class="thng-hai">Tháng Hai</div>
                  </div>
                  <img
                    class="angle-right-icon"
                    alt=""
                    src="./public/angleright@2x.png"
                  />
                </div>
                <div class="dates">
                  <div class="s-parent">
                    <div class="s">
                      <div class="square"></div>
                      <div class="s1">S</div>
                    </div>
                    <div class="m">
                      <div class="square1"></div>
                      <div class="m1">M</div>
                    </div>
                    <div class="t">
                      <div class="square2"></div>
                      <div class="t1">T</div>
                    </div>
                    <div class="w">
                      <div class="square3"></div>
                      <div class="w1">W</div>
                    </div>
                    <div class="t2">
                      <div class="square4"></div>
                      <div class="t3">T</div>
                    </div>
                    <div class="f">
                      <div class="square5"></div>
                      <div class="f1">F</div>
                    </div>
                    <div class="s2">
                      <div class="square6"></div>
                      <div class="s3">S</div>
                    </div>
                  </div>
                  <div class="div">
                    <div class="date"></div>
                  </div>
                  <div class="div1">
                    <div class="date1"></div>
                  </div>
                  <div class="div2">
                    <div class="date2"></div>
                  </div>
                  <div class="div3">
                    <div class="date3"></div>
                  </div>
                  <div class="div4">
                    <div class="date4"></div>
                  </div>
                  <div class="div5">
                    <div class="date5"></div>
                  </div>
                  <div class="dates-inner">
                    <div class="parent">
                      <div class="div6">
                        <div class="date6"></div>
                        <div class="div7">1</div>
                      </div>
                      <div class="div8">
                        <div class="date7"></div>
                        <div class="div9">2</div>
                      </div>
                      <div class="div10">
                        <div class="date8"></div>
                        <div class="div11">3</div>
                      </div>
                      <div class="div12">
                        <div class="date9"></div>
                        <div class="div13">4</div>
                      </div>
                      <div class="div14">
                        <div class="date10"></div>
                        <div class="div15">5</div>
                      </div>
                      <div class="div16">
                        <div class="date11"></div>
                        <div class="div17">6</div>
                      </div>
                    </div>
                  </div>
                  <div class="group">
                    <div class="div18">
                      <div class="date12"></div>
                      <div class="div19">7</div>
                    </div>
                    <div class="div20">
                      <div class="date13"></div>
                      <div class="div21">8</div>
                    </div>
                    <div class="div22">
                      <div class="date14"></div>
                      <div class="div23">9</div>
                    </div>
                    <div class="div24">
                      <div class="date15"></div>
                      <div class="div25">10</div>
                    </div>
                    <div class="div26">
                      <div class="date16"></div>
                      <div class="div27">11</div>
                    </div>
                    <div class="div28">
                      <div class="date17"></div>
                      <div class="div29">12</div>
                    </div>
                    <div class="div30">
                      <div class="date18"></div>
                      <div class="div31">13</div>
                    </div>
                  </div>
                  <div class="div32">
                    <div class="date19"></div>
                  </div>
                  <div class="container">
                    <div class="div33">
                      <div class="date20"></div>
                      <div class="div34">14</div>
                    </div>
                    <div class="div35">
                      <div class="date21"></div>
                      <div class="div36">15</div>
                    </div>
                    <div class="div37">
                      <div class="date-active"></div>
                      <div class="div38">16</div>
                    </div>
                    <div class="div39">
                      <div class="date22"></div>
                      <div class="div40">17</div>
                    </div>
                    <div class="div41">
                      <div class="date23"></div>
                      <div class="div42">18</div>
                    </div>
                    <div class="div43">
                      <div class="date24"></div>
                      <div class="div44">19</div>
                    </div>
                    <div class="div45">
                      <div class="date25"></div>
                      <div class="div46">20</div>
                    </div>
                    <div class="div47">
                      <div class="date26"></div>
                      <div class="div48">21</div>
                    </div>
                    <div class="div49">
                      <div class="date27"></div>
                      <div class="div50">22</div>
                    </div>
                    <div class="div51">
                      <div class="date28"></div>
                      <div class="div52">23</div>
                    </div>
                    <div class="div53">
                      <div class="date29"></div>
                      <div class="div54">24</div>
                    </div>
                    <div class="div55">
                      <div class="date30"></div>
                      <div class="div56">25</div>
                    </div>
                    <div class="div57">
                      <div class="date31"></div>
                      <div class="div58">26</div>
                    </div>
                    <div class="div59">
                      <div class="date32"></div>
                      <div class="div60">27</div>
                    </div>
                  </div>
                  <div class="div61">
                    <div class="date33"></div>
                    <div class="div62">28</div>
                  </div>
                </div>
              </div>
              <div class="component-3">
                <div class="order-time">
                  <div class="order-time-inner">
                    <div class="title-data-parent">
                      <div class="title-data">Tổng quan</div>
                      <div class="wrapper-chart-wrapper">
                        <div class="wrapper-chart">
                          <img
                            class="chart-icon"
                            loading="lazy"
                            alt=""
                            src="./public/chart.svg"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="afternoon-parent">
                    <div class="afternoon">
                      <div class="afternoon-inner">
                        <div class="ellipse-div"></div>
                      </div>
                      <div class="hon-thnh-parent">
                        <div class="hon-thnh">Hoàn thành</div>
                        <div class="wrapper">
                          <div class="div63">40%</div>
                        </div>
                      </div>
                    </div>
                    <div class="evening">
                      <div class="evening-inner">
                        <div class="frame-child7"></div>
                      </div>
                      <div class="cha-thc-hin-parent">
                        <div class="cha-thc-hin">Chưa thực hiện</div>
                        <div class="frame">
                          <div class="div64">32%</div>
                        </div>
                      </div>
                    </div>
                    <div class="morning">
                      <div class="morning-inner">
                        <div class="frame-child8"></div>
                      </div>
                      <div class="khng-hon-thnh-group">
                        <div class="khng-hon-thnh1">Không hoàn thành</div>
                        <div class="wrapper1">
                          <div class="div65">28%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <img class="icons" alt="" />

      <div class="sidebar-parent">
        <div class="sidebar">
          <div class="unsplashrmowqdcqn2e-parent">
            <img
              class="unsplashrmowqdcqn2e-icon"
              alt=""
              src="./public/unsplashrmowqdcqn2e@2x.png"
            />

            <div class="company">Anh Vinh</div>
          </div>
          <div class="main-tabs-parent">
            <div class="main-tabs">
              <div class="sidebar-tabs">
                <img class="icon-users" alt="" />

                <b class="text">Trang chủ</b>
                <img class="icons1" alt="" />
              </div>
              <div class="sidebar-tabs1">
                <img class="icon" alt="" />

                <div class="text1">Settings</div>
                <img class="icons2" alt="" />
              </div>
              <div class="sidebar-tabs2">
                <div class="sidebar-tabs3">
                  <img class="icon1" alt="" />

                  <div class="text2">Thống kê</div>
                  <img class="icons3" alt="" />

                  <div class="badges">
                    <div class="div66">1</div>
                  </div>
                </div>
                <div class="sidebar-tabs1-parent">
                  <div class="sidebar-tabs11">
                    <b class="text3">Statistic</b>
                  </div>
                  <div class="sidebar-tabs21">
                    <b class="text4">Innactive</b>
                  </div>
                  <div class="sidebar-tabs31">
                    <b class="text5">Users</b>
                  </div>
                </div>
              </div>
              <div class="sidebar-tabs4">
                <img class="icon-users1" alt="" />

                <div class="text6">Billing</div>
                <img class="icons4" alt="" />
              </div>
            </div>
            <div class="secondary-tabs">
              <div class="sidebar-tabs5">
                <img class="icon-users2" alt="" />

                <div class="text7">Đăng xuất</div>
                <img class="icons5" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar-tabs6">
          <img
            class="icon-users3"
            loading="lazy"
            alt=""
            src="./public/iconusers-3.svg"
          />

          <div class="text-wrapper">
            <div class="text8"><a href="../Dangnhap/dangnhap.php" style="text-decoration: none;color:black">Đăng xuất</a></div>
          </div>
          <img class="icons6" alt="" />
        </div>
        <img
          class="unsplashrmowqdcqn2e-icon1"
          loading="lazy"
          alt=""
          src="./public/unsplashrmowqdcqn2e@2x.png"
        />

        <div class="anh-vinh">Anh Vinh</div>
        <img
          class="remove-bg-1-icon"
          loading="lazy"
          alt=""
          src="./public/removebg-1@2x.png"
        />

        <b class="kpi-control">KPI Control</b>
        <div class="to-kpi">
          <img class="icon2" alt="" />

          <div class="text9">Tạo KPI</div>
          <img class="icons7" alt="" />
        </div>
        <div class="trang-ch-parent">
          <div class="trang-ch">
            

            <b class="text10">Quản lí KPI</b>
            
          </div>
          <div class="frame-parent9">
            <img class="group-icon" alt="" src="./public/group-289928@2x.png" />

            <div class="trang-ch1">
              

              <div class="text11"></div>
              
            </div>
          </div>
        </div>
        <button class="trang-ch2" id="trangCh">
          <img class="icon-users6" alt="" src="./public/iconusers-6.svg" />

          <div class="text12"><a href="../Trangchu/trangchu.php" style="text-decoration: none;color:black">Trang chủ</a></div>
          <img class="icons10" alt="" />
        </button>
        <div class="thng-k" id="thngKContainer">
          <img class="icon3" loading="lazy" alt="" src="./public/icon-2.svg" />

          <div class="text-container">
            <div class="text13"><a href="../Thongke/thongke.php" style="text-decoration: none;color:black">Thống kê</a></div>
          </div>
          <img class="icons11" alt="" />
        </div>
        <div class="ci-t" id="ciTContainer">
          <div class="thng-k1">
            

            <div class="text-frame">
              <div class="text14"><a href="../Caidat/caidat1.php" style="text-decoration: none; color:black">Cài đặt</a></div>
            </div>
            
          </div>
          <img class="settings-icon" alt="" src="./public/settings@2x.png" />
        </div>
        <div class="thng-k-parent">
          <div class="thng-k2" id="thngKContainer">
            

            <div class="text-wrapper1">
              <div class="text15"><a href="../Nguoidung/nguoidung.php" style="text-decoration: none;color:black">Người dùng</a></div>
            </div>
            
          </div>
          <img class="icons14" alt="" src="./public/icons-1.svg" />
        </div>
        <div class="to-kpi-parent">
          <div class="to-kpi1" id="toKPIContainer">
            <img class="icon6" alt="" />

            <div class="text16"><a href="../Taokpi/TaoKPI1/TaoKPI_1.php" style="text-decoration: none;color:black">Tạo KPI</a></div>
            <img class="icons15" alt="" />
          </div>
          <img
            class="icons16"
            loading="lazy"
            alt=""
            src="./public/icons-2.svg"
          />
        </div>
      </div>
    </div>

    <script>
      var calendarIcon = document.getElementById("calendarIcon");
      if (calendarIcon) {
        calendarIcon.addEventListener("click", function (e) {
          // Please sync "XẾP LỊCH" to the project
        });
      }
      
      var trangCh = document.getElementById("trangCh");
      if (trangCh) {
        trangCh.addEventListener("click", function (e) {
          // Please sync "TRANG CHỦ" to the project
        });
      }
      
      var thngKContainer = document.getElementById("thngKContainer");
      if (thngKContainer) {
        thngKContainer.addEventListener("click", function (e) {
          // Please sync "THỐNG KÊ" to the project
        });
      }
      
      var ciTContainer = document.getElementById("ciTContainer");
      if (ciTContainer) {
        ciTContainer.addEventListener("click", function (e) {
          // Please sync "CÀI ĐẶT CHUNG" to the project
        });
      }
      
      var thngKContainer = document.getElementById("thngKContainer");
      if (thngKContainer) {
        thngKContainer.addEventListener("click", function (e) {
          // Please sync "NGƯỜI DÙNG" to the project
        });
      }
      
      var toKPIContainer = document.getElementById("toKPIContainer");
      if (toKPIContainer) {
        toKPIContainer.addEventListener("click", function (e) {
          // Please sync "TẠO KPI" to the project
        });
      }
        function handleSelectChange(selectElement) {
          if (selectElement.value === "Đã hoàn thành") {
              window.location.href = "../Chitietkpi/chitietkpi.php";
          }
        }
      </script>
  </body>
</html>
