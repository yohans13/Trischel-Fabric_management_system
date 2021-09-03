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
                            <h2 class="content-header-title float-left mb-0">Post List</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Blogs</a>
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
                            <!-- <div class="col-md-6 col-12"  > -->
                            <div class="col-md-6 col-12" v-for="post in filtersearch" :key="post.id" >
                                <div class="card">
                                    <router-link   :to="{name:'acedemyDetails',params:{id:post.id}}" >  
                                        <img class="card-img-top img-fluid" v-bind:src="post.photo" alt="Blog Post pic" />
                                          </router-link> 

                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <router-link   :to="{name:'acedemyDetails',params:{id:post.id}}"  class="blog-title-truncate text-body-heading">{{post.title}}</router-link> 

                                             
                                        </h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img v-bind:src="post.photo"  alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">{{post.post_by}}</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">{{post.date}}</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-info mr-50">{{post.category_name}}</div>
                                            </a>
                                             
                                        </div>
                                        <p class="card-text blog-content-truncate">
                                            {{post.short_description}}
                                        </p>
                                        <hr />
                                        <div class="d-flex justify-content-between align-items-center">
                                             <router-link   :to="{name:'acedemyDetails',params:{id:post.id}}" >
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">76 Comments</span>
                                                </div>
                                           </router-link> 

                                             <!-- <router-link class="font-weight-bold"  :to="{name:'edit-user' ,params:{id:user.id}}" >  -->
                                             <router-link class="font-weight-bold"  :to="{name:'acedemyDetails',params:{id:post.id}}" > 
                                                             Read More...
                                                        </router-link> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        <!--/ Blog List Items -->

                        <!-- Pagination -->
                        <!-- <div class="row">
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
                        </div> -->
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
                                <input type="text" class="form-control" placeholder="Search Posts"  v-model="searchTerm"  />
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
                            <div class="mt-75" v-for="resentpost in resentposts" :key="resentpost.id">
                                <div class="media mb-2" >
                                     <router-link   :to="{name:'acedemyDetails',params:{id:resentpost.id}}"  class="mr-2">
                                        <img class="rounded"  v-bind:src="resentpost.photo" width="100" height="70" alt="Recent Post Pic" />
                                    </router-link>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                             <router-link   :to="{name:'acedemyDetails',params:{id:resentpost.id}}" class="text-body-heading">{{resentpost.title}}</router-link>
                                        </h6>
                                        <div class="text-muted mb-0">{{resentpost.date}}</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!--/ Recent Posts -->

                        <!-- Categories -->
                        <div class="blog-categories mt-3">
                            <h6 class="section-label">Categories</h6>
                            <div class="mt-1">

                               <div class="d-flex justify-content-start align-items-center mb-75"  v-for="category in categories" :key="category.id">
                                    <router-link :to="{name:'acedemyDetails'}"  class="mr-75">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="hash" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </router-link> 
                                    <router-link class="blog-category-title text-body"  :to="{name:'acedemyDetails'}" >
                                        <div class="blog-category-title text-body"> {{category.category_name}}</div>
                                    </router-link> 
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
 
// import Header from './header.vue'

   export default{
                created(){
                  if(!User.loggedIn()){
                   this.$router.push({name: '/'})
                  }
                },

                
                data(){
                  return{

                       form:{
                    editicon: 'vbackend/app-assets/images/icons/edit.svg',
                    trushicon: 'vbackend/app-assets/images/icons/trash.svg', 
                     
                         },


                    categories:[],
                    searchTerm:'',
                    posts:[],
                    resentposts:[],
                    
                  }
                },
                computed:{
                  filtersearch(){
                    return this.posts.filter(post=>{
                      return post.title.match(this.searchTerm)
                    })
                  }
                },
                methods:{
                  allcategory(){
                    axios.get('/api/category')
                    .then(({data})=>(this.categories=data))
                    .catch()
                  },

                    allposts(){
                    axios.get('/api/postindex')
                    .then(({data})=>(this.posts=data))

                    .catch()
                  },

                      recentposts(){
                    axios.get('/api/recentpost')
                    .then(({data})=>(this.resentposts=data))

                    .catch()
                  },
                   
                
                deletecategory(id){
                    Swal.fire({
                      title: 'Are you sure?',
                      text: "You won't be able to revert this!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        
                          axios.delete('/api/categoryDelete/'+id)
                            .then(() =>{
                                this.categories = this.categories.filter(categories =>{
                                  return categories.id != id
                                })
                            })
                            .catch(()=>{
                              this.$route.push({name:'show-category'})
                            })
                          Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    })  

                },
 
              },

                created(){
                  this.allcategory();
                  this.allposts();
                  this.recentposts();
                  
                }

                  
  
}
</script>