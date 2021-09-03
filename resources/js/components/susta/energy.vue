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
                            <div class="card-header">
                                <h4 class="card-title">Responsive tables</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all
                                    viewports by adding <code class="highlighter-rouge">.table-responsive</code> class on
                                    <code class="highlighter-rouge">.table</code>. Or, pick a maximum breakpoint with which to have a responsive
                                    table up to by adding <code class="highlighter-rouge"> .table-responsive{-sm|-md|-lg|-xl}</code>. Read full
                                    documentation
                                    
                                </p>
                                <div class="alert alert-info">
                                    <div class="alert-body">
                                        <h4 class="text-warning">Vertical clipping/truncation</h4>
                                        <p>
                                            Responsive tables make use of <code class="highlighter-rouge">overflow-y: hidden</code>, which clips off
                                            any content that goes beyond the bottom or top edges of the table. In particular, this can clip off
                                            dropdown menus and other third-party widgets.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-nowrap">#</th>
                                            <th scope="col" class="text-nowrap">Heading 1</th>
                                            <th scope="col" class="text-nowrap">Heading 2</th>
                                            <th scope="col" class="text-nowrap">Heading 3</th>
                                            <th scope="col" class="text-nowrap">Heading 4</th>
                                            <th scope="col" class="text-nowrap">Heading 5</th>
                                            <th scope="col" class="text-nowrap">Heading 6</th>
                                            <th scope="col" class="text-nowrap">Heading 7</th>
                                            <th scope="col" class="text-nowrap">Heading 8</th>
                                            <th scope="col" class="text-nowrap">Heading 9</th>
                                            <th scope="col" class="text-nowrap">Heading 10</th>
                                            <th scope="col" class="text-nowrap">Heading 11</th>
                                            <th scope="col" class="text-nowrap">Heading 12</th>
                                            <th scope="col" class="text-nowrap">Heading 13</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">1</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                            <td class="text-nowrap">Table cell</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
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


              },

                created(){
                  this.allusers();
                }

                  
              
   }
</script>