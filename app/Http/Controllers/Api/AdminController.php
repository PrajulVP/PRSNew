<?php

namespace App\Http\Controllers\Api;

use App\Services\AdminService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index()
    {
        $data = $this->adminService->getAdminIndexData();
        return response()->json($data);
    }
}
