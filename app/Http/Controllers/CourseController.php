<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $data['categories'] = CourseCategory::where('status', 1)->whereNull('deleted_at')->get();

        if($request->query('category')){
            $category = $request->category;
            $category_id = CourseCategory::where('slug', $category)->pluck('id')->first();
            $data['courses'] = Course::whereJsonContains('course_category_id', json_encode($category_id))->where('published', 1)->where('status', 1)->whereNull('deleted_at')->get();
        }elseif($request->query('query')){
            $query = $request->input('query');
            $data['courses'] = Course::where('description', 'like', '%' . $query . '%')->orWhere('short_description', 'like', '%' . $query . '%')
            ->orWhere('name_kh', 'like', '%' . $query . '%')->orWhere('name_en', 'like', '%' . $query . '%')->where('published', 1)->where('status', 1)->whereNull('deleted_at')->get();
        }else{
            $data['courses'] = Course::get();
        }


        return view('courses.index', $data);
    }
}
