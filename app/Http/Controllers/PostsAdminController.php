<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostsAdminController extends Controller
{

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function auth()
    {

    }

    public function index()
    {
        $posts = $this->post->paginate(5);
        return view('admin.posts.index',['posts'=>$posts]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        //pega o post criado
        $post = $this->post->create($request->all());
        $post->tags()->sync($this->gettagsId($request->tags)); //se não existe relação cria, se não existe mais remove, faz magica

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $post = $this->post->find($id);
        return view('admin.posts.edit',['post'=>$post]);

    }
    public function update($id,PostRequest $request)
    {
        $this->post->find($id)->update($request->all());
        $post = $this->post->find($id);
        $post->tags()->sync($this->gettagsId($request->tags));
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();
        return redirect()->route('admin.index');
    }

    private function gettagsId($tags)
    {
        $taglist = explode(',',$tags);
        $taglist = array_map('trim',$taglist);
        //precisa eliminar os campos vazios
        $taglist = array_filter($taglist);

        $tagsids = []; //criando um array vazio para usar de aux

        foreach ($taglist as $tagname)
        {
            $tagsids[] = Tag::firstOrCreate(['name' => $tagname])->id;
            //verifica se existe a tag no banco e devolve apenas o ID e se não existir ele cria e retorna o ID

        }

        return $tagsids;
    }

}
