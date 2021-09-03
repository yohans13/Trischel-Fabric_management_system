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
                                    <h4 class="card-title">Add Categories</h4>
                                    <router-link to="/show-category" class="btn btn-primary">All Categories</router-link>

                                </div>
                                <div class="card-body">

                                    <form class="form" @submit.prevent="catUpdate" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Name</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Category Name" name="Category-column" v-model="form.category_name" />
                                                     <small class="text-danger" v-if="errors.category_name" >{{errors.category_name[0]}}  </small>

                                                </div>
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
                     
                      category_name:'',
                   
                        },
                        errors:{},
                       
                        users:{},

                      }
                  },

                   created(){
                    let id =this.$route.params.id
                    axios.get('/api/categorySelect/'+id)
                    .then (({data}) =>(this.form=data))
                    .catch(console.log('error'))
                   
                  },
                

                  methods:{
                    
                    catUpdate(){
                    let id =this.$route.params.id

                        axios.patch('/api/categoryUpdate/'+id,this.form)
                        .then(()=>{
                          this.$router.push({name:'show-category'})
                          Notification.success()
                          
                        })
                   .catch(error => this.errors=error.response.data.errors )

                    }

                  }

              
   }

</script>
