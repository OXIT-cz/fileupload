<?php declare(strict_types = 1);

namespace Zet\FileUpload\Filter;

/**
 * Class VideoFilter
 *
 */
class VideoFilter extends BaseFilter
{

	/**
	 * Vrátí seznam povolených typů souborů s jejich typickou koncovkou.
	 *
	 * @example array("text/plain" => "txt")
	 * @return string[]
	 */
	protected function getMimeTypes(): array
	{
		return [
			'video/mp4' => 'mp4',
			'video/ogg' => 'ogg',
			'video/webm' => 'webm',
		];
	}

}
