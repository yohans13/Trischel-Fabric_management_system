<template>
  <div>

  <div>
    <router-link to="/store-customer" class="btn btn-primary">Add Customer</router-link>
  </div>
<br>
<input type="text" v-model="searchTerm" placeholder="Search Here" class="form-control" style="width:300px;"> 
<br>
        <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Customers Tables</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Phone</th> 
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr v-for="customer in filtersearch" :key="customer.id">
                        <td> {{customer.name}} </td>
                        <td> {{customer.email}} </td>
                        <td><img :src="customer.photo" id="em_photo"></td>
                        <td>   {{customer.phone}} </td>  
                        <td>
                          <router-link  :to="{name:'edit-customer' ,params:{id:customer.id}}" class="btn btn-sm btn-primary"  style="color:white;">Edit</router-link >
                          <a @click="deleteCustomer(customer.id)" class="btn btn-sm btn-danger" style="color:white;">Delete</a>
                        
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
</template>



<script type="text/javascript">
   export default{
                created(){
                  if(!User.loggedIn()){
                   this.$router.push({name: '/'})
                  }
                },
                data(){
                  return{
                    customers:[],
                    searchTerm:''
                  }
                },
                computed:{
                  filtersearch(){
                    return this.customers.filter(customer=>{
                      return customer.name.match(this.searchTerm)
                    })
                  }
                },
                methods:{
                  allcustomer(){
                    axios.get('/api/customer')
                    .then(({data})=>(this.customers=data))
                    .catch()
                  },
                   
                
                deleteCustomer(id){
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
                        
                          axios.delete('/api/customerDelete/'+id)
                            .then(() =>{
                                this.customers = this.customers.filter(customer =>{
                                  return customer.id != id
                                })
                            })
                            .catch(()=>{
                              this.$route.push({name:'show-customer'})
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
                  this.allcustomer();
                }

                  
              
   }
</script>



<style type="text/css">

#em_photo{
  height:50px;
  width:40px;
}
</style>