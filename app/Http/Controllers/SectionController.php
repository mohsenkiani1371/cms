<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section_types = ['features','tabs','prices', 'cards', 'faq', 'clients', 'posts'];
        $count = Section::count();
        $section = new Section;
        return view('sections.create_or_edit', compact('section_types', 'count', 'section'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Self::validation();
        Section::create($data);
        return redirect('home')->withMessage('بخش جدید به سایت اضافه شد.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        $section_types = ['features','tabs','prices', 'cards', 'faq', 'clients', 'posts'];
        return view('sections.create_or_edit', compact('section_types', 'section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $data = Self::validation();
        $section->update($data);
        return redirect('home')->withMessage('تغییرات اجزا و خصوصیات بخش انجام شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return back()->withMessage('بخش مورد نظر حذف شد.');
    }

    public function visibility(Section $section)
    {
        $section->visible = !$section->visible;
        $section->save();
        return back()->withMessage('وضعیت آشکار - پنهان تغییر کرد.');
    }

    public static function validation()
    {
        return request()->validate([
            'type' => 'required',
            'position' => 'required',
            'title' => 'nullable',
            'description' => 'nullable',
        ]);
    }
}
