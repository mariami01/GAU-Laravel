<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        // $books = books::latest()->paginate(5);
        // $books = DB::table('books')->simplePaginate(15);
        // return view('books.index',compact('books'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

        return view('books.index', [
            'books' => DB::table('books')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'page_amount' => 'required',
            'printing_house' => 'required',
            'price' => 'required',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Book $books
     * @return Application|Factory|View
     */
    public function show(Book $books)
    {
        return view('books.show',compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Book $books
     * @return Application|Factory|View
     */
    public function edit(Book $books)
    {
        return view('books.edit',compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Book $books
     * @return RedirectResponse
     */
    public function update(Request $request, Book $books)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'page_amount' => 'required',
            'printing_house' => 'required',
            'price' => 'required',
        ]);

        $books->update($request->all());

        return redirect()->route('books.index')
            ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Book $books
     * @return RedirectResponse
     */
    public function destroy(Book $books)
    {
        $books->delete();

        return redirect()->route('books.index')
            ->with('success','Post deleted successfully');
    }
}
