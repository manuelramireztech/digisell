<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    /*
      Document   : breadcrumbs_helper
      Created on : Apr 24, 2013, 9:45:24 AM
      Author     : mario
      Description: metodo criado para gerar breadcrumbs
     */
    
    function create_breadcrumb($way){
        /*
         * Recebe o caminho do controller, dá um exeplode para trasnformar em 
         * array.
         */
        $crumb = explode('/',$way);
        
        /*
         * coloca as primeiras letras de cada palavra em maiusculo e gera um 
         * link.
         */
        foreach ($crumb as $c):
            // pega o tamanho do array.
            $result = count($crumb);
            /*
             * se o array for menor ou igual a 1, entende que ele está no
             * controller raiz, e será linkado para o mesmo.
             */
            if($result<=1){
                $url_crumb[] = '<li><a href="">'.ucfirst($c).'</a></li>';
            }else{
                $url_crumb[] = '<li><a href="'.$c.'">'.ucfirst($c).'</a></li>';
            }
        endforeach;
        // da um implode adicionando '>' entre as palavras.
        $fim = implode('  ',$url_crumb);
        
        
        return $fim;
        
    }
?> 