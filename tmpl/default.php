<?php defined('_JEXEC') or die;
use Joomla\CMS\Factory;
$doc = Factory::getDocument();
JHtml::_('jquery.framework');
// recibiendo parametros
$modocolor = $params->get("modecolor");
$content   = $params->get("contentcolor");

// estilos en linea
$style = 'body.dark {
   background-color:'.$modocolor.';
   color:'.$content.' ;
}
.radio-btn {
   width: 150px;
   height: 80px;
   padding: 10px;
   background-color: #27173a;
   border-radius: 50px;
   cursor: pointer;
   overflow: hidden;
}
.radio-btn .radio-inner {
   position: relative;
   width: 60px;
   height: 60px;
   background-color: #ffc207;
   border-radius: 50%;
   transition: all 0.6s;
}
';
$doc->addStyleDeclaration($style);
?>
<!-- etiqueta html para boton -->
<div id="boton" class="radio-btn">
        <div class="radio-inner"></div>
</div>
