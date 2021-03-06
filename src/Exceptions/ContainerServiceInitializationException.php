<?php

declare(strict_types=1);

namespace flotzilla\Container\Exceptions;

use Psr\Container\ContainerExceptionInterface;

class ContainerServiceInitializationException extends \InvalidArgumentException implements ContainerExceptionInterface
{
    /**
     * ContainerServiceInitializationException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception|null $prev
     */
    public function __construct(string $message, $code = 0, \Exception $prev = null)
    {
        $message = $message ?:  "Container {$message} not found";
        parent::__construct($message, $code, $prev);
    }
}
