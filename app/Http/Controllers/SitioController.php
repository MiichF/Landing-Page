<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{

    Public function contact($codigo = null){
         
            if ($codigo == "1234"){
        
                $nombre ='Paulina_Figueroa';
                $correo= 'miichfn@gmail.com';    
    
            }else{
                $nombre = null;
                $correo = null;
            
        }
        
        return view('contact', compact('nombre','correo','codigo'));
        }

        
    
}
