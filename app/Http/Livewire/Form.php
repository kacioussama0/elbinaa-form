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

    protected $listeners = ['checkrequa' => 'requirements'];


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

        $cities = \Illuminate\Support\Facades\DB::table('algeria_cities')->distinct('wilaya_name')->orderBy('wilaya_code')->get(['wilaya_name','wilaya_code']);
        $courses = Course::all();
        $allPlaces = $courses->sum('max-places');





        return view('livewire.form',compact('cities','courses','allPlaces'));
    }

    public function submit() {
        $validated = $this->validate();
        $validated['course_id'] = $this->course;
        $course = Course::find($this->course);
        if($course['max-places'] - count($course->forms) <= 0) {
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

    public function requirements() {
        if($this->course != ''){
            $course = Course::find($this->course)->requirements;
            return session()->flash('reqs' , $course);
        }

    }
}
