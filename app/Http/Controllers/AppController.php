<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\TaxonomyEntity;
use Carbon\Carbon;

class AppController extends Controller
{
    private $controllerType;
    protected $optionModel;
    protected $globalOptions;
    
    /**
     * Set up default items used in child controllers.
     * @param string $controllerType
     */
    public function __construct($controllerType)
    {
    	// Create instances of required models.
    	$this->optionModel = new Option;
        $this->taxonomyEntityModel = new TaxonomyEntity;

    	// Set controller type of child class.
    	$this->controllerType = $controllerType;

    	// Get default options and active page data.
        $this->globalOptions = $this->getGlobalConfig();
    }

    /**
     * Return Carbon formatted date.
     * @param string $dateString
     * @param string $format
     * @return string
     */
    protected function formatDate($dateString, $format = 'post')
    {
        // Create Carbon object and convert.
        $dt = Carbon::createFromFormat('Y-m-d H:i:s', $dateString);

        return $dt->toFormattedDateString();
    }

    /**
     * Get global config from the Option model.
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function getGlobalConfig()
    {
    	return $this->optionModel->getGlobalConfig();
    }
}
