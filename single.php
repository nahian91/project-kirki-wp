<?php

if(is_front_page()) {
  get_header();
}
else{
  get_header('blog');
}
?>

    <!-- Page header Start -->
    <section class="page-header">
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper text-center">
              <h2><?php echo esc_html('Single Blog', 'stack');?></h2>
              <p><a href="index.html"><?php echo esc_html('Home', 'stack');?> </a>/ <?php echo esc_html('Single Blog', 'stack');?></p>
            </div>
          </div>
        </div> 
      </div> 
    </section>
    <!-- Page header End -->
    
    <!-- Blog Section Start 
    <div id="blog-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="blog-post">
              <div class="post-thumb">
                <img src="assets/img/blog/blog-1-big.jpg" alt="">
              </div>
              <div class="post-content">
                <h3>Lorem Ipsum Dolor Sit Amet, Consectetur</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eaque, beatae voluptas maxime in aliquam quisquam quibusdam porro nam, expedita voluptatibus voluptates voluptatum suscipit illo magnam, repellendus. Voluptatem, optio, qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum maiores minima, sint libero. Iste facere architecto vitae odit facilis optio voluptatum expedita, unde enim voluptates provident ut suscipit alias adipisci.</p>          
              </div>
            </div>
            <div class="blog-comment">
                <h4>2 Comments</h4>
                <ul class="comment-list">
                  <li class="comment">
                    <div class="the-comment">
                      <div class="avatar">
                        <img src="assets/img/blog/avater-1.jpg" alt="">
                      </div>
                      <div class="comment-box">
                        <div class="comment-author">
                          <strong>User</strong><span class="meta"> August 17, 2020 at 1:38 pm</span><a class="comment-reply-link" href="#"> - Reply</a>
                        </div>
                        <div class="comment-text">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, voluptates odio perspiciatis veritatis repellendus facilis nesciunt suscipit cumque aut quisquam quas..</p>
                        </div>
                      </div>
                    </div>
                    
                    <ul class="children">
                      <li class="comment">
                        <div class="the-comment">
                          <div class="avatar">
                            <img src="assets/img/blog/avater-2.jpg" alt="">
                          </div>
                          <div class="comment-box">
                            <div class="comment-author">
                              <strong>Demo User</strong> <span class="meta">August 18, 2020 at 3:39 pm</span><a class="comment-reply-link" href="#"> - Reply</a>
                            </div>
                            <div class="comment-text">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, voluptates odio perspiciatis veritatis repellendus facilis nesciunt suscipit cumque aut quisquamt..</p>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              <form id="comment-form">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>                                 
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="Email" name="Email" placeholder="Email">
                    </div>                                 
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="Website" name="Website" placeholder="Website">
                    </div>                                 
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Comment" rows="11"></textarea>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" type="submit">Post comment</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="widgets">
              <div class="search-input single-widget">
                <input type="text" class="form-control" placeholder="Search Here.....">
              </div>
              <div class="widget-latest-post single-widget">
                <h4>Latest Post</h4>
                <ul class="latest-post">
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="assets/img/blog/1.jpg" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="assets/img/blog/2.jpg" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="assets/img/blog/3.jpg" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                </ul>
              </div>
              <div class="categories single-widget">
                <h4>Categories</h4>
                <ul>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">Education</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Travel</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">Design</a></li>
                </ul>
              </div>
              <div class="tags single-widget">
                <h4>Tags</h4>
                <ul>
                  <li><a href="#">Corporate</a></li>
                  <li><a href="#">Web</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Photoshop</a></li>
                  <li><a href="#">Minimal</a></li>
                  <li><a href="#">Popular</a></li>
                  <li><a href="#">Design</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Blog Section End  -->

    <?php get_footer();?>