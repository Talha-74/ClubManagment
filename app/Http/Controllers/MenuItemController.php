<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuItemController extends Controller
{
    public function viewMenuItem()
    {
        $addMenuItem = MenuItem::get();
        return view('menu-items', ['addMenuItem' => $addMenuItem]);
    }

    public function create()
    {
        return view('Additems');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required',
            'image' => 'nullable|image'
        ]);

        $menuItems = new MenuItem();
        $menuItems->name = $data['name'];
        $menuItems->price = $data['price'];

        // image upload
        if ($request->hasFile('image')) {
            $image = $data['image'];
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/menu-items'), $imageName);
            $menuItems->image = 'images/menu-items/' . $imageName;
        }
        $menuItems->save();

        return redirect('menuitems');
    }

    // Edit Menu-item Form

    // display edit form
    public function edit($id)
    {
        $menuItem = MenuItem::find($id);
        return view('editMenuItem', compact('menuItem'));
    }

    // Update menu item
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required',
            'image' => 'nullable|image'
        ]);

        $menuItem = MenuItem::find($id);
        if ($request->hasFile('image')) {
            if ($menuItem->image) {
                // Delete the previous image from public directory
                Storage::disk('public')->delete('images/menu-items/' . basename($menuItem->image));
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/menu-items'), $imageName);
            $menuItem->image = 'images/menu-items/' . $imageName;
        }
        $menuItem->name = $data['name'];
        $menuItem->price = $data['price'];
        $menuItem->save();

        return redirect('menuitems');
    }

    // Delete Menu Item
    public function destroy($id)
    {
        $menuItem = MenuItem::find($id);

        // Check if the menu item exists
        if (!$menuItem) {
            // Handle the case where the menu item does not exist, e.g., show an error message or redirect.
            return redirect()->back()->with('error', 'Menu item not found');
        }

        // Delete the image item if it exists
        if ($menuItem->image) {
            Storage::disk('public')->delete('images/menu-items/' . basename($menuItem->image));
        }
        $menuItem->delete();

        return redirect('menuitems');
    }
}
