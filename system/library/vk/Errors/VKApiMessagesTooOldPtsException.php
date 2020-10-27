<?php


/**
 */
class VKApiMessagesTooOldPtsException extends VKApiException {

	/**
	 * VKApiMessagesTooOldPtsException constructor.
	 *
	 * @param VkApiError $error
	 */
	public function __construct(VkApiError $error) {
		parent::__construct(907, 'Value of ts or pts is too old', $error);
	}
}