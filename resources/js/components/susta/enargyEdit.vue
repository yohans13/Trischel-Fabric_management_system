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
                                    <h4 class="card-title">Add Records</h4>
                                    <router-link to="/ene" class="btn btn-primary"> 🡸 Back</router-link>

                                </div>
                                <div class="card-body">

                                    <form class="form" @submit.prevent="energyUpdate" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Main Title</label>
                                                    <input type="text" id="first-name-column" class="form-control"   name="fname-column" v-model="form.mainName"  disabled/>
                                                     <small class="text-danger" v-if="errors.mainName" >{{errors.mainName[0]}}  </small>

                                                </div>
                                            </div>

                                          

                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label for="last-name-column">Energy Name</label>
                             
                                                        <select  class="custom-select" id="select1" v-model="form.subName" >
                                                            <option value="Electricity (kw)"> Electricity (kw) </option>
                                                            <option  value="steam (ton)"  > steam (ton) </option>
                                                            <option  value="Diesel (l)"  > Diesel (l) </option>
                                                            <option  value="HFO (l)"  > HFO (l) </option>
                                                            <option  value="Thermic heater (kcal)"  > Thermic heater (kcal) </option>

                                                            
                                                          </select> 
                                                     <small class="text-danger" v-if="errors.sname" >{{errors.sname[0]}}  </small>

                                                </div>
                                            </div>


                                             <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label for="first-name-column">Year</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="YYYY" name="fname-column" v-model="form.year" disabled/>

                                                     <small class="text-danger" v-if="errors.year" >{{errors.year[0]}}  </small>
                                                      
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">January </label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.jan" />
                                                     <small class="text-danger" v-if="errors.jan" >{{errors.jan[0]}}  </small>

                                                </div>
                                            </div>

                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">February </label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.feb" />
                                                     <small class="text-danger" v-if="errors.feb" >{{errors.feb[0]}}  </small>

                                                </div>
                                            </div>

                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">March </label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.mar" />
                                                     <small class="text-danger" v-if="errors.march" >{{errors.march[0]}}  </small>

                                                </div>
                                            </div>


                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">April </label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.aprl" />
                                                     <small class="text-danger" v-if="errors.april" >{{errors.april[0]}}  </small>

                                                </div>
                                            </div>

                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">May </label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.may" />
                                                     <small class="text-danger" v-if="errors.may" >{{errors.may[0]}}  </small>

                                                </div>
                                            </div>


                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">June </label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.june" />
                                                     <small class="text-danger" v-if="errors.jun" >{{errors.jun[0]}}  </small>

                                                </div>
                                            </div>


                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">July</label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.july" />
                                                     <small class="text-danger" v-if="errors.july" >{{errors.july[0]}}  </small>

                                                </div>
                                            </div>


                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">August </label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.aug" />
                                                     <small class="text-danger" v-if="errors.aug" >{{errors.aug[0]}}  </small>

                                                </div>
                                            </div>


                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">September</label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.sep" />
                                                     <small class="text-danger" v-if="errors.sep" >{{errors.sep[0]}}  </small>

                                                </div>
                                            </div>


                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">October</label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.oct" />
                                                     <small class="text-danger" v-if="errors.oct" >{{errors.oct[0]}}  </small>

                                                </div>
                                            </div>


                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">November</label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.nov" />
                                                     <small class="text-danger" v-if="errors.nov" >{{errors.nov[0]}}  </small>
                                                </div>
                                            </div>



                                            <div class="col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="first-name-column">December</label>
                                                    <input type="number" step="any" id="first-name-column" class="form-control"  name="fname-column" v-model="form.dec" />
                                                     <small class="text-danger" v-if="errors.dec" >{{errors.dec[0]}}  </small>

                                                </div>
                                            </div>


                                            <div class="form-group">
                                              <button type="submit" class="btn btn-primary btn-block">Update</button>
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
                      year:'',
                      jan:'',
                      feb:'',
                      mar:'',
                      aprl:'',
                      may:'',
                      june:'',
                      july:'',
                      aug:'',
                      sep:'',
                      oct:'',
                      nov:'',
                      dec:'', 
                      mainName:'',
                      subName:''

                        },
                        errors:{},
                        users:{},
                        departments:{},
                        // subNames:{name:'Electricity (kw)',name:'steam (ton)',name:'Diesel (l)',name:'HFO (l)',name:'Thermic heater (kcal)'},


                      }
                  },
                

                  methods:{
               

                  energyUpdate(){
                    let id =this.$route.params.id

                        axios.patch('/api/updateEnergy/'+id,this.form)
                        .then(()=>{
                          this.$router.push({name:'ene'})
                          Notification.success()
                          
                        })
                   .catch(error => this.errors=error.response.data.errors )

                    }
                  },


                   created(){
                 let id =this.$route.params.id
                    axios.get('/api/energySelect/'+id)
                    .then (({data}) =>(this.form=data))
                    .catch(console.log('error')) 
                  },
  

                  }
 
</script>
