@extends('Frontend.master')

@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Gallery</h2>
            <ol class="breadcrumb">
             <li><a href="#">Home</a></li>
             <li class="active">Gallery</li>
           </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End breadcrumb -->
  <!-- Start gallery  -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
           <!-- start title -->
           <div class="mu-title">
             <h2>Some Moments</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut laboriosam corporis doloribus, officia, accusamus illo nam tempore totam alias!</p>
           </div>
           <!-- end title -->
           <!-- start gallery content -->
           <div class="mu-gallery-content">
             <!-- Start gallery menu -->
             <div class="mu-gallery-top">
               <ul>
                 <li class="filter active" data-filter="all">All</li>
                 <li class="filter" data-filter=".lab">Lab</li>
                 <li class="filter" data-filter=".classroom">Class Room</li>
                 <li class="filter" data-filter=".library">Library</li>
                 <li class="filter" data-filter=".cafe">Cafe</li>
                 <li class="filter" data-filter=".others">Others</li>
               </ul>
             </div>
             <!-- End gallery menu -->
             <div class="mu-gallery-body">
               <ul id="mixit-container" class="row">


                 <!-- start single gallery image -->
                 <li class="col-md-4 col-sm-6 col-xs-12 mix cafe">
                   <div class="mu-single-gallery">
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="{{asset('Frontend/assets/img/gallery/small/6.jpg')}}"></a>
                       </div>
                        <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Health</p>
                           <a href="{{asset('Frontend/assets/img/gallery/big/6.jpg')}}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>
                     </div>
                   </div>
                 </li>
                 <!-- start single gallery image -->
                 <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                   <div class="mu-single-gallery">
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="{{asset('Frontend/assets/img/gallery/small/7.jpg')}}"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Sports</p>
                           <a href="{{asset('Frontend/assets/img/gallery/big/7.jpg')}}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>
                     </div>
                   </div>
                 </li>

               </ul>
             </div>
           </div>
           <!-- end gallery content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End gallery  -->
@endsection
