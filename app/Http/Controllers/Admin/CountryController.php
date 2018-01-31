<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;

class CountryController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $countries = Country::all();
    $view = view('admin.countries.index');
    $view->with('countries',$countries);
    return $view;

  }

  public function create(){
    $view = view('admin.countries.create');
    return $view;

  }

  public function store(request $request){
    $countries = new Country();
    $countries->name = $request->get('name');
    $countries->code = $request->get('code');
    $countries->published = $request->get('published');
    $countries->user_created = 1;
    $countries->save();
    return redirect()->route('admin.countries.index');
  }

  public function edit($id){
$country = Country::find($id);
$view = view('admin.countries.edit');
$view->with('country',$country);
return $view;
}

  public function update(Request $request, $id){
    $countries = Country::find($id);
    $countries->name = $request->get('name');
    $countries->code = $request->get('code');
    $countries->published = $request->get('published');
    $countries->user_modified = 1;
    $countries->save();
    return redirect()->route('admin.countries.index');
  }

  public function show($id){
    $countries = Country::find($id);
    $view = view('admin.countries.show');
    $view->with('country',$countries);
    return $view;
  }

  public function delete($id){
    $countries = Country::find($id);
    $countries->delete();
    return redirect()->route('admin.countries.index');
  }
}
