<?php

namespace App\Exceptions;

use Exception;
use RealRashid\SweetAlert\Facades\Alert;

class BusinessException extends Exception
{
    public function render()
    {
        Alert::error('اوووووووووبسس!!!!!', $this->getMessage());
        return back();
    }
}
