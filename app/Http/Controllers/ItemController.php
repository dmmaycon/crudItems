<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itens = Item::all();
        return view('item.index', compact('itens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->image->store('public');
        }

        if (Item::create($data)) {
            return redirect()->route('item.index')
                             ->with('success', 'Item cadastrado com sucesso!');
        }
        return redirect()->route('item.index')
                             ->with('error', 'Erro ao cadastrar um novo item');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->image->store('public');
        }

        if ($item->update($data)) {
            return redirect()->route('item.index')
                             ->with('success', 'Item alterado com sucesso!');
        }
        return redirect()->route('item.index')
                             ->with('error', 'Erro ao alterar o item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if ($item->delete()) {
            return redirect()->route('item.index')
                             ->with('success', 'Item excluido com sucesso!');
        }
        return redirect()->route('item.index')
                             ->with('error', 'Erro ao excluir o item');
    }
}
