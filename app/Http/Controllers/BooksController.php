<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function index(){
        $books = Books::all();
        return response()->json($books, 200);
    }

    public function store(Request $request){
        $book = new Books();

        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->save();

        return response()->json([
            'message' => 'Book Added.'
        ], 201);
    }

    public function show($id){

        $book = Books::find($id);
        if(!empty($book)){
            return response()->json($book);
        }else{
            return response()->json([
                'error'=>'Book not found'
            ], 404);
        }

    }

    public function update(Request $request, $id){
        if(Books::where('id', $id)->exists()){
            $book = Books::find($id);
            $book->title = is_null($request->name) ? $book->name : $request->name;
            $book->author = is_null($request->author) ? $book->author : $request->author;
            $book->description = is_null($request->description) ? $book->description : $request->description;

            $book->save();
            return response()->json([
                'message'=> 'Book updated.'
            ], status: 200);
        }else{
            return response()->json([
                'error'=>'Book not found.'
            ], 404);
        }
    }

    public function delete($id){

        if(Books::where(column: 'id', operator: $id)->exists()){

            $book = Books::find(id: $id);
            $book->delete();

            return response()->json(data: [
                'message'=>'records deleted.'
            ], status: 202);
        }else{
            return response()->json(data: [
                'error'=>'Book not found.'
            ], status: 404);
        }

    }

}
