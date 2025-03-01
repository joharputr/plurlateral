<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
//  $route['event/about'] = 'pd_event/event/index/about';
//  $route['event/goal'] = 'pd_event/event/index/goal';
//  $route['event/speaker'] = 'pd_event/event/index/speaker';
// $route['event/administrative-arrangement'] = 'pd_event/event/index/readm';
// $route['event/contact-us'] = 'pd_event/event/index/contus';

$route['portal'] = 'pd_portal/home/index';
$route['portal/document'] = 'pd_portal/document/index';
$route['portal/document/tambah'] = 'pd_portal/document/tambah_document';
$route['portal/document/save'] = 'pd_portal/document/insert_document';
$route['portal/document/edit'] = 'pd_portal/document/update_dokumen';
$route['portal/document/hapus/(:num)'] = 'pd_portal/document/hapus_document/$1';
$route['portal/document/edit/(:num)'] = 'pd_portal/document/edit_document/$1';


//press
$route['portal/press'] = 'pd_portal/document/press';
$route['portal/press/tambah_press'] = 'pd_portal/document/tambah_press';
$route['portal/press/edit_press/(:num)'] = 'pd_portal/document/edit_press/$1';
$route['portal/press/insert_press'] = 'pd_portal/document/insert_press';
$route['portal/press/hapus_press/(:num)'] = 'pd_portal/document/hapus_press/$1';
$route['portal/press/edit_press'] = 'pd_portal/document/update_press';




//Event
$route['portal/event']= 'pd_portal/Kegiatan/index';
$route['portal/event/insert_kegiatan']= 'pd_portal/Kegiatan/insert_kegiatan';
$route['portal/event/tambah_kegiatan'] = 'pd_portal/Kegiatan/tambah_kegiatan';
$route['portal/event/edit_kegiatan']= 'pd_portal/Kegiatan/edit_kegiatan';
$route['portal/event/update_kegiatan/(:num)'] = 'pd_portal/Kegiatan/update_kegiatan/$1';
$route['portal/event/hapus_kegiatan/(:num)'] = 'pd_portal/Kegiatan/hapus_kegiatan/$1';


//Gambar
$route['portal/press/tambah_gambar/(:num)'] = 'pd_portal/document/tambah_gambar/$1';
$route['portal/press/insert_gambar']= 'pd_portal/Document/insert_gambar';
$route['portal/press/hapus_gambar/(:num)/(:num)']= 'pd_portal/Document/hapus_gambar/$1/$2';

//Resource
$route['portal/resource']= 'pd_portal/SumberDaya/index';
$route['portal/resource/add']= 'pd_portal/SumberDaya/add';
$route['portal/resource/hapus_resource/(:num)'] = 'pd_portal/SumberDaya/hapus_resource/$1';
$route['portal/resource/edit_resource/(:num)']= 'pd_portal/SumberDaya/edit_resource/$1';
$route['portal/resource/update_resource']= 'pd_portal/SumberDaya/update_resource';
// $route['portal/event/insert_kegiatan']= 'pd_portal/Kegiatan/insert_kegiatan';

$route['portal/login'] = 'pd_portal/login/index';
$route['portal/login/do_login'] = 'pd_portal/login/do_login';
$route['portal/login/logout'] = 'pd_portal/login/logout';

// $route['event/about'] = 'pd_event/event/index/about';
// $route['event/goal'] = 'pd_event/event/index/goal';

// $route['(:any)/international_event'] = 'pd_intern/intern_event/index';


