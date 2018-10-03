<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\Categorie;

class ContentController extends Controller
{
    protected $categories;
    protected $user;
    protected $user_count;

    public function __construct(Categorie $categorie, User $user)
    {
        $this->categories = $categorie;
        $this->user = $user;
        $this->user_count = $this->user::all()->count();
    }

    public function showAllCategory()
    {
        $categores = $this->categories->show();
        return view('admin.categores',
            [
                'categores' => $categores,
                'users_count'=>$this->user_count
            ]);
    }

    public function deleteCategory()
    {

    }

    public function addCategory()
    {
        $categores = $this->categories->show();
        return view('admin.addcategores',
            [
                'categores' => $categores,
                'users_count'=>$this->user_count
            ]);

    }

    public function editCategory($id)
    {
        $categores = $this->categories::where('id',$id)->first();
//        dd($categores);
        return view('admin.editcategores',
            [
                'categores' => $categores,
                'users_count'=>$this->user_count
            ]);

    }


    public function categoryAdd(Request $request)
    {
        $this->categories->add($request);
//        dd($request->all());
        return redirect(route('show.categores'));
    }

    public function categoryUpdate(Request $request,$id)
    {
        $categories = new Categorie();
        $categories = $categories::where('id',$id)->first();
//        dd($categories);
        $categories->update([
            'name' => $request->name,
        ]);
        return redirect(route('show.categores'));
    }

}
