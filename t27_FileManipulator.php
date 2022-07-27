<!--Реализуйте описанный класс FileManipulator. Проверьте его работу.-->
<?php

class FileManipulator
{
    public function create($filePath)
    {
        file_put_contents($filePath, '');
    }

    public function delete($filePath)
    {
        unlink($filePath);
    }

    public function copy($filePath, $copyPath)
    {
        copy($filePath, $copyPath);
    }

    public function rename($filePath, $newName)
    {
        rename($filePath, $filePath . $newName);
    }

    public function replace($filePath, $newPath)
    {
        rename($filePath, $newPath);
    }

    public function weigh($filePath)
    {
        return filesize($filePath) . ' byte';
    }
}