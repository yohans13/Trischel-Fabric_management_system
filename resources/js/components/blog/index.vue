<template>
<div>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                  <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Posts Details</h4>
                                 <router-link to="/blogAdd" class="btn btn-primary">Add Post</router-link>
                            </div>
                           
                            <div class="card-body">
                                <p class="card-text">
                                   <input type="text" v-model="searchTerm" placeholder="Search post title" class="form-control" style="width:300px;"> 

                                </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                          
                                            <th>Title</th>
                                            <th>Post_by</th>
                                            <th>Date</th>
                                            <th>Category</th> 
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="post in filtersearch" :key="post.id" > 
                                            <td> {{post.title}}</td>
                                            <td> {{post.post_by}}</td>
                                            <td> {{post.date}}</td>
                                            <td> {{post.category_name}}</td> 

                                           

                                            <td> &nbsp&nbsp 
                                                       <router-link  :to="{name:'editPost' ,params:{id:post.id}}" > 
                                                         <img v-bind:src="form.editicon" alt="edit" height="18" width="18" />
                                                            <!-- <span>Edit</span> -->
                                                        </router-link> &nbsp
                                                        <a @click="deletePost(post.id)" > 
                                                             <img v-bind:src="form.trushicon"      alt="delete" height="18" width="18" />
                                                            <!-- <span>Delete</span> -->
                                                        </a>
                                            </td>
                                        </tr>
                             
                                     
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hoverable rows end -->
    </div>
    </div>
    </div>
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
                  return{

                       form:{
                  
                   
                    editicon: 'vbackend/app-assets/images/icons/edit.svg',
                    trushicon: 'vbackend/app-assets/images/icons/trash.svg', 
                     

 

                         },


                    posts:[],
                    searchTerm:'',
                    
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
                  allposts(){
                    axios.get('/api/postindex')
                    .then(({data})=>(this.posts=data))

                    .catch()
                  },
                   
                
                deletePost(id){
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
                        
                          axios.delete('/api/postDelete/'+id)
                            .then(() =>{
                                this.posts = this.posts.filter(post =>{
                                  return post.id != id
                                })
                            })
                            .catch(()=>{
                              this.$route.push({name:'allBlogs'})
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
                  this.allposts();
                }

                  
              
   }
</script>