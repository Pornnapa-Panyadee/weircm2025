<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>ChiangMai Weir </title>

    <link rel="icon" href="{{ asset('images/icon/favicon1.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/feather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/buttons.datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/form/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/style1.css')}}">

    <style>
      .text{
        font-size: 18px;
        margin: 5px;
        margin-bottom: 20px;
        padding:10px;
        text-indent: 5em;
        text-align:justify;
      }
      .text2{
        font-size: 18px;
        margin-left: 5em;
        padding:5px;
      }
      .text3{
        font-size: 18px;
        margin-left: 7em;
        padding:5px;
      }
    </style>
  </head>

  <body class="horizontal-icon-fixed" >
    @yield('content')
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded" >
      <div class="pcoded-overlay-box"></div>
      
      <div class="pcoded-container navbar-wrapper">
        @include('menu.header')

        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
             @include('menu.slidebar')
            <!-- Map -->
            <div class="pcoded-content">
              <div class="card"><h3></h3></div>
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12">
                                    <div class="card table-card">
                                        <div class="card-header text-center">
                                        <h2>โครงการพัฒนาระบบสารสนเทศการตรวจประเมินสภาพฝายและการบริหารจัดการ <br> พื้นที่เสี่ยงภัยแล้งและน้ำท่วมในจังหวัดเชียงใหม่
                                          
                                        </h2>     
                                        <hr>                         
                                        </div>

                                        <div class="card-block">
                                          <div class="row justify-content-md-center">
                                            <div class="col-md-10 col-lg-10">
                                              <div class="card">
                                                <div class="card-block">
                                                    <h3> 1. หลักการและเหตุผล : </h3>
                                                      <div class="text">
                                                        สืบเนื่องจากที่ผ่านมา องค์การบริหารส่วนจังหวัดเชียงใหม่ได้รับคำร้องขอการสนับสนุนการปรับปรุงซ่อมแซมฝายขององค์กรปกครองส่วนท้องถิ่นในจังหวัดเชียงใหม่มาอย่างต่อเนื่อง ซึ่งการรับเรื่องการปรับปรุงฝายส่วนใหญ่ไม่ได้มีการวางแผนและมีการเก็บข้อมูลครบถ้วนตามหลักวิชาการ ทำให้ผลลัพธ์ในเรื่องการสร้างประโยชน์ให้พื้นที่ไม่สมบูรณ์ ซึ่งจากการลงพื้นที่รับฟังปัญหาของประชาชน ได้พบปัญหาสำคัญมากอีกอย่าง คือ ฝายและระบบส่งน้ำที่มีอยู่จำนวนมากนั้น มีฝายอีกจำนวนมากที่ชำรุดเสียหายหรือมีประสิทธิภาพไม่ดี ได้แก่ การขาดความสามารถในการยกระดับผันน้ำเข้าคลองหรือเหมืองส่งน้ำไปใช้ในฤดูการเพาะปลูก ประตูน้ำชำรุด มีตะกอนหน้าฝาย และขาดความสามารถใช้เก็บกักน้ำไว้ใช้ที่บริเวณหน้าฝายในฤดูแล้ง และมีฝายบางส่วนที่สร้างปัญหากีดขวางทางน้ำ ซึ่งถ้าแก้ไขปรับปรุงไม่ถูกหลักวิชาการจะก่อให้เกิดปัญหาภัยแล้งและน้ำท่วมขึ้นในพื้นที่ได้ จากการหารือในคณะอนุกรรมทรัพยากรน้ำจังหวัดเชียงใหม่ พบว่าจังหวัดเชียงใหม่ยังขาดการจัดเก็บระบบฐานข้อมูลสภาพฝายของทุกหน่วยงานที่มีนับพันแห่ง ทำให้การวางแผนป้องกันและแก้ไขปัญหาภัยแล้งในพื้นที่เกษตรที่ใช้น้ำจากฝายยังทำได้ไม่ดี เนื่องจากฝายจำนวนมากมีการชำรุด หลายหน่วยงานไม่สามารถซ่อมแซมได้เนื่องจากต้องใช้ความรู้ในวิชาการด้านวิศวกรรมชลศาสตร์ ขาดผลการตรวจประเมินสภาพฝายและไม่มีการเตรียมแนวทางการซ่อมแซมแก้ไขการชำรุดของฝายไว้ล่วงหน้า ทำให้เสียโอกาสในการได้ใช้งบประมาณจากภาครัฐในเรื่องการแก้ไขปัญหาภัยแล้งเร่งด่วน ทั้งที่การใช้งบในการปรับปรุงซ่อมแซมฝายที่มีอยู่เดิมนั้นสามารถทำได้โดยทันที เพราะไม่มีปัญหาเรื่องการใช้ที่ดินใหม่ และไม่มีปัญหาข้อขัดแย้งของชุมชน โดยการแก้ไขปัญหาดังกล่าวให้ได้ผลนั้น จะต้องทำการตรวจประเมินสภาพฝายซึ่งเป็นการตรวจสภาพการใช้งานและความเสี่ยงต่อความปลอดภัยขององค์ประกอบต่าง ๆของฝาย และใช้องค์ความรู้ด้านวิชาการร่วมกับองค์ความรู้ของชุมชน มาวางแนวทางปรับปรุงหรือเปลี่ยนแปลงรูปแบบของฝาย เพื่อให้กลับมามีประสิทธิภาพ นอกจากนี้น้ำที่เก็บกักหน้าฝายจะเป็นแหล่งเติมน้ำให้กับชั้นน้ำใต้ดินระดับตื้นในพื้นที่ได้เป็นอย่างดี 
                                                      </div>
                                                      <div class="text"> 
                                                        ดังนั้นจึงมีความจำเป็นที่จะต้องพัฒนาระบบสารสนเทศการตรวจประเมินสภาพฝายและการบริหารจัดการพื้นที่เสี่ยงภัยแล้งและน้ำท่วมในจังหวัดเชียงใหม่ เพื่อจะได้มีการเตรียมความพร้อมเพื่อรับมือภัยแล้งและน้ำท่วมในพื้นที่ความเสี่ยงสูงอย่างเป็นระบบ โดยเน้นกิจกรรมหลักเร่งด่วน (Quick Win) ได้แก่ (1) กิจกรรมพัฒนาระบบข้อมูลสารสนเทศการตรวจประเมินและวางแผนปรับปรุงเพิ่มประสิทธิภาพฝายในพื้นที่จังหวัดเชียงใหม่ เพื่อเป็นแนวทางการแก้ไขปัญหาที่เหมาะสมถูกหลักวิชาการ มีการรวบรวมตำแหน่งของฝายทุกแห่งที่มีปัญหาและเสนอแนะแนวทางวิธีการปรับปรุงเพื่อเพิ่มประสิทธิภาพฝายหรือปรับเปลี่ยนรูปแบบในแต่ละแห่ง โดยเฉพาะอย่างยิ่งฝายที่มีอยู่จำนวนมากที่ก่อสร้างและอยู่ในการดูแลขององค์กรปกครองส่วนท้องถิ่นและชุมชน โดยผลผลิตที่ได้จะใช้เป็นข้อมูลสำคัญในกำหนดรูปแบบของการวางแผน การจัดหางบประมาณ และลงมือปฏิบัติการแก้ไขปัญหาต่อไปโดยหน่วยงานที่เกี่ยวข้อง องค์กรปกครองส่วนท้องถิ่น และชุมชน นอกจากนี้องค์การบริหารส่วนจังหวัดเชียงใหม่ยังสามารถนำผลผลิตไปใช้วางแผนให้การสนับสนุนองค์กรปกครองส่วนท้องถิ่นต่าง ๆ สำหรับการปรับปรุงและซ่อมแซมฝายให้มีประสิทธิภาพเพื่อสร้างประโยชน์ต่อประชาชนในพื้นที่ได้อย่างเป็นรูปธรรม และ (2) กิจกรรมการบริหารจัดการพื้นที่เสี่ยงภัยแล้งและน้ำท่วมในพื้นที่เป้าหมาย โดยมีการสำรวจสภาพปัญหาและกำหนดรูปแบบวิธีการแก้ไขปัญหาในเชิงลึกลงรายละเอียด เพื่อให้องค์การบริหารส่วนจังหวัดเชียงใหม่หรือหน่วยงานที่เกี่ยวข้องมีความพร้อมที่จะนำไปสู่การปฏิบัติจริง
                                                      </div>
                                                      

                                                    <br>
                                                    <h3>2. วัตถุประสงค์ของโครงการ : </h3>
                                                    <div class="text2"> 
                                                      1) เพื่อใช้เป็นข้อมูลประกอบการจัดทำแผนงาน แผนปฏิบัติการ และแผนงบประมาณการบริหารจัดการทรัพยากรน้ำแบบบูรณาการขององค์กรปกครองส่วนท้องถิ่นในระดับจังหวัดตามกรอบแผนแม่บทลุ่มน้ำในฐานะคณะอนุกรรมการน้ำจังหวัดเชียงใหม่
                                                    </div>
                                                    <div class="text2"> 
                                                      2) เพื่อรวบรวมข้อมูลโครงการขนาดใหญ่ที่เกินศักยภาพขององค์กรปกครองส่วนท้องถิ่นเพื่อดำเนินการแก้ไขในภาพรวมของทั้งจังหวัด โดยมีการสำรวจสภาพปัญหาและกำหนดรูปแบบวิธีการแก้ไขปัญหาในเชิงลึกลงรายละเอียด เพื่อให้องค์การบริหารส่วนจังหวัดเชียงใหม่หรือหน่วยงานที่เกี่ยวข้องมีความพร้อมที่จะนำไปสู่การปฏิบัติจริง
                                                    </div>
                                                    <div class="text2"> 
                                                      3) เพื่อพัฒนาระบบสารสนเทศการตรวจประเมินสภาพฝายและการบริหารจัดการพื้นที่เสี่ยงภัยแล้งและน้ำท่วมในจังหวัดเชียงใหม่ โดยเฉพาะอย่างยิ่งฝายที่มีอยู่จำนวนมากที่ก่อสร้างและอยู่ในการดูแลขององค์กรปกครองส่วนท้องถิ่น เพื่อเตรียมความพร้อมรับมือสถานการณ์ภัยแล้ง นอกจากนี้น้ำที่เก็บกักหน้าฝายจะเป็นแหล่งเติมน้ำให้กับชั้นน้ำใต้ดินในพื้นที่ได้เป็นอย่างดี
                                                    </div>
                                                    
                                                    <br>
                                                   
                                                    <h3>3. ผลลัพธ์ของโครงการ : </h3>
                                                    <div class="text2">  
                                                      1) จังหวัดเชียงใหม่มีระบบสารสนเทศการตรวจประเมินและวางแผนปรับปรุงเพิ่มประสิทธิภาพฝายพร้อมแนวทางและวิธีการแก้ไขปัญหาเพื่อเตรียมความพร้อมรับมือภัยแล้งและน้ำท่วมในพื้นที่นำร่องทุกตำบลของ 15 อำเภอในจังหวัดเชียงใหม่
                                                    </div>
                                                    <div class="text2">    
                                                      2) พัฒนาระบบสารสนเทศการตรวจประเมินและวางแผนปรับปรุงเพิ่มประสิทธิภาพฝายในพื้นที่ทุกตำบลใน 15 อำเภอของจังหวัดเชียงใหม่ ได้แก่ อำเภอดอยหล่อ อำเภอแม่วาง อำเภอสันป่าตอง อำเภอหางดง อำเภอสะเมิง อำเภอแม่ริม อำเภอสันทราย อำเภอดอยสะเก็ด อำเภอสันกำแพง อำเภอแม่ออน อำเภอสารภี อำเภอเมืองเชียงใหม่ อำเภอฝาง อำเภอแม่อาย และอำเภอไชยปราการ โดยเฉพาะอย่างยิ่งฝายที่มีอยู่จำนวนมากที่ก่อสร้างและอยู่ในการดูแลขององค์กรปกครองส่วนท้องถิ่น เพื่อเตรียมความพร้อมรับมือสถานการณ์ภัยแล้ง และน้ำที่เก็บกักหน้าฝายจะเป็นแหล่งเติมน้ำให้กับชั้นน้ำใต้ดินในพื้นที่ได้เป็นอย่างดี
                                                    </div>
                                                    <div class="text2">  
                                                      3) การบริหารจัดการพื้นที่เสี่ยงภัยแล้งและน้ำท่วมในพื้นที่เป้าหมายที่เกิดปัญหาภัยแล้งและน้ำท่วมอย่างซ้ำซาก โดยมีการสำรวจสภาพปัญหาและกำหนดรูปแบบวิธีการแก้ไขปัญหาในเชิงลึกลงรายละเอียด เพื่อให้หน่วยงานมีความพร้อมที่จะนำไปสู่การปฏิบัติจริง 
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
                    </div>
                </div>
            </div>
          </div>
            @include('menu.foot')
          </div>
          
        </div>

      </div>
    </div>
    
    
    <script src="{{ asset('js/form/jquery.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/form/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery-i18next.min.js')}}" ></script>
    <script src="{{ asset('js/form/pcoded.min.js')}}" ></script>
    <script src="{{ asset('js/form/menu-hori-fixed.js')}}" ></script>
    <script src="{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js')}}" ></script>
    <script src="{{ asset('js/form/script.js')}}"></script>
   
  
    <script src="{{ asset('js/form/jquery.datatables.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.buttons.min.js')}}" ></script>

    <script src="{{ asset('js/form/datatables.fixedheader.min.js')}}"></script>

    <script src="{{ asset('js/form/datatables.colreorder.min.js')}}" ></script>
    <script src="{{ asset('js/form/buttons.print.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.bootstrap4.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.responsive.min.js')}}" ></script>
    <script src="{{ asset('js/form/responsive.bootstrap4.min.js')}}"></script>

    <script src= "{{ asset('js/form/fixed-header-custom.js') }}"></script>

    <script src= "{{ asset('js/form/pcoded.min.js') }}"></script>
    <script src= "{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js') }}"></script>

  
    <script src="{{ asset('js/form/rocket-loader.min.js')}}" data-cf-settings="ce2668daaac54a74e9f6cdff-|49" defer=""></script>

  
  </body>

</html>
