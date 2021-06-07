<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\historyForm;
use core\Validator;

class historyCtrl {

    private $form;
    private $records;

    public function __construct() {
        $this->form = new historyForm();
    }
    
    public function action_addToHistory() {       
            try {
                App::getDB()->insert("history", [
                    "id_user" => SessionUtils::load('id', true),
                    "idproduct" => ParamUtils::getFromCleanURL(1),
                     
                ]);

            Utils::addInfoMessage('Zamówienie przekazane do realizacji.');
            } 
            catch (\PDOException $e) {
            }

           $this->updateQuantityHistory();
           $this->updateBoughtPrice();
           $this->date_of_purchase();
           // USUNIECIE REKORDU PO POTWIERDZENIU PLATNOSCI
           App::getDB()->delete("cart", [
           "id_user" => SessionUtils::load('id', true),
           "idproduct" => ParamUtils::getFromCleanURL(1)
           ]);
           App::getRouter()->forwardTo('cart');


            
    }
    
    
        private function updateQuantityHistory(){
        $query = "UPDATE cart, history
        SET history.quantity_cart = cart.quantity_cart
        WHERE
        history.idproduct = cart.idproduct
        AND history.id_user = cart.id_user";
        $sth = App::getDB()->pdo->prepare($query);
        
        $sth->execute();
    }
    
            private function updateBoughtPrice(){
        $query = "UPDATE product, history, cart
        SET history.paid_price = product.price
        WHERE
        history.idproduct = product.idproduct
        AND history.id_user = cart.id_user";
        
        $sth = App::getDB()->pdo->prepare($query);
        
        $sth->execute();
        $this->Total_paid();
    }
                private function Total_paid(){
        $query = "UPDATE history SET total_price_history = paid_price*quantity_cart
        WHERE total_price_history = 0";
        $sth = App::getDB()->pdo->prepare($query);
        $sth->execute();
    }
                    private function date_of_purchase(){
        $query = "UPDATE `history` SET date_of_purchase = NOW()
        WHERE date_of_purchase = 0";
        $sth = App::getDB()->pdo->prepare($query);
        $sth->execute();
    }
    
    
public function action_history() {
        try {
            $this->historyczne = App::getDB()->select("history", [
                "[>]product" => ["idproduct" => "idproduct"]
                    ], [
                "history.idproduct",
                "quantity_cart",
                "history.quantity_cart","history.paid_price","history.total_price_history",
                "product.name",
                "history.date_of_purchase",        
                "product.description",     
                "product.quantity",
                "product.weight",       
                "product.color",
                "product.price" ], 
                ["history.id_user" => SessionUtils::load("id", true)]
                    );
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd połączenia z bazą danych!');
        }
        App::getSmarty()->assign('history', $this->historyczne);
        App::getSmarty()->display('history.tpl');
    }
    

}
