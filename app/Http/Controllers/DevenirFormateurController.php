<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Demande;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;

class DevenirFormateurController extends Controller
{
    public function index()
    {
        return view("devenir_formateur");
    }

    public function store(Request $request)
    {
        $demande = $request->all();

        $validation = Validator($demande, [
            'nom' => 'string|required',
            'prenom' => 'string|required',
            'email' => 'email|required',
            'tel' => 'numeric|required',
            'photo' => 'string|nullable',
        ]);

        if ($validation->fails()) {
            return view("devenir_formateur")
                ->with("error", "Veillez remplir tous les champs!");
        }
        $formations = Formation::all();
        $categories = Categorie::all();
        $file = $request->file;
        $image_data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $file));

        $tmpFilePath=sys_get_temp_dir().'/'.uniqid();
        //write the image to it
        file_put_contents($tmpFilePath, $image_data);
        //move it.
        //give it a name

        $imageName = Str::random(12);
        //if using Symfony\Component\HttpFoundation\File\File;
        //get an instance of File from the temp file and call ->move on it
        $tmpFile=new File($tmpFilePath);
        $tmpFile->move(public_path('slider_uploads'), $imageName);
        //or if using File facade
        File::move($tmpFilePath, public_path("slider_uploads/$imageName"));

        var_dump($tmpFile);
        die();
        if($demande->save()){
            return redirect()
                ->route('home')
                ->with("formation", $formations)
                ->with("categories", $categories)
                ->with("success", "Votre a bien été prise en compte!");
        }else{
            return view("devenir_formateur")
                ->with("error", "Une erreur est survenue lors de l'enregistrement de votre demande");
        }

    }
}
