<?php

    Function generateFormFields(array $fields ,  int $cols ){
        $numFields = count($fields) -1;
        
        $r = $numFields / $cols ;
        $whole = floor($r); 
        $fraction = $r - $whole; 
        $rows = ($fraction > 0) ? $whole + 1 : $whole ;
        $n = 0;
        $html = '';
        for ($i=1; $i <= $rows ; $i++) { 
            $html .= '<div class="row">';
            for ($j=0; $j < $cols; $j++) { 
                $html .= '<div class="col-md-'.$cols.'>';
                if (isset($fields[$n])) {
                    $field = $fields[$n];
                    $field_ = formatCode($field) ;
                    $html .=''.
                            '   <div class="form-group">'.
                            '        <label class="control-label col-md-10" for="'. $field_ .'">'.
                            '        '. $field .''.
                            '        </label>  '.
                            '        <div class="col-md-10">'.
                            '            <input  id="'. $field_ .'"'.
                            '                    name="'. $field_ .'" '.
                            '                    placeholder="'. $field .'" '.
                            '                    type="text" '.
                            '                    class="form-control input-md" '.
                            '                    required>'.
                            '        </div>'.
                            '    </div>';
                    $n++;
                } else {
                    $html .= '';
                    $n++;
                }
                $html .= '</div>';
            }
            $html .= '</div>';
        }
        return $html;
    }

    function formatCode(String $cadena){
		
        //Reemplazamos la A y a
        $cadena = str_replace(
        array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
        array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
        $cadena
        );
    
        //Reemplazamos la E y e
        $cadena = str_replace(
        array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
        array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
        $cadena );
    
        //Reemplazamos la I y i
        $cadena = str_replace(
        array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
        array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
        $cadena );
    
        //Reemplazamos la O y o
        $cadena = str_replace(
        array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
        array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
        $cadena );
    
        //Reemplazamos la U y u
        $cadena = str_replace(
        array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
        array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
        $cadena );
    
        //Reemplazamos la N, n, C y c
        $cadena = str_replace(
        array('Ñ', 'ñ', 'Ç', 'ç'),
        array('N', 'n', 'C', 'c'),
        $cadena
        );
        
        return strtolower($cadena);
    }




