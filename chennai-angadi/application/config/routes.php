<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'welcome';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;

// $route['default_controller'] = "welcome";
// $route['404_override'] = 'welcome/fournotfour';

// $route['cl/(:any)/(:num)']='welcome/categorylisting/$1/$2';
// $route['pl/(:any)/(:num)']='welcome/productlisting/$1/$2';
// $route['pd/(:any)/(:num)']='welcome/productdetailed/$1/$2';

// $route['pdtest']='welcometest/index';


// $route['checkout']='welcome/checkout';
// $route['billingInformation']='welcome/billingInformation';
// $route['order_review']='welcome/order_review';
// $route['payment_mode']='welcome/payment_mode';
// $route['home']='welcome/home';
// $route['profile'] = "welcome/profile";
$route['quick_purchase'] = "welcome/quick_purchase";

$route['products'] = 'welcome/products';

// $route['success'] = "welcome/success";
// $route['failure'] = "welcome/failure";

// $route['aboutus'] = "welcome/aboutus";
// $route['newarrials'] = "welcome/newarrials";
// $route['offers'] = "welcome/offers";
// $route['contactus'] = "welcome/contactus";
// $route['privacy-policy'] = "cart/privacy_policy";
// $route['terms-conditions'] = "cart/terms_conditions";

// $route['order-history'] = "welcome/orderHistory";
$route['productlisting/(:any)/(:any)']='welcome/productlisting/$i';

$route['signin']='ajax/signin';


/* New Routes */
$route['default_controller'] = "Home";
$route['404_override'] = 'Home/pageNotFound';

$route['home']='Home';
$route['aboutus'] = "Home/aboutus";
$route['newarrials'] = "Home/newArrivals";
$route['offers'] = "Home/offers";
$route['search'] = "Home/search";
$route['filterby'] = "Home/filterby";
$route['searchproducts'] = "Home/searchproducts";

$route['contactus'] = "Home/contactUs";
$route['privacy-policy'] = "Home/privacyPolicy";
$route['terms-conditions'] = "Home/termsConditions";

$route['cl/(:any)/(:num)']='frontend/Product/categoryWiseList/$1/$2';
$route['pl/(:any)/(:num)']='frontend/Product/subCategoryWiseList/$1/$2';
$route['pd/(:any)/(:num)']='frontend/Product/productDetail/$1/$2';



$route['cart'] = "frontend/Cart/index";
$route['cart/addcart'] = "frontend/Cart/addToCart";
$route['cart/updatecart'] = "frontend/Cart/updateCart";
$route['cart/deletecart/(:any)'] = "frontend/Cart/deleteCart/$1";


$route['checkout']='frontend/Checkout/index';
$route['cart/billingInformation']='frontend/Cart/billingInformation';
$route['billingInformation']='frontend/Checkout/billingInformation';
$route['order_review']='frontend/Checkout/orderReview';
$route['payment_mode']='frontend/Checkout/paymentMode';
$route['caseondelivery/(:any)'] = "frontend/Checkout/cashOnDelivery/$1";
$route['pay'] = "frontend/Checkout/payNow";
$route['webhook'] = "frontend/Checkout/webhook";

$route['success'] = "frontend/Checkout/success";
$route['failure'] = "frontend/Checkout/failure";

// User routes

$route['profile'] = "frontend/user/User/getProfile";
$route['order-history'] = "frontend/user/User/orderHistory";
$route['user/logout'] = "frontend/user/User/logout";
$route['user/register'] = "frontend/user/User/register";

// Ajax
$route['user/profile-update'] = "frontend/user/User/profileUpdate";
$route['user/quickview'] = "frontend/user/User/quickView";
$route['user/check_email'] = "frontend/user/User/checkEmail";
$route['user/login'] = "frontend/user/User/login";
$route['user/password-reset'] = "frontend/user/User/passwordReset";

$route['cart/applycoupon'] = "frontend/Cart/applyCoupon";
$route['cart/shipping'] = "frontend/Cart/shipping";

$route['cart/contact_email'] = "Home/contactEmail";

// Admin routes

$route['admin'] = "backend/admin/Admin";

$route['admin/dashboard'] = "backend/admin/Dashboard";
$route['admin/change-password'] = "backend/admin/Admin/changePassword";
$route['admin/change-password/(:num)'] = "backend/admin/Admin/changePassword/$1";

$route['admin/user/list'] = "backend/admin/User";
$route['admin/user/delete/(:num)'] = "backend/admin/User/delete/$1";

$route['admin/category/list'] = "backend/admin/Category";
$route['admin/category/add'] = "backend/admin/Category/add";
$route['admin/category/add/(:num)'] = "backend/admin/Category/add/$1";
$route['admin/category/delete/(:num)'] = "backend/admin/Category/delete/$1";


$route['admin/sub-category/list'] = "backend/admin/SubCategory";
$route['admin/sub-category/add'] = "backend/admin/SubCategory/add";
$route['admin/sub-category/add/(:num)'] = "backend/admin/SubCategory/add/$1";
$route['admin/sub-category/delete/(:num)'] = "backend/admin/SubCategory/delete/$1";

$route['admin/quantity/list'] = "backend/admin/Quantity";
$route['admin/quantity/add'] = "backend/admin/Quantity/add";
$route['admin/quantity/add/(:num)'] = "backend/admin/Quantity/add/$1";
$route['admin/quantity/delete/(:num)'] = "backend/admin/Quantity/delete/$1";

$route['admin/product/list'] = "backend/admin/Product";
$route['admin/product/add'] = "backend/admin/Product/add";
$route['admin/product/add/(:num)'] = "backend/admin/Product/add/$1";
$route['admin/product/unit/(:any)'] = "backend/admin/Product/unit/$1";
$route['admin/product/stock'] = "backend/admin/Product/stockList";
$route['admin/product/cost'] = "backend/admin/Product/costList";
$route['admin/product/delete/(:any)'] = "backend/admin/Product/delete/$1";

$route['admin/email/subscribers'] = "backend/admin/Email/subscriberList";
$route['admin/email/contact'] = "backend/admin/Email/contactList";

$route['admin/slider/list'] = "backend/admin/Slider";
$route['admin/slider/add'] = "backend/admin/Slider/add";
$route['admin/slider/add/(:num)'] = "backend/admin/Slider/add/$1";
$route['admin/slider/delete/(:num)'] = "backend/admin/Slider/delete/$1";

$route['admin/coupon/list'] = "backend/admin/Coupon";
$route['admin/coupon/add'] = "backend/admin/Coupon/add";
$route['admin/coupon/add/(:num)'] = "backend/admin/Coupon/add/$1";
$route['admin/coupon/delete/(:num)'] = "backend/admin/Coupon/delete/$1";

$route['admin/order/list'] = "backend/admin/Order";
$route['admin/order/view/(:num)'] = "backend/admin/Order/view/$1";
$route['admin/order/update-shipment-status/(:num)'] = "backend/admin/Order/updateShipmentStatus/$1";

$route['admin/logout'] = "backend/admin/Admin/logOut";

// Ajax
$route['admin/category/get-category'] = "backend/admin/Category/getCategory";



