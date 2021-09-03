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
                                <h4 class="card-title">All categories Manage</h4>
                                 <router-link to="/store-category" class="btn btn-primary">Add Category</router-link>
                            </div>
                           
                            <div class="card-body">
                                <p class="card-text">
                                   <input type="text" v-model="searchTerm" placeholder="Search Category name" class="form-control" style="width:300px;"> 

                                </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th> 
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="category in filtersearch" :key="category.id" >

                                          
                                            <td> {{category.category_name}}</td>  
                                            <td> &nbsp&nbsp 
                                                       <router-link  :to="{name:'edit-category' ,params:{id:category.id}}" >  
                                                             <img v-bind:src="form.editicon" alt="edit" height="18" width="18" />
                                                            <!-- <span>Edit</span> -->
                                                        </router-link> &nbsp
                                                        <a @click="deletecategory(category.id)" > 
                                                             <img v-bind:src="form.trushicon" alt="delete" height="18" width="18" />
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
                    
                  }
                },
                computed:{
                  filtersearch(){
                    return this.categories.filter(category=>{
                      return category.category_name.match(this.searchTerm)
                    })
                  }
                },
                methods:{
                  allcategory(){
                    axios.get('/api/category')
                    .then(({data})=>(this.categories=data))
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
                }

                  
              
   }
</script>