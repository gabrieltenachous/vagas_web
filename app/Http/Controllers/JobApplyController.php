<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobApplyRequest;
use App\Mail\SendEmailMessage;
use App\Models\JobApply;
use App\Models\JobPosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class JobApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function create(String $slug)
    {
        $validator = Validator::make(compact('slug'), [
            'slug' => [
                'required',
                Rule::exists('job_postings')->where(function ($query) use ($slug) {
                    return $query->where('slug', $slug)->where('valid_through', '>=', now());
                }),
            ],
        ], [
            'slug.exists' => 'Que pena, está vaga já não está mais disponível.',
        ]);

        if ($validator->fails()) {
            return redirect(route('jobposting.index'))
                ->withErrors($validator);
        }
        $jobposting = JobPosting::where('slug', '=', $slug)->where('valid_through', '>=', now())->first(); 

        return view('jobapply.create', compact('jobposting','slug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobApplyRequest $request)
    {
        $getJobApply = JobApply::where('user_id', Auth::user()->id)->where('job_posting_id', $request->job_posting_id)->first();

        if (isset($getJobApply)) {
            $getJobApply->delete();
        }
        $jobApply = new JobApply();
        $salary_regex = preg_replace('/[^0-9]/', '', $request->salary_claim);
        $jobApply->salary_claim =  floatval($salary_regex);
        $jobApply->challenge_date = $request->challenge_date;
        $jobApply->user_id = Auth::user()->id;
        $jobApply->job_posting_id = $request->job_posting_id;
        if ($request->hasFile('curriculum')) {
            $filenameWithExt = $request->file('curriculum')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $fileName = preg_replace('/\s+/', '_', $fileName);
            $extensionFile = $request->file('curriculum')->getClientOriginalExtension();
            $fileToStore = $fileName . '_' . str_replace(' ', '_', microtime()) . '.' . $extensionFile;
            $curriculum = $request->file('curriculum')->storeAs("public/vagas", $fileToStore);
            $jobApply->curriculum = $curriculum;
            $jobApply->save();
            $jobApply->curriculum = "/storage/vagas/" . $fileToStore;
            $jobApply->save();
            
            Mail::to(Auth::user()->email)->send(new SendEmailMessage(Auth::user()));
            return redirect("/")->with('sucesses', 'Vaga enviado com sucesso! Agradeçemos e que em breve entraremos em contato.');
        }
        return redirect("/")->with('error', 'Erro ao enviar a vaga.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function show(JobApply $jobApply)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApply $jobApply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApply $jobApply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApply $jobApply)
    {
        //
    }
}
