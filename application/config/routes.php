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


// Route fungsinya untuk memetakan ulang alamat URL sesuai kebutuhan

// Contoh 1
// Kita bisa memetakan URL http://localhost/ci3-course/artikel ke 
// http://localhost/ci3-course/blog
// Sehingga ketika kita mengakses http://localhost/ci3-course/artikel
// sama sajahttp://localhost/ci3-course/blog
// $route['artikel'] = 'blog';

// Contoh 2
// Di controller blog, kita sudah mempunyai fungsi lihat_detail(),
// route ini berfungsi memformat url sesuai kebutuhan, misalnya untuk 
// menyembunyikan lihat_detail di url
// Sebelumnya, untuk melihat detail berita kita akses: 
// http://localhost/ci3-course/blog/lihat_detail/traveling/1234
// sedangkan kita ingin seperti: 
// http://localhost/ci3-course/blog/traveling/2
// dimana traveling adalah kategori artikel dan 1234 adalah id artikel
// maka kita set rute:
// $route['blog/(:any)/(:num)'] = 'blog/lihat_detail/$1/$2';


// $route['pengumuman'] = 'pengumuman/edit';
$route['category/create'] = 'category/create';
$route['category/(:num)'] = 'category/artikel/$1';
$route['category/(:any)'] = 'category/index';
//$route['(:any)'] = 'admin/index';

// $route['blog/category/(:num)'] = 'category/artikel/$1';


$route['default_controller'] = 'home/indexx';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
