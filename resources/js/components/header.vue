<template>
  
     <div>
 
           <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow" id="topbar"  style="display:none" >

        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>

                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                </ul>
                
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>


            <ul class="nav navbar-nav align-items-center ml-auto">
          
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                    <li class="nav-item d-none d-lg-block">
                    
                    
                    
                    <router-link class="nav-link dropdown-toggle dropdown-user-link" to="/editProfile">
                    
                    

                          <div class="user-nav d-sm-flex d-none"> <span class="user-name font-weight-bolder"> <span id="profile"> </span> </span>
                        </div><span class="avatar">
                          <img :src="form.profilepic"  alt="avatar" height="40" width="40" class="round" ><span class="avatar-status-online"></span></span> 
                    </router-link>

 
                    <router-link to="/logout" class="nav-link dropdown-toggle dropdown-user-link"  >
                       <i data-feather="power"></i>  
                        </router-link>
                    
                
                </li>

            </ul>
        </div>
    </nav>

    
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


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
               
                    profilepic: 'vBackend/app-assets/images/portrait/small/avatar-s-11.jpg',
                     },
                 
                  }

                },
                mounted(){
                 
                },
                methods:{
                  
                }
             
   }
   
</script>



<style type="text/css">
 
   

</style>