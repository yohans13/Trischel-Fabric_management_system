<template>
  
  <div>
  

        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="javascript:void(0);">
 
                            <img class="img-fluid" v-bind:src="form.logo" style="width:120px; height:30px; "/>
                            <!-- <h2 class="brand-text text-primary ml-1">Trischel Fabric</h2> -->
                        </a>
                        <!-- /Brand logo-->

                          <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                              <img class="img-fluid" v-bind:src="form.image" /> 
                              
                              </div>
                        </div>
                        <!-- /Left Text-->
                    


                                  <!-- Login-->
                                  <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                                      <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                          <h2 class="card-title font-weight-bold mb-1">Welcome to Trischel Fabric! 👋</h2>
                                          <p class="card-text mb-2">Please sign-in to your account</p>


                                          <form @submit.prevent="login" class="auth-login-form mt-2"  >
                                              <div class="form-group">
                                                  <label class="form-label" for="login-email">Email</label>
                                                  <input class="form-control" id="login-email" type="text"   placeholder="xxx@example.com" aria-describedby="login-email" autofocus="" tabindex="1" v-model="form.email" />
                                              <small class="text-danger" v-if="errors.email" > {{ errors.email[0] }}  </small>

                                              </div>
                                              <div class="form-group">
                                                  <div class="d-flex justify-content-between">
                                                      <label for="login-password">Password</label><a href="page-auth-forgot-password-v2.html"><small>Forgot Password?</small></a>
                                                  </div>
                                                  <div class="input-group input-group-merge form-password-toggle">
                                                      <input class="form-control form-control-merge" id="login-password" type="password"  placeholder="············" aria-describedby="login-password" tabindex="2"   v-model="form.password" />
                                                      <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                              <small class="text-danger" v-if="errors.password" >{{errors.password[0]}}  </small>

                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class="custom-control custom-checkbox">
                                                      <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3" />
                                                      <label class="custom-control-label" for="remember-me"> Remember Me</label>
                                                  </div>
                                              </div>
                                              <button type="submit" class="btn btn-primary btn-block" tabindex="4">Sign in</button>
                                          </form>
                                          <p class="text-center mt-2"><span>New on our platform?</span><a href="/register"><span>&nbsp;Create an account</span></a></p>
                                          <div class="divider my-2">
                                              <div class="divider-text">and</div>
                                          </div>
                                          <div class="auth-footer-btn d-flex justify-content-center">
                                          <a class="btn btn-letter"  @click="showfb()"  href="javascript:void(0)"><img class="img-fluid" v-bind:src="form.imagefb" style="width:30px; padding:0px;  " /></a>
                                          <a class="btn btn-letter" @click="showblog()"  href="javascript:void(0)"><img class="img-fluid" v-bind:src="form.imageblog" style="width:30px; padding:0px;  " /></a>
                                          <a class="btn btn-letter"  @click="showemail()" href="javascript:void(0)"><img class="img-fluid" v-bind:src="form.imagemail" style="width:30px; padding:0px;  " /></a>
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
                  if(User.loggedIn()){
                   this.$router.push({name: 'home'})
                  }
                },

                data(){
                  return {


                    form:{
                      email:null,
                      password:null,
                    image: 'vbackend/app-assets/images/pages/login-v2.svg',
                    imageblog: 'https://img.icons8.com/color/48/000000/reading.png',
                    imagemail:'https://img.icons8.com/fluent/48/000000/mail.png',
                    imagefb:'https://img.icons8.com/color/48/000000/facebook.png',
                    logo: 'vbackend/app-assets/images/logo/tlogo.png',

                        },
                        errors:{}
                      }
                  },

                methods:{
                  login(){
                  axios.post('/api/auth/login',this.form)
                  .then(res =>{ 
                                User.responseAfterLogin(res)
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Signed in successfully'
                                  })
                                this.$router.push({name: 'home'})
                               })
                              // Toast.close()

                  .catch(error =>{
                          Toast.fire({
                            icon: 'warning',
                            title: 'Invalid Email or Password'
                          })
                  })

                       
                  },

                  showblog(){

                   
                    Swal.fire({
                      title: 'Check Blog?',
                      text: "Learn with Trischel Fabric!",
                      imageUrl:"vbackend/app-assets/images/logo/blog.webp",
                      showCancelButton: true,

                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Check it!'
                    }).then((result) => {
                       
                    })   
                  },

                  showfb(){
                   
                    Swal.fire({
                      title: 'Check Trischel Fabric Facebook Group',
                      text: "Trischel Team",
                      imageUrl:"vbackend/app-assets/images/logo/fb.jpg",
                      showCancelButton: true,

                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Check it!'
                    }).then((result) => {

                      if (result.isConfirmed) {
                       window.open("https://www.google.com");
                      }
                      
                    })   
                  },

                   showemail(){

                   
                    Swal.fire({
                      title: 'Trichel Fabric Mail Address',
                      text: " info@trischel.com",
                      imageUrl:"vbackend/app-assets/images/logo/email.jpg",
                      showCancelButton: false,

                      // confirmButtonColor: '#3085d6',
                      // cancelButtonColor: '#d33',
                      // confirmButtonText: 'Check it!'
                    }).then((result) => {
                       
                    })   
                  },

              }
   }
</script>


<style type="text/css">
 
   

</style>