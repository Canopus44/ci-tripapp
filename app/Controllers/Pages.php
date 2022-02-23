<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // En esta clase se pondran todas las páginas que sean estáticas, 
    // es decir, que no dependan de ningún controlador.
    // Por ejemplo, la página de inicio, la página de error 404, etc.   
    public function view($page)
    {
        /**
         * En esta función se cargará la página que se le pase por parámetro.         * 
         */
        
        if ($page == 'home') {
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $data['company'] = 'TripApp'; // Capitalize the first letter

            echo view('templates/header', $data);
            echo view('pages/' . $page, $data); // Loads "pages/home.php"
            echo view('templates/footer', $data);
        }  
        
        if ($page == 'features') {
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $data['company'] = 'TripApp'; // Capitalize the first letter

            echo view('templates/header', $data);
            echo view('pages/' . $page, $data); // Loads "pages/home.php"
            echo view('templates/footer', $data);
        }
        if ($page == 'pricing') {
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $data['company'] = 'TripApp'; // Capitalize the first letter

            echo view('templates/header', $data);
            echo view('pages/' . $page, $data); // Loads "pages/home.php"
            echo view('templates/footer', $data);
        }
        if ($page == 'faqs') {
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $data['company'] = 'TripApp'; // Capitalize the first letter

            echo view('templates/header', $data);
            echo view('pages/' . $page, $data); // Loads "pages/home.php"
            echo view('templates/footer', $data);
        }
        if ($page == 'about') {
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $data['company'] = 'TripApp'; // Capitalize the first letter

            echo view('templates/header', $data);
            echo view('pages/' . $page, $data); // Loads "pages/home.php"
            echo view('templates/footer', $data);
        }
    }   

}
