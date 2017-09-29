<?php

/**
 * View.class [ HELPER MVC ]
 * Reponsável por carregar o template, povoar e exibir a view, povoar e incluir arquivos PHP no sistem.
 * Arquitetura MVC!
 * @copyright (c) 2016, Carlos Pina US
 */
class View {

    private $Data;
    private $Keys;
    private $Values;
    private $Template;

   
    
    public function Load($Template) {
        $this->Template = REQUIRE_PATH . DIRECTORY_SEPARATOR . '_tpl' . DIRECTORY_SEPARATOR . (string) $Template;
        $this->Template = file_get_contents($this->Template . '.tpl.html');
        return $this->Template;
    }

   
    public function Show(array $Data, $View) {
        $this->setKeys($Data);
        $this->setValues();
        $this->ShowView($View);
    }
    public function Request($File, array $Data) {
        extract($Data);
        require("{$File}.inc.php");
    }

    //Executa o tratamento dos campos para substituição de chaves na view.
    private function setKeys($Data) {
        $this->Data = $Data;
        $this->Data['HOME'] = BASE;

        $this->Keys = explode('&', '#' . implode("#&#", array_keys($this->Data)) . '#');
        $this->Keys[] = '#HOME#';
    }

    //Obtém os valores a serem inseridos nas chaves da view.
    private function setValues() {
        $this->Values = array_values($this->Data);
    }

    //Exibe o template view com echo!
    private function ShowView($View) {
        $this->Template = $View;
        echo str_replace($this->Keys, $this->Values, $this->Template);
    }

}
