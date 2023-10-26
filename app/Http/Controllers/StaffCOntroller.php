<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoitureRequest;
use App\Models\Voitures;
use Illuminate\Http\Request;

class StaffCOntroller extends Controller
{

    protected $_voitureModel;

    public function __construct()
    {
        $this -> _voitureModel = new Voitures;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.homestaff');
    }

    public function listV(){
        $voitures = $this -> _voitureModel -> getVoiture();
        // dd($voitures);
        $voitures = Voitures::paginate(8);
        return view('staff.listevoiture', compact('voitures'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profileF(){
        return view('staff.profile.profile');
    }

    public function editP(){
        return view('staff.profile.modifierprofile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    
     public function create()
    {
        return view('staff.addvoiture');
    }

    public function store(VoitureRequest $request)
    {
        $data = $request -> validated();
        if($request -> hasFile('image')){
            $imagePath = $request -> file('image')->store('', 'public');
            $data['image'] = $imagePath;
        }
        Voitures::create($data);
        return redirect()->route('list')->with('success', 'Votre voiture a été créè avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('staff.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
