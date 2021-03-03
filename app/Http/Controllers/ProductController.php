<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreRequest;
use App\Rules\customrule;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\product1;
use PhpParser\Node\Stmt\TryCatch;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage', [
            'user' => auth()->user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('show.create', [
            'user' => auth()->user(),
        ]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
      
        $inputData = $request->all();

        // try {
            $product = product1::create([
                'user_id' => auth()->id(),
                'name' => $inputData['name'],
                'code' => $inputData['code'],
                'price' => $inputData['price'],
                'quantity' => $inputData['quantity'],
                'description' => $inputData['description'],
            ]);
            

            return redirect('/products/' . $product->id);
        // } catch (\Throwable $th) {
        //     dd('ok');
        //     return back()->with('status', 'Create failed!');;
        // }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show.show', [
            'product' => product1::findOrFail($id),
            'user' => auth()->user(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product1::find($id);
        $data = [
            'user' => auth()->user(),
            'product' => $product,
        ];

        return view('show.edit', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        $inputData = $request->all();
        $product = product1::find($id);

        try {
            $product->update([
                'name' => $inputData['name'],
                'code' => $inputData['code'],
                'price' => $inputData['price'],
                'quantity' => $inputData['quantity'],
                'description' => $inputData['description'],
            ]);

            return redirect('/products/' . $product->id);
        } catch (\Throwable $th) {
            return back()->with('status', 'Update failed!');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product1::find($id);

        try {
            $product->delete();

            return redirect('/products')->with('status', 'Delete Success!');
        } catch (\Throwable $th) {
            return back()->with('status', 'Delete Failure!');
        }
    }
}

