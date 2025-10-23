<?php

namespace App\Http\Controllers\Api;

use App\Services\AdminService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Admin",
 *     description="Admin related operations"
 * )
 */
class AdminController extends Controller
{
    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    /**
     * @OA\Get(
     *     path="/api/admin",
     *     tags={"Admin"},
     *     summary="Get admin index data",
     *     security={{"apiAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Admin API index"),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthenticated."),
     *         ),
     *     ),
     * )
     */
    public function index()
    {
        $data = $this->adminService->getAdminIndexData();
        return response()->json($data);
    }
}
