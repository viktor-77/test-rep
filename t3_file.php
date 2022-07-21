<!--Реализуйте описанный класс в соответствии с интерфейсом. Проверьте работу вашего класса.-->
<?php

interface iFile
{
    public function __construct($filePath);

    public function getPath(); // путь к файлу

    public function getDir();  // папка файла

    public function getName(); // имя файла

    public function getExt();  // расширение файла

    public function getSize(); // размер файла

    public function getText();          // получает текст файла

    public function setText($text);     // устанавливает текст файла

    public function appendText($text);  // добавляет текст в конец файла

    public function copy($copyPath);    // копирует файл

    public function delete();           // удаляет файл

    public function rename($newName);   // переименовывает файл

    public function replace($newPath);  // перемещает файл
}

class File implements iFile
{
    private $path;

    public function __construct($filePath)
    {
        $this->path = $filePath;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getText()
    {
        return file_get_contents($this->path);
    }

    public function getSize()
    {
        return filesize($this->path) . ' byte';
    }

    public function getName()
    {
        $pos = strrpos($this->path, '/');
        if ($pos || $pos === 0) {
            return substr($this->path, $pos + 1);
        } else {
            return $this->path;
        }
    }

    public function getExt()
    {
        $pos = strrpos($this->path, '.');
        return substr($this->path, $pos + 1);
    }

    public function appendText($text)
    {
        file_put_contents($this->path, file_get_contents($this->path) . $text);
    }

    public function rename($newName)
    {
        rename($this->path, $newName);
    }

    public function replace($newPath)
    {
        if (file_exists($newPath)) {
            rename($this->path, $newPath);
        }
    }

    public function delete()
    {
        unlink($this->path);
    }

    public function copy($copyPath)
    {
        copy($this->path, $copyPath);
    }

    public function getDir()
    {
        return dirname($this->path);
    }

    public function setText($text)
    {
        file_put_contents($this->path, $text);
    }
}
