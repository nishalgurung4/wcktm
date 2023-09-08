<?php
namespace Nishal\IocContainer\Containers;

use Psr\Container\ContainerInterface;
/**
 * Author: https://php.fyi/articles/php-ioc-container
 */
class Container implements ContainerInterface
{
    protected array $bindings = [];

    public function bind(string $id, string $namespace): Container
    {
        $this->bindings[$id] = $namespace;
        return $this;
    }

    public function singleton(string $id, object $instance): Container
    {
        $this->bindings[$id] = $instance;
        return $this;
    }
    
    public function get($id)
    {
        if ($this->has($id)) {
            return $this->bindings[$id];
        }
        throw new Exception("Container entry not found for: {$id}");
    }

    public function has($id): bool
    {
        return array_key_exists($id, $this->bindings);
    }

    public function resolve(string $namespace, array $args = []): object
    {
        return (new ClassResolver($this, $namespace, $args))->getInstance();
    }

    public function resolveMethod(object $instance, string $method, array $args = [])
    {
        return (new MethodResolver($this, $instance, $method, $args))->getValue();
    }
}