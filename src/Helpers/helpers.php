<?php
/*
 * Render Check Captcha
 */
if(! function_exists('renderCheckCaptcha')){
    function renderCheckCaptcha($active = FALSE){
        $html = '';
        if($active == TRUE){
            $html .= '<div class="col-md-12">';
            $html .= '<div class="form-group">';
            $html .= '<label>Captcha</label><br>';
            $number1 = rand(1,9);
            $number2 = rand(1,9);
            $sum = $number1 + $number2;
            $html .= '<label>'.$number1.' + '.$number2.' = </label>';
            $html .= '<input required type="text" name="captcha" style="width: 50px;" />';
            $html .= '<input type="hidden" name="correctsum" value="'.$sum.'"/>';
            $html .= '</div>';
            $html .= '</div>';
        }
        return $html;
    }
}