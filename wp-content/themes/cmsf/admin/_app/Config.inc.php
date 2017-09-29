<?php
//CONFIGURAÇÕES DA BASE DE DADOS ####################
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBSA', 'fogovirtual');

// DEFINE SERVIDOR DE E-MAIL ###############
define('MAILUSER', 'carlospinadjarfogo@gmail.com');
define('MAILPASS', 'mozerstar');
define('MAILPORT', '465'); //smtp
define('MAILHOST', 'smtp.gmail.com');

// DEFINE IDENTIDADE DO SITE ###############
//define('SITENAME', 'Fogo Virtual');
//define('SITEDESC', 'Sistema online onde voce pode dar a conhecer a sua empresa. E ficar ainda por dentro de tudo que aconteça na ilha do Fogo.');

// DEFINE A BASE DO SITE ###############
//define('BASE', 'http://localhost/tCCPROJETO/fogoVirtual');
//define('THEME', 'fogovirtual');
//define('INCLUDE_PATH', BASE . '/themes/' . THEME);//IMAGENS/MIDIA/CSS ENTRE OUTROS
//define('REQUIRE_PATH', 'themes\\'.THEME);//INCLUSAO DE FICHEIRO

//AUTO LOAD DE CLASSES  ####################
//
//
//
/*
function __autoload($Class) {
    $cDir = 'Models';
    $iDir = null;
    
        if(!$iDir && file_exists(__DIR__ ."\\{$cDir}\\{$Class}.class.php") && !is_dir(__DIR__ ."\\{$cDir}\\{$Class}.class.php")):
            include_once (__DIR__ ."\\{$cDir}\\{$Class}.class.php");
            $iDir = true;
        endif;
    if(!$iDir):
        trigger_error("Nao foi possivel incluir {$Class}.class.php", E_USER_ERROR);
        die;
    endif;      
}*/
/*
function __autoload($Class) {
    $cDir = ['Conn','Helpers','Models'];
    $iDir = null;
    
    foreach ($cDir as $dirName):
        if(!$iDir && file_exists(__DIR__ ."\\{$dirName}\\{$Class}.class.php") && !is_dir(__DIR__ ."\\{$dirName}\\{$Class}.class.php")):
            include_once (__DIR__ ."\\{$dirName}\\{$Class}.class.php");
            $iDir = true;
        endif;
    endforeach;
    
    if(!$iDir):
        trigger_error("Nao foi possivel incluir {$Class}.class.php", E_USER_ERROR);
        die;
    endif;      
}

/*
//TRATAMENTO DE ERROS     ####################
//CSS constantes :: Mensagens de Erro
define('WS_ACCEPT', 'accept');
define('WS_INFOR', 'infor');
define('WS_ALERT', 'alert');
define('WS_ERROR', 'error');

/*

//WSErro :: Exibe erros lançados :: Front
//$ErrNo Tipo de erro
function WSErro($ErrMsg, $ErrNo, $ErrDie = null) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    //echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class =\"ajax_close\"></span></p>";

    if ($ErrDie):
        die;
    endif;
}

/*

//PHPErro :: personaliza o gatilho do PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo )));
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b>Erro na linha: {$ErrLine} ::</b> {$ErrMsg}<br>";
    echo "<small>{$ErrFile}</small>";
    //echo "<span class =\"ajax_close\"></span></p>";

    if ($ErrNo == E_USER_ERROR):
        die;
    endif;
}

set_error_handler('PHPErro');

*/