<?php

namespace AIMuseVendor\Illuminate\Support\Facades;

use AIMuseVendor\Illuminate\Contracts\Routing\ResponseFactory as ResponseFactoryContract;

/**
 * @method static \AIMuseVendor\Illuminate\Http\JsonResponse json(string|array $data = [], int $status = 200, array $headers = [], int $options = 0)
 * @method static \AIMuseVendor\Illuminate\Http\JsonResponse jsonp(string $callback, string|array $data = [], int $status = 200, array $headers = [], int $options = 0)
 * @method static \AIMuseVendor\Illuminate\Http\RedirectResponse redirectGuest(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
 * @method static \AIMuseVendor\Illuminate\Http\RedirectResponse redirectTo(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
 * @method static \AIMuseVendor\Illuminate\Http\RedirectResponse redirectToAction(string $action, mixed $parameters = [], int $status = 302, array $headers = [])
 * @method static \AIMuseVendor\Illuminate\Http\RedirectResponse redirectToIntended(string $default = '/', int $status = 302, array $headers = [], bool|null $secure = null)
 * @method static \AIMuseVendor\Illuminate\Http\RedirectResponse redirectToRoute(string $route, mixed $parameters = [], int $status = 302, array $headers = [])
 * @method static \AIMuseVendor\Illuminate\Http\Response make(array|string $content = '', int $status = 200, array $headers = [])
 * @method static \AIMuseVendor\Illuminate\Http\Response noContent($status = 204, array $headers = [])
 * @method static \AIMuseVendor\Illuminate\Http\Response view(string $view, array $data = [], int $status = 200, array $headers = [])
 * @method static \AIMuseVendor\Symfony\Component\HttpFoundation\BinaryFileResponse download(\SplFileInfo|string $file, string|null $name = null, array $headers = [], string|null $disposition = 'attachment')
 * @method static \AIMuseVendor\Symfony\Component\HttpFoundation\BinaryFileResponse file($file, array $headers = [])
 * @method static \AIMuseVendor\Symfony\Component\HttpFoundation\StreamedResponse stream(\Closure $callback, int $status = 200, array $headers = [])
 * @method static \AIMuseVendor\Symfony\Component\HttpFoundation\StreamedResponse streamDownload(\Closure $callback, string|null $name = null, array $headers = [], string|null $disposition = 'attachment')
 *
 * @see \AIMuseVendor\Illuminate\Contracts\Routing\ResponseFactory
 */
class Response extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ResponseFactoryContract::class;
    }
}
