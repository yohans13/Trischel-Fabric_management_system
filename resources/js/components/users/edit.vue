<template>
<div>

      <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
             



 <div class="content-body">
            
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Users</h4>
                                    <router-link to="/show-user" class="btn btn-primary">All Employees</router-link>

                                </div>
                                <div class="card-body">

                                    <form class="form" @submit.prevent="userUpdate" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Name</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column" v-model="form.name" />
                                                     <small class="text-danger" v-if="errors.name" >{{errors.first_name[0]}}  </small>

                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Email</label>
                                                    <input type="email" id="last-name-column" class="form-control" placeholder="Email  " name="lname-column" v-model="form.email" />
                                                     <small class="text-danger" v-if="errors.email" >{{errors.email[0]}}  </small>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">EPF</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="EPF Number" name="lname-column" v-model="form.epf" />
                                                     <small class="text-danger" v-if="errors.epf" >{{errors.epf[0]}}  </small>

                                                </div>
                                            </div>
                                              <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">NIC</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="NIC Number" name="lname-column" v-model="form.nic" />
                                                     <small class="text-danger" v-if="errors.nic" >{{errors.nic[0]}}  </small>

                                                </div>
                                            </div>
                                             <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Phone number</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Phone Number" name="lname-column" v-model="form.phone" />
                                                     <small class="text-danger" v-if="errors.phone" >{{errors.phone_number[0]}}  </small>

                                                </div>
                                            </div>
                                             <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Address</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Address " name="lname-column" v-model="form.address" />
                                                     <small class="text-danger" v-if="errors.address" >{{errors.address[0]}}  </small>

                                                </div>
                                            </div>
                                             <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">City</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="City" name="lname-column" v-model="form.city" />
                                                     <small class="text-danger" v-if="errors.city" >{{errors.city[0]}}  </small>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Department</label>
                             
                                                        <select  class="custom-select" id="select1" v-model="form.department" >
                                                            <option :value="department.id" v-for="department in departments" :key="department.id"> {{department.dname}} </option>

                                                            
                                                          </select>

                                                     <small class="text-danger" v-if="errors.department" >{{errors.department[0]}}  </small>

                                                </div>
                                            </div>
                                             <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Password</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Enter New Password" name="lname-column" v-model="form.newPassword" />
                                                     <small class="text-danger" v-if="errors.password" >{{errors.password[0]}}  </small>
                                                </div>
                                            </div>


                                          <div class="col-md-6 col-12">
                                            <!-- header media -->
                                            <div class="media">
                                                <a href="javascript:void(0);" class="mr-25">
                                                    <!-- <img :src="form.photo"  class="rounded mr-50" alt="profile image" height="80" width="80" id="customFile"  /> -->
                                                <img :src="'/'+ form.photo" class="rounded mr-50" alt="Old profile image" height="80" width="100"  id="em_photo">
                                                <img  :src="form.newphoto"  class="rounded mr-50" alt="New profile image" height="80" width="80" id="customFile"  />
                                           

                                                </a>
                                                <!-- upload and reset button -->
                                                <div class="media-body mt-75 ml-1">
                                                    <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                    <input  @change="onFileSelected" type="file" id="account-upload" hidden accept="image/*" />
                                                    <p>Allowed JPG or PNG.</p>
                                                </div>
                                                <!--/ upload and reset button -->
                                            </div>
                                            <!--/ header media -->
                                            </div>
                                          
                                            
                                            <div class="col-md-6 col-12">
                                              <br>
                                                <button type="submit" class="btn btn-primary mr-1">Update</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

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
                  return {

                    form:{ 
                     
                      name:'',
                      email:'',
                      etf:'',
                      nic:'',
                      phone:'',
                      address:'',
                      City:'',
                      department:'',
                      password:'',
                      photo:'',
                      newphoto:'',
                      newPassword:'',

                        },
                        errors:{},
                        departments:{},
                        users:{},

                      }
                  },

                   created(){
                    let id =this.$route.params.id
                    axios.get('/api/userSelect/'+id)
                    .then (({data}) =>(this.form=data))
                    .catch(console.log('error'))
                  

                     axios.get('/api/department')
                    .then(({data})=>(this.departments = data))

                   

                  },
                

                  methods:{
                    onFileSelected(event){
                      let file=event.target.files[0];

                    //   if(file.size > 1048770)
                    //   {
                    //       Notification.image_validation()
                    //       Notification.Cart_dalete()
                    //       Notification.error()
                    //       Notification.alert()
                    //       Notification.cartsuccess()
                    //       Notification.success()
                    //   }
                    //   else{
                        let reader =new FileReader();
                        reader.onload = event =>{
                          // photo data added to newphoto
                          this.form.newphoto = event.target.result
                          
                          this.form.photo = event.target.result
                          console.log(event.target.result);
                        };
                        reader.readAsDataURL(file)
                    //   }
                    },
                    userUpdate(){
                    let id =this.$route.params.id

                        axios.patch('/api/userUpdate/'+id,this.form)
                        .then(()=>{
                          this.$router.push({name:'show-user'})
                          Notification.success()
                          
                        })
                   .catch(error => this.errors=error.response.data.errors )

                    }

                  }

              
   }

</script>
