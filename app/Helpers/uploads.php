<?php

use Illuminate\Http\Request;

function store_file(Request $request, $fileName, $filePath) {
    if ($request->hasFile($fileName) && $request->file($fileName)->isValid()) {
        $name = uniqid(date('HisYmd'));
        $extension = $request->file($fileName)->extension();
        $filename = "{$name} . {$extension}";
        return $request->file($fileName)->storeAs($filePath, $filename);
    }
    return null;
}
