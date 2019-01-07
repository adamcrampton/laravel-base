<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Option;
use App\Models\Page;
use App\Models\TaxonomyEntity;
use Carbon\Carbon;

class AppController extends Controller
{
    protected $controllerType;
    protected $optionModel;
    protected $pageModel;
    protected $globalOptions;
    protected $menuData;
    protected $pageStatusTypes;
    
    /**
     * Set up default items used in child controllers.
     * @param string $controllerType
     */
    public function __construct($controllerType = 'App')
    {
        // Create instances of required models.
        $this->menuModel = new Menu;
        $this->optionModel = new Option;
        $this->pageModel = new Page;
        $this->taxonomyEntityModel = new TaxonomyEntity;

    	// Set controller type of child class.
    	$this->controllerType = $controllerType;

    	// Get default options and active page data.
        $this->globalOptions = $this->getGlobalConfig();

        // Get page status types.
        $this->pageStatusTypes = $this->getPageStatusTypes();
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

    /**
     * Get menu items from options table.
     *
     * @param string $menuType
     * @return array
     */
    protected function extractMenuItems($menuType)
    {
        // Fetch menu data.
        return unserialize($this->menuModel->getMenuData($menuType)->menu_items);
    }

    /**
     * Get page status types from options table.
     *
     * @return array
     */
    protected function getPageStatusTypes()
    {
        // Fetch page status types from options.
        return unserialize($this->optionModel->getOptionValue('page_status_types')->first()->option_value);
    }
}
