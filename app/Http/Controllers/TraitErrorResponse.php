<?php

namespace App\Http\Controllers;


/**
 * summary
 */
trait TraitErrorResponse
{
    /**
     * summary
     */
    public function errorResponse400()
    {
        return response()->json(['error' => 'Data not found!'], 400);
    }
}