<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ExpenseController;
use App\Http\Controllers\Api\SalaryController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\PosController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\ExtraController;
use App\Http\Controllers\Api\OrderController;
 
use App\Http\Controllers\trischel\userController;
use App\Http\Controllers\trischel\adminController;
use App\Http\Controllers\trischel\sustainController;
use App\Http\Controllers\trischel\blogCategoryController;
use App\Http\Controllers\trischel\myProfileontroller;

use App\Http\Controllers\trischel\sustainWaterController;
use App\Http\Controllers\trischel\sustainWasteController;
use App\Http\Controllers\trischel\sustainProductionController;




Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login',  [AuthController::class, 'login']);
    Route::post('signup',  [AuthController::class, 'signup']);
    Route::post('logout',  [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me',  [AuthController::class, 'me']);
    Route::post('register',  [AuthController::class, 'register']);

});

   //employee api routes
    Route::get('/employee', [EmployeeController::class, 'index']);
    Route::post('/employeeStore', [EmployeeController::class, 'store']);
    Route::delete('/employeeDelete/{id}', [EmployeeController::class, 'destroy']);
    Route::get('/employeeSelect/{id}', [EmployeeController::class, 'show']);
    Route::patch('/employeeUpdate/{id}', [EmployeeController::class, 'update']);

    // Route::resource('/employee', 'Api\EmployeeController');

    //suppliers api routes
    Route::get('/supplier', [SupplierController::class, 'index']);
    Route::post('/supplierStore', [SupplierController::class, 'store']);
    Route::delete('/supplierDelete/{id}', [SupplierController::class, 'destroy']);
    Route::get('/supplierSelect/{id}', [SupplierController::class, 'show']);
    Route::patch('/supplierUpdate/{id}', [SupplierController::class, 'update']);

    
    //category api routes
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/categoryStore', [CategoryController::class, 'store']);
    Route::delete('/categoryDelete/{id}', [CategoryController::class, 'destroy']);
    Route::get('/categorySelect/{id}', [CategoryController::class, 'show']);
    Route::patch('/categoryUpdate/{id}', [CategoryController::class, 'update']);


    //product api routes
    Route::get('/product', [productController::class, 'index']);
    Route::post('/productStore', [productController::class, 'store']);
    Route::delete('/productDelete/{id}', [productController::class, 'destroy']);
    Route::get('/productSelect/{id}', [productController::class, 'show']);
    Route::patch('/productUpdate/{id}', [productController::class, 'update']);


    //Expense api routes
    Route::get('/expense', [ExpenseController::class, 'index']);
    Route::post('/expenseStore', [ExpenseController::class, 'store']);
    Route::delete('/expenseDelete/{id}', [ExpenseController::class, 'destroy']);
    Route::get('/expenseSelect/{id}', [ExpenseController::class, 'show']);
    Route::patch('/expenseUpdate/{id}', [ExpenseController::class, 'update']);

    //Salary api routes
 
    Route::post('/salary/paid/{id}',[SalaryController::class,'paid']);
    Route::get('/salary',[SalaryController::class,'allSalary']);
    Route::get('/salary/view/{id}',[SalaryController::class,'viewSalary']);
    Route::get('/edit/salary/{id}',[SalaryController::class,'editSalary']);
    Route::post('/salary/update/{id}',[SalaryController::class,'salaryUpdate']);

   
    //Stock api routes
    Route::post('/stock/update/{id}',[productController::class,'stockUpdate']);


    //Customer api routes
    Route::get('/customer', [CustomerController::class, 'index']);
    Route::post('/customerStore', [CustomerController::class, 'store']);
    Route::delete('/customerDelete/{id}', [CustomerController::class, 'destroy']);
    Route::get('/customerSelect/{id}', [CustomerController::class, 'show']);
    Route::patch('/customerUpdate/{id}', [CustomerController::class, 'update']);

    //get specific category Products
    Route::get('/getting/Product/{id}',[PosController::class,'getproducts']);

    
    //get specific category Products
    Route::get('/addToCart/{id}',[CartController::class,'AddToCart']);

    Route::get('/cart/product/',[CartController::class,'cartProduct']);

    Route::get('/remove/cart/{id}',[CartController::class,'removeCart']);

    //for increment and decrement
    Route::get('/increment/{id}',[CartController::class,'increament']);
    Route::get('/decrement/{id}',[CartController::class,'decreament']);



    //for extra routes 
    Route::get('/vats', [ExtraController::class, 'index']);

    Route::post('/extraStore', [ExtraController::class, 'store']);
    Route::delete('/extraDelete/{id}', [ExtraController::class, 'destroy']);
    Route::get('/extraSelect/{id}', [ExtraController::class, 'show']);
    Route::patch('/extraUpdate/{id}', [ExtraController::class, 'update']);


    //orders
    Route::post('/orderdone', [PosController::class, 'orderdone']);
    Route::post('/search/order', [PosController::class, 'searchOrderDate']);

    //admin Dashboard Route
    Route::get('/today/sell', [PosController::class, 'todaysell']);
    Route::get('/today/income', [PosController::class, 'todayincome']);
    Route::get('/today/due', [PosController::class, 'todaydue']);
    Route::get('/today/expense', [PosController::class, 'todayexpense']);
    Route::get('/today/stockOut', [PosController::class, 'stockOut']);

    

    //for order page
    Route::get('/orders', [OrderController::class, 'todayorder']);
    Route::get('/order/details/{id}', [OrderController::class, 'orderdetails']);
    Route::get('/order/orderdetails/{id}', [OrderController::class, 'orderDetailsAll']);


    // ----------------------------------------------------------------------------------------
    

    //user page
    Route::get('/user', [userController::class, 'index']);
    Route::get('/department', [userController::class, 'getDepartment']);
    Route::post('/userStore', [userController::class, 'store']);
    Route::delete('/userDelete/{id}', [userController::class, 'destroy']);
    Route::get('/userSelect/{id}', [userController::class, 'show']);
    Route::patch('/userUpdate/{id}', [userController::class, 'update']);

    
    Route::patch('/isActiveUser/{id}', [userController::class, 'isActive']); 
    Route::patch('/isDeactiveUser/{id}', [userController::class, 'isDeactive']);

    //admin page
    Route::get('/admin', [adminController::class, 'index']);
    Route::post('/adminStore', [adminController::class, 'store']);
    Route::delete('/adminDelete/{id}', [adminController::class, 'destroy']);
    Route::get('/adminSelect/{id}', [adminController::class, 'show']);
    Route::patch('/adminUpdate/{id}', [adminController::class, 'update']); 


    //blog catagory page
    Route::get('/category', [blogCategoryController::class, 'index']);
    Route::post('/categoryStore', [blogCategoryController::class, 'store']);
    Route::delete('/categoryDelete/{id}', [blogCategoryController::class, 'destroy']);
    Route::get('/categorySelect/{id}', [blogCategoryController::class, 'show']);
    Route::patch('/categoryUpdate/{id}', [blogCategoryController::class, 'update']); 

    // Route::get('/getcategory', [blogCategoryController::class, 'getcategory']);

    Route::post('/postStore', [blogCategoryController::class, 'postStore']);
    Route::get('/postindex', [blogCategoryController::class, 'postindex']);
    Route::delete('/postDelete/{id}', [blogCategoryController::class, 'postDelete']);
    Route::patch('/updatePost/{id}', [blogCategoryController::class, 'updatePost']); 

    //for acedemy 
    Route::get('/postSelect/{id}', [blogCategoryController::class, 'postSelect']);
    Route::get('/recentpost', [blogCategoryController::class, 'recentpost']);

 

    //sustainability page
    
    // Route::get('/years', [sustainController::class, 'years']);
    Route::get('/getyears', [sustainController::class, 'getyears']);
    Route::get('/getyearsWater', [sustainWaterController::class, 'getyears']);
    Route::get('/getyearsWaste', [sustainWasteController::class, 'getyears']);
    Route::get('/getyearsProduction', [sustainProductionController::class, 'getyears']);

    Route::delete('/YearDelete/{year}', [sustainController::class, 'YearDelete']);
    Route::delete('/WaterYearDelete/{year}', [sustainWaterController::class, 'YearDelete']);
    Route::delete('/WaterYearDelete/{year}', [sustainWasteController::class, 'YearDelete']);
    Route::delete('/WaterYearDelete/{year}', [sustainProductionController::class, 'YearDelete']);

    
    Route::get('/updateYear/{year}', [sustainController::class, 'updateYear']);
    Route::get('/updateYearWater/{year}', [sustainWaterController::class, 'updateYear']);
    Route::get('/updateYearWaste/{year}', [sustainWasteController::class, 'updateYear']);
    Route::get('/updateYearProduction/{year}', [sustainProductionController::class, 'updateYear']);


    // energy source
    Route::get('/getenSus/{year}', [sustainController::class, 'getenSus']);
    Route::post('/engStore', [sustainController::class, 'engStore']);
    Route::get('/energySelect/{id}', [sustainController::class, 'energySelect']);
    Route::patch('/updateEnergy/{id}', [sustainController::class, 'updateEnergy']); 
    Route::delete('/EnergyDelete/{id}', [sustainController::class, 'EnergyDelete']);



    // water
    Route::get('/getWater/{year}', [sustainWaterController::class, 'getWater']);
    Route::post('/waterStore', [sustainWaterController::class, 'waterStore']);
    Route::get('/waterSelect/{id}', [sustainWaterController::class, 'waterSelect']);
    Route::patch('/updateWater/{id}', [sustainWaterController::class, 'updateWater']); 
    Route::delete('/waterDelete/{id}', [sustainWaterController::class, 'waterDelete']);

        // waste
    Route::get('/getWaste/{year}', [sustainWasteController::class, 'getWaste']);
    Route::post('/wasteStore', [sustainWasteController::class, 'wasteStore']);
    Route::get('/wasteSelect/{id}', [sustainWasteController::class, 'wasteSelect']);
    Route::patch('/updateWaste/{id}', [sustainWasteController::class, 'updateWaste']); 
    Route::delete('/wasterDelete/{id}', [sustainWasteController::class, 'wasterDelete']);

    // production
    Route::get('/getProduction/{year}', [sustainProductionController::class, 'getProduction']);
    Route::post('/productionStore', [sustainProductionController::class, 'productionStore']);
    Route::get('/productionSelect/{id}', [sustainProductionController::class, 'productionSelect']);
    Route::patch('/updateProduction/{id}', [sustainProductionController::class, 'updateProduction']); 
    Route::delete('/productionDelete/{id}', [sustainProductionController::class, 'productionDelete']);
    
    

    


    

    

    
    
   
   
    // myDetails
    Route::get('/myDetails/{name}', [myProfileontroller::class, 'index']);
