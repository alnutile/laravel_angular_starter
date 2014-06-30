<?php

class DashboardController extends BaseController {

    public function index()
    {
        $users = [
            ["name" => "Test Not Mocked 1", "id" => 1],
            ["name" => "Test Not Mocked 2", "id" => 2],
            ["name" => "Test Not Mocked 3", "id" => 3]
        ];
        return Response::json(['data' => $users, 'message' => "All users"], 200);
    }
}
