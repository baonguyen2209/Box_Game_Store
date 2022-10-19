<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class AdminGameController extends Controller
{
    public function index()
    {
        $games = DB::table('game')->get();
        return view('admin.game.index', ['games' => $games]);
    }
    public function create()
    {
        return view('admin.game.create');
    }
    public function view($id)
    {
        $system = DB::table('system_requirement')->where('gameId', $id)->first();
        $category = DB::table('category')->where('gameId', $id)->get();
        $game = DB::table('game')->where('gameId', $id)->first();
        return view('admin.game.view', ['game' => $game, 'system' => $system, 'category' => $category]);
    }
    public function store(Request $request)
    {
        //Add new game
        $name_game = str_replace(' ', '_', $request->input('gameName'));
        $path_icon = public_path() . '/img/game/' . $name_game . '/icon';
        $path_gameplay = public_path() . '/img/game/' . $name_game . '/gameplay';
        File::makeDirectory($path_icon, 0777, true, true);
        File::makeDirectory($path_gameplay, 0777, true, true);
        $data_game = array();
        $data_game['gameId'] = $name_game;
        $data_game['description'] = $request->input('gameDescription');
        $data_game['price'] = $request->input('gamePrice');
        $data_game['release_date'] = $request->input('gameDate');
        $data_game['developer'] = $request->input('gameDeveloper');
        $data_game['developer_web'] = $request->input('developerWebsite');
        $data_game['icon'] = $request->input('icon');
        $getIcon = $request->file('icon');
        $getGameplay = $request->file('gameplay');
        if ($getIcon) {
            $get_name_picture = 'icon.jpg';
            $data_game['icon'] = "img/game/" . $name_game . "/icon/" . $get_name_picture;
            $getIcon->move("img/game/" . $name_game . "/icon/", $get_name_picture);
        }
        if ($getGameplay) {
            foreach ($getGameplay as $key => $value) {
                $get_name_picture = 'gameplay' . $name_game . $key . '.jpg';
                $value->move("img/game/" . $name_game . "/gameplay/", $get_name_picture);
            }
        }
        $data_game['gameplay'] = 'img/game/' . $name_game . '/gameplay/';
        //Add game category
        $data_category = $request->input('category');
        //Add game system requirement
        //Window version
        $data_system_requirement_win = array();
        $data_system_requirement_win['gameId'] = $name_game;
        $data_system_requirement_win['os'] = 'Windows';
        $data_system_requirement_win['version'] = $request->input('winOs');
        $data_system_requirement_win['chip'] = $request->input('winChipset');
        $data_system_requirement_win['ram'] = $request->input('winRam');
        $data_system_requirement_win['graphic'] = $request->input('winVga');
        $data_system_requirement_win['storage'] = $request->input('winStorage');
        //Mac version
        $data_system_requirement_mac = array();
        $data_system_requirement_mac['gameId'] = $name_game;
        $data_system_requirement_mac['os'] = 'Mac';
        $data_system_requirement_mac['version'] = $request->input('macOs');
        $data_system_requirement_mac['chip'] = $request->input('macChipset');
        $data_system_requirement_mac['ram'] = $request->input('macRam');
        $data_system_requirement_mac['graphic'] = $request->input('macVga');
        $data_system_requirement_mac['storage'] = $request->input('macStorage');
        if ($request->all()) {
            DB::table('game')->insert($data_game);
            foreach ($data_category as $value) {
                $data_game_category = array();
                $data_game_category['gameId'] = $name_game;
                $data_game_category['type'] = $value;
                DB::table('category')->insert($data_game_category);
            }
            DB::table('system_requirement')->insert($data_system_requirement_win);
            DB::table('system_requirement')->insert($data_system_requirement_mac);
            return redirect('admin/game/index');
        } else {
            return redirect('admin/game/create');
        }
    }
    public function delete($id)
    {
        $game = DB::table('game')->where('gameId', $id)->first();
        $path_game = public_path() . '/img/game/' . $game->gameId;
        File::deleteDirectory($path_game);
        DB::table('category')->where('gameId', $id)->delete();
        DB::table('system_requirement')->where('gameId', $id)->delete();
        DB::table('game')->where('gameId', $id)->delete();
        return redirect('admin/game/index')->with('success', "Delete game successfully!");
    }
}