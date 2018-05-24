
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Machine Learning</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="Enter Your Search...">
                <i class="ti-close"></i>
            </div>
        </section>
        <!--================End Search Area =================-->

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{route('homebase')}}">Home</a></li>
                        <li class="nav-item"><a  href="{{route('static')}}">Input Data</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                        <li><a href="#"><i class="icon_bag_alt"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    <h4>Machine Learning</h4>
                    <h5>Mengklasifikasikan Jenis Kaca Berdasarkan Kegunaannya</h5>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Contact Us Area =================-->
        <section class="contact_us_area">
            <div class="container">
                        <div class="col-lg-12">
                            <div class="contact_form">
                                <div class="main_title">
                                    <h2>-- INFORMASI ATRIBUT --</h2>
                                    <p>Isikan informasi atribut pada kolom yang kosong dibawah ini </p>
                                </div>
                                <form class="contact_us_form row" id="formstatic" action="contact_process.php" method="post" novalidate="novalidate">
                                    <div class="form-group col-lg-10">
                                        <input type="text" class="form-control" id="refractive" name="refractive" placeholder="Refractive Index (RI) (1.511150 ~ 1.533930)">
                                    </div>
                                    <div class="form-group col-lg-10">
                                        <input type="email" class="form-control" id="sodium" name="sodium" placeholder="Sodium (Na) (10.730000 ~ 17.380000) ">
                                    </div>
                                    <div class="form-group col-lg-10">
                                        <input type="text" class="form-control" id="alumunium" name="alumunium" placeholder="Alumunium (Al) (0 ~ 4.490000)">
                                    </div>
                                    <div class="form-group col-lg-10">
                                        <input type="text" class="form-control" id="magnesium" name="magnesium" placeholder="Magnesium (Mg) (0.290000 ~ 3.500000.
)">
                                    </div>
                                    <div class="form-group col-lg-10">
                                        <input type="text" class="form-control" name="sillicon" id="sillicon" placeholder="Silicon (SI) (69.810000 ~ 75.410000)">
                                    </div>
                                    <div class="form-group col-lg-10">
                                        <input type="text"  class="form-control" name="pottasium" id="pottasium" placeholder="Pottasium (K) (0 ~ 6.210000)">
                                    </div>
                                    <div class="form-group col-lg-10">
                                        <input type="text"  class="form-control" name="calcium" id="calcium" placeholder="Calcium (Ca) (5.430000 ~ 16.190000)">
                                    </div>
                                    <div class="form-group col-lg-10">
                                        <input type="text"  class="form-control" name="barium" id="barium" placeholder="Barium (Br) (0 ~ 3.150000)">
                                    </div>
                                    <div class="form-group col-lg-10">
                                        <input type="text"  class="form-control" name="iron" id="iron" placeholder="Iron (Fe) (0 ~ 0.51000
)">
                                    </div>
                                    <!-- <div class="form-group col-md-10">
                                         <label for="exampleResult" name="result">Result</label>
                                         <label for="examplePredict" id="predictData" class="form-control">
                                           <input type="hidden" name="predictDataTemp" id="predictDataRes">
                                         </label>
                                    </div> -->
                                    <div class="result"> 
                                        <h4> Kaca Untuk Bangunan Jendela (Mengapung) <h4>
                                    </div>
                                    <div class="result"> 
                                        <h4> Kaca Untuk Bangunan Jendela (Tidak Mengapung) <h4>
                                    </div>
                                    <div class="result"> 
                                        <h4> Kaca Untuk Kendaraan (Mengapung) <h4>
                                    </div>
                                    <div class="result"> 
                                        <h4> Kaca Untuk Kendaraan (Tidak Mengapung) <h4>
                                    </div>
                                    <div class="result"> 
                                        <h4> Kaca Untuk Wadah <h4>
                                    </div>
                                    <div class="result"> 
                                        <h4> Kaca Untuk Barang Pecah Belah <h4>
                                    </div>
                                    <div class="result"> 
                                        <h4> Kaca Untuk Lampu Depan <h4>
                                    </div>
                                    <div>
                                        <center><button type="submit" value="submit" class="btn submit_btn2 form-control">Send Key</button></center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </div>  -->
            </div>
        </section>
        <!--================End Contact Us Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="f_widgets_inner row">
                        <!-- <div class="col-lg-3 col-md-6">
                            <aside class="f_widget subscribe_widget">
                                <div class="f_w_title">
                                    <h3>Our Newsletter</h3>
                                </div>
                                <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </aside>
                        </div> -->
                        <!-- <div class="col-lg-3 col-md-6">
                            <aside class="f_widget twitter_widget">
                                <div class="f_w_title">
                                    <h3>Twitter Feed</h3>
                                </div>
                                <div class="tweets_feed"></div>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget categories_widget">
                                <div class="f_w_title">
                                    <h3>Link Categories</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Agency</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Blogs</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shop</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Home</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Services</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Work</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h3>Contact Us</h3>
                                </div>
                                <a href="#">1 (800) 686-6688</a>
                                <a href="#">info.deercreative@gmail.com</a>
                                <p>40 Baria Sreet 133/2 <br />NewYork City, US</p>
                                <h6>Open hours: 8.00-18.00 Mon-Fri</h6>
                            </aside>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="copy_right_area">
                <div class="container">
                    <!-- <div class="float-md-left">
                        <h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></h5>
                    </div> -->
                    <div class="float-md-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Pradhan Haggarjita (120706672)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">I Putu Khrisna (140708888)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Andika Pratama (150708201)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Melita Dwi Nugroho (150708375)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Eri Hariyadi (150708547)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/parallaxer/jquery.parallax-1.1.3.js"></script>
        <!--Tweets-->
        <script src="vendors/tweet/tweetie.min.js"></script>
        <script src="vendors/tweet/script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>

        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>

        <script src="js/theme.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $.ajaxSetup({
              headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
            });

            $('#formstatic').submit(function(e){
                e.preventDefault();

              var refractive=$('#refractive').val();
              var sodium=$('#sodium').val();
              var magnesium=$('#magnesium').val();
              var alumunium=$('#alumunium').val();
              var silicon=$('#sillicon').val();
              var pottasium=$('#pottasium').val();
              var calcium=$('#calcium').val();
              var barium=$('#barium').val();
              var iron=$('#iron').val();
              /*$.get('predict',function(data){
                $('#predictData').append(data);
                console.log(data);
              });*/
              $.ajax({
                type: "POST",
                url:"https://tugasbesar-ml.herokuapp.com/input",
                data:'{"RI":'+refractive+',"Na":'+sodium+',"Mg":'+magnesium+',"Al":'+alumunium+',"Si":'+silicon+',"K":'+pottasium+',"Ca":'+calcium+',"Ba":'+barium+',"Fe":'+iron+'}',
                contentType: 'application/json',
                accept: 'application/json',
                dataType: "json",
                success:function(data){
                  console.log(data);
                  var dataTemp=data['message'][1];

                  $('.result').each(function(index, key) {                      
                      if(dataTemp == (index+1)) {
                          $(this).css('display', 'block');
                      }
                  })
                //   if(dataTemp==1)
                //   {
                      

                //   }
                //   else if(dataTemp==2)
                //   {

                //   }
                //   else if(dataTemp==3)
                //   {

                //   }
                //   else if(dataTemp==4)
                //   {

                //   }
                //   else if(dataTemp==5)
                //   {

                //   }
                //   else if(dataTemp==6)
                //   {

                //   }
                //   else if(dataTemp==7)
                //   {

                //   }
                  $('#predictData').append(dataTemp);
                  $('#predictDataRes').val(dataTemp);
                }
              });
            });
          });
        </script>
    </body>
</html>
