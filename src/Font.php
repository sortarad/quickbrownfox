<?php

namespace Sortarad\QuickBrownFox;

use Illuminate\Support\Str;

class Font
{
	public $path;

	public $family;

	public $label;

	public $weight = 400;

	public $style = 'normal';

	public function __construct(string $path)
	{
		$this->path = $path;
		$this->family = Str::lower(pathinfo($path, PATHINFO_FILENAME));

		$this->setWeight($this->family);
		$this->setStyle($this->family);
	}
	
	/**
	 * Tries to set weight based on filename
	 *
	 * @param string $name
	 * @return void
	 */
	public function setWeight(string $name)
	{
		$weights = [
			100 => ['thin'],
			200 => ['extra', 'light'],
			300 => ['light'],
			400 => ['regular'],
			500 => ['medium'],
			600 => ['semi', 'bold'],
			700 => ['bold'],
			800 => ['extra', 'bold'],
			900 => ['black'],
		];

		foreach ($weights as $number => $label) {
			if (Str::containsAll($name, $label)) {
				$this->weight = $number;
				$this->label = Str::ucfirst(implode(' ', $label));
				break;
			}
		}
	}

	/**
	 * Tries to set style based on filename
	 *
	 * @param string $name
	 * @return void
	 */
	public function setStyle(string $name)
	{
		$italicExpressions = [
			'100i',
			'200i',
			'300i',
			'400i',
			'500i',
			'600i',
			'700i',
			'800i',
			'900i',
			'italic',
		];

		foreach ($italicExpressions as $expr) {
			if (Str::contains($name, $expr)) {
				$this->style = 'italic';
				break;
			}
		}
	}

	/**
	 * Get inline styles for the font.
	 *
	 * @return string
	 */
	public function getData() {
		return [
			'family' => $this->family,
			'style' => $this->style,
			'weight' => $this->weight,
		];
	}
}
