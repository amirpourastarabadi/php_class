<?php

require __DIR__ . './FileSystemInterface.php';

class fileSystem implements FileSystemInterface{
    public function isExists(string $location):bool{
        return file_exists($location);
    }

    public function isFile(string $location):bool{
        return is_file($location);
    }

    public function isDire($location):bool{
        return is_dir($location);
    }

    public function copy(string $source , string $destination):void{
        copy($source , $destination);
    }

    public function move(string $source , string $destination):void{
        move($source,$destination);
    }

    public function readFile(string $location):string{
        $file = fopen($location,"r");
        echo fread($file,filesize($location));
        fclose($file);
    }

    public function writeInFile($location , string $content):void{
        $file = fopen($location , "w");
        fwrite($file,$content);
        fclose($file);
    }

    public function printFilesAndDirectories($location):string{
        $result = "";
        $list = scandir($location);

        foreach ($list as $key => $value) {
            $result += $location . "/" . $value . "/n";
        }
    }
}
