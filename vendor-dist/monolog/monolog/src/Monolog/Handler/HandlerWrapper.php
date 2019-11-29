<?php

declare (strict_types=1);
/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NF_FU_VENDOR\Monolog\Handler;

use NF_FU_VENDOR\Monolog\ResettableInterface;
use NF_FU_VENDOR\Monolog\Formatter\FormatterInterface;
/**
 * This simple wrapper class can be used to extend handlers functionality.
 *
 * Example: A custom filtering that can be applied to any handler.
 *
 * Inherit from this class and override handle() like this:
 *
 *   public function handle(array $record)
 *   {
 *        if ($record meets certain conditions) {
 *            return false;
 *        }
 *        return $this->handler->handle($record);
 *   }
 *
 * @author Alexey Karapetov <alexey@karapetov.com>
 */
class HandlerWrapper implements \NF_FU_VENDOR\Monolog\Handler\HandlerInterface, \NF_FU_VENDOR\Monolog\Handler\ProcessableHandlerInterface, \NF_FU_VENDOR\Monolog\Handler\FormattableHandlerInterface, \NF_FU_VENDOR\Monolog\ResettableInterface
{
    /**
     * @var HandlerInterface
     */
    protected $handler;
    public function __construct(\NF_FU_VENDOR\Monolog\Handler\HandlerInterface $handler)
    {
        $this->handler = $handler;
    }
    /**
     * {@inheritdoc}
     */
    public function isHandling(array $record) : bool
    {
        return $this->handler->isHandling($record);
    }
    /**
     * {@inheritdoc}
     */
    public function handle(array $record) : bool
    {
        return $this->handler->handle($record);
    }
    /**
     * {@inheritdoc}
     */
    public function handleBatch(array $records) : void
    {
        $this->handler->handleBatch($records);
    }
    /**
     * {@inheritdoc}
     */
    public function close() : void
    {
        $this->handler->close();
    }
    /**
     * {@inheritdoc}
     */
    public function pushProcessor(callable $callback) : \NF_FU_VENDOR\Monolog\Handler\HandlerInterface
    {
        if ($this->handler instanceof \NF_FU_VENDOR\Monolog\Handler\ProcessableHandlerInterface) {
            $this->handler->pushProcessor($callback);
            return $this;
        }
        throw new \LogicException('The wrapped handler does not implement ' . \NF_FU_VENDOR\Monolog\Handler\ProcessableHandlerInterface::class);
    }
    /**
     * {@inheritdoc}
     */
    public function popProcessor() : callable
    {
        if ($this->handler instanceof \NF_FU_VENDOR\Monolog\Handler\ProcessableHandlerInterface) {
            return $this->handler->popProcessor();
        }
        throw new \LogicException('The wrapped handler does not implement ' . \NF_FU_VENDOR\Monolog\Handler\ProcessableHandlerInterface::class);
    }
    /**
     * {@inheritdoc}
     */
    public function setFormatter(\NF_FU_VENDOR\Monolog\Formatter\FormatterInterface $formatter) : \NF_FU_VENDOR\Monolog\Handler\HandlerInterface
    {
        if ($this->handler instanceof \NF_FU_VENDOR\Monolog\Handler\FormattableHandlerInterface) {
            $this->handler->setFormatter($formatter);
        }
        throw new \LogicException('The wrapped handler does not implement ' . \NF_FU_VENDOR\Monolog\Handler\FormattableHandlerInterface::class);
    }
    /**
     * {@inheritdoc}
     */
    public function getFormatter() : \NF_FU_VENDOR\Monolog\Formatter\FormatterInterface
    {
        if ($this->handler instanceof \NF_FU_VENDOR\Monolog\Handler\FormattableHandlerInterface) {
            return $this->handler->getFormatter();
        }
        throw new \LogicException('The wrapped handler does not implement ' . \NF_FU_VENDOR\Monolog\Handler\FormattableHandlerInterface::class);
    }
    public function reset()
    {
        if ($this->handler instanceof \NF_FU_VENDOR\Monolog\ResettableInterface) {
            return $this->handler->reset();
        }
    }
}
