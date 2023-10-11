<?php namespace Pensoft\Technologies\Models;
use October\Rain\Database\Traits\Sortable;
use Model;

/**
 * Technology Model
 */
class Technology extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use Sortable;
    
    /**
     * @var string table associated with the model
     */
    public $table = 'pensoft_technologies_technologies';

    /**
     * @var array guarded attributes aren't mass assignable
     */
    protected $guarded = ['*'];

    /**
     * @var array fillable attributes are mass assignable
     */
    protected $fillable = [ ];

    /**
     * @var array rules for validation
     */
    public $rules = [];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [
        // 'sort_order' => 'integer'
    ];

    /**
     * @var array jsonable attribute names that are json encoded and decoded from the database
     */
    protected $jsonable = [];

    /**
     * @var array appends attributes to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array hidden attributes removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array dates attributes that should be mutated to dates
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array hasOne and other relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'partners' => [
            \Pensoft\Partners\Models\Partners::class,
            'table' => 'pensoft_technologies_partner_technology',
            'key' => 'technology_id',
            'otherKey' => 'partner_id'
        ],
        'profiles' => [
            \Pensoft\Cardprofiles\Models\Profiles::class,
            'table' => 'pensoft_technologies_technology_profiles',
            'key' => 'technology_id',
            'otherKey' => 'profile_id'
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'cover_photo' => 'System\Models\File'
    ];
    public $attachMany = [
    ];
}
