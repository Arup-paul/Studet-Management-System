@extends('Frontend.master')

@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Course</h2>
            <ol class="breadcrumb">
             <li><a href="#">Home</a></li>
             <li class="active">Course</li>
           </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End breadcrumb -->
  <section id="mu-course-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-course-content-area">
             <div class="row">
               <div class="col-md-9">
                 <!-- start course content container -->
                 <div class="mu-course-container">
                   <div class="row">

                   <div class="col-md-6 col-sm-6">
                     <div class="mu-latest-course-single">
                       <figure class="mu-latest-course-img">
                         <a href="#"><img src="{{asset('Frontend/assets/img/courses/2.jpg')}}" alt="img"></a>
                         <figcaption class="mu-latest-course-imgcaption">
                           <a href="#">Engineering </a>
                           <span><i class="fa fa-clock-o"></i>75Days</span>
                         </figcaption>
                       </figure>
                       <div class="mu-latest-course-single-content">
                         <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                         <div class="mu-latest-course-single-contbottom">
                           <a class="mu-course-details" href="#">Details</a>
                           <span class="mu-course-price" href="#">$165.00</span>
                         </div>
                       </div>
                     </div>
                   </div>
                   </div>
                 </div>
                 <!-- end course content container -->
                 <!-- start course pagination -->
                 <div class="mu-pagination">
                   <nav>
                     <ul class="pagination">
                       <li>
                         <a href="#" aria-label="Previous">
                           <span class="fa fa-angle-left"></span> Prev
                         </a>
                       </li>
                       <li class="active"><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li>
                         <a href="#" aria-label="Next">
                          Next <span class="fa fa-angle-right"></span>
                         </a>
                       </li>
                     </ul>
                   </nav>
                 </div>
                 <!-- end course pagination -->
               </div>
               <div class="col-md-3">
                 <!-- start sidebar -->
                 @include('Frontend.sidebar')
                 <!-- / end sidebar -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
