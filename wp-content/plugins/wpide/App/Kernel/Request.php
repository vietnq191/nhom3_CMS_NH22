<?php

namespace WPIDE\App\Kernel;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class Request extends SymfonyRequest
{
    public function input($key, $default = null)
    {
        // first try GET, then POST
        $value = $this->get($key, $this->query->get($key));

        // then look into JSON content, fallback to default
        if ($value === null) {
            $content = json_decode((string) $this->getContent());
            $value = isset($content->{$key}) ? $content->{$key} : $default;
        }

        return $value;
    }

    public function all(): array
    {
        $params = [];

        // first look into JSON content
        $content = json_decode((string) $this->getContent());
        if (! empty($content)) {
            foreach ($content as $key => $param) {
                $params[$key] = $param;
            }
        }

        // then try (and override) with POST
        foreach ($this->request as $key => $param) {
            $params[$key] = $param;
        }

        // finally try (and override) with GET
        foreach ($this->query as $key => $param) {
            $params[$key] = $param;
        }

        return $params;
    }
}
