<?php

namespace App\Http\Controllers;

//import Model "post"
use App\Models\crud2;
//return type View
use Illuminate\View\View;
//return type redirect response
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class crudController extends Controller
{
    /**
     * index
     * 
     * @return View
     * 
     */
    public function index(): View
    {
        //gets post
        $posts = crud2::latest()->paginate(5);

        //render view with post
        return view('crud.index', compact('posts'));
    }
    public function create(): View
    {
        return view('crud.create');
    }
    public function store(Request $request): RedirectResponse
    { 
        //validate form 
        $this->validate($request, [ 
        'foto' => 'required|image|mimes:jpeg,jpg,png|',  
        'nama' => 'required|' ,
        'jurusan' => 'required|', 
        'nohp' => 'required|' ,
        'email' => 'required|' ,
        'alamat' => 'required|'
        ]); 
         
        //upload image 
        $image = $request->file('foto'); 
        $image->storeAs('public/crud', $image->hashName()); 
         
        //create post 
        crud2::create([ 
        'foto' => $image->hashName(), 
        'nama' => $request->nama, 
        'jurusan' => $request->jurusan, 
        'nohp' => $request->nohp, 
        'email' => $request->email, 
        'alamat' => $request->alamat
        ]);
         //redirect to index
         return redirect()->route('crud.index')->with(['success' => 'Data Berhasil Tersimpan!']);
    }
    public function show(string $id)
    {
        //get post by id
        $post = crud2::findOrFail($id);

        //render view with post
        return view('crud.show',compact('post'));
    }
    public function destroy($id):RedirectResponse
    {
        //get id
        $post = crud2::findOrFail($id);

        //delete img
        Storage::delete('public/crud/'.$post->foto);

        //delete post
        $post->delete();

        //retun to index
        return redirect()->route('crud.index')->with(['success'=>'data berhasil dihapus!']);
    }
    public function edit(string $id):View
    {
         //get id
         $post = crud2::findOrFail($id);
        
         //render view with post
         return view('crud.edit',compact('post'));
    }
    public function update(Request $request, $id): RedirectResponse 
        { 
            //validate form 
            $this->validate($request, [ 
                'foto' => 'image|mimes:jpeg,jpg,png|',  
                'nama' => 'required|min:10' ,
                'jurusan' => 'required|min:10', 
                'nohp' => 'required|min:10' ,
                'email' => 'required|min:10' ,
                'alamat' => 'required|min:10'
                ]);            
            //get post by ID 
            $post = crud2::findOrFail($id); 
            //check if image is uploaded 
            if ($request->hasFile('foto')) { 
            //upload new image 
            $image = $request->file('foto'); 
            $image->storeAs('public/crud', $image->hashName()); 
            //delete old image 
            Storage::delete('public/crud/'.$post->foto); 
           
            //update post with new image 
            $post->update([ 
            'foto' => $image->hashName(), 
            'nama' => $request->nama, 
            'jurusan' => $request->jurusan, 
            'nohp' => $request->nohp, 
            'email' => $request->email, 
            'alamat' => $request->alamat
        ]); 
            } else {         
            //update post without image 
            $post->update([
                'nama' => $request->nama, 
                'jurusan' => $request->jurusan, 
                'nohp' => $request->nohp, 
                'email' => $request->email, 
                'alamat' => $request->alamat 
            ]); 
            
            }      
            //redirect to index 
            return redirect()->route('crud.index')->with(['success' => 'Data 
            Berhasil Diubah!']); 
        } 
}
