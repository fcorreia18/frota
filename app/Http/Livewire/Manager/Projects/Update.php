<?php

namespace App\Http\Livewire\Manager\Projects;

use App\Models\Company;
use App\Models\Project;
use Livewire\Component;
use App\Models\CompanyProjects;

class Update extends Component
{
    public object $groupCompany;
    public $projectId;
    public $project;

    public $name;
    public $description;
    public $start_date;
    public $status;
    public $errors = [];
    public $companies = [];

    public $selectedOptions = [];


    protected $rules = [
        'name' => 'required|string|min:3',
        'description' => 'required|string|min:4|max:300',
        'start_date' => 'required',
        'selectedOptions' => 'required'
    ];

    protected $messages = [
        'name.required' => 'O campo de nome é obrigatório.',
        'name.min' => 'O campo de nome deve ter pelo menos 3 caracteres.',
        'description.required' => 'O campo de descrição é obrigatório.',
        'description.min' => 'O campo de descrição deve ter pelo menos 4 caracteres.',
        'description.max' => 'O campo de descrição deve ter no máximo 300 caracteres.',
        'start_date.required' => 'O campo de data de início é obrigatório.',
        'selectedOptions.required' => 'Por favor selecione no mínimo uma empresa.',
    ];


    private function resetFields()
    {
        $this->name = "";
        $this->description = "";
        $this->start_date = "";
    }

    public function mount($projectId)
    {
        $this->projectId = $projectId;
        $project = Project::findOrFail($projectId);
        $this->project = $project;
        $this->name = $project->name;
        $this->description = $project->description;
        $this->start_date = $project->start_date;
        $this->status = $project->status;

        $companyProjects = CompanyProjects::where("id_project", $project->id)->get();

        foreach ($companyProjects as $association) {
            array_push($this->companies, Company::where("id", $association->id_company)->get());
        }

        foreach ($this->companies as $company => $values) {
            foreach ($values as $key => $value) {
                array_push($this->selectedOptions, $value);
            }
        }
        foreach ($this->selectedOptions as $novo) {
            array_push($this->selectedOptions, $value);
        }
        // array_replace($this->selectedOptions,$value);
        // print_r($this->selectedOptions);
        // exit;
        // // dd($this->companies);

    }
    public function updateProject()
    {

        $this->validate();

        try {
            if ($this->start_date > date("Y-m-d")) {
                $newProject =  Project::create([
                    'name' => $this->name,
                    'start_date' => $this->start_date,
                    'description' => $this->description,
                    'status' => "signed",
                ]);
                foreach ($this->selectedOptions as $ids) {
                    CompanyProjects::create([
                        'id_company' => $ids,
                        'id_project' => $newProject->id
                    ]);
                }
            } else {
                $newProject = Project::create([
                    'name' => $this->name,
                    'start_date' => $this->start_date,
                    'description' => $this->description,
                    'status' => "ongoing",
                ]);
                foreach ($this->selectedOptions as $ids) {
                    CompanyProjects::create([
                        'id_company' => $ids,
                        'id_project' => $newProject->id
                    ]);
                }
            }
        } catch (\Throwable $th) {
            array_push($this->errors, $th->getMessage());
            session()->flash('error',  $th->getMessage());
        }

        // Disparar o evento para atualizar a lista de grupo de empresas
        $this->emit('success', 'Projeto cadastrado com sucesso!');
        $this->resetFields();
    }


    public function render()
    {
        return view('livewire.manager.projects.update', ["project" => $this->project, "companies" => $this->companies])->layout("layouts.app.base");
    }
}
