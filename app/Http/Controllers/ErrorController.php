<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ErrorController extends Controller
{
   

public function indexlist($id)
{
    $category = Category::find($id);

    if (!$category) {
        // Redirection permanente (301) vers une autre URL
        return redirect()->route('fallback.route')->status(301);
    }

    // Redirection temporaire (303) vers une autre URL
    return redirect()->route('fallback.route')->status(303);
}
}
