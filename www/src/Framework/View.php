<?php

namespace Framework;

class View {
    public function render(string $template, array $data = []){
       $templatePath = $this->templateNameToPath($template, 'view');
       $path = dirname(__DIR__) . "/App/Views/$templatePath";
       echo $this->render_buffer($path,$data);
    }

    public function partial(string $partial, array $data = []){
        $partialPath = $this->templateNameToPath($partial, 'partial');
        $path = dirname(__DIR__) . "/App/Views/$partialPath";
        echo $this->render_buffer($path,$data);
    }

    public function render_buffer(string $path, array $data=[]){
        // var_dump($path);
        extract($data, EXTR_SKIP);

        ob_start();

        require $path;

        return ob_get_clean();
    }


    public function templateNameToPath(string $template, string $prefix = 'view'): string {
        return str_replace('.', '/', $template) . ".$prefix.php";
    } 
}