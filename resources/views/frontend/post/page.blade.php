@extends('frontend.layout.main')

@section('content')
<main id="main">

    

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="page-head-blog">
              <div class="single-blog-page">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">
                  @foreach($blog as $Itemblog)
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="/post/{{$Itemblog->slug}}">
                          <img src="{{voyager::image($Itemblog->thumbnail('cropped'))}}" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="/post/{{$Itemblog->slug}}"> {{$Itemblog->title}}</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                  @endforeach
                  </div>
                </div>
                <!-- recent end -->
              </div>
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>categories</h4>
                  <ul>
                  @foreach($category as $Itemcategory)
                    <li>
                      <a href="#">{{$Itemcategory->name}}</a>
                    </li>
                  @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- single-blog start -->
                <article class="blog-post-wrapper">
                  <div class="post-thumbnail">
                    <img src="{{voyager::image($post->image)}}" alt="" />
                  </div>
                  <div class="post-information">
                    <h2></h2>
                    <div class="entry-meta">
                      <span><i class="fa fa-clock-o"></i> {{$post->created_at}} </span>
                      <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
                    </div>
                    <div class="entry-content">
                      <p>{!!$post->body!!}</p>
                    </div>
                  </div>
                </article>
                <div class="clear"></div>
                <div class="single-post-comments">
                  <div class="comments-area">
                    <div class="comments-heading">
                      <h3>6 comments</h3>
                    </div>
                    <div class="comments-list">
                      <ul>
                        <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 4:25 pm</span>
                                <a href="#">Reply</a>
                              </span>
                              <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">admin</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 6:18 pm </span>
                                <a href="#">Reply</a>
                              </span>
                              <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                            </div>
                          </div>
                        </li>
                        <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 7:25 pm</span>
                                <a href="#">Reply</a>
                              </span>
                              <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="comment-respond">
                    <h3 class="comment-reply-title">Leave a Reply </h3>
                    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                    <form action="#">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <p>Name *</p>
                          <input type="text" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <p>Email *</p>
                          <input type="email" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <p>Website</p>
                          <input type="text" />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                          <p>Website</p>
                          <textarea id="message-box" cols="30" rows="10"></textarea>
                          <input type="submit" value="Post Comment" />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- single-blog end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->
@endsection