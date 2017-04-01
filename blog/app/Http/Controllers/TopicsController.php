<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;

class TopicsController extends Controller
{
    //
    public function index() {

        return view('pages.topics');
    }

    public function show() {

    	return view('pages.topic');
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {

    	return view('pages.create');
    }

    public function new_top() {

        //создать новую тему
    	$topic = new Topic;

        $topic->title = request('title');
        $topic->section = request('section');
        $topic->body = request('body');

    	//сохранить данные в БД
        $topic->save();

    	//перенаправить на свой профиль
        return redirect('/profile');
	}
}