<?php



interface FileSystemInterface
{
    public function isExists(string $location): bool;

    public function isFile(string $location): bool;

    public function isDire(string $location): bool;

    public function copy(string $source, string $destination): void;
    
    public function move(string $source, string $destination): void;

    public function readFile(string $location): string;

    public function writeInFile(string $location, string $content): void;
    
    public function printFilesAndDirectories(string $location): string;
    
    public function printFilesAndDirectoriesRecursivly(string $location): string;
}
