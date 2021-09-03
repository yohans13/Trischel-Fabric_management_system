<template>
<div>
    
  <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Blog Edit</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">New</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a>
                                    </li>
                                   
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <!-- Blog Edit -->
                <div class="blog-edit-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <!-- Form --> 

                                    <form class="form" @submit.prevent="postInsert" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                 
                                                
                                                <div class="row">
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                 <label for="blog-edit-title">Title</label>
                                                     <input type="text" id="blog-edit-title" class="form-control" placeholder="Enter Blog Title" v-model="form.title" />
                                                     
                                                     <small class="text-danger" v-if="errors.title" >{{errors.title[0]}}  </small>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                  <label for="blog-edit-title">Blog Category</label>
                                                     <select  class="custom-select" id="select1" v-model="form.cat"   >
                                                        <option :value="category.id" v-for="category in categories" :key="category.id"> {{category.category_name}} </option>
                                                     </select>
                                                     <small class="text-danger" v-if="errors.cat" >{{errors.cat[0]}}  </small>

                                            </div>
                                        </div>
                                        </div> 
                                    </div>
                                           
                                       
                                       
                                            <div class="col-12">
                                                <div class="form-group mb-2">
                                                    <label>Short Description</label>
                                                    <div id="blog-editor-wrapper">
                                                        <div id="blog-editor-container">
                                                            <div class="editor">

                                                            <textarea data-length="20" class="form-control textarea" id="textarea" rows="3" placeholder="Enter new post" v-model="form.short_description"></textarea>
                                                                  <!-- <textarea id="mytextarea">Enter new post</textarea> -->

                                                     <small class="text-danger" v-if="errors.short_description" >{{errors.short_description[0]}}  </small>
                                                                  
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group mb-2">
                                                    <label>Content</label>
                                                    <div id="blog-editor-wrapper">
                                                        <div id="blog-editor-container">
                                                            <div class="editor">

                                                            <textarea data-length="20" class="form-control textarea" id="textarea" rows="3" placeholder="Enter new post" v-model="form.Content"></textarea>
                                                                  <!-- <textarea id="mytextarea">Enter new post</textarea> -->

                                                     <small class="text-danger" v-if="errors.Content" >{{errors.Content[0]}}  </small>
                                                                  
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="col-12 mb-2">
                                                <div class="border rounded p-2">
                                                    <h4 class="mb-1">Featured Image</h4>
                                                    <div class="media flex-column flex-md-row">
                                                        <img   id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image"  :src="form.photo"/>    

                                                        <div class="media-body">
                                                            <small class="text-muted">Required image resolution 800x400,max image size 5mb.</small>
                                                            <p class="my-50">
                                                                Allowed JPG or PNG.
                                                            </p>
                                                     <small class="text-danger" v-if="errors.photo" >{{errors.photo[0]}}  </small>

                                                            <div class="d-inline-block">
                                                                <div class="form-group mb-0">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="blogCustomFile"  @change="onFileSelected" />
                                                                        <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-50">
                                                <button type="submit" class="btn btn-primary mr-1">Save</button>
                                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--/ Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Blog Edit -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


</div>

</template>


<script>
export default {

     created(){
                  if(!User.loggedIn()){
                   this.$router.push({name: '/'})
                  }
                },
         data(){
                  return {


                    form:{
               
                    image: 'vbackend/app-assets/images/banner/banner-2.jpg',
                    title:null,
                    cat:null,
                    Content:null,
                    photo:null,
                    short_description:null,

                  
                        },
                        errors:{},
                        categories:{}
                      }
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
                          this.form.photo = event.target.result
                          console.log(event.target.result);
                        };
                        reader.readAsDataURL(file)
                    //   }
                    },


                    postInsert(){
                        axios.post('/api/postStore',this.form)
                        .then(()=>{
                          this.$router.push({name:'allBlogs'})
                          Notification.success()
                          
                        })

                   .catch(error => this.errors=error.response.data.errors )

                    },
                  },

                   created(){
                     axios.get('/api/category')
                    .then(({data})=>(this.categories = data))
                  },
  
}
</script>