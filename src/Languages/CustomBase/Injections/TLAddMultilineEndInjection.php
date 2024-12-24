<?php

declare(strict_types=1);

namespace Laravelsu\Highlight\Languages\CustomBase\Injections;

use Tempest\Highlight\Before;
use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Injection;
use Tempest\Highlight\ParsedInjection;

#[Before]
final readonly class TLAddMultilineEndInjection implements Injection
{
    public function parse(string $content, Highlighter $highlighter): ParsedInjection
    {
        preg_match_all('/(?<match>(.)*(\/\/|<\!\-\-|#) \[tl\! add\:end\]( \-\-\>)?)/', $content, $matches, PREG_OFFSET_CAPTURE);

        foreach ($matches['match'] as $match) {
            $matchedContent = $match[0];

            $close = ' +}';

            $parsedMatchedContent = str_replace(
                ['// [tl! add:end]', '<!-- [tl! add:end] -->', '# [tl! add:end]'],
                $close,
                $matchedContent,
            );

            $content = str_replace($matchedContent, $parsedMatchedContent, $content);
        }

        return new ParsedInjection($content);
    }
}
