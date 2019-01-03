<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{	
	/**
     * Set up default items used in the model.
     */
    public function __construct() {
		//
	}

	/**
	 * Fetch all global options.
	 * @return\Illuminate\Database\Eloquent\Collection
	 */
	public function getGlobalConfig() 
	{
    	return Option::all();	
	}

	/**
	 * Generic method for returning an option value.
	 *
	 * @param string $optionName
	 * @return\Illuminate\Database\Eloquent\Collection
	 */
	public function getOptionValue($optionName)
	{
		return Option::where('option_name', $optionName)
			->get();
	}

	/**
	 * Prepare option data for viewing or saving.
	 *
	 * @param string $action
	 * @return array
	 */
	public function prepareOptionData($action = 'fetch')
	{
		// Depending on action, prepare for viewing or saving.
		return $action = 'fetch' ? $this->prepareOptionDataForViewing() : $this->prepareOptionDataForSaving();
	}

	/**
	 * Data needs to be prepared for easy front end use.
	 *
	 * @return Collection
	 */
	private function prepareOptionDataForViewing()
	{
		// Get raw option data.
		$optionData = Option::all();

		// Iterate through all options and convert to strings for the front end.
		$optionData->each(function($item, $key) {
			switch ($item->option_data_type) {
				case 'string':
				case 'integer':
					// Nothing to do, just set the value.
					$item->option_value_formatted = $item->option_value;
					break;

				case 'serialized':
					// Just unserialize to an array - let the controller decide what to do with the data.
					$item->option_value_formatted = unserialize($item->option_value);
					break;

				default:
					// Force cast to string if we don't know what it is.
					$item->option_value_formatted = (string) $item->option_value;
					break;
			}
		});

		return $optionData;
	}

	private function prepareOptionDataForSaving()
	{

	}
}