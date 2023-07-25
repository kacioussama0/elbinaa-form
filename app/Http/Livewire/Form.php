<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class Form extends Component
{
    public $first_name;
    public $last_name;
    public $dob;
    public $level;
    public $job;
    public $url;
    public $course;
    public $state;
    public $phone;
    public $email;

    public $places = 20;


    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'dob' => 'required',
        'level' => 'required',
        'course' => 'required',
        'email' => 'required|unique:forms',
        'url' => 'required',
        'state' => 'required',
        'job' => 'required',
        'phone' => 'required|min:10|max:10|unique:forms',
    ];

    public function render()
    {
        $places = $this->places;



        $cities = \Illuminate\Support\Facades\DB::table('algeria_cities')->distinct('wilaya_name')->orderBy('wilaya_code')->get(['wilaya_name','wilaya_code']);
        $courses = Course::all();
        $is_end = (count(\App\Models\Form::all()) / count($courses)) == $places;



        return view('livewire.form',compact('cities','courses','places','is_end'));
    }

    public function submit() {
        $validated = $this->validate();
        $validated['course_id'] = $this->course;
        $course = Course::find($this->course);
        if($this->places - count($course->forms) <= 0) {
            abort(401);
        }
        \App\Models\Form::create($validated);
        session()->flash('success', ' ');
        $this->first_name = '';
        $this->last_name = '';
        $this->dob = '';
        $this->state = '';
        $this->state = '';
        $this->url = '';
        $this->course = '';
        $this->level = '';
        $this->phone = '';
        $this->email = '';
    }
}
