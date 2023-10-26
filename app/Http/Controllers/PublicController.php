<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use App\Models\Personnel;
use App\Models\Utilities;
use App\Models\Voitures;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    protected $_voitureModel;
    protected $_utilitiesModel;
    protected $_gallerieModel;
    protected $_personnelsModel;
    
    public function __construct()
    {
        $this -> _voitureModel = new Voitures;
        $this -> _utilitiesModel = new Utilities;
        $this -> _gallerieModel = new Gallerie;
        $this -> _personnelsModel = new Personnel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voitures = $this -> _voitureModel -> getVoiture();
        $contacts = $this -> _utilitiesModel -> getContact();
        $personnels = $this -> _personnelsModel -> getPersonnel();
        $galleries = $this -> _gallerieModel -> getGalleries();
        $voitures = Voitures::paginate(15);
        // dd($voitures);
        // dd($contacts);
        // dd($personnels);
        return view('home', compact('voitures', 'contacts', 'personnels', 'galleries'));
    }

    public function catalogueV(){
        $voitures = $this -> _voitureModel -> getCatalogue();
        $voitures = Voitures::paginate(20);
        // dd($voitures);
        return view('catalogue', compact('voitures'));
    }

    public function contactF(){
        $contacts = $this -> _utilitiesModel -> getContact();
        // dd($contacts);
        return view('contact', compact('contacts'));
    }

    public function quisommeNous(){
        $contacts = $this -> _utilitiesModel -> getQuiSommesNous();
        return view('quisommesnous', compact('contacts'));
    }

    public function galleriesF(Request $request){
        $galleries = $this -> _gallerieModel -> getGalleries();
        $marque = $request -> input('marque', 'all');
        if ($marque === 'all') {
            $galleries = Gallerie::paginate(14);
        }else{
            $galleries = Gallerie::where('marque', $marque)->paginate(14);
        }
        // dd($galleries);
        return view('galleries', compact('galleries'));
    }

    public function personnelF(){
        $personnels = $this -> _personnelsModel -> getPersonnel();
        $personnels = Personnel::paginate(1);
        // dd($personnels);
        return view('personnel', compact('personnels'));
    }

    // public function detailVoitureF(Request $request,  $id){
    //     $voitures = $this -> _voitureModel -> getDetailVoitureById($id)->first();
    //     // dd($voitures);
    //     if (!$voitures) {
    //         abort(404);
    //     }
    //     return view('voituredetail')->with('voitures', $voitures);
    // }

    public function detailVoitureF(Request $request, $idv){
        $voitures = $this->_voitureModel->getVoitureById($idv);
        // dd($voitures);
        return view('voituredetail')->with('voitures', $voitures);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
