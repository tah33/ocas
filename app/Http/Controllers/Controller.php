<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Default data variable for views
     */
    protected $data = [];
    
    /**
     * Class Constructor
     * @author DataTrix Team
     */
    public function __construct()
    {
        // Default variables
        $this->data = [
            'page_title' => 'Dashboard :: Restaurant Management',
            'page_header' => 'Restaurant Management',
            'page_desc' => '',
        ];

    }
}
