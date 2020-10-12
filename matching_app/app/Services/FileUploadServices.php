<?php

namespace App\Services;

class FileUploadServices
{
  public static function fileUpload($imageFile){
    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

    
    $fileNameWithExt = $imageFile->getClientOriginalName();


    $extension = $imageFile->getClientOriginalExtension();

    $fileNameToStore = $fileName.'_'.time().'.'.$extension;

    $fileData = file_get_contents($imageFile->getRealPath());

    $list = [$extension, $fileNameToStore, $fileData];

    return $list;

  }
  
}
