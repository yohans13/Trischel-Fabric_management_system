<template>
<div>
     <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Blog List</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a>
                                    </li>
                                    <li class="breadcrumb-item active">List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="content-detached content-left">
                <div class="content-body">
                    <!-- Blog List -->
                    <div class="blog-list-wrapper">
                        <!-- Blog List Items -->
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card">

                                    <router-link to="/blogDetails"  > 
                                        <img class="card-img-top img-fluid" v-bind:src="form.image" alt="Blog Post pic" />
                                     </router-link>

                                    <div class="card-body">
                                        <h4 class="card-title">
                                           <router-link to="/blogDetails" > The Best Features Coming to iOS and Web design</router-link>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img v-bind:src="form.image" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Ghani Pradita</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-info mr-50">Quote</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-primary">Fashion</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Donut fruitcake soufflé apple pie candy canes jujubes croissant chocolate bar ice cream.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">76 Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" v-bind:src="form.image" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Latest Quirky Opening Sentence or Paragraph</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img v-bind:src="form.image" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Jorge Griffin</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-danger mr-50">Gaming</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-warning">Video</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Apple pie caramels lemon drops halvah liquorice carrot cake. Tiramisu brownie lemon drops.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">2.1k Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" v-bind:src="form.image" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Share an Amazing and Shocking Fact or Statistic</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img v-bind:src="form.image" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Claudia Neal</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-danger mr-50">Gaming</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-success">Food</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Tiramisu jelly-o chupa chups tootsie roll donut wafer marshmallow cheesecake topping.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">243 Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" v-bind:src="form.image" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Withhold a Compelling Piece of Information</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img v-bind:src="form.image" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Fred Boone</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-warning">Video</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Croissant apple pie lollipop gingerbread. Cookie jujubes chocolate cake icing cheesecake.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">10 Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" v-bind:src="form.image" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Unadvertised Bonus Opening: Share a Quote</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img v-bind:src="form.image" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Billy French</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-info mr-50">Quote</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-primary">Fashion</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            Muffin liquorice candy soufflé bear claw apple pie icing halvah. Pie marshmallow jelly.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">319 Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="page-blog-detail.html">
                                        <img class="card-img-top img-fluid" v-bind:src="form.image" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">Ships at a distance have Every Man’s Wish on Board</a>
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img v-bind:src="form.image" alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">Helena Hunt</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-primary mr-50">Fashion</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-warning">Video</div>
                                            </a>
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            A little personality goes a long way, especially on a business blog. So don’t be afraid to let loose.
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">1.5k Comments</span>
                                                </div>
                                            </a>
                                            <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <!-- Pagination -->
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>
                                        <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--/ Pagination -->
                    </div>
                    <!--/ Blog List -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-right">
                <div class="sidebar">
                    <div class="blog-sidebar my-2 my-lg-0">
                        <!-- Search bar -->
                        <div class="blog-search">
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="Search here" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer">
                                        <i data-feather="search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--/ Search bar -->

                        <!-- Recent Posts -->
                        <div class="blog-recent-posts mt-3">
                            <h6 class="section-label">Recent Posts</h6>
                            <div class="mt-75">
                                <div class="media mb-2">
                                    <a href="page-blog-detail.html" class="mr-2">
                                        <img class="rounded" v-bind:src="form.image" width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="page-blog-detail.html" class="text-body-heading">Why Should Forget Facebook?</a>
                                        </h6>
                                        <div class="text-muted mb-0">Jan 14 2020</div>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <a href="page-blog-detail.html" class="mr-2">
                                        <img class="rounded" v-bind:src="form.image" width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="page-blog-detail.html" class="text-body-heading">Publish your passions, your way</a>
                                        </h6>
                                        <div class="text-muted mb-0">Mar 04 2020</div>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <a href="page-blog-detail.html" class="mr-2">
                                        <img class="rounded" v-bind:src="form.image" width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="page-blog-detail.html" class="text-body-heading">The Best Ways to Retain More</a>
                                        </h6>
                                        <div class="text-muted mb-0">Feb 18 2020</div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="page-blog-detail.html" class="mr-2">
                                        <img class="rounded" v-bind:src="form.image" width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="page-blog-detail.html" class="text-body-heading">Share a Shocking Fact or Statistic</a>
                                        </h6>
                                        <div class="text-muted mb-0">Oct 08 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Recent Posts -->

                        <!-- Categories -->
                        <div class="blog-categories mt-3">
                            <h6 class="section-label">Categories</h6>
                            <div class="mt-1">
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-primary rounded">
                                            <div class="avatar-content">
                                                <i data-feather="watch" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Fashion</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-success rounded">
                                            <div class="avatar-content">
                                                <i data-feather="shopping-cart" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Food</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-danger rounded">
                                            <div class="avatar-content">
                                                <i data-feather="command" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Gaming</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="hash" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Quote</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-warning rounded">
                                            <div class="avatar-content">
                                                <i data-feather="video" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Video</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--/ Categories -->
                    </div>

                    </div>
            </div>
    </div>
</div>
</div>

</template>


<script>
export default {

   data(){
                  return {


                    form:{
               
                    image: 'vbackend/app-assets/images/banner/banner-35.jpg',
                  
                        },
                        errors:{}
                      }
                  },
  
}
</script>