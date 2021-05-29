<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(5);
        return view('admin.news.index', compact('news'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index')
            ->with('success', 'Xóa bài thành công.');
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required'
        ]);

        News::create($request->all());
        return redirect()->route('news.index')
            ->with('success', 'Thêm mới thành công.');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $news->update($request->all());
        return redirect()->route('news.index')
            ->with('success', 'Cập nhập thành công');
    }
}
