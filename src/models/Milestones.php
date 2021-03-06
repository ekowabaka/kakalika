<?php
namespace kakalika\modules\milestones;

use ntentan\Model;

class Milestones extends Model
{
    public $belongsTo = array(
        'project'
    );
        
    public function __toString()
    {
        return "{$this->project->name}, {$this->name}";
    }
}
