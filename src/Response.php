<?php

namespace Softonic\GraphQL;

class Response
{
    public function __construct(private array $data, private array $errors = [], private array $dataObject = [], private array $headers = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return $this->errors !== [];
    }

    public function getDataObject(): array
    {
        return $this->dataObject;
    }
}
