<template>
<div>
     <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Blog Detail</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail
                                    </li>
                                    
                                
                                </ol>

                                

                                 
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="content-detached content-left">
                <div class="content-body">
                    <!-- Blog Detail -->
                    <div class="blog-detail-wrapper">
                        <div class="row">
                            <!-- Blog -->
                            <div class="col-12">
                                <div class="card">
                                    <img :src="'/'+ form.photo"  class="img-fluid card-img-top" alt="Blog Detail Pic" />
                                    <div class="card-body">
                                        <h4 class="card-title">{{form.title}}</h4>
                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img   alt="Avatar" width="24" height="24" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">{{form.post_by}}</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">{{form.date}}</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-danger mr-50">{{form.category_name}}</div>
                                            </a>
                                             
                                        </div>
                                        <p class="card-text mb-2">
                                           {{form.content}}
                                        </p>
                                        
                                    
                                        <div class="media">
                                            <div class="avatar mr-2">
                                            </div>
                                          
                                        </div>
                                        <hr class="my-2" />
                                       
                                    </div>
                                </div>
                            </div>
                            <!--/ Blog -->

                            <!-- Blog Comment -->
                            <div class="col-12 mt-1" id="blogComment">
                                <h6 class="section-label mt-25">Comment</h6>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="avatar mr-75">
                                                <img   width="38" height="38" alt="Avatar" />
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-weight-bolder mb-25">Chad Alexander</h6>
                                                <p class="card-text">May 24, 2020</p>
                                                <p class="card-text">
                                                    A variation on the question technique above, the multiple-choice question great way to engage your
                                                    reader.
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Blog Comment -->

                            <!-- Leave a Blog Comment -->
                            <div class="col-12 mt-1">
                                <h6 class="section-label mt-25">Leave a Comment</h6>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="javascript:void(0);" class="form">
                                            <div class="row">
                                              
                                                <div class="col-12">
                                                    <textarea class="form-control mb-2" rows="4" placeholder="Comment"></textarea>
                                                </div>
                                                <div class="col-12">
                                                   
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--/ Leave a Blog Comment -->
                        </div>
                    </div>
                    <!--/ Blog Detail -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-right">
                <div class="sidebar">
                    <div class="blog-sidebar my-2 my-lg-0">
                      

                       <!-- Recent Posts -->  
                        <!-- <div class="blog-recent-posts mt-3">
                            <h6 class="section-label">Recent Posts</h6>
                            <div class="mt-75" v-for="resentpost in resentposts" :key="resentpost.id">
                                <div class="media mb-2" >
                                     <router-link   :to="{name:'acedemyDetails',params:{id:resentpost.id}}"  class="mr-2">
                                        <img class="rounded" :src="'/'+ resentpost.photo"   width="100" height="70" alt="Recent Post Pic" />
                                    </router-link>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                             <router-link   :to="{name:'acedemyDetails',params:{id:resentpost.id}}" class="text-body-heading">{{resentpost.title}}</router-link>
                                        </h6>
                                        <div class="text-muted mb-0">{{resentpost.date}}</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div> -->
                        <!-- Recent Posts -->


 <!-- Recent Posts -->  
                        <div class="blog-recent-posts mt-3">
                           <router-link to="/acedemy" class="btn btn-primary align-items-center"> 🡸 All Posts</router-link>

                        </div>
                        <!-- Recent Posts -->

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
    <!-- END: Content-->

    </div>
   
</template>

<script> 

  export default{
                created(){
                  if(!User.loggedIn()){
                   this.$router.push({name: '/'})
                  }
                },

                data(){
                  return {

                    form:{ 
                     
                    

                      title:'',
                      date:'',
                      content:'',
                      post_by:'',
                      category_name:'',
                      photo:'',
                      

                        },
                        errors:{}, 
                    categories:[],
                    searchTerm:'', 
                    resentposts:[],

                      }
                  },

                   created(){
                    let id =this.$route.params.id
                    this.form.id=id
                    

                    axios.get('/api/postSelect/'+id)
                    .then (({data}) =>(this.form=data))
                    .catch(console.log('error')) 

                     axios.get('/api/department')
                    .then(({data})=>(this.departments = data)) 

                        this.allcategory();
                  
                        this.recentposts();

                  },
                

                  methods:{
                    allcategory(){
                    axios.get('/api/category')
                    .then(({data})=>(this.categories=data))
                    .catch()
                  },

              

                      recentposts(){
                    axios.get('/api/recentpost')
                    .then(({data})=>(this.resentposts=data))

                    .catch()
                  },

 

                  }

              
   }

</script>
