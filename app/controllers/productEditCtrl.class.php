<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\productEditForm;

class productEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new productEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->name = ParamUtils::getFromRequest('name', true, 'Błędne wywołanie aplikacji');
        $this->form->description = ParamUtils::getFromRequest('description', true, 'Błędne wywołanie aplikacji');
        $this->form->quantity = ParamUtils::getFromRequest('quantity', true, 'Błędne wywołanie aplikacji');
        $this->form->weight = ParamUtils::getFromRequest('weight', true, 'Błędne wywołanie aplikacji');
        $this->form->color = ParamUtils::getFromRequest('color', true, 'Błędne wywołanie aplikacji');
        $this->form->price = ParamUtils::getFromRequest('price', true, 'Błędne wywołanie aplikacji');
        

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->name))) {
            Utils::addErrorMessage('Wprowadź imię');
        }
        if (empty(trim($this->form->description))) {
            Utils::addErrorMessage('Wprowadź nazwisko');
        }
                if (empty(trim($this->form->quantity))) {
            Utils::addErrorMessage('Wprowadź ilosc');
        }

                if (empty(trim($this->form->weight))) {
            Utils::addErrorMessage('Wprowadź wage');
        }
                if (empty(trim($this->form->color))) {
            Utils::addErrorMessage('Wprowadź kolor');
        }
                if (empty(trim($this->form->price))) {
            Utils::addErrorMessage('Wprowadź cene');
        }

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    

    public function action_productNew() {
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_productEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("product", "*", [
                    "idproduct" => $this->form->id
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->id = $record['idproduct'];
                $this->form->name = $record['name'];
                $this->form->description = $record['description'];
                $this->form->quantity = $record['quantity'];
                $this->form->weight = $record['weight'];
                $this->form->color = $record['color'];
                $this->form->price = $record['price'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }
    
        public function action_quantity_order() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("product", "*", [
                    "idproduct" => $this->form->id
                ]);
                $this->form->quantity_order = $record['quantity'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
    }

    public function action_productDelete() {
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("product", [
                    "idproduct" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('productList');
    }
    

    public function action_productSave() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {
                //2.1 Nowy rekord
                if ($this->form->id == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("product");
                    if ($count <= 500) {
                        App::getDB()->insert("product", [
                            "name" => $this->form->name,
                            "description" => $this->form->description,
                            "weight" => $this->form->weight,
                            "quantity" => $this->form->quantity,
                            "color" => $this->form->color,
                            "price" => $this->form->price
                        ]);
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                } else {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("product", [
                        "name" => $this->form->name,
                        "description" => $this->form->description,
                        "weight" => $this->form->weight,
                        "quantity" => $this->form->quantity,
                        "color" => $this->form->color,
                        "price" => $this->form->price
                            ], [
                        "idproduct" => $this->form->id
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
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('productEdit.tpl');
    }

}
