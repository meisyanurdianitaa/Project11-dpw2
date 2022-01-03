<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Toko Faeyza</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{url('public')}}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- Start Top Nav -->
    @include('client.section.navbar')
    <!-- Close Header -->

   



    <!-- Start Content -->
    <div class="container">
      <div class="card mt-3 pt-3">
      <div class="row ml-1 mr-2 mb-3">
         <div class="col-md-12">
           
            <h4><b>Filter</b></h4>
         </div>

         <div class="container">
         <div class="card-body">
            <form action="{{url('shop/filter')}}" method="post">
               @csrf
               <div class="form-group">
                  <label for="" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
               </div>
                            <br>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                        </form>


                    </div>
                    
                    
                </div>
            </div>
            <hr>

            <div id="shoes" class="shoes-bg">
                                <h3>New Produk</h3>
                                <div class="row">
                                      @foreach ($list_produk as $produk)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                        <div class="shoes-box">
                                                
                                             <img src="{{url("public/$produk->foto") }}" width="100%">
                                            <a href="{{ url('/produkshop', $produk->id) }}"
                                            class="h3 text-decoration-none">{{ $produk->nama }}</a>
                                            <hr>
                                            <p><h4>Stok :{{ $produk->stok }}</h4></p>
                                            
                                            
                                        <p class="text-center mb-0"><h4>Rp.{{number_format($produk->harga)  }}</h4></p>
                                        <a class="buynow" href="keranjang">Masukan Keranjang</a>
                                       
                                        </div>
                                            
                                       </div>
                                       @endforeach
                                </div>
                            </div>
                            <div>
                    {{ $list_produk->links() }}
                </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        <hr>
               
                
            </div>
        </div>

        </div>
    </div>
    <!-- End Content -->




    <!-- Start Footer -->
    @include('client.section.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{url('public')}}/js/jquery.min.js"></script>
        <script src="{{url('public')}}/js/popper.min.js"></script>
        <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public')}}/js/jquery-3.0.0.min.js"></script>
    <!-- End Script -->
</body>

</html>
