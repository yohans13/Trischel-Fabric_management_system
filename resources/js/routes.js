//home
let login = require('./components/Auth/login.vue').default;
let register = require('./components/Auth/register.vue').default;
let forget = require('./components/Auth/forget.vue').default;
let logout = require('./components/Auth/logout.vue').default;

//end auth
let home = require('./components/home.vue').default;


let blog = require('./components/blog/index.vue').default;
let blogDetails = require('./components/blog/details.vue').default;
let blogEdit = require('./components/blog/edit.vue').default;
let blogAdd = require('./components/blog/create.vue').default;

// myProfile
let myProfile = require('./components/myProfile/myProfile.vue').default; 
let editProfile = require('./components/myProfile/editProfile.vue').default; 



//test
let test = require('./components/ExampleComponent.vue').default;
let new1 = require('./components/new.vue').default;


//Employee components
let storeemployee = require('./components/employee/create.vue').default;
let employee = require('./components/employee/index.vue').default;
let editemployee = require('./components/employee/edit.vue').default;

//Supplier components
let storesupplier = require('./components/supplier/create.vue').default;
let supplier = require('./components/supplier/index.vue').default;
let editsupplier = require('./components/supplier/edit.vue').default;

//Category components
let storecategory = require('./components/category/create.vue').default;
let category = require('./components/category/index.vue').default;
let editcategory = require('./components/category/edit.vue').default;

//product components
let storeproduct = require('./components/product/create.vue').default;
let product = require('./components/product/index.vue').default;
let editproduct = require('./components/product/edit.vue').default;

//Expense components
let storeexpense = require('./components/expense/create.vue').default;
let expense = require('./components/expense/expense.vue').default;
let editexpense = require('./components/expense/edit.vue').default;

//salary components
let salary = require('./components/salary/all_employee.vue').default;
let paysalary = require('./components/salary/create.vue').default;
let allsalary = require('./components/salary/index.vue').default;
let viewsalary = require('./components/salary/view.vue').default;
let editsalary = require('./components/salary/edit.vue').default;

//stock components
let stock = require('./components/product/stock.vue').default;
let editstock = require('./components/product/edit-stock.vue').default;


//Customer components
let storecustomer = require('./components/customer/create.vue').default;
let customer = require('./components/customer/index.vue').default;
let editcustomer = require('./components/customer/edit.vue').default;

//pos component
let pos = require('./components/pos/pointofsale.vue').default;

//order component
let order = require('./components/order/order.vue').default;
let vieworder = require('./components/order/vieworder.vue').default;
let searchorder = require('./components/order/search.vue').default;



// --------------------------------------------------------------

//user components
let storeuser = require('./components/users/create.vue').default;
let user = require('./components/users/index.vue').default;
let edituser = require('./components/users/edit.vue').default;



//admin components
let storeadmin = require('./components/admins/create.vue').default;
let admin = require('./components/admins/index.vue').default;
let editadmin = require('./components/admins/edit.vue').default;



//susta components
let energy = require('./components/susta/energy.vue').default;
let waste = require('./components/susta/waste.vue').default;
let water = require('./components/susta/water.vue').default;
let production = require('./components/susta/production.vue').default;
let ene = require('./components/susta/ene.vue').default;
let manageAll = require('./components/susta/Manage.vue').default;






export const routes = [
  { path: '/', component: login, name:'/'},
  { path: '/register', component: register, name:'register' },
  { path: '/forget', component: forget, name:'forget' },
  { path: '/logout', component: logout, name:'logout' },
  { path: '/home', component: home, name:'home' },


  //test
  { path: '/test1', component: test, name:'test' },
  { path: '/new1', component: new1 },


//employees routes
  { path: '/store-employee', component: storeemployee, name:'store-employee' },
  { path: '/show-employee', component: employee, name:'show-employee' },
  { path: '/edit-employee/:id', component: editemployee, name:'edit-employee' },


  
  //Supplier routes
  { path: '/store-supplier', component: storesupplier, name:'store-supplier' },
  { path: '/show-supplier', component: supplier, name:'show-supplier' },
  { path: '/edit-supplier/:id', component: editsupplier, name:'edit-supplier' },



  //Category routes
  { path: '/store-category', component: storecategory, name:'store-category' },
  { path: '/show-category', component: category, name:'show-category' },
  { path: '/edit-category/:id', component: editcategory, name:'edit-category' },



  //Product routes
  { path: '/store-product', component: storeproduct, name:'store-product' },
  { path: '/show-product', component: product, name:'show-product' },
  { path: '/edit-product/:id', component: editproduct, name:'edit-product' },



  //Expense routes
  { path: '/store-expense', component: storeexpense, name:'store-expense' },
  { path: '/show-expense', component: expense, name:'show-expense' },
  { path: '/edit-expense/:id', component: editexpense, name:'edit-expense' },



  //Salary routes
  { path: '/given-salary', component: salary, name:'given-salary' },
  { path: '/pay-salary/:id', component: paysalary, name:'pay-salary' },
  { path: '/salary', component:allsalary, name:'salary' },
  { path: '/view-salary/:id', component:viewsalary, name:'view-salary' },
  { path: '/edit-salary/:id', component:editsalary, name:'edit-salary' },



  //Stock routes
  { path: '/stock', component: stock, name:'stock' },
  { path: '/edit-stock/:id', component:editstock, name:'edit-stock' },
 

  
  //Customer routes
  { path: '/store-customer', component: storecustomer, name:'store-customer' },
  { path: '/customer', component: customer, name:'customer' },
  { path: '/edit-customer/:id', component: editcustomer, name:'edit-customer' },



  //pos routes
  { path: '/pos', component: pos, name:'pos' },


    //order routes
  { path: '/order', component: order, name:'order' },
  { path: '/view-order/:id', component: vieworder, name:'view-order' },
  { path: '/searchorder', component: searchorder, name:'searchorder' },


   
  
  //users routes
  { path: '/store-user', component: storeuser, name:'store-user' },
  { path: '/show-user', component: user, name:'show-user' },
  { path: '/edit-user/:id', component: edituser, name:'edit-user' },


    //admins routes
    { path: '/store-admin', component: storeadmin, name:'store-admin' },
    { path: '/show-admin', component: admin, name:'show-admin' },
    { path: '/edit-admin/:id', component: editadmin, name:'edit-admin' },

    //blog
    { path: '/blog', component: blog, name:'blog' },
    { path: '/blogDetails', component: blogDetails, name:'blogDetails' },
    { path: '/blogEdit', component: blogEdit, name:'blogEdit' },
    { path: '/blogAdd', component: blogAdd, name:'blogAdd' },


    //myProfile
    { path: '/myProfile', component: myProfile, name:'myProfile' },
    { path: '/editProfile', component: editProfile, name:'editProfile' },

    //susta
    { path: '/energy ', component: energy, name:'energy' },
    { path: '/waste', component: waste, name:'waste' },
    { path: '/water', component: water, name:'water' },
    { path: '/production', component: production, name:'production' },
    { path: '/ene', component: ene, name:'ene' },
    { path: '/manageAll', component: manageAll, name:'manageAll' },

    
  

]