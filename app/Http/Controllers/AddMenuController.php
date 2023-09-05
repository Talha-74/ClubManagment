<?php

namespace App\Http\Controllers;

use App\Models\AddMenu;
use Illuminate\Http\Request;

class AddMenuController extends Controller
{
    public function add_menu(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $addMenu = new AddMenu();
        $addMenu->name = $data['name'];
        $addMenu->price = $data['price'];

        $addMenu->save();
        return redirect('/menu');
}

public function create(){
    
    return view('AddMenu');
}
    public function viewMenu()
    {
        $addMenu = AddMenu::get();
        return view('menu', ['addMenu' => $addMenu]);
    }

    public function editmenu($id)
    {
        $editmenu = AddMenu::find($id);
        return view('editmenu', compact('editmenu'));
    }

    public function updateMenu(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|min:0.01'
        ]);

        $editmenu = AddMenu::find($id);
        $editmenu->name = $data['name'];
        $editmenu->price = $data['price'];
        $editmenu->save();
        return redirect('/menu');
        
    }
public function destroy($id) {
    $deletemenu = AddMenu::find($id);
    $deletemenu->delete();

    return redirect('menu');
}

}