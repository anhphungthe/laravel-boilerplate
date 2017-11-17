<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AdminUserServiceInterface;
use Spatie\Permission\Models\Role;

class IndexController extends Controller
{
	protected $adminUserService;

	public function __construct(
        AdminUserServiceInterface $adminUserService
    ) {
        $this->adminUserService = $adminUserService;
    }

    public function index()
    {
        return view('pages.admin.index', [
        ]);
    }
}
