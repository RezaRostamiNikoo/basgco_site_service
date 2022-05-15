<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index(Request $request)
    {
        return $this->success(Site::all());
    }

    public function detail(Request $request, Site $site)
    {
        return $this->success($site);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "title" => "required|string",
        ]);
        return $this->success(Site::create($data));
    }

    public function update(Request $request, Site $site)
    {
        $data = $this->validate($request, [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "national_id" => "required|string|size:10",
        ]);
        $site->update($data);
        return $this->success($site);
    }

    public function delete(Request $request, Site $site)
    {
        $site->delete();
        return $this->success($site);
    }

}
