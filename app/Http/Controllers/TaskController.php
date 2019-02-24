<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    public function index()
    {
        $all = [
            [
                'id' => '1',
                'Tasktitle' => 'Tao project',
                'Content' => 'Tao project Laravel',
                'Created' => '2019-02'
            ],
            [
                'id' => '2',
                'Tasktitle' => 'Tao migration',
                'Content' => 'Tao mingration',
                'Created' => '2019-02'
            ],
            [
                'id' => '3',
                'Tasktitle' => 'Tao seeder',
                'Content' => 'Tao seeder',
                'Created' => '2019-02'
            ],
            [
                'id' => '4',
                'Tasktitle' => 'Cau lenh if',
                'Content' => 'Cau lenh if ',
                'Created' => '2019-02'
            ]
        ];
        return view('tasks.list', compact('all'));
    }
}