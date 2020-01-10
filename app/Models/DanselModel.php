<?php namespace App\Models;

use CodeIgniter\Model;

class DanselModel extends Model
{
    protected $table = 'dansels';
    protected $primaryKey = 'id';

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['title', 'address', 'city', 'location_lat',
        'location_lng', 'opening_date', 'poya_date', 'opening_time', 'end_time',
        'time', 'category', 'description', 'organizing_team', 'organizing_number', 'image'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
