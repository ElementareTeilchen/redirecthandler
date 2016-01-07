<?php
namespace Neos\RedirectHandler;

/*
 * This file is part of the Neos.RedirectHandler package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * A Redirection DTO
 */
class Redirection
{
    /**
     * Relative URI path for which this redirect should be triggered
     *
     * @var string
     */
    protected $sourceUriPath;

    /**
     * Target URI path to which a redirect should be pointed
     *
     * @var string
     */
    protected $targetUriPath;

    /**
     * Status code to be send with the redirect header
     *
     * @var integer
     */
    protected $statusCode;

    /**
     * Host pattern
     *
     * @var string
     */
    protected $hostPattern;

    /**
     * @param string $sourceUriPath relative URI path for which a redirect should be triggered
     * @param string $targetUriPath target URI path to which a redirect should be pointed
     * @param integer $statusCode status code to be send with the redirect header
     * @param string $hostPattern host pattern to match the redirect
     */
    public function __construct($sourceUriPath, $targetUriPath, $statusCode = 301, $hostPattern = null)
    {
        $this->sourceUriPath = trim($sourceUriPath, '/');
        $this->targetUriPath = trim($targetUriPath, '/');
        $this->statusCode = (integer)$statusCode;
        $this->hostPattern = trim($hostPattern);
    }

    /**
     * @return string
     */
    public function getSourceUriPath()
    {
        return $this->sourceUriPath;
    }

    /**
     * @return string
     */
    public function getTargetUriPath()
    {
        return $this->targetUriPath;
    }

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getHostPattern()
    {
        return $this->hostPattern;
    }
}
