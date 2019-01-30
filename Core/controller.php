<?php
namespace Core;

class Controller
{
    protected function view($viewPaste, $viewName, $viewData = array())
    {
        if ($viewPaste == '') {
            include 'App/View/' . $viewName . '.php';
        } else {
            include 'App/View/'.$viewPaste.'/'. $viewName . '.php';
        }
    }

    protected function template($viewPaste, $viewName, $viewData = array())
    {
        include 'App/View/template.php';
    }

    protected function LoadViewTemplate($viewPaste, $viewName, $viewData = array())
    {
        extract($viewData);
        if ($viewPaste == '') {
            include 'App/View/' . $viewName . '.php';
        } else {
            include 'App/View/'.$viewPaste.'/'. $viewName . '.php';
        }
    }
    /*
    protected function renderAtributos($view ,$atributos = array())
    {
        if (file_exists($view)) {
            $html = file_get_contents($view);
            foreach ($atributos as $chaves => $valor) {
                $html = str_replace('{'.$chaves.'}', $valor, $html);
            }
        } else {
            $html = null;
        }
    }
    */
}