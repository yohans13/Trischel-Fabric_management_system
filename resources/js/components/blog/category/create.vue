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
                                    <h4 class="card-title">Add Category</h4>
                                    <router-link to="/show-category" class="btn btn-primary">All Category</router-link>

                                </div>
                                <div class="card-body">

                                    <form class="form" @submit.prevent="CategoryInsert" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Category Name</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Category Name" name="Category-column" v-model="form.name" />
                                                     <small class="text-danger" v-if="errors.name" >{{errors.name[0]}}  </small>

                                                </div>
                                            </div>
                                           
                                            
                                        
                                            
                                            <div class="col-md-6 col-12">
                                              <br>
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
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
                      name:null,
                   

                        },
                        errors:{},
                        users:{}, 


                      }
                  },
                

                  methods:{
                    


                    CategoryInsert(){
                        axios.post('/api/categoryStore',this.form)
                        .then(()=>{
                          this.$router.push({name:'show-category'})
                          Notification.success()
                          
                        })

                   .catch(error => this.errors=error.response.data.errors )

                    },
                  },
  }
               
</script>
