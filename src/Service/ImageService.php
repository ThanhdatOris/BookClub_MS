<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageService
{
    private $targetDirectory;

    public function __construct(string $targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $file): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
        $fileName = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        try {
            $file->move($this->targetDirectory, $fileName);
        } catch (FileException $e) {
            throw new \Exception('Có lỗi khi upload file. Vui lòng thử lại sau.');
        }

        return $fileName;
    }

    public function validateImage(UploadedFile $file): void
    {
        $maxSize = 5 * 1024 * 1024; // 5MB
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if ($file->getSize() > $maxSize) {
            throw new \Exception('Kích thước file không được vượt quá 5MB');
        }

        if (!in_array($file->getMimeType(), $allowedMimeTypes)) {
            throw new \Exception('Chỉ chấp nhận file ảnh định dạng JPG, PNG hoặc GIF');
        }
    }

    public function delete(string $filename): bool
    {
        $filePath = $this->targetDirectory . '/' . $filename;
        if (file_exists($filePath)) {
            return unlink($filePath);
        }
        return false;
    }

    public function getTargetDirectory(): string
    {
        return $this->targetDirectory;
    }
} 