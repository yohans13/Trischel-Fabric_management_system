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
                                <h4 class="card-title">All Users Details</h4>
                                 <router-link to="/store-user" class="btn btn-primary">Add Employees</router-link>
                            </div>
                           
                            <div class="card-body">
                                <p class="card-text">
                                   <input type="text" v-model="searchTerm" placeholder="Search user name" class="form-control" style="width:300px;"> 

                                </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>EPF</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                           
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="user in filtersearch" :key="user.id" >

                                            <td>
                                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" :data-original-title="user.name">
                                                <img  :src="user.photo" id="em_photo"  alt="Avatar" height="6" width="20" />
                                                </div>
                                            </td>
                                            <td> {{user.name}}</td>
                                            <td> {{user.dname}}</td>
                                            <td> {{user.epf}}</td>
                                            <td> {{user.phone}}</td> 

                                          

                                                <td v-if="user.is_active == true ">  
                                                     <a @click="isActive(user.id)" > 
                                                    <span class="badge badge-pill badge-light-primary mr-1">Active</span> 
                                                     </a> 
                                                    </td>  

                                                    <td v-else>
                                                     <a @click="isDeactive(user.id)" > 
                                                    <span class="badge badge-pill badge-light-secondary mr-1">Deactive</span>
                                                     </a> 

                                                 </td> 
                                            

                                            <td> &nbsp&nbsp 
                                                       <router-link  :to="{name:'edit-user' ,params:{id:user.id}}" > 
                                                             <img v-bind:src="form.editicon" alt="edit" height="18" width="18" />
                                                            <!-- <span>Edit</span> -->
                                                        </router-link> &nbsp
                                                        <a @click="deleteUser(user.id)" > 
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


                    users:[],
                    searchTerm:'',
                    
                  }
                },
                computed:{
                  filtersearch(){
                    return this.users.filter(user=>{
                      return user.name.match(this.searchTerm)
                    })
                  }
                },
                methods:{
                  allusers(){
                    axios.get('/api/user')
                    .then(({data})=>(this.users=data))

                    .catch()
                  },
                   
                
                deleteUser(id){
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
                        
                          axios.delete('/api/userDelete/'+id)
                            .then(() =>{
                                this.users = this.users.filter(user =>{
                                  return user.id != id
                                })
                            })
                            .catch(()=>{
                              this.$route.push({name:'show-user'})
                            })
                          Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    })  

                },

                isActive(id){
                    Swal.fire({
                      title: 'Are you sure?',
                      text: "Deactive this employee!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Deactive it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        
                          axios.patch('/api/isActiveUser/'+id)
                            .then(() =>{
                                window.location.reload();
                                // location.reload();
                              
                            })
                            .catch(()=>{
                              this.$route.push({name:'show-user'})
                            })
                          Swal.fire(
                          'Deactivated!',
                          'This Account has been Deactivated.',
                          'success'
                        )
                      }
                    })  

                },



                 isDeactive(id){
                    Swal.fire({
                      title: 'Are you sure?',
                      text: "Deactive this employee!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Re-active it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        
                          axios.patch('/api/isDeactiveUser/'+id)
                            .then(() =>{
                                 
                                window.location.reload();

                            })
                            .catch(()=>{
                              this.$route.push({name:'show-user'})
                            })
                          Swal.fire(
                          'Deactivated!',
                          'This Account has been Activated.',
                          'success'
                        )
                      }
                    })  

                },


              },

                created(){
                  this.allusers();
                }

                  
              
   }
</script>