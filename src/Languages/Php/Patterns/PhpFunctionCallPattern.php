<?php

declare(strict_types=1);

namespace Laravelsu\Highlight\Languages\Php\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenType;
use Tempest\Highlight\Tokens\DynamicTokenType;

final readonly class PhpFunctionCallPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '/[(^)| |>|:]?(?!\$)\b(?<match>[_\-a-z\w]+)\(/';
    }

    public function getTokenType(): TokenType
    {
        return new DynamicTokenType('hl-function');
    }
}
