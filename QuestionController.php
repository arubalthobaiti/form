<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Evaluters;
use App\Models\Projects;
use Illuminate\Http\Request;

// <?php



class QuestionController extends Controller
{

    public function add(Request $req)
    {
        // Validate the incoming request data
        $validated = $req->validate([
            'question' => 'required|string',
            'weight' => 'required|integer|min:1|max:100',
            'name' => 'required|string',
            'name_project' => 'required|string',
            'hackathon_id' => 'required|integer',
        ]);

        // Create a new question
        $question = new Questions;
        $question->question = $req->input('question');
        $question->weight = $req->input('weight');
        $question->hackathon_id = $req->input('hackathon_id'); // Assuming you pass hackathon_id from your form
        $question->save();

        // Create a new evaluator
        $evaluter = new Evaluters;
        $evaluter->name = $req->input('name');
        $evaluter->hackathon_id = $req->input('hackathon_id'); // Assuming you pass hackathon_id from your form
        $evaluter->save();

        // Create a new project
        $project = new Projects;
        $project->name_project = $req->input('name_project');
        $project->hackathon_id = $req->input('hackathon_id'); // Assuming you pass hackathon_id from your form
        $project->save();

        // Optionally, calculate total weight for the hackathon and handle exceeding 100

        // Redirect to a success page or return a response as needed
       
        foreach ($request->projects as $project) {
            Project::create(['name' => $project]);
        }
        foreach ($request->judges as $judge) {
            Evaluator::create(['name' => $judge]);
        }
        foreach ($request->question as $index => $question) {
            Question::create([
                    'question' => $question,
                    'weight' => $request->weight[$index],
                    'hackathon_id' => $request->hackathon_id,
                ]);
            }
    }
}
