<?php namespace Pensoft\Technologies\Components;

use Cms\Classes\ComponentBase;
use Pensoft\Technologies\Models\Technology;

class Technologies extends ComponentBase
{
    public $records;

    public function componentDetails()
    {
        return [
            'name'        => 'Technologies List',
            'description' => 'Displays a list of records.'
        ];
    }

    public function onRun()
    {
        $this->records = $this->loadRecords();
        $this->page['records'] = $this->records;
    }

    protected function loadRecords()
    {
        return Technology::orderBy('sort_order', 'asc')->get();
    }
}
