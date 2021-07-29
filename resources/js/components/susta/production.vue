<template>
<div>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">

                   <!-- Responsive tables start -->
                <div class="row" id="table-responsive">
                    <div class="col-12">
                        <div class="card">
                             
                            <div class="card-body">
                                
                                <div class="alert alert-info">
                                    <div class="alert-body">
                                        <h4 class="text-warning">Manage All Sustainability Charts</h4>
                                        <p>
                                          <code class="highlighter-rouge">Energy Sources </code>Electricity (kw) | steam (ton) | Diesel (l) | HFO (l) | Thermic heater (kcal) | <code class="highlighter-rouge">Water </code>Raw Water Intake (<span>&#13221;</span>) | Effluent water discharge (<span>&#13221;</span>), 
                                          <code class="highlighter-rouge">waste </code>Fabric (kg) | Contaminated fabric (kg).

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm"> 

                                        <thead>
                                        <tr>
                                           
                                            <th scope="col" class="text-nowrap">Production</th>
                                            <th scope="col" class="text-nowrap">Jan 21</th>
                                            <th scope="col" class="text-nowrap">Feb 21</th>
                                            <th scope="col" class="text-nowrap">Mar 21</th>
                                            <th scope="col" class="text-nowrap">Apr 21</th>
                                            <th scope="col" class="text-nowrap">May 21</th>
                                            <th scope="col" class="text-nowrap">June 21</th>
                                            <th scope="col" class="text-nowrap">july 21</th>
                                            <th scope="col" class="text-nowrap">Aug 21</th>
                                            <th scope="col" class="text-nowrap">Sep 21</th>
                                            <th scope="col" class="text-nowrap">Oct 21</th>
                                            <th scope="col" class="text-nowrap">Nov 21</th>
                                            <th scope="col" class="text-nowrap">Dec 21</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr>
                                          
                                            <td class="text-nowrap">Inspected production (kg)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ijan" checked /><br>
                                            <label class="custom-control-label" for="ijan">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ifeb" checked /><br>
                                            <label class="custom-control-label" for="ifeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="imar" checked /><br>
                                            <label class="custom-control-label" for="imar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="iapr" checked /><br>
                                            <label class="custom-control-label" for="iapr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="imay" checked /><br>
                                            <label class="custom-control-label" for="imay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ijune" checked /><br>
                                            <label class="custom-control-label" for="ijune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ijuly" checked /><br>
                                            <label class="custom-control-label" for="ijuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="iaug" checked /><br>
                                            <label class="custom-control-label" for="iaug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="isep" checked /><br>
                                            <label class="custom-control-label" for="isep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ioct" checked /><br>
                                            <label class="custom-control-label" for="ioct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="inov"  /><br>
                                            <label class="custom-control-label" for="inov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="idec" checked /><br>
                                            <label class="custom-control-label" for="idec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>
                                

                                    </tbody>

                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Responsive tables end -->
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