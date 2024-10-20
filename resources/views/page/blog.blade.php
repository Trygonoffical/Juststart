@extends('layouts.app')

@section('content')

<style>
.post-listing .col-lg-6{
  margin-bottom:40px; 
  
}
.post-listing article{
  border: 1px solid #efefef;
  padding-bottom:20px;  
}
.post-listing .post-header{
  padding: 0 10px;
}
.post-listing .post-footer{
  padding: 0 10px;
}
</style>


<section class="wrapper image-wrapper bg-image text-white mb-10" data-image-src="{{asset('')}}images/background/gradient1.jpg" style="background-image: url({{asset('')}}images/background/gradient1.jpg);">
  <div class="container container pt-14 pb-14 text-center">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h1 class="display-1 text-white">Blogs</h1>
        <p class="lead fs-lg mb-0">Our blog posts are a source of knowledge!</p>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>


<section class="wrapper bg-light">
      <div class="container ">
        <div class="row gx-lg-8 gx-xl-12">
          <div class="col-lg-8">
            <div class="blog single">
              <div class="card">
                
                <div class="card-body post-listing">
                  <div class="row">
                      <div class="col-lg-6">
                        <article>
                          <figure class="overlay overlay-1 hover-scale mb-4"><a href="#"> <img src="{{asset('')}}assets/img/photos/b4.jpg" alt=""><span class="bg"></span></a>
                            <figcaption>
                              <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                          </figure>
                          <div class="post-header">
                            <h2 class="post-title h3 mb-3"><a class="link-dark" href="javascript:void(0)">Ligula tristique quis risus</a></h2>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-footer">
                            <ul class="post-meta">
                              <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                              <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                            </ul>
                            <!-- /.post-meta -->
                          </div>
                          <!-- /.post-footer -->
                        </article>
                      </div>
                      <div class="col-lg-6">
                        <article>
                            <figure class="overlay overlay-1 hover-scale mb-4"><a href="#"> <img src="{{asset('')}}assets/img/photos/b4.jpg" alt=""><span class="bg"></span></a>
                              <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                              </figcaption>
                            </figure>
                            <div class="post-header">
                              <h2 class="post-title h3 mb-3"><a class="link-dark" href="javascript:void(0)">Ligula tristique quis risus</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                              <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                                <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                              </ul>
                              <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                          </article>
                      </div>

                      <div class="col-lg-6">
                        <article>
                          <figure class="overlay overlay-1 hover-scale mb-4"><a href="#"> <img src="{{asset('')}}assets/img/photos/b4.jpg" alt=""><span class="bg"></span></a>
                            <figcaption>
                              <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                          </figure>
                          <div class="post-header">
                            <h2 class="post-title h3 mb-3"><a class="link-dark" href="javascript:void(0)">Ligula tristique quis risus</a></h2>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-footer">
                            <ul class="post-meta">
                              <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                              <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                            </ul>
                            <!-- /.post-meta -->
                          </div>
                          <!-- /.post-footer -->
                        </article>
                      </div>
                      <div class="col-lg-6">
                        <article>
                            <figure class="overlay overlay-1 hover-scale mb-4"><a href="#"> <img src="{{asset('')}}assets/img/photos/b4.jpg" alt=""><span class="bg"></span></a>
                              <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                              </figcaption>
                            </figure>
                            <div class="post-header">
                              <h2 class="post-title h3 mb-3"><a class="link-dark" href="javascript:void(0)">Ligula tristique quis risus</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                              <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                                <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                              </ul>
                              <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                          </article>
                      </div>

                      <div class="col-lg-6">
                        <article>
                          <figure class="overlay overlay-1 hover-scale mb-4"><a href="#"> <img src="{{asset('')}}assets/img/photos/b4.jpg" alt=""><span class="bg"></span></a>
                            <figcaption>
                              <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                          </figure>
                          <div class="post-header">
                            <h2 class="post-title h3 mb-3"><a class="link-dark" href="javascript:void(0)">Ligula tristique quis risus</a></h2>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-footer">
                            <ul class="post-meta">
                              <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                              <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                            </ul>
                            <!-- /.post-meta -->
                          </div>
                          <!-- /.post-footer -->
                        </article>
                      </div>
                      <div class="col-lg-6">
                        <article>
                            <figure class="overlay overlay-1 hover-scale mb-4"><a href="#"> <img src="{{asset('')}}assets/img/photos/b4.jpg" alt=""><span class="bg"></span></a>
                              <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                              </figcaption>
                            </figure>
                            <div class="post-header">
                              <h2 class="post-title h3 mb-3"><a class="link-dark" href="javascript:void(0)">Ligula tristique quis risus</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                              <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                                <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                              </ul>
                              <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                          </article>
                      </div>
                      
                  </div>
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.blog -->
          </div>
          <!-- /column -->
          <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
            <div class="widget">
              <form class="search-form">
                <div class="form-floating mb-0">
                  <input id="search-form" type="text" class="form-control" placeholder="Search">
                  <label for="search-form">Search</label>
                </div>
              </form>
              <!-- /.search-form -->
            </div>
            <!-- /.widget -->
            
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Recent Posts</h4>
              <ul class="image-list">
                <li>
                  <figure class="rounded"><a href="javascript:void(0)"><img src="{{asset('')}}assets/img/photos/a1.jpg" alt=""></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="javascript:void(0)">Magna Mollis Ultricies</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar 2022</span></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <li>
                  <figure class="rounded"> <a href="javascript:void(0)"><img src="{{asset('')}}assets/img/photos/a2.jpg" alt=""></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="javascript:void(0)">Ornare Nullam Risus</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16 Feb 2022</span></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="javascript:void(0)"><img src="{{asset('')}}assets/img/photos/a3.jpg" alt=""></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="javascript:void(0)">Euismod Nullam Fusce</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Jan 2022</span></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="javascript:void(0)"><img src="{{asset('')}}assets/img/photos/a1.jpg" alt=""></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="javascript:void(0)">Magna Mollis Ultricies</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar 2022</span></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <li>
                  <figure class="rounded"> <a href="javascript:void(0)"><img src="{{asset('')}}assets/img/photos/a2.jpg" alt=""></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="javascript:void(0)">Ornare Nullam Risus</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16 Feb 2022</span></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="javascript:void(0)"><img src="{{asset('')}}assets/img/photos/a3.jpg" alt=""></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="javascript:void(0)">Euismod Nullam Fusce</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Jan 2022</span></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
              </ul>
              <!-- /.image-list -->
            </div>
            <!-- /.widget -->
            
           
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

@endsection