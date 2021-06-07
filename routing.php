<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('productList'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('productList',    'productListCtrl');
Utils::addRoute('productNew',     'productEditCtrl',	['pracownik','admin']);
Utils::addRoute('productEdit',    'productEditCtrl',	['pracownik','admin']);
Utils::addRoute('productSave',    'productEditCtrl',	['pracownik','admin']);
Utils::addRoute('productDelete',  'productEditCtrl',	['pracownik','admin']);
Utils::addRoute('premium',    'premiumCtrl',	['premium','admin','pracownik']);
Utils::addRoute('premium',    'premiumCtrl');

Utils::addRoute('validateRegSave',    'registerEditCtrl');
Utils::addRoute('registerNew',     'registerEditCtrl');
Utils::addRoute('registerSave',    'registerEditCtrl');
Utils::addRoute('generateRegView',    'registerEditCtrl');

Utils::addRoute('addTocart',    'cartCtrl');
Utils::addRoute('addToQuantity',    'cartCtrl');
Utils::addRoute('clear_quantity',    'cartCtrl');
Utils::addRoute('cartDelete',    'cartCtrl');
Utils::addRoute('cart',    'cartCtrl');
Utils::addRoute('quantityplus',    'cartCtrl');
Utils::addRoute('ilosc',    'cartCtrl');
Utils::addRoute('cartDeleteAll',    'cartCtrl');

Utils::addRoute('addToHistory',    'historyCtrl');
Utils::addRoute('history',    'historyCtrl');
Utils::addRoute('date_of_purchase',    'historyCtrl');
Utils::addRoute('updateQuantityHistory',    'historyCtrl');
Utils::addRoute('updateBoughtPrice',    'historyCtrl');
Utils::addRoute('Total_paid',    'historyCtrl');






Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');  