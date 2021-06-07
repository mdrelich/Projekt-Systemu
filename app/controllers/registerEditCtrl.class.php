<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\registerEditForm;
use core\SessionUtils;

class registerEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new registerEditForm();
    }

    
    public function validateRegSave() {
        $this->form->id_user = ParamUtils::getFromRequest('id_user', true, 'Błędne wywołanie aplikacji id_user');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji login');
        $this->form->password = ParamUtils::getFromRequest('password', true, 'Błędne wywołanie aplikacji password');
        $this->form->first_name = ParamUtils::getFromRequest('first_name', true, 'Błędne wywołanie aplikacji first_name');
        $this->form->second_name = ParamUtils::getFromRequest('second_name', true, 'Błędne wywołanie aplikacji second_name');
        $this->form->NIP = ParamUtils::getFromRequest('NIP', true, 'Błędne wywołanie aplikacji nip');

        if (App::getMessages()->isError())
            return false;
        
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź login');
        }
        if (empty(trim($this->form->password))) {
            Utils::addErrorMessage('Wprowadź hasło');
        }

        if (empty(trim($this->form->first_name))) {
            Utils::addErrorMessage('Podaj imię');
        }
        if (empty(trim($this->form->second_name))) {
            Utils::addErrorMessage('Podaj nazwisko');
        }


        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        return !App::getMessages()->isError();
    }
    

    public function action_registerNew() {
        $this->generateRegView();
    }


    public function action_registerSave() {

        if ($this->validateRegSave()) {
            // 2. Zapis danych w bazie
            try {
                $kupujacyRole_id = App::getDB()->get("role", "id_role", [
                'role' => 'kupujacy'
            ]);

                //2.1 Nowy rekord
                if ($this->form->id_user == '') {
                        App::getDB()->insert("users", [
                            "login" => $this->form->login,
                            "password" => $this->form->password,
                            "first_name" => $this->form->first_name,
                            "second_name" => $this->form->second_name,
                            'id_role' => $kupujacyRole_id,
                            "NIP" => $this->form->NIP
                        ]);
                        
                    } 
                
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('productList');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateRegView();
        }
    }

    
    public function generateRegView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('registerEdit.tpl');
    }

}
