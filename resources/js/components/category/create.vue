<template>
  <div>

  <div>
    <router-link to="/show-Category" class="btn btn-primary">All Categories</router-link>
  </div>

    <div class="container-login">
      <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
          <div class="card shadow-sm my-5">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-lg-12">
                  <div class="login-form">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Add Categories</h1>
                    </div>
                   <form class="user" @submit.prevent="categoryInsert" enctype="multipart/form-data" >

                      <div class="form-group">

                            <div  class="form-row">
                                <div class="col-md-12">
                                      <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter Category Name" v-model="form.name">
                                            <small class="text-danger" v-if="errors.name" >{{errors.name[0]}}  </small>
                                </div>
                           
                              <div class="col-md-6">
                                 
                              </div>

                            </div>

                      </div>

                   
                     
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                      </div>
                     
                    </form>
                    <hr>
                 
                    <div class="text-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</template>



<script type="text/javascript">
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
                        errors:{}
                      }
                  },
                

                  methods:{
                 
                    categoryInsert(){
                        axios.post('/api/categoryStore',this.form)
                        .then(()=>{
                          this.$router.push({name:'show-category'})
                          Notification.success()
                          
                        })
                   .catch(error => this.errors=error.response.data.errors )

                    },
                  }

              
   }
</script>



<style type="text/css">

</style>