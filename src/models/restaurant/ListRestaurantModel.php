<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 * Copyright (c) 2023 by multiple authors                      *
 * Politechnika Śląska | Silesian University of Technology     *
 *                                                             *
 * Nazwa pliku: ListRestaurantModel.php                        *
 * Projekt: restaurant-project-php-si                          *
 * Data utworzenia: 2023-01-06, 19:58:50                       *
 * Autor: Miłosz Gilga                                         *
 *                                                             *
 * Ostatnia modyfikacja: 2024-06-08 00:48:11                   *
 * Modyfikowany przez: Miłosz Gilga                            *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace App\Models;

use App\Core\ResourceLoader;
use App\Services\Helpers\ImagesHelper;

ResourceLoader::load_service_helper('ImagesHelper');

class ListRestaurantModel
{
    public $id; // id z bazy danych
    public $name; // nazwa restauracji
    public $delivery_price; // koszt dostawy restauracji
    public $description; // opis restauracji
    public $baner_url; // zdjęcie baneru restauracji
    public $profile_url; // zdjęcie profilu restauracji
    public $dish_types; // typy potraw oferowane przez restaurację
    public $has_discounts; // posiada zniżki
    public $avg_delivery_time; // średni czas dostawy na podstawie wcześniejszych zamówień
    public $avg_grades; // średnia ocen restauracji
    public $total_grades; // wszystkich ocen restauracji
    public $is_closed; // jeśli zamknięta, mySQL zwraca 'zamknięta'
    public $grades_bts; // klasy bootstrapowe do ikon gwiazdek dla ocen restauracji
    public $opinions; // opinie użytkowników przypisane do konkretnej restauracji
    public $street_number; // ulica restauracji wraz z numerem lokalu
    public $city_post_code; // miasto wraz z kodem pocztowym
    public $phone_number; // numer telefonu do restauracji
    public $delivery_hours; // tablica z informacjami odnośnie godzin dostaw
    public $delivery_free; //darmowa dostawa

    public function __construct()
    {
        $this->grades_bts = ImagesHelper::generate_stars_definitions($this->avg_grades);
        $this->opinions = array();
        $this->delivery_hours = array();
    }
}
