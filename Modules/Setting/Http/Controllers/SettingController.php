<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Menu;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $menu = Menu::all();
        return view('setting::index', compact('menu'));
    }

    public function newMenu(Request $request)
    {
        $file = $request->file('file');
        if (!$file) {
            return response()->json(['error' => 'No file found']);
        }

        $jsonString = $file->get();
        $data = json_decode($jsonString, true);
        $this->storeMenu($data['menu']);

        $menu = Menu::all();
        return view('setting::index', compact('menu'));
    }


    public function storeMenu(array $data): void
    {
        foreach ($data as $menuData) {
            $menu = new Menu([
                'name' => $menuData['name'],
                'icon' => $menuData['icon'],
                'url' => $menuData['url'] ?? null,
            ]);
            $menu->save();

            foreach ($menuData['submenu'] ?? [] as $submenuData) {
                $submenu = new Menu([
                    'name' => $submenuData['name'],
                    'icon' => $submenuData['icon'] ?? null,
                    'url' => $submenuData['url'] ?? null,
                    'parent_id' => $menu->id,
                ]);
                $submenu->save();

                foreach ($submenuData['submenu'] ?? [] as $subsubmenuData) {
                    $subsubmenu = new Menu([
                        'name' => $subsubmenuData['name'],
                        'icon' => $subsubmenuData['icon'] ?? null,
                        'url' => $subsubmenuData['url'] ?? null,
                        'parent_id' => $submenu->id,
                    ]);
                    $subsubmenu->save();
                }
            }
        }
    }

    public function newTab(Request $request)
    {
        $menus = $request->all();
        foreach ($menus as $menu) {
            $parent_id = null;
            if (isset($menu['parent_id'])) {
                $parentMenu = Menu::where('name', $menus[$menu['parent_id']]['name'])->first();
                $parent_id = $parentMenu->id;
            }

            $menuModel = new Menu();
            $menuModel->name = $menu['name'];
            $menuModel->icon = $menu['icon'];
            $menuModel->url = $menu['url'] ?? null;
            $menuModel->parent_id = $parent_id;
            $menuModel->save();
        }

        return response()->json(['success' => 'Menu created successfully']);
    }

    public function deleteTab($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        Menu::where('parent_id', $id)->delete();
        Menu::whereIn('parent_id', Menu::where('parent_id', $id)->pluck('id'))->delete();
    }

    public function updateTab(Request $request)
    {
        $menu = Menu::findOrFail($request->id);
        $menu->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'url' => $request->url
        ]);

        $menu = Menu::all();
        return redirect()->route('setting', compact('menu'));
    }

    public function newSubMenu(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'parent_id' => 'required|exists:menus,id',
            'url' => 'nullable|string',
        ]);

        $menu = new Menu();
        $menu->fill($data);
        $menu->save();

        $menuItems = Menu::all();
        return view('setting::index', compact('menuItems'));
    }
}
