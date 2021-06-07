<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\cartForm;
use core\Validator;

class cartCtrl {

    private $form;
    private $records;

    public function __construct() {
        $this->form = new cartForm();
    }
    
    public function action_addTocart() {       
            try {
                App::getDB()->insert("cart", [
                    "id_user" => SessionUtils::load('id', true),
                    "idproduct" => ParamUtils::getFromCleanURL(1)
                     
                ]);
            Utils::addInfoMessage('Dodano do koszyka! Do momentu realizacji zamówienia produkt będzie zarezerwowany.');
            } 
            catch (\PDOException $e) {
                
            }$this->action_addToQuantity();
            $this->ilosc();
            $this->quantityplus();
            $this->clear_quantity();
            App::getRouter()->forwardTo('productList');
            
    }
    
        private function quantityplus()
    {
        $query = "delete
        from cart using cart,
        cart e1
        where cart.id_cart > e1.id_cart
        and cart.idproduct = e1.idproduct
        and cart.id_user = e1.id_user;";
        $sth = App::getDB()->pdo->prepare($query);
        

        $sth->execute();
    }

            private function ilosc()
    {
          
        $query = "UPDATE cart, product, users, quantity_table
        SET cart.quantity_cart = cart.quantity_cart + 1,
        product.quantity = product.quantity - 1
        WHERE
        cart.idproduct = cart.idproduct
        AND cart.id_user = quantity_table.id_user
        AND cart.idproduct = quantity_table.idproduct
        AND product.idproduct = quantity_table.idproduct";
        
        
        $sth = App::getDB()->pdo->prepare($query);
        

        $sth->execute();
    }
    
    public function action_addToQuantity() {       
            try {
                App::getDB()->insert("quantity_table", [
                    "id_user" => SessionUtils::load('id', true),
                    "idproduct" => ParamUtils::getFromCleanURL(1)
 
                ]);
            } catch (\PDOException $e) {
                
            }      
    }
    
                private function clear_quantity()
    {
          
        $query = "delete from quantity_table";
        
        $sth = App::getDB()->pdo->prepare($query);

        $sth->execute();
    }
    
    
        public function action_cart() {

        try {
            $this->products = App::getDB()->select("cart", [
                "[>]product" => ["idproduct" => "idproduct"]
                    ], [
                "cart.id_cart",
                "cart.idproduct",
                "cart.quantity_cart",
                "cart.total_price",  
                "product.name",
                "product.description",
                "product.quantity",
                "product.weight",
                "product.color",
                "product.price"          
                    ], ["cart.id_user" => SessionUtils::load("id", true)
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd połączenia z bazą danych!');
        }

        App::getSmarty()->assign('product', $this->products);
        App::getSmarty()->display('cart.tpl');
    }
    
        public function action_cartDelete() {

            try {
                App::getDB()->delete("cart", [
                    "id_user" => SessionUtils::load('id', true),
                    "idproduct" => ParamUtils::getFromCleanURL(1)
                ]);
                Utils::addInfoMessage('Produkt usunięty');
            } catch (\PDOException $e) {
            }
             App::getRouter()->forwardTo('cart');

    }
    
            public function action_cartDeleteAll() {

            try {
                App::getDB()->delete("cart", [
                    "id_user" => SessionUtils::load('id', true)
                ]);
                Utils::addInfoMessage('Produkt zakupione');
            } catch (\PDOException $e) {
            }
             App::getRouter()->forwardTo('cart');
    }

}
