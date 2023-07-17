<?php

require __DIR__ . './FileSystemInterface.php';

class MyfileSystem implements FileSystemInterface
{
    public function isExists(string $location): bool
    {
        return false;
    }

    public function isFile(string $location): bool
    {
        return false;
    }

    public function isDire(string $location): bool
    {
        return false;
    }

    public function copy(string $source, string $destination): void
    {
    }
    
    public function move(string $source, string $destination): void
    {
    }

    public function readFile(string $location): string
    {
        return 'false';
    }

    public function writeInFile(string $location, string $content): void
    {
        
    }
    
    public function printFilesAndDirectories(string $location): string
    {
        return 'false';
    }
    
    public function printFilesAndDirectoriesRecursivly(string $location): string
    {
        return 'false';
    }
}