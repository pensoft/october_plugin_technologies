<?php namespace Pensoft\Technologies\Components;

use Cms\Classes\ComponentBase;
use Pensoft\Technologies\Models\Technology as TechnologyModel;

/**
 * Technology Component
 */
class Technology extends ComponentBase
{
    public $record;

    public function componentDetails()
    {
        return [
            'name'        => 'Technology Detail',
            'description' => 'Displays the details of a record.'
        ];
    }

    public function defineProperties()
    {
        return [
            'tag' => [
                'title'       => 'Tag',
                'description' => 'The tag of the record',
                'default'     => '{{ :tag }}',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->record = $this->loadRecord();
        $this->page['records'] = $this->record;
    }

    protected function loadRecord()
    {
        return TechnologyModel::with(['partners', 'profiles'])->where('tag', $this->property('tag'))->first();

    }
    
}
