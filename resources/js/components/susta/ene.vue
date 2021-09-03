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
                                        </p><br>
                                                <h4 class="text-dark">{{year}} Energy Sources Chart</h4>

                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-nowrap">Energy Sources</th>
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
                                            <th scope="col" class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="energy in energys" :key="energy.id">
                                          
                                            <td class="text-nowrap"> {{energy.subName}}</td>
                                            <td class="text-nowrap"> {{energy.jan}} </td>
                                            <td class="text-nowrap">{{energy.feb}} </td>
                                            <td class="text-nowrap">{{energy.mar}}</td>
                                            <td class="text-nowrap">{{energy.aprl}}</td>
                                            <td class="text-nowrap">{{energy.may}}</td>
                                            <td class="text-nowrap">{{energy.june}}</td>
                                            <td class="text-nowrap">{{energy.july}}</td>
                                            <td class="text-nowrap">{{energy.aug}}</td>
                                            <td class="text-nowrap">{{energy.sep}}</td>
                                            <td class="text-nowrap">{{energy.oct}}</td>
                                            <td class="text-nowrap">{{energy.nov}}</td>
                                            <td class="text-nowrap">{{energy.dec}}</td>
                                            <td class="text-nowrap">
                                            <router-link  :to="{name:'editEnergy' ,params:{id:energy.id}}" >  
                                                             <img v-bind:src="form.editicon" alt="edit" height="18" width="18" />
                                                             
                                                        </router-link> &nbsp

                                                          <a @click="deleteEnergy(energy.id)" > 
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
                <!-- Responsive tables end -->


           <div>
            <router-link to="/newsus" class="btn btn-primary">Add Record</router-link>
          </div>

         
<br>
        <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                 
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Year</th>
                        <th>Action</th>
                       
                      </tr>
                    </thead>
                    <tbody>

                      <tr v-for="Eyear in Eyears" :key="Eyear.id">
                        <td> {{Eyear.year}} </td>
                      
                        <td> 

                          <a @click="updateYears(Eyear.year)"  class="btn btn-sm btn-primary"  style="color:white;">Show</a>
                          <a @click="deleteYear(Eyear.year)" class="btn btn-sm btn-danger" style="color:white;">Delete</a>
                        
                        </td>
                       
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          

          
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

                     year:'2021',
                    Eyears:[],
                    energys:[],
                    // updatedYear:'', 
                  }

                },
                computed:{
                  filtersearch(){
                    return this.energys.filter(energy=>{
                      return energy.year.match(this.updatedYear)
                    })
                  },

                  
                },

                methods:{
                  allyears(){
                    axios.get('/api/getyears')
                    .then(({data})=>(this.Eyears=data))

                    .catch()
                 },

                    allEnergy(){
                      let year =this.year
                    axios.get('/api/getenSus/'+year)
                    .then(({data})=>(this.energys=data))

                    .catch()

                     
                  },


                  
                     updateYears(year){
                      this.year=year
                    axios.get('/api/updateYear/'+year)
                    .then(({data})=>(this.energys=data))

                    .catch()

                     
                  },


                  
                   
                
                deleteEnergy(id){
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
                        
                          axios.delete('/api/EnergyDelete/'+id)
                            .then(() =>{
                                this.energys = this.energys.filter(energy =>{
                                  return energy.id != id
                                })
                            })
                            .catch(()=>{
                              this.$route.push({name:'ene'})
                            })
                          Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    })  

                }, 




                 deleteYear(year){
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
                          axios.delete('/api/YearDelete/'+year)
                            .then(() =>{
                                this.Eyears = this.Eyears.filter(Eyear =>{
                                  return Eyear.year != year
                                })
                            })
                            .catch(()=>{
                              this.$route.push({name:'ene'})
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
                  this.allyears();
                  this.allEnergy();

                  
                    Reload.$on('AfterAdd',() =>{
                    this.allEnergy();
                    });
                }

                  
              
   }
</script>